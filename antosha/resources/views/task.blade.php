@extends ('loyauts.app')

@section ('title-block')приклад@endsection

@section ('content')<h1>приклад розрахунку</h1>

<div class="container mt-3">
Цей приклад виводить числовий ряд, рахує суму та суму квадратів цих чисел.
  <form action="{{route('task')}}" method="get">
    <!-- @csrf -->
    <div class="form-group">
      <label for="name">натуральне число</label>
      <input type="number" name="naturnumber" placeholder="тут треба ввести число від 1 до 20" class="form-control">
    </div>
  <button type="submit" class="btn btn-success">порахувати</button>
	</form>
<hr>
</div>
<!-- new -->


<!-- <div class=""> -->
<!--
   $nat = $_GET['naturnumber'];
    if(trim($nat)=="")
      echo "бажано ввести число";
      else if ($nat >20)
        echo "то число більше 20, не хочу рахувати";
          else   {
            echo "ви ввели число:".$nat."<br/><hr>";
            echo "ряд натуральних чисел виходить такий:"."<br/>";
      for($i=1; $i<=$nat;$i++)
      echo $i."<br/>";
      for($j=0; $j<=$nat;$j++)
      $sum = $sum+$j;
      for($ss=0; $ss<=$nat;$ss++)
      $stup = $stup+($ss**2);
            echo "<hr>сума дорівнює: ".$sum."<br/>";
      echo "сума квадратів цих чисел дорівнює: ".$stup;
      }

</div> -->





@endsection

@section('aside')
 @parent
 <p>Кохайтеся, чорнобриві,<br>Та не з москалями,<br>Бо москалі — чужі люде,<br>Роблять лихо з вами.</p>
@endsection
