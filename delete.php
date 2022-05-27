<?php


function login($conn, $user, $pass){
    $sql = "SELECT * FROM 99DIPENDENTE WHERE email = '$user' AND password = '$pass' ";
    $query = $conn -> query($sql);
    $result = mysqli_fetch_array($query); //c'è almeno una corrispondenza? 

    if(!isset($result)){//no 
        return false 
    }
    return true;//si
}


$username = "pasca5bstud09";
$password = "";
$db = "my_pascal5bstud09";
$server = "localhost";

$conn = mysqli_connect($server,$username, $password, $db);

if(!$conn){
    die("connessione non riuscita"); //se non avviene la connessione interrompiamo l'esecuzione
}

$email = $SESSION['username'];
$pass = $_POST['password'];

if(login($conn, $email, $pass)){//controllo credenziali, reindirizzamento se con successo
    header('Location: http://' . $_SERVER['HTTP_HOST'] . 'u_sure.html'); //pagina che chiede conferma
}
else{
    echo //html con l'aggiunta dell'errore autenticazione in caso non riesca 
}

?>