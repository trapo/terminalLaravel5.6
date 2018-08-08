<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BoleteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

   
     public function index()
    {
        $boleterias = \App\Boleterias::all();
        //var_dump($boleterias);
        return view('boleterias/listado', compact('boleterias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('boleterias/alta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $boleteria = new \App\Boleterias;
        $boleteria->descripcion = $request->get('descripcion');
        $boleteria->email = $request->get('email');
        $boleteria->telefono = $request->get('telefono');
      
        $boleteria->save();
        return redirect('boleterias')->with('success', 'Se Grabó Correctamente la Boleteria');
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
        $boleteria = \App\Boleterias::find($id);
        return view('boleterias/edit', compact('boleteria', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $boleteria = \App\Boleterias::find($id);
        $boleteria->descripcion = $request->get('descripcion');
        $boleteria->email = $request->get('email');
        $boleteria->telefono = $request->get('telefono');
        $boleteria->update();
        return redirect('boleterias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $boleteria = \App\Boleterias::find($id);
        $boleteria->delete();
        return redirect('boleterias')->with('success', 'Se borró Correctamente la Boleteria');
    }
}
