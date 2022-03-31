 <!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style/nav_bar.css?t="> 
    <title>Vap Factory</title>
  </head>
  
  <body>
    <div>
      <form  method="POST">
        <label>
          <p>Référence du produit</p>
          <input type="text" placeholder="Réf" name="reference" />
        </label>
        <button id="sub" type="submit"  name="submit">Supprimer</button>
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
        $servername="localhost";
        $dbname="vap factory";
        $conn = new mysqli($servername, $user, $pass, $dbname);
        if (empty($_POST['reference'])){
            } else {
          $reference=$_POST['reference'];
        }
        $sql = "DELETE FROM `produits` WHERE reference = '$reference'";
        $conn->close();      
  ?>
  </body>
</html>
