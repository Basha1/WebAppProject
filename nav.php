<?php
session_start();
include_once 'dbconnect.php';
if (!isset($_SESSION['userSession'])) {
 header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Welcome
    </title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

  </head>

  <body>
    <div id="top-nav" class="navbar navbar-inverse navbar-static-top">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    	<span class="icon-toggle"></span>
  	</button>
        <a class="navbar-brand" href="home.php">Dashboard</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav pull-right">

          <li class="dropdown">
            <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
              <strong> <?php echo $userRow['username']; ?></strong> <span class="caret"></span></a>
            <ul id="g-account-menu" class="dropdown-menu" role="menu">
              <li><a href="#">My Profile</a></li>
            </ul>
          </li>

          <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
        </ul>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3">

          <strong>Quick Links</strong>
          <hr>
          <ul class="nav nav-pills nav-stacked">
            <li class="nav-header"></li>
            <li class="active"><a href="http://bootply.com" title="The Bootstrap Playground" target="ext">Home</a></li>
            <li><a href="Twitter.php">Twitter</a></li>
            <li class="divider"></li>
            <li><a href="/Reddit.php" title="Bootstrap 3 Panel">Reddit</a></li>
            <li><a href="/61521" title="Bootstrap 3 Icons">BBC Nws</a></li>
            <li><a href="/61523" title="Bootstrap 3 ListGroup">List Groups</a></li>
            <li><a href="#">GitHub</a></li>

          </ul>
        </div>