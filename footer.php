
    <footer class="footer middle">
        <div class="container">
            <p>如果 <?php echo TITLE;?> 索引的内容链接侵犯了您的权益，请联系 admin#btmoster.com (#改成@)，我们承诺在3个工作日内删除相关的索引链接。</p>
            <p class="text-muted">@2016 <a href="<?php echo DOMAIN_PATH;?>"><?php echo TITLE;?></a> <a href="<?php echo DOMAIN_PATH?>analytics.php">爬虫统计</a></p>
            <?php echo STATISTICS;?>
        </div>
    </footer>
    
    
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//cdn.bootcss.com/clipboard.js/1.5.10/clipboard.min.js"></script>

    <script type="text/javascript">
        function getUrlParameter(sParam) {
            var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : sParameterName[1];
                }
            }
        };        
        window.onload = function() {
            document.getElementById("search").focus();
        };
        $("#search").keypress(function() {
            if (event.which == 13) {
                onSearch(search, 1, "")
            }
        });
        function getApiAddress(){
            return "<?php echo API_PATH;?>";
        }
        
        function onSearch(id, page, order) {
            var keyword = $(id).val();
            console.log(keyword,1);
            if (keyword === "") {
                return;
            }
            console.log("search.php?keyword=" + keyword + "&page=" + page + "&order=" + order);
            window.location.href = "search.php?keyword=" + keyword + "&page=" + page + "&order=" + order;
        }
        
        var clipboard = new Clipboard('#btnCopy')
        clipboard.on('success', function(e) {
            $('#btnCopy').tooltip('show');
            setTimeout(sharedModal, 1000);
        })
        $('#btnCopy').on('hidden.bs.tooltip', function() {
            $('#btnCopy').tooltip('destroy');
        })

        window.onload = function() {
            document.getElementById("search").focus();
        };
        keyword = getUrlParameter("keyword")
        $("#search").val(keyword);
        $("#search").keypress(function() {
            if (event.which == 13) {
                onSearch(search, 1, "");
            }
        });
        
    </script>
    <script src="<?php echo DOMAIN_PATH;?>assets/js/core.js"></script>
    <script src="<?php echo DOMAIN_PATH;?>assets/js/list.js"></script>
    <script src="<?php echo DOMAIN_PATH;?>assets/js/string.js"></script>
</body>

</html>