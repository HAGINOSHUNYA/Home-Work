@extends('layouts.app')

@section('title', 'サンプル')

@section('content') 


    
    <div class="row">
    

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="{{asset('/img/top_1.jpg')}}" class="d-block w-100" alt="...">

      <div class="carousel-caption d-none d-md-block">
        <h1>First slide label</h1>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{asset('/img/top_2.jpg')}}" class="d-block w-100" alt="...">

      <div class="carousel-caption d-none d-md-block">
        <h1>First slide label</h1>
        <p>Some representative placeholder content for the first slide.</p>
      </div>

    </div>

    <div class="carousel-item">
      <img src="{{asset('/img/top_3.jpg')}}" class="d-block w-100" alt="...">

      <div class="carousel-caption d-none d-md-block">
        <h1>First slide label</h1>
        <p>Some representative placeholder content for the first slide.</p>
      </div>

    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<div class="row">

      <div class="col-md-2 bg-success" style="height:100px;">
      
      </div>

      <div class="col-md-8 bg-success" style="height:100px;">
      <p>検索フォーム</p>
      <form action="{{ route('page.index') }}"  method="GET">
       
              
              <input type="text" class="form-control"  aria-describedby="emailHelp"name="keyword" value="{{ $keyword }}">
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <input type="submit" value="検索" class="btn btn-secondary btn-lg" >
              </div>
      </form>



      </div>
      <div class="col-md-2 bg-success" style="height:100px;">
      
      </div>
    </div>



      <div class="row">
          <div class="col-md-2 bg-primary text-center" style="height:100px;" >
              メニュー<br>

              <button type="button" onclick ="location.href = '{{route('page.sample_create')}}'" class="btn btn-outline-secondary">新規登録</button>
              <br>
              <button type="button" class="btn btn-outline-secondary">Secondary</button>
              <br>
              <button type="button" class="btn btn-outline-secondary">Secondary</button>
          </div>
          <div class="col-md-10 bg-secondary">
             一覧

             <table class="table table-striped table-hover">
    <tr>
      <th class="table-success">ID</th>
      <th class="table-primary">名前</th>
      <th class="table-secondary">住所</th>
      <th >年齢</th>
      <th >編集</th>
      <th >削除</th>
    </tr>
</div>
</div>
<div >
  <div >
    @foreach($books as $book)
    <tr>
      <td >{{ $book->id}}</td>
      <td >{{ $book->name}}</td>
      <td >{{ $book->address}}</td>
      <td >{{ $book->age}}</td>
      <td ><a href="{{route('page.edit',$book)}}">編集</a></td>
      <td ><a href="{{route('page.delete_k',$book)}}">削除</a></td>
    </tr> 
    @endforeach
  </table>


          </div>
          
        </div>
</div>












@endsection
