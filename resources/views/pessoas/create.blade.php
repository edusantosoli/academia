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
    <h2>Cadastro de Pessoas</h2><br/>
    <form method="post" action="/alunos/cadastrar" enctype="multipart/form-data">
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
                <label for="Name">CNPJ</label>
                <input type="text" class="form-control" name="documento">
            </div>
            <div class="form-group col-md-6">
                <label for="Name">CPF</label>
                <input type="text" class="form-control" name="documento">
            </div>
        </div>
        <div class="row">
             <div class="form-group col-md-6">
                <label for="Name">Razao Social / Nome</label>
                    <input type="text" class="form-control" name="razao">
                </div>
                <div class="form-group col-md-6">
                    <label for="Name">Nome Fantasia</label>
                    <input type="text" class="form-control" name="fantasia">
                </div>
        </div>

            <div class="row">
                <div class="form-group col-md-3">
                    <label for="Name">Endereco</label>
                    <input type="text" class="form-control" name="razao">
                </div>
                <div class="form-group col-md-3">
                    <label for="Name">Numero</label>
                    <input type="text" class="form-control" name="fantasia">
                </div>

                   <div class="form-group col-md-3">
                        <label for="Name">Complemento</label>
                        <input type="text" class="form-control" name="documento">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="Name">Bairro</label>
                        <input type="text" class="form-control" name="documento">
                    </div>
                </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="Name">Cep</label>
                <input type="text" class="form-control" name="razao">
            </div>
            <div class="form-group col-md-3">
                <label for="Name">Cidade</label>
                <input type="text" class="form-control" name="fantasia">
            </div>

            <div class="form-group col-md-3">
                <label for="Name">Estado</label>
                <input type="text" class="form-control" name="documento">
            </div>
            <div class="form-group col-md-3">
                <label for="Name">Email</label>
                <input type="text" class="form-control" name="documento">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12" style="margin-top:60px">
                <button type="submit" class="btn btn-success">Gravar</button>
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