<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/descritiva.css">
    <title>Descritiva</title>
</head>
<body>
    <nav>
        <a href="index.php">Inicial</a>
        <a href="conteudo01.php">Ingressos</a>
        <a href="conteudo02.php">Tipos de Ingressos</a>
        <a href="contato.php">Contatos</a>
        <a href="descritiva.php">Descrição</a>
    </nav>

    <div class="descricao">
        <h1>Descrição do site</h1>

        <h2>
            Cristhyan Santana de Paula:
            index.php
        </h2>
        <p>
            1 - Sessão em PHP
            A sessão em PHP é o ponto de partida para o código, onde usamos o comando session_start(). Ele serve para que o site possa "lembrar" do usuário durante sua navegação. Por exemplo, se o usuário fizer login, o site poderá reconhecer e armazenar temporariamente essa informação, permitindo que ele continue autenticado enquanto explora as outras páginas.
            <br><br>
            2 - Estrutura HTML da Página
            A estrutura HTML é como a "espinha dorsal" da página web. Ela organiza os elementos que o usuário vê, como títulos, menus, seções de conteúdo, etc. Cada parte do HTML ajuda a organizar o conteúdo:
            <ul>
                <li>Cabeçalho: O cabeçalho do site contém o nome e a descrição da página principal, dando as boas-vindas e explicando brevemente o objetivo do site - vender ingressos para eventos.</li>
                <li>Menu de Navegação: O menu é uma lista de links para que o usuário possa acessar facilmente outras partes do site, como a lista de eventos, a página de contato e a seção "Sobre Nós".</li>
                <li>Conteúdo Principal: Esta parte mostra os eventos em destaque, listando as informações principais, como nome, data e local. Os eventos são organizados para chamar a atenção e dar uma visão geral do que o site oferece.</li>
            </ul>
            3 - Estilos com CSS
            O CSS é como o "estilista" da página - ele decide como tudo deve se parecer. Aqui estão algumas coisas que ele faz:
            <ul>
                <li>Identidade Visual: Escolhemos cores específicas (como laranja e preto) para o cabeçalho, menu e cartões de eventos. Isso cria uma aparência consistente em toda a página.</li>
                <li>Organização e Espaçamento: O CSS também define o espaço ao redor de cada elemento, garantindo que o conteúdo não fique amontoado e seja agradável de ver.</li>
                <li>Efeitos Visuais: O CSS adiciona pequenos efeitos, como um destaque nos links ao passar o mouse e uma leve elevação dos cartões de eventos. Esses toques visuais ajudam a tornar a página mais interativa e profissional.</li>
            </ul>
            4 - Conteúdo Dinâmico com PHP
            Para listar os eventos em destaque, usamos o PHP para gerar os detalhes dos eventos automaticamente, o que facilita atualizações futuras. Em vez de adicionar cada evento manualmente no HTML, criamos uma lista de eventos no PHP, e ele monta as informações de cada evento na tela. Isso significa que podemos adicionar novos eventos rapidamente sem precisar modificar a estrutura HTML.
            <br><br>
            Resumo:
            No geral, a página principal é composta de:
            <ul>
                <li>PHP para Sessões: Garante que o site possa guardar dados temporários do usuário.</li>
                <li>HTML para Estrutura: Organiza o conteúdo da página.</li>
                <li>CSS para Estilo: Define as cores, fontes e o layout geral.</li>
                <li>PHP para Conteúdo Dinâmico: Facilita a exibição automática dos eventos em destaque.</li>
            </ul>
        </p>

        <h2>
            Wanessa da Silva Izaltino:
            conteudo01.php, conteudo1.css
        </h2>
        <p>
            1 - Comecei com &lt!DOCTYPE html&gt, organizando a página em &lthtml&gt, &lthead&gt e &ltbody&gt. No &lthead&gt, usei &ltmeta charset="UTF-8"&gt para garantir que os caracteres especiais apareçam corretamente. O &lttitle&gt define o nome que aparece na aba do navegador, e dentro do &ltstyle&gt, temos o CSS para estilização.
            <br><br>
            2 - No &ltbody&gt, o &ltheader&gt contém um link centralizado para a seção de ingressos. Com &lth1&gt e &lth2&gt, organizei os títulos e, em parágrafos &ltp&gt descrevemos os shows com detalhes sobre artistas, datas e preços.
            <br><br>
            3 - A &ltdiv class="ingressos-container"&gt organiza os ingressos em uma grade de três colunas. Cada ingresso tem sua própria &ltdiv class="ingresso"&gt, com imagem, título e um botão para compra.
            <br><br>
            4 - As imagens têm descrições para acessibilidade, e os botões são projetados para facilitar a compra, com efeitos visuais ao passar o mouse. Também há um bloco separado que informa sobre a disponibilidade de ingressos, incentivando os usuários a agir.
            <br><br>
            Link das imagens utilizadas:

            <ul>
                <li><a href="https://www.plural.jor.br/wp-content/uploads/2022/12/racionais.jpg" target="_blank">Show de Rap</a></li>
                <li><a href="https://midias.correiobraziliense.com.br/_midias/jpg/2023/07/05/1200x801/1_cena2k-28433160.jpg" target="_blank">Show de Trap</a></li>
                <li><a href="https://vejario.abril.com.br/wp-content/uploads/2016/12/caetano-veloso-e-gilberto-gil.jpg?quality=70&strip=all" target="_blank">Show de MPB</a></li>
                <li><a href="https://s2-g1.glbimg.com/1ODgQq606GDMOY0XXz3GDqW-RGE=/0x0:2000x1556/924x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2022/9/R/ASeYEsSXi37FsPTot26A/dvd-hariel-7150.jpg" target="_blank">Show de Funk</a></li>
                <li><a href="https://rollingstone.com.br/media/uploads/the-town-festival-sao-paulo-rock-in-rio-foto-divulgacao.jpg" target="_blank">Show de Pop</a></li>
                <li><a href="https://aruanafm.com.br/wp-content/uploads/2024/08/Saiba-como-assistir-de-graca-ao-ultimo-show-do-Buteco.webp.webp" target="_blank">Show de Sertanejo</a></li>
            </ul>
        </p>
        <h2>
            Alice Queiróz de Oliveira:
            conteudo02.php, conteudo.css, descritiva.css, index.css, contato.css, processarContato.css
        </h2>
        <p>
            1 - Controle de sessions:
            <br>
            Foi utilizada quando o usuário clica no botão para comprar um ingresso, é registrado o tipo do ingresso comprado. Após a "compra", uma mensagem de sucesso aparece, mas o sistema a destrói quando a página é atualizada.
            <br><br>
            2 - Matriz:
            <br>
            Os tipos de ingressos disponíveis foram organizados em forma de lista.
            <br><br>
            3 - Formulários:
            <br>
            Foram utilizados formulários com método POST para a entrada de conteúdo dos ingressos (título, benefícios, preço e uma imagem ilustrativa dos mesmos). Além disso, contém um campo que armazena o tipo do ingresso comprado e, quando pressionado no botão, esse dado é transmitido para a mensagem de sucesso. 
            <br><br>
            4 - If Else:
            <br>
            Para verificar se a "compra" foi realizada antes de exibir a mensagem.
            <br><br>
            5 - Criação de terceiros:
            <ul>
                <li>Imagens dos ingressos - Geradas pelo <a href="https://chatgpt.com/" target="_blank">ChatGPT</a></li>
                <li>Informações dos ingressos - Geradas pelo <a href="https://chatgpt.com/" target="_blank">ChatGPT</a></li>
                <li>Paleta de cores - usada do site: <a href="https://paletadecores.com/paleta/295264/fad9a6/bd2f28/89373d/142433/" target="_blank">Paleta de cores</a></li>
            </ul>
        </p>

        <h2>
            Bruno Vinícius Alves Fernandes:
            contato.php, processarContato.php
        </h2>
        <p>
            O processo envolve dois principais arquivos (contato.php e processarcontato.php) para criar um formulário de contato e realizar o envio das informações preenchidas. 
            <br><br>
            1 - Formulário de Contato (contato.php):
            <br>
            Objetivo: O arquivo contato.php contém um formulário de contato que coleta dados do usuário, como nome, e-mail, assunto e mensagem.
            <br>
            Elementos do Formulário:
            <ul>
                <li>input para o nome, e-mail e assunto</li>
                <li>textarea para o conteúdo da mensagem</li>
                <li>Botão submit para o envio</li>
            </ul>
            Ação do Formulário: Quando o usuário preenche o formulário e clica no botão "Enviar", os dados são enviados através do método POST para a página processarContato.php (especificada no atributo action do formulário). Isso é feito com o protocolo HTTP POST, que carrega os dados de forma segura sem os exibir na URL.
            <br><br>
            2 - Processamento dos Dados (processarcontato.php):
            <br>
            Objetivo:
            <br>
            Este arquivo processa os dados enviados do formulário, tenta enviá-los por e-mail e exibe uma mensagem de confirmação, além de mostrar os dados fornecidos pelo usuário.
            Etapas do Processo:
            <ul>
                <li>Recepção dos Dados: A função PHP $_POST captura os dados enviados pelo formulário. Cada campo do formulário é mapeado usando o nome especificado nos inputs (por exemplo, $_POST['nomeUsuario'], $_POST['email'], etc.).</li>
                <li>Segurança dos Dados: As funções htmlspecialchars() são utilizadas para garantir que os dados recebidos sejam convertidos em formato seguro (evitando ataques XSS, que podem ocorrer ao injetar código malicioso em campos de formulário).</li>
                <li>Envio de E-mail: A função mail() tenta enviar um e-mail com o conteúdo do formulário. Para isso, os dados fornecidos no formulário (como nome, e-mail, assunto e conteúdo) são organizados no formato de um e-mail. O cabeçalho da mensagem ($mailCabecalhos) inclui o nome e o e-mail do usuário, que será exibido como o remetente da mensagem.</li>
                <li>Feedback ao Usuário: Após tentar enviar o e-mail, se o envio for bem-sucedido, a página exibe uma mensagem de sucesso e mostra todos os dados preenchidos pelo usuário (nome, e-mail, assunto e conteúdo). Caso ocorra algum erro, a página exibe uma mensagem informando que o envio falhou.</li>
            </ul>
        </p>

        <h2>Todos: descritiva.php</h2>
        <p>Página dedicada a cada um explicar suas funções e estruturas utilizadas juntamente com sua descrição, e se houver algum recurso externo utilizado, os devidos créditos e referências são fornecidos para valorizar as contribuições externas ao site.</p>
    </div>
</body>
</html>