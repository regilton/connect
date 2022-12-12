<?php
$seg = $_GET['id'];

switch ($seg) {
  case '1': //supermercado
    include('view/data_auxiliar_1.php');
    $cotar_sistema = 'Supermercados';
    break;
  case '2': //moda
    include('view/data_auxiliar_2.php');
    $cotar_sistema = 'Moda';
    break;
  case '3': //magazines
    include('view/data_auxiliar_3.php');
    $cotar_sistema = 'Magazines';
    break;
  // case '4': //lojas
  //   include('view/data_auxiliar_4.php');
  //   $cotar_sistema = 'Lojas';
  //   break;
  case '5': //food service
    include('view/data_auxiliar_5.php');
    $cotar_sistema = 'Food service';
    break;
}
?>

<section class="" style="background: url('assets/img/<?= $bg_img_pagina; ?>')no-repeat center center / cover">
  <div class="section-lg <?= $bg_top_pagina; ?> text-white section-header">
    <div class="container">
      <div class="row justify-content-left">
        <div class="col-md-8 col-lg-12">
          <div class="page-header-content text-left">
            <img class="icon-segmento" src="assets/img/icon/segmento/<?= $icon; ?>">
            <h1><?= $copy_pagina; ?></h1>
            <p class="no-mobile"><?= $subtitulo; ?></p>
          </div>
        </div>
      </div>
      <a href="#" data-toggle="modal" data-target="#cotarSistema" class="mt-5 btn <?= $color_btn; ?> font-bold">SOLICITE ORÇAMENTO <I class="fa fa-arrow-right"></I></a>

    </div>
  </div>
