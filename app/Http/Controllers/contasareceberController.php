<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Validator;
use App\clientes;
use App\contasareceber;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

use Illuminate\Pagination\Paginator;

class contasareceberController extends Controller

{


    protected function validarcontasareceber($request)
    {
        $validator = Validator::make($request->all(), [


        ]);
        return $validator;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $clientes = clientes::all();
        return view('contasareceber.create', compact('clientes'));
    }
    public function index(Request $request)
    {
        $qtd = $request['qtd'] ?: 4;
        $page = $request['page'] ?: 1;
        $buscar = $request['buscar'];
        Paginator::currentPageResolver(function () use ($page) {
            return $page;
        });
        if ($buscar) {
            //$contasareceber = DB::table('contasareceber')->where('nome', 'ilike', '%'.$buscar.'%')->paginate($qtd);
            $contasareceber = contasareceber::where('nome', 'ilike', '%'.$buscar.'%')->paginate($qtd);
        } else {
            //$contasareceber = DB::table('contasareceber')->paginate($qtd);
            $contasareceber = contasareceber::paginate($qtd);
        }


        $contasareceber = $contasareceber->appends(Request::capture()->except('page'));
        return view('contasareceber.index', compact('contasareceber'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $dados = $request->all();
        contasareceber::create($dados);
        return redirect()->route('contasareceber.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contasareceber = contasareceber::find($id);

        return view('contasareceber.show', compact('contasareceber'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $contasareceber = contasareceber::find($id);
        $clientes = clientes::all();

        return view('contasareceber.edit', compact('contasareceber', 'clientes'));
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
        $validator = $this->validarcontasareceber($request);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        $contasareceber = contasareceber::find($id);
        $dados = $request->all();
        $contasareceber->update($dados);
        return redirect()->route('contasareceber.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        contasareceber::find($id)->delete();
        return redirect()->route('contasareceber.index');
    }

    public function remover($id)
    {
        $contasareceber = contasareceber::find($id);

        return view('contasareceber.remove', compact('contasareceber'));
    }
}
