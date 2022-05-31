@extends('layouts.layouts_admin')
@section('title')продукти@endsection
@section('bookkeeper_content')
@parent
<div class="container mt-3">
<h3>продукти</h3>

      @foreach($data as $el)
    <div>
          <h5>{{$el->short_name}}</h5>
          штрих-код: {{$el->bar_code}}</br>
          <small>ціна: {{ $el->retail_price}}</small></br>
          <a href="{{route('product-data-one',$el->id)}}"><button class= "btn btn-warning mt-2 ms-2">детальніше</button></a>
          <hr class="text-warning border-2 opacity-50">
    </div>
      @endforeach

@endsection
