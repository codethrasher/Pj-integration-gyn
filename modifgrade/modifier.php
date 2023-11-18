<?php
require "connect.php";

if (isset($_GET["MatProf"])) {
    $matProf = $_GET["MatProf"];

    $conn = connect($host, $db, $user, $password);

    try {
        $query = "SELECT * FROM modifgrade WHERE MatProf = :matProf";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":matProf", $matProf, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            echo "<h3>Modifier le grade :</h3>";
            echo "<form method='post' action='update.php'>"; 
            echo "<input type='hidden' name='MatProf' value='" . $matProf . "'>";
            echo "Grade: <input type='text' name='Grade' value='" . $row["Grade"] . "'><br>";
            echo "Date de Nomin: <input type='date' name='DateNomin' value='" . date('Y-m-d', strtotime($row["DateNomin"])) . "'><br>";
            echo "<input type='submit' value='Modifier'>";
            echo "</form>";
        } else {
            echo "Erreur : Aucune entrée trouvée pour le MatProf " . $matProf;
        }
    } catch (PDOException $e) {
        echo "Erreur: " . $e->getMessage();
    }

    $conn = null;
} else {
    echo "Erreur : MatProf non défini.";
}
?>
