<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Capitulo;
use App\Nivel;
use App\ArchivosExtra;
use App\novedades;
use App\Reviciones;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
      $niveles = Nivel::orderBy('id', 'ASC')->paginate();
      $archivos = ArchivosExtra::orderBy('id', 'ASC')->paginate();
      $novedades = novedades::orderBy('id', 'ASC')->paginate();
      $reviciones = Reviciones::orderBy('id', 'ASC')->paginate();
      return view('home', compact('niveles', 'archivos', 'novedades', 'reviciones'));
    }


    public function nivel($slug)
    {
          $nivel = Nivel::where('slug', $slug)->first();
          $capitulos = Capitulo::orderBy('id', 'ASC')->paginate();
          $capi = DB::table('capitulos')->where('nivel_id', '=', $nivel->id)->get();
          return view('nivel' , compact('nivel', 'capi'));
    }

    public function post($slug)
      {
        $post = Capitulo::where('slug', $slug)->first();
        return view('capitulo' , compact('post'));
      }

}
