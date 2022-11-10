<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c65d405071.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/searchBar.css"/>
    <link rel="stylesheet" href="../css/estilo.css"/>
    <title>Document</title>
</head>
<body>
    <?php 
    require_once '../serch.php';
    require_once '../bd/conexao.php';
                $busca=$_GET['search'];
                $sql = "SELECT idcontato, nome, telefone, email FROM contato where nome like '$busca%' ORDER BY nome";
                $contatos = $conexao->query($sql);
                
                if ($contatos->num_rows > 0) {
                  
                    
                  while($l = $contatos->fetch_assoc()) {
                      ?><div id="branca-busca" style="margin-top: 2%;"><i class='fa-solid fa-user fa-border fa-4x' id='contatos'></i><div id="lista">
                              <form action="models/AlteraNumero.php" method="GET">
                                  <?php 
                                  //var_dump($l);
                                  $id=$l['idcontato'];
                                  $nome=$l['nome'];
                                  $telefone=$l['telefone'];
                                  $email=$l['email'];
                                  ?>
                                  <input style="display:none;" type="number" id="idcontato" name="idcontato" value="<?php echo $id;?>" readonly="readonly">
                                  Nome:<input type="text" id="nome" name="nome" class="sem-borda" value=" <?php echo $nome; ?>" readonly="readonly">
                                  <br> Telefone: <input type="text" id="telefone" name="telefone" class="sem-borda" value="<?php echo $telefone?>" readonly="readonly"><br> E-mail: 
                                  <input type="text" id="email" name="email" class="sem-borda" value="<?php echo $email;?>" readonly="readonly"><hr>
                                  <?php echo "<center><a href='models/AlteraNumero.php?id=$id'>Alterar/Excluir</a></center>";?></div><br>
                          
                <?php ?></div></form><br>
                
                    <?php
                
                    }}?><div class="adicionar"><a href="Novo_numero.php"><i class="fa-solid fa-plus fa-4x"></i></a></div><?php
                  
                $conexao->close();?>
</body>
</html>