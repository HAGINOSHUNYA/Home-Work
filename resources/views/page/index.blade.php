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
<div class="container">
  <div class="row">
    <nav  class="navbar">

        <div class="col">
          <div  class="fixed-top" class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="button" onclick ="location.href = '{{route('page.create')}}'" class="btn btn-danger">新規登録</button>
            <button type="button" onclick ="location.href = '{{route('page.create')}}'" class="btn btn-warning">新規登録</button>
            <button type="button" onclick ="location.href = '{{route('page.create')}}'" class="btn btn-success">新規登録</button>
            <button type="button"  onclick ="location.href = '{{route('page.sanple')}}'"class="btn btn-outline-primary">一覧</button>
         </div>
        
</nav>
 
   <div class="col">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
    <div class="carousel-inner">

         <div class="carousel-item active">
           <img src="{{asset('/img/top_1.jpg')}}"  class="d-block w-100" class="img-fluid" alt="..." >
         </div>

         <div class="carousel-item">
          <img src="{{asset('/img/top_2.jpg')}}" class="d-block w-100" class="img-fluid" alt="..."style="height:500ox;">
         </div>

         <div class="carousel-item">
           <img src="{{asset('/img/top_3.jpg')}}" class="d-block w-100" class="img-fluid" alt="..."style="height:500ox;">
         </div>

    </div>



          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Previous</span>
         </button>
  
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Next</span>
         </button>

  
</div>
</div>
<header>
<main>
<article>
//* 検索機能ここから *//
<div class="container">
  <div class="row">
<div class="col">
  <form action="{{ route('page.index') }}" method="GET">
    <input type="text" name="keyword" value="{{ $keyword }}">
    <input type="submit" value="検索">
  </form>
</div>
</div>

//検索機能ここまで

<br>
  <button  type ="button" onclick ="location.href = '{{route('page.create')}}'">新規登録</button>
  <div class="container">
  <div class="row">
    <div class="col-md-12">
  <table>
    <tr>
      <th>ID</th>
      <th>名前</th>
      <th>住所</th>
      <th>年齢</th>
      <th>編集</th>
      <th>削除</th>
    </tr>
</div>
</div>
<div class="row">
  <div class="col-md--12">
    @foreach($books as $book)
    <tr>
      <td>{{ $book->id}}</td>
      <td>{{ $book->name}}</td>
      <td>{{ $book->address}}</td>
      <td>{{ $book->age}}</td>
      <td><a href="{{route('page.edit',$book)}}">編集</a></td>
      <td><a href="{{route('page.delete_k',$book)}}">削除</a></td>
    </tr> 
    @endforeach
  </table>
</div>
</div>
</article>
</main>

<footer>        
         <p>&copy;  All rights reserved.</p>
     </footer>
</body>
</html>


