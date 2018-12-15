@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
          </div>
      </div>
  </div>
</div>


             <div class="container">
               <div class="row">
                 <div class="col-sm-12">

                 </div>
               </div>
             </div>

    <div class="container">
        <div class="row ">
          <div class="text-center">
            <h3>MODULOS</h3>
         </div>
         @foreach ($niveles as  $nivel)
               <div class="col-md-offset-2 col-sm-8 col-md-offset-2">
                   <div class="panel panel-default">
                         <div class="panel-heading">
                             <h3 class="panel-title">{{ $nivel->name}}</h3>
                         </div>
                         <ul class="list-group">
                         @foreach ($capitulos as $capitulo)
                           @if ($capitulo->nivel_id == $nivel->id)
                             <li class="list-group-item">
                                 <div class="row toggle" >
                                     <div class="col-xs-6">
                                         {{   $capitulo->name}}
                                     </div>
                                     <a href="{{route('capitulo', $capitulo->slug)}}" class=" btn btn-info">Ver</a>
                                 </div>
                             </li>
                           @endif
                         @endforeach
                         </ul>
                   </div>
               </div>
         @endforeach
    </div>
</div>



@endsection
