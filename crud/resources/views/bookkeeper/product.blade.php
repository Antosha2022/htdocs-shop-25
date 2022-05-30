@extends('layouts.layouts_admin')
@section('title')карточка продукта@endsection
@section('bookkeeper_content')
<div class="container mt-3">


<h3>карточка продукта</h3>

    <!-- @if($errors->any())
    <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div>
    @endif -->


<form method="post" action="product/submit">
  @csrf

  <div class="form-group">
    <label for="short_name">введіть скорочену назву</label>
    <input type="text" name="short_name" placeholder="Азова" id="short_name" class="form-control">
  </div>
  <!-- <div class="form-group">
    <label for="full_name">введіть повну назву</label>
    <input type="text" name="name" placeholder="Азова" id="full_name" class="form-control">
  </div> -->
  <div class="form-group">
    <label for="bar_code">введіть штрих-код</label>
    <input type="text" name="bar_code" placeholder="Азова" id="bar_code" class="form-control">
  </div>
  <div class="form-group">
    <label for="description">введіть інформацію для споживача</label>
    <textarea class="form-control" name="description" id="description" rows="5"></textarea>
  </div>
  <div class="form-group">
    <label for="retail_price">введіть ціну</label>
    <input type="double" name="retail_price" placeholder="Азова" id="retail_price" class="form-control">
  </div>



<!--
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
  </div> -->
<button type="submit" class="btn btn-warning mt-3">створити</button>

</form>

  </div>
@endsection
