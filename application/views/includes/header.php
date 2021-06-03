<script type="text/javascript">
	function checkpass()
	{
		alert('Please use Vistors B/w Dates, This not yet ready');
		return false;
	}

</script>
<header class="header-desktop">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="header-wrap">
				<form class="form-header" name="search" action="" method="post" onsubmit="return checkpass();">
					<input class="au-input au-input--xl" type="text" name="searchdata" id="searchdata" placeholder="Search by names &amp; mobile number..." />
					<button class="au-btn--submit" type="submit" name="search">
						<i class="zmdi zmdi-search"></i>
					</button>
				</form>
				<div class="header-button">
					<div class="noti-wrap">
					</div>
					<div class="account-wrap">
						<div class="account-item clearfix js-item-menu">
							<div class="image">
								<img src="<?php echo base_url();?>images/icon/avatar-01.jpg" alt="SANGANO Audace" />
							</div>
							<div class="content">
								<a class="js-acc-btn" href="#">manage account</a>
							</div>
							<div class="account-dropdown js-dropdown">
								<div class="account-dropdown__body">
									<div class="account-dropdown__item">
										<a href="<?php echo base_url()?>Admin/profile">
											<i class="zmdi zmdi-account"></i>Admin Profile</a>
									</div>
									<div class="account-dropdown__item">
										<a href="<?php echo base_url()?>Admin/updatePass">
											<i class="zmdi zmdi-settings"></i>Change Password</a>
									</div>

								</div>
								<div class="account-dropdown__footer">
									<a href="<?php echo base_url()?>Admin/logout">
										<i class="zmdi zmdi-power"></i>Logout</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
