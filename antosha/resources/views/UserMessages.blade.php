@extends ('loyauts.app')

@section ('title-block')всі повідомлення@endsection

@section ('content')<h3><b>всі повідомлення</b></h3>
Тут відображаються всі повідомлення, які зберігаються в базі даних MySQL.<br>
Використовуючи навігацію можна подивитись деталі повідомлення, редагувати його, або видалити.<hr>
  @foreach($data as $el)
    <div class="alert alert-info" style="background-color: #DFE2DD">
      <h5><b>{{ $el->subject }}<b></h5>
      <p>{{$el->name}}</p>
      <p><small>{{ $el->created_at}}</small></p>
      <a href="{{route('contact-data-one',$el->id)}}"><button style="background-color: #d1d1d1" class= "btn btn-warning">детальніше</button></a>
    </div>
  @endforeach

@endsection
@section('aside')
 @parent
 <p>Отаке-то було лихо<br>По всій Україні!<br>Гірше пекла… А за віщо,<br>За що люде гинуть?</p>
@endsection
