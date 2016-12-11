<?php
include('nav.php');
include('bbc/bbcApicall.php');

   
    $ch = curl_init($urlToImage);
$fp = fopen('bbc/imgs/bbcImg.jpg', 'wb');
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_exec($ch);
curl_close($ch);
fclose($fp);

/* getting the current url so when we are outputting the url we are not stuck to a static url eg: if we change domain name the link will 
stay updated
*/
$domainUrl = $_SERVER['SERVER_NAME'];



?>
    
        <div class="col-md-9">
          <!-- Right -->

          <strong><span class="glyphicon glyphicon-dashboard"></span>News Story</strong>


          <hr>

          <div class="row">
            <div class="col-md-6">
              <div class="well">Latest link saved by users <span class="pull-right jsonLink"><a href= "data.json">view saved link in json file</a></span></div>



                 <!-- output from bbc.php-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h2 class="Sub-Title">Top News Stroy: <h3 class = "center-text"><?php echo $title;?></h3></h2></div>
            
               <img class = "img-responsive" src= "http://<?php echo $domainUrl;?>/bbc/imgs/bbcImg.jpg">
           
              

                <hr>     
                <a class="btn btn-primary btn-lg center-block " href="<?php echo $url;?>" role="button">View Source</a>
                



              </div>
              <!--/panel-->


              
              <!--/panel-->

            </div>
            
              <div class = "col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="panel-title">
                    <i class="glyphicon glyphicon-search"></i>
                     Reddit search
                  </div>
                </div>
                <div class="panel-body">

                  <form class="form form-vertical" action="Reddit.php" method="POST">

                    <div class="control-group">
                      <label>Enter a subreddit</label>
                      <div class="controls">
                        <input type="text" class="form-control" placeholder="Enter Name" name="input_value">
                      </div>
                    </div>



                    <div class="control-group">
                      <label></label>
                      <div class="controls">
                        <input type="submit" class="btn btn-primary" name="submit" onClick="clearform()" id=""> Post
                        </input>
                      </div>
                    </div>

                  </form>


                </div>
                <!--/panel content-->
              </div>
              <!--/panel-->

              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="panel-title">Stats from thread</div>
                </div>
                <div class="panel-body pull-center">

                 <h3 class = "glyphicon glyphicon-user" ><?php echo $author;?></h3><hr>
                   <form class="form form-vertical" action="" method="POST">

                    <div class="control-group">
                      <label></label>
                      <div class="controls">
                        <input type="submit" class="btn btn-primary" name="submit" onClick="clearform()" id=""> Save the link
                        </input>
         
              <?php
                  
                      
/* 
Save image button
Will save the url to a json file
set file permishions to 777
*/ 
                      //used this thread to help me with the json arrays http://stackoverflow.com/questions/6739871/how-to-create-an-array-for-json-using-php
if (isset($_POST['submit']))
  {
  $savedUrl = $url; 
    
    $json = file_get_contents('data.json');
    $json_data = json_decode($json,true);
 
 $newar = [
  
    [
        "user" => $userRow['username'],
        "link" => $savedUrl
        
    ]
];


//saving data in Players object...


$json = json_encode($newar);

file_put_contents('data.json', $json);

   
  }
                      ?>
                 

                </div>
              </div>
              


            </div>
            <!--/col-span-6-->

          </div>
          <!--/row-->
        </div>
        <!--/col-span-9-->
      </div>
    </div>
    <!-- /Main -->



    
<?php 
include('footer.php');

?>
