<?php require_once 'header.php';

$recommendAry = json_decode(http_curl_get('recommend') ,true);

?>
    <div class="container-fluid content isIndex">

        <div class="row">
            <div class="col-xs-6 col-md-6">
                <div class="middle">
                    <div class="logo">
                        <a href="<?php echo DOMAIN_PATH;?>"><img src="<?php echo DOMAIN_PATH;?>assets/img/logo.jpg" alt="<?php echo TITLE;?>" /></a>
                    </div>
                    <div class="middle title">
                        <p><?php echo DESCRIPTION;?></p>
                    </div>
                    <div class="index-search">
                        <input type="text" class="form-control input-lg input-search square" id="search" name="q" placeholder="搜索电影，音乐，番号，软件 . . .">
                        <button type="submit" class="btn btn-lg btn-success square index-search-btn" onclick="onSearch(search,1,'')">搜索</button>
                    </div>
                    <div class="recommend" id="recommend-list">
                        <?php
                            $recommendNums = count($recommendAry);
                            for($i=0;$i<$recommendNums;$i++){
                                $recommendName = $recommendAry[$i]['Name'];
                                echo "<a href='".DOMAIN_PATH."search.php?keyword={$recommendName}&page=1&order=' title='{$recommendName}'><span>{$recommendName}</span></a>";
                            }
                        ?>
                    </div>
                </div>
                <div class="middle search">
                    
                </div>
            </div>
        </div>
    </div>
<?php require_once 'footer.php';?>