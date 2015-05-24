
<?php $tip = 'php is added using pipes'; ?>
<?php include 'data/local.php'; ?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="Template - NodeJS Openshift Setup">
    <meta name="author" content="Alan J. Fitzpatrick">
    <title><?=$app_title_page;?> | <?=$app_title_name;?></title>
    <link rel="icon" href="/images/favicon/api.ico">
    <link rel="canonical" href="#">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="/stylesheets/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/stylesheets/qunit/qunit.css">
    <link rel="stylesheet" href="/stylesheets/style.css">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" class="navbar-toggle collapsed"></button><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span><a href="#" class="navbar-brand"><?=$app_title_page;?> | <?=$app_title_name;?></a><img src="<?php echo htmlspecialchars($app_title_logo, ENT_QUOTES, 'UTF-8'); ?>" class="logo-image">
        </div>
        <div id="#navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <h1><?=$app_title_page;?> | <?=$app_title_name;?></h1><br><br>
    <h2>404</h2>
    <p>The page you are looking for does not exist </p>
    <footer>
      <p>&copy; 2015 - Created By Alan J. Fitzpatrick, All Rights Reserved.</p>
    </footer>
    <script src="/javascripts/jquery/jquery.js"></script>
    <script src="/javascripts/angular/angular.js"></script>
    <script src="/javascripts/bootstrap/bootstrap.js"></script>
    <script src="/javascripts/qunit/qunit.js"></script>
  </body>
</html>