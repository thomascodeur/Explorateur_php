// traitement JS

var onclique = document.getElementsByClassName('dossier');
var dossier = new Array();
console.log(onclique);

for (i = 0; i < onclique.length; i++) {
    onclique[i].addEventListener('click', appel)
}

function appel(e) {
    e.preventDefault();

    var dossier = this.getAttribute('data-dir');
    console.log(dossier);

   const req = new XMLHttpRequest();

    req.onreadystatechange = function (event) {
        if (this.readyState === XMLHttpRequest.DONE) {
            if (this.status === 200) {
                console.log("reponse", this.responseText);
                var result = document.getElementById('reponse');
                result.innerHTML = this.responseText;

                onclique = document.getElementsByClassName('dossier');
                for (i = 0; i < onclique.length; i++) {
                    onclique[i].addEventListener('click', appel)
                }

            } else {
                console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
            }

        }
    }


req.open('GET', 'assets/js/gestion_ajax.php?dossier=' + dossier, true);
req.send(null);
};