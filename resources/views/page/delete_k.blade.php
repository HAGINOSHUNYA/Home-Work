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
  <h1>削除確認</h1>
  <h2>ID:{{$book->id}}　　{{$book->name}}さんの登録情報</h2>
  
      <p>名前：{{$book->name}}</p>
      <p>住所：{{$book->address}}</p>
      <p>年齢：{{$book->age}}</p>
<br>
      <p>削除しますか</p>
<br>
<form action="{{route('page.delete',$book)}}" method="post">
  @csrf
  @method('delete')
<button type="submit">はい</button>
</form>
<button type="button" onclick="location.href='{{route('page.index')}}'">いいえ</button>

</article>
</main>

<footer>        
         <p>&copy;  All rights reserved.</p>
     </footer>
</body>
</html>

