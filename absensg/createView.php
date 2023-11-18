<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add record</title>
</head>

<body>
    <h1>Add record here</h1>
    <form method="post" action="create.php" >
        <table>

        
            <?php
        
        require 'db_connection.php'; 
            echo "<tr>
            <td>Matricule de prof :</td><td>
            <select name='MatriculeProf' required>";
            $result = $conn->query("select * FROM prof");
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo '<option value="' . $row['MatProf'] . '">' . $row['Nom'] . '</option>';
            }
            echo "</select></td></tr>";

            echo "<tr><td>Code Classe :</td><td><select name='CodeClasse' required>";
            $result2 = $conn->query("select * FROM classe");
            while ($row = $result2->fetch(PDO::FETCH_ASSOC)) {
                echo '<option value="' . $row['CodClasse'] . '">' . $row['IntClasse'] . '</option>';
            }
            echo "</select></td></tr>";


            echo "<tr><td>Code Matière :</td><td><select name='CodeMatiere' required>";
            $result3 = $conn->query("select * FROM matieres");
            while ($row = $result3->fetch(PDO::FETCH_ASSOC)) {
                echo '<option value="' . $row['Code Matière'] . '">' . $row['Nom Matière'] . '</option>';
            }
            echo "</select></td></tr>";

            ?>
        
        <tr><td>Session :</td><td><input type="number" name="Session" placeholder="Session" required ></td></tr>
        <tr><td>Date d'absence :</td><td><input type="datetime-local" name="DateAbs" required></td></tr>
        <tr><td>Seance :</td><td><input type="text" name="Seance" placeholder="Seance" required></td></tr>
        <tr><td>Motif :</td><td><input type="text" name="Motif" placeholder="Motif" maxlength="60"></td></tr>
        <tr><td>Type de Seance :</td><td><input type="text" name="TypeSeance" placeholder="TypeSeance" maxlength="10"></td></tr>
        <tr><td><label for="Justifier">Justifier:</label></td>
        <td><input type="checkbox" name="Justifier"></td></tr>
        <tr><td><input type="submit" value="Add Record"></td> <td><input type="reset" value="reset"></td></tr>
    </table>
   
    </form>


</body>

</html>