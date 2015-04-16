<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <?=Form::open(['url'=>'producto','method'=>'post'])?>
            <div class="form-group">
                <?=Form::label('nombre','Nombre')?>
                <?=Form::text('nombre',null,['class'=>'form-control'])?>
            </div>
            <div class="form-group">
                <?=Form::label('precio','Precio')?>
                <?=Form::text('precio',null,['class'=>'form-control'])?>
            </div>
            <?=Form::submit('Guardar',['class'=>'btn btn-primary'])?>
        </div>
    </div>

</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="<?=asset('vendor/jsvalidation/js/jsvalidation.js')?>"></script>
<?=$validator?>
</body>
</html>