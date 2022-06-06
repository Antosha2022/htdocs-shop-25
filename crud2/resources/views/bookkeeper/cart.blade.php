@extends('layouts.layouts_shop')
@section('title')карточка продукта@endsection
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
       <table class="table table-bordered tbl-cart text-center">
           <thead>
               <tr>
                   <td class="hidden-xs">вигляд</td>
                   <td>назва</td>
                   <!-- <td>Size</td>
                   <td>Color</td> -->
                   <td class="td-qty">кількість</td>
                   <td>ціна</td>
                   <td>сума</td>
                   <td>відмінити</td>
               </tr>
           </thead>
           <tbody>
               <tr>
                   <td class="hidden-xs">
                       <a href="#">
                           <img src="https://via.placeholder.com/200x200/" alt="Age Of Wisdom Tan Graphic Tee" title="" width="100" height="100">
                       </a>
                   </td>
                   <td><a href="#">Age Of Wisdom Tan Graphic Tee</a>
                   </td>
                   <!-- <td>
                       <select name="">
                           <option value="" selected="selected">S</option>
                           <option value="">M</option>
                       </select>
                   </td>
                   <td>-</td> -->
                   <td>
                       <div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input type="text" name="" value="1" class="input-qty form-control text-center" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-up" type="button">+</button></span></div>
                   </td>
                   <td class="price">$ 122.21</td>
                   <td>$ 122.21</td>
                   <td class="text-center">
                       <a href="#" class="remove_cart" rel="2">
                           <i class="fa fa-trash-o"></i>
                       </a>
                   </td>
               </tr>
               <tr>
                   <td class="hidden-xs">
                       <a href="#">
                           <img src="https://via.placeholder.com/200x200/" alt="Adidas Men Red Printed T-shirt" title="" width="47" height="47">
                       </a>
                   </td>
                   <td><a href="#">Adidas Men Red Printed T-shirt</a>
                   </td>
                   <!-- <td>
                       <select name="">
                           <option value="">S</option>
                           <option value="" selected="selected">M</option>
                       </select>
                   </td>
                   <td>
                       <select name="">
                           <option value="" selected="selected">Red</option>
                           <option value="">Blue</option>
                       </select>
                   </td> -->
                   <td>
                       <div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input type="text" name="" value="2" class="input-qty form-control text-center" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-up" type="button">+</button></span></div>
                   </td>
                   <td class="price">$ 20.63</td>
                   <td>$ 41.26</td>
                   <td class="text-center">
                       <a href="#" class="remove_cart" rel="1">
                           <i class="fa fa-trash-o"></i>
                       </a>
                   </td>
               </tr>
               <tr>
                   <td colspan="4" align="right">до сплати</td>
                   <td class="total" colspan="2"><b>$ 163.47</b>
                   </td>
               </tr>
           </tbody>
       </table>
   </div>
   <!-- <div class="btn-group btns-cart"> -->
       <button type="button" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> продовжити покупки</button>
       <button type="button" class="btn btn-info">оновити кошик</button>
       <button type="button" class="btn btn-success">підтвердити замовлення <i class="fa fa-arrow-circle-right"></i></button>
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
