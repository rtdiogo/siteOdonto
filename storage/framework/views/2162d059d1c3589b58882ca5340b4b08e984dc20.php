<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" ../css/registro.css">
    
    <title>Odonto Clinic</title>
    
</head>
<body>
    <div class="container">
        <div class="title">Registro Paciente</div>
        <form action="#" method="post">
            <div class = "user-details">
                <div class="input-box">
                    <span class="details">Nome completo</span>
                    <input type="text" placeholder="Digite seu nome" name="nome">
                </div>
                
                <div class="input-box">
                    <span class="details">e-mail</span>
                    <input type="text" placeholder="Digite seu e-mail" name="email">
                </div>
                <div class = "user-details">
                <div class="input-box">
                        <span class="details">contato</span>
                        <input type="text" placeholder="Digite seu telefone" name="contato">
                </div>
                <div class = "user-details">
                        <div class="input-box">
                            <span class="details">senha</span>
                            <input type="text" name="senha">
                </div>
                <label for="caixa">Sintomas do paciente:</label><br>
                <textarea id="caixa" name="caixa" rows="5" cols="33">
                </textarea>
                </div>
                <select name="select" >                    
                    <option value="valor2">Masculino</option>
                    <option value="valor3" >Feminino</option>
                    <option value="valor4">Outro</option>
                  </select>
                </div>
                <label for="start">Data Consulta</label><br>
                    <input type="date" id="start" name="data" value="2022-04-01" min="2022-01-01" max="2022-12-31">
            </div>
            <div class="button">
                <input type="submit" value="Registrar">
            </div>

        </form>        
    </div>

</body>
</html><?php /**PATH C:\laravel\odontoClinic\resources\views/registro.blade.php ENDPATH**/ ?>