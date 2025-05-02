let form = document.getElementById('form');
let article = document.getElementById('article');
let texte = document.getElementById('texte');
let boutton = document.getElementById('boutton');

function initialiserModif() {
 form.className = "";
 texte.className = "cache";
 boutton.className = "cache";
 article.value = texte.innerText;
}

function validerModif(id) {
  if (article.value != "") {
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState = 4 && this.status == 200) {
        form.className = "cache";
        texte.className = "";
        texte.innerText = article.value;
        boutton.className  = "center button col-4";
      }
    };
    xmlhttp.open("GET", "/index.php?action=modifArticle&id="+id+"&texte="+article.value, true);
    xmlhttp.send();
  } else {
    document.getElementById('erreur').innerText =
    "Le contenu de l'article ne peut être vide";
  }
}
