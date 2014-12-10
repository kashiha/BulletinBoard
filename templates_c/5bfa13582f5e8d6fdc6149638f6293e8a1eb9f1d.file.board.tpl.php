<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-05 01:52:09
         compiled from ".\templates\board.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27260545518faaae9c0-59034206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bfa13582f5e8d6fdc6149638f6293e8a1eb9f1d' => 
    array (
      0 => '.\\templates\\board.tpl',
      1 => 1415119928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27260545518faaae9c0-59034206',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_545518fab0c5d3_70171481',
  'variables' => 
  array (
    'datas' => 0,
    'i' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545518fab0c5d3_70171481')) {function content_545518fab0c5d3_70171481($_smarty_tpl) {?>  <h1>掲示板</h1>
  <HR>
  <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
  <HR>
  <?php echo $_smarty_tpl->tpl_vars['i']->value['tId'];?>
： <?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
さん ID: <?php echo $_smarty_tpl->tpl_vars['i']->value['uId'];?>
 <br />
  タイトル： <?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
 <br />
  <?php echo $_smarty_tpl->tpl_vars['i']->value['detail'];?>
<br /><br />
  <?php echo $_smarty_tpl->tpl_vars['i']->value['time'];?>

  <?php } ?>
  <br /><HR><HR><br />
  
	<form action="post.php" method="post">
	<table border="1">
		<tr>
		<td>ニックネーム</td>
		<td><input type="text" name="name"
      value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" />
    </td>
		</tr>

		<tr>
		<td>タイトル</td>
		<td><input type="text" name="title" /></td>
		</tr>

		投稿フォーム<br /><br />
		
		<tr>
		<td>内容</td>
		<td><textarea name="detail" id="textarea" rows="4" cols="40"></textarea></td>
		</tr>

    <!--
		<tr>
		<td>投稿画像</td>
		<td>
		<INPUT type="hidden" name="MAX_FILE_SIZE" value="65536">
		<input type="file" name="upfile"></td>
		</tr>
    -->
    
		<tr>
		<td colspan="2" align="center">
		<input type="submit" name="submit" value="投稿">
		<input type="reset" value="リセット">
		</td>
		</tr>
	</table>
	</form>
<?php }} ?>
