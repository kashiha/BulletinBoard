<?php
define( 'SMARTY_DIR', './libs/' );
require_once( SMARTY_DIR .'Smarty.class.php' );

// Smartyオブジェクト取得
function & getSmartyObj()
{
    static $smarty = null;

    if( is_null( $smarty ) ){
        $smarty = new Smarty();
        $smarty->template_dir = './templates/';
        $smarty->compile_dir  = './templates_c/';
        $smarty->config_dir   = './configs/';
        $smarty->cache_dir    = './cache/';
    }

    return $smarty;
}
?>

