<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Casas;
use App\Models\Category;
use App\Models\Clasification;



class CasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {
        $request->user()->authorizeRoles('admin');
        $casas = Casas::all();
        $casas = Casas::paginate(5);
        return view('casas.index', compact('casas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $clasifications= Clasification::all();

        return view('casas.crear', compact('categories', 'clasifications'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=> 'required',
            'imagen' => 'required|image|mimes:jpeg,png,svg|max:1024',
            'descripcion'=>'required',
            'categoria'=>'required',
            'clasificacion'=>'required',
            'precio'=>'required'

        ]);
        $casa = $request->all();

         if($imagen = $request->file('imagen')) {
             $rutaGuardarImg = '../public/assents/img/';
             $imagenCasa = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
             $imagen->move($rutaGuardarImg, $imagenCasa);
             $casa['imagen'] = "$imagenCasa";
         }

         Casas::create($casa);
         $casa = Casas::where('nombre', $request->nombre);
         $casa->categorias()->attach($request->categories);
         $casa->clasificaciones()->attach($request->clasifications);
         return redirect()->route('casas.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Casas $casa)
    {
        return view('casas.editar', compact('casa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Casas $casa)
    {
        $request->validate([
            'nombre' => 'required', 'descripcion' => 'required', 'categoria'=>'required',
            'clasificacion'=>'required','precio'=>'required'
        ]);
         $cas = $request->all();
         if($imagen = $request->file('imagen')){
            $rutaGuardarImg = '../assents/img/';
            $imagenCasa = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenCasa);
            $cas['imagen'] = "$imagenCasa";
         }else{
            unset($cas['imagen']);
         }
         $casa->update($cas);
         return redirect()->route('casas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Casas $casa)
    {
        $casa->delete();
        return redirect()->route('casas.index');
    }
}
