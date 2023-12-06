<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MR Certificados</title>
    <link href="/universidade/css/style.css" type="text/css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  
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

 <!-- Carrosel de itens -->
      
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">

       <!-- Primeiro slide -->
        <div class="carousel-item active" style="background-color: rgba(244, 242, 214, 0.123);">
          <div>
              <div style=" height:40%; width: 50%; display:inline-block ;">
                <img src="images/600px.png" alt="">
              </div>
              <div style=" height: 20%; width:40% ; display:inline-block ; text-decoration-line: rgb(234,156,0) ; ">
                <H2>Quem somos</H2>
                  <p>
                  A Mf Certificados possui agentes facilitadores que irão emitir o seu Certificado Digital e te dar todo o suporte e direcionamento para fazer suas Procurações por meio eletrônico em um cartório Brasileiro. <br>
  
                  Nossos Agentes de Registros (AGRs) estão autorizados a realizar a autenticação da identidade de pessoas ou organizações para emissão de Certificado Digital por meio da SERPRO, primeira Autoridade Certificadora de 1º nível credenciada pela ICP-Brasil. <br>
  
                  Através dos nossos serviços você terá assessoria para resolver seus trâmites no Brasil com agilidade e rapidez, independente de onde você estiver.
                  </p>
              </div>
          </div>
        </div>
        
        <!-- Segundo slide --> 
        <div class="carousel-item">
          <div>
            <div style=" height:40%; width: 50%; display:inline-block ;">
              <img src="images/imagemcima.png" alt="">
            </div>
            <div style=" height: 20%; width:40% ; display:inline-block ; text-decoration-line: rgb(234,156,0) ; ">
              <H2>O que é Certificado Digital</H2>
                <p>
                  O Certificado Digital é a identificação de uma pessoa ou empresa no meio eletrônico, e tem validade jurídica em todo território Brasileiro. <br>

                  Permite digitalmente a assinatura de documentos oficiais, como procurações públicas, documentos de compra/venda de imóveis e veículos, divórcios, inventários e outros. <br>

                </p>
            </div>
          </div>
        </div>

        <!--Terceiro Slide -->
        <div class="carousel-item">
          <div style=" height:40%; width: 50%; display:inline-block ;">
            <img src="images/600px.png" alt="">
          </div>
          <div style=" height: 20%; width:40% ; display:inline-block ; text-decoration-line: rgb(234,156,0) ; ">
            <H2>O que é Procuração Pública</H2>
              <p>
                A procuração pública é um documento pelo qual uma pessoa autoriza outra de sua confiança para representá-la legalmente em diversas situações cotidianas. <br>

                Esse documento pode ser utilizado para comprar e vender veículos, imóveis, ceder amplos poderes, realizar abertura de contas e realizar movimentações bancárias, fazer representações jurídicas, serviços de aposentadoria, prova de vida, casamento, divórcio, dentre outros. <br>
              </p>
          </div>
        </div>
      </div>
      
      <!--Pagina anterior, Proxima Pagina do carrosel -->
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
    

    <br>
    <br>
    
    <!-- Cards -->
      
      <!-- Seção com cards -->
      <section class="secao4" id="sobre">
        <style>
          /* Estilos comuns para os cards */
          .secao4 {
              margin: 0;
              font-family: Helvetica, sans-serif;
          }
          
          .secao4-div {
              display: flex;
              flex-wrap: wrap;
              justify-content: center;
              padding: 10px;
              text-align: center;
          }
          
          .secao4-div-card {
              display: flex;
              flex-direction: column;
              align-items: center;
              width: calc(100% / 3 - 60px);
              margin: 17px;
              padding: 10px;
              box-shadow: 2px 2px 16px 0px rgba(0, 0, 0, 0.1);
              border-radius: 15px;
              background-color: rgba(234, 156, 0, 0.162);
              transition: all 0.5s ease;
          }
          
          .secao4-div-card:hover {
              transform: scale(1.1);
              z-index: 1;
          }
          
          .secao4-div-card img {
              width: 35%;
              height: auto;
          }
          
          .secao4-div-card h3 {
              margin-bottom: 0px;
          }
          
          /* Estilos para dispositivos móveis */
          @media (max-width: 768px) {
              .secao4-div-card {
                  width: 100%;
              }
          } 
          
          </style>

          <div class="secao4-div">
              <!-- Card 1 -->
              <a href="CPF.php" style="color: black;">
                <div class="secao4-div-card">
                    <img decoding="async" src="images/CPF.png" alt="imagem do card 1 html e css">
                    <h3>Certificado Pessoa Fisica</h3>
                    <a href="CPF.php"></a>
                </div>
              </a>
              <!-- Card 2 -->
              <a href="CNPJ.php" style="color: black;">
                <div class="secao4-div-card">
                    <img decoding="async" src="images/CNPJ.png" alt="imagem do card 2 html e css">
                    <h3>Certificado Pessoa Juridica</h3>
                    <a href="CNPJ.php"></a>
                </div>
              </a>
          </div>
      </section>

    <br>
    <br>






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
        <!-- Coluna 3 -->
       
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



