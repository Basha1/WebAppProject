<?php
include('nav.php');
include('bbc/bbcApicall.php');
include('savedLinks.php');
   
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

          <strong><span class="glyphicon glyphicon-dashboard"></span>News Stroy</strong>


          <hr>

          <div class="row">
            <div class="col-md-6">
              <div class="well">Saved Links <span class="badge pull-right">Echo saved links</span></div>



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
                  
                      

if (isset($_POST['submit']))
  {
  $savedUrl = $url; 
    file_put_contents('filename.json', json_encode($savedUrl));


   
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
