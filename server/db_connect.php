<?php
$servername = "mysql-211d9df4-gioelecavallo13-5cd8.h.aivencloud.com";
$username   = "avnadmin";
$password = getenv('DB_PASSWORD');
$dbname  = "defaultdb";
$port = 23072;

// Percorsi ai certificati Aiven (se richiesti)
$ssl_ca     = __DIR__ . '/ca.pem'; // devi scaricare il certificato CA da Aiven

$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, $ssl_ca, NULL, NULL);

// Connetti
mysqli_real_connect($conn, $servername, $username, $password, $dbname, $port, NULL, MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT);

// Controlla connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
echo "Connessione avvenuta con successo!";
?>