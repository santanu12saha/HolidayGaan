<?php
	error_reporting(0);
	require_once 'fbConfig.php';
?>
		<div class="popup">
			<div class="orange-bg-text">
				HELP US PERSONALIZE YOUR VACATION BY REGISTERING
			</div>
			
			<div class="fb-block">
				
				<?php
					
					//destroy facebook session if user clicks reset
					
						if(empty($_SESSION['usernameFB']))
						{
							$loginUrl = $helper->getLoginUrl($redirectURL, $fbPermissions);
							$output = '<a href="'.$loginUrl.'" ><img class="fbimg" src="images/button_facebook.png"></a>';
						}
						else
						{
							//echo "dfgdfg";	
							//echo "<script language=\"javascript\">window.location=\"http://localhost/vKationdemo/eorr.php\";</script>";
						}
						echo $output;
				?>
			</div>
		
			<a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'" class="skip">Skip</a>
				
			<p>By Signing up, I agree to vKation's <a href="#">Terms of Service</a>, <a href="#">Privacy Policy</a>, <a href="#">Guest Refund Policy</a>, and <a href="#">Host Guarantee Terms</a>.</p>
		
			<div class="bottom-line">
				Already an VKation's member? <a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Login</a>
			</div>
		</div>