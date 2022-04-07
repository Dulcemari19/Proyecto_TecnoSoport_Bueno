<?php

namespace App\Http\Controllers;

use Auth;                   //libre autentifica y valida 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Request\ValidaRequest;  //libreria de validar

use App\UsuariosModel;
use App\AdmiModel;
use App\ArticulosModel;
use App\carritoModel;
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
    
    $articulos = ArticulosModel::Buscar($request->get('buscar'))
            ->orderBy('id_articulo')
            ->paginate(10);

        return view("0-12")
            ->with(['articulos' => $articulos]);
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
    
    public function calculadoras(){
        return view('calculadoras');
    }
    public function colores(){
        return view('colores');
    }
    public function cuadernos(){
        return view('cuadernos');
    }
    public function libreta(){
        return view('libreta');
    }
    public function pinturas(){
        return view('pinturas');
    }
    public function plumones(){
        return view('plumones');
    }
    public function sobres(){
        return view('sobres');
    }
    public function decoracion(){
        return view('decoracion');
    }
    
    public function ver(){
        $articulos = ArticulosModel::all();
        return view('index');    
        }

        public function download(Request $req){
        $articulos = DB::SELECT("SELECT * FROM  tb_articulos");
        $pdf = PDF::loadView('index', [ 'articulos' => $articulos])
        ->save(storage_path('app/public/') . 'tiket.pdf');
        return $pdf->download('tiket.pdf');
       }

       public function carrito($id){
        $usu = carritoModel::create(array(
            'id_producto' => $id,
            
        ));
        return redirect()->route('cero');

       }
       
}