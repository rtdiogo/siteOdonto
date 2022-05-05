<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" ../css/home.css">
    <title>Odonto Clinic</title>
</head>
<body> 
    <div class="banner">
        <div class="navbar">
            <img src="logo.jpg" class="logo">
            <ul>
                <li><a href="<?php echo e(url('/home')); ?>">Home</a></li>
                <li><a href="<?php echo e(url('/quemsomos')); ?>">Quem Somos</a></li>
                <li><a href="<?php echo e(url('/faleconosco')); ?> ">Fale Conosco</li>
                <li><a href="<?php echo e(url('/login')); ?>">LOGIN</a></li>
            </ul>  
        </div> 
        <div class="content">
            <h1>CLÍNICA ODONTOLÓGICA </h1>
            <P>Onde se encontra todos os serviços que procura e com um belo sorriso.<br>Solicite nossa ajuda.</P>
        <div>
            
            <button onclick="window.location.href='<?php echo e(url('/contato')); ?>';"><span></span> Contato</button>
            <button  onclick="window.location.href='<?php echo e(url('/cadastro')); ?>';"><span></span> Cadastrar</button>
        </div>
        </div>       
    </div>
</body>

</html><?php /**PATH C:\laravel\odontoClinic\resources\views/home.blade.php ENDPATH**/ ?>