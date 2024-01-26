<?php

    include '../Database/connect.php';
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $poids = $_POST['poids'];
    $taille = $_POST['taille'];
    $pays = $_POST['pays'];

    $sql = "UPDATE lutteurs SET nom='$nom', poids='$poids', taille='$taille', pays='$pays' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Lutteur mis à jour avec succès.";
    } else {
        echo "Erreur lors de la mise à jour du lutteur: " . $conn->error;
    }

    $conn->close();
