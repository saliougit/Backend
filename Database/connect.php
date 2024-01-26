<?php
    $servername = "localhost";
    $username = "adminLutteur";
    $password = "P@sser123";
    $dbname = "gestionLutteurs";

    

    // Création de la connexion
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);



    // // // Vérification de la connexion
    // // if ($conn->connect_error) {
    // //     die("Connection failed: " . $conn->connect_error);
        
    // // }else {
    // //     echo("Connection etablie");
    // // }

    // try {
    //     // $pdo = new PDO('mysql:host=localhost;dbname=gestionLutteurs', 'adminLutteur', 'P@sser123');
    //     echo "Connection établie";
    // } catch (PDOException $e) {
    //     die("Connection failed: " . $e->getMessage());
    // }
