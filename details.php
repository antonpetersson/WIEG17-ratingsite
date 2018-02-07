<?php
$titleEnd = "Details";
include "header.php";


$selectedKey = $_GET['playerList'];
$selectedPlayer = $listan[$selectedKey];





echo "<h3>Allt du behöver veta om ". $selectedPlayer["name"] . ":</h3><br/>";

echo "<h4>Han är " . $selectedPlayer["details"] . "</h4>";
dropdownItems($listan);

include "footer.php";
?>