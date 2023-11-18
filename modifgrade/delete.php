<?php
require "connect.php";

if (isset($_GET["MatProf"])) {
    $matProf = $_GET["MatProf"];

    $conn = connect($host, $db, $user, $password);

    try {
        $sql = "DELETE FROM modifgrade WHERE MatProf = :matProf";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':matProf', $matProf, PDO::PARAM_STR);
        $stmt->execute();

        $rowCount = $stmt->rowCount();

        if ($rowCount > 0) {
            header("location: select.php");
        } else {
            echo "Erreur : aucune ligne affectée.";
        }
    } catch (PDOException $e) {
        echo "Erreur: " . $e->getMessage();
    }

    $conn = null;
} else {
    echo "Erreur : MatProf non défini.";
}
?>
