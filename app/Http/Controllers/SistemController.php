<?php

namespace App\Http\Controllers;

use Auth;                   //libre autentifica y valida 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Request\ValidaRequest;  //libreria de validar

use App\UsuariosModel;
use App\AdmiModel;
use App\JuguetesModel;
use App\TiposModel;
use App\CategoriasModel;
use App\MarcasModel;
use Barryvdh\DomPDF\Facade as PDF;

class SistemController extends Controller
{
    public function index(){
        return view('index');
    }

public function cero(Request $request){
    
    $juguetes = JuguetesModel::Buscar($request->get('buscar'))
            ->orderBy('id_juguete')
            ->paginate(1);

        return view("0-12")
            ->with(['juguetes' => $juguetes]);
    }
    public function ad(){
        return view('ad');
    }
    public function admi(){
        return view('admi');
    }
    public function cono(){
        return view('cono');
    }
    public function juren(){
        return view('juren');
    }
    public function ta_usu(){
        return view('ta_usu');
    }
    public function térmi(){
        return view('térmi');
    }
    public function secunda(){
        return view('secunda');
    }
    public function categorias(){
        return view('categorias');
    }
    public function servicios(){
        return view('servicios');
    }
    
    public function ver(){
        $juguetes = JuguetesModel::all();
        return view('index');    
        }

        public function download(Request $req){
        $juguetes = DB::SELECT("SELECT * FROM  tb_juguetes");
        $pdf = PDF::loadView('index', [ 'juguetes' => $juguetes])
        ->save(storage_path('app/public/') . 'tiket.pdf');
        return $pdf->download('tiket.pdf');
       }
}