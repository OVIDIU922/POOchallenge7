<?php 

class Personne {
    private $nom;
    private $prenom;
    private $adresse;
    private $dateNaissance;

    // Constructeur pour initialiser les attributs
    public function __construct($nom, $prenom, $adresse, $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->dateNaissance = $dateNaissance;
    }

    // Méthode pour afficher les infos de la personne
    public function afficherInfos() {
        echo "Nom : {$this->nom}, Prénom : {$this->prenom}, Adresse : {$this->adresse}, Date de naissance : {$this->dateNaissance}\n";
    }

    // Méthode pour modifier l'adresse
    public function modifierAdresse($nouvelleAdresse) {
        $this->adresse = $nouvelleAdresse;
    }

    // Méthode pour calculer l'âge
    public function calculerAge() {
        $dateNaissance = new DateTime($this->dateNaissance);
        $aujourdHui = new DateTime();
        $difference = $dateNaissance->diff($aujourdHui);
        return $difference->y; // Renvoie l'âge en années
    }
}