</section>
<!--  -->
<section class="section section-lg">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="section-heading text-center mb-5">
          <h2><?= $titulo_resenha; ?></h2>
          <p class="lead"><?= $texto_resenha; ?></p>
        </div>
      </div>
    </div>
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-4 col-md-6 mb-4 mb-md-4 mb-lg-0">
        <div class="feature-widget text-center p-4">
          <div class="p-3 p-md-4 rounded <?= $color_square_icon; ?> text-white icon icon-shape icon-lg mb-4">
            <i class="<?= $icon_1_resenha; ?>"></i>
          </div>
          <div class="widget-text">
            <h3 class="h5"><?= $titulo_1_resenha; ?></h3>
            <p class="mb-0 text-center"><?= $texto_1_resenha; ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-md-4 mb-lg-0">
        <div class="feature-widget text-center p-4">
          <div class="p-3 p-md-4 rounded <?= $color_square_icon; ?> text-white icon icon-shape icon-lg mb-4">
            <i class="<?= $icon_2_resenha; ?>"></i>
          </div>
          <div class="widget-text">
            <h3 class="h5"><?= $titulo_2_resenha; ?></h3>
            <p class="mb-0 text-center"><?= $texto_2_resenha; ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-md-4 mb-lg-0">
        <div class="feature-widget text-center p-4">
          <div class="p-3 p-md-4 rounded <?= $color_square_icon; ?> text-white icon icon-shape icon-lg mb-4">
            <i class="<?= $icon_3_resenha; ?>"></i>
          </div>
          <div class="widget-text">
            <h3 class="h5"><?= $titulo_3_resenha; ?></h3>
            <p class="mb-0 text-center"><?= $texto_3_resenha; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-lg pt-1 ">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-md-12 col-lg-5 mb-4 mb-md-4 mb-lg-0">
        <div class="card <?=$bg_card;?> position-relative shadow-lg fancy-radius p-1">
          <div class="dot-shape-top position-absolute">
            <img src="assets/img/<?=$shape;?>" alt="dot" class="img-fluid">
          </div>
          <img class="fancy-radius img-fluid" src="assets/img/banner/<?= $img_banner_1_widget; ?>" alt="<?= $titulo_pagina; ?>">
          <div class="dot-shape position-absolute bottom-0">
            <img src="assets/img/<?=$dot;?>" alt="dot">
          </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="video-promo-content">
          <h2><?= $titulo_bloco_1; ?> <i class="<?= $icon_bloco_1; ?>"></i></h2>
          <?= $resenha_bloco_1; ?>
          <a href="#" data-toggle="modal" data-target="#cotarSistema" class="mt-5 btn <?= $color_btn; ?> font-bold">SOLICITE ORÇAMENTO <I class="fa fa-arrow-right"></I></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-lg">
  <div class="container">
    <div class="row align-items-center justify-content-lg-between">

      <div class="col-md-6 col-lg-6">
        <div class="feature-widget-wrap">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="card card-body shadow mt-4">
                <div class="d-flex">
                  <div class="mr-3 mr-md-4">
                    <div class="mb-4 p-3 p-md-4 icon icon-shape icon-md rounded-circle ">
                      <i class="<?= $txt_color . " " . $icon_lista_left_1; ?>"></i>
                    </div>
                  </div>
                  <div class="feature-content">
                    <a class="text-grey" href="#">
                      <h5><?= $titulo_lista_left_1; ?></h5>
                      <p class="mb-0"><?= $texto_lista_left_1; ?></p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card card-body shadow mt-4">
                <div class="d-flex">
                  <div class="mr-3 mr-md-4">
                    <div class="mb-4 p-3 p-md-4 icon icon-shape icon-md rounded-circle">
                      <i class="<?= $txt_color . " " . $icon_lista_left_2; ?>"></i>
                    </div>
                  </div>
                  <div class="feature-content">
                    <a class="text-grey" href="#">
                      <h5><?= $titulo_lista_left_2; ?></h5>
                      <p class="mb-0"><?= $texto_lista_left_2; ?></p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card card-body shadow mt-4">
                <div class="d-flex">
                  <div class="mr-3 mr-md-4">
                    <div class="mb-4 p-3 p-md-4 icon icon-shape icon-md rounded-circle ">
                      <i class="<?= $txt_color . " " . $icon_lista_left_3; ?>"></i>
                    </div>
                  </div>
                  <div class="feature-content">
                      <h5><?= $titulo_lista_left_3; ?></h5>
                      <p class="text-grey mb-0"><?= $texto_lista_left_3; ?></p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="col-md-6 col-lg-6 mb-4 mb-md-4 mb-lg-0">
        <div class="feature-widget-wrap">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="card card-body shadow mt-4">
                <div class="d-flex">
                  <div class="mr-3 mr-md-4">
                    <div class="mb-4 p-3 p-md-4 icon icon-shape icon-md rounded-circle ">
                      <i class="<?= $txt_color . " " . $icon_lista_right_1; ?>"></i>
                    </div>
                  </div>
                  <div class="feature-content">
                    <h5><?= $titulo_lista_right_1; ?></h5>
                    <p class="text-grey mb-0"><?= $texto_lista_right_1; ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card card-body shadow mt-4">
                <div class="d-flex">
                  <div class="mr-3 mr-md-4">
                    <div class="mb-4 p-3 p-md-4 icon icon-shape icon-md rounded-circle">
                      <i class="<?= $txt_color . " " . $icon_lista_right_2; ?>"></i>
                    </div>
                  </div>
                  <div class="feature-content">
                    <h5><?= $titulo_lista_right_2; ?></h5>
                    <p class="text-grey mb-0"><?= $texto_lista_right_2; ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card card-body shadow mt-4">
                <div class="d-flex">
                  <div class="mr-3 mr-md-4">
                    <div class="mb-4 p-3 p-md-4 icon icon-shape icon-md rounded-circle ">
                      <i class="<?= $txt_color . " " . $icon_lista_right_3; ?>"></i>
                    </div>
                  </div>
                  <div class="feature-content">
                    <h5><?= $titulo_lista_right_3; ?></h5>
                    <p class="text-grey mb-0"><?= $texto_lista_right_3; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="section section-lg">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-md-12 col-lg-5 mb-4 mb-md-4 mb-lg-0">
        <div class="video-promo-content">
          <h2><?= $titulo_bloco_2; ?></h2>
          <?= $resenha_bloco_2; ?>
          <a href="#" data-toggle="modal" data-target="#cotarSistema" class="mt-5 btn <?= $color_btn; ?> font-bold">SOLICITE ORÇAMENTO <I class="fa fa-arrow-right"></I></a>
        </div>
      </div>

      <div class="col-md-12 col-lg-6">
        <div class="card <?=$bg_card;?> position-relative shadow-lg fancy-radius p-1">
          <div class="dot-shape-top position-absolute">
            <img src="assets/img/<?=$shape;?>" alt="dot" class="img-fluid">
          </div>
          <img class="fancy-radius img-fluid" src="assets/img/banner/<?= $img_banner_2_widget; ?>" alt="<?= $titulo_pagina; ?>">
          <div class="dot-shape position-absolute bottom-0">
            <img src="assets/img/<?=$dot;?>" alt="dot">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<hr>
