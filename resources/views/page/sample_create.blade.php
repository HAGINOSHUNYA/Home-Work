@extends('layouts.app')

@section('title', 'サンプル新規作成')

@section('content') 

<h1>新規登録</h1>
@section('title','新規登録')
@section('title', '新規登録')


<div class="container">
  <div class="row">

    <div class="col-md-2 bg-success" style="height:auto;">
    </div>

    <div class="col-md-8 bg-primary " style="height:auto;">

    @if ($errors->any())
                     <div>
                         <ul>
                             @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                             @endforeach
                         </ul>
                     </div>
                 @endif


                 <form action="{{route('page.show')}}" method=post>
      @csrf
      <div>
          <label for="name" >名前</label>
          <input type="text" name="name" value="{{old('title')}}" class="form-control w-50 mx-auto" aria-describedby="inputGroupPrepend2" required>
      </div>

      <div>
          <label for="address" >住所</label>
          <input type="text" name="address" value="{{old('address')}}" class="form-control w-50 mx-auto">
      </div>

      <div>
          <label for="age" >年齢</label>
          <input type="number" name="age" value="{{old('age')}}" class="form-control w-50 mx-auto">
      </div>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
           <button class="btn btn-primary" type="submit">登録</button> 
      </div>
    </form>




    </div>

    <div class="col-md-2 bg-success" style="height:auto;">
    </div>

  </div>
</div>


@endsection