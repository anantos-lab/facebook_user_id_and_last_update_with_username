<?php
error_reporting(0);
include 'config.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./normalize.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
    <title><?php echo $name ?></title>
  </head>
  <body>
    <h1 class="c">User Profile info</h1>
  <div class="card d">
  <img class="card-img-top img-circle" src="https://graph.facebook.com/<?php echo $id; ?>/picture?type=large" wid alt="Card image">
  <div class="card-block">
    <h4 class="card-title"><?php echo $name ?></h4>
    <p class="card-text">Id: <?php echo $id ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo 'last login '.time_ago($time). ' ago';  ?></li>
    <li class="list-group-item"><?php echo 'Date : '.date('d/m/Y H:i:s', $time); ?></li>
    <li class="list-group-item"><?php echo $uname; ?></li>
  </ul>
  <div class="card-block">
    <a href="<?php echo $url; ?>" class="card-link">Goto Profile</a>
    <a href="#" class="btn btn-primary l">share</a>
    <form method="get" action="index.php" class="form-inline">
    <div class="form-group">
      <label class="sr-only"></label>
      <div class="input-group">
        <div class="input-group-addon">Username</div>
        <input type="text" name="id" class="form-control" placeholder="zithroooo">
      </div>
    </div>
    <button type="submit" class="btn btn-primary m">Get Update Time</button>
    </form>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
  </body>
</html>
