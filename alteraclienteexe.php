<?php

    include('includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $ativo = $_POST['ativo'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alteração de cliente</h1>
    <?php

        echo "<p>id: $id</p>";
        echo "<p>nome: $nome</p>";
        echo "<p>email: $email</p>";
        echo "<p>ativo: $ativo</p>";

        $sql = "UPDATE cidade SET nome = '$nome', estado = '$estado' WHERE id = $id";
        $result = mysqli_query($con, $sql);

        if($result)
            echo "Dados atualizados";
        else
            echo "Erro ao atualizar dados";

    ?>
</body>
</html>