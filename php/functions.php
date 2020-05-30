<?php

  include "database/connection.php";

  $sql = "SELECT * FROM $table";
  // select statement
  $executeQuery = $conn->query($sql);
  // query richting de database wordt uitgevoerd
  $data = $executeQuery->fetch_all(MYSQLI_ASSOC);
  // data wordt opgeslagen in een associative array

  function berekenLeeftijd($geboortedatum, $soort){
    $bday = new Datetime(str_replace("-", ".", $geboortedatum));
    $today = new Datetime(date('m.d.y'));
    $diff = $today->diff($bday);

    switch ($soort) {
      case 'jaren':
        return $diff->y;
        break;
      case 'maanden':
        return $diff->m;
        break;
      default:
        return $diff->d;
        break;
    }
  };

  // ^ Bereken leeftijd

  if (isset($_POST['verwijder'])) {
    $id = $_POST['verwijder'];
    $deleteQuery = "DELETE FROM $table WHERE ID = $id";
    if ($conn->query($deleteQuery)) {
      echo "<script> window.location.href = 'index.php'</script>";
    } else {
      echo "Error updating record: " . $conn->error;
    }
  }
  // ^ verwijderen van een record

  if (isset($_POST['aanmaken'])){
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $geboortedatum = $_POST['geboortedatum'];
    $insertQuery = "INSERT INTO $table (Voornaam, Achternaam, Geboortedatum) VALUES ('$voornaam', '$achternaam', '$geboortedatum')";
    if ($conn->query($insertQuery)) {
      echo "<script> window.location.href = 'index.php'</script>";
    } else {
      echo "Error adding record: " . $conn->error;
     }
   }
   // ^ aanmaken van een record

  if (isset($_POST['doorvoeren'])){
    $id = $_POST['id'];
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $geboortedatum = $_POST['geboortedatum'];
    $updateQuery = "UPDATE $table SET Voornaam = '$voornaam', Achternaam = '$achternaam', Geboortedatum = '$geboortedatum' WHERE ID = $id";
    if ($conn->query($updateQuery)) {
      echo "<script> window.location.href = 'index.php'</script>";
    } else {
      echo "Error updating record: " . $conn->error;
      }
    }
  // ^ aanpassen van een record en doorvoeren

?>
