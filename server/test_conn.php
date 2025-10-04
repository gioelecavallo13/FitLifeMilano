<?php
include 'db_connect.php'; // includi il file di connessione

if ($conn && !$conn->connect_error) {
    echo "Connessione al database riuscita!";
} else {
    echo "Connessione fallita: " . $conn->connect_error;
}
?>
