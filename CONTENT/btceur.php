<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CORE/main.css">
</head>
<header><?php include "$_SERVER[DOCUMENT_ROOT]/CORE/header.php" ?></header>

<body>
  <main>
    <h1>Le convertisseur ultime de BTC !</h1>
    <p>Entrez votre nombre de Bitcoins, ce convertisseur vous donnera leur équivalent en euros.</p>
    <script src=../JS/convertbtceur.js></script>

    <form>
      <div class="rowcards">
        <div class="carte">
          <img src="../img/btc_logo.png">
          <p>Combien voulez-vous convertir ?</p>
          <input id="nombreBTC" type="number" name="nombreBTC" placeholder="BTC">
          <br />
          <button class="button_content" onclick="conversionbtceur();return false;">Convertir en €</button>
        </div>
        <img class="fleche" src="../img/slider/arrow_right_black.png" width="200px" ; height="100px" ; align-self="center" style="align-self: center;">
        <div class="carte">
          <p>Résultat :</p>
          <input id="resultat" type="text" name="resultat" placeholder="0.00€" readonly="readonly">
        </div>
      </div>
    </form>
  </main>
  <footer><?php include "$_SERVER[DOCUMENT_ROOT]/CORE/footer.php" ?></footer>
</body>

</html>