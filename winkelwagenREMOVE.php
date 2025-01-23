<?php

require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $query = "SELECT * FROM Winkelwagentje WHERE Naam = :Naam";

    $Naam = $_POST['Naam'];
    $stmt = $conn->prepare($query);
    $stmt->execute([
        'Naam' => $Naam,
    ]);

    $resultatenNummer = $stmt->fetchAll();
    $aantalRijenNummer = count($resultatenNummer);

    if ($aantalRijenNummer !== 0) {
        // Maak een toevoeg-query zonder kolommen
        $query = "DELETE FROM Winkelwagentje WHERE Naam = :Naam";
        // Voorbereiding van het statement
        $stmt = $conn->prepare($query);

        // Bind de waardes aan de placeholders en voer de query uit
        $stmt->execute([
            'Naam' => $Naam,
        ]);
    }
}
header('Location: ' . $_SERVER['HTTP_REFERER']); exit;