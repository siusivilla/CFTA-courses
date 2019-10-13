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
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h2 class="card-title">Profilo</h2>
					</div>
					<div class="card-body">
						<form action="function/update_user.php">
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" placeholder="<?php echo $_SESSION['email']; ?>">
								</div>
								<div class="form-group col-md-6">
									<label for="password">Password</label>
									<input type="password" class="form-control" id="password" placeholder="<?php echo $_SESSION['password']; ?>">
								</div>
								
							</div>
							<!-- Azioni -->
							<div class="form-row justify-content-center mt-3">
								<div class="form-group">
									<button type="submit" class="btn btn-danger btn-fill ml-2" name="delete_button" value="Delete">Elimina</button>
									<button type="submit" class="btn btn-primary btn-fill" name="update_button" value="Update">Aggiorna</button>
								</div>
							</div>
							<div class="clearfix"></div>
						</form>
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