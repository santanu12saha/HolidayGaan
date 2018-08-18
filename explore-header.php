<div class="container-fluid">
	<div class="row" style="margin: 0;padding: 0;border-bottom: 2px solid #dce0e0;">
		<div class="col-lg-12 col-xm-12 col-md-12 col-sm-12" style="margin:0px; padding:0px;">
			<div class="col-lg-2 col-xm-2 col-md-2 col-sm-2 text-left eorr-header-left">
				<a href="index.php"><img src="images/logo-holidayGaan1.png" /></a>
			</div>
			
			<div class="col-lg-10 col-xm-10 col-md-10 col-sm-10 eorr-header-right text-right">
				<input id="place" name="place" data-ng-modal="place" class="col-lg-3 col-xm-3 col-md-3 col-sm-3 custom-selector" style="border-right:0;" required value="{{place}}">
				<ul>
					<li class="last"><a href="#">Become a Host</a></li>
					<li><a href="#">Messages <img src="images/messages.png" /></a></li>
					<li><a href="#">Help <img src="images/question.png" /></a></li>
						<?php
							if($_SESSION['usernameFB']!="")
							{
						?>
								<li><a href="<?php echo $logoutURL; ?>"><?php echo $_SESSION['usernameFB']; ?> <img src="<?php echo $_SESSION['picFB']; ?>" style="width: 29px;height: 29px;border-radius: 100%;border: 2px solid #484848;" /></a></li>
						<?php
							}
							else
							{
						?>
								<li><a href="#">Login</a></li>
						<?php
							}
						?>
				</ul>
			</div>
		</div>
	</div>
</div>