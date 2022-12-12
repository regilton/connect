<section id="imgRandom" class="section pt-9 pb-9 section-header text-white gradient-overly-right-color" style="background: url('assets/img/banner/hero/hero-bg5.jpg')no-repeat center center / cover">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-lg-6">
        <div class="hero-slider-content">
          <span class="text-uppercase">100% WEB E MOBILE</span>
          <h1 class="display-2">Soluções de gestão para o seu negócio</h1>
          <p class="lead">Soluções completas de gestão para o seu segmento. Foque no que faz sua empresa crescer e deixe os controles por nossa conta.</p>
          <a href="#" data-toggle="modal" data-target="#formHelp" class="text-lg font-weight-bolder btn btn-success mt-4">
            Solicite um orçamento <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="modal fade" id="formHelp" data-backdrop="static" tabindex="-1" aria-labelledby="formHelpLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <form id="formu" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="formHelpLabel">Precisa de ajuda? </h2>
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> -->
        </div>
        <div class="modal-body">
          <p class="text-gray-700">
            Se você tem dúvidas sobre qual é o software mais adequado para a sua empresa?<br> Deixa com a gente <i class="far fa-thumbs-up"></i>
          </p>
          <div id="mensagem" role="alert">
            <!-- <i id="icone"></i> -->
          </div>
          <div class="container">
            <div class="row">
              <div class="col-6 form-group">
                <label for="nome" class="col-form-label">Qual é o seu nome?</label>
                <input type="text" class="form-control" placeholder="Nome completo" id="nome" name="nome">
              </div>
              <div class="col-6 form-group">
                <label for="email" class="col-form-label">Email?</label>
                <input type="text" class="form-control" placeholder="Nome completo" id="email" name="email">
              </div>
              <div class="col-6 form-group">
                <label for="whatsapp" class="col-form-label">Qual é o Whatsapp?</label>
                <input type="number" class="form-control" placeholder="DDD+Número" id="whatsapp" name="whatsapp">
              </div>
              <div class="col-6 form-group">
                <label for="empresa" class="col-form-label">Nome da empresa?</label>
                <input type="text" class="form-control" placeholder="Nome Fantasia" id="empresa" name="empresa">
              </div>
              <div class="col-6 form-group">
                <label for="cnpj" class="col-form-label">Nº CNPJ</label>
                <input type="number" class="form-control" placeholder="digite somente números" id="cnpj" name="cnpj">
              </div>
              <div class="col-6 form-group">
                <label for="segmento" class="col-form-label">Ramo de atuação?</label>
                <select class="custom-select" id="segmento" name="segmento">
                  <option selected>Escolha...</option>
                  <option value="1">Supermercados</option>
                  <option value="2">Mercadinhos</option>
                  <option value="3">Padarias</option>
                  <option value="4">Lojas</option>
                  <option value="5">Food Service</option>
                </select>
              </div>
              <div class="col-12 form-group">
                <label for="msg" class="col-form-label">Qual é a principal dificuldade da sua empresa hoje:</label>
                <textarea class="form-control" id="msg" name="msg"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" onclick="remover()" class="btn btn-gray" data-dismiss="modal">Fechar</button>
          <button type="button" id="btn-salvar" class="btn btn-primary">
            Solicitar consultoria</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<!-- ajax -->
<script>
  // enviar
  $(document).ready(function() {
    $("#btn-salvar").click(function(event) {
      event.preventDefault();
      $.ajax({
        url: "ajax/helpme.php",
        method: "post",
        data: $("#formu").serialize(),
        dataType: "text",
        success: function(mensagem) {
          $("#mensagem").removeClass();
          if (mensagem == "Pedido enviado com Sucesso ") {
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
    document.querySelector('#formu').reset();
  }
</script>