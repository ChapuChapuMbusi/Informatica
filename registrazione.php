<?php
$email=$_POST['email'];
$nome=$_POST['name'];
$cognome=$_POST['surname'];
$genere=$_POST['sex'];
$continent=isset($_POST['continent']) ? $_POST['continent'] : array();
print ("Dati inseriti:</br>");
print ("Nome: $nome</br>");
print ("Cognome: $cognome</br>");
print ("Genere: $genere</br");
print ("Continent: $continent</br>");
?>
