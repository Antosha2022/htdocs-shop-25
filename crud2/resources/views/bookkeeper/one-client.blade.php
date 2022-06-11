@extends('layouts.layouts_admin')
@section('title'){{ $data->name }}@endsection
@section('bookkeeper_content')
<div class="container mt-3">
          <h5><b>{{ $data->name }}</b></h5>
          <hr class="text-info border-2 opacity-50">
          <p>ЄДРПОУ: {{$data->edrpou_code}}</p>
          <p>ІПН: {{$data->ipn_code}}</p>
          <p>місто: {{ $data->city}}  ГРН</p>
          <p>адреса доставки:</br>{{$data->chipping_address}}</p>
          <p><small>дата договору: {{ $data->contract_date}}</small></p>
          <a href="{{route('client-data')}}"><button class= "btn btn-outline-secondary">назад</button></a>
          <a href="{{route('client-update',$data->id)}}"><button class= "btn btn-outline-warning">редагувати</button></a>
          <a href="{{route('client-delete',$data->id)}}"><button class= "btn btn-outline-danger">видалити назавжди</button></a>
          <hr class="text-warning border-2 opacity-50">
  </div>

@endsection
