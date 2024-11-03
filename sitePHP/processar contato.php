<!DOCTYPE html>
<html>
<head>
    <title>Confirmação de Contato</title>
</head>
<body>

<?php
if (!empty($_POST["enviar"])) {
    $nome = htmlspecialchars($_POST["nomeUsuario"]);
    $email = htmlspecialchars($_POST["email"]);
    $assunto = htmlspecialchars($_POST["assunto"]);
    $conteudo = htmlspecialchars($_POST["conteudo"]);

    $enviarParaEmail = "brunovinalves673@gmail.com";
    $mailCabecalhos = "De: " . $nome . " <" . $email . ">";

    if (mail($enviarParaEmail, $assunto, $conteudo, $mailCabecalhos)) {
        echo "<h2>Seu contato foi enviado com sucesso!</h2>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Assunto:</strong> $assunto</p>";
        echo "<p><strong>Conteúdo:</strong> $conteudo</p>";
    } else {
        echo "<p>Houve um erro ao enviar sua mensagem. Tente novamente.</p>";
    }
} else {
    echo "<p>Nenhum dado foi enviado.</p>";
}
?>

</body>
</html>
