<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-05 00:55:22
         compiled from ".\templates\post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119455458f0bbd8d300-98987726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a0fef899dc79914150bc863b5b9a8d716e5f0a3' => 
    array (
      0 => '.\\templates\\post.tpl',
      1 => 1415116520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119455458f0bbd8d300-98987726',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5458f0bbe15ea7_60375406',
  'variables' => 
  array (
    'params' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5458f0bbe15ea7_60375406')) {function content_5458f0bbe15ea7_60375406($_smarty_tpl) {?><p>以下の内容を投稿しますか？</p>

<dl>
  <dt>ニックネーム</dt>
  <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</dd>
  <br />
  <dt>タイトル</dt>
  <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</dd>
  <br />
  <dt>投稿内容</dt>
  <dd><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['detail'], ENT_QUOTES, 'UTF-8', true));?>
</dd>
  
  <br /><br />
  <form action="complete.php" method="post">
		<input type="submit" name="submit" value="投稿">
  </form>
  
</dl><?php }} ?>
