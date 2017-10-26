<?php
	
	function show_login() {

		?>

		<div class="top-content">
            <div class="inner-bg" style="padding : 0px;">
                <div class="container">
                    
                    <div class="row col-md-offset-1 ">
                        <div class="col-sm-5">
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Login to our site</h3>
                                        <p>Enter username and password to log on:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="" method="post" class="login-form">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-username">Username</label>
                                            <input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-password">Password</label>
                                            <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                                        </div>
                                        <button type="submit" class="btn">Login</button>
                                    </form>
                                </div>
                            </div>
                            <div class="social-login">
                                <h3>...or login with:</h3>
                                <div class="social-login-buttons">
                                    <a class="btn btn-link-1 btn-link-1-facebook" href="#">
                                        <i class="fa fa-facebook"></i>
                                        Facebook
                                    
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1 middle-border" style="max-width: 30px"></div>
                        <div class="col-sm-1" style="max-width: 30px;"></div>
                        <div class="col-sm-5">
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Hurry up! Register now</h3>
                                        <p>Fill in the form below to sign up:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-tag"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="" method="post" class="registration-form">
                                        <div class="form-group">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="sr-only" for="form-email">First Name</label>
                                            <input type="text" name="form-email" placeholder="First Name..." class="form-email form-control" id="form-f-name">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="sr-only" for="form-email">Last Name</label>
                                            <input type="text" name="form-email" placeholder="Last Name..." class="form-email form-control" id="form-l-name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-username">Email</label>
                                            <input type="text" name="form-username" placeholder="Email..." class="form-username form-control" id="form-username-register">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-password">Password</label>
                                            <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password-register">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-confirm-password">Confirm Password</label>
                                            <input type="password" name="form-confirm-password" placeholder="Confirm Password..." class="form-about-yourself form-control" id="form-confirm-password-register">
                                        </div>
                                        <button type="submit" class="btn">Sign me up!</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

		<?php
	}
?>