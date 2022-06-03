@extends('layouts.layouts_admin')
@section('title')кошик@endsection
@section('bookkeeper_content')
<div class="container mt-3">
          <!-- <h5><b>{{ $data->short_name }}</b></h5>
          <hr class="text-info border-2 opacity-50">
          <p>id: {{$data->id}}</p>
          <p>штрих-код: {{$data->bar_code}}</p>
          <p>ціна: {{ $data->retail_price}}  ГРН</p>
          <p>інформація для споживача:</br>{{$data->description}}</p>
          <p><small>останнє редагування: {{ $data->updated_at}}</small></p>
          <a href="{{route('product-data')}}"><button class= "btn btn-outline-secondary">назад</button></a>
          <a href="{{route('product-update',$data->id)}}"><button class= "btn btn-outline-warning">редагувати</button></a>
          <a href="{{route('product-delete',$data->id)}}"><button class= "btn btn-outline-danger">видалити назавжди</button></a>
          <hr class="text-warning border-2 opacity-50"> -->

          <section class="h-100" style="background-color: #eee;">
            <div class="container h-100 py-5">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">

                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                    <div>
                      <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i
                            class="fas fa-angle-down mt-1"></i></a></p>
                    </div>
                  </div>

                  <div class="card rounded-3 mb-4">
                    <div class="card-body p-4">
                      <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-md-2 col-lg-2 col-xl-2">
                          <img
                            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                            class="img-fluid rounded-3" alt="Cotton T-shirt">
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3">
                          <p class="lead fw-normal mb-2">Basic T-shirt</p>
                          <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                          </button>

                          <input id="form1" min="0" name="quantity" value="2" type="number"
                            class="form-control form-control-sm" />

                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                          </button>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                          <h5 class="mb-0">$499.00</h5>
                        </div>
                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                          <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card rounded-3 mb-4">
                    <div class="card-body p-4">
                      <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-md-2 col-lg-2 col-xl-2">
                          <img
                            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                            class="img-fluid rounded-3" alt="Cotton T-shirt">
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3">
                          <p class="lead fw-normal mb-2">Basic T-shirt</p>
                          <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                          </button>

                          <input id="form1" min="0" name="quantity" value="2" type="number"
                            class="form-control form-control-sm" />

                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                          </button>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                          <h5 class="mb-0">$499.00</h5>
                        </div>
                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                          <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card rounded-3 mb-4">
                    <div class="card-body p-4">
                      <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-md-2 col-lg-2 col-xl-2">
                          <img
                            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                            class="img-fluid rounded-3" alt="Cotton T-shirt">
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3">
                          <p class="lead fw-normal mb-2">Basic T-shirt</p>
                          <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                          </button>

                          <input id="form1" min="0" name="quantity" value="2" type="number"
                            class="form-control form-control-sm" />

                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                          </button>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                          <h5 class="mb-0">$499.00</h5>
                        </div>
                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                          <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card rounded-3 mb-4">
                    <div class="card-body p-4">
                      <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-md-2 col-lg-2 col-xl-2">
                          <img
                            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                            class="img-fluid rounded-3" alt="Cotton T-shirt">
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3">
                          <p class="lead fw-normal mb-2">Basic T-shirt</p>
                          <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                          </button>

                          <input id="form1" min="0" name="quantity" value="2" type="number"
                            class="form-control form-control-sm" />

                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                          </button>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                          <h5 class="mb-0">$499.00</h5>
                        </div>
                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                          <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-4">
                    <div class="card-body p-4 d-flex flex-row">
                      <div class="form-outline flex-fill">
                        <input type="text" id="form1" class="form-control form-control-lg" />
                        <label class="form-label" for="form1">Discound code</label>
                      </div>
                      <button type="button" class="btn btn-outline-warning btn-lg ms-3">Apply</button>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <button type="button" class="btn btn-warning btn-block btn-lg">Proceed to Pay</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </section>



  </div>

@endsection
