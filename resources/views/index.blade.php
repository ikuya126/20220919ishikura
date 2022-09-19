<h1>トップページ</h1>

<form action="/create" method="post">
  @csrf
  <p>氏名</p>
  <input type="text" name="name" >
  <p>メールアドレス</p>
  <input type="text" name="email">
  <button type="submit">送信する</button>
</form>
