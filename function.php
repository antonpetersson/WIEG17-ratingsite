<?php
krsort($listan, SORT_NUMERIC);

function listItems($listan) {
  //skriv ut listan
  foreach($listan as $spelare) {
      if (isset($spelare["name"])) {
          echo "<b>".$spelare["name"]."</b>: ".$spelare["points"]." Poäng";
      }
      else {
          die("Något gick fel");
      }
      echo "<br/>";
     
  }
  echo "<br/>";
}


 function dropdownItems($listan){
 //Skriv ut dropdown
   echo "<select name='playerList' form='playerForm'>";

   foreach ($listan as $key => $spelare) {
     echo "<option value='" . $key ."'>".$spelare["name"]."</option>";
   };

   echo "</select>";
   echo "<form method='GET' action='./details.php' id='playerForm'>";
   echo "<input type='submit' value='Mer info'>";
   echo "</form>";
 }






?>