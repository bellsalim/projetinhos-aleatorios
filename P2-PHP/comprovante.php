<?php

namespace chillerlan\QRCodeExamples; //classe do qrcode

setlocale(LC_ALL, "ptb");

$stagePlay = $_POST["stage-play"];
$evento = explode(";", $stagePlay)[0];
$valor_ingresso = explode(";", $stagePlay)[1];
$qtd = $_POST["qtd"];
$name = $_POST["name"];
$creditCard = $_POST["credit-card"];
$data_evento = date("d/m/Y", mktime(0, 0, 0, date("m") + 3, date("d") + 14, date("Y")));
$hoje = strftime("%d de %B de %Y");

$preçototal = ($valor_ingresso * $qtd);

# ===== QRCODE =====

use chillerlan\QRCode\{QRCode, QROptions};

include './vendor/autoload.php';

$data = $data = 'Nome: ' . $name . "\n" . 'Ingressos: ' . $qtd . "\n" . 'Evento: ' . $evento . "\n" . 'Data: ' . $data_evento . "\n" . 'Valor total: R$' . $preçototal . "\n";

$options = new QROptions([
  'version'    => 5,
  'outputType' => QRCode::OUTPUT_MARKUP_SVG,
  'eccLevel'   => QRCode::ECC_L,
]);

$qrcode = new QRCode($options);
$qrcode->render($data, 'imgqrcode/img.svg');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="./css/global.css">
  <link rel="stylesheet" href="./css/comprovante.css">
  <script src="https://kit.fontawesome.com/6d44882ec6.js" crossorigin="anonymous"></script>
</head>

<body>
  <section id="main">
    <section id="comprovante">
      <div>
        <header>
          <h2>Detalhes da Compra</h2>
          <hr style="margin-bottom: 24px;">
        </header>
        <article>
          <?php
          echo "<h3 style='margin:0;font-size:16px;margin-bottom:36px;'>Jundiaí, $hoje";
          echo "<h3>Nome: <strong>" . $name . "</strong></h3>";
          echo "<h3>Ingressos: <strong>" . $qtd . "</strong></h3>";
          echo "<h3>Evento: <strong>" . $evento . "</strong></h3>";
          echo "<h3>Data: <strong>" . $data_evento . "</strong></h3>";
          echo "<h3>Valor total: <strong>R$" . number_format($preçototal, 2, ",", ".") . "</strong></h3><br><br><br>";
          echo "<center><img src='imgqrcode/img.svg' width='200'></center>";
          ?>
        </article>
      </div>
    </section>
  </section>

  <?php
  $arquivo = fopen('produtos.txt', 'r');
  if ($arquivo == false) {
    echo "Arquivo não encontrado";
  }

  ?>
  </table>
</body>

</html>
<footer>
  <h3 style="color:white;">Daniel Antunes | Giovani Santos | Laís Oliveira | Maria Isabel Salim</h3>
</footer>
</body>

</html>