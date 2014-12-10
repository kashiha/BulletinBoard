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
  session_start();
  $stmt = $pdo -> prepare("INSERT INTO contribution (name, userId, title, text, replyCount)
  VALUES (:name, :userId, :title, :text, :replyCount)");
  //値設定
  $stmt->bindParam(':name', $_SESSION['name'], PDO::PARAM_STR);
  $stmt->bindValue(':userId', 0, PDO::PARAM_INT);
  $stmt->bindParam(':title', $_SESSION['title'], PDO::PARAM_STR);
  $stmt->bindParam(':text', $_SESSION['detail'], PDO::PARAM_STR);
  $stmt->bindValue(':replyCount', 0, PDO::PARAM_INT);
  
  $stmt->execute();
  
  //セッション変数を削除
  $_SESSION = array();
}

$smarty->assign( 'params', 0);
$smarty->assign( 'content_tpl' , 'complete.tpl');
$smarty->display('template.tpl');