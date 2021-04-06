<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Validator;
use App\clientes;
use App\dividas;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class clientesController extends Controller
{

    protected function validarclientes($request)
    {
        $validator = Validator::make($request->all(), [
            "nome" => "required",
            "email" => "required",
            "telefone" => "required | numeric"

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
        return view('clientes.create', compact('clientes'));
    }
    public function index(Request $request)
    {
        $qtd = $request['qtd'] ?: 5;
        $page = $request['page'] ?: 1;
        $buscar = $request['buscar'];
        Paginator::currentPageResolver(function () use ($page) {
            return $page;
        });
        if ($buscar) {
            $clientes = DB::table('clientes')->where('nome', 'ilike', '%'.$buscar.'%')->paginate($qtd);
        } else {
            $clientes = DB::table('clientes')->paginate($qtd);
        }
        $clientes = $clientes->appends(Request::capture()->except('page'));
        return view('clientes.index', compact('clientes'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validarclientes($request);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $dados = $request->all();
        clientes::create($dados);
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = clientes::find($id);

        return view('clientes.show', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = clientes::find($id);
        return view('clientes.edit', compact('clientes'));
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
        $validator = $this->validarclientes($request);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        $clientes = clientes::find($id);
        $dados = $request->all();
        $clientes->update($dados);
        return redirect()->route('clientes.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(dividas::where('clientes_id', '=', $id)->count()){
            $msg = "Não é possível excluir este cliente. Os dividas com id ( ";
            $dividas = dividas::where('clientes_id', '=', $id)->get();
            foreach($dividas as $divida){
                $msg .= $divida->id." ";
            }
            $msg .= " ) estão relacionados com este cliente!";

            \Session::flash('mensagem', ['msg'=>$msg]);
            return redirect()->route('clientes.remove', $id);
        }
        clientes::find($id)->delete();
        return redirect()->route('clientes.index');
    }


    public function remover($id)
    {
        $clientes = clientes::find($id);

        return view('clientes.remove', compact('clientes'));
    }

    public function dividas($id)
    {
        $clientes = clientes::find($id);
        return view('clientes.dividas', compact('clientes'));
    }
}
