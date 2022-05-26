@extends ('loyauts.app')

@section ('title-block'){{$data->virsh}}@endsection

@section ('content')<h2>{{$data->virsh}}</h2>
    <div class="aler aler-info">
      <p>{{$data->virsh}}</p>
      <p><small>{{$data->created_at}}</small></p>
      <a href="{{route('cobzar-update',$data->id)}}"><button class= "btn btn-primary">редагувати</button></a>
      <a href="{{route('codzar-delete',$data->id)}}"><button class= "btn btn-danger">видалити назавжди</button></a>
    </div>


@endsection
