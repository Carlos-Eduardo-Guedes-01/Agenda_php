<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Novo Número</title>
        <script src="https://kit.fontawesome.com/c65d405071.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/estilo.css"/>
    </head>
    <body>
        <center><i class="fa-solid fa-user fa-border fa-3x"></i></center>
        
        <center><h1>Telefone</h1></center>
        <div id="geral">
            <form action="models/CadastrarContato.php" method="get">
                <div class="nv-numero"><label for="nome"><i class="fa-solid fa-circle-user fa-1x"></i></label>
                <input type="text" id="nome" name="nome" placeholder="digite o nome" required></div><br>
                <div class="nv-numero"><label for="telefone"><i class="fa-solid fa-phone fa-1x"></i></label>
                <input type="text" id="telefone" name="telefone" placeholder="digite o telefone" required></div><br>
                <div class="nv-numero"><label for="email"><i class="fa-solid fa-at fa-1x"></i></label>
                    <input type="email" id="email" name="email" placeholder="digite o email" required></div><br><br>
                    <div class="nv-numero"><center><button type="submit" class="Alterar">Cadastrar</button></center></div>
              </form>
        </div>
        <?php
        ?>
    </body>
</html>
