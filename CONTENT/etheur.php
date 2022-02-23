<?php include "$_SERVER[DOCUMENT_ROOT]/CORE/header.php" ?>
<body>

<h1>Le convertisseur ultime d'ETH !</h1>

<p>Entrez votre nombre d'Ethereum, ce convertisseur vous donnera leur équivalent en euros.</p>
<script src = ../JS/convertetheur.js></script>

<form>
  <p>Combien voulez-vous convertir ?</p>
  <input id="nombreETH" type="number" name="nombreETH" placeholder="ETH">
  <button class="button_content" onclick="conversionetheur();return false;">Convertir en €</button>
  <p>Résultat :</p>
  <input id="resultat" type="text" name="resultat" placeholder="0.00" readonly="readonly">
</form>
</body>

<?php include "$_SERVER[DOCUMENT_ROOT]/CORE/footer.php" ?>
