<!DOCTYPE html>
<html>
	<head>
		<title>Sign in</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php
			include 'header.php';
		?>
		<style type="text/css">
				.box-signin {
					background: red;
					width: 100%;
					height: 500px;
				}
		</style>
		<div id="container">
			<div class="content-container">
				<div class="row">
					<div class="box-signin">
						<div class="content-box-signin">
							<div class="col-md-6">
								<div class="content-top-text">
									<div class="top-text">
										<p>Name:</p>
									</div>
									<div class="input">
										<div class="input-group input-group-sm">
											<span class="input-group-addon" id="sizing-addon3">@</span>
											<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon3">
										</div>
									</div>
								</div>
								
							</div>
							<div class="col-md-6">
								<div class="content-input">
									<div class="input">
									<div class="top-text">
										<p>Name:</p>
									</div>
										<div class="input-group input-group-sm">
											<span class="input-group-addon" id="sizing-addon3">@</span>
											<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon3">
										</div>
									</div>
								</div>
								
							</div>

						</div>
						<!-- 2 -->
					</div>
				</div>		
			</div>
		</div>
	</body>
</html>