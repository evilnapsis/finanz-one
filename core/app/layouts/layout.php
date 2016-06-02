<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>.: Finanz-One - Evilnapsis :.</title>
    <link href="res/bootstrap/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="res/font-awesome/css/font-awesome.min.css">
    <script src="res/js/jquery.min.js"></script>
<script src="res/plugins/morris/raphael-min.js"></script>
<script src="res/plugins/morris/morris.js"></script>
  <link rel="stylesheet" href="res/plugins/morris/morris.css">
  <link rel="stylesheet" href="res/plugins/morris/example.css">

  </head>

  <body>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./">FINANZ ONE</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="./">INICIO</a></li>
        <li><a href="./?view=ins&opt=all">ENTRADAS</a></li>
        <li><a href="./?view=outs&opt=all">SALIDAS</a></li>
        <li><a href="./?vview=help">AYUDA</a></li>
      </ul>
    </div>
  </div>
</nav>


<?php 
  View::load("index");
?>
<script src="res/bootstrap/js/bootstrap.min.js"></script>


  </body>
</html>
