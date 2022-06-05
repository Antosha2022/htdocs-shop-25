@extends('layouts.layouts_shop')
@section('title')карточка продукта@endsection
@section('content')
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <!-- <div class="row gx-4 gx-lg-5 align-items-center"> -->
                  <div class="row gx-4 gx-lg-5 align-items-top">
                    <!-- <div class="col-md-6" -->
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="/mediaFiles/img_product{{$data->id}}.png" alt="{{$data->short_name}}" /></div>
                  <!-- test -->
                    <div class="col-md-6">
                        <h2 class="display-8 fw-bolder">{{$data->short_name}}</h2>
                      <div class="small mb-1">id: {{$data->id}}</div>
                        <!-- <div class="small mb-1">штрих-код: {{$data->bar_code}}</div> -->
                        <div class="fs-5 mb-5">
                         <b><span class="text">ціна: {{$data->retail_price}} ГРН</span></b>
                            <!-- <span class="text-decoration-line-through">$45.00</span>
                            <span>$40.00</span> -->
                            <div class="d-flex mt-3">
      <!-- <input class="form-control text-center me-3" type="num" value="" style="max-width: 3rem" /> -->
<div class="">


      <select class="form-select"  type="input" id="quantity">
       <option selected value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
       <option value="5">5</option>
      </select>
</div>


                                  <!-- <div class="ms-1">
                                    <button class="btn btn-outline-secondary flex-shrink-0" type="button" onclick="clickMinus()">-</button>
                                  </div>

                                  <div class="ms-1">
                                  <form class="form-control text-center me-2" method="post" style="max-width: 3rem">
                                    <a id="clicks">1</a>
                                 </form>
                                 </div>

                                 <div class="ms-1">
                                   <button class="btn btn-outline-success flex-shrink-0" type="button" onclick="clickPlus()">+</button>
                                 </div>

                                 <label for="customRange2" class="form-label">Example range</label>
                                 <input type="range" class="form-range" min="0" max="5" id="customRange2">



                                    <script>
                                    let cordI=0;
                                    let clicks = 1;
                                    function clickPlus() {clicks +=1;
                                      document.getElementById("clicks").innerHTML = clicks;}

                                    function clickMinus() {clicks -=1 ;
                                        document.getElementById("clicks").innerHTML = clicks;}


                                  </script> -->

                                <div class="ms-3">
                                <button class="btn btn-success flex-shrink-0" type="submit" method="post" >

                                    <!-- <i class="bi-cart-fill me-1"></i> -->
                                    додати в кошик
                                </button>
                              </div>

                            </div>

                        </div>
                        <p class="lead">{{$data->description}}</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->

        <!-- Footer-->
        <footer class=class="text-center text-white" style="background:#41b6e6; border-radius:5px">
          <div class="container"><p class="m-0 text-center text-white">Antosha &copy; www.azova.com.ua</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        @endsection
    </body>
</html>
