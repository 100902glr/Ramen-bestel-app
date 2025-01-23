<?php
require 'config.php';

try {
    $query = "SELECT * FROM Menu";
    $stmt = $conn->prepare($query);
    $stmt->execute();

// Haal alle resultaten op in een array
    $resultaten = $stmt->fetchAll();

// Aantal resultaten tellen
    $aantalRijen = count($resultaten);

} catch (PDOException $e) {
    // Foutafhandeling als de query niet wordt uitgevoerd
    echo "<p>FOUT!</p>";
    echo "<p>Query: " . $query . "</p>";
    echo "<p>Foutmelding: " . $e->getMessage() . "</p>";
    exit;
}

try {
    $query = "SELECT * FROM Winkelwagentje";
    $stmt = $conn->prepare($query);
    $stmt->execute();

// Haal alle resultaten op in een array
    $resultatenWagentje = $stmt->fetchAll();

// Aantal resultaten tellen
    $aantalRijenWagentje = count($resultatenWagentje);

} catch (PDOException $e) {
    // Foutafhandeling als de query niet wordt uitgevoerd
    echo "<p>FOUT!</p>";
    echo "<p>Query: " . $query . "</p>";
    echo "<p>Foutmelding: " . $e->getMessage() . "</p>";
    exit;
}