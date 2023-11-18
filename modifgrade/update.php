<?php
require "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matProf = $_POST["MatProf"];
    $newGrade = $_POST["Grade"];
    $newDateNomin = $_POST["DateNomin"];

    $conn = connect($host, $db, $user, $password);

    try {
        $query = "UPDATE modifgrade SET Grade = :newGrade, DateNomin = :newDateNomin WHERE MatProf = :matProf";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":newGrade", $newGrade, PDO::PARAM_STR);
        $stmt->bindParam(":newDateNomin", $newDateNomin, PDO::PARAM_STR);
        $stmt->bindParam(":matProf", $matProf, PDO::PARAM_STR);

        if ($stmt->execute()) {
            echo "Le grade a été modifié avec succès pour le MatProf: " . $matProf;
            header("location: select.php");
        } else {
            echo "Erreur";
        }
    } catch (PDOException $e) {
        echo "Erreur: " . $e->getMessage();
    }

    $conn = null;
} else {
    echo "Erreur : méthode de requête non valide.";
}
?>
