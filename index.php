<?php


// EXERCICE 1 & 2
// class Ville {
//   private $_nom;
//   private $_departement;
//
//
//   public function nom($nom) {
//   return $this->_nom = $nom;
//   }
//
//   public function departement($departement) {
//   return $this->_departement = $departement;
//   }
//
//   public function __construct($nom, $departement){
//     echo 'La ville ', $this->nom($nom), ' est dans le département ', $this->departement($departement);
//   }
// }
//
// $city = new Ville('Roubaix', 'Nord');



// EXERCICE 3
// class Personne {
//   private $_nom;
//   private $_prenom;
//   private $_adresse;
//
//   public function __construct($nom, $prenom, $adresse){
//     $this->setNom($nom);
//     $this->setPrenom($prenom);
//     $this->setAdresse($adresse);
//   }
//
//
//   public function getNom($nom){
//   return $this->_nom = $nom;
//   }
//
//   public function setNom($nom) {
//     $this->_nom = $nom;
//   }
//
//   public function getPrenom($prenom){
//   return $this->_prenom = $prenom;
//   }
//
//   public function setPrenom($prenom) {
//     $this->_prenom = $prenom;
//   }
//
//   public function getAdresse($adresse){
//   return $this->_adresse = $adresse;
//   }
//
//   public function setAdresse($adresse) {
//     $this->_adresse = $adresse;
//   }
//
//   public function getPersonne(){
//     echo $this->_nom. ' ' .$this->_prenom. ' ' .$this->_adresse. '<br>';
//   }
//
// }
// $perso1 = new Personne('Chemaa', 'Sonia', 'Lille');
// $perso2 = new Personne('Youss', 'Oumar', 'Roubaix');
// $perso3 = new Personne('Robache', 'Aaron', 'Croix');
//
// $perso1->setAdresse('Roubaix');
// $perso1->getPersonne();
//
// $perso2->getPersonne();
//
// $perso3->getPersonne();

// EXERCICE 4

class Form {
private $_startFom;
private $_endForm;

// public function __construct(){
//   $this->_startFom="<form action='#' method=''><fieldset>";
// }

public function getStart() {
echo $this->_startFom="<form action='#' method=''><fieldset>";
}

public function getEnd(){
echo $this->_endForm="</fieldset></form>";
}

public function setText($text) {
echo "<input type='text' placeholder='".$text."'><br>";
}

public function setSubmit($envoi) {
  echo "<input type='submit' value='".$envoi."'>";
}

}

$formulaire1 = new Form();
$formulaire1->getStart(); // a mettre dans un constructeur
$formulaire1->setText('Leila');
$formulaire1->setText('Lababsa');
$formulaire1->setSubmit('OK');
$formulaire1->getEnd();


// faire un autre attribut qui recup tout, et creer une function qui echo cet attribut


?>
