<?php



$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = 'Vcecorno138@';
$dbName = 'universide_db';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_errno) {
    echo "Erro ao conectar ao banco de dados";
} else {
    echo "Conexão concluída";
}

if (isset($_POST['submit'])) {
    include_once('config.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $pagamento = $_POST['pagamento'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $certificado = $_POST['certificado'];
    $pais = $_POST['pais'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];

    // Inserir no banco de dados
    $mandarparaobanco = mysqli_query($conexao, "INSERT INTO universide_db(nome,sobrenome,nickname,email,endereco,endereco2,pais,estado,cep) VALUES ('$nome','$sobrenome','$nickname','$email','$endereco','$endereco2','$pais','$estado','$cep')");

    // Enviar e-mail
    $assunto = 'Novo Certificado Solicitado';
    $mensagem = "Nome: $nome\nSobrenome: $sobrenome\nNickname: $nickname\nE-mail: $email\nEndereço: $endereco\nEndereço 2: $endereco2\nPaís: $pais\nEstado: $estado\nCEP: $cep";

    // Substitua 'seu-email@example.com' pelo seu endereço de e-mail
    $headers = 'From: seu-email@example.com';

    mail('andrejunior1367@gmail.com', $assunto, $mensagem, $headers);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/Favicon 1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>CNPJ</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para este template -->
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
<body class="bg-light">
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="imagens/Favicon 1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>CNPJ</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para este template -->
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>

  <body class="bg-light">

  
  <!-- Barra de Navegaçao -->
  <nav class="site-header sticky-top py-1" style="background-color: rgba(245, 245, 0, 0.225);">
      <div class="container d-flex flex-column flex-md-row justify-content-between">

        <a class="py-2" href="index.php">
          <img src="images/Logo 100px.png" alt="">
        </a>

        <a class="py-2 d-none d-md-inline-block" href=" https://wa.me/+553499908111">Whatsapp</a>
        <a class="py-2 d-none d-md-inline-block" href="https://www.instagram.com/mfcert/?igshid=MzRlODBiNWFlZA%3D%3D">Instagram</a>
      </div>
    </nav>

    <div class="container">
      <div class="py-5 text-center">
        <img src="images/CNPJ.png" alt="IMAGEM PARA CERTIFICADO DE PESSOAS JÚRIDICAS">
        <p> Preencha os campos abaixo e nossa equipe entrara em contato com você</p>
      </div>

    
      <div class="row">
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Endereço de cobrança</h4>

          <!-- inicio do formulário php aqui -->
          <form class="needs-validation" novalidate="" action="index.php" method="post">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="primeiroNome">Nome</label>
                <input name="nome" type="text" class="form-control" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  É obrigatório inserir um nome válido.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Opcional)</span></label>
              <input name="email" type="email" class="form-control" id="email" placeholder="fulano@exemplo.com">
              <div class="invalid-feedback">
                Por favor, insira um endereço de e-mail válido, para atualizações de entrega.
              </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="pais">País</label>
                <select class="custom-select d-block w-100" name="pais" id="pais" required="">
                  <option value="">Escolha...</option>
                  <option>Brasil</option>
                </select>
                <div class="invalid-feedback">
                  Por favor, escolha um país válido.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="estado">Estado</label>
                
                <select class="custom-select d-block w-100" name="estado" id="estado" required="">
                  <option value="">Escolha...</option>
                  <option> Alagoas</option>
                  <option>Amapá</option>
                  <option>Amazonas</option>
                  <option>Bahia</option>
                  <option>Ceará</option>
                  <option>Distrito Federal</option>
                  <option>Espírito Santo</option>
                  <option>Goiás</option>
                  <option>Maranhão</option>
                  <option>Mato Grosso</option>
                  <option>Mato Grosso do Sul</option>
                  <option>Minas Gerais</option>
                  <option>Pará</option>
                  <option>Pará</option>
                  <option>Paraíba</option>
                  <option>Paraná</option>
                  <option>Pernambuco </option>
                  <option>Piauí</option>
                  <option>Rio de Janeiro </option>
                  <option>Rio Grande do Norte</option>
                  <option>Rio Grande do Sul</option>
                  <option>Rondônia</option>
                  <option>Roraima</option>
                  <option>Santa Catarina</option>
                  <option>São Paulo</option>
                  <option>Sergipe</option>
                  <option>Tocantins</option>

                </select>

                <div class="invalid-feedback">
                  Por favor, insira um estado válido.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cep">CEP</label>
                <input name="cep" type="text" class="form-control" id="cep" placeholder="" required="">
                <div class="invalid-feedback">
                  É obrigatório inserir um CEP.
                </div>
              </div>
            </div>
            <label for="Pagamento">
              <h4 class="mb-3">Pagamento</h4>
            </label>
                
                <select class="custom-select d-block w-100" name="Pagamento" id="Pagamento" required="">
                  <option value="">Escolha...</option>
                  <option> Boleto</option>
                  <option>Cartão de credito</option>
                  <option>PIX</option>
                </select>
            <hr class="mb-4">

            <label for="certificado">
              <h4 class="mb-3">Tipo de certificado</h4>
            </label>
                
                <select class="custom-select d-block w-100" name="certificado" id="certificado" required="">
                  <option value="">Escolha...</option>
                  <option> Digital</option>
                  <option>Token</option>
                  
                </select>
            <hr class="mb-4">

            <button >Continue o checkout</button>
          </form>
        </div>
      </div>
    

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2022-2023 MF Certificad</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacidade</a></li>
          <li class="list-inline-item"><a href="#">Termos</a></li>
          <li class="list-inline-item"><a href="#">Suporte</a></li>
        </ul>
      </footer>
    </div>

    <!-- Roda Pe-->
    <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <a class="py-2" href="https://getbootstrap.com.br/docs/4.1/getting-started/introduction/">
            <img src="imagens/Logo 100px.png" alt="">
          </a>
        </div>
        <!-- Coluna 1 -->
        <div class="col-6 col-md">
          <h5>Contate-nos</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">E-mail</a></li>
            <li><a class="text-muted" href="#">Instagram</a></li>
            <li><a class="text-muted" href="#">Whatsapp</a></li>
            <li><a class="text-muted" href="#">Facebook</a></li>
          </ul>
        </div>
        <!-- Coluna 2 -->
        <div class="col-6 col-md">
          <h5>Fontes</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Fonte</a></li>
            <li><a class="text-muted" href="#">Nome da fonte</a></li>
            <li><a class="text-muted" href="#">Outra fonte</a></li>
            <li><a class="text-muted" href="#">Fonte final</a></li>
          </ul>
        </div>
      </div>
    </footer>


<!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
