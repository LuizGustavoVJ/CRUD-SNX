<?php

namespace App\Http\Controllers\Admin;  

use App\Http\Controllers\Controller;
use App\Carro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Admin\flash;

class CarroController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('carros.index')->withCarros(Carro::paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['status'] = true;

        Carro::create($data);

        flash('Veículo cadastrado com Sucesso!')->success();

        return redirect()->route('carros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Carro::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carro = Carro::findOrFail($id);
        return view('carros.edit')->withCarro($carro);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $data = $request->all();
        $carro = Carro::findOrFail($id);

        $carro->update($data);

        flash('Veículo atualizado com Sucesso!')->success();

        return redirect()->route('carros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carro = Carro::findOrFail($id);

        $carro->delete();

        flash('Veículo Excluído com Sucesso!')->success();

        return redirect()->route('carros.index');
    }
}
