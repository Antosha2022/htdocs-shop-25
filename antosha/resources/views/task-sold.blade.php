@extends ('loyauts.app')

@section ('title-block')приклад@endsection

@section ('content')<h1>рішення</h1>

<div class="container mt-3">
Цей приклад виводить числовий ряд, GHрахує суму та суму квадратів цих чисел.
  <form action="{{route('task-sold')}}" method="get">
    <!-- @csrf -->
    <div class="form-group">



      <label for="name">натуральне число</label> -->
      <input type="integer" name="naturnumber" placeholder="тут треба ввести число від 1 до 20" id="naturnumber" class="form-control">


    </div>
  <button type="submit" class="btn btn-success">порахувати</button>
	</form>
<hr>
</div>

@endsection

@section('aside')
 @parent
 <p>Кохайтеся, чорнобриві,<br>Та не з москалями,<br>Бо москалі — чужі люде,<br>Роблять лихо з вами.</p>
@endsection
