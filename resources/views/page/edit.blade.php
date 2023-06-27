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
  <button onclick="history.back()">戻る</button>
  <h1>ID:{{$book->id}}   {{$book->name}}さんの登録情報</h1>
  <form action="{{route('page.update',$book)}}" method="post">
    @csrf
   @method('patch')
    
    <div>
      名前：<label for="name"></label>
      <input type="text" name="name" value="{{$book->name}}">
      
    </div>
    <div>
      住所：<label for="address"></label>
      <input type="text" name="address" value="{{$book->address}}">
    </div>
    <div>
      年齢：<label for="age"></label>
      <input type="number" name="age" value="{{$book->age}}">
    </div>
    <button type="submit">変更</button>
    
 </form>
 
    
</article>
</main>

<footer>        
         <p>&copy;  All rights reserved.</p>
     </footer>
</body>
</html>

