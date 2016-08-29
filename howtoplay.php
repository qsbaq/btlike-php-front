<?php   require_once 'header.php';
?>
    <div class="container-fluid content isSearch isAbout">
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
            <div class="col-xs-6 col-md-7">
                <div id="list-panel">
                    <p>
                    <?php echo TITLE;?> 不提供在线播放服务，您可以使用<a href="http://pan.baidu.com/" target="_blank">百度云</a>提供的播放服务。
                    </p>
                    <p>1. 搜索想看的电影，复制磁力链接：</p>
                    <img src="<?php echo DOMAIN_PATH;?>assets/img/1.png"><br>

                    <p>2. 打开百度云，依次选择“离线下载”、“新建磁力任务”</p>
                    <img src="<?php echo DOMAIN_PATH;?>assets/img/2.png"><br>
                    <img src="<?php echo DOMAIN_PATH;?>assets/img/3.png">

                    <p>3. 粘贴磁力链接，并点击“确定”，下载成功</p>
                    <img src="<?php echo DOMAIN_PATH;?>assets/img/4.png"><br>
                    <img src="<?php echo DOMAIN_PATH;?>assets/img/5.png">

                    <p>4. 点击播放</p>
                    <img src="<?php echo DOMAIN_PATH;?>assets/img/6.png">
                </div>
            </div>
        </div>
    </div>
<?php require_once 'footer.php';?>