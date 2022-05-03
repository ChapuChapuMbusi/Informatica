<?php


function login($conn, $user, $pass){
    $sql = "SELECT * FROM 99DIPENDENTE WHERE email = '$user' AND password = '$pass' ";
    $query = $conn -> query($sql);
    $result = mysqli_fetch_array($query);

    if(!isset($result)){
        die("Nessuna corrispondeza trovata"); //interruzione in caso non si trovi riscontro nel db
    }
}


$username = "pasca5bstud09";
$password = "";
$db = "my_pascal5bstud09";
$server = "localhost";

$conn = mysqli_connect($server,$username, $password, $db);

if(!$conn){
    die("connessione non riuscita"); //se non avviene la connessione interrompiamo l'esecuzione
}

$email = $_POST['email'];
$pass = $_POST['password'];

login($conn, $email, $pass);  //controllo delle credenziali, il progranna viene interrotto se non avviene con successo 

header('Location: http://' . $_SERVER['HTTP_HOST'] . 'login_successo.html');
