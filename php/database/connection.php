<?php

  $servername = "172.16.15.129";
  $databasename = "db_level2_opdr1";
  $username = "Michel";
  $password = "";
  $table = "eindopdracht";

  $conn = new mysqli($servername, $username, $password, $databasename);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

?>
