<html>

<head>
    <title> Login </title>
</head>

<body>
    <h1>Login do Sistema</h1>
    <form method="post" action="validarLoginAdm.php">
        <table>

            <tr>
                <td>Usuario:</td>
                <td><input name="user" type="text"></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input name="senha" type="password"></td>
            </tr>
        </table>
        <br>
        <button type="submit" name="enviar"> Logar </button>
    </form>
</body>

</html>