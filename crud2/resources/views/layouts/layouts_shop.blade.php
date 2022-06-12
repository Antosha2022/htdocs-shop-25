<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <!-- достатньо якогось 1-го файлу стилю, але якщо немає підключення до бутстрап, чи є у користувача взагалі інтернет -->
        <link href="/css/styles.css" rel="stylesheet" />
        <script src="/js/custom.js"></script>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container px-3 px-lg-5">
              <a class="navbar-brand" href="/">АЗОВА</a>
                <!-- <a class="navbar-brand" href="https://a.com.ua/search?term=%D0%B0%D0%B7%D0%BE%D0%B2%D0%B0 " target="_blank" >купити в аптеці</a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">


                    </ul>

@include('layouts.basket')
                    <!-- <form class="d-flex">
                      <a href="{{ route('cart') }}">
                        <button class="btn btn-outline-dark" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            кошик
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                        </a>
                    </form> -->

                                </div>
                            </div>

        </nav>
@yield('content')

</body>
</html>
