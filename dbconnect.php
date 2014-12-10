<?php
// 共通の設定を読み込む
require_once('common.php' );
require_once('config.php');

// Smartyオブジェクト取得
$smarty =& getSmartyObj();

//DB接続
$pdo = new PDO("{$dbType}:host={$MYSQL_HOST}; dbname={$MYSQL_DATABASE}","{$MYSQL_USER}", "{$MYSQL_PASSWORD}");
if($pdo == null){
  $smarty->assign('result', "failed");
}
else{
  $smarty->assign('result', "success");
}

$smarty->display('dbtest.tpl');
?>