<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <title>Editar Evento</title>
</head>

<body>
   <?php
   include "includes/conexao.php";
   $codigo = $_GET["codigo"];
   $result = $mysqli->query("SELECT * FROM `eventos` WHERE `codigo` = $codigo") or die($mysqli->error);
   $evento = $result->fetch_assoc();
   ?>
   <div class="container">
      <div class="modal-header">
         <h5 class="modal-title">Editar evento</h5>
      </div>
      <form class="form-sm" action="process.php" method="POST">
         <div class="modal-body">
            <div class="form-group mb-3">
               <label class="form-label" for="nome">ID</label>
               <input class="form-control" type="text" name="codigo" id="" value="<?php echo $evento["codigo"]; ?>" readonly>
            </div>

            <div class="form-group mb-3">
               <label class="form-label" for="nome">Nome</label>
               <input placeholder="Insira o nome do evento" class="form-control" type="text" name="nome" id="" value="<?php echo $evento["nome"]; ?>">
            </div>

            <div class="form-group mb-3">
               <label class="form-label" for="tipo_evento">Tipo de Evento</label>
               <input placeholder="Informe o tipo do evento" class="form-control" type="text" name="tipo_evento" id="" value="<?php echo $evento["tipo_evento"]; ?>">
            </div>

            <div class="form-group mb-3">
               <label class="form-label" for="duracao">Duração</label>
               <input placeholder="Duração do evento em minutos" class="form-control" type="number" name="duracao" id="" value="<?php echo $evento["duracao"]; ?>">
            </div>

            <div class="form-group mb-3">
               <label class="form-label" for="valor_ingresso">Valor do Ingresso</label>
               <input placeholder="Informe o valor do ingresso" class="form-control" type="valor_ingresso" name="valor_ingresso" id="" value="<?php echo $evento["valor_ingresso"]; ?>">
            </div>

            <div class="form-check form-switch mb-3">
               <input class="form-check-input" type="checkbox" name="em_cartaz" value="S" <?php if ($evento["em_cartaz"] == "S") : ?> checked> <?php endif; ?>
            <label class="form-label" for="em_cartaz">Evento em cartaz</label>
            </div>

         </div>
         <div class="modal-footer">
            <button type="submit" class="btn btn-warning" name="editar">Editar</button>
         </div>
      </form>
   </div>


   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>