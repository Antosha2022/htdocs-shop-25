@extends ('loyauts.app')

@section ('title-block')всі вірші@endsection

@section ('content')<h3><b>всі вірші</b></h3>
Тут відображаються всі вірші, які зберігаються в базі даних MySQL.<br>
Використовуючи навігацію можна подивитись деталі повідомлення, редагувати його, або видалити.<hr>
  @foreach($data as $el)
    <div class="alert alert-info" style="background-color: #DFE2DD">
      <h5><b>{{ $el->virsh }}<b></h5>
      <!-- <p>{{$el->virsh}}</p> -->
      <p><small>{{ $el->created_at}}</small></p>
      <a href="{{route('one-virsh',$el->id)}}"><button style="background-color: #d1d1d1" class= "btn btn-warning">детальніше</button></a>
    </div>
  @endforeach

@endsection
