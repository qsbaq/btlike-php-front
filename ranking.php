<?php require_once 'header.php';
$rankingAry = json_decode(http_curl_get('trend') ,true);
?>

    <div class="container-fluid content isRanking">
      <div class="header">
          <nav>
              <div class="navbar-header">
                  <!-- <h3 class="text-muted"><a href="index.html">Btlike</a></h3> -->
                  <a href="<?php echo DOMAIN_PATH;?>"><img src="<?php echo DOMAIN_PATH;?>assets/img/header.jpg" alt="<?php echo TITLE;?>" /></a>
              </div>
              <div class="collapse navbar-collapse">
                  <div class="navbar-form  search-title">
                      <input type="text" class="form-control input-md input-search square search-title-input" id="search" placeholder="搜索电影，音乐，番号，软件 . . .">
                      <button class="btn btn-md btn-success search-btn square" onclick="onSearch(search,1,'')">搜索</button>
                  </div>
              </div>

          </nav>
      </div>
        <div class="row">
            <div class="col-xs-6 col-md-1"></div>
            <div class="col-xs-6 col-md-10">
                <div class="panel panel-default about">
                    <div class="panel-heading">
                        <h3 class="panel-title">近期热门</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-condensed" id="trend-list">
                          <tr>
                            <td>编号</td>
                            <td>名称</td>
                            <td>下载热度</td>
                            <td>资源大小</td>
                            <td>创建时间</td>
                          </tr>
                        <?php
                        $rankingNums = count($rankingAry);
                        for($i=0;$i<$rankingNums;$i++){
                            $j = $i+1;
                            echo '<tr>';
                            echo "<td>{$j}</td>";
                            echo "<td><a href='".getProcessUrl('show.php?hash='.$rankingAry[$i]['ID'])."' title='{$rankingAry[$i]['Name']}'>{$rankingAry[$i]['Name']}</a></td>";
                            echo "<td>{$rankingAry[$i]['Heat']}</td>";
                            echo "<td>".getSize($rankingAry[$i]['Length'])."</td>";
                            echo "<td>".substr($rankingAry[$i]['CreateTime'],0,10)."</td>";                            
                            echo '</tr>';
                        }
                          
                          ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-1"></div>
        </div>
    </div>
<?php require_once 'footer.php';?>