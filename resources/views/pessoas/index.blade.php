

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
    <h2>Lista de Pessoas</h2><br/>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Razao Social</th>
            <th>Nome Fantasia</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pessoas as $post)
            <tr>
                <td>{{$post['id']}}</td>
                <td>{{$post['cadRazaoSocial']}}</td>
                <td>{{$post['cadRazaoSocial']}}</td>
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