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
                                        <p>Enter username and password</p>
                                        <p class="failed_mssg"></p>
                                    </div>
                                    <!-- gif_show -->
                                    <div class="form-top-right" id="sign_in_gif">

                                        <i class="fa fa-lock" id="sign_in_lock"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" class="login-form" id="sign_in_form">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-username">Username</label>
                                            <input type="text" name="username_" placeholder="Username..." class="form-username form-control" id="form-username">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-password">Password</label>
                                            <input type="password" name="pass_" placeholder="Password..." class="form-password form-control" id="form-password">
                                        </div>

                                        <button type="submit" class="btn">
                                        
                                        Login
                                    
                                    </button>
                                    </form>
                                </div>
                            </div>
                            <div class="social-login">
                                <h3>...or login with</h3>
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
                                        <p>Fill in the form below to sign up</p>
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
                            
                            $('#sign_up_gif').removeClass(' gif_show');
                            if (res == 666)
                              window.location = "verify";
                        },
                        error : function(a,b,c) {
                            alert('Could not connect to the server!');
                        }
                    })
                }
            })

            $('#sign_in_form').on('submit', function(e) {
                e.preventDefault();
                var form_d = $('#sign_in_form').serializeArray();
                
                
                    $.ajax({
                        type : 'POST',
                        url : 'clogs/login.php',
                        data : form_d,
                        beforeSend : function() {
                            $('#sign_in_lock').remove();
                            $('#sign_in_gif').addClass(' gif_show');
                        },
                        success : function(res) {
                         if (res == 1)
                            window.location = "/mini-project-2017/user/";
                         else {
                            $('.failed_mssg').html(res);
                            $('#sign_in_gif').removeClass(' gif_show');
                          }
                        },
                        error : function(a,b,c) {
                            alert('Could not connect to the server!');
                        }
                    })
                
            })
        </script>
        

		<?php
	}


  function show_verify() {
    ?>

        <div class="container text-center" style="min-height : 100vh;">
          <div class="row">
            <div class="col-md-12">
              <i class="fa fa-envelope extra-large"></i>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p id="a-little-big">Congratulations!</p>
              <p id="a-little-medium"> Just one step away.</p>  
              <p id="a-little-small">Please check you inbox<span id="email_"><?=isset($_SESSION['emal'])?$_SESSION['email']:"";?></span></p> 

              
            </div>
          </div>
        </div>

    <?php
  }



  function show_item($item_url_name) {
    ?>

    <style type="text/css">
      body {
        background: #fff !important;
      }
    </style>
    <div class="container mrg-top">

      <div class="row">
        <div class="col-md-5">
          <div class="img-div">
            <div class="main-img"></div>
            <div class="sub-imgs">
              <div class="sub-img"></div>
              <div class="sub-img"></div>
              <div class="sub-img"></div>
            </div>
          </div>
        </div>
        <div class="col-md-7 text-left mrg-left">
          <div class="item-name">
            <p>Lorem ipsum dolor sit amet</p>
          </div>
          <div class="desc">
            <div class="desc-head">Description</div>
            <div class="desc-body"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dignissimos quis consectetur mollitia, facilis praesentium perspiciatis ea aut similique ipsa ut vero voluptates doloremque porro labore sit, alias quisquam saepe! 
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit iure, aspernatur vero vitae saepe magnam consequuntur fuga sint, consequatur ut quod corporis impedit explicabo nobis pariatur porro reprehenderit eius quasi.</p>
            </div>
          </div>
          <hr>
          <div class="bider-area row">
            <div class="bid-input col-md-9">
              <input id="bid-inpt-bar" type="range" min="10" max="9999" value="15" step="5">           
            </div>

            <div class="bid-amt col-md-3">
              <i class="fa fa-inr fa-2x"></i><span id="amt"></span>
            </div>
            <div class="col-md-12">
            <button class="btn" id="bid_btn">Make BID</button>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="row top-marg">
        <div class="col-md-4">
          <div class="seller-info">
            <div class="head-heading text-left">
              <p> Seller Info</p>
              <div class="small-border"></div>
            </div>
            <div class="head">
              <div class="head-img">
                
              </div>
              <div class="seller-details text-center">
                <div id="name">Aditya Saxena</div>
                <div id="contact">9897171001</div>
                <div id="email">adityasaxena602@gmail.com</div>
              </div>

            </div>
            <div class="info">
              <div class="head-heading text-left">
              <p>Product Info</p>
              <div class="small-border"></div>
            </div>
              <div class="i-info">
                <div class="li-list">Auction ID : <span class="num-info">AUCBAY-2178</span></div>
                <div class="li-list">Product ID : <span class="num-info">AUCBAYITM-221378</span></div>
                <div class="li-list">Auction Start : <span class="num-info">28-Oct-2017</span></div>
                <div class="li-list">Auction End : <span class="num-info">29-Oct-2017</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="top-bidders">
            <div class="head-heading text-left">
              <p>Top Bids</p>
              <div class="small-border"></div>
            </div>
            <div class="user-div">
              <div class="user-img"></div>
              <div class="user-info">
                <div class="user-name">Shubham Tyagi</div>
                <div class="user-bid">
                  <i class="fa fa-inr"></i><span class="bid-amt-ss">340</span>
                </div>
              </div>
            </div>
            <div class="user-div">
              <div class="user-img"></div>
              <div class="user-info">
                <div class="user-name">Aditya Saxena</div>
                <div class="user-bid">
                  <i class="fa fa-inr"></i><span class="bid-amt-ss">440</span>
                </div>
              </div>
            </div>
            <div class="user-div">
              <div class="user-img"></div>
              <div class="user-info">
                <div class="user-name">Aditya Bhat</div>
                <div class="user-bid">
                  <i class="fa fa-inr"></i><span class="bid-amt-ss">40</span>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <div class="col-md-4">
          <div class="head-heading text-left">
              <p>Similar Products</p>
              <div class="small-border"></div>
            </div>
            <!--  limit the product name to max 4 words-->
            <div class="product-div">
              <div class="product-img-div"></div>
              <div class="product-info-div">
                <div class="product-name-div">Lorem ispsom lato roboto</div>
                <div class="lower-part">
                <div class="bid-btn"><button class="bid-btn-small">Bid Now</button></div>
                <div class="bid-amt-small"><i class="fa fa-inr"></i><span class="bid-amt-ss">300</span></div>
                </div>
              </div>
            </div>

            <div class="product-div">
              <div class="product-img-div"></div>
              <div class="product-info-div">
                <div class="product-name-div">Lorem ispsom lato roboto </div>
                <div class="lower-part">
                <div class="bid-btn"><button class="bid-btn-small">Bid Now</button></div>
                <div class="bid-amt-small"><i class="fa fa-inr"></i><span class="bid-amt-ss">300</span></div>
                </div>
              </div>
            </div>

            <div class="product-div">
              <div class="product-img-div"></div>
              <div class="product-info-div">
                <div class="product-name-div">Lorem ispsom lato roboto</div>
                <div class="lower-part">
                <div class="bid-btn"><button class="bid-btn-small">Bid Now</button></div>
                <div class="bid-amt-small"><i class="fa fa-inr"></i><span class="bid-amt-ss">300</span></div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <style type="text/css">
      .rangeslider,.rangeslider__fill {
        transition: background 0.3s;
      }

      .rangeslider--is-lowest-value {
        background-color: white;
      }

      .rangeslider--is-highest-value .rangeslider__fill {
        background-color: hotpink;
      }
    </style>
    <script type="text/javascript">
    $(function() {

      $('#amt').html($('input[type=range]')[0].value);
            
      const cssClasses = [
        'rangeslider--is-lowest-value',
        'rangeslider--is-highest-value'
      ];
      
      $('input[type=range]')
        .rangeslider({
          polyfill: false
        })
        .on('input', function() {
          const fraction = (this.value - this.min) / (this.max - this.min);
          if (fraction === 0) {
            this.nextSibling.classList.add(cssClasses[0]);
          } else if (fraction === 1) {
            this.nextSibling.classList.add(cssClasses[1]);
          } else {
            this.nextSibling.classList.remove(...cssClasses)
          }

          $('#amt').html(this.value);

        });
    });
    </script>
       
    <?php
  }

?>
