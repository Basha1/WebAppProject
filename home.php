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


					<div class="panel panel-default">
						<div class="panel-heading">Group Chat using Angeler.js</div>
						<div class="panel-body">
						<!-- ---------------------Chat---------------------------->
						  <div class="form-control chat-container" ng-controller="BasicController as chat">

        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <!-- Chat Messages -->
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <div class="chat-messages">
            <div class="chat-header">
                <div class="angularjs-chat-logo"></div>
							
            </div>
            <div ng-repeat="message in chat.messages">
                <div class="sent-message-{{ message.self }}">
                    <span class="username">{{ message.user.name }}:</span>
                    {{ message.data }}
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <!-- User Input -->
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <form ng-submit="chat.send()" class="chat-input">
            <input type="text" ng-model="chat.textbox" autofocus>
            <input type="submit" class="btn btn-primary send-icon" value=" ">
            <input type="submit" value=" "
                class="sent-indicator {{ chat.status }}">
        </form>

    </div>

						
						
						
						
						
						
						
						
						</div>
					</div>
					<!--/panel-->

				</div>
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">Who are we ?</div>
						<div class="panel-body">
							<p>bla bla bla </p>
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