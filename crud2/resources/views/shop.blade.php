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
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> -->
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
                        <button class="btn btn-outline-dark" href="/order" type="submit">
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
          <div class="text-center text-white" style="background:#41b6e6; border-radius:15px">
                <!-- <div class="text-center text-white"> -->

                    <h1 class="display-4 fw-bolder">Азова 100% морська вода</h1>
                    <p class="lead fw-normal text-white-50 mb-0">для промивання носа</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-1">
            <div class="container px-4 px-lg-5 mt-1">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">


                    <div class="col mb-5">

                                <div class="card h-100">
                                    <!-- Product image-->
                                          <div class="mediaFiles" >
                                            <a href="/product/1">
                                                <img class="card-img-top" src="/mediaFiles/img_product1.png" alt="спрей назальний 70 мл 100% морська вода очищена" />
                                            </a>
                                          </div>

                                    <!-- Product details-->
                                    <div class="card-body p-4">

                                        <div class="text-center">
                                            <!-- Product name-->
                                            <h6 class="fw-bolder">Спрей назальний гіпертонічний 70 мл</h6>
                                            <!-- Product price-->
                                            95.00 ГРН
                                        </div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/product/1">детальніше</a></div>
                                    </div>
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">додати в кошик</a></div>
                                    </div>

                        </div>
                    </div>


                    <div class="col mb-5">

                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                              <div class="mediaFiles">
                                  <a href="/product/2">
                                  <img class="card-img-top" src="/mediaFiles/img_product2.png" alt="100% морська вода очищена" />
                                </a>
                              </div>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Азова флакон 500 мл</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">150.00 ГРН</span></br>130.00 ГРН
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/product/2">детальніше</a></div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">додати в кошик</a></div>
                            </div>

                        </div>
                    </div>

                    <div class="col mb-5">

                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <div class="mediaFiles">
                                  <a href="/product/3">
                                    <img class="card-img-top" src="/mediaFiles/img_product3.png" alt="спрей гіпертонічний 30 мл" />
                                  </a>
                            </div>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                      <h6 class="fw-bolder">Спрей назальний гіпертонічний 30 мл</h6>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">66.00 ГРН</span></br>56.00 ГРН
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/product/3">детальніше</a></div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">додати в кошик</a></div>
                            </div>
                        </div>

                    </div>


                    <div class="col mb-5">

                        <div class="card h-100">
                            <!-- Product image-->
                            <div class="mediaFiles">
                                <a href="/product/4">
                                  <img class="card-img-top" src="/mediaFiles/img_product4.png" alt="спрей ізотонічний 30 мл" />
                                </a>
                            </div>

                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                      <h6 class="fw-bolder">Спрей назальний ізотонічний 30 мл</h6>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    66.00 ГРН
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/product/4">детальніше</a></div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">додати в кошик</a></div>
                            </div>
                        </div>

                    </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->

        <!-- <footer class="py-5 bg-dark"> -->
            <footer class=class="text-center text-white" style="background:#41b6e6; border-radius:5px">



            <div class="container"><p class="m-0 text-center text-white">Antosha &copy; www.azova.com.ua</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
