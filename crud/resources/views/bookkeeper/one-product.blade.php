@extends('layouts.layouts_admin')
@section('title'){{ $data->short_name }}@endsection
@section('bookkeeper_content')
<div class="container mt-3">




          <h5><b>{{ $data->short_name }}</b></h5>
          <hr class="text-info border-2 opacity-50">
          <p>штрих-код: {{$data->bar_code}}</p>
          <p>ціна: {{ $data->retail_price}}  ГРН</p>
          <p>інформація для споживача:</br>{{$data->description}}</p>
          <p><small>останнє редагування: {{ $data->updated_at}}</small></p>
          <a href="{{route('product-data-one',$data->id)}}"><button class= "btn btn-warning">детальніше</button></a>
          <hr class="text-warning border-2 opacity-50">

  </div>

@endsection
