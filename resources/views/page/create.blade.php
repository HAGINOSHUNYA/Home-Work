<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>新規登録</title>
@vite(['resources/js/app.js'])
</head>
<body>
<header>
<nav>
<button type="button" onclick="location.href='{{route('page.index')}}'">一覧へ</button>
</nav>
<header>
<main>
<article>
@if ($errors->any())
                     <div>
                         <ul>
                             @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                             @endforeach
                         </ul>
                     </div>
                 @endif
<h1>新規登録画面</h1>
    <form action="{{route('page.show')}}" method=post>
      @csrf
      <div>
          <label for="name" >名前</label>
          <input type="text" name="name" value="{{old('title')}}">
      </div>

      <div>
          <label for="address" >住所</label>
          <input type="text" name="address" value="{{old('address')}}">
      </div>

      <div>
          <label for="age" >年齢</label>
          <input type="number" name="age" value="{{old('age')}}">
      </div>
      <button type="submit">登録</button> 
    </form>

</article>
</main>

<footer>        
         <p>&copy;  All rights reserved.</p>
     </footer>
</body>
</html>