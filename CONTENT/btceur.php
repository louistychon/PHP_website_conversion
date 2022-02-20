<?php include "$_SERVER[DOCUMENT_ROOT]/CORE/header.php" ?>
<body>

<p>Entrez votre nombre de Bitcoins, ce convertisseur vous donnera leur équivalent en euros.</p>

<script src = JS/convertbtceur.js></script>

  <form>
  <input id="nombreBTC" type="number" placeholder="BTC">
  <button class="button_content" onclick="conversionbtceur()" >Convertir en €</button>
  </form>

<p id="resultat"></p>

</body>

<?php include "$_SERVER[DOCUMENT_ROOT]/CORE/footer.php" ?>
