<?php
Exercice:
//  1. Crée une classe CompteBancaire avec :
//      Un attribut privé $solde.
//      Un constructeur pour initialiser le solde.
//      Une méthode deposer($montant) pour ajouter de l'argent.
//      Une méthode retirer($montant) pour retirer de l'argent (si suffisant).
//      Une méthode getSolde() pour afficher le solde.
//  2. Instancie un compte et effectue des opérations

class CompteBancaire{
    private $solde;
    public function __construct($solde){
        $this->solde=$solde;
    }
    public function deposer($montant){
        $this->solde+=$montant;

    }
    public function  retirer($montant){
        if($montant>$this->solde){echo "insuffissant!";}
        else
        $this->solde-=$montant;
    }
    public function getSold(){
        return $this->solde;
    }
}
$montant=new CompteBancaire(20);
$montant->retirer(30);
echo $montant->getSold();
// $montant->retirer(30);
// echo $montant->getSold();


class Compte
{
    private $solde;
    public function addSold($montant)
    {
        $this->solde += $montant;
        echo "$this->solde ";
    }
    public function retirer($montant)
    {
        if ($this->solde >= $montant) {
            $this->solde -= $montant;
            echo " {$this->solde}";
        } else {
            echo "insuffisant!";
        }
    }
    public function getSolde()
    {
        echo  $this->solde;
    }
}
// $compte = new Compte();

// $compte->addSold(50);
// echo "<br>";
// $compte->retirer(30);
// echo "<br>";
// $compte->getSolde();
// echo "<br>";

// =====================================================
// Créer une classe abstraite Animal qui servira de base pour d’autres classes.

// - Exercice :
//     1. Déclare une classe abstraite Animal avec :
//         Un attribut protégé $nom.
//         Un constructeur qui initialise $nom.
//         Une méthode abstraite faireDuBruit().
//     2. Crée deux classes Chien et Chat qui héritent de Animal et implémentent faireDuBruit().

abstract class Animall{
    protected $nom;
    public function __construct($nom){
        $this->nom=$nom;
    }
    abstract  public function faireBruit();

}
class chatt extends animall{
    public function faireBruit(){
        echo "mn name is ".$this->nom."";
    }

}
$chat=new chatt("ton");
$chat->faireBruit();




















abstract class Animal
{
    protected $nom;
    public function __construct($nom)
    {
        $this->nom = $nom . "Animal";
    }
    abstract public function faireDuBruit();
}

class Chien extends Animal
{
    private $age;
    public function __construct($nom, $age)
    {
        parent::__construct($nom);
        $this->age = $age;
    }
    public function faireDuBruit()
    {
        return "howhow";
    }
}




class Chat extends Animal
{
    public function faireDuBruit()
    {
        return "miaw miaw";
    }
}
$chien = new chien("test",12);
echo $chien->faireDuBruit();
echo "<br>";

// =================================================================

### Héritage
// - Objectif :
//     Créer une classe Vehicule et la spécialiser en Voiture et Moto.

//     - Exercice
//         1. Crée une classe Vehicule avec :
//             Un attribut protégé $marque.
//             Un constructeur pour initialiser $marque.
//             Une méthode demarrer().
//         2. Crée les classes Voiture et Moto qui héritent de Vehicule.
//         3. Ajoute une méthode rouler() spécifique à chaque véhicule.



class Vehicule
{
    protected $marque;
    public function __construct($marque = 'toyota')
    {
        $this->marque = $marque;
    }
    public function demarer() {}
}
class voiture extends Vehicule
{
    public function rouler()
    {
        echo $this->marque;
    }
}
class motor extends Vehicule
{
    public function rouler()
    {
        echo $this->marque;
    }
}
$voiture = new voiture("dasia");
$voiture->rouler();
echo "<br>";
$motor = new motor("c-90");
$motor->rouler();
echo "<br>";

// ===========================================================

###  Polymorphisme - Challenge : Calcul de Surface
// - Objectif :
//     Créer une interface Forme et implémenter plusieurs types de formes géométriques.

//     - Exercice
//         1. Déclare une interface Forme avec une méthode calculerSurface().
//         2. Implémente cette interface dans Carre et Cercle.
//         3. Teste en affichant la surface de chaque forme

interface forme
{
    public function calculerSurface();
}
class carre implements forme
{
    private $largeur;
    public function __construct($largeur)
    {
        $this->largeur = $largeur;
    }



    public function calculerSurface()
    {
        $surface = $this->largeur * $this->largeur;
        return $surface;
    }
}
$surface=new carre(2);
echo $surface->calculerSurface();
echo "<br>";
// ======================================================================
// ======================================================================
// ======================================================================

### Appeler le Constructeur Parent (parent::__construct)
// - Objectif :
//     Créer une classe Employe qui hérite de Utilisateur et qui ajoute un salaire.
    
//     - Exercice :
//         1. Crée une classe Employe qui hérite de Utilisateur.
//         2. Ajoute un attribut $role dans la classe Utilisateur. Lors de la création d'un employé, il faut donner la valeur 'Employe' sans passer la valeur lors de la création d'un Employe.
//         2. Ajoute un attribut $salaire privé.
//         3. Le constructeur de Employe doit appeler parent::__construct($nom, $email) pour initialiser les valeurs héritées.
//         4. Ajoute une méthode afficherInfos() qui affiche aussi le salaire.

class utilisateur{
protected $nom;
protected $email;
protected $role ;
private $salaire ;
public function __construct($nom,$email,$salaire){
    
    $this->nom=$nom;
    $this->email=$email;
    $this->salaire=$salaire;

}
public function getSalaire(){
    return $this->salaire;
}
// public function setSalaire($solde){
//     return $this->salaire=$solde;
// }
}
class Employe extends utilisateur{
    public function __construct($nom, $email,$salaire){
        parent::__construct($nom,$email,$salaire);
        $this->role="emploiyee";
    }
    public function afficheDonnes(){
echo "$this->nom <br>".$this->email." <br>".$this->role."<br>".$this->getSalaire();
    }

    
}
$afficheDonnes= new Employe("ahmed","ahmed@",5);
$afficheDonnes->afficheDonnes();
echo "<br>";


// ======================================================
// ======================================================
// ======================================================

### Utilisation des Getters et Setters
// - Objectif :
//     Protéger l'accès aux données en utilisant des getters et setters.
    
//     - Exercice :
//     1. Modifie Utilisateur pour rendre $email privé et ne permettre l'accès que via un getter getEmail().
//     2. Ajoute une validation dans le setter setEmail() pour vérifier que l’email contient @.
//     3. Modifie afficherInfos() pour utiliser getEmail().
class utilisateurr{
    protected $nom;
    private $email;
    protected $role ;
    private $salaire ;
    public function __construct($nom,$salaire){
        
        $this->nom=$nom;
        $this->email;
        $this->salaire=$salaire;
    
    }
    public function getSalaire(){
        return $this->salaire;
    }
    // public function setSalaire($solde){
    //     return $this->salaire=$solde;
    // }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        if()
        return $this->email=$email;
    }
    
    
    }
    class Employee extends utilisateurr{
        public function __construct($nom,$salaire){
            parent::__construct($nom,$salaire);
            $this->role="emploiyee";
        }
        public function afficheDonnes(){
    echo "$this->nom <br>".$this->getEmail()." <br>".$this->role."<br>".$this->getSalaire();
        }
    
        
    }
    $afficheDonnes= new Employee("ahmed","ahmed@",5);
    $afficheDonnes->afficheDonnes();
echo "<br>";
