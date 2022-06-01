@extends('layouts.layouts_admin')
@section('title')продукти@endsection
@section('bookkeeper_content')
@parent
<div class="container mt-3">
<h3>продукти<a href="/product"><button class= "btn btn-outline-info ms-3">додати новий</button></a></h3>

@if($errors->any())
<div class="alert alert-danger">
  <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
  </ul>
</div>
@endif



<hr class="text-info border-2 opacity-50">

      @foreach($data as $el)
    <div>
          <h5>{{$el->short_name}}</h5>
          штрих-код: {{$el->bar_code}}</br>
          <small>ціна: {{ $el->retail_price}} ГРН</br>
          останнє оновлення: {{ $el->updated_at}}</small></br>
          <a href="{{route('product-data-one',$el->id)}}"><button class= "btn btn-outline-warning mt-2 ms-2">детальніше</button></a>
          <hr class="text-warning border-2 opacity-50">
    </div>
      @endforeach
</div>
@endsection
