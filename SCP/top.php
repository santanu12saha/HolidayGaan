<div class="top_nav">
	<div class="nav_menu">
		<nav class="" role="navigation">
			<ul class="nav navbar-nav navbar-right">
				<li class="pull-left">				
					<a href="javascript:;" class="user-profile">
						<strong>Super-Admin Panel</strong>
					</a>
				</li>		
				<li>	
					<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">			
						Welcome <strong><?php echo ucfirst($_SESSION['name']); ?></strong>&nbsp;&#124;&nbsp;<?php echo $_SESSION['user_name']; ?> <span class=" fa fa-angle-down"></span>
					</a>
					<ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
						<li><a href="change-password"><i class="fa fa-edit"></i> Change Password</a></li>
						<li><a href="logout"><i class="fa fa-sign-out"></i> Logout</a></li>
					</ul>
				</li>
				
			</ul>
		</nav>
	</div>
</div>
