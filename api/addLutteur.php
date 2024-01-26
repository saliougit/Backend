<?php
    // include '../Database/connect.php';

    // $nom = $_POST['nom'];
    // $poids = $_POST['poids'];
    // $taille = $_POST['taille'];
    // $pays = $_POST['pays'];

    // $sql = "INSERT INTO lutteurs (nom, poids, taille, pays) VALUES ('$nom', '$poids', '$taille', '$pays')";

    // if ($conn->query($sql) === TRUE) {
    //     echo "Lutteur ajouté avec succès.";
    // } else {
    //     echo "Erreur lors de l'ajout du lutteur: " . $conn->error;
    // }

    // $conn->close();

    include ("../Database/connect.php");

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");


    // Récupération des données du formulaire
    $nom = $_POST['nom']; // supposons que vous avez un champ nom dans le formulaire
    $poids = $_POST['poids']; // supposons que vous avez un champ poids dans le formulaire
    $taille = $_POST['taille']; // supposons que vous avez un champ taille dans le formulaire
    $pays = $_POST['pays']; // supposons que vous avez un champ pays dans le formulaire

    // Préparez la requête d'insertion
    $stmt = $pdo->prepare('INSERT INTO lutteurs (nom, poids, taille, pays) VALUES (?, ?, ?, ?)');

    // Exécutez la requête avec les valeurs
    $stmt->execute([$nom, $poids, $taille, $pays]);

    // Vérifiez si l'insertion a réussi
    if ($stmt) {
        echo "Lutteur ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout du lutteur.";
    }


