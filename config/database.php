<?php 
echo"⏩";

$env = parse_ini_file(__DIR__."/.env");
$host = $env["DB_HOST"];
$db = $env["DB_NAME"];
$user =$env["DB_USER"];
$pass =$env["DB_PASS"] ;

$conn = mysqli_connect( $host, $user, $pass, $db);
if($conn){
    echo"<h1>✔️</h1>";
}
if (!$conn) {
    die("Erreur connexion DB : " . mysqli_connect_error());
}


