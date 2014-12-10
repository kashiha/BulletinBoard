<?php
// 共通の設定を読み込む
require_once('common.php' );
include('config.php');

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
//DBデータ取得
$stmt = $pdo->query("SELECT * FROM contribution ORDER BY textId ASC");
$i = 0;
$status = array();
while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
  $status += array("$i" => array(
    'tId' => $row["textId"],
    'name' => $row["name"],
    'uId' => $row["userId"],
    'title' => $row["title"],
    'detail' => $row["text"],
    'time' => $row["time"],
    'count' => $row["replyCount"]
  ));
  $i++;
}

$smarty->assign('params', array(
  'name' => '',
  'title' => '',
  'detail' => ''
));
$smarty->assign( 'datas',$status );
$smarty->assign( 'content_tpl', 'board.tpl' );
$smarty->display('template.tpl');

?>