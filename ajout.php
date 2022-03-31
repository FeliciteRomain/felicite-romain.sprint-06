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
      <h1>Ajouter un nouveau produit</h1>
      <form  method="POST">
        <label>
          <p>Reference du produit</p>
          <input type="text" placeholder="N°" name="reference" />
        </label>
        <label>
          <p>Nom de l'article</p>
          <input type="text" placeholder="Nom" name="nom" />
        </label>
        <label>
          <p>Description de l'article</p>
          <input type="text" placeholder="Description" name="description"  />
        </label>
        <label>
          <p>Prix d'achat unitaire</p>
          <input type="text" placeholder="Prix" name="prix" />
        </label>

        <label>
          <p>Prix de vente unitaire</p>
          <input type="text" placeholder="Prix" name="vente_unitaire"  />
        </label>
        <label>
          <p>Quantité disponible</p>
          <input type="text" placeholder="Quantité "name="quantite"  />
        </label>
        <button id="sub" type="submit"  name="submit">Enregistrer</button>
      </form>
      
    </div>
              
      <?php
      try {
        $user = "root";
        $pass = "";
        $bdd = new PDO('mysql:host=localhost;dbname=vap factory', $user, $pass);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 

      $reference="";
      $nom="";
      $description="";
      $prix="";
      $vente="";
      $stock="";

      if (empty($_POST['reference'])){
           } else {
        $reference=$_POST['reference'];
      }
      
      if (empty($_POST['nom'])){
           } else {
        $nom=$_POST['nom'];
      }
      
      if (empty($_POST['description'])){
           } else {
        $description=$_POST['description'];
      }
      
      if (empty($_POST['prix'])){
           } else {
        $prix=(int)$_POST['prix'];
      }
      
      if (empty($_POST['vente_unitaire'])){
           } else {
        $vente_unitaire=(int)$_POST['vente_unitaire']; 
      }
      
      if (empty($_POST['quantite'])){
           } else {
        $quantite=(int)$_POST['quantite'];
      }     

      $sql = "INSERT INTO `produits`( `Référence`, `Nom`, `Description`, `Prix_achat`, `Prix_vente`, `Stock`) VALUES ('$reference','$nom','$description','$prix','$vente_unitaire','$quantite')";
      $servername="localhost";
      $dbname="vap factory";
      $conn = mysqli_connect($servername, $user, $pass, $dbname);
      mysqli_close($conn);
      ?>

  </body>
</html>
