@extends('layouts.layouts_shop')
@section('title')кошик@endsection
@section('content')
<script src="js/cart.js"></script>
<div class="container px-4 px-lg-5 my-5 ">
<!-- Cart -->
<div>
<div class="col-lg-12 col-sm-12 text-center">
   <span class="title">Ваше замовлення</span>
</div>
<div class="col-lg-12 text-center">
   <div class="table-responsive ">
     <table id="cart" class="table table-hover table-condensed">
         <thead>
             <tr>
                 <th style="width:70%">найменування</th>
                 <th style="width:10%">ціна</th>
                 <th style="width:5%">кількість</th>
                 <th style="width:10%" class="text-center">сума</th>
                 <th style="width:5%"></th>
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
                                     <h5 class="nomargin">{{ $details['short_name'] }}</h5>
                                 </div>
                             </div>
                         </td>
                         <td data-th="Price">{{ $details['retail_price'] }} ГРН</td>
                         <td data-th="Quantity">
                             <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                         </td>
                         <td data-th="Subtotal" class="text-center">{{ $details['retail_price'] * $details['quantity'] }} ГРН</td>
                         <td class="actions" data-th="">
                             <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                         </td>
                     </tr>
                 @endforeach
             @endif
         </tbody>
         <tfoot>
             <tr>
                 <td colspan="5" class="text-right"><h3><strong>разом до сплати: {{ $total }} ГРН</strong></h3></td>
             </tr>
             <tr>
                 <td colspan="5" class="text-right">
                     <a href="{{ url('/') }}" class="btn btn-outline-info"><i class="fa fa-arrow-circle-left"></i>   продовжити покупки</a>
                     <button class="btn btn-success">підтвердити замовлення</button>
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

             if(confirm("Ви дійсно бажаєте видалити із замовлення?")) {
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
   </div>
   <!-- <div class="btn-group btns-cart"> -->
       <!-- <button type="button" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> продовжити покупки</button>
       <button type="button" class="btn btn-info">оновити кошик</button>
       <button type="button" class="btn btn-success">підтвердити замовлення <i class="fa fa-arrow-circle-right"></i></button> -->
   <!-- </div> -->

</div>
</div>
<!-- End Cart -->
</div>


        <!-- Footer-->

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>


        <!-- <footer class=class="text-center text-white" style="background:#41b6e6; border-radius:5px">
          <div class="container"><p class="m-0 text-center text-white">Antosha &copy; www.azova.com.ua</p></div>
        </footer> -->
        @endsection
    </body>
</html>
