<?php
include "./includes/conexao.php";

if (isset($_POST["adicionar"])) {
   $nome = $_POST["nome"];
   $tipo_evento = $_POST["tipo_evento"];
   $duracao = $_POST["duracao"];
   $valor_ingresso = $_POST["valor_ingresso"];
   $em_cartaz = $_POST["em_cartaz"];
   if ($em_cartaz != "S") $em_cartaz = "N";

   $mysqli->query("INSERT INTO `eventos`(`nome`, `tipo_evento`, `duracao`, `valor_ingresso`, `em_cartaz`) VALUES ('$nome','$tipo_evento','$duracao','$valor_ingresso', '$em_cartaz')") or die($mysqli->error);

   header("location: lista.php");
}

if (isset($_POST["editar"])) {
   $codigo = $_POST["codigo"];
   $nome = $_POST["nome"];
   $tipo_evento = $_POST["tipo_evento"];
   $duracao = $_POST["duracao"];
   $valor_ingresso = $_POST["valor_ingresso"];
   $em_cartaz = $_POST["em_cartaz"];
   if ($em_cartaz != "S") $em_cartaz = "N";

   $mysqli->query("UPDATE `eventos` SET `nome`='$nome',`tipo_evento`='$tipo_evento',`duracao`='$duracao',`valor_ingresso`='$valor_ingresso', `em_cartaz`='$em_cartaz' WHERE codigo = $codigo") or die($mysqli->error);

   header("location: lista.php");
}

if (isset($_GET["delete"])) {
   $codigo = $_GET["delete"];
   $mysqli->query("DELETE FROM `eventos` WHERE codigo = $codigo") or die($mysqli->error);

   header("location: lista.php");
}
