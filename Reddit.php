<?php
include('nav.php');
include('redditApi.php');

?>
    
        <div class="col-md-9">
          <!-- Right -->

          <strong><span class="glyphicon glyphicon-dashboard"></span> Reddit Search</strong>


          <hr>

          <div class="row">
            <div class="col-md-6">
              <div class="well">Saved Links <span class="badge pull-right">Echo saved links</span></div>



                 <!-- output from RedditApi.php-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="Sub-Title">Top Post in /r/<?php echo $formvalue;?></h3></div>
                <p><?php echo $title;?><p>
                <?php echo $div;?>
                <p class="errorDiv">
                  <?php echo $divEror;?>
                </p>
              

                <hr>     
                <a class="btn btn-primary btn-lg " href="<?php echo $url;?>" role="button">View Source</a>
                <a class="btn btn-primary btn-lg" href="http://www.reddit.com<?php echo $comment_link;?>" role="button">View Comments</a>



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
                  <h3 class = "glyphicon glyphicon-comment" ><?php echo $num_comments;?></h3><hr>
                  <h3 class = "glyphicon glyphicon-thumbs-up" ><?php echo $ups;?></h3><hr>
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