<?php
krsort($listan, SORT_NUMERIC);

function listItems($listan){
//skriv ut listan
foreach ($listan as $key => $value) {
    echo "$key <br>";
  }; 
  echo "<br/>";
  echo "<br/>";
}

function dropdownItems($listan){
//Skriv ut dropdown
  echo "<select name='playerList' form='playerForm'>";
  foreach ($listan as $key => $value) {
    echo "<option value='".$key."'>".$key."</option>";
  };
  echo "</select>";
  echo "<form method='GET' action='./details.php' id='playerForm'>";
  echo "<input type='submit' value='Mer info'>";
  echo "</form>";
}






?>