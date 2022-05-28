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

        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>

      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start bg-dark">
              <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <!-- <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg> -->
              </a>

              <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 text-secondary">Крамниця АЗОВА</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                <li><a href="#" class="nav-link px-2 text-white">About</a></li>
              </ul>

              <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control form-control-dark text-white bg-dark" placeholder="Search..." aria-label="Search">
              </form>

              <div class="text-end">
                <!-- <button type="button" class="btn btn-outline-light me-2">Login</button> -->
                <!-- <button type="button" class="btn btn-warning">Sign-up



              </button> -->
                <!-- добавление кнопки входа и виходу для зареєстораних -->
                                        @guest
                                        <li class="nav-item"><a class="nav-link active" href="{{route('login')}}">вхід</a></li>
                                            @else
                                            <li class="nav-item">
                                            <a class="btn btn-warning" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">вихід</a>
                                            <!-- схована форма для можливості виходу -->
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                            </li>
                                        @endguest
                <!-- добавление кнопки входа и виходу для зареєстораних -->



              </div>
            </div>

@yield('bookkeeper_content')

</body>
</html>
