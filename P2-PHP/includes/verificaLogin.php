<?php
session_start();

if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE) {
   header("Location: ../login.php");
} else {
   $user = explode(".", $_SESSION["user"]);
}
