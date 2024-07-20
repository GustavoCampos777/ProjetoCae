<html>

<head>
    <title> Validar Login </title>
</head>

<body>

    <?php
    include "conexao.php";
    $user = $_POST['user'];
    $senha = $_POST['senha'];
    $sql = mysqli_query($conexao, "SELECT * FROM pessoa WHERE nome='$user' AND senha='$senha'");
    
    $linha = mysqli_num_rows($sql);
    if ($linha > 0) {
        
        header("Location:tela1.php?");
    } else {
        echo "Erro no login<br/>";
        echo "<a href='login.php'>Voltar</a>";
    }
    ?>
</body>

</html>