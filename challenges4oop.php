<!-- # Gestion d'une Bibliothèque en POO

## Objectif
Créer un système de gestion d'une bibliothèque en utilisant la Programmation Orientée Objet (POO) en PHP.
Ce projet doit appliquer les concepts d'éncapsulation, d'héritage, d'abstraction et de polymorphisme.

## Spécifications

### 1. Classe abstraite : **Personne**
#### Propriétés :
- **nom** (*string*) : Le nom de la personne.
- **age** (*int*) : L'âge de la personne.

#### Méthodes abstraites :
- **sePresenter()** : Chaque sous-classe doit implémenter cette méthode pour afficher un message unique, par exemple :  
  - Lecteur : "Je suis [nom], un lecteur de [âge] ans."
  - Bibliothécaire : "Je suis [nom], un bibliothécaire qui gère la bibliothèque."

### 2. Classe **Lecteur** (Hérite de *Personne*)
#### Propriétés :
- **livresEmpruntes** (*tableau*) : Contient les titres des livres empruntés.

#### Méthodes :
- **emprunterLivre(livre)** : Ajoute un livre à la liste si le lecteur n'a pas dépassé le nombre maximal d'emprunts.
- **retournerLivre(livre)** : Retire un livre de la liste.
- **afficherEmprunts()** : Affiche les livres empruntés.

### 3. Classe **Bibliothecaire** (Hérite de *Personne*)
#### Propriétés :
- **specialite** (*string*) : La spécialité du bibliothécaire (ex: gestion, conservation, animation).
- **listeLecteurs** (*tableau d'objets Lecteur*) : Liste des lecteurs enregistrés.
- **nombreLecteurs** (*statique*) : Nombre total de lecteurs inscrits.

#### Méthodes :
- **inscrireLecteur(lecteur)** : Ajoute un lecteur à la bibliothèque, évite les doublons.
- **afficherLecteurs()** : Affiche tous les lecteurs enregistrés.

### 4. Classe **ResponsableBibliotheque** (Hérite de *Bibliothecaire*)
#### Méthodes :
- Redéfinir **sePresenter()** pour afficher "[nom], le responsable de la bibliothèque, supervise toute la gestion."
- Appeler la méthode **sePresenter()** de la classe parente pour ajouter l'information sur la spécialité.

## Contraintes Techniques
- Utiliser l'**encapsulation** pour les propriétés privées.
- Valider les données dans les **setters** (ex. : l'âge doit être positif, un livre ne peut être emprunté deux fois).
- Utiliser `self` pour gérer la propriété statique **nombreLecteurs**.
- Utiliser `$this` pour accéder aux propriétés et méthodes internes.

## Mise en pratique
1. Créer quelques **Lecteurs** et leur ajouter des livres empruntés.
2. Créer un **Bibliothécaire** et inscrire des lecteurs.
3. Créer un **ResponsableBibliotheque** et afficher la liste des lecteurs.
4. Tester les **emprunts et retours de livres**.

---

🔍 **Bonus** : Ajouter une fonctionnalité de **recherche de livre** parmi les livres empruntés par un lecteur.

🚀 **Prêt à coder et à relever le défi ?** 😃
 -->
<?php

### 1. Classe abstraite : **Personne**

abstract class personne{
    protected $nom;
    protected $age;
     public function __construct(string $nom,int $age) {
        $this->age = $age;
        $this->nom = $nom;
    }
    abstract public function sePresenter();
}
class lecteurr extends personne{
    public function sePresenter(){
        echo "Je suis $this->nom, un lecteur de $this->age ans.";
    }
}
class bibliotique extends personne{
    public function sePresenter(){
        echo "Je suis $this->nom, un bibliothécaire qui gère la bibliothèque.";
    }
}
$personne=new lecteurr("ahmed",15);
$personne->sePresenter();

echo "<br>";

### 2. Classe **Lecteur** (Hérite de *Personne*)

class lecteur extends personne{
    private $max=5;
    // private $titre;
private $livresEmpruntes=[];
public function emprunterLivre($titre){
    if (count($this->livresEmpruntes)<= $this->max){
        $this->livresEmpruntes[]=$titre;
    }
    else {
        echo "vous avez atteindre le max";
    }
    
}
public function getBooks(){
    foreach($this->livresEmpruntes as $livres){
        echo "<pre>";
echo $livres;

    }
}
public function retireBook($book){
    if (count($this->livresEmpruntes)!=0){
          foreach($this->livresEmpruntes as $livres){
        if ($book==$livres){
            unset ($livres);
        }
        else{
            "ce book n'exixte pas";
        }
        echo "<pre>";
echo $livres;

    }
    }
    else {
        echo "aucun book in biblitique";
    }
}

    public function sePresenter(){
        echo "Je suis $this->nom, un lecteur de $this->age ans.";
    }
}
$personne=new lecteur("ahmed",15);
$personne->emprunterLivre("test01");
$personne->emprunterLivre("test1");
$personne->emprunterLivre("test13");
$personne->emprunterLivre("test13");
$personne->emprunterLivre("test13");
$personne->emprunterLivre("test13");
$personne->emprunterLivre("test13");
$personne->emprunterLivre("test00");
$personne->retireBook("test");


?>