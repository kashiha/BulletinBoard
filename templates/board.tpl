  <h1>掲示板</h1>
  <HR>
  {foreach from=$datas item=i}
  <HR>
  {$i.tId}： {$i.name|escape:'html':'UTF-8'}さん <br />
  タイトル： {$i.title|escape:'html':'UTF-8'} <br /><br />
  &nbsp; {$i.detail|escape:'html':'UTF-8'|nl2br}<br /><br />
  {$i.time}
  {/foreach}
  <br /><HR><HR><br />
  
	<form action="post.php" method="post">
	<table border="1">
		<tr>
		<td>ニックネーム</td>
		<td><input type="text" name="name"
      value="{$params.name|escape:'html':'UTF-8'}" />（無記入可）</td>
		</tr>

		<tr>
		<td>タイトル</td>
		<td><input type="text" name="title" />（無記入可）</td>
		</tr>

		投稿フォーム<br /><br />
		
		<tr>
		<td>内容</td>
		<td><textarea name="detail" id="textarea" rows="4" cols="40"></textarea></td>
		</tr>
    {if (isset($params.errors.detail) && $params.errors.detail)}
      <p class="error-message">投稿内容を入力してください。</p>
    {/if}
    
		<tr>
		<td colspan="2" align="center">
		<input type="submit" name="submit" value="投稿">
		<input type="reset" value="リセット">
		</td>
		</tr>
	</table>
	</form>
