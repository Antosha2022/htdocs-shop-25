@extends('layouts.layouts_admin')
@section('title')продукти@endsection
@section('bookkeeper_content')
<div class="container mt-3">
<h3>продукти</h3>
  <div>
      @foreach($data as $el)
          <h5><b>{{ $el->subject }}<b></h5>
          <p>{{$el->short_name}}</p>
          <p><small>{{ $el->retail_price}}</small></p>
          <a href="{{route('product-data-one',$el->id)}}"><button class= "btn btn-warning">детальніше</button></a>      
      @endforeach
</div>
@endsection
