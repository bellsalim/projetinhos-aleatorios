<?php
include "../includes/verificaLogin.php";
?>

<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <title>Eventos | Coccinelle Theatre</title>
</head>

<body>
   <?php
   include "includes/conexao.php";
   $result = $mysqli->query("SELECT * FROM `eventos`") or die($mysqli->error);
   ?>
   <main class="container">
      <header class="d-flex justify-content-between align-items-center">
         <div class="mt-4 mb-4">
            <h1><?php echo  "Bem vindo(a), " . ucfirst($user[0]) . "!"; ?></h1>
         </div>
         <div class="mt-4 mb-4">
            <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#modal">Adicionar Peça</button>
            <a href="../login.php?exit=true"><button class="btn btn-danger">Sair</button></a>
         </div>
      </header>

      <div class="table-responsive">
         <table class="table align-middle">
            <thead>
               <th>#</th>
               <th>Nome</th>
               <th>Tipo de Evento</th>
               <th class="text-center">Duração</th>
               <th class="text-center">Valor Ingresso</th>
               <th class="text-center">Em Cartaz</th>
               <th class="text-center" colspan="2">Ações</th>
            </thead>
            <?php
            while ($row = $result->fetch_assoc()) : ?>
               <tr>
                  <th><?php echo $row["codigo"]; ?></th>
                  <td><?php echo $row["nome"]; ?></td>
                  <td><?php echo $row["tipo_evento"]; ?></td>
                  <td class="text-center"><?php echo $row["duracao"]; ?> min</td>
                  <td class="text-center">R$ <?php echo $row["valor_ingresso"]; ?></td>
                  <td class="text-center"><input type="checkbox" onclick="return false" style="width: 18px; height: 18px;" <?php if ($row["em_cartaz"] == "S") : ?> checked><?php endif; ?></td>
                  <td class="text-center">
                     <a href="edit.php?codigo=<?php echo $row["codigo"]; ?>" class="btn btn-warning btn-sm">Editar</a>
                     <a href="process.php?delete=<?php echo $row["codigo"]; ?>" class="btn btn-danger btn-sm">Deletar</a>
                  </td>
               </tr>
            <?php endwhile; ?>
         </table>
      </div>
   </main>

   <?php
   include "includes/adicionar.php";
   ?>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>