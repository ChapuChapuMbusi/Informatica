<?php;

$nome=$_POST['name'];
$cognome=$_POST['surname'];
$type=$_POST['type'];
$category=$_POST['category'];
$weekdays = ($_POST['weekdays'])? $_POST['weekdays']: array();
print ("Dati inseriti:</br>");
print ("Nome: $nome</br>");
print ("Cognome: $cognome</br>");
print ("Origine: $type<br>");
print ("Genere: $category</br>");
foreach($weekdays as $wd){
  print ( $wd "<br>");
}

?>

