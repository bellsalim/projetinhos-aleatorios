<?php
$mysqli = new mysqli("localhost", "root", "", "teatro") or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM `eventos` WHERE `em_cartaz` = 'S'") or die($mysqli->error);

setlocale(LC_ALL, "ptb");

$eventos = array();
while ($row = $result->fetch_assoc()) {
  $eventos[] = $row;
}

$eventosJSON = json_decode(json_encode($eventos));
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coccinelle Theatre</title>
  <!-- CSS -->
  <link rel="stylesheet" href="./css/global.css">
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!-- Icons -->
  <script src="https://kit.fontawesome.com/6d44882ec6.js" crossorigin="anonymous"></script>
</head>

<body>
  <header id="header">
    <div class="logo">
      <h1>Coccinelle Theatre</h1>
    </div>

    <nav>
      <ul class="menu">
        <li><a href="#" class="button">Home</a></li>
        <li><a href="#" class="button">Contato</a></li>
        <li><a href="login.php" class="button">Login</a></li>
      </ul>
    </nav>
  </header>

  <section id="main">
    <article class="calendar">
      <header>
        <h2>Agenda</h2>
        <hr>
      </header>
      <ul>
        <?php 
        $i = 0;
        foreach ($eventosJSON as $evento) : ?>
          <li>
            <div><span><?php echo ucfirst(strftime("%B %Y", mktime(0, 0, 0, date("m") + $i, 0, date("Y")))); ?></span><?php echo $evento->nome ?></div>
            <p><sup>R$</sup><?php echo number_format($evento->valor_ingresso, 0) ?></p>
          </li>
          <hr>
        <?php $i++;
        endforeach; ?>
      </ul>
      <button id="buy-tickets" class="button">COMPRAR</button>
    </article>

    <figure class="swiper">
      <div class="swiper-wrapper">
        <img src="./assets/swans-lake.jpg" alt="Lago dos Cisnes" class="swiper-slide"></img>
        <img src="./assets/phantom-of-the-opera.jpg" alt="Fantasma da ??pera" class="swiper-slide"></img>
        <img src="./assets/beauty-and-the-beast.jpg" alt="A Bela e a Fera" class="swiper-slide"></img>
        <img src="./assets/palavra-cantada.jpeg" alt="Palavra Cantada" class="swiper-slide"></img>
      </div>
    </figure>

    <article class="info">
      <header>
        <h2>Hist??ria do Teatro</h2>
      </header>
      <hr>
      <p> O teatro surgiu na Gr??cia Antiga, no s??c. IX a.C. Consiste em representar uma situa????o e estimular sentimentos na audi??ncia. A tr??ade: quem v??, o que se v?? e o imaginado ?? o apoio do drama, pois ele exige uma reflex??o propiciada atrav??s do ator ou conjunto de atores interpretando uma hist??ria.</p>
    </article>
  </section>

  <section id="modal">
    <div class="wrapper">
      <i class="fas fa-times" id="close-button"></i>
      <h2>Carrinho</h2>

      <form action="./comprovante.php" method="POST">
        <fieldset>
          <legend>Ingressos</legend>
          <p>
            <label for="stage-play">Escolha a Pe??a</label>
            <select name="stage-play" id="" required>
              <?php foreach ($eventosJSON as $evento) : ?>
                <option value="<?php echo "$evento->nome;$evento->valor_ingresso" ?>"><?php echo $evento->nome ?></option>
              <?php endforeach; ?>
            </select>
          </p>
          <p>
            <label for="qtd">Quantidade</label>
            <input type="number" name="qtd" min="0" id="" required placeholder="Insira apenas n??meros">
          </p>
        </fieldset>
        <fieldset>
          <legend>Informa????es Pessoais</legend>
          <p>
            <label for="name">Nome</label>
            <input type="text" name="name" id="" required placeholder="Digite seu nome">
          </p>
          <p>
            <label for="cpf">CPF</label>
            <input type="number" name="cpf" id="" placeholder="Insira apenas n??meros">
          </p>
        </fieldset>
        <fieldset>
          <legend>Informa????es do Cart??o</legend>
          <p>
            <label for="credit-card">N Cart??o</label>
            <input type="number" name="credit-card" id="" placeholder="Insira apenas n??meros">
          </p>
          <p>
            <label for="valid-date">Data Validade</label>
            <input type="date" name="valid" id="" pattern="mm-aaaa">
          </p>
          <p>
            <label for="cvc">CVC</label>
            <input type="number" name="cvc" id="" placeholder="Insira apenas n??meros">
          </p>
        </fieldset>
        <input class="button" type="submit" value="FINALIZAR PEDIDO">
      </form>
    </div>
  </section>
  <footer>
    <h3 style="color:white;">Daniel Antunes | Giovani Santos | La??s Oliveira | Maria Isabel Salim</h3>
  </footer>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="./js/script.js"></script>
</body>

</html>