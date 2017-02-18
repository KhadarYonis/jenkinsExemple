<?php include( $root . '/include/class/date.php' ) ?>

<?php include( $root . '/include/view/header.php' ) ?>

<?php include( $root . '/include/view/menu.php' ) ?>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				Bonjour, nous sommes actuellement le : <?= Date::getdate('2017-02-18') ?>
				<br>
				<br>
			</div>

			<div class="col-lg-6">
				<div class="panel panel-default">
				  <div class="panel-body">
				    Aliquam sagittis tellus vitae dui porta cursus. Nam tristique urna arcu, sit amet viverra ligula pharetra quis. Pellentesque consequat ullamcorper augue sed eleifend. Nunc et turpis erat. Ut consectetur congue vestibulum. Sed pellentesque tincidunt sapien. Aliquam condimentum eros ut eros gravida interdum. Nullam at sem elementum, ullamcorper arcu at, congue urna. In in lacus ut sem malesuada maximus ac at justo. Praesent quis tincidunt mauris. Curabitur eget finibus nulla, et suscipit tortor. Sed et massa quis metus ultrices congue non in elit. Nulla tempor lorem vel ipsum interdum, vel aliquet justo feugiat. 
				  </div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
				  <div class="panel-body">
				    Praesent non tristique est, ac bibendum eros. Donec ut elit placerat, hendrerit nisi eu, elementum mauris. Curabitur libero justo, molestie ut lectus ut, laoreet elementum turpis. Sed at lorem odio. Sed id libero ullamcorper justo vestibulum pellentesque. Quisque venenatis massa ac felis pharetra, sit amet condimentum justo ornare. Duis at sem est. Ut lorem odio, vulputate sit amet sollicitudin ut, bibendum vitae orci. Aliquam aliquam euismod tristique. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse potenti. Suspendisse aliquam odio ex, convallis molestie nisl convallis eget. Nulla ut rutrum lorem, sit amet viverra erat. 
				  </div>
				</div>
			</div>
		</div>
	</div>	

<?php include( $root . '/include/view/footer.php' ) ?>