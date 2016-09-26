<?php

/*******************************************************************
 * 请将本文件复制一份重命名为：config.php
 * ------------------------------------------------------------------ 
 * 与BTLike配套的前端页面
 * 作者:老季
 * 网址：http://www.jiloc.com
 * 安装完成后请手动配置修改以下参数
 */

// 定义标题
define('TITLE','BtLet');
// 定义描述
define('DESCRIPTION','BTMoster是收录最快，最全的bt搜索引擎。');
// 定义关键词
define('KEYWORDS','BT搜索,Magnet磁力搜索,电影下载,电视剧在线播放,在线观看');
// 定义域名路径
define('DOMAIN_PATH','//btlet.com/');
// 定义API路径
define('API_PATH','http://域名:8088/');
/* 是否启用Rewrite
 * true 启用
 * false 不启用
 */
define('REWRITE',true);

// 首页数据是否使用接口
define('INDEXPAGE_USE_API',0);

// 定义数据库地址
define('HOSTNAME','btlet.com');
// 定义数据库用户名
define('DBUSERNAME','数据库用户名');
// 数据库密码
define('DBPASSWD','数据库密码');
// 定义数据库名
define('DBNAME','数据库名');



// 定义友情链接
// 格式：网址=>网站名
$friendLink = array(
    '//btlet.com'           => 'BtLet',
    '//laoji.org'           => '老季博客',
    '//image.btlet.com'     => 'BtLet图床',
);


// 定义统计代码
define('STATISTICS', '
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?8016fa16dad7470ee591e138fb329fa2";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

');



/*-----------------------------------------------------------------------------------
 * 以下内容不用修改
 */
define('Access',true);
date_default_timezone_set('Asia/Shanghai'); 
try {
    $pdo = new PDO('mysql:host='.HOSTNAME.';dbname='.DBNAME, DBUSERNAME, DBPASSWD);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// 定义torrent表名
$TBAry = array('0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f');

