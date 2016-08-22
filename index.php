<?php require_once 'header.php';

$recommendAry = json_decode(http_curl_get('recommend') ,true);

?>
    <div class="container-fluid content">
        <div class="index-header">
            <nav>
                <!-- <a href="index.html"><img src="assets/img/header.jpg" /></a> -->
                <div class="navbar-right trend">
                  <a href="<?php echo DOMAIN_PATH;?>ranking.php">热门排行</a>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-3"></div>
            <div class="col-xs-6 col-md-6">
                <div class="middle">
                    <div class="logo">
                        <a href="<?php echo DOMAIN_PATH;?>"><img src="<?php echo DOMAIN_PATH;?>assets/img/logo.jpg" alt="<?php echo TITLE;?>" /></a>
                    </div>
                    <div class="middle title">
                        <p><?php echo DESCRIPTION;?></p>
                    </div>
                    <input type="text" class="form-control input-lg input-search square" id="search" name="q" placeholder="搜索电影，音乐，番号，软件 . . .">
                    <div class="recommend" id="recommend-list">
                        <?php
                            $recommendNums = count($recommendAry);
                            for($i=0;$i<$recommendNums;$i++){
                                $recommendName = $recommendAry[$i]['Name'];
                                echo "<a href='search.php?keyword={$recommendName}&page=1&order=' title='{$recommendName}'><span>{$recommendName}</span></a>";
                            }
                        ?>
                    </div>
                </div>
                <div class="middle search">
                    <button type="submit" class="btn btn-lg btn-success square index-search-btn" onclick="onSearch(search,1,'')">搜索</button>
                </div>
            </div>
            <div class="col-xs-6 col-md-3"></div>
        </div>
    </div>
<?php require_once 'footer.php';?>