<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Odonto Clinic</title>
</head>
<body>
    <?php if(session('erro')): ?>		
		<div class="alert alert-danger">
			<strong>Erro!</strong> <?php echo e(session('erro')); ?>

		</div>		
	<?php endif; ?>

    <form class="login" action="<?php echo e(route('logar')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <h3>Login</h3>
        <input type="text" name="login" placeholder="Login" id="login">
        <input type="password" name="senha" placeholder="Password" id="senha">
        <input type="submit" onclick="logar(); return false">
        <a href="http://google.com/search" target="_blank">esqueci a senha</a>
    </form>
</body>
</html><?php /**PATH C:\laravel\odontoClinic\resources\views/login.blade.php ENDPATH**/ ?>