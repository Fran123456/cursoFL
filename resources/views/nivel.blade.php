@extends('layouts.app')

@section('content')

<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <div class="text-center">
        <div class="panel  panel-success">
           <div class="panel-heading"><h1>{{$nivel->name}}</h1></div>
           <div class="panel-body">
             {!!$nivel->body!!}
             <br>
             <br>
             <div class="thumbnail">
               <img src="{{$nivel->file}}" alt="">
             </div>
           </div>
           
       </div>
      </div>
    </div>
    <div class="col-sm-4 well">
      <h3>Capitulos</h3>
          <ul class="list-group">
          @foreach ($capi as  $value)
            <li class="list-group-item">{{$value->name}} <br>
            <a href="{{route('capitulo', $value->slug)}}" class="btn btn-info btn-xs"> Ver capitulo</a>
            </li>
          @endforeach
          </ul>
    </div>
  </div>
</div>


@endsection
