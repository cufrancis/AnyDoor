@extends(config('web.theme').'app')

@section('content')
  @foreach($types as $type)
    <ul>
    <h4>{{ $type->name }}</h4>
      @for($i=0; $i < count($links); $i++)
        @if($links[$i]['type'] == $type->id)
          <li><em><a href="">{{ $links[$i]['name'] }}</a></em></li>
        @endif
      @endfor
    </ul>
  @endforeach
@endsection
