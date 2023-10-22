<?php

namespace App\Http\Controllers;

use App\Models\Telefono;
use Illuminate\Http\Request;

class TelefonoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $telefonos = Telefono::all();
        return view('telefono.index', compact('telefonos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $telefono=new Telefono;

        if($request->hasFile('featured')){
            $file=$request->file('featured');
            $destinationPath='image/featureds/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('featured')->move($destinationPath, $filename);
            $telefono->featured = $destinationPath . $filename;
        }

        $telefono->nombre = $request->input('nombre');
        $telefono->marca = $request->input('marca');
        $telefono->modelo = $request->input('modelo');
        $telefono->anio = $request->input('anio');
        $telefono->color = $request->input('color');
        $telefono->telefonia = $request->input('telefonia');
        $telefono->tamaño = $request->input('tamaño');

        $telefono->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Telefono $telefono)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $telefono= Telefono::find($id);

        if($request->hasFile('featured')){
            $file=$request->file('featured');
            $destinationPath='image/featureds/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('featured')->move($destinationPath, $filename);
            $telefono->featured = $destinationPath . $filename;
        }

        $telefono->nombre = $request->input('nombre');
        $telefono->marca = $request->input('marca');
        $telefono->modelo = $request->input('modelo');
        $telefono->anio = $request->input('anio');
        $telefono->color = $request->input('color');
        $telefono->telefonia = $request->input('telefonia');
        $telefono->tamaño = $request->input('tamaño');
        $telefono->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $telefono=Telefono::find($id);
        $telefono->delete();
        return redirect()->back();
    }
}
