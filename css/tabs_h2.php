<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
  header("Location: HomePage.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<html>
 <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.vertical-tabs.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

<body>

 <nav class="grey" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
        <li><a href = "#">Link 2</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="col-xs-1"> <!-- required for floating -->
          <!-- Nav tabs -->
          <ul class="nav nav-tabs tabs-left">
            <li class="active"><a href="#home" data-toggle="tab">q1</a></li>
            <li><a href="#profile" data-toggle="tab">q2</a></li>
            <li><a href="#messages" data-toggle="tab">q3</a></li>
            <li><a href="#settings" data-toggle="tab">contact</a></li>
          </ul>
        </div>

        <div class="col-xs-11">
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="home"><iframe width="100%" height="100%" id="iframe_id" name="iframe_name" src="question.php" scrolling="yes" frameborder="0" ALLOWTRANSPARENCY="true" onload=resize_iframe();></iframe></div>
            <div class="tab-pane" id="profile">Profile Tab.</div>
            <div class="tab-pane" id="messages">Messages Tab.</div>
            <div class="tab-pane" id="settings">Settings Tab.</div>
          </div>
        </div>

        <div class="clearfix"></div>

      </div>

<div>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
 <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src = "JS/1.js"> </script>
</body>
</html>

