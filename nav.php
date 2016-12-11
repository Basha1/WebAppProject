<!--  This bit of php gets the users session and includes the file dbconnect-->

<?php
session_start();
include_once 'dbconnect.php';
if (!isset($_SESSION['userSession'])) {
 header("Location: index.php");
}
//setting a var to query and telling it to get the username from the database and setting the username to the session 
$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>
<!--  Nav bar and scripts-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Welcome
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
                              <!-- ANGELR CHAT SOURCES -->
   <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="apple-touch-icon-precomposed" href="/media/angularjs-chat.png">
    <link rel="shortcut icon" href="/media/angularjs-chat.png">
   <script src="angular-chat/node_modules/angular/angular.js"></script>
    <script src="angular-chat/angular-chat.js"></script>
    <script src="angular-chat/names.js"></script>
    <script src="angular-chat/app.js"></script>
  </head>

  <body>
<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="sr-only">Toggle navigation</span>
      </button>
      <a class="navbar-brand" href="#">Dashboard</a>
    </div>

    <div class="collapse navbar-collapse" id="navigation">
      <ul class="nav navbar-nav pull-right">
        <li><a href="#"><strong> <?php echo $userRow['username']; ?></strong></a></li>
        <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
      <div class="row">
        <div class="col-md-3">


          
          <strong>Quick Links</strong>
          <hr>
          <ul class="nav nav-pills nav-stacked">
            <li class="nav-header"></li>
            <li class="active"><a href="/home.php">Home</a></li>
            <li class="active" ><a href="/Twitter.php" >Twitter</a></li>
            <li class="active"><a  href="/Reddit.php" >Reddit</a></li>
            <li class="active"><a  href="/bbc.php" >BBC Nws</a></li>
            <li class="active"><a href="https://github.com/Basha1/WebAppProject/" target="ext">GitHub</a></li>
            

          </ul>
        </div>