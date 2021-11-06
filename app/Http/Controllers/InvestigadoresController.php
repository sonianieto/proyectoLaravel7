<?php

namespace App\Http\Controllers;

use App\Models\Investigadores;
use App\Models\Clasificacion_Inv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvestigadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          /*$directorioCategoria=CategoriaDirectorio::all();
           return view('categoria.menucategoria',compact('directorio'));*/
         // $clasificacion=Clasificacion_Inv::all();
           $investigador=Investigadores::orderBy('nombre_completo')->paginate(2);
          //dd($investigador);
           return view ('investigador.index', compact('investigador'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('investigador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $investigador = Investigadores::create([
            'ccInvest'=>$request->input('ccInvest'),
            'idtipoDoc'=>$request->input('idtipoDoc'),
            'nombre_completo'=>$request->input('nombre_completo'),
            'genero'=>$request->input('genero'),
            'estado_civil'=>$request->input('estado_civil'),
            'fecha_de_nacimiento'=>$request->input('fecha_de_nacimiento'),
            'idpais'=>$request->input('idpais'),
            'direccion'=>$request->input('direccion'),
            'telefono_celular'=>$request->input('telefono_celular'),
            'email_personal'=>$request->input('email_personal'),
            'idestado_inv'=>$request->input('idestado_inv'),
            'idclasificacion_inv'=>$request->input('idclasificacion_inv'),
            'codigo_orcid'=>$request->input('codigo_orcid'),
            'h5'=>$request->input('H5'),
            'url_google_scholar'=>$request->input('url_google_scholar'),
            'autor_id_scopus'=>$request->input('autor_id_scopus'),
            'researchgate'=>$request->input('researchgate'),
            'researcherid'=>$request->input('researcherid'),
            'url_cvlac'=>$request->input('url_cvlac'),
            'tutor'=>$request->input('tutor'),
        ]); 
        
     
        return redirect()->route('investigador.index');


       /* $investigador = request()->except('_token');
       Investigadores::insert($investigador); 
       
       return response()->json($investigador);*/
    }
       /* $request->validate([
            'categoria_nombre'=> "require|string",
            'categoria_usuarioModificacion'=>"require|string",
            'categoria_acciones'=>"require|string",
        ]);

        $directorioCategoria= CategoriaDirectorio::create([
            'categoria_nombre'=>$request->input('nombreCategoria'),
            'categoria_usuarioModificacion'=>$request->input('usuarioModificacionCategoria'),
            'categoria_acciones'=>$request->input('accionesCategoria'),
        ]);

        return redirect('categoria');*/
   // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\investigadores  $investigadores
     * @return \Illuminate\Http\Response
     */
    public function show($investigador)
    {
        $investigador = Investigadores::findOrFail($investigador);

        return view('investigador.show')->with(['investigador' => $investigador,

    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\investigadores  $investigadores
     * @return \Illuminate\Http\Response
     */
    public function edit($idinv)
    {
        /*$directorioCategoria= CategoriaDirectorio::find($categoria_id);
        return view('modificarcategoriadirectorio.editar',
        compact('directorioCategoria'));*/

        $investigador=Investigadores::findOrFail($idinv);

        return view('investigador.edit', compact('investigador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\investigadores  $investigadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idinv)
    {
        
        $investigador = request()->except(['_token', '_method']);
        Investigador::where('idinv', '=' , $idinv)->update($investigador);

        
        $investigador=Investigadores::findOrFail($idinv);
        return view('investigador.edit', compact('investigador'));

        /*$producto=Producto::find($id);
        $producto->categoriaID=$request->categoriaID;
        $producto->nombreProducto=$request->nombreProducto;
        $producto->descripcion=$request->descripcion;
        $producto->precio=$request->precio;
         
        $producto->save();
        return redirect('producto');*/

      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\investigadores  $investigadores
     * @return \Illuminate\Http\Response
     */
  /* public function destroy(investigadores $investigadores)
    {
        //
    }*/
}
