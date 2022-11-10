<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once '../bd/conexao.php';
            require_once '../classes/Contato.php';
                $idcontato= filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
                $telefone=filter_input(INPUT_GET,'telefone',FILTER_SANITIZE_SPECIAL_CHARS);
                $nome=filter_input(INPUT_GET,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
                
                var_dump($idcontato);
                
                $consulta_del = "SELECT idcontato FROM contato WHERE idcontato = $idcontato";
                $result_consulta = $conexao->query($consulta_del);
                $line_consult= mysqli_affected_rows($conexao);

                if (($result_consulta) AND ($line_consult != 0)) {
                    $query_del = "DELETE FROM contato WHERE idcontato = $idcontato";
                    $exclui_contato = $conexao->query($query_del);
                }
                $linhas_afetadas= mysqli_affected_rows($conexao);
                if ($linhas_afetadas==1) {
                    echo "excluido com sucesso";
                    header("Location:../index.php");
                }else{
                    echo 'erro inesperado';
                }
                mysqli_close($conexao)
            ?>
    </body>
</html>