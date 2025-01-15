<?php
session_start();

$ingressos = [
    ["tipo" => "Pista", "preco" => 150, "beneficios" => "Acesso à área comum, visualização de perto do palco", "imagem" => "img/Pista.webp"],
    ["tipo" => "VIP", "preco" => 300, "beneficios" => "Área VIP com assentos reservados, acesso a lounges", "imagem" => "img/VIP.webp"],
    ["tipo" => "Premium", "preco" => 500, "beneficios" => "Acesso exclusivo, meet and greet com artistas", "imagem" => "img/Premium.webp"],
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tipo_ingresso'])) {
    $tipo_ingresso = $_POST['tipo_ingresso'];
    $_SESSION['mensagem'] = "Compra de ingresso " . htmlspecialchars($tipo_ingresso) . " realizada com sucesso!";
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

$mensagem = '';
if (isset($_SESSION['mensagem'])) {
    $mensagem = $_SESSION['mensagem'];
    session_destroy(); 
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tipos de Ingressos</title>
    <link rel="stylesheet" href="css/conteudo.css">
</head>
<body>
    <nav>
        <a href="index.php">Inicial</a>
        <a href="conteudo01.php">Ingressos</a>
        <a href="conteudo02.php">Tipos de Ingressos</a>
        <a href="contato.php">Contatos</a>
        <a href="descritiva.php">Descrição</a>
    </nav> 

    <h1>Tipos de Ingressos</h1>
   
    <?php if (!empty($mensagem)): ?>
        <p class="mensagem-sucesso"><?php echo $mensagem; ?></p>
    <?php endif; ?>

    <div class="ingressos-container">
        <?php foreach ($ingressos as $ingresso): ?>
            <div class="ingresso">
                <img src="<?php echo $ingresso['imagem']; ?>" alt="<?php echo $ingresso['tipo']; ?>">
                <h2><?php echo $ingresso['tipo']; ?></h2>
                <p>Benefícios: <?php echo $ingresso['beneficios']; ?></p>
                <p>R$ <?php echo $ingresso['preco']; ?></p>

                <form method="post" action="">
                    <input type="hidden" name="tipo_ingresso" value="<?php echo $ingresso['tipo']; ?>">
                    <button type='submit'>Comprar</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>
