<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alterar Número</title>
        <script src="https://kit.fontawesome.com/c65d405071.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/estilo.css"/>
    </head>
    <body>
        <?php
        require_once '../bd/conexao.php';
                $idcontato_up= $_GET['id'];            
                $sql = "SELECT * FROM contato where idcontato='$idcontato_up'";
                $contatos = $conexao->query($sql);
                
                  // output data of each row
                    
                  while($l = $contatos->fetch_assoc()) {
                      ?><div id="branca"><div id="lista">
                      <?php //extract($l);
                      $nome_up=$l['nome'];
                      $telefone_up=$l['telefone'];
                      $email_up=$l['email'];
                      ?>
                    <center><i class="fa-solid fa-user fa-border fa-3x"></i></center>      
                    <center><h1>Telefone</h1></center>
                    <div id="geral">
                            <div class="nv-numero"><i class="fa-solid fa-circle-user fa-1x"></i><input class="sem-borda" value=" <?php echo $nome_up;?>" readonly="readonly"></div>
                            <br> <div class="nv-numero"> <i class="fa-solid fa-phone fa-1x"></i> <input class="sem-borda" value="<?php echo $telefone_up;?>" readonly="readonly"></div><br> 
                            <div class="nv-numero"><i class="fa-solid fa-at"></i><input type="text" class="sem-borda" value="<?php echo $email_up;?>" readonly="readonly"></div>
                            <br><br>
                        <form action="EditaNumero.php" method="GET">
                            <input style="display:none;" type="number" id="id" name="id" value="<?php echo $idcontato_up?>">
                            <div class="nv-numero"><i class="fa-solid fa-circle-user fa-1x"></i><input type="text" id="nome_up" name="nome_up" class="sem-borda" placeholder="Digite o novo Nome" required="required"></div>
                            <br> <div class="nv-numero"> <i class="fa-solid fa-phone fa-1x"></i> <input type="text" id="telefone_up" name="telefone_up" class="sem-borda" placeholder="Digite o novo Telefone" required="required"></div><br> 
                            <div class="nv-numero"><i class="fa-solid fa-at"></i><input type="text" id="email_up" name="email_up" class="sem-borda" placeholder="Digite o novo E-mail" required="required"></div><hr>
                            
                            <div class="nv-numero"><input type="submit" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alterar" width="200px"></input></div><?php
                             ?>
                        </form>
                    </div>
                
                          </div>
                  <?php
                  }
       
                  ?>
        
    </body>
</html>