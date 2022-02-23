<header>
<style>
  @import url(/CORE/main.css);
</style>
<script>
  var today = new Date();
  var date = "Nous sommes le " + today.getDate();
  document.getElementById("pdate").innerHTML = date;
</script>

<a href="/"><img class="logo" src="../img/logo.png" style="float:left;"></a>
<p id="pdate"></p>
  <nav>
    <div class="container-nav">
        <ul class="navbar-list">
          <li class="nav-item">
            <a class="nav-link" href="/">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../CONTENT/btceur.php">BTC en €</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../CONTENT/etheur.php">ETH en €</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../CONTENT/A-propos.php">À propos</a>
          </li>
        </ul>
    </div>
  </nav>
</header>
