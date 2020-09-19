			<footer>
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
					<a class="navbar-brand" href="">CI-project</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link" href="<?php echo base_url(); ?>home">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo base_url();?>about">About</a>
							</li>
							<li class="nav-item dropup">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Drop
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="<?php echo base_url(); ?>news">News</a>
									<a class="dropdown-item" href="#">Another action</a>
								</div>
							</li>
						</ul>
						<a id="login-button-view" href='<?php echo base_url()?>login' class="btn btn-outline-primary my-2 my-sm-0">Login</a>
						<a id="register-button-view" href='<?php echo base_url()?>register' class="btn btn-outline-primary my-2 my-sm-0 ml-2">Register</a>
					</div>
				</nav>
			</footer>
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
				integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
			</script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
				integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
			</script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
				integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
			</script>
		</body>
			<script src="<?php echo base_url() ?>assets/javascript/timer.js"></script>
		</html>
