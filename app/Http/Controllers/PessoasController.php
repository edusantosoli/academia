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
        var_dump($request->get('razao'));
        $pessoa = new \App\CadPessoas();
        $pessoa->documento = $request->get('documento');
        $pessoa->cadRazaoSocial = $request->get('razao');
        $pessoa->cadRazaoSocial = $request->get('razao');
        $pessoa->save();


        die;

    }

    //
}
