@extends ('loyauts.app')

@section ('title-block')головна@endsection

@section ('content')<h3><b>Доброго дня!<b></h3>
<div>
  Цей сайт створено на PHP з використанням фреймворку Laravel.<br>Тут реалізована форма зворотнього зв'язку (написати директору),
  з можливістю подальшого редагування повідомлення, або навіть його видалення.
  Підключена база даних MySQL.<br>
  Бічна колонка присвячена видатному таланту, батьку української нації Тарасу Шевченко.<br>
  <br>
  При створенні цього сайту, на жаль, не пострадав жоден москаль:(
    <br>
    <br>
    <h5><b>Слава Україні!<b></h5>
    <h5><b>Всім Героям Слава!<b></h5>
</div>
@endsection

@section('aside')
 @parent
 <p>Кохайтеся, чорнобриві,<br>Та не з москалями,<br>Бо москалі — чужі люде,<br>Роблять лихо з вами.</p>
@endsection
