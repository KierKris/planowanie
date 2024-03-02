<?php
$servername = "localhost";
$username = "reganta_kristof";
$password = "xWc@O5-b1-)*02(G";
$dbname = "reganta_planowanie";

// Tworzenie połączenia
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzanie połączenia
if ($conn->connect_error) {
    die("Połączenie nieudane: " . $conn->connect_error);
}

$szukaj = isset($_GET['szukaj']) ? $conn->real_escape_string($_GET['szukaj']) : '';

if ($szukaj !== '') {
    $query = "SELECT * FROM db_client WHERE id_clnt LIKE '%$szukaj%' OR alias LIKE '%$szukaj%'";
} else {
    $query = "SELECT * FROM db_client"; // Wyświetla wszystkie rekordy, gdy pole szukaj jest puste
}

$result = $conn->query($query);
echo "<table class='table'>";
echo "<th class='lp'>Lp</th><th>Nazwa</th>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id_clnt"]."</td><td class='td-text'>".$row["alias"]."</td></tr>";
    }
echo "</table>";
} else {
    echo "Nie znaleziono użytkowników";
}

$conn->close();
?>