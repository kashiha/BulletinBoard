<?php
define( 'SMARTY_DIR', '/usr/local/lib/Smarty-3.1.21/libs/' );
require_once( SMARTY_DIR .'Smarty.class.php' );

// Smartyオブジェクト取得
function & getSmartyObj()
{
    static $smarty = null;

    if( is_null( $smarty ) ){
        $smarty = new Smarty();
        $smarty->template_dir = './templates/';
        $smarty->compile_dir  = './templates_c/';
    }

    return $smarty;
}
?>

