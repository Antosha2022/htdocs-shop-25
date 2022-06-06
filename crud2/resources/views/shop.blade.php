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
                <a class="navbar-brand" href="https://a.com.ua/search?term=%D0%B0%D0%B7%D0%BE%D0%B2%D0%B0 "target="_blank">купити в аптеці</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" target="_blank" new blank href="/mediaFiles/certificateAzova.pdf">висновок експертизи</a></li>
                        <!-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">відгуки</a></li> -->
                    </ul>
                    <form class="d-flex">
                      <a href="{{ route('cart.store') }}">
                        <button class="btn btn-outline-dark" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            кошик
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                        </a>
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

            <!-- випадаючий список  -->
                                    <!-- <li class="nav-item dropdown"> -->
                                        <!-- <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">вхід</a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#!">All Products</a></li>
                                            <li><hr class="dropdown-divider" /></li>
                                            <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                            <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                                        </ul> -->
                                    <!-- </li> -->
            <!-- випадаючий список  -->

        </nav>
        <!-- Header-->
        <header class="bg-highlight py-3">
            <div class="container">
                <!-- <div class="container px-4 px-lg-5 my-5"> -->

<!-- альтернатівний блок -->
          <!-- <div class="text-center text-white" style="background:#41b6e6; border-radius:10px"> -->

            </div>
        </header>
        <!-- Section-->
        <section class="py-1">
            <div class="container px-4 px-lg-5 mt-1">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

<!-- запит до бази для відображення продуктів -->
    @foreach($data as $el)
                    <div class="col mb-5">
                        <div class="card h-100">
                              <div class="mediaFiles" >
                                  <a href="/product/{{$el->id}}">
                                    <img class="card-img-top" src="/mediaFiles/img_product{{$el->id}}.png" alt="{{$el->short_name}}" />
                                  </a>
                              </div>
                                <div class="card-body p-4">
                                    <div class="text-center">
                                    <h6 class="fw-bolder">{{$el->short_name}}</h6>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    ціна: {{ $el->retail_price}} ГРН
                                    </div>

                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/product/{{$el->id}}">детальніше</a></div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">

                                  <!-- <form class="" action="{{ route('cart.store')}}" method="post">
                                    @csrf
                                    <div>
                                      <input type="number" name="quantity" value="1">
                                    </div>
                                    <div>
                                      <button class="btn btn-outline-dark mt-auto" type="submit" name="addToCart">
                                      додати в кошик</button>
                                      </div>
                                  </form> -->

                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">додати в кошик</a></div>
                                </div>
                        </div>
                    </div>
@endforeach
<!-- запит до бази для відображення продуктів -->

                        </div>
                          <div class="text-center">
                            <img width="70%" src="/mediaFiles/imageAzova.png" alt=" AЗОВА 100% морська вода Азовського моря" />
                          </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->

        <!-- <footer class="py-5 bg-dark"> -->
            <footer class="text-center text-white" style="background:#41b6e6; border-radius:5px">



            <div class="container"><p class="text-center text-white">Antosha &copy; www.azova.com.ua</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
        <!-- Core theme JS-->
        <!-- <script src="js/scripts.js"></script> -->
    </body>
</html>
