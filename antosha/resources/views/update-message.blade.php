@extends ('loyauts.app')

@section('title-block')оновлення запису@endsection

@section('content')<h1>оновлення запису</h1>

<form action="{{route('contact-update-submit',$data->id)}}" method="post">
<!-- можна так: <form action="/contact/submit" method="post">
  але подвійна фігурна скобка дозволяє персоналізувати відстеження url адрес
  і додатково, обов'язково!!!створюємо захист для форми - згенеруємо схований токен(ключ беспеки Laravel) -->
@csrf

  <div class="form-group">
    <label for="name">введіть ім'я</label>
    <input type="text" name="name" value="{{$data->name}}"placeholder="введіть ім'я" id="name" class="form-control">
  </div>

  <div class="form-group">
    <label for="email">ваш E-mail</label>
    <input type="text" name="email" value="{{$data->email}}" placeholder="введіть e-mail" id="email" class="form-control">
  </div>

  <div class="form-group">
    <label for="subject">тема повідомлення</label>
    <input type="text" name="subject" value="{{$data->subject}}" placeholder="тема повідомлення" id="subject" class="form-control">
  </div>

  <div class="form-group">
    <label for="message">повідомлення</label>
    <textarea name="message" id="message" class="form-control">{{$data->message}}</textarea>
  </div>

<button type="submit" class="btn btn-success">Обновити</button>


</form>


@endsection
