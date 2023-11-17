<!DOCTYPE html>
<html>
<head>
    <title>Gestion des salles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f8f8f8;
            box-sizing: border-box;
            padding-top: 60px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        nav {
            background-color: #4caf50;
            width:110px;
            padding-bottom:10px;
            position: fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.1);
            top:0;
            left:0;
        }
        nav a:hover {
            background-color: #45a049;
            color: #fff; 
        }
        nav a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            cursor: pointer;
            border-bottom: 3px solid white;
            transition: background-color 0.3s;
        }
        
        section {
            margin: 20px;
        }

        h2 {
            text-align: center;
            color: #4caf50;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            
        }

        button {
            background-color: #4caf50;

            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        hr {
            border: 0;
            height: 1px;
            background-color: #ddd;
            margin-bottom: 20px;
        }

        /* Add more styling as needed */

        /* Responsive styles */
        @media (max-width: 600px) {
            form {
                width: 90%;
            }
            
        }
    </style>
</head>

<nav>
        <a href="#insert">Insert</a>
        <a href="#update">Update</a>
        <a href="#delete">Delete</a>
        <a href="#view">View</a>
    </nav>
<body>
    <h2>Gestion des salles</h2>
        <section id="insert">
    <!-- insert-->
    <form action="add.php" method="POST">
                <h2>Ajout salle</h2>
        <label for="salle">Nom salle:</label>
        <input type="text" name="salle" required>
        <br>
        <label for="departement">Département:</label>
        <input type="text" name="departement" required>
        <br>
        <label for="categorie">Catégorie:</label>
        <input type="text" name="categorie" required>
        <br>
        <label for="responsable">Responsable:</label>
        <input type="text" name="responsable" required>
        <br>
        <label for="charge">Charge:</label>
        <input type="text" name="charge" required>
        <br>
        <label for="nb_place_examen">Nb places examen:</label>
        <input type="text" name="nb_place_examen" required>
        <br>
        <label for="nb_lignes">Nb lignes:</label>
        <input type="text" name="nb_lignes" required>
        <br>
        <label for="nb_col">Nb colonnes:</label>
        <input type="text" name="nb_col" required>
        <br>
        <label for="nb_surv">Nb Surveillants:</label>
        <input type="text" name="nb_surv" required>
        <br>
        <label for="type">Type:</label>
        <input type="text" name="type" required>
        <br>
        <label for="disponible">Disponibilité</label>
        <input type="text" name ="disponible" required>
        <br>
        <input type="submit" name="add" value="Ajouter Salle">
    </form>
    </section>
        <section id="update">
    <!-- update -->
        <form method="POST" action="update.php">
        <h2>Mise a jour salle</h2>
        
        <label for="oldSalle">Nom actuel: </label>
        <input type="text" name="oldSalle" required>
        <br>
        <label for="newSalle">Nouveau nom:</label>
        <input type="text" name="newSalle" required>
        <br>
        <label for="departement">Département:</label>
        <input type="text" name="newDepartement" required>
        <br>
        <label for="categorie">Catégorie:</label>
        <input type="text" name="newCategorie" required>
        <br>
        <label for="responsable">Responsable:</label>
        <input type="text" name="newResponsable" required>
        <br>
        <label for="charge">Charge:</label>
        <input type="text" name="newCharge" required>
        <br>
        <label for="nb_place_examen">Nb places examen:</label>
        <input type="text" name="newNbPlaceExamen" required>
        <br>
        <label for="nb_lignes">Nb lignes:</label>
        <input type="text" name="newNbLignes" required>
        <br>
        <label for="nb_col">Nb colonnes:</label>
        <input type="text" name="newNbCol" required>
        <br>
        <label for="nb_surv">Nb Surveillants:</label>
        <input type="text" name="newNbSurv" required>
        <br>
        <label for="type">Type:</label>
        <input type="text" name="newType" required>
        <br>
        <label for="Disponible">Disponiblité</label>
        <input type="text" name="newDisponible" required>
        <input type="submit" name="update" value="MAJ Salle">
        
    </form>
    </section>
        <section id="delete">
    <!-- delete -->
    <form method="POST" action="delete.php">
        <h2>Supprimer salle</h2>
        <label for="deleteSalle">Nom de la salle à supprimer :</label>
        <input type="text" name="deleteSalle" required>
        <br>
        <input type="submit" name="delete" value="Supprimer Salle">
    </form>
    </section>
    
    <section id="view">
    <!-- select-->
    <form method ="POST" action= "view.php">
        <h2>Afficher les détails de toutes les salles </h2>
        <input type="submit" name="select" value="Afficher Salles">
    </form>
    <form method = "POST" action="view.php">
        <h2> Afficher les détails des salles en utilisant un filtre</h3>
        <label for ="salles">Choisir un filtre </label>
        <Select name="salles" id ="salles">
            <option value="categorie">Catégorie</option>
            <option value="departement">Département</option>
            <option value="type">Type</option>
        </Select>
        <label for="filterValue">Donner une valeur</label>
         <input type="text" name="filterValue" id="filterValue" required>
        <input type="submit" name="select2" value="Afficher">

        </section>
        

</body>
</html>

