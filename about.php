<?php   require_once 'header.php';
?>
    <div class="container-fluid content isSearch isAbout">
        <?php require_once 'nav_header.php';?>
        <div class="row  custom-panel">
            <div class="col-xs-6 col-md-7">
                <div id="list-panel">
                    <h2>概述</h2>
                    <ol>
                    <li><?php echo TITLE;?> 是一个简易的<a href="http://zh.wikipedia.org/zh/%E7%A3%81%E5%8A%9B%E9%93%BE%E6%8E%A5">磁力链接</a>搜索引擎，研究P2P文件过度分散问题时诞生于校园，相关算法已发表北大核心期刊论文一篇</li>
                    <li><?php echo TITLE;?> 通过 <a href="http://zh.wikipedia.org/zh/BitTorrent_(%E5%8D%8F%E8%AE%AE)">BitTorrent 协议</a>加入 DHT 网络（如迅雷网络），实时地发现网络中的文件，仅记录文件标题、大小、磁力链接等基本信息</li>
                    <li><?php echo TITLE;?> 服务器不缓存任何文件，不能识别文件的合法性及有效性，用户需自行鉴别内容</li>
                    <li><?php echo TITLE;?> 不向互联网上传任何文件，不提供 <a href="http://zh.wikipedia.org/zh/BitTorrent_tracker">Tracker 服务</a>，不提供预览文件或下载<a href="http://zh.wikipedia.org/wiki/%E7%A7%8D%E5%AD%90%E6%96%87%E4%BB%B6">种子</a>功能，是一个合法的系统</li>
                    </ol>
                    <h2>使用</h2>
                    <ol>
                    <li><?php echo TITLE;?> 索引的磁力链接，不能通过浏览器直接下载，需要<a href="http://www.xunlei.com/" target="_blank">迅雷</a>、<a href="http://xf.qq.com/">QQ旋风</a>、<a href="http://www.bitcomet.com/index-zh-cn.php">BitComet</a>等软件的支持</li>
                    <li><?php echo TITLE;?> 不提供任何图片预览或视频播放功能，您可以使用<a href="<?php echo DOMAIN_PATH;?>/howtoplay.php">百度云</a>播放电影</li>
                    <li><?php echo TITLE;?> 自动索引的链接，如果有版权归属和不良信息，请联系 service.btlet@gmail.com ，承诺在7个工作日内删除相关索引</li>
                    </ol>
                    <h2>结果</h2>
                    <ol>
                    <li><?php echo TITLE;?> 对一些搜索进行了初步过滤，屏蔽的词库还在不断扩充中，欢迎提交补充，帮助我们更好的完善系统</li>
                    <li><?php echo TITLE;?> 默认按搜索词进行精确匹配，搜索结果按文件相关度排序；如果没有匹配结果，则按模糊匹配排序</li>
                    </ol>
                    <h2>交流</h2>
                    <ol>
                    <li>邮&nbsp;&nbsp;&nbsp;&nbsp;箱：<a href="mailto:service.btlet@gmail.com">service.btlet@gmail.com</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
<?php require_once 'footer.php';?>