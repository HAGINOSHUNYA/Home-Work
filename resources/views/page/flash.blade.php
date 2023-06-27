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
<nav>
</nav>
<header>
<main>
<article>
  <h1>フラッシュ文</h1>
      @if (session('flash_message'))
        <p>{{ session('flash_message') }}</p>
      @endif
  <button type="button" onclick="location.href='{{route('page.index')}}'">一覧へ</button>
</article>
</main>

<footer>        
         <p>&copy;  All rights reserved.</p>
     </footer>
</body>
</html>