<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <form action="/" method="POST">
    @csrf
    <h2>氏名</h2>
    <input type="text" name="name" >
    <h2>メールアドレス</h2>
    <input type="text" name="email" >
    <input type="submit" value="送信する" >
  </form>
</body>

</html>