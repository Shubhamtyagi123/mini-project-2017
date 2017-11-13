<?php

	function show_profile($username) {
		?>
<script type="text/javascript">


		 window.onload = function() {
                  document.getElementById('open_default').click();
                  var r=document.querySelectorAll("html")[0];
                  r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2");
   }
   </script>
		<style type="text/css">
			body {
				background: none;
			}
		</style>

		<script type="text/javascript">

			function f(e, id_) {

		       var x = document.getElementsByClassName('content_');
		       var y = document.getElementsByClassName("tab_link");

		       for (let i = 0 ; i < x.length ; i++)
		            x[i].style.display = "none";

		       for (let i = 0 ; i < y.length ; i++)
		            y[i].className = y[i].className.replace(" active_tab","");

		        document.getElementById(id_).style.display = "block";
		        e.currentTarget.parentElement.className += " active_tab";

		    }


			$('#file_form').on('submit', function(e) {
				e.preventDefault();
				var fileData = new FormData(this); 
				$.ajax({
					type : 'POST',
					url : '/mini-project-2017/clogs/item_bulk_upload.php',
					data : fileData,
					async: false,
			        success: function (data) {
			            alert(data)
			        },
			        cache: false,
			        contentType: false,
			        processData: false
					
				})
			})
		</script>

		<div class="container" style="min-height: 100vh; margin-top: 40px;">
			<!-- <form id='file_form' action="">
      <input type="file" name="file_inp">
      <button class="btn" id="btn_file_inp">Submit</button>
      </form>
       -->
			<div class="row">
				<div class="col-md-3 text-left">
					<div class="side_tab">
                        <ul class="tab_list">
                            <li class="tab_link active_tab">
                                <button onclick="f(event,'p_g')" id="open_default">
                                    <i class="fa fa-user fa-1x" aria-hidden="true"></i>
                                    Profile
                    			 </button>
                            </li>
                            <li class="tab_link">
                                <button onclick="f(event,'b_h')">
                                    <i class="fa fa-upload fa-1x" aria-hidden="true"></i>
                                    Media
                                </button>
                            </li>
                            
                            <li class="tab_link">
                                <button onclick="f(event,'new_itms')">
                                    <i class="fa fa-plus fa-1x" aria-hidden="true"></i>
                                    New Item(s)
                                </button>
                            </li>
                            <li class="tab_link">
                                <button onclick="f(event,'r')">
                                    <i class="fa fa-star fa-1x" aria-hidden="true"></i>
                                    Reviews
                                </button>
                            </li>
                        </ul>
                        <script type="text/javascript">
                            function log_me_out() {
                                window.location = "/clogs/logout.php";
                            }
                            function edit_profile() {
                                window.location = '';
                            }
                        </script>
                    </div>
				</div>
				<div class="col-md-7">
					<div class="content">
					    <div class="content_" id="p_g">asda</div>
              <div class="content_" id="r">asdd</div>
					    <div class="content_" id="new_itms">

                <div class="single-item-upload">
                  
                </div>


                <div class="bulk-item-upload">
                  <div class="row">
                    <div class="col-md-3" style="padding : 0px;">
                    <div class="box">
                      <input type="file" name="file-5[]" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
                      <label for="file-5"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Choose a file&hellip;</span></label>
                    </div>
                  </div>
                  <div class="col-md-9 text-left">
                    <div class="heading">
                      <h3 style="margin : 0px;">Rules for the CSV Files<h3>
                    </div>
                    <div class="small-border"></div>
                  </div>
                </div>
              </div>
                <div class="row" id="new_itms_wrap">
                  <div class="cover-div">
                    <div class="cover-div">
                    <div class="left-img">
                      <a href="#" id="single-"><img src="/mini-project-2017/img/single_mns.png" class="image-round img-x"></a>
                      <div class="text-">Single Item Upload</div>
                    </div>
                    <div id="right-border"></div>
                    </div>
                    <div class="right-img">
                      <a href="#" id="bulk-"><img src="/mini-project-2017/img/many_mns.png " class="image-round img-x"></a>
                      <div class="text-">Bulk Item Upload</div>
                    </div>
                  </div>
                </div>

              </div>
					    <div class="content_" id="b_h">asdf</div>
					</div>
				</div>
			</div>
		</div>

    <script type="text/javascript">
      $('#bulk-').on('click', function(e) {

        e.preventDefault();
        $('#new_itms_wrap').css('display', 'none');
        $('.bulk-item-upload').css('display', 'block');
      })
       $('#single-').on('click', function(e) {

        e.preventDefault();
        $('#new_itms_wrap').css('display', 'none');
        $('.single-item-upload').css('display', 'block');
      })
    </script>

		
		<?php
	}

	function show_index($link, $username) {
		?>
		<style type="text/css">
			body {
				background: none;
			}
		</style>

 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox" style="max-height: 400px;">

    <div class="item active">
      <img src="/mini-project-2017/img/books.jpg" alt="books">
     
    </div>

    <div class="item">
      <img src="/mini-project-2017/img/appliances.jpg" alt="appliances">
        
    </div>

    <div class="item">
      <img src="/mini-project-2017/img/mobile-group.png" alt="mobile phones">
      
    </div>
  </div>

  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br><br>
<div class="bg-1">
	<div class="container">
		<div class="text-center" style="font-size: 24px">
			<h2>Live bids</h2>
			<p>Go, place your own bid now.</p>
		</div>
    <br>
     <div class="text-center" style="font-size: 23px">
      
        <h3>Electronics</h3>
    </div>
		<div class="col-md-4">
            <div class="panel panel-info"  style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
          	        <h3 class="panel-title">Book</h3>
               </div>
                <div class="panel-body">
                	<p>MRP: Rs. 30000</p>
                  <div class="thumbnail">
                    
   					          <img src="/mini-project-2017/img/iphone.jpg" alt="books" style="text-align: center;">
                    
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>113</p>
      					     <div class="panel panel-footer">
      						    <div class="bid-money">
      							   <p class="bid-money">Rs. 0.00</p>
      						      </div>
      						    <div>
      							   <small style="color: #FF8C00">Time left: </small>
      							   <p id="demo-1"></p>
      						    </div>
      						  </div>
      						
      							<button class="btn btn-block"><strong>PLACE BID</strong></button>
    						  </div>
                </div>
     	  		  </div>
			</div>	
		  <div class="col-md-4">
            <div class="panel panel-info" style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
          	        <h3 class="panel-title">iPhone 7</h3>
               </div>
                <div class="panel-body">
                	<p>MRP: Rs. 30000</p>
                  <div class="thumbnail" >
   		         			<img src="/mini-project-2017/img/iphone.jpg" alt="iphone">
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>225</p>
      						  	<div class="panel panel-footer">
      					   	   <div class="bid-money">
      							     <p class="bid-money">Rs. 0.00</p>
      						    </div>
      						    <div>
      							   <small style="color: #FF8C00">Time left: </small>
      							   <p id="demo-2"></p>
      						    </div>
      						    </div>
      						
      							<button class="btn btn-block"><strong>PLACE BID</strong></button>
    						  </div>
                </div>
     	  		</div>
			</div>	
		  <div class="col-md-4">
            <div class="panel panel-info" style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
          	        <h3 class="panel-title">iPhone 7</h3>
               </div>
                <div class="panel-body">
                	<p>MRP: Rs. 30000</p>
                  <div class="thumbnail">
   		         			<img src="/mini-project-2017/img/iphone.jpg" alt="iphone">
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>746</p>
      				    		<div class="panel panel-footer">
      					 	     <div class="bid-money">
      							     <p class="bid-money">Rs. 0.00</p>
      						    </div>
      						    <div>
      							   <small style="color: #FF8C00">Time left: </small>
      							   <p id="demo-3"></p>
      						    </div>
      						  </div>
      						
      							<button class="btn btn-block"><strong>PLACE BID</strong></button>
    					     </div>
                </div>
     	  		</div>
			 </div>	
       <button type="button" class="pull-right btn but">VIEW ALL</button>
     </div>
     <br><br>
     <div class="container">
        <div class="text-center" style="font-size: 23px">
      
        <h3>Mobile Phones</h3>
    </div>
    <div class="col-md-4">
            <div class="panel panel-info"  style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
                    <h3 class="panel-title">Book</h3>
               </div>
                <div class="panel-body">
                  <p>MRP: Rs. 30000</p>
                  <div class="thumbnail">
                    
                      <img src="/mini-project-2017/img/iphone.jpg" alt="books" style="text-align: center;">
                    
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>113</p>
                     <div class="panel panel-footer">
                      <div class="bid-money">
                       <p class="bid-money">Rs. 0.00</p>
                        </div>
                      <div>
                       <small style="color: #FF8C00">Time left: </small>
                       <p id="demo-4"></p>
                      </div>
                    </div>
                  
                    <button class="btn btn-block"><strong>PLACE BID</strong></button>
                  </div>
                </div>
              </div>
      </div>  
      <div class="col-md-4">
            <div class="panel panel-info" style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
                    <h3 class="panel-title">iPhone 7</h3>
               </div>
                <div class="panel-body">
                  <p>MRP: Rs. 30000</p>
                  <div class="thumbnail" >
                    <img src="/mini-project-2017/img/iphone.jpg" alt="iphone">
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>225</p>
                      <div class="panel panel-footer">
                       <div class="bid-money">
                         <p class="bid-money">Rs. 0.00</p>
                      </div>
                      <div>
                       <small style="color: #FF8C00">Time left: </small>
                       <p id="demo-5"></p>
                      </div>
                      </div>
                  
                    <button class="btn btn-block"><strong>PLACE BID</strong></button>
                  </div>
                </div>
            </div>
      </div>  
      <div class="col-md-4">
            <div class="panel panel-info" style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
                    <h3 class="panel-title">iPhone 7</h3>
               </div>
                <div class="panel-body">
                  <p>MRP: Rs. 30000</p>
                  <div class="thumbnail">
                    <img src="/mini-project-2017/img/iphone.jpg" alt="iphone">
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>746</p>
                      <div class="panel panel-footer">
                       <div class="bid-money">
                         <p class="bid-money">Rs. 0.00</p>
                      </div>
                      <div>
                       <small style="color: #FF8C00">Time left: </small>
                       <p id="demo-6"></p>
                      </div>
                    </div>
                  
                    <button class="btn btn-block"><strong>PLACE BID</strong></button>
                   </div>
                </div>
            </div>
       </div> 
        <button type="button" class="pull-right btn but">VIEW ALL</button>
	   </div>
     <br><br>
      <div class="container">
        <div class="text-center" style="font-size: 23px">
      
        <h3>Books</h3>
    </div>
    <div class="col-md-4">
            <div class="panel panel-info"  style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
                    <h3 class="panel-title">Book</h3>
               </div>
                <div class="panel-body">
                  <p>MRP: Rs. 30000</p>
                  <div class="thumbnail">
                    
                      <img src="/mini-project-2017/img/books.jpg" alt="books" style="text-align: center;">
                    
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>113</p>
                     <div class="panel panel-footer">
                      <div class="bid-money">
                       <p class="bid-money">Rs. 0.00</p>
                        </div>
                      <div>
                       <small style="color: #FF8C00">Time left: </small>
                       <p id="demo-7"></p>
                      </div>
                    </div>
                  
                    <button class="btn btn-block"><strong>PLACE BID</strong></button>
                  </div>
                </div>
              </div>
      </div>  
      <div class="col-md-4">
            <div class="panel panel-info" style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
                    <h3 class="panel-title">Book</h3>
               </div>
                <div class="panel-body">
                  <p>MRP: Rs. 30000</p>
                  <div class="thumbnail" >
                    <img src="/mini-project-2017/img/books.jpg" alt="iphone">
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>225</p>
                      <div class="panel panel-footer">
                       <div class="bid-money">
                         <p class="bid-money">Rs. 0.00</p>
                      </div>
                      <div>
                       <small style="color: #FF8C00">Time left: </small>
                       <p id="demo-8"></p>
                      </div>
                      </div>
                  
                    <button class="btn btn-block"><strong>PLACE BID</strong></button>
                  </div>
                </div>
            </div>
      </div>  
      <div class="col-md-4">
            <div class="panel panel-info" style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
                    <h3 class="panel-title">Book</h3>
               </div>
                <div class="panel-body">
                  <p>MRP: Rs. 30000</p>
                  <div class="thumbnail">
                    <img src="/mini-project-2017/img/books.jpg" alt="iphone">
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>746</p>
                      <div class="panel panel-footer">
                       <div class="bid-money">
                         <p class="bid-money">Rs. 0.00</p>
                      </div>
                      <div>
                       <small style="color: #FF8C00">Time left: </small>
                       <p id="demo-9"></p>
                      </div>
                    </div>
                  
                    <button class="btn btn-block"><strong>PLACE BID</strong></button>
                   </div>
                </div>
            </div>
       </div>
        <button type="button" class="pull-right btn but">VIEW ALL</button> 
     </div>
   </div>
     <br><br>
     <div class="border-line"></div>
	<div class="container">
    <div class="text-center" style="font-size: 24px">
      
        <h2>Upcoming bids</h2>
        <p>Dont't miss any of the hot deals</p>
    </div>
    <br>
    
    <div class="row">
  <div class="col-md-3">
            <div class="panel panel-info" style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
                    <h3 class="panel-title">iPhone 7</h3>
               </div>
                <div class="panel-body">
                  <p>MRP: Rs. 30000</p>
                  <div class="thumbnail">
                    <img src="/mini-project-2017/img/iphone.jpg" alt="iphone">
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>225</p>
                     
            
                  </div>
                </div>
                <div class="panel-footer upcoming">
                  <p><strong>Open after 10 days</strong></p>
                </div>
            </div>
      </div>
      <div class="col-md-3">
            <div class="panel panel-info" style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
                    <h3 class="panel-title">iPhone 7</h3>
               </div>
                <div class="panel-body">
                  <p>MRP: Rs. 30000</p>
                  <div class="thumbnail" >
                    <img src="/mini-project-2017/img/iphone.jpg" alt="iphone">
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>225</p>
                      
                  </div>

                </div>
                <div class="panel-footer upcoming">
                  <p><strong>Open after 10 days</strong></p>
                </div>
            </div>
      </div>
      <div class="col-md-3">
            <div class="panel panel-info" style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
                    <h3 class="panel-title">iPhone 7</h3>
               </div>
                <div class="panel-body">
                  <p>MRP: Rs. 30000</p>
                  <div class="thumbnail" >
                    <img src="/mini-project-2017/img/iphone.jpg" alt="iphone">
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>225</p>
                      

                  </div>
                </div>
                <div class="panel-footer upcoming">
                  <p><strong>Open after 10 days</strong></p>
                </div>
            </div>
      </div>
      <div class="col-md-3">
            <div class="panel panel-info" style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
                    <h3 class="panel-title">iPhone 7</h3>
               </div>
                <div class="panel-body">
                  <p>MRP: Rs. 30000</p>
                  <div class="thumbnail" >
                    <img src="/mini-project-2017/img/iphone.jpg" alt="iphone">
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>225</p>
                    
                </div>

            </div>
            <div class="panel-footer upcoming">
                  <p><strong>Open after 10 days</strong></p>
                </div>
          </div>
      </div>
    </div>
     <button type="button" class="pull-right btn but">VIEW ALL</button>
  </div>
  <br>
  <div class="row" style="margin-top: 60px">
    <div class="container wrapper">
    <div class="col-sm-5" style="text-align: left; height: 213px">
      <h3 style="height: 36px">Auction Bay bidding rules :</h3>
      <div class="small-border"></div>
      <ul style="margin-left: -30px">
        <br>
        <i class="fa fa-caret-right" style="font-size: 20px;"></i>
        One User Account Per Person / IP Address / House is allowed1<br>
        <i class="fa fa-caret-right" style="font-size: 20px;"></i>
        Group Bidding is strictly not allowed<br>
        <i class="fa fa-caret-right" style="font-size: 20px;"></i>
        Do not use any 3rd party bidding softwares of bots for bidding<br>
        <i class="fa fa-caret-right" style="font-size: 20px;"></i>
        Violation of rules will result in Suspension of your account<br>
       <br>
      </ul>
    </div>
    <div class="col-sm-1 middle-border"></div>
    <div class="col-sm-1"></div>
    <div class="col-sm-5" style="text-align: left;">
      <h3>Protected Online Shopping</h3>
      <div class="small-border"></div>
      <ul style="margin-left: -30px;">
        <br>
        <p style="font-size: 20px;"></>Auction is protected and safe</p>
      </ul>
    </div>
  </div>
</div>
	
	<?php

	}

?>