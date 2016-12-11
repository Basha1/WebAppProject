<?php 
include('nav.php');
include('recentAccounts.php');





?>

		<div class="col-md-9">
			<!-- Right -->

			<a href="#"><strong><span class="glyphicon glyphicon-dashboard"></span> My Dashboard</strong></a>


			<hr>

			<div class="row">
				<div class="col-md-6">
					<div class="well">Saved Links <span class="badge pull-right">Echo saved links</span></div>




					<div class="panel panel-default">
						<div class="panel-heading">Recent Accounts made</div>
						<table class="table table-striped">
							<thead>
								<?php
								//calling from recentAccounts.php  to display the latest accounts made 
								if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
								?><p><?php echo $row["username"]." ";?></p><?php
      
    }
} else {
    echo "0 results";
}
								
							
								?> 
						</table>
					</div>
					<!--/panel-->
<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <link rel="stylesheet" href="style.css">
    <link rel="apple-touch-icon-precomposed" href="/media/angularjs-chat.png">
    <link rel="shortcut icon" href="/media/angularjs-chat.png">

   <script src="node_modules/angular-chat/node_modules/angular/angular.js"></script>
    <script src="node_modules/angular-chat"></script>
    <script src="node_modules/angular-chat/names.js"></script>
    <script src="node_modules/angular-chat/app.js"></script>

					<div class="panel panel-default">
						<div class="panel-heading">Group Chat using Angeler.js</div>
						<div class="panel-body">
						<!-- ---------------------Chat---------------------------->
						<?php include('index.html');?>
						
						
						
						
						
						
						
						
						</div>
					</div>
					<!--/panel-->

				</div>
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">Who are we ?</div>
						<div class="panel-body">
							<p>bunch of virgins </p>
							<br><br>

						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">
								<i class="glyphicon glyphicon-chevron-up chevron"></i>
								<i class="glyphicon glyphicon-wrench pull-right"></i> Reddit search
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
							<div class="panel-title">Engagement</div>
						</div>
						<div class="panel-body pull-center">

							<img src="http://placehold.it/90X90/CC2222/FFF" class="img-circle">

							<img src="http://placehold.it/90X90/11CC22/FFF" class="img-circle">

							<img src="http://placehold.it/90X90/EEEEEE/222" class="img-circle">

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



<!-- /.modal -->
<?php 
include('footer.php');

?>