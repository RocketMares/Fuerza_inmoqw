<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;    
class Mi_Controlador extends Controller
{
    public function index()
    {
        $notas = App\Nota::paginate(4);
        return view('welcome', compact('notas'));
    }
    public function detalles($id){
        $nota = App\Nota::findOrFail($id);
        return view('notas.detalle',compact('nota'));
    }
    public function crear(request $request){
       $request->validate([
        "nombre" => "required",
        "descripcion" => "required",
       ]);
        //return $request->all();
        $nota_nueva = new App\Nota;
        $nota_nueva->nombre = $request->nombre;
        $nota_nueva->descripcion = $request->descripcion;
        $nota_nueva->save();
        return back()->with('Mensaje','Nota agregada satisfactoriamente');
    }
    public function editar($id){
        $datos_nota = App\Nota::findOrFail($id);
         return view('notas.editar',compact('datos_nota'));
     }
     
     public function eliminar($id){
        $delete_nota = App\Nota::findOrFail($id);
        $delete_nota->delete();
         return back()->with('Mensaje','Se elimino la Nota ('.$id.') Satisfactoriamente');
     }

     public function update(request $request,$id){
        //  return $request->all();
         $request->validate([
            "nombre" => "required",
            "descripcion" => "required",
         ]);
         $nota_update =App\Nota::findOrFail($id);
         $nota_update->nombre = $request->nombre;
         $nota_update->descripcion = $request->descripcion;
         $nota_update->save();
         return back()->with('Mensaje','Nota Actualizada satisfactoriamente');
     }
    public function fotos(){
        return view('fotos');
    }
    public function blog(){
        return view('blog');
    }
    public function Nosostros($nombre = null){
        $equipo = ['Andres','Iker','Samantha'];
        return view('nosotros',compact('equipo','nombre')) ;
    }
}
