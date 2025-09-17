<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'elements/headpart.php';
    ?>

    <title><?=$sitename?> - Book session</title>
</head>
<body>
	<div class="hero small">
		<div class="imgguy">
			<!-- <img src="images/bg 1.jpg" alt="" class="myimg"> -->
		</div>
		<div class="hero_txt">
			<span class="thetitle">Book a session</span>
		</div>
	</div>

	<?php
		include 'elements/navbar.php';
	?>

	<div class="mysection">
		<div class="item small">
			<img src="images/service_design.jpg" alt="" class="myimg">
		</div>
		<div class="item large deets">
			<span class="hedtxt">Book a session today</span>
			<p>Whether you're launching your first title or scaling a live game, our consultancy provides expert guidance to help you stand out in a crowded market. From design to marketing, we’re here to turn your vision into a success story.</p>
		</div>
	</div>

	<div class="section" id="contact">
		<h2>Book a session</h2>
		<div class="w3-row">
			<div class="w3-col m6">
				<div class="w3-row">
					<div class="w3-col s3 iconguy">
						<i class="fa fa-map-marker"></i>
					</div>
					<div class="w3-col s9">
						<h4>Location</h4>
						<span>123 ventura Ave, HeckTown</span><br>
						<span>North Brunswick, Lel Magnificio</span>
					</div>
				</div>
				<div class="w3-row">
					<div class="w3-col s3 iconguy">
						<i class="fa fa-envelope"></i>
					</div>
					<div class="w3-col s9">
						<h4>Email us</h4>
						<span>info@hyperionconsulting.com</span><br>
					</div>
				</div>
				<div class="w3-row">
					<div class="w3-col s3 iconguy">
						<i class="fa fa-phone"></i>
					</div>
					<div class="w3-col s9">
						<h4>call us</h4>
						<span>+233 344 455 738</span><br>
					</div>
				</div>
			</div>
			<div class="w3-col m6">
				<form action="book_session/addfeedback.php" method="post">
					<div class="input-holder">
						<label for="thename">your name / company</label>
						<input type="text" name="alias" id="thename" required>
					</div>
					<div class="input-holder">
						<label for="themail">email</label>
						<input type="text" name="theemail" id="themail" required>
					</div>
					<div class="input-holder">
						<label for="thesubject">requested Service</label>
						<input type="text" name="thesubject" id="thesubject" placeholder="just start typing, we'll suggest one" list="servicesList" required>
						<datalist id="servicesList">
							<option value="Game Marketing">
							<option value="Game Design Consultation">
							<option value="Monetization Strategy">
							<option value="Quality Assurance">
							<option value="Community Management">
							<option value="Live Service Management">
						</datalist>
					</div>
					<div class="input-holder w3-hide">
						<label for="themessage">your message</label>
						<textarea name="themsg" id="themessage" rows="4" required>session booking</textarea>
					</div>
					<button class="w3-btn themebg">send <i class="fa fa-paper-plane"></i></button>
				</form>
			</div>
		</div>
	</div>

    <?php
        include 'elements/footer.php';
    ?>

	<script src="js/app.js"></script>
	<script>
		limit = 25;
	</script>
</body>
</html>