<!DOCTYPE html>
<html>
<body>

<?php
class Personnage {
    function Personnage($force, $experience, $nom) {
        $this->force = $force;
        $this->experience = $experience;
        $this->nom = $nom;
        echo $this->nom . " : " . "force  = " . $this->force . " experience = " . $this->experience . "</br>";
    }

    function frapper($personnage){
      $puissanceB = $personnage->force*$personnage->experience;
      $puissanceA = $this->force * $this->experience;
      if ($puissanceA > $puissanceB) {
        $this->gagner();
        $personnage->mort();
      } else {
        $this->mort();
        $personnage->gagner();
      }

    }
    function gagner(){
      echo $this->nom . " a gagné</br>";
    }
    function mort(){
      echo $this->nom . " est mort</br>";
    }
}

$toto = new Personnage(rand(100,200),rand(100,200),"toto");
$tata = new Personnage(rand(100,200),rand(100,200),"tata");

$toto->frapper($tata);

?>

</body>
</html>
