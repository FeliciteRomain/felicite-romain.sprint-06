<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vap Factory</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link href="favicon.ico" rel="icon" type="image/x-icon" />
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <div class="mx-5 px-0 container">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#toggleMoblieMenu"
          aria-controls="toggleMoblieMenu"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"> </span>
        </button>
        <div class="collapse navbar-collapse" id="toggleMoblieMenu">
          <ul class="navbar-nav">
          <li id="pre"><a class="navbar-brand" href="index.php">Accueil</a></li>
          <li><a class="nav-link" href="stock.php">Stock</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="mx-5 mt-5 py-3">
      <table class="table table-bordered table-hover table-borderless">
        <tr>
          <th >ID</th>
          <th >Référence</th>
          <th >Article</th>
          <th >Description</th>
          <th >Prix d'achat</th>
          <th >Prix de vente</th>
          <th >Quantité</th>
        </tr>

        <tr>
          <?php
            try {
              $user = "root";
              $pass = "";
              $bdd = new PDO('mysql:host=localhost;dbname=vap factory', $user, $pass);
              $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          }
          
            $requete = $bdd->prepare("SELECT * from produits"); $requete->execute(); $row
            = $requete->fetchAll(); for($i=0;$i<=sizeof($row)-1;$i++){
            foreach($row[$i] as $article => $value) { if (!is_int($article) ) { ?>

            <td><?php echo $value;?></td>
          <?php } } ?>
        </tr>
        <?php } ?>
      </table>
      <?php  
      ?>
    </div>

    <button
          type="button"
          class="btn btn-outline-primary btn-lg mb-2 mx-5 mt-5 py-3">
          <a class="nav-link" href="ajout.php">Ajouter</a></button>

          <button
          type="button"
          class="btn btn-outline-primary btn-lg mb-2 mx-5 mt-5 py-3">
          </a class="nav-link" <?php include'delete.php';?>> Supprimer </button>
          
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous">
    </script>
  </body>
</html>



