<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario cadastro cliente</title>
</head>
<body>
    <form action="cadastroclienteexe.php" method="post">
        <fieldset>
            <legend>Cadastro Cliente</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>
            <br>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>
            <br>
            <div>
                <label for="password">Senha</label>
                <input type="password" name="password" id="password">
            </div>
            <br>
            <div>
                <label for="ativo">Ativo</label>
                <input type="checkbox" id="opcaosim" name="sim" value="sim">
                <label for="opcaosim">Sim</label>

                <input type="checkbox" id="opcaonao" name="nao" value="nao">
                <label for="opcaonao">Não</label>
            </div>
            <div>
                <label for="cidade">Cidade</label>
                <select name="cidade" id="cidade">
                    <?php

                        include('includes/conexao.php');
                        $sql = "SELECT * FROM cidade";
                        $result = mysqli_query($con, $sql);

                        while($row = mysqli_fetch_array($result)) {
                            echo "<option value='".$row['id']."'>".$row['nome']."/".$row['estado']."</option>";
                        }

                    ?>
                </select>
            </div>
            <br>
            <div>
                <button type="submit">Cadastrar</button>
            </div>
        </fieldset>
    </form>
</body>
</html>