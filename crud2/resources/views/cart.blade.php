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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
                      <a href="{{ route('cart') }}">
                        <button class="btn btn-outline-dark" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            кошик
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                        </a>
                    </form>

                    @include(layouts.basket)




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



        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0 @endphp
                @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                        @php $total += $details['retail_price'] * $details['quantity'] @endphp
                        <tr data-id="{{ $id }}">
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-3 hidden-xs"><img src="/mediaFiles/img_product{id}.png" width="100" height="100" class="img-responsive"/></div>
                                    <div class="col-sm-9">
                                        <h4 class="nomargin">{{ $details['short_name'] }}</h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">${{ $details['retail_price'] }}</td>
                            <td data-th="Quantity">
                                <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                            </td>
                            <td data-th="Subtotal" class="text-center">${{ $details['retail_price'] * $details['quantity'] }}</td>
                            <td class="actions" data-th="">
                                <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>
                </tr>
                <tr>
                    <td colspan="5" class="text-right">
                        <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                        <button class="btn btn-success">Checkout</button>
                    </td>
                </tr>
            </tfoot>
        </table>


        <script type="text/javascript">

            $(".update-cart").change(function (e) {
                e.preventDefault();

                var ele = $(this);

                $.ajax({
                    url: '{{ route('update.cart') }}',
                    method: "patch",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id"),
                        quantity: ele.parents("tr").find(".quantity").val()
                    },
                    success: function (response) {
                       window.location.reload();
                    }
                });
            });

            $(".remove-from-cart").click(function (e) {
                e.preventDefault();

                var ele = $(this);

                if(confirm("Are you sure want to remove?")) {
                    $.ajax({
                        url: '{{ route('remove.from.cart') }}',
                        method: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: ele.parents("tr").attr("data-id")
                        },
                        success: function (response) {
                            window.location.reload();
                        }
                    });
                }
            });

        </script>

      </body>
</html>
