<?php include "php/functions.php";?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="card-header" >
      <p class="text-center">Overzicht personen</p>
    </div>
    <div class="mt-3">
      <div>
        <div class="row">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-12">
                  <div class="card">
                    <?php
                      echo "<table class=\"table table-striped\">";
                        echo "<tr>";
                          echo "<th scope=\"col\"> ID </td>";
                          echo "<th scope=\"col\"> Voornaam </td>";
                          echo "<th scope=\"col\"> Achternaam </td>";
                          echo "<th scope=\"col\"> Geboortedatum </td>";
                          echo "<th scope=\"col\"> Leeftijd in jaren </td>";
                          echo "<th scope=\"col\"> Leeftijd in maanden</td>";
                          echo "<th scope=\"col\"> Leeftijd in dagen </td>";
                          echo "<th scope=\"col\"> Acties </td>";
                        echo "</tr>";
                        foreach ($data as $value) {
                          echo "<tr>";
                            echo "<td>". $value["ID"] ."</td>".PHP_EOL;
                            echo "<td>". $value["Voornaam"] ."</td>".PHP_EOL;
                            echo "<td>". $value["Achternaam"] ."</td>".PHP_EOL;
                            echo "<td>". $value["Geboortedatum"] ."</td>".PHP_EOL;
                            echo "<td>". berekenLeeftijd($value['Geboortedatum'], 'jaren') ."</td>".PHP_EOL;
                            echo "<td>". berekenLeeftijd($value['Geboortedatum'], 'maanden') ."</td>".PHP_EOL;
                            echo "<td>". berekenLeeftijd($value['Geboortedatum'], 'dagen') ."</td>".PHP_EOL;
                            echo "<td>";
                              echo "<form method=\"post\" action=\"update.php\"><button class=\"btn btn-warning btn-block\"name=\"aanpassen\" type=\"submit\" value=\"".$value['ID']."\">Aanpassen van ID ".$value['ID']."</button></form>".PHP_EOL;
                              echo "<form method=\"post\"><button class=\"btn btn-danger btn-block\" name=\"verwijder\" type=\"submit\" value=\"".$value['ID']."\">verwijder ID ".$value['ID']."</button></form>".PHP_EOL;
                            echo "</td>".PHP_EOL;
                          echo "</tr>".PHP_EOL;
                        }
                      echo "</table>";
                     ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-5">
          <div class="row">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-2">
                  <div class="form-group">
                    <form method="post">
                      <div class="form-group">
                        <label for="voornaam">Voornaam</label><br>
                        <input type="text" name="voornaam" />
                      </div>
                      <div class="form-group">
                        <label for="achternaam">Achternaam</label><br>
                        <input type="text" name="achternaam"/>
                      </div>
                      <div class="form-group">
                        <label for="geboortedatum">Geboortedatum</label><br>
                        <input type="text" name="geboortedatum" value="dd-mm-yyyy" />
                      </div>
                      <div class="form-group">
                        <input type="submit" name="aanmaken" value="aanmaken" class="btn btn-primary">
                     </div>
                   </form>
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
