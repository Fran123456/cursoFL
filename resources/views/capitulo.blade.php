@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-12">

      <div class="panel  panel-default text-center">
         <div class="panel-heading"><h1>{{$post->name}}</h1></div>
         <div class="panel-body">
           <div class="embed-responsive embed-responsive-16by9">
             {!!$post->url!!}
           </div>
           <li class="list-group-item">{!!$post->body!!}</li>
           <li class="list-group-item"><a href="{{$post->descarga_video}}" target="_blank" class="btn btn-info btn-sm">Descarga video</a>
           @if($post->descarga_material !== "Nulla.")
           <a href="{{$post->descarga_material}}" target="_blank" class="btn btn-success btn-sm">Descarga materiales</a>
            @endif
           </li>
           <li class="list-group-item">
             <div id="disqus_thread"></div>
              <script>
                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://djfrankremixer-com.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
              </script>
           </li>
           <br>
         </div>
     </div>
    </div>
    <div class="col-sm-4">

    </div>
  </div>
</div>
@endsection
