<!doctype html>
<html lang="en">

<head>
    <title>Login Page - Layout</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/flip.css" />
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <button type="button" class="btn btn-warning btn-md open-login" data-toggle="login-modal" data-target="#myModal">Login</button>
    <!-- Modal -->
    <div id="myModal" class="login-modal fade" role="dialog">
        <div class="modal-dialog ">
            <!-- Modal content-->
            <div class="modal-content blur-background">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
					<div class="flipButton shadow animate">Create New Account</div>
					<div class="flip-container" >
						<div class="flipper"> 
							<div class="front">
								<form class="form-horizontal custom-form">
									<div class="profile-image">
									<img src="images/mark1.jpg" alt="profile-image" class="img-responsive img-circle img-thumbnail" />
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<div class="input-group">
												<span class="input-group-addon custom-input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
												<input type="text" class="form-control custom-input" id="username" placeholder="USERNAME" autocomplete="off">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<div class="input-group">
												<span class="input-group-addon custom-input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
												<input type="password" class="form-control custom-input" id="password" placeholder="PASSWORD">
											</div>
										</div>
									</div>
									<div class="row">
										<!--div class="col-sm-6 col-xs-12 text-left">
											<div class="checkbox">
												<label><input type="checkbox" value="">Remember Me</label>
											</div>
										</div-->
										<div class="col-md-12 col-xs-12 text-center">
											<button type="button" class="btn btn-warning custom-sign-in-button">SIGN IN</button>
										</div>
									</div>
								</form>
							</div>

							<div class="back">
								<div class="col-md-6 col-xs-6 text-center">
									<img src="images/doctor.jpg" alt="profile-image" class="img-responsive img-circle img-thumbnail" />
								</div>
								<div class="col-md-6 col-xs-6 text-center">
								<img src="images/patient.png" alt="profile-image" class="img-responsive img-circle img-thumbnail" />
								</div>
								<div class="col-md-12 col-xs-12 text-center">
								<img src="images/Pathology.png" alt="profile-image" class="img-responsive img-circle img-thumbnail" />
								</div>
							</div>
						</div>
					</div>
                <div class="modal-footer remove-top-border">
                    <div class="row">
                        <div class="col-sm-12 text-center custom-color-footer">
                            &copy; 2014 Login Animated Form. All rights reserved | Template by <a href="#" class="custom-color"><strong>W3layouts</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	    <script  src="js/flip.js"></script>

</body>

</html>