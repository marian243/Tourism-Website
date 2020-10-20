<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style1.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    <?php
    $hotelid=$_GET['id'];
    echo "<script>window.alert('your hotel numner is $hotelid')</script>";
    ?>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="booking-cta">
							<h1>Make your reservation</h1>
							<p>The road to your dreams isn’t always easy to navigate, sometimes dotted with mountains to climb, obstacles to overcome—and hard, mind-numbing times that will make you feel like quitting. Just remember this if you get lost along the way: Anything worth having doesn’t come easy. So don’t turn back around. Don’t give up.</p>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1">
						<div class="booking-form">
							<form>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Name</span>
                                            <input class="form-control" type="text"id="Name" name="Name" >
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Email</span>
                                            <input class="form-control" type="email"id="Email" name="Email">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Phone</span>
                                            <input class="form-control" type="tel" id="Phone" name="Phone">
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="form-group">
											<span class="form-label">Rooms</span>
											<select name="room" id="room" class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="form-group">
											<span class="form-label">Guests</span>
											<select name="guests"id="guests"class="form-control">
												<option>1 Person</option>
												<option>2 People</option>
												<option>3 People</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Check In</span>
                                            <input class="form-control" type="date" id="Check" name="Check"  required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											
											<span class="form-label">Check Out</span>
                                            <input class="form-control" type="date" id="Check_out" name="Check_out" required>
										</div>
									</div>
								</div>
								<div class="form-btn">
                                    <input type="hidden" name="hotelid" value="<?php echo $hotelid;?>" >
								<button class="btn btn-primary" type="submit" name="submit" formaction="cart_action.php" formmethod="post">Book Now</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery.min1.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>