@extends('layouts.layouts_admin')
@section('title')номенклатура@endsection
@section('bookkeeper_content')
<div class="container mt-3">
<h3>продукти</h3>


        <div >
          <h5><b>{{ $data->short_name }}<b></h5>
          <p>{{$data->short_name}}</p>
          <p>{{$data->bar_code}}</p>
          <p>{{$data->description}}</p>
          <p><small>{{ $data->retail_price}}</small></p>

          <a href="{{route('product-data-one',$data->id)}}"><button class= "btn btn-warning">детальніше</button></a>
        </div>


@endsection
