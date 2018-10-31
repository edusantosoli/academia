<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CadPessoas;

class PessoasController extends Controller
{

    public function index ()
    {
        $pessoas = CadPessoas::orderBy('id', 'desc')->paginate(10);
        return view('pessoas.index', ['pessoas' => $pessoas]);
    }

    public function create ()
    {
        return view('pessoas.create');

    }

    /**
     * @param Request $request
     */
    public function store (Request $request)
    {

        var_dump($request->get('documento'));
        var_dump($request->get('razao'));
        var_dump($request->get('fantasia'));
        var_dump($request->get('endereco'));
        var_dump($request->get('numero'));
        var_dump($request->get('complemento'));
        var_dump($request->get('cep'));
        var_dump($request->get('telefone'));
        var_dump($request->get('celular'));
        var_dump($request->get('estado'));
        var_dump($request->get('email'));
        var_dump($request->get('tppessoa'));
        var_dump($request->get('contato'));
        var_dump($request->get('dpto'));

        $pessoa = new \App\CadPessoas();
        $pessoa->documento = $request->get('documento');
        $pessoa->cadRazaoSocial = $request->get('razao');

        if ($request->get('fantasia'))
            $pessoa->cadNomeFantasia = $request->get('fantasia');

        $pessoa->cadEndereco = $request->get('endereco');
        $pessoa->cadNumero = $request->get('numero');
        $pessoa->cadBairro = $request->get('bairro');
        $pessoa->cadCidade = $request->get('cidade');
        $pessoa->cadComplemento = $request->get('complemento');
        $pessoa->cadCep = $request->get('cep');
        $pessoa->cadTelefone = $request->get('telefone');
        $pessoa->cadCelular = $request->get('celular');
        $pessoa->cadUf = $request->get('estado');
        $pessoa->cadEmail = $request->get('email');
        $pessoa->cadTpPessoa = $request->get('tppessoa');
        $pessoa->cadContato = $request->get('contato');
        $pessoa->cadDepto = $request->get('dpto');

        $pessoa->save();


        die;

    }

    /**
     *
     */
    public function edit ()
    {
    }
}