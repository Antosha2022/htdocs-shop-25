@extends('layouts.layouts_admin')
@section('title')клієнти@endsection
@section('bookkeeper_content')
@parent
<div class="container mt-3">
<h3>клієнти<a href="/product"><button class= "btn btn-outline-info ms-3">додати нового</button></a></h3>

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
      <div class="row">
        <div class="col-3">
          <h5>{{$el->name}}</h5>
          </div>
          <div class="col-6">
          <h5>код: {{$el->edrpou_code}}</h5>
          ІПН: {{$el->ipn_code}}</br>
          <small>місто: {{ $el->city}}</br>
          останнє оновлення: {{ $el->updated_at}}</small></br>
          <a href="{{route('client-data-one',$el->id)}}"><button class= "btn btn-outline-secondary mt-2 ms-2 mb-2">детальніше</button></a>

    </div>
    <hr class="text-info border-2 opacity-50">
  </div>
</div>
      @endforeach
</div>
@endsection
