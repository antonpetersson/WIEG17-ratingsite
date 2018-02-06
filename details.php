<?php
$titleEnd = "Details";
include "header.php";

//print_r( $_GET );
$selectedPlayer = $_GET["playerList"];

echo "<h3>Allt du behöver veta om ". $_GET["playerList"] . ":</h3><br/>";

echo "<h4>Han är " . $listan[$selectedPlayer] . "</h4>";
dropdownItems($listan);

include "footer.php";
?>