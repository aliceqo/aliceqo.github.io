<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contato.css">
    <title>Contato</title>
</head>
<body>
       <nav>
              <a href="index.php">Inicial</a>
              <a href="conteudo01.php">Ingressos</a>
              <a href="conteudo02.php">Tipos de Ingressos</a>
              <a href="contato.php">Contatos</a>
              <a href="descritiva.php">Descrição</a>
       </nav>

       <h1>Alguma suguestão de ingressos ? nos mande um e-mail</h1>
    <form name="frmContact" id="formContato" method="post" action="processarContato.php" nctype="multipart/form-data">
          
       <label for="nomeUsuario">Nome:</label>
              <input type="text" name="nomeUsuario" id="nomeUsuario" required />

       <br>

       <label for="email">E-mail:</label>
              <input type="email" name="email" id="email" required />

       <br>

       <label for="assunto">Assunto:</label>
              <input type="text" name="assunto" id="assunto" required />

       <br>

       <label for="conteudo">Conteúdo:</label>
              <textarea name="conteudo" id="conteudo" rows="5" required></textarea>

       <br>

       <div class="button-container">
              <input type="submit" name="enviar" value="Enviar" />
       </div>

    </form>
</body>
</html>
