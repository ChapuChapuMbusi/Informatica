<?php
$email=$_POST['email'];
$nome=$_POST['name'];
$cognome=$_POST['surname'];
$continent=$_POST['continent'];
$genere=$_POST['sex'];
$subscribe = isset($_POST['subscribe'])? $_POST['subscribe']: 'no';
print ("Dati inseriti:</br>");
print ("Nome: $nome</br>");
print ("Cognome: $cognome</br>");
print ("Origine: $continent<br>");
print ("Genere: $genere</br>");
print ("iscrizione: $subscribe");
?>

