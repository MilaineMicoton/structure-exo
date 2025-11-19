// obtenir le formulaire
const formulaire = document.querySelector("form");

// déclarer les variables globales
let stringDates = "";
let affkey = "";
let affvalue = "";

console.log("j'ai récupéré le formulaire" + formulaire + "et déclaré les variables globales");

// *******************************************déclarer la fonction verifierDates*******************
function verifierDates() {

// on vérifie si au moins une des dates a été cochée

  
  let indic = 0;
  console.log(stringDates + indic);

  let baliseDateExpo1 = document.getElementById("date-expo-1");
  let baliseDateExpo2 = document.getElementById("date-expo-2");
  let baliseDateExpo3 = document.getElementById("date-expo-3");
  let baliseDateExpo4 = document.getElementById("date-expo-4");
  let baliseDateExpo5 = document.getElementById("date-expo-5");

  if(baliseDateExpo1.checked) {stringDates += "1er au 30 avril, "; indic+=1};
  if(baliseDateExpo2.checked) {stringDates += "1er au 30 mai, "; indic+=1};
  if(baliseDateExpo3.checked) {stringDates += "1er au 30 juin, "; indic+=1};
  if(baliseDateExpo4.checked) {stringDates += "1er au 30 juillet, "; indic+=1};
  if(baliseDateExpo5.checked) {stringDates += "1er au 30 août, ";indic+=1};

  console.log("stringDates contient: " + stringDates + " indic contient " + indic);
  if(indic === 0) {
    prompt("Cochez au moins une date");
    return false;}
  else {console.log("dates ok");
    return true;  }
  }; 



// *********************************************déclarer la fonction recapDonnées**************************
function recapDonnees ()  {

// on récupère les coordonnées

const baliseNom = document.getElementById("name");
const balisePrenom = document.getElementById("firstname");
const baliseEmail = document.getElementById("email");
 
  // on crée un récapitulatif des réponses

  let recap = {
    Nom: baliseNom.value,
    Prenom: balisePrenom.value,
    Mail: baliseEmail.value,
    Expos: stringDates,
  }
  console.log(recap);
  console.log (Object.keys(recap));
  console.log (Object.values(recap));

  affkey = Object.keys(recap);
  affvalue = Object.values(recap);

}

// ************************* eventListener sur le submit: empêcher le comportement par défaut et entrer dans le processus ******

formulaire.addEventListener("submit", (event) => {
  event.preventDefault();
  console.log("j'ai écouté un event submit");

  // je vérifie les dates

  if (verifierDates ()) {

  // je récupère les données et prépare un récapitulatif

  recapDonnees ();

  // on inclut un confirm pour vérifier si l'utilisateur valide ses données
  
  let valider = "Récapitulatif\n\n";
    valider += affkey[0] + ": " + affvalue [0] + " \n";
    valider += affkey[1] + ": " + affvalue [1] + " \n";
    valider += affkey[2] + ": " + affvalue [2] + " \n";
    valider += affkey[3] + ": " + affvalue [3] + " \n";
    valider += "\nEtes-vous d'accord?";
  const result = confirm(valider);

  console.log(result);}

  else {console.log("pas de dates")}

    })