@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">CHAT GRUPAL</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="text-center">
                      <iframe src="https://www4.cbox.ws/box/?boxid=4327742&boxtag=QphlPr" width="100%" height="400" allowtransparency="yes" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto"></iframe>
                    </div>
                </div>
          </div>
      </div>

      <div class="col-md-4">
          <div class="panel panel-default">
              <div class="panel-heading">ARCHIVOS EXTRA IMPORTANTES</div>
              <div class="panel-body">
                  @foreach ($archivos as $value)
                    @if($value->tipo_home == "index")
                       <p> {{$value->name}} </p> <a target="_blank" href="{{$value->url}}" class="btn btn-success btn-sm">Descargar</a>
                    @endif
                  @endforeach
              </div>
        </div>
    </div>

  </div>
</div>

    <div class="container">
        <div class="row">
              <div class="col-sm-12">
                <h1>Novedades</h1>
                @foreach ($novedades as  $value)
                <div class="well">
                  <div class="text-center">
                 <h2>{{$value->name}}</h2>
                 <br>
                   <p><h4>{!!$value->body!!}</h4></p>
                  </div>
                </div>
                <br>
                @endforeach
             </div>
        </div>
      </div>

      <div class="container">
          <div class="row">
                <div class="col-sm-12">
                  <h1>Revisiones</h1>
                  @foreach ($reviciones as  $value)
                  <div class="well">
                    <div class="text-center">
                   <h2>{{$value->name}}</h2>
                   <br>
                     <p><h4>{!!$value->body!!}</h4></p>
                    </div>
                  </div>
                  <br>
                  @endforeach
               </div>
          </div>
      </div>

  <div class="container">
  <div class="row">
    <div class="col-sm-12 text-center">
      <div class="well">
        <h3>SUBE TU EDIT</h3>
        <p>INDICACIONES <br><br>
        1- Sube el archivo en formato MP3<br><br>
        2- Incluye Nombre de DJ, y nombre del edit<br><br>
        3- Tamaño maximo del archivo 10 mb<br><br>
        4- Las revisiones se haran publicas aquí<br>
       </p>
        <a class="btn btn-sm btn-success" target="_blank" href="https://form.jotform.co/70967998412877">Subir</a>
        <br>
      </div>
    </div>
  </div>
</div>

    <div class="container" >
        <div class="row " >
          <div class="text-center">
            <h3>NIVELES</h3>
         </div>
         @foreach ($niveles as  $nivel)
               <div class="col-sm-6">
                   <div class="panel panel-default" >
                         <div class="panel-heading">
                             <h3 class=""> <strong>{{ $nivel->name}}</strong> </h3>
                         </div>
                         <div class="text-center ">
                           <br>
                           <p>{!!$nivel->body!!}</p>
                           <br>
                           <img src="{{$nivel->file}}" class="img-responsive" alt="">
                           <br>
                           <a href="{{route('nivel', $nivel->slug)}}" class=" btn btn-info ">Ver</a>
                           <br>
                           <br>
                         </div>
                   </div>
               </div>
         @endforeach
    </div>
</div>
@endsection
