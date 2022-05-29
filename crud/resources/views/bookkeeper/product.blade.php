@extends('layouts.layouts_admin')
@section('title')карточка продукта@endsection
@section('bookkeeper_content')
<div class="container mt-3">


<h3>карточка продукта</h3>

    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div>
    @endif


<form method="post" action="{{route('product-form')}}">
  @csrf

  <div class="mb-1 row">
    <label for="short_name" class="col-sm-2 col-form-label">назва</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="short_name">
    </div>
  </div>
  <div class="mb-1 row">
    <label for="bar_code" class="col-sm-2 col-form-label">штріх-код</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="bar_code">
    </div>
  </div>
  <div class="mb-1 row">
    <label for="description" class="col-sm-2 col-form-label">описання</label>
    <div class="col-sm-6">
    <textarea class="form-control " id="description" rows="5"></textarea>
    </div>
  </div>
  <div class="mb-1 row">
    <label for="retail_price" class="col-sm-2 col-form-label">роздрібна ціна</label>
    <div class="col-sm-6">
      <input type="double" class="form-control" id="retail_price">
    </div>
  </div>
<button type="submit" class="btn btn-warning">створити</button>

</form>

  </div>
@endsection
