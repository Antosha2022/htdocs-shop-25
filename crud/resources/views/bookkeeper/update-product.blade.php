@extends('layouts.layouts_admin')
@section('title')карточка продукта@endsection
@section('bookkeeper_content')
<div class="container mt-3">


<h3>карточка продукта: оновлення</h3>

    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div>
    @endif


<form method="post" action="{{route('/bookkeeper/update-product',$data->id)}}">
  @csrf

  <!-- <div class="mb-3">
    <label for="photo" class="form-label">завантажте зображення</label>
    <input class="form-control" type="file" id="photo">
  </div> -->

  <div class="form-group">
    <label for="short_name">введіть скорочену назву</label>
    <input type="text" name="short_name" value="{{$data->short_name}}" id="short_name" class="form-control">
  </div>
  <!-- <div class="form-group">
    <label for="full_name">введіть повну назву</label>
    <input type="text" name="name" placeholder="Азова" id="full_name" class="form-control">
  </div> -->
  <div class="form-group">
    <label for="bar_code">введіть штрих-код</label>
    <input type="text" name="bar_code" value="{{$data->bar_code}}" id="bar_code" class="form-control">
  </div>
  <div class="form-group">
    <label for="description">введіть інформацію для споживача</label>
    <textarea class="form-control" name="description" id="description" rows="5">{{$data->description}}</textarea>
  </div>
  <div class="form-group">
    <label for="retail_price">введіть ціну</label>
    <input type="double" name="retail_price" value="{{$data->retail_price}}" id="retail_price" class="form-control">
  </div>

<button type="submit" class="btn btn-warning mt-3">зберегти оновлення</button>

</form>

  </div>
@endsection
