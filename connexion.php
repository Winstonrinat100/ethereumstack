<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MON COMPTE</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><b>ETHEREUM STACK</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="http://localhost/eth/index.html#">ACCEUIL</a>
              </li>
              <!--<li class="nav-item">
                <a class="nav-link" href="">A PROPOS</a>
              </li>!-->
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/eth/invest.html#">INVESTISSEMENTS</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-primary " href="#">MON COMPTE</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <hr>


<?php
$connexion=mysqli_connect("localhost","root","", "ether") or die("Error:" .mysql_connect_error($connexion));
if ($connexion) {
    echo "";
}

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];

$result=mysqli_query($connexion,"INSERT INTO stack(nom,prenom,email,mdp) VALUES ('".$nom."','".$prenom."','".$email."','".$mdp."')");

?><br><br>


<form style="text-align: center; padding: 20px;" action="" method="get">
        <h4>Inscrit avec succ??s, connectez-vous!</h4><br>
        <h2>CONNEXION</h2><br>
        <p><input style= "width: 300px;" type="text" placeholder="Nom..." required ></p>
        <p><input style= "width: 300px;" type="password" placeholder="Mot de passe" required ></p>
        <button style= "width: 300px; background-color: blue; border: none;">SE CONNECTER</button>
      </form><br>   
</body>
<footer>
    136 Hope St, Glasgow G2 2TG | +1(706)579-5639 | <br> <a href="mailto:stackethereum@gmail.com">stackethereum@gmail.com</a> <br><br> Votre argent est assur?? par la FCA. <br>
    <br>ETHEREUM STACK 2023. Tous droits reserv??s.
</footer>
</html>