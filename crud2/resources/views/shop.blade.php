<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Азова</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->

        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->

        <!-- альтернатіва -->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

            <div class="container px-4 px-lg-5">
              <!-- <img width="20%" src="/mediaFiles/logo_azova_text.gif"/> -->
                <a class="navbar-brand" href="https://a.com.ua/search?term=%D0%B0%D0%B7%D0%BE%D0%B2%D0%B0 "target="_blank">купити в аптеці</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" target="_blank" new blank href="/mediaFiles/certificateAzova.pdf">висновок експертизи</a></li>
                        <!-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">відгуки</a></li> -->
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" href="/basket" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            кошик
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>





                </div>
                <!-- добавление кнопки входа и виходу для зареєстораних -->
                                        @guest
                                        <!-- <li class="nav-item"><a class="nav-link active" href="{{route('login')}}">вхід</a></li> -->
                                          <a class="nav-link px-2 text-secondary" href="{{route('login')}}">вхід</a>
                                            @else
                                            <!-- <li class="nav-item"> -->
                                            <a class="nav-link px-2 text-secondary" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">вихід</a>
                                            <!-- схована форма для можливості виходу -->
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                            <!-- </li> -->
                                        @endguest
                <!-- добавление кнопки входа и виходу для зареєстораних -->
            </div>

        </nav>
<div class="container mt-4">



@if($errors->any())
<div class="alert alert-danger">
  <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
  </ul>
</div>
@endif



<!-- <hr class="text-info border-2 opacity-50"> -->

<div class="container px-4 px-lg-5 mt-1">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">


      @foreach($data as $el)
    <div class="col mb-5">
          <div class="card h-100">
                  <div class="mediaFiles" >
                        <a href="/product/{{ $el->id}}">
                      <img class="card-img-top" src="/mediaFiles/img_product{{ $el->id}}.png"/>
                        </a>
                  </div>

                    <div class="card-body p-4">
                      <div class="text-center">
                        <h6 class="fw-bolder">{{$el->short_name}}
                          <hr class="text-info border-3 opacity-50">
                        ціна: {{ $el->retail_price}} ГРН</h6>
                      </div>
                    </div>

                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/product/{{ $el->id}}">детальніше</a></div>
                    </div>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">додати в кошик</a></div>
                    </div>
          </div>
    </div>
      @endforeach
</div>
    <!-- <div class="container px-4 px-lg-5" >
        <img width="100%" src="/mediaFiles/imageAzova.png"/>
    </div> -->

</div>


</div>
</body>
</html>
