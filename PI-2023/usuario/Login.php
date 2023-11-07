<?php

// Verifique se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha os valores do formulário
    $email = $_POST["username"];
    $senha= $_POST["password"];
    
    // Faça a validação do login aqui
    // Por exemplo, você pode verificar em um banco de dados se o nome de usuário e a senha correspondem a um registro válido

    // Simulação simples de validação (não segura)
    if ($email === "usuario" && $senha === "senha") {
        // Login bem-sucedido, redirecione para a página principal
        header("...\PI-2023\index.php");
        exit();
    } else {
        // Exiba uma mensagem de erro
        echo "Nome de usuário ou senha incorretos.";
    }
}

?>

    <h2>Formulário de Login</h2>
    <form method="post" action="processa_login.php">
        <label for="username">Nome de usuário:</label>
        <input type="text" name="username" id="username" required>
        <br><br>
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required>
        <br><br>
        <input type="submit" value="Entrar">
    </form>

