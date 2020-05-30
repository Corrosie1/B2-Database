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

  <div class="row">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Aanpassen van record <?php echo $_POST['aanpassen'] ?></div>
                    <form method="post" class="ml-4 mt-4">
                      <div class="form-group">
                        <label for="voornaam">Voornaam</label><br>
                        <input type="text" name="voornaam" value=""/>
                      </div>
                      <div class="form-group">
                        <label for="achternaam">Achternaam</label><br>
                        <input type="text" name="achternaam" value=""/>
                      </div>
                      <div class="form-group">
                        <label for="geboortedatum">Geboortedatum</label><br>
                        <input type="text" name="geboortedatum" value="dd-mm-yyyy" value=""/>
                      </div>
                      <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $_POST['aanpassen'] ?>">
                      </div>
                      <div class="form-group">
                        <input type="submit" name="doorvoeren" value="update" class="btn btn-primary">
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
