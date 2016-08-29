<?php //
/*
 * 生成黑名单方法
 * 黑白名单变动后请运行本脚本~
 */
require_once 'config.php';
require_once 'functions.php';

//$wSql = "select name from WBList where is_white=1";
//$wResult = $pdo->prepare($wSql);
//$wResult->execute();
//$waAry = $wResult->fetchAll();
//$wAry = array();
//$bAry = array();
//foreach($waAry as $wkey => $wval){ 
//    $wAry[] = $wval['name'];
//}

$bSql = "select name from WBList where is_white=0";
$bResult = $pdo->prepare($bSql);
$bResult->execute();
$baAry = $bResult->fetchAll();
foreach($baAry as $bkey => $bval){
    $bAry[] = $bval['name'];
}

$wbAry = array('black_list'=>$bAry);
$jjson = json_encode($wbAry, JSON_UNESCAPED_UNICODE);

$dFile = 'wblist.json';
$wbFile = fopen($dFile, "w") or die("Unable to open file!");
fwrite($wbFile, $jjson);
fclose($wbFile);
echo '<p><a href="'.DOMAIN_PATH.$dFile.'">Json Write Successful.</a><p>';
?>