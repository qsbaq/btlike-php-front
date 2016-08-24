<?php
require_once 'config.php';
require_once 'functions.php';
/**
 * 作者：老季
 * 网址：http://www.jiloc.com/42558.html
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>爬虫索引统计_<?php echo TITLE;?></title>
<script type="text/javascript" src="http://cdn.hcharts.cn/jquery/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="http://cdn.hcharts.cn/highcharts/highcharts.js"></script>
<style>
.jads{ text-align: center;}
.jads table { margin: 0 auto; width: 600px;}
</style>
</head>

<body>
<div class="jads">
    
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<p>本页面仅作展示使用，请定时或手动运行<a href="<?php echo DOMAIN_PATH;?>script.php">script.php</a>页面进行统计更新</p>
<p><a href="<?php echo DOMAIN_PATH;?>">返回首页</a></p>

<table border="1">
  <tr>
    <td>时间</td>
    <td>索引</td>
  </tr>
<?php
$sql = "SELECT * FROM `analytics` ORDER BY a_time asc LIMIT 30";
$result = $pdo->prepare($sql);
$result->execute();
$aAray = $result->fetchAll();
$rNums = count($aAray);
$aDate = array();
$aRows = '';
$aAll = 0;
for ($i=0;$i<$rNums;$i++){
    $aDate[] = $aAray[$i]['a_time'];
    $aRows .= $aAray[$i]['rows'].',';
    $aAll += $aAray[$i]['rows'];
?>    
  <tr>
      <td><a href="<?php echo DOMAIN_PATH;?>script.php?date=<?php echo $aAray[$i]['a_time']?>"><?php echo $aAray[$i]['a_time']?></a></td>
    <td><?php echo number_format($aAray[$i]['rows']);?></td>
  </tr>
<?php } ?>    
    <tr>
        <td></td>
        <td>共计：<?php echo number_format($aAll);?></td>
    </tr>
</table>


</div>
</body>
<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        title: {
            text: '<?php echo TITLE;?>',
            x: -20 //center
        },
        subtitle: {
            text: 'Source: btmoster.com',
            x: -20
        },
        xAxis: {
            categories: <?php echo json_encode($aDate);?>
        },
        yAxis: {
            title: {
                text: ''
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'btmoster.com 爬虫',
            data: [<?php echo rtrim($aRows,',');?>]
        }]
    });
});
</script>
<?php echo STATISTICS;?>    
</html>