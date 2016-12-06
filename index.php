<?php include "library/twitteroauth.php"; ?>

<?php
$consumer = "uPLkXrURWiWmNw34r6XrDkO3H";
$consumersecret = "ZEet9hmyVjwUvfwmjuhV7Bcbmoi0HGowKQBEcsx0SINRLXHQrW";
$accestoken = "804798848925319168-X74yBAHBeYFcAhNdRDBUj2PLi32IzV2";
$accestokensecret = "gLY3ze8itfapdDJRK7TWfUeg1wFq6xUDQ3R567jmLbkG8";

$twitter = new TwitterOAuth($consumer,$consumersecret,$accestoken, $accestokensecret);

?>  

<html>
  <head>
    <meta charset="UTF-8" />
    <title>Trendzzy</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  </head>
  <body>
    <div class="main" >
      <div id= "search">
        

    <h1> Search popular #hashtags  from twitter </h1>
    <form action="" method="post">
      <label>Search:<input type="text" name="keyword"/></label>
    </form>
              </div>
    
   
      <div id= "main-con">
    <?php
    
    if( isset($_POST['keyword'])){
      $tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q='.$_POST['keyword'].'&result_type=popular&count=20');
      foreach($tweets->statuses as $key => $tweet){
        echo '<img src="'.$tweet->user->profile_image_url.'"/>' .$tweet->text.'<br>.';
      }
    }
    ?>
           </div>
<footer>
  <div class="Footer">
  <p>
    &copy; 2015 | <a href="https://github.com/Basha1">M.Basha</a> 
    </p> 
  </div>
</footer>
    </div>
  </body>
</html>