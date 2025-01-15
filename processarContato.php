<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/processarContato.css">
    <title>Confirmação de Contato</title>
</head>
<body>
    <nav>
        <a href="index.php">Inicial</a>
        <a href="conteudo01.php">Ingressos</a>
        <a href="conteudo02.php">Tipos de Ingressos</a>
        <a href="contato.php">Contatos</a>
        <a href="descritiva.php">Descrição</a>
    </nav>

    <h1>Sua sugestão foi recebida com sucesso!</h1>
    <div class="container">
        <?php
        // Verifica se o formulário foi enviado via POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = htmlspecialchars($_POST["nomeUsuario"]);
            $email = htmlspecialchars($_POST["email"]);
            $assunto = htmlspecialchars($_POST["assunto"]);
            $conteudo = htmlspecialchars($_POST["conteudo"]);

            // Exibe as informações enviadas
            echo "<h2>As informações foram recebidas com sucesso!</h2>";
            echo "<div class='input-box'><strong>Nome:</strong> $nome</div>";
            echo "<div class='input-box'><strong>Email:</strong> $email</div>";
            echo "<div class='input-box'><strong>Assunto:</strong> $assunto</div>";
            echo "<div class='input-box'><strong>Conteúdo:</strong> $conteudo</div>";
        } else {
            echo "<p>Nenhum dado foi enviado.</p>";
        }
        ?>
    </div>
</body>
</html>