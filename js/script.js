
document.getElementsByTagName("nav")[0].onclick= function(event){
     
  var tab = this.getElementsByTagName("a");
    for(i=0 ; i < tab.length; i++){
        tab[i].classList.remove("active");//enleve la classe active à tous le éléments
    }

    event.target.classList.add("active");//ajoute la classe active à l'élément cliqué
}

/*document.getElementById('bojet1').innerHTML = objet.nom;*/

cards=document.getElementsByClassName("card mb-4 shadow-sm");
for(i=0; i < cards.length; i++){
    cards[i].style.boxShadow="pink 1px 1px 10px 0px, gray 2px 10px 10px 0px";
}

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}