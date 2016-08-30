<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <?php  require_once 'config.php';
            require_once 'functions.php';
            if( $_SERVER['PHP_SELF'] == '/about.php' ){
                $title= '关于_';  
            }elseif ( $_SERVER['PHP_SELF'] == '/howtoplay.php') {
                $title= '在线播放图文教程_';                  
            }elseif(@$_GET['hash']){
                $hash = $_GET['hash'];
                $singleAry = json_decode(http_curl_get( 'detail?id='.$hash ) ,true);
                $title = $singleAry['Name'].'_'.TITLE;
                $keywords = $singleAry['Name'].',';
            }elseif(@$_GET['keyword']){
                $keyword = $_GET['keyword'];
                $title = $keyword.'_'.TITLE;  
                $keywords = $keyword.',';
            }
            @$title .= TITLE.'-'.DESCRIPTION;
            @$keywords .= KEYWORDS;
    ?>
    <title><?php echo $title;?></title>
    <meta name="keywords" content="<?php echo $keywords;?>" />
    <meta name="description" content="<?php echo DESCRIPTION;?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="<?php echo DOMAIN_PATH;?>assets/css/core.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo DOMAIN_PATH;?>assets/img/favicon.ico" />
</head>
<body>
<!--
作者：老季
网址：http://www.jiloc.com/42558.html
日期：2016/8/25
-->

