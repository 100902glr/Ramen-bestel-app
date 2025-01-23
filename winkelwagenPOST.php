<?php

require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $query = "SELECT * FROM Winkelwagentje WHERE Naam = :Naam";

    $Naam  = $_POST['Naam'];
    $stmt = $conn->prepare($query);
    $stmt->execute([
        'Naam' => $Naam,
    ]);

    $resultatenNummer = $stmt->fetchAll();
    $aantalRijenNummer = count($resultatenNummer);

    if($aantalRijenNummer === 0){
        $Hoeveelheid = 1;
    } else {
        $Hoeveelheid = $resultatenNummer[0]["Hoeveelheid"] + 1;
    }

    $Prijs  = $_POST['Prijs'];

    if($aantalRijenNummer === 0){
        // Maak een toevoeg-query zonder kolommen
        $query = "INSERT INTO Winkelwagentje (Naam, Prijs, Hoeveelheid)
              VALUES (:Naam, :Prijs, :Hoeveelheid)";
        // Voorbereiding van het statement
        $stmt = $conn->prepare($query);

        // Bind de waardes aan de placeholders en voer de query uit
        $stmt->execute([
            'Naam' => $Naam,
            'Prijs' => $Prijs,
            'Hoeveelheid' => $Hoeveelheid
        ]);
    } else {
// Maak een toevoeg-query zonder kolommen
        $query = "UPDATE Winkelwagentje SET Hoeveelheid = :Hoeveelheid WHERE Naam = :Naam";
        // Voorbereiding van het statement
        $stmt = $conn->prepare($query);

        // Bind de waardes aan de placeholders en voer de query uit
        $stmt->execute([
            'Naam' => $Naam,
            'Hoeveelheid' => $Hoeveelheid
        ]);
    }

    }

header('Location: ' . $_SERVER['HTTP_REFERER']); exit;