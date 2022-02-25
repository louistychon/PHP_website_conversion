<?php include "$_SERVER[DOCUMENT_ROOT]/CORE/header.php" ?>
<body>
<h1>Le convertisseur ultime de BTC !</h1>
<p>Entrez votre nombre de Bitcoins, ce convertisseur vous donnera leur équivalent en euros.</p>
<script src = ../JS/convertbtceur.js></script>

<form>
  <div class="rowcards">
    <div class="carte">
    <p>Combien voulez-vous convertir ?</p>
    <input id="nombreBTC" type="number" name="nombreBTC" placeholder="BTC">
    <br/>
    <button class="button_content" onclick="conversionbtceur();return false;">Convertir en €</button>
  </div>
  <img class="fleche" src="../img/slider/arrow_right_black.png" width="200px"; height="100px"; align-self="center" style="align-self: center;">
  <div class="carte">
    <p>Résultat :</p>
    <input id="resultat" type="text" name="resultat" placeholder="0.00€" readonly="readonly">
  </div>
  </div>
</form>

</body>

<?php include "$_SERVER[DOCUMENT_ROOT]/CORE/footer.php" ?>
