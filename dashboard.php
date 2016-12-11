<!DOCTYPE html>
<?php 

//include nav bar from the nav.php file 
include('nav.php');
include('redditApi.php');




?>
<html>
<body>
<div class="container">
  
  <h3 class = "Sub-Title">Top Post in /r/<?php echo $formvalue;?></h3>
 <div class="col-xs-4"> 
<div class="card card-inverse card-success comment-card">
 <div class="card comment-card">   
   <img class = "commentImg" src="imgs/comment.png">
  <div class="card-block">
    <h3 class =  "commentNum" ><?php echo $num_comments;?></h3>
   

   </div>
   
</div>
   </div>
      </div>
   <div class="col-xs-4"> 
<div class="card card-inverse card-success ups-card">
 <div class="card ups-card"> 
   <img class = "commentImg" src="imgs/up.png">  
  <div class="card-block">
   <h3 class =  "commentNum" ><?php echo $ups;?></h3>
 

   </div>
   
</div>
   </div>
      </div>
   <div class="col-xs-4"> 
<div class="card card-inverse card-success user-card">
 <div class="card user-card">
  <img class = "commentImg" src="imgs/user.png">   
  <div class="card-block">
  

      <h3 class =  "commentNum" ><?php echo $author;?></h3>

   </div>
   
</div>
   </div>
      </div>
  <div class="row">
    <div class="col-xs-3 offset-xs-6">
     <form action="dashboard.php" method="POST">
<input class = "form-control" type="text" name="input_value">
<input type="submit" name="submit" onClick="clearform()" id = "">
</form>
    </div>
  </div>
 <div class="jumbotron">
  <h3 class="display-3"><?php echo $title?></h3>
   <hr>
   <?php echo $div;?>
   <p class = "errorDiv"><?php echo $divEror;?></p>
  
  
  <hr>
    <a class="btn btn-primary btn-lg " href="<?php echo $url;?>" role="button">View Source</a>
  <a class="btn btn-primary btn-lg" href="http://www.reddit.com<?php echo $comment_link;?>" role="button">View Comments</a>
   </div>
  

  </div>
  <?php 
  include('footer.php');
  ?>
</body>
</html>