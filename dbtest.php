<?php
require( dirname( __FILE__ ).'/libs/Smarty.class.php' );
include('config.php');

$smarty = new Smarty();

//初期設定
$smarty->template_dir = dirname( __FILE__ ).'/templates';
$smarty->compile_dir  = dirname( __FILE__ ).'/templates_c';

//DB接続
// DBより情報を取得
$pdo = new PDO("{$dbType}:host={$MYSQL_HOST}; dbname={$MYSQL_DATABASE}","{$MYSQL_USER}", "{$MYSQL_PASSWORD}");
if($pdo == null){
  $smarty->assign('result', "failed");
}
else{
  $smarty->assign('result', "success");
}

$smarty->assign('name', 'ワールド');
$smarty->display('dbtest.tpl');

?>