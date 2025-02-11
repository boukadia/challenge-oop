<?php 
 ### Utilisation des Traits
// - Objectif :
// Réutiliser du code dans plusieurs classes sans héritage direct.

// - Exercice
//     Crée un trait appelé Logger contenant une méthode log($message).
//     Crée deux classes Utilisateur et Produit, qui utilisent Logger.
//     Teste le log() dans les deux classes 
trait Logger{
    public function log($message){
        echo "le messaage est $message";
    }
}
class utilisateur{
use Logger;
public function __construct($message){
    $this->message=$message;
}
private $message;
public function test(){
    echo $this->log($this->message);
}
}
class produit{
use Logger;
}
$utilisateur=new utilisateur("hello");
$utilisateur->test();
echo "<br>";



### Typing en PHP (Type Hinting & Return Types)
// - Objectif :
//     Utiliser le typage strict pour assurer la robustesse du code.
    
//     - Exercice
//         Crée une classe Calculatrice.
//         Ajoute une méthode additionner(int $a, int $b): int.
//         Ajoute une méthode moyenne(array $nombres): float.
//         Vérifie que les types sont respectés


class Calculatrice{
    public function additionner(int $a,int $b){
        $somme=$a+$b;
        echo "le somme du $a + $b=$somme";

    }
    public function moyenne(array $nombers){
        $somme=0;
        foreach($nombers as $nomber){
            $somme+=$nomber;
        }
        return $somme/count($nombers);


    }
}
$somme=new Calculatrice;
$somme->additionner(2,3);
echo "<br>";

echo $somme ->moyenne([2,3,1,4]);
echo "<br>";



### Readonly Properties
// - Objectif :
//     Empêcher la modification d’une propriété après l'initialisation.
    
//     - Exercice
//         Crée une classe CompteBancaire avec une propriété readonly float $soldeInitial.
//         Assigne soldeInitial dans le constructeur.
//         Teste en essayant de modifier soldeInitial après l'instanciation

class CompteBancaire{
    readonly float $soldeInitial;
    public function __construct($soldeInitial){
        $this->soldeInitial=$soldeInitial;
    }
    public function getSold(){
        return $this->soldeInitial;
    }
    // public function setSold($soldeInitial){
    //     return $this->soldeInitial=$soldeInitial;
    // }

}
$solde=new CompteBancaire(10);
echo $solde->getSold();
// $solde->setSold(11);

echo "<br>";

?>