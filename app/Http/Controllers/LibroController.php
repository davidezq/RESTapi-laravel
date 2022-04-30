<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::all();
        return $libros;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $libro = new Libro();
        $libro->isbn = $request->isbn;
        $libro->autor = $request->autor;
        $libro->titulo = $request->titulo;
        $libro->precio = $request->precio;
        $libro->save();
        return response()->json(["ok"=>true,"mensaje"=>json_encode($libro)],200);
        //return(json_encode($libro));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $isbn)
    {
        // $libro = Libro::findOrFail($request->id);
        // $libro = Libro::where("isbn",$isbn)->first();
        $libro = Libro::find($isbn);
        if(!$libro){
            return response()->json(["ok"=>false,"mensaje"=>"No se pudo actualizar el libro"],400);
        }
        $libro->autor = $request->autor;
        $libro->titulo = $request->titulo;
        $libro->precio = $request->precio;
        $libro->save();
        return response()->json(["ok"=>true,"libro"=>json_decode($libro)],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // $libro = Libro::destroy($request->id);
        $isbn = $request->id;
        $libro = Libro::where("isbn",$request->id)->delete();
        return response()->json(['ok'=>true,'message'=>$isbn],200);
    }
}
