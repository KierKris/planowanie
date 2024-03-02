<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="style.css">
    <title>Planowanie by Kris</title> 
</head>
<body>
<?php
$activeSite = isset($_GET['site']) ? $_GET['site'] : '';
?>  
<div class="container">
    <div class="menu-bar"> 
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <a class="navbar-brand" href="index.php">Planowanie:</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item <?php if ($activeSite == '') { echo 'active'; } ?>">
            <a class="nav-link " href="index.php">Kalkulacje</a>
            </li>
            <li class="nav-item dropdown <?php if ($activeSite == 'klienci') { echo 'active'; } ?>">
            <a class="nav-link dropdown-toggle " href="index.php?site=klienci" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Klienci</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            </div>  
          
            </li>
            <li class="nav-item  <?php if ($activeSite == 'cs') { echo 'active'; } ?>">
            <a class="nav-link " href="index.php?site=cs">CS</a>
            </li>
          </ul>
        </div>
        
      </nav>
    </div>
    <div class="component">
      <?php
      if (isset($_GET['site'])) {
          $site = $_GET['site'];
          if ($site == 'klienci') {
          echo $site;
          echo '<script src="szukaj.js"></script>';
          include 'strony/klienci.php';
        } elseif ($site == 'cs') {
            echo $site;
            include 'strony/cs.php';
          }
      } else echo "brak zmiennej";
      ?>
    </div>
</div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>