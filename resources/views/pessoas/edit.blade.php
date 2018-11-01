<!-- create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
<body>
<div class="container">
    <h2>Editar Cadastro</h2><br/>
    <form method="post" action="/alunos/update/{{$pessoas->id}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group col-md-6">
                <lable>Tipo de Pessoa</lable>
                <select name="tppessoa">
                    <option value="Fisica">Fisica</option>
                    <option value="Juridica">Juridica</option>
                </select>
            </div>
        </div>
        <div class="row">
             <div class="form-group col-md-6">
                <label for="Name">CNPJ / CPF</label>
                <input type="text" class="form-control" name="documento" value="{{$pessoas->documento}}">
                 {{--<input name="razaoSocial" value="{{ $pessoas->razaoSocial }}">--}}
            </div>
        </div>
        <div class="row">
             <div class="form-group col-md-6">
                <label for="Name">Razao Social / Nome</label>
                    <input type="text" class="form-control" name="razao" value="{{$pessoas->cadRazaoSocial}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="Name">Nome Fantasia</label>
                    <input type="text" class="form-control" name="fantasia" value ="{{$pessoas->cadNomeFantasia}}">
                </div>
        </div>
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="Name">Endereco</label>
                    <input type="text" class="form-control" name="endereco" value ="{{$pessoas->cadEndereco}}">
                </div>
                <div class="form-group col-md-3">
                    <label for="Name">Numero</label>
                    <input type="text" class="form-control" name="numero" value ="{{$pessoas->cadNumero}}">
                </div>

                   <div class="form-group col-md-3">
                        <label for="Name">Complemento</label>
                        <input type="text" class="form-control" name="complemento" value ="{{$pessoas->cadComplemento}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="Name">Bairro</label>
                        <input type="text" class="form-control" name="bairro" value ="{{$pessoas->cadBairro}}">
                    </div>
                </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="Name">Cep</label>
                <input type="text" class="form-control" name="cep" value ="{{$pessoas->cadCep}}">
            </div>
            <div class="form-group col-md-3">
                <label for="Name">Cidade</label>
                <input type="text" class="form-control" name="cidade" value ="{{$pessoas->cadCidade}}">
            </div>
            <div class="form-group col-md-3">
                <label for="Name">Estado</label>
                <input type="text" class="form-control" name="estado" value ="{{$pessoas->cadUf}}">
            </div>
            <div class="form-group col-md-3">
                <label for="Name">Email</label>
                <input type="text" class="form-control" name="email" value ="{{$pessoas->cadEmail}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="Name">Telefone Comercial</label>
                <input type="text" class="form-control" name="telefone" value ="{{$pessoas->cadTelefone}}">
            </div>
            <div class="form-group col-md-3">
                <label for="Name">Tel Celular</label>
                <input type="text" class="form-control" name="celular" value ="{{$pessoas->cadCelular}}">
            </div>
            <div class="form-group col-md-3">
                <label for="Name">Contato</label>
                <input type="text" class="form-control" name="contato" value = "{{$pessoas->cadContato}}">
            </div>
            <div class="form-group col-md-3">
                <label for="Name">Depto</label>
                <input type="text" class="form-control" name="dpto" value = "{{$pessoas->cadDepto}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4" style="margin-top:60px">
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </div>

    </form>
</div>
<script type="text/javascript">
    $('#datepicker').datepicker({
        autoclose: true,
        format: 'dd-mm-yyyy'
    });
</script>
</body>
</html>