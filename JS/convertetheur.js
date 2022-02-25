function conversionetheur()
{
  let nombre = parseFloat(document.getElementById("nombreETH").value);
  if(nombre >= 0){
    var total = nombre * 2412.17;
    var dec = total.toFixed(2);
  }
  else{
    alert("Veuillez entrer un nombre >= 0 !")
  }

  document.getElementById("resultat").value = dec + ' €';
}
