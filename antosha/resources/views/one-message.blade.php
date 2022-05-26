@extends ('loyauts.app')

@section ('title-block'){{$data->subject}}@endsection

@section ('content')<h2>{{$data->subject}}</h2>
    <div class="aler aler-info">
      <p>{{$data->message}}</p>
      <p>{{$data->email}} - {{$data->name}}</p>
      <p><small>{{$data->created_at}}</small></p>
      <a href="{{route('contact-update',$data->id)}}"><button class= "btn btn-primary">редагувати</button></a>
      <a href="{{route('contact-delete',$data->id)}}"><button class= "btn btn-danger">видалити назавжди</button></a>
    </div>


@endsection
