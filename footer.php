<?php if( !defined('Access') )die('Access Definded.');?>
    <footer class="footer middle">
        <div class="container">
            <p>如果 <?php echo TITLE;?> 索引的内容链接侵犯了您的权益，请联系 admin#btmoster.com (#改成@)，我们承诺在3个工作日内删除相关的索引链接。</p>
            <p class="text-muted">@2016 <a href="<?php echo DOMAIN_PATH;?>"><?php echo TITLE;?></a> <a href="<?php echo DOMAIN_PATH;?>ranking.php">热门排行</a> <a href="<?php echo DOMAIN_PATH?>analytics.php">索引统计</a></p>
            <?php echo STATISTICS;?>
        </div>
    </footer>
    
    
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
            <script src="//cdn.bootcss.com/clipboard.js/1.5.10/clipboard.min.js"></script>

    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="<?php echo DOMAIN_PATH;?>assets/js/jquery.highlight.js"></script>
    <!--<script src="<?php echo DOMAIN_PATH;?>assets/js/string.js"></script>-->

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
            var keyword = $(id).val();
            console.log(keyword,1);
            if (keyword === "") {
                return;
            }
            var search = '<?php echo getProcessUrl('search.php?keyword={keyword}');?>';
            url = search.replace("{keyword}", keyword); 
            console.log( url );
            window.location.href = url;
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

</body>

</html>