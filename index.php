<?php require_once 'header.php';
$recommendAry = json_decode(http_curl_get('recommend') ,true);
//$sql = 'select name from `recommend` LIMIT 20';
//$result = $pdo->prepare( $sql );
//$result->execute();
//$recommendAry = $result->fetchAll();
//var_dump($recommendAry);

?>
    <div class="container-fluid content isIndex">

        <div class="row">
            <div class="col-xs-6 col-md-6">
                <div class="middle">
                    <div class="logo">
                        <a href="<?php echo DOMAIN_PATH;?>" title="<?php echo TITLE;?>"><img src="<?php echo DOMAIN_PATH;?>assets/img/logo.png" alt="<?php echo TITLE;?>" /></a>
                    </div>
                    <div class="middle title">
                        <p><?php echo DESCRIPTION;?></p>
                    </div>
                    <div class="index-search">
                        <input type="text" class="form-control input-lg input-search square" id="search" name="q" placeholder="搜索电影，音乐，番号，软件 . . .">
                        <button type="submit" class="btn btn-lg btn-success square index-search-btn" onclick="onSearch(search,1,'x')">搜索</button>
                    </div>

                    <div class="recommend" id="recommend-list">
                        <?php
                            $recommendNums = count($recommendAry);
                            for($i=0;$i<$recommendNums;$i++){
                                $recommendName = $recommendAry[$i]['Name'];
                                echo "<a href='".getProcessUrl("search.php?keyword=".$recommendName)."' title='{$recommendName}'><span>{$recommendName}</span></a>";
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