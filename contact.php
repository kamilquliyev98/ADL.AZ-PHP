			<?php
				require_once ("phpHelp/header.php");
			?>
			
			

			<!-- 
			=============================================
				Inner Banner
			============================================== 
			-->
			<?php
				require_once ("phpHelp/innerBanner.php");
			?>



			<!-- 
			=============================================
				Contact Form
			============================================== 
			-->
	   		<div class="container contact-us-page theme-contact-page-styleOne">
	        	<div class="row">
	        		<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
	        			<div class="contact-us-form">
	        				<h4>Mesaj göndər</h4>

	        				<form action="inc/sendemail.php" class="form-validation" autocomplete="off">
	        					<div class="row">
	        						<div class="col-xs-12">
	        							<div class="single-input">
	        								<input type="text" placeholder="Ad *" name="name">
	        							</div> <!-- /.single-input -->
	        						</div> <!-- /.col- -->
	        						<div class="col-sm-6 col-xs-12">
	        							<div class="single-input">
	        								<input type="email" placeholder="E-mail *" name="email">
	        							</div> <!-- /.single-input -->
	        						</div> <!-- /.col- -->
	        						<div class="col-sm-6 col-xs-12">
	        							<div class="single-input">
	        								<input type="text" placeholder="Telefon nömrəsi" name="phone">
	        							</div> <!-- /.single-input -->
	        						</div> <!-- /.col- -->
	        						<div class="col-xs-12">
	        							<div class="single-input">
	        								<textarea placeholder="Mesajınız" name="message"></textarea>
	        							</div> <!-- /.single-input -->
	        						</div> <!-- /.col- -->
	        					</div> <!-- /.row -->
	        					<button class="button-one ch-p-bg-color">Göndər</button>
	        				</form>

	        				<!-- Contact Form Validation Markup -->
							<!-- Contact alert -->
							<div class="alert-wrapper" id="alert-success">
								<div id="success">
									<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
									<div class="wrapper">
						               	<p>Mesajınız uğurla göndərildi! Təşəkkürlər!</p>
						             </div>
						        </div>
						    </div> <!-- End of .alert_wrapper -->
						    <div class="alert-wrapper" id="alert-error">
						        <div id="error">
						           	<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
						           	<div class="wrapper">
						               	<p>Mesajınız göndərilmədi! Bir daha cəhd edin...</p>
						            </div>
						        </div>
						    </div> <!-- End of .alert_wrapper -->
	        			</div> <!-- /.contact-us-form -->
	        		</div> <!-- /.col- -->

	        		<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight">
	        			<div class="contactUs-address">
							<h4>Əlaqə məlumatı</h4>
			        		<p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form,</p>
			        		<div class="single-address clearfix">
			        			<div class="icon round-border float-left"><i class="flaticon-placeholder"></i></div>
			        			<div class="text float-left">
			        				<h6>Ünvan</h6>
			        				<span>Yeni Yasamal, Dadaş Bünyadzadə küç. 11B, <br> Bakı, Azərbaycan</span>
			        			</div>
			        		</div> <!-- End of .single-address -->
			        		<div class="single-address clearfix">
			        			<div class="icon round-border float-left"><i class="flaticon-envelope"></i></div>
			        			<div class="text float-left">
			        				<h6>E-mail</h6>
			        				<span>ngo_adl@mail.ru</span>
			        			</div>
			        		</div> <!-- End of .single-address -->
			        		<div class="single-address clearfix">
			        			<div class="icon round-border float-left"><i class="flaticon-phone-call"></i></div>
			        			<div class="text float-left">
			        				<h6>Telefon</h6>
			        				<span>(012) 498 00 71</span>
			        			</div>
			        		</div> <!-- End of .single-address -->
						</div> <!-- /.our-address -->
	        		</div>
	        	</div> <!-- /.row -->
	        </div> <!-- /.container -->


			

			<!-- 
			=============================================
				Goolge-map
			============================================== 
			-->
			<div>
				<div id="google-map-area">
					<div class="google-map-three" id="contact-google-map" data-map-lat="40.389303" data-map-lng="49.794370" data-icon-path="images/logo/map3.png" data-map-title="Find Map" data-map-zoom="12"></div>
		   		 </div>
			</div>



			<!-- 
			=============================================
				Partner Logo
			============================================== 
			-->
            <?php
				require_once ("phpHelp/partnerLogo.php");
			?>


			<!-- 
			=============================================
				Bottom Footer Banner
			============================================== 
			-->
			<?php
				require_once ("phpHelp/bottomFooterBanner.php");
			?>


			<!-- 
			=============================================
				Footer
			============================================== 
			-->
			<?php
				require_once ("phpHelp/footer.php");
			?>