<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Login</title>
</head>
<body>

<?php
$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Verificar as credenciais (exemplo simples)
    if ($usuario === 'usuario' && $senha === 'senha') {
        $mensagem = 'Login bem-sucedido!';
    } else {
        $mensagem = 'Credenciais inválidas. Tente novamente.';
    }
}
?>

<h2>Formulário de Login</h2>
<p><?php echo $mensagem; ?></p>

<form method="POST" action="">
    <label for="usuario">Usuário:</label>
    <input type="text" id="usuario" name="usuario" required><br><br>

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required><br><br>

    <input type="submit" value="Login">
</form>

</body>
</html>
