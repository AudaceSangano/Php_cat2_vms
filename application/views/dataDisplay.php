<div class="row m-t-25">
	<div class="col-sm-6 col-lg-3">
		<div class="overview-item overview-item--c1">
			<div class="overview__inner">
				<div class="overview-box clearfix">
					<div class="text">
						<h2>
							<?php
							$i=0;
							foreach($data as $row)
							{
								$i++;
							}
							echo $i;
							?>
						</h2>
						<span>Today's  Visitors</span>
					</div>
				</div>

			</div>
		</div>
	</div>


	<div class="col-sm-6 col-lg-3">
		<div class="overview-item overview-item--c2">
			<div class="overview__inner">
				<div class="overview-box clearfix">
					<div class="text">
						<h2>
							<?php
							$i=0;
							foreach($dataa as $row)
							{
								$i++;
							}
							echo $i;
							?>
						</h2>
						<span>Yesterday   Visitors</span>
					</div>
				</div>

			</div>
		</div>
	</div>


	<div class="col-sm-6 col-lg-3">
		<div class="overview-item overview-item--c3">
			<div class="overview__inner">
				<div class="overview-box clearfix">
					<div class="text">
						<h2><?php
							$i=0;
							foreach($dataaa as $row)
							{
								$i++;
							}
							echo $i;
							?></h2>
						<span>Last 7 Days Visitors</span>
					</div>
				</div>

			</div>
		</div>
	</div>




	<div class="col-sm-6 col-lg-3">
		<div class="overview-item overview-item--c4">
			<div class="overview__inner">
				<div class="overview-box clearfix">
					<div class="text">
						<h2><?php
							$i=0;
							foreach($dataaaa as $row)
							{
								$i++;
							}
							echo $i;
							?></h2>
						<span>Total Visitors  Till Date</span>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
