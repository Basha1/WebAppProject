<?php
require('loginSession.php');
?>
<head>
  <meta charset="UTF-8" />
  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Coding Cage - Login & Registration System</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
  <link rel="stylesheet" href="particleground/source/css/style.css" />
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <script type='text/javascript' src='particleground/jquery.particleground.js'></script>
  <script type='text/javascript' src='particleground/source/js/particleConfig.js'></script>
</head>

<body>

<div id="particles">
  <div id="intro">
   <div class="signin-form">

 <div class="container">
     
        
       <form class="form-signin" method="post" id="login-form">
      
        <h2 class="form-signin-heading">Sign In.</h2><hr />
        
       <?php
  if(isset($msg)){
   echo $msg;
  }
  ?>
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="email" required />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required />
        </div>
       
      <hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
      <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
   </button> 
            
            <a href="register.php" class="btn btn-default" style="float:right;">Sign Up Here</a>
            
        </div>  
        
        
      
      </form>

    </div>
    
</div>
  </div>
</div>


</body>
