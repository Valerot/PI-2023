<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'certificado_db';

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
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $endereco2 = $_POST['endereco2'];
    $pais = $_POST['pais'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];

    // Inserir no banco de dados
    $mandarparaobanco = mysqli_query($conexao, "INSERT INTO certificado_cnpj(nome,sobrenome,nickname,email,endereco,endereco2,pais,estado,cep) VALUES ('$nome','$sobrenome','$nickname','$email','$endereco','$endereco2','$pais','$estado','$cep')");

    // Enviar e-mail
    $assunto = 'Novo Certificado Solicitado';
    $mensagem = "Nome: $nome\nSobrenome: $sobrenome\nNickname: $nickname\nE-mail: $email\nEndereço: $endereco\nEndereço 2: $endereco2\nPaís: $pais\nEstado: $estado\nCEP: $cep";

    // Substitua 'seu-email@example.com' pelo seu endereço de e-mail
    $headers = 'From: kaoan0305@gmail.com';

    mail('andrejunior1367@gmail.com', $assunto, $mensagem, $headers);
}

?>

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

    <div class="container">
      <div class="py-5 text-center">
        <img src="imagens/CNPJ.png" alt="IMAGEM PARA CERTIFICADO DE PESSOAS JÚRIDICAS">
        <h2>======</h2>
        <p> Preencha os campos abaixo </p>
      </div>

    
      <div class="row">
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Endereço de cobrança</h4>

          <!-- inicio do formulário php aqui -->
          <form class="needs-validation" novalidate="" action="CertificadoCNPJ.php" method="post">
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
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="mesmo-endereco">
              <label class="custom-control-label" for="mesmo-endereco">Endereço de entrega é o mesmo que o de cobrança.</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="salvar-info">
              <label class="custom-control-label" for="salvar-info">Lembrar desta informação, na próxima vez.</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Pagamento</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credito" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                <label class="custom-control-label" for="credito">Cartão de crédito</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debito" name="paymentMethod" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="debito">Cartão de débito</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="paypal">PayPal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-nome">Nome no cartão</label>
                <input type="text" class="form-control" id="cc-nome" placeholder="" required="">
                <small class="text-muted">Nome completo, como mostrado no cartão.</small>
                <div class="invalid-feedback">
                  O nome que está no cartão é obrigatório.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-numero">Número do cartão de crédito</label>
                <input type="text" class="form-control" id="cc-numero" placeholder="" required="">
                <div class="invalid-feedback">
                  O número do cartão de crédito é obrigatório.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiracao">Data de expiração</label>
                <input type="text" class="form-control" id="cc-expiracao" placeholder="" required="">
                <div class="invalid-feedback">
                  Data de expiração é obrigatória.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-cvv">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                <div class="invalid-feedback">
                  Código de segurança é obrigatório.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue o checkout</button>
          </form>
        </div>
      </div>
    

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017-2018 Nome da companhia</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacidade</a></li>
          <li class="list-inline-item"><a href="#">Termos</a></li>
          <li class="list-inline-item"><a href="#">Suporte</a></li>
        </ul>
      </footer>
    </div>
</body>
</html>