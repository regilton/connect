<?php
?>

<form id="formu" method="POST">
  <input type="text" name="nome">
  <input type="button" id="btn-salvar" value="salvar">
</form>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<script>
  // inserir
  $(document).ready(function() {
    $("#btn-salvar").click(function(event) {
      event.preventDefault();
      $.ajax({
        url: "send.php",
        method: "post",
        data: $("#formu").serialize(),
        dataType: "text",
        success: function(mensagem) {
          $("#mensagem").removeClass();
          if (mensagem == "enviado com sucesso") {
            $("#mensagem").text(mensagem);
            $("#mensagem").addClass("alert alert-success text-center text-lg");
            $("#mensagem, i").addClass("bi bi-hand-thumbs-up");
            document.querySelector('#formu').reset();
          } else {
            $("#mensagem").text(mensagem);
            $("#mensagem").addClass("alert alert-danger text-center text-lg");
            $("#mensagem, i").addClass("bi bi-hand-thumbs-down");
          }
        },
      });
    });
  });
</script>