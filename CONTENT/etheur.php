<?php include "$_SERVER[DOCUMENT_ROOT]/CORE/header.php" ?>

<p>Entrez votre nombre d'ETH, ce convertisseur vous donnera leur équivalent en euros.</p>

<script src = JS/convertbtceur.js></script>

  <form>
  <input id="nombreBTC" type="number" placeholder="ETH">
  <button class="button_content" onclick="conversionbtceur()" >Convertir en €</button>
  </form>

<p id="resultat"></p>

</body>
<?php include "$_SERVER[DOCUMENT_ROOT]/CORE/footer.php" ?>
