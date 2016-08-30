<?php if( !defined('Access') )die('Access Definded.');?>
    <footer class="footer middle">
        <div class="container">
            <p>如果 <?php echo TITLE;?> 索引的内容链接侵犯了您的权益，请联系 admin#btlet.com (#改成@)，我们承诺在7个工作日内删除相关的索引链接。</p>
            <!--/友情链接开始-->
            <p>友情链接：<a href="//btlet.com" target="_blank">BtLet</a> <a href="//btfast.com" target="_blank">BTFast</a> </p>
            <!--/友情链接结束-->
            <p class="text-muted">@2016 <a href="<?php echo DOMAIN_PATH;?>"><?php echo TITLE;?></a> | <a href="<?php echo DOMAIN_PATH;?>about.php">关于</a> | <a href="<?php echo DOMAIN_PATH?>analytics.php">索引统计</a></p>
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
    <!--//暂停广告位
    <?php if(isMobile()){?>
        <script type="text/javascript" src="http://uc.qq.com.beijinghuaxin.cn/p-636-do"></script> 
    <?php }else{ ?>
        <script src="http://j.qiqiww.com/blog/showdetail.php?z=108873"></script>
    <?php } ?>
    -->
</body>
<!--
 * 开发：老季
 * 网址：http://www.jiloc.com/42558.html
 * 日期：2016/8/25
 * >>>本程序为开源作品，如发生法律纠纷与作者无关!<<<
-->
</html>