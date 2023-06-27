<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
@vite(['resources/js/app.js'])
</head>
<body>
<header>
<nav></nav>
<header>
<main>
<article>
  <h1><?php echo $name ?>さんの登録完了</h1>
  <p>登録内容</p>
  <p>住所：<?php echo $address ?></p>
  <p>年齢：<?php echo $age ?></p>

  <button onclick ="history.back()">続けて登録</button>
  <button type="button" onclick = "location.href = '{{route('page.index')}}'">一覧</button>
</article>
</main>

<footer>        
         <p>&copy;  All rights reserved.</p>
     </footer>
</body>
</html>