<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contatos</title>
        <script src="https://kit.fontawesome.com/c65d405071.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/searchBar.css"/>
        <link rel="stylesheet" href="css/estilo.css"/>
    </head>
<body>
    <?php 
    require_once 'serch.php';
    ?>
        <?php
            require_once './bd/conexao.php';
            $sql = "SELECT idcontato, nome,telefone, email FROM contato ORDER BY nome";
            $contatos = $conexao->query($sql);
                
            if ($contatos->num_rows > 0) {


              while($l = $contatos->fetch_assoc()) {
                  ?><div id="branca"><i class='fa-solid fa-user fa-border fa-4x' id='contatos'></i><div id="lista">
                          <form action="models/AlteraNumero.php" method="GET">
                              <?php 
                              //var_dump($l);
                              $id=$l['idcontato'];
                              $nome=$l['nome'];
                              $telefone=$l['telefone'];
                              $email=$l['email'];
                              ?>
                              <input style="display:none;" type="number" id="id" name="id" value="<?php echo $id;?>" readonly="readonly">
                              Nome:<input type="text" id="nome" name="nome" class="sem-borda" value=" <?php echo $nome; ?>" readonly="readonly">
                              <br> Telefone: <input type="text" id="telefone" name="telefone" class="sem-borda" value="<?php echo $telefone?>" readonly="readonly"><br> E-mail: 
                              <input type="text" id="email" name="email" class="sem-borda" value="<?php echo $email;?>" readonly="readonly"><hr>
                              <div class="nv-numero"><input type="submit" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alterar"></input></div></div><?php echo "<a href='models/ExcluirNumero.php?id=$id'><i class='fa-solid fa-trash-can fa-3x'></i></a><br>"?>
            </div></form><br>
                <?php
                }}?><div class="adicionar"><a href="Novo_numero.php"><i class="fa-solid fa-plus fa-4x"></i></a></div><?php
            $conexao->close();
        ?>
</body>    
</html>