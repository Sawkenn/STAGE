<?php
echo "<h1 class='test'>Bonjour, ${_POST['Name']} " . $_POST['lastName'] . "</h1>";
echo "<br>Bonjour, ${_POST['Name']} ${_POST['lastName']}";
echo "<br>Bonjour, " . $_POST['Name'] . " " . $_POST['lastName'];
?>
<br>
Bonjour, <?=$_POST['Name']?> <?=$_POST['lastName']?>