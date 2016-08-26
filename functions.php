<?php
if( !defined('Access') )die('Access Definded.');

function http_curl_get($url,$pre=API_PATH){
//    echo $pre.$url;
    //初始化
    $ch = curl_init();

    //设置选项，包括URL
    curl_setopt($ch, CURLOPT_URL, $pre.$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);

    //执行并获取HTML文档内容
    $output = curl_exec($ch);

    //释放curl句柄
    curl_close($ch);

    //打印获得的数据
    return $output;
}

function getSize($size) {
    if ($size > 1024 * 1024 * 1024) {
        return round(($size / 1024 / 1024 / 1024),2)."GB";
    }
    if ($size > 1024 * 1024) {
        return round(($size / 1024 / 1024),2)."MB";
    }
    if ($size > 1024) {
        return round(($size / 1024),2)."KB";
    }
    return round($size,2)."Byte";
}

function LocationTo($url,$pre=DOMAIN_PATH){
    header("Location: {$pre}{$url}");
    die();
}

function getProcessUrl($url){
    if( REWRITE ){
        $url = str_replace(array('.php','?','=','&'),array('','-','-','-'),$url);
        $url .= '.html';
        return DOMAIN_PATH.$url;
    }else   return DOMAIN_PATH.$url;
}