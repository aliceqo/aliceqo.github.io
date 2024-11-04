<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Venda de Ingressos</title>
</head>
<body>

<nav>
    <a href="index.php">Inicial</a>
    <a href="conteudo01.php">Ingressos</a>
    <a href="conteudo02.php">Tipos de Ingressos</a>
    <a href="contato.php">Contatos</a>
    <a href="descritiva.php">Descrição</a>
</nav>

<header>
    <h1>Venda de Ingressos</h1>
    <p>Encontre ingressos para shows, eventos e muito mais!</p>
</header>

<div class="container">
    <h2>Eventos em Destaque</h2>
    <div class="eventos-destaque">
        <?php
        $eventos = [
            ["nome" => "Show de Rock", "data" => "15/11/2024", "local" => "Arena da Cidade"],
            ["nome" => "Festival de Jazz", "data" => "20/12/2024", "local" => "Parque Central"],
            ["nome" => "Stand-Up Comedy", "data" => "05/01/2025", "local" => "Teatro Municipal"]
        ];

        foreach ($eventos as $evento) {
            echo "<div class='evento-card'>";
            echo "<h3>" . $evento["nome"] . "</h3>";
            echo "<p><strong>Data:</strong> " . $evento["data"] . "</p>";
            echo "<p><strong>Local:</strong> " . $evento["local"] . "</p>";
            echo "<form action='conteudo02.php' method='post'>";
            echo "<button type='submit'>Comprar</button>";
            echo "</form>";
            echo "</div>";
        }               
        ?>
    </div>
</div>

</body>
</html>