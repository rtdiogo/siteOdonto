<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href=" ../css/faleconosco.css">
        <title>Cadastro</title>
    </head>
    <body>  
        <div>
            <h1 id="titulo">Fale Conosco</h1>
            <p id="subtitulo">Complete suas informações</p>
            <br>
        </div>
        <form>
            <fieldset class="grupo">
                <div class="campo">
                    <label for="nome"><strong>Nome</strong></label>
                    <input type="text" name="nome">
                </div>
                <div class="campo">
                    <label for="sobrenome"><strong>Sobrenome</strong></label>
                    <input type="text" name="sobrenome">
                </div>
            </fieldset> 
            <div class="campo">
                <label for="email"><strong>E-mail</strong></label>
                <input type="email" name="email">
            </div>
            <div class="campo">
                <label><strong>Você quer:</strong></label>
                <label>
                    <input type="radio" name="devweb" value="duvidas" checked>Dúvidas
                </label>
                <label>
                    <input type="radio" name="devweb" value="consultas">Consultas
                </label>
            </div>
            <div class="campo">
                <label for="cidade"><strong>Seleciona sua cidade</strong></label>
                <select id="cidade" required>
                  <option selected disabled value="">Selecione</option>
                  <option>Maceió</option>
                  <option>Coité do Nóia</option>
                  <option>Jacaré dos Homens</option>
                </select>
            </div>
            <div class="campo">
                <br>
                <label for="conte"><strong>Conte um pouco mais: </strong></label>
                <textarea rows="6" style="width: 26em" id="conte" name="conte"></textarea>
            </div>
            <button class="botao" type="submit" onsubmit="">Concluído</button>            
        </form>
    </body>
</html>


<?php /**PATH C:\laravel\odontoClinic\resources\views/faleconosco.blade.php ENDPATH**/ ?>