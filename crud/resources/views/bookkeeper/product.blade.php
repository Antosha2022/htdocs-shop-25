@extends('layouts.layouts_admin')
@section('title')карточка продукта@endsection
@section('bookkeeper_content')
<h3>карточка продукта</h3>

    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div>
    @endif


<form>


</form>
@endsection
