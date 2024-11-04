<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/conteudo1.css">
    <title>Ingressos</title>
</head>
<body>
    <nav>
        <a href="index.php">Inicial</a>
        <a href="conteudo01.php">Ingressos</a>
        <a href="conteudo02.php">Tipos de Ingressos</a>
        <a href="contato.php">Contatos</a>
        <a href="descritiva.php">Descrição</a>
    </nav>

    <h1>Shows Imperdíveis</h1>

    <div class="ingressos-container">
        <div class="ingresso">
            <img src="https://www.plural.jor.br/wp-content/uploads/2022/12/racionais.jpg" alt="Show de Rap">
            <h2>Show de Rap</h2>
            <p>Artista: Racionais Mc's</p>
            <p>Data: 10/12/2024</p>
            <p>Local: São Paulo</p>
            <p>Preço: R$ 150,00</p>
            <form action='conteudo02.php' method='post'>
                <button type='submit'>Comprar</button>
            </form>
        </div>

        <div class="ingresso">
            <img src="https://midias.correiobraziliense.com.br/_midias/jpg/2023/07/05/1200x801/1_cena2k-28433160.jpg" alt="Show de Trap">
            <h2>Show de Trap</h2>
            <p>Artista: CENA2K24</p>
            <p>Data: 15/12/2024</p>
            <p>Local: Rio de Janeiro</p>
            <p>Preço: R$ 289,00</p>
            <form action='conteudo02.php' method='post'>
                <button type='submit'>Comprar</button>
            </form>
        </div>

        <div class="ingresso">
            <img src="https://vejario.abril.com.br/wp-content/uploads/2016/12/caetano-veloso-e-gilberto-gil.jpg?quality=70&strip=all" alt="Show de MPB">
            <h2>Show de MPB</h2>
            <p>Artista: Gilberto Gil e Caetano Veloso</p>
            <p>Data: 20/12/2024</p>
            <p>Local: Belo Horizonte</p>
            <p>Preço: R$ 120,00</p>
            <form action='conteudo02.php' method='post'>
                <button type='submit'>Comprar</button>
            </form>
        </div>

        <div class="ingresso">
            <img src="https://s2-g1.glbimg.com/1ODgQq606GDMOY0XXz3GDqW-RGE=/0x0:2000x1556/924x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2022/9/R/ASeYEsSXi37FsPTot26A/dvd-hariel-7150.jpg" alt="Show de Funk">
            <h2>Show de Funk</h2>
            <p>Artista: Hariel</p>
            <p>Data: 02/01/2025</p>
            <p>Local: Vitrinni Lounge SP</p>
            <p>Preço: R$ 200,00</p>
            <form action='conteudo02.php' method='post'>
                <button type='submit'>Comprar</button>
            </form>
        </div>

        <div class="ingresso">
            <img src="https://rollingstone.com.br/media/uploads/the-town-festival-sao-paulo-rock-in-rio-foto-divulgacao.jpg" alt="Show de Pop">
            <h2>Show de Pop</h2>
            <p>The Town</p>
            <p>Data: 05/07/2025</p>
            <p>Local: Brasília</p>
            <p>Preço: R$ 430,00</p>
            <form action='conteudo02.php' method='post'>
                <button type='submit'>Comprar</button>
            </form>
        </div>

        <div class="ingresso">
            <img src="https://aruanafm.com.br/wp-content/uploads/2024/08/Saiba-como-assistir-de-graca-ao-ultimo-show-do-Buteco.webp.webp" alt="Show de MPB">
            <h2>Show de Sertanejo </h2>
            <p>Artista: Gusttavo Lima </p>
            <p>Data: 08/01/2025</p>
            <p>Local: Curitiba</p>
            <p>Preço: R$ 516,00</p>
            <form action='conteudo02.php' method='post'>
                <button type='submit'>Comprar</button>
            </form>
        </div>
    </div>

    <div class="mensagem-sucesso">
        <p>Ingressos disponíveis para compra! Aproveite e garanta o seu.</p>
    </div>

</body>
</html>