<?php
   
    include ("../Database/connect.php");

    // Exécutez une requête SQL pour récupérer les données
    $query = $pdo->query('SELECT * FROM lutteurs');

    // Convertissez les résultats de la requête en tableau associatif
    $lutteurs = $query->fetchAll(PDO::FETCH_ASSOC);

    // Encodez le tableau associatif en format JSON
    $json = json_encode($lutteurs);

    // Envoyez le JSON au client
    echo $json;

  