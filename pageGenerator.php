<?php
	
	function show_login() {

		?>

		<div class="top-content">
            <div class="inner-bg" style="padding : 0px;">
                <div class="container">
                    
                    <div class="row col-md-offset-1 ">
                        <div class="col-sm-5">
                            <div class="form-box">
                                <div class="overlay-div"></div>
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Login</h3>
                                        <p>Enter username and password to log on:</p>
                                    </div>
                                    <!-- gif_show -->
                                    <div class="form-top-right" id="sign_in_gif">

                                        <i class="fa fa-lock" id="sign_in_lock"></i>
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

                                        <button type="submit" class="btn">
                                        
                                        Login
                                    
                                    </button>
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
                                    <div class="form-top-right" id="sign_up_gif" >
                                        <i class="fa fa-tag" id="sign_up_lock"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" class="registration-form" id="sign_up_form">
                                        <div class="form-group">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="sr-only" for="form-email">First Name</label>
                                            <input type="text" name="f_name" placeholder="First Name..." class="form-email form-control" id="form-f-name" required="required">
                                                </div>
                                            </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="sr-only" for="form-email">Last Name</label>
                                            <input type="text" name="l_name" placeholder="Last Name..." class="form-email form-control" id="form-l-name" required="required">
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-username">Email</label>
                                            <input type="text" name="email" placeholder="Email..." class="form-username form-control" id="form-username-register" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-password">Password</label>
                                            <input type="password" name="pass" placeholder="Password..." class="form-password form-control" id="form-password-register" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-confirm-password">Confirm Password</label>
                                            <input type="password" name="form-confirm-password" onkeyup="check_pass()" placeholder="Confirm Password..." class="form-about-yourself form-control" id="form-confirm-password-register" required="required">
                                        </div>
                                        <button type="submit" class="btn" id="sign_up_btn">Sign me up!</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            function check_pass(){
                var x = $('#form-password-register').val();
                var y = $('#form-confirm-password-register').val();

                
                if (x != y)
                    $('#form-confirm-password-register').addClass(' failed_inp');
                else
                    $('#form-confirm-password-register').removeClass(' failed_inp');
            }

           
            $('#sign_up_form').on('submit', function(e) {
                e.preventDefault();
                var form_d = $('#sign_up_form').serializeArray();
                
                var x = $('#form-password-register').val();
                var y = $('#form-confirm-password-register').val();

                if (x != y){
                    alert ('Passwords do not match!');
                    return false;
                }

                else{
                    $.ajax({
                        type : 'POST',
                        url : 'clogs/register.php',
                        data : form_d,
                        beforeSend : function() {
                            $('#sign_up_lock').remove();
                            $('#sign_up_gif').addClass(' gif_show');
                        },
                        success : function(res) {
                            alert(res);
                            $('#sign_up_gif').removeClass(' gif_show');
                        },
                        error : function(a,b,c) {
                            alert('Could not connect to the server!');
                        }
                    })
                }
            })
        </script>
        

		<?php
	}
?>