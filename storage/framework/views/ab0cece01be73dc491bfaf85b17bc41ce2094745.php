<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" ../css/cadastro.css">
    <title>Cadastro</title>
</head>
<form action="">
    <?php echo csrf_field(); ?>
    <h1>Cadastro cliente</h1>
    <div class="area-input">
        <label for="">Nome completo</label>
        <input type="text" name="nomecompleto" >
    </div>
    <div class="area-input">
        <label for="">E-mail</label>
        <input type="text" name="email">
    </div>
    <div class="area-input">
        <label for="">Confirme e-mail</label>
        <input type="text" name="email">
    </div>
    <div class="area-input">
        <label for="">Senha</label>
        <input type="password" name="senha">
    </div>
    <div class="area-input">
        <label for="">Repetir Senha</label>
        <input type="password" name="senha">
    </div>
    <button>Cadastrar</button>
</form>
<body>
    
</body>
</html><?php /**PATH C:\laravel\odontoClinic\resources\views/cadastro.blade.php ENDPATH**/ ?>