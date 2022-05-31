@extends('layouts.layouts_admin')
@section('title')номенклатура@endsection
@section('bookkeeper_content')
<div class="container mt-3">
<h3>продукти</h3>

      @foreach($data as $el)
        <div >
          <h5><b>{{ $el->short_name }}<b></h5>
          <p>{{$el->short_name}}</p>
          <p>{{$el->bar_code}}</p>
          <p>{{$el->description}}</p>
          <p><small>{{ $el->retail_price}}</small></p>


          <a href="{{route('product-data-one',$el->id)}}"><button class= "btn btn-warning">детальніше</button></a>
        </div>
      @endforeach

@endsection
