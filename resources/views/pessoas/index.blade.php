

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
    <h2>Relatório de Cadastro</h2><br/>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>ID</th>
            <th>Tipo</th>
            <th>CNPJ / CPF</th>
            <th>Nome</th>
            <th>Nome Fanstasia</th>
            <th>Endereço</th>
            <th>Numero</th>
            <th>Complemento</th>
            <th>Bairro</th>
            <th>Cep </th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone Comercial</th>
            <th>Celular</th>
            <th>Email</th>
            <th>Contato</th>
            <th>Dpto</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pessoas as $post)
            <tr>
                <td> <a href="/alunos/editar/{{$post['id']}}">Editar</a> </td>
                <td>{{$post['id']}}</td>
                <td>{{$post['cadTpPessoa']}}</td>
                <td>{{$post['documento']}}</td>
                <td>{{$post['cadRazaoSocial']}} </td>
                <td>{{$post['cadNomeFantasia']}}</td>
                <td>{{$post['cadEndereco']}}</td>
                <td>{{$post['cadNumero']}}</td>
                <td>{{$post['cadComplemento']}}</td>
                <td>{{$post['cadBairro']}}</td>
                <td>{{$post['cadCep']}}</td>
                <td>{{$post['cadCidade']}}</td>
                <td>{{$post['cadUf']}}</td>
                <td>{{$post['cadTelefone']}}</td>
                <td>{{$post['cadCelular']}}</td>
                <td>{{$post['cadEmail']}}</td>
                <td>{{$post['cadContato']}}</td>
                <td>{{$post['cadDepto']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div class="row">
    <div class="form-group col-md-4" style="margin-top:60px">
        <button type="submit" class="btn btn-success">Editar</button>
    </div>
</div>

<script type="text/javascript">
    $('#datepicker').datepicker({
        autoclose: true,
        format: 'dd-mm-yyyy'
    });
</script>
</body>
</html>