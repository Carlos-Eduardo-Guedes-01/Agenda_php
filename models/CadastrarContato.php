<?php
    require_once '../bd/conexao.php';
    require_once '../classes/Contato.php';
        $contato=new Contato();
        $contato->setNome($_GET['nome']);
        $contato->setTelefone($_GET['telefone']);
        $contato->setEmail($_GET['email']);
        $n=$_GET['nome'];
        $t=$_GET['telefone'];
        $e=$_GET['email'];
        $consultae=$conexao->query("select email from contato;");
        $consultat=$conexao->query("select telefone from contato;");
        $listaEmails=[];
        $listaTelefones=[];
    while($telefones=$consultat->fetch_assoc()){
        $telefones_existentes=$telefones['telefone'];
        array_push($listaTelefones,$telefones_existentes);
    }
    while ($emails=$consultae->fetch_assoc()){
        $emails_existentes=$emails['email'];
        array_push($listaEmails,$emails_existentes);
    }
    if(in_array($t, $listaTelefones)){
        header("Location:../Novo_numero.php");?>
        <script>
            window.alert("Número já existe");
        </script>
        <?php
} else {
    if(in_array($e,$listaEmails)){
        $_SESSION['msg']="<p style='color:red;'>".'E-mail já existe'."</p>";
        header("Location:../Novo_numero.php");?>
             <script>
                window.alert("E-mail já existe");
            </script>
    <?php
    } else{
        $sql = $conexao->query("INSERT INTO contato (nome, telefone, email) VALUES (trim('$n'), trim('$t'), trim('$e'))");
        $linhas_afetadas= mysqli_affected_rows($conexao);
        if ($linhas_afetadas>0) {
            echo "Cadastro realizado com sucesso";
            header("Location:../index.php");
            echo '<script>window.alert("Cadastro realizado com sucesso!");</script>';

    }   else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
    }

    }
}
mysqli_close($conexao);
