<body>
<?php include "$_SERVER[DOCUMENT_ROOT]/CORE/header.php" ?>
<meta title="Convertisseur en ligne gratuit pour vos cryptomonnaies">
<meta description="Convertissez la valeur de vos cryptomonnaies dès maintenant avec notre convertisseur en ligne gratuit et très simple d'utilisation">

<div class="content">
  <div class="slider">
    <img src="../img/slider/1.jpg" id="slide">
            <div id="precedent" onclick="ChangeSlide(-1)"><img src="../img/slider/arrow_left.png" style="width:50px;"></div>
            <div id="suivant" onclick="ChangeSlide(1)"><img src="../img/slider/arrow_right.png" style="width:50px;"></div>
  </div>
    <script>
      var slide = new Array("../img/slider/1.jpg", "../img/slider/2.jpg", "../img/slider/3.jpg");
      var numero = 0;

      function ChangeSlide(sens) {
          numero = numero + sens;
          if (numero < 0)
              numero = slide.length - 1;
          if (numero > slide.length - 1)
              numero = 0;
          document.getElementById("slide").src = slide[numero];
        }

      setInterval("ChangeSlide(1)", 3000);
    </script>
<h1>Convertisseur en ligne gratuit pour vos cryptomonnaies</h1>
      <p>Convertissez la valeur de vos cryptomonnaies dès maintenant. Que ce soit l'ETH ou le BTC, ce site vous permet de réaliser votre conversion selon les dernier taux du marché et en toute anonymité.</p>
      <p>Sélectionnez la partie du site qui vous intéresse ci-dessous.</p>

  <!-- Début du grid avec les 2 cartes -->
  <div class="rowcards">
          <div class="carte">
            <img src="../img/btc_logo.png">
            <h2>Cours du BTC aujourdhui</h2>
            <h3>1 BTC = 33.500€</h3>
            <a href="../content/btceur.php"><button class="button_acc"> Voir le convertisseur</button></a>
          </div>
          <div class="carte">
            <img src="../img/eth_logo.png">
            <h2>Cours de l'ETH aujourdhui</h2>
            <h3>1 ETH = 2.650€</h3>
            <a href="../content/etheur.php"><button class="button_acc"> Voir le convertisseur</button></a>
          </div>
  </div>

    <p>Ce site est en construction et représente un très gros projet, merci d'en avoir apprécié la première partie !</p>

</div>
  <?php include "$_SERVER[DOCUMENT_ROOT]/CORE/footer.php" ?>
  </body>
