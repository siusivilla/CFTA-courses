<?php
  include_once('../inc/config.php');
  $pageTitle ="Profilo";
  include_once('header.php');
?>
<body>

<div class="wrapper">
  <?php include_once("sidebar.php"); ?>

  <div class="main-panel">
	  <?php include_once("navbar.php"); ?>

		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Edit Profile</h4>
							</div>
						<div class="card-body">
							<form>
								<div class="row">
								<div class="col-md-5 pl-1">
											<div class="form-group">
													<label for="exampleInputEmail1">Email address</label>
													<input type="email" class="form-control" placeholder="Email">
											</div>
									</div>
									<div class="col-md-4 pr-1">
										<div class="form-group">
											<label>Company (disabled)</label>
											<input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
										</div>
									</div>
									<div class="col-md-3 px-1">
											<div class="form-group">
													<label>Username</label>
													<input type="text" class="form-control" placeholder="Username" value="michael23">
											</div>
									</div>
								</div>
								
								
								<button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
								<div class="clearfix"></div>
							</form>
						</div>
					</div>
				</div>

					<!-- badge destro -->
					<div class="col-md-4">
						<div class="card card-user">
							<div class="card-image">
							<img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
							</div>
							<div class="card-body">
								<div class="author">
									<a href="#">
											<img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="...">
											<h5 class="title">Nome Cognome</h5>
									</a>
									<p class="description">
										<?php echo $_SESSION["email"] ?>
									</p>
								</div>
								<!-- descrizione -->
								<p class="description text-center">"Descrizione personalizzata"</p>
							</div>
							<hr>
							<!-- social -->
							<div class="button-container mr-auto ml-auto">
								<button href="#" class="btn btn-simple btn-link btn-icon">
									<i class="fa fa-facebook-square"></i>
								</button>
								<button href="#" class="btn btn-simple btn-link btn-icon">
									<i class="fa fa-twitter"></i>
								</button>
								<button href="#" class="btn btn-simple btn-link btn-icon">
									<i class="fa fa-google-plus-square"></i>
								</button>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<?php include_once("footer.php"); ?>
	</div>
</div>

</body>
<?php include_once("main_script.php"); ?>
</html>
