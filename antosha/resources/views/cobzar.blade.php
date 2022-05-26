@extends ('loyauts.app')

@section('title-block')написати вірш@endsection

@section('content')<h3>написати вірш</h3>

<form action="{{route('cobzar')}}" method="post">
<!-- подвійна фігурна скобка дозволяє персоналізувати відстеження url адрес
і додатково, обов'язково!!!створюємо захист для форми - згенеруємо схований токен(ключ беспеки Laravel)
можна так:  -->

<!-- <form action="/cobzar/submit" method="post"> -->
@csrf

  <div class="form-group">
    <label for="virsh">введіть вірш сюда</label>
    <textarea name="virsh" id="virsh" class="form-control" placeholder="місце для рядків Кобзаря"></textarea>
  </div>

<button type="submit" class="btn btn-success">Відправити</button>


</form>


@endsection
