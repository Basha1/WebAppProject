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
            
               <img class = "img-responsive" src= "http://webappproject-amysiggins10670911.codeanyapp.com/bbc/imgs/bbcImg.jpg">
           
              

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
                   <a class="btn btn-primary btn-lg" action = "savedLinks.php" role="button">Save link</a>
         

                 

                </div>
              </div>
              <!--/panel-->


              <i class="icon-bar-chart icon-3x"></i>
              <i class="icon-plus icon-3x"></i>
              <i class="icon-facebook icon-3x"></i>
              <i class="icon-beaker icon-3x"></i>
              <i class="icon-twitter icon-3x"></i>


            </div>
            <!--/col-span-6-->

          </div>
          <!--/row-->
        </div>
        <!--/col-span-9-->
      </div>
    </div>
    <!-- /Main -->



    <div class="modal" id="addWidgetModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Add Widget</h4>
          </div>
          <div class="modal-body">
            <p>Add a widget stuff here..</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
            <a href="#" class="btn btn-primary">Save changes</a>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dalog -->
    </div>
    <!-- /.modal -->
<?php 
include('footer.php');

?>
