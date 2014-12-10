<p>以下の内容を投稿しますか？</p>

<dl>
  <dt>ニックネーム</dt>
  <dd>{$params.name|escape:'html':'UTF-8'}</dd>
  <br />
  <dt>タイトル</dt>
  <dd>{$params.title|escape:'html':'UTF-8'}</dd>
  <br />
  <dt>投稿内容</dt>
  <dd>{$params.detail|escape:'html':'UTF-8'|nl2br}</dd>
  
  <br /><br />
  <form action="complete.php" method="post">
		<input type="submit" name="submit" value="投稿">
  </form>
  
</dl>