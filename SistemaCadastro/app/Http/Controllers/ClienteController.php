<?php

namespace App\Http\Controllers;

use App\cliente;
use Facade\FlareClient\Http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Echo_;

use function PHPSTORM_META\map;

class ClienteController extends Controller
{

    public function index()
    {
        //retorna todos os clientes do banco
        $dados=cliente::select()->get();
        return view("index",compact("dados"));
    }

    public function create()
    {
        //retorna a view de cadastro de cliente
        return view("Adicionar");
    }

    public function store(Request $request)
    {
        //validaçao de formulario
        $request->validate([
            'nome'=>'required',
            'email'=>'required|email',
            'telefone'=>'required',
            'senha'=>'required',
            'dia'=>'required',
            'mes'=>'required',
            'ano'=>'required'
        ]);

        //criando um novo registro no banco
        Cliente::insert([
            "nome_cliente"=>$request->nome,
            "email_cliente"=>$request->email,
            "telefone_cliente"=>$request->telefone,
            "senha_cliente"=>Hash::make($request->senha),
            "data_nasc_cliente"=>$request->ano."-".$request->mes."-".$request->dia
        ]);

        //consulta o ultimo resgistro do banco
        $dadoBD=Cliente::select()->orderBy('id_cliente','desc')->first();

        //criaçao do link para ediçao
        $link="Editar_id=".$dadoBD->id_cliente;

        //retorna o link e os dados do cliente
        return view("Adicionar",compact("link","dadoBD"));
    }

    public function show(cliente $cliente)
    {
        //
    }

    public function edit(cliente $cliente, Request $request)
    {
        //retorna os dados do banco de dados
        $clienteBD=$cliente::all();

        //retorna id da requisição
        $id=$request->id;
        return view("Editar",compact('clienteBD','id'));
    }

    public function update(Request $request, cliente $cliente)
    {
        //validaçao de formulario
        $request->validate([
            'nome'=>'required',
            'email'=>'required|email',
            'telefone'=>'required',
            'senha'=>'required',
            'dia'=>'required',
            'mes'=>'required',
            'ano'=>'required'
        ]);

        //faz atualizaçao no banco usando id
        Cliente::where('id_cliente','=',$request->id)->update([
            "nome_cliente"=>$request->nome,
            "email_cliente"=>$request->email,
            "telefone_cliente"=>$request->telefone,
            "senha_cliente"=>$request->senha,
            "data_nasc_cliente"=>$request->ano."-".$request->mes."-".$request->dia
        ]);

        //redireciona a pagina para raiz
        return redirect("/");
    }

    public function destroy(cliente $cliente)
    {

    }
}
