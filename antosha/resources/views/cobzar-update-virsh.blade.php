@extends ('loyauts.app')

@section('title-block')оновлення запису@endsection

@section('content')<h1>оновлення запису</h1>

<form action="{{route('cobzar-update-virsh',$data->id)}}" method="post">
<!-- можна так: <form action="/contact/submit" method="post">
  але подвійна фігурна скобка дозволяє персоналізувати відстеження url адрес
  і додатково, обов'язково!!!створюємо захист для форми - згенеруємо схований токен(ключ беспеки Laravel) -->
@csrf

  <div class="form-group">
    <label for="virsh">повідомлення</label>
    <textarea name="virsh" id="virsh" class="form-control">{{$data->virsh}}</textarea>
  </div>

<button type="submit" class="btn btn-success">Обновити</button>


</form>


@endsection