<section class="section">
  <div class="container">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-md-12 col-lg-12 mb-4 mb-md-4 mb-lg-0">
        <div class="feature-widget-wrap">
          <div class="uppercase tracking-wider text-gray-600 text-uppercase">Comercial e vendas</div>
          <h1 class="mt-2 font-weight-bolder">Vamos te ajudar!</h1>
          <p class="mt-3 text-gray-700 text-lg">
            Dúvidas sobre aquisição de sistemas? Entre em contato com o nosso time comercial, iremos esclarecer todos os pontos e te ajudar na tomada de decisão quanto a aquisição de software.
          </p>
          <p class="text-gray-700 text-lg">
            A Connect é a parceira ideal para o seu negócio seja qual for o porte, com produtos que atendem os processos específicos do setor. Isso proporciona um aumento de produtividade e rentabilidade, o que significa margens maiores e redução de custos.
          </p>
          <p class="text-gray-700 text-lg">
            Tenha os produtos da maior empresa de tecnologia do Brasil no seu varejo e junte-se às dezenas de clientes que escolheram a Connect.
          </p>
          <a href="tel:8530235050" class="text-lg font-weight-bolder btn <?= $color_btn; ?>">
            <i class="fa fa-phone-alt rotate-icon"></i> Ligue (85) 3023 5050
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include('widget/clientes.php'); ?>

<!-- modal orçamento -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<div class="modal fade" id="cotarSistema" data-backdrop="static" tabindex="-1" aria-labelledby="cotarSistemaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <form id="formu" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <img class="float-left img-w8 pr-2" src="assets/img/icon/segmento/<?= $icon; ?>">
          <h4 class="modal-title float-left mt-2" id="cotarSistemaLabel">Orçamento
            <span><small><?= $cotar_sistema; ?></small></span>
          </h4>
        </div>
        <div class="modal-body">
          <p class="text-gray-700">
            Por favor, preencha corretamente o formulário, Nosso time comercial entrara em contato no menor tempo com os valores para o sistema <?= $cotar_sistema; ?>.
          </p>
          <div id="mensagem" role="alert">
            <!-- <i id="icone"></i> -->
          </div>
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label for="sistema" class="col-form-label">
                    <i class="far fa-hand-pointer"></i> Sistema escolhido</label>
                  <select class="custom-select" disabled>
                    <option value="<?= $seg; ?>" selected><?= $cotar_sistema; ?></option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="nome" class="col-form-label"><i class="far fa-user"></i> Qual é o seu nome?</label>
                  <input type="text" class="form-control" placeholder="Nome completo" id="nome" name="nome">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="email" class="col-form-label"><i class="far fa-envelope"></i> Digite o seu email?</label>
                  <input type="text" class="form-control" placeholder="Seu melhor email" id="email" name="email">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="whatsapp" class="col-form-label"><i class="fab fa-whatsapp"></i> Qual é o Whatsapp?</label>
                  <input type="number" class="form-control" placeholder="DDD+Número" id="whatsapp" name="whatsapp">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="empresa" class="col-form-label"><i class="far fa-building"></i> Empresa</label>
                  <input type="text" class="form-control" placeholder="Nome Fantasia" id="empresa" name="empresa">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="cnpj" class="col-form-label">
                    <i class="fas fa-sort-numeric-up-alt"></i> CNPJ
                  </label>
                  <input type="number" class="form-control" placeholder="DDD+Número" id="cnpj" name="cnpj">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="msg" class="col-form-label">
                <i class="far fa-comment-dots"></i> Qual o maior desafio que enfrenta na sua empresa hoje?</label>
              <textarea placeholder="Deixe a sua mensagem" class="form-control" id="msg" name="msg"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" id="sistema" name="sistema" value="<?= $cotar_sistema; ?>">
          <button onclick="remover()" type="button" class="btn btn-gray" data-dismiss="modal">Fechar</button>
          <button type="button" id="btn-salvar" class="btn <?= $color_btn; ?> font-bold"> Solicitar consultoria
          </button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- ajax -->
<script>
  // enviar
  $(document).ready(function() {
    $("#btn-salvar").click(function(event) {
      event.preventDefault();
      $.ajax({
        url: "ajax/send.php",
        method: "post",
        data: $("#formu").serialize(),
        dataType: "text",
        success: function(mensagem) {
          $("#mensagem").removeClass();
          if (mensagem == "Orçamento enviado com Sucesso ") {
            // alert('teste');
            $("#mensagem").text(mensagem);
            $("#mensagem").addClass("alert alert-success text-center text-lg text-uppercase");
            $("#mensagem").append("<i id='icone'></i>");
            $("#icone").addClass("far fa-thumbs-up");
            document.querySelector('#formu').reset();

          } else {
            $("#mensagem").text(mensagem);
            $("#mensagem").addClass("alert alert-danger text-center text-lg");
            $("#mensagem").append("<i id='icon'></i>");
            $("#icone").addClass("far fa-thumbs-down");
          }
        },
      });
    });
  });

  function remover() {
    $("#mensagem").removeClass();
    document.getElementById('mensagem').innerHTML = "";
  }
</script>