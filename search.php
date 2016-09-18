<?php   require_once 'header.php';
@(int)$page = $_GET['page'] ? $_GET['page'] : '1';
$param = 'list?keyword='.$_GET['keyword'].'&page='.$page;
@$order = $_GET['order'] ? $_GET['order'] : 'x';
if( @$_GET['order']){
    $param = $param.'&order='.$_GET['order'];
}
$listAry = json_decode(http_curl_get( $param ) ,true);
//var_dump($listAry);
$listNums = $listAry['Count'];
if($listAry['Count'] == 0 || $listNums == 0){
    LocationTo('404.php');
}
$is_search = true;
?>
    <div class="container-fluid content isSearch">
        <?php require_once 'nav_header.php';?>
        <div class="row  custom-panel">
            <div class="col-xs-6 col-md-7">
                <div class="row-fluid menu-nav">
                    <a href="<?php echo getProcessUrl('search.php?keyword='.$keyword.'&page=1&order=x');?>" id="order-x" <?php if($order == 'x' || $order == '') echo 'class=selected';?>>Related</a>
                    <a href="<?php echo getProcessUrl('search.php?keyword='.$keyword.'&page=1&order=h');?>" id="order-h" <?php if($order == 'h') echo 'class=selected';?>>Download Heat</a>
                    <a href="<?php echo getProcessUrl('search.php?keyword='.$keyword.'&page=1&order=m');?>" id="order-m" <?php if($order == 'm') echo 'class=selected';?>>File Size</a>
                    <a href="<?php echo getProcessUrl('search.php?keyword='.$keyword.'&page=1&order=l');?>" id="order-l" <?php if($order == 'l') echo 'class=selected';?>>Creation Time</a>
                </div>
                <div id="list-panel">
                    <p id="search-count">Found <?php echo $listNums;?> items for <?php echo $keyword;?></p><br/>
                <?php foreach($listAry['Torrent'] as $k=>$v){    ?>
                    <h5><a href="<?php echo getProcessUrl('show.php?hash='.$v['Infohash']);?>" class="result-title"title="<?php echo $v['Name'];?>"><?php echo $v['Name'];?></a></h5>
                    By Size:<span class="listinfo"><?php echo getSize($v['Length']);?></span>
                    By Heat:<span class="listinfo"><?php echo $v['Heat'];?></span>
                    By Files:<span class="listinfo"><?php echo $v['FileCount'];?></span>
                    By Time:<span class="listinfo"><?php echo substr($v['CreateTime'],0,10);?></span>
                    <p></p><br>
                <?php }?>
                </div>
                <nav class="middle">
                    <?php 
                    $page_count = ceil($listNums / 20);
                    ?>
                    <ul class="pagination result-pagination">
    <?php if( $page > 1){
                echo '<li><a href="'.getProcessUrl('search.php?keyword='.$keyword.'&page='.($page-1).'&order='.$order).'" aria-label="Previous"><span>Previous</span></a></li>';
            }        
            $pagenav = '';
            $pagenav .= "Jump to <select name='topage' size='1' onchange=javascript:window.location=this.value>";
            for($i=1;$i<=$page_count;$i++){
                $jhref = getProcessUrl('search.php?keyword='.$keyword.'&page='.$i.'&order='.$order);
                if($i==$page) $pagenav.="<option value='$jhref' selected>$i</option>";
                else $pagenav.="<option value='".$jhref."'>$i</option>";
            }
            $pagenav .='</select>';
            echo '<li class="jjump">'.$pagenav.'</li>' ;
            
            if($page < $page_count){
                echo '<li><a href="'.getProcessUrl('search.php?keyword='.$keyword.'&page='.($page+1).'&order='.$order).'" aria-label="Next"><span>Next</span></a></li>';
            }
            echo "<li class='jjump'>{$page} / {$page_count} , Total Pages {$listNums} </li>";
    ?>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
<?php require_once 'footer.php';?>