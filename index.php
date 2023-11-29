<?php
    include "template/header.php"
?>



 <!-- Carrosel de itens -->
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <!-- Primeiro slide -->
        <div class="carousel-item active" style="background-color: rgba(244, 242, 214, 0.123);">
          <div>
              <div style=" height:40%; width: 50%; display:inline-block ;">
                <img src="images/imagemcima.png" alt="">
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
              <img src="images/600px.png" alt="">
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
        <!-- Terceiro Slide -->
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
      <!-- Pagina anterior, Proxima Pagina do carrosel -->
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
              margin: 10px;
              padding: 20px;
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
              <a href="Certificado CPF.Html" style="color: black;">
                <div class="secao4-div-card">
                    <img decoding="async" src="images/CPF.png" alt="imagem do card 1 html e css">
                    <h3>Certificado Pessoa Fisica</h3>
                    <a href="CPF.php"></a>
                </div>
              </a>
              <!-- Card 2 -->
              <a href="Certificado CNPJ.Html" style="color: black;">
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



<?php
    include "template/footer.php"
?>




