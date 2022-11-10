<?php
require_once '../bd/conexao.php';
    $idcontato_upd= $_GET["id"];
    $nome_upd=$_GET['nome_up'];
    $telefone_upd=$_GET['telefone_up'];
    $email_upd=$_GET['email_up'];
    
$sql = "UPDATE contato SET nome='$nome_upd',telefone='$telefone_upd',email='$email_upd' WHERE idcontato='$idcontato_upd'";

if (mysqli_query($conexao, $sql)) {
  echo "Record updated successfully";
  if(mysqli_affected_rows($conexao)>0){
    header("Location:../index.php");
  }
} else {
  echo "Error updating record: " . mysqli_error($conexao);
}
    
    mysqli_close($conexao);