<?php
/*
 * 用于数据统计爬虫数据
 * 可放入crontab执行
 * 使用方法 script.php?date='2016-08-20';
 */
require_once 'config.php';
require_once 'functions.php';

$date = $_GET['date'] ? $_GET['date'] : date('Y-m-d',time());



foreach($TBAry as $tKey => $tVal){
    $tb_name = 'torrent'.$tVal;
    $sql = "select count(id) from {$tb_name} where create_time LIKE '".$date."%'";
    $result = $pdo->query($sql);
    $rowsNumber += $result->fetchColumn();
}

// 查询是否有记录
$sql = "SELECT id from `analytics` WHERE a_time='".$date."'";
$result = $pdo->query($sql);
$insertId = $result->fetchColumn();

if( $insertId ){//更新原记录
    $sql = "UPDATE `analytics` set rows='{$rowsNumber}' WHERE id='{$insertId}'";
    $result = $pdo->query($sql);
    echo $date.'->'.$rowsNumber.' Update Finished.';        
}else{        
    //数据插入
    //准备SQL语句
    $sql = "INSERT INTO `analytics`(`a_time`,`rows`) VALUES (:a_time,:rows)";
    //调用prepare方法准备查询
    $stmt = $pdo->prepare($sql);
    //传递一个数组为预处理查询中的命名参数绑定值，并执行SQL
    $stmt->execute(array(':a_time' => $date,':rows'=>$rowsNumber));
    echo $date.'->'.$rowsNumber.' Add Finished.';
}

echo '<p><a href="'.DOMAIN_PATH.'">返回首页</a></p>';