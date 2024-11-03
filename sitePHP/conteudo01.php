<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda de Ingressos - Shows de Rap, Trap e MPB</title>
    <style>
       
        body {
            font-family: 'Arial', sans-serif;
            background-color: #142433; 
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            display: flex; 
            justify-content: center; 
            align-items: center;
            background-color: #295264; 
            padding: 10px 20px; 
            width: 100%; 
            margin-top: -10px;
        }

        header a {
            color: #ffffff; 
            text-decoration: none; 
            font-size: 25px; 
            padding: 10px; 
            display: inline-block; 
        }

        header a:hover {
            color: #bd2f28; 
        }

        h1 {
            margin-top: 20px;
            color: #ffffff; 
            text-align: center;
            margin-bottom: 30px;
            font-size: 50px;
        }

        h2 {
            color: #bd2f28;
            font-size: 30px;
        }

        p {
            color: #142433; 
            font-size: 20px;
        }

        .ingressos-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr); 
            gap: 20px;
            justify-items: center;
            width: 90%; 
        }

        .ingressos-container img {
            width: 100%; 
            border-radius: 8px;
        }

        .ingresso {
            background-color: #ffffff; 
            border: 1px solid #bdc3c7;
            border-radius: 8px;
            padding: 20px;
            text-align: center; 
        }

        .ingresso:hover {
            transform: scale(1.02);
        }

        button {
            background-color: #89373d; 
            color: white;
            border: none;
            border-radius: 5px;
            padding: 12px 20px;
            font-size: 20px;
            cursor: pointer;
        }

        button:hover {
            background-color: #bd2f28; 
        }    

        .mensagem-sucesso {
            background-color: #fad9a6; 
            color: #295264; 
            font-weight: bold;
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            width: 89%;
        }
    </style>
</head>
<body>

    <header>
        <a href="#">Venda de Ingressos - Shows de Rap, Trap,MPB, Funk, Pop e Sertanejo</a>
    </header>

    <h1>Shows Imperdíveis</h1>

    <div class="ingressos-container">
        <!-- Ingresso 1 -->
        <div class="ingresso">
            <img src="https://www.plural.jor.br/wp-content/uploads/2022/12/racionais.jpg" alt="Show de Rap">
            <h2>Show de Rap</h2>
            <p>Artista: Racionais Mc's</p>
            <p>Data: 10/12/2024</p>
            <p>Local: São Paulo</p>
            <p>Preço: R$ 150,00</p>
            <button>Comprar</button>
        </div>

        <!-- Ingresso 2 -->
        <div class="ingresso">
            <img src="https://midias.correiobraziliense.com.br/_midias/jpg/2023/07/05/1200x801/1_cena2k-28433160.jpg" alt="Show de Trap">
            <h2>Show de Trap</h2>
            <p>Artista: CENA2K24</p>
            <p>Data: 15/12/2024</p>
            <p>Local: Rio de Janeiro</p>
            <p>Preço: R$ 289,00</p>
            <button>Comprar</button>
        </div>

        <!-- Ingresso 3 -->
        <div class="ingresso">
            <img src="https://vejario.abril.com.br/wp-content/uploads/2016/12/caetano-veloso-e-gilberto-gil.jpg?quality=70&strip=all" alt="Show de MPB">
            <h2>Show de MPB</h2>
            <p>Artista: Gilberto Gil e Caetano Veloso</p>
            <p>Data: 20/12/2024</p>
            <p>Local: Belo Horizonte</p>
            <p>Preço: R$ 120,00</p>
            <button>Comprar</button>
        </div>

        <!-- Ingresso 7 -->
        <div class="ingresso">
            <img src="https://s2-g1.glbimg.com/1ODgQq606GDMOY0XXz3GDqW-RGE=/0x0:2000x1556/924x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2022/9/R/ASeYEsSXi37FsPTot26A/dvd-hariel-7150.jpg" alt="Show de Funk">
            <h2>Show de Funk</h2>
            <p>Artista: Hariel</p>
            <p>Data: 02/01/2025</p>
            <p>Local: Vitrinni Lounge SP</p>
            <p>Preço: R$ 200,00</p>
            <button>Comprar</button>
        </div>

        <!-- Ingresso 8 -->
        <div class="ingresso">
            <img src="https://rollingstone.com.br/media/uploads/the-town-festival-sao-paulo-rock-in-rio-foto-divulgacao.jpg" alt="Show de Pop">
            <h2>Show de Pop</h2>
            <p>The Town</p>
            <p>Data: 05/07/2025</p>
            <p>Local: Brasília</p>
            <p>Preço: R$ 430,00</p>
            <button>Comprar</button>
        </div>

        <!-- Ingresso 9 -->
        <div class="ingresso">
            <img src="https://aruanafm.com.br/wp-content/uploads/2024/08/Saiba-como-assistir-de-graca-ao-ultimo-show-do-Buteco.webp.webp" alt="Show de MPB">
            <h2>Show de Sertanejo </h2>
            <p>Artista: Gusttavo Lima </p>
            <p>Data: 08/01/2025</p>
            <p>Local: Curitiba</p>
            <p>Preço: R$ 516,00</p>
            <button>Comprar</button>
        </div>
    </div>

    <div class="mensagem-sucesso">
        <p>Ingressos disponÃ­veis para compra! Aproveite e garanta o seu.</p>
    </div>

</body>
</html>