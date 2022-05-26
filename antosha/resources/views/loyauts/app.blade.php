<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="">
    </menu>
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.header')

 @if(Request::is('/'))
    @include('inc.hero')
@endif


<div class="container mt-5">
@include('inc.messages')
  <div class="row">
      <div class="col-8">
      @yield('content')
      </div>
    <div class="">
      @include('inc.aside')
    </div>
  </div>

</div>

    @include('inc.footer')
  </body>
</html>
