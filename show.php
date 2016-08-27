<?php require_once 'header.php';
$hash = $singleAry['Infohash'];
$singleAry['Infohash'] = 'magnet:?xt=urn:btih:'.$singleAry['Infohash'];
?>
    <div class="container-fluid content isShow">
        <div class="header">
            <nav>
                <div class="navbar-header">
                    <a href="<?php echo DOMAIN_PATH;?>" title="<?php echo TITLE;?>"><img src="<?php echo DOMAIN_PATH;?>assets/img/logo.png" alt="<?php echo TITLE;?>" /></a>
                </div>
                <div class="collapse navbar-collapse">
                    <div class="navbar-form  search-title">
                        <input type="text" class="form-control input-md input-search square search-title-input" id="search" placeholder="搜索电影，音乐，番号，软件 . . .">
                        <button class="btn btn-md btn-success search-btn square" onclick="onSearch(search,1,'')">搜索</button>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row  custom-panel">
            <div class="col-xs-6 col-md-1"></div>
            <div class="col-xs-6 col-md-8">
                <div class="panel panel-default">
                    <div class="panel-body" id="list-panel">
                        <h4><b id="title"><a href="<?php echo getProcessUrl('show.php?hash='.$hash);?>" title="<?php echo $singleAry['Name'];?>"><?php echo $singleAry['Name'];?></a></b></h4>
                        <p></p>
                        </br>
                        <div class="panel panel-default">
                            <div class="panel-heading">磁力链接</div>
                            <div class="panel-body">
                                <a href="<?php echo $singleAry['Infohash'];?>" id="magnet" title="<?php echo $singleAry['Name'];?>"><?php echo $singleAry['Infohash'];?></a>
                                </br>
                                </br>
                                <button class="btn btn-success btn-md infohash-button square" data-clipboard-text="<?php echo $singleAry['Infohash'];?>" data-placement="bottom" id="btnCopy" title="已复制">
                                    复制链接
                                </button>
                                <a href="<?php echo $singleAry['Infohash'];?>" title="<?php echo $singleAry['Name'];?>下载" type="button" class="btn btn-md btn-success infohash-button square" id="download">立即下载</a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr>
                                <td class="active">文件大小</td>
                                <td class="active">文件数量</td>
                                <td class="active">创建时间</td>
                            </tr>
                            <tr>
                                <td id="length"><?php echo getSize($singleAry['Length']);?></td>
                                <td id="file-count"><?php echo $singleAry['FileCount'];?></td>
                                <td id="create-time"><?php echo substr($singleAry['CreateTime'],0,10);?></td>
                            </tr>
                        </table>

                        <div class="panel panel-default">
                            <div class="panel-heading">部分文件</div>
                            </p>
                            <ul id="file-list">
                                <?php foreach($singleAry['Files'] as $key => $val ){ ?>
                                <li><?php echo $val['Name'];?> (<?php echo getSize($val['Length']);?>)</li>
                                <?php }  ?>
                            </ul>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">下载、在线观看</div>
                            <div class="panel-body">
                                <p><b>在线观看：</b>请复制磁力链接，使用<a href="http://115.com/" target="_blank">115离线下载</a>，<a href="http://pan.baidu.com/" target="_blank">百度网盘离线下载</a>或<a href="http://xunlei.com/" target="_blank">迅雷边下边看</a></p>
                                </br>
                                <p><b>下载：</b>点击【立即下载按钮】就会自动开始下载，或手动复制磁力链接到下载工具， <a href="http://www.utorrent.com/" target="_blank">μTorrent，</a>
                                    <a href="http://www.bitcomet.com" target="_blank">BitComet，</a>
                                    <a href="http://xunlei.com/" target="_blank">迅雷</a>
                                </p>
                                </br>
                            </div>
                        </div>                      
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once 'footer.php';?>