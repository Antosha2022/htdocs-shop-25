@extends('layouts.layouts_admin')
@section('title')карточка клієнта@endsection
@section('bookkeeper_content')
<div class="container mt-3">


<h3>карточка клієнта</h3>

    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div>
    @endif

<form method="post" action="{{route('client-form')}}">
<!-- <form method="post" action="product/submit"> -->
  @csrf

  <!-- <div class="mb-3">
    <label for="photo" class="form-label">завантажте зображення</label>
    <input class="form-control" type="file" id="photo">
  </div> -->


  <div class="form-group">
    <label for="name">введіть назву</label>
    <input type="text" name="name" placeholder="ТОВ..." id="name" class="form-control">
  </div>
  <div class="form-group">
    <label for="edrpou_code">введіть код ЄДРПОУ</label>
    <input type="text" name="edrpou_code"  id="edrpou_code" class="form-control">
  </div>
  <div class="form-group">
    <label for="ipn_code">введіть індивідуальний податковий код</label>
    <input type="text" name="ipn_code" placeholder="для податкових накладних" id="ipn_code" class="form-control">
  </div>
  <div class="form-group">
    <label for="zip_code">введіть поштовий індекс</label>
    <input type="text" name="zip_code" id="zip_code" class="form-control">
  </div>
  <div class="form-group">
    <label for="city">введіть місто</label>
    <input type="text" name="city" placeholder="Київ" id="city" class="form-control">
  </div>
  <div class="form-group">
    <label for="contract_number">введіть номер договору</label>
    <input type="text" name="contract_number" placeholder="№_ ..." id="contract_number" class="form-control">
  </div>
  <div class="form-group">
    <label for="contract_date">введіть дату договору</label>
    <input type="date" name="contract_date"  id="contract_date" class="form-control">
  </div>
  <div class="form-group">
    <label for="chipping_address">введіть адресу доставки</label>
    <textarea class="form-control" name="chipping_address" id="chipping_address" rows="3"></textarea>
  </div>


<button type="submit" class="btn btn-warning mt-3">створити</button>

</form>

  </div>
@endsection
