<?php
// 共通の設定を読み込む
require_once( 'common.php' );
include('config.php');

// Smartyオブジェクト取得
$smarty =& getSmartyObj();

// Smartyテンプレートに渡すパラメータ配列
// POSTされたデータをあらかじめ入れておく
$params = array(
    'name' => $_POST['name'],
    'title' => $_POST['title'],
    'detail' => $_POST['detail']
);

// データのバリデーションを行う
$errors = validate();

// バリデーションに失敗したらフォームを再度表示
if( ! empty( $errors ) ){
    $smarty->assign( 'content_tpl', 'board.tpl' );

    // エラー箇所
    $params['errors'] = $errors;
    
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
    $smarty->assign( 'datas',$status );
}
// バリデーションに成功
else{
    // POSTされた問い合わせ内容を登録する。メールを送ったり、DBに登録したり…
    // (ここでは省略)
    if( empty($params['name'])){
      $params['name'] = '名無しの人';
    }
    // お問い合わせ件名が書かれているか
    if( empty( $_POST['title'] ) ){
      $params['title'] = '無題';
    }

    // 受理した内容を表示
    $smarty->assign( 'content_tpl', 'post.tpl' );
    
    //投稿内容をsessionに入れて渡す
    session_start();
    $_SESSION['name'] = $params['name'];
    $_SESSION['title'] = $params['title'];
    $_SESSION['detail'] = $params['detail'];
}

// パラメータをSmartyオブジェクトに渡して画面表示
$smarty->assign( 'params', $params );
$smarty->display( 'template.tpl' );

/**
 *  POSTされた内容のバリデーションを行う
 *
 *  @return エラー情報配列。項目がキー
 */
function validate()
{
    // エラー情報配列
    $errors = array();

    // お問い合わせ内容が書かれているか
    if( empty( $_POST['detail'] ) ){
        $errors['detail'] = true;
    }

    return $errors;
}
?>