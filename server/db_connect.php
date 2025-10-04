<?php
$servername = getenv('DB_SERVERNAME');
$username   = getenv('DB_USERNAME');
$password   = getenv('DB_PASSWORD');
$dbname     = getenv('DB_DBNAME');
$port       = (int) getenv('DB_PORT'); // variabile d'ambiente

$ssl_ca = __DIR__ . '/config/ca.pem'; // file non committato, solo locale/prod

$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, $ssl_ca, NULL, NULL);

mysqli_real_connect($conn, $servername, $username, $password, $dbname, $port, NULL, MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT);

if ($conn->connect_error) {
    error_log("Connessione fallita: " . $conn->connect_error);
    die("Errore di connessione al DB.");
}

echo "Connessione avvenuta con successo!";
?>
