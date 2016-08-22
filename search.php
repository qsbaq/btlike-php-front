<?php   require_once 'header.php';
(int)$page = $_GET['page'] ? '1' : $_GET['page'];
$param = 'list?keyword='.$_GET['keyword'].'&page='.$page;
if( $_GET['order'])
    $param = $param.'&order='.$_GET['order'];
$listAry = json_decode(http_curl_get( $param ) ,true);
//var_dump($listAry);
$listNums = count($listAry['Torrent']);
if($listAry['Count'] == 0 || $listNums == 0){
    LocationTo('404.php');
}
?>
    <script src="<?php echo DOMAIN_PATH;?>assets/js/list.js"></script>

    <div class="container-fluid content">
        <div class="header">
            <nav>
                <div class="navbar-header">
                    <!-- <h3 class="text-muted"><a href="index.html">Btlike</a></h3> -->
                    <a href="<?php echo DOMAIN_PATH;?>"><img src="<?php echo DOMAIN_PATH;?>assets/img/header.jpg" /></a>
                </div>
                <div class="collapse navbar-collapse">
                    <div class="navbar-form  search-title">
                        <input type="text" <?php if( $keyword ) echo "value='{$keyword}'";?> class="form-control input-md input-search square search-title-input" id="search" placeholder="搜索电影，音乐，番号，软件 . . .">
                        <button class="btn btn-md btn-success search-btn square" onclick="onSearch(search,1,'')">搜索</button>
                        <div class="navbar-right trend-list">
                            <a href="<?php echo DOMAIN_PATH;?>ranking.php">热门排行</a>
                        </div>
                    </div>
                </div>

            </nav>
        </div>
        <div class="row  custom-panel">
            <div class="col-xs-6 col-md-1"></div>
            <div class="col-xs-6 col-md-7">
                <div class="row-fluid menu-nav">
                    <a href="#" id="order-x">相关度</a>
                    <a href="#" id="order-h">下载热度</a>
                    <a href="#" id="order-m">文件大小</a>
                    <a href="#" id="order-l">创建时间</a>
                </div>
                </br>
                <div id="list-panel">
                    <p id="search-count">搜索到 <?php echo $listNums;?> 个相关BT资源</p>
                    </br>
                <?php foreach($listAry['Torrent'] as $k=>$v){    ?>
<!--                    <p><a href="search.php?id=<?php echo $v['Infohash'];?>" class="result-title"></a></p>-->
                    <h5><a href="<?php echo DOMAIN_PATH;?>show.php?hash=<?php echo $v['Infohash'];?>" class="result-title"title="<?php echo $v['Name'];?>"><?php echo $v['Name'];?></a></h5>
                    文件大小:<span class="listinfo"><?php echo getSize($v['Length']);?></span>
                    下载热度:<span class="listinfo"><?php echo $v['Heat'];?></span>
                    文件数:<span class="listinfo"><?php echo $v['FileCount'];?></span>
                    创建时间:<span class="listinfo"><?php echo substr($v['CreateTime'],0,2);?></span>
                    <p></p><br>
                <?php }?>
                </div>
                <nav class="middle">
                    <?php 
//                    $nums = ceil($listNums / 20);
//                    if( $nums > 10 ){
//                        $nums = 10;
//                    }
//                    for($i=0;$i<$nums;$i++){
//                        $pre_String .= "<li".( $i == $page ? "class='active'" : '' )."><a href='list.html?page={$page}'>".$page+$i."</a></li>";
//                    }
                    ?>
                    <ul class="pagination result-pagination">
                        <li>
                            <a href="#" aria-label="Previous" id="pre-page">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li id="next-page-li">
                            <a href="#" aria-label="Next" id="next-page">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-xs-6 col-md-4">
            </div>
        </div>
    </div>
<?php require_once 'footer.php';?>