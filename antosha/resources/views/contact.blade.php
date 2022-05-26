@extends ('loyauts.app')

@section('title-block')написати директору@endsection

@section('content')<h3>написати директору</h3>
<p>Ця форма дозволяє без авторизації написати "повідомлення директору". Воно одразу з'явиться на сторінці <a href="{{route('contact-data')}}">повідомлення</a>. В подальшому його можна буде редагувати, або видалити.</p>

<form action="{{route('contact-form')}}" method="post">
<!-- можна так: <form action="/contact/submit" method="post">
  але подвійна фігурна скобка дозволяє персоналізувати відстеження url адрес
  і додатково, обов'язково!!!створюємо захист для форми - згенеруємо схований токен(ключ беспеки Laravel) -->
@csrf

  <div class="form-group">
    <label for="name">введіть Ваше ім'я</label>
    <input type="text" name="name" placeholder="введіть ім'я" id="name" class="form-control">
  </div>

  <div class="form-group">
    <label for="email">ваш E-mail</label>
    <input type="text" name="email" placeholder="введіть e-mail" id="email" class="form-control">
  </div>

  <div class="form-group">
    <label for="subject">тема повідомлення</label>
    <input type="text" name="subject" placeholder="тема повідомлення" id="subject" class="form-control">
  </div>

  <div class="form-group">
    <label for="message">повідомлення</label>
    <textarea name="message" id="message" class="form-control" placeholder="введіть повідомлення"></textarea>
  </div>

<button type="submit" class="btn btn-success">Відправити</button>


</form>


@endsection

@section('aside')
 @parent
 <p>Гомоніла Україна,<br>Довго гомоніла,<br>Довго, довго кров степами<br>Текла-червоніла.</p>
@endsection
