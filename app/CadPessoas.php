<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CadPessoas extends Model
{
    protected $table = 'cadPessoas';
    protected $fillable = ['documento','cadRazaoSocial','cadNomeFantasia','cadEndereco','cadNumero','cadBairro','cadCidade','cadComplemento','cadCep','cadTelefone','cadCelular','cadUf','cadEmail','cadTppessoa']; //



}



