localStorage.setItem("panier",'[]');// (clé, panier vide s/f de tab) création d'un élt app panier dont le contenu est vide
var panier=null; // variable de travail
function ajoutPanier() {
    var idf = document.querySelector("#idf").value; // récup du numF à mettre dans mon panier
    panier=JSON.parse(localStorage.getItem("panier")); //localStorage.getItem me retourne le string '[]'("panier"), ensuite JSON.parse prend ce string pour créer un tab dans la mémoire pour le rendre manipulable en vrai tableau
    panier.push(idf); //la fonction push va y mettre le numF
    localStorage.setItem("panier",JSON.stringify(panier)); //mise à jour de localStorage : conversion du panier en string
}

function afficherPanier() {
    var lePanier="<h3>Contenu de votre panier</h3></br>";
    panier=JSON.parse(localStorage.getItem("panier")); //récup du panier, maintenant un vrai tab
    for( var elem of panier){
        lePanier+="</br>Élément = "+elem; // remplissage du panier dans la var contenu constitué des '[...]'
    }
    document.querySelector("#votrePanier").innerHTML=lePanier; // mise de mon panier dans HTML pour apparition automatique du <h3></h3>. Voir le span vide à la ligne 28
}