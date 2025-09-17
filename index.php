<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include 'elements/headpart.php';
	?>

	<title><?=$sitename?> - Homepage</title>
</head>
<body>
	<div class="hero">
		<div class="imgguy">
			<img src="images/bg 1.jpg" alt="" class="myimg">
		</div>
		<div class="hero_txt">
			<span class="thetitle">Lets fix your game</span>
			<hr>
			<span class="subtxt">We help game developers optimize design, production, and monetization. Trusted by indie devs and AAA studios worldwide.</span>
			<div class="linksbox">
				<a href="#about" class="hoverfx1">learn more</a>
				<a href="book_session.php" class="hoverfx1 mc">book now</a>
			</div>
		</div>
	</div>

	<?php
		include 'elements/navbar.php';
	?>

	<div class="section" id="services">
		<h2>Our services</h2>
		<div class="w3-row">
			<div class="w3-col l4">
				<div class="myitem">
					<h3><i class="fa fa-gamepad"></i></h3>
					<h4>Gameplay</h4>
					<p>We help studios design gameplay that captivates and retains. From core mechanics to balancing, our team ensures your game feels intuitive, rewarding, and endlessly engaging.</p>
					<a href="services.php" class="themelink v2">View more</a>
				</div>
			</div>
			<div class="w3-col l4">
				<div class="myitem">
					<h3><i class="fa fa-bullhorn"></i></h3>
					<h4>Marketing</h4>
					<p>Our marketing strategies are built to cut through the noise. We craft tailored campaigns that build hype, grow your audience, and drive results—before, during, and after launch.</p>
					<a href="services.php" class="themelink v2">View more</a>
				</div>
			</div>
			<div class="w3-col l4">
				<div class="myitem">
					<h3><i class="fa fa-user"></i></h3>
					<h4>Player engagement</h4>
					<p>Keeping players invested is key to long-term success. We design engagement loops, live ops plans, and community strategies that turn casual users into loyal fans.</p>
					<a href="services.php" class="themelink v2">View more</a>
				</div>
			</div>
		</div>
	</div>

	<div class="section" id="about">
		<h2>About us</h2>
		<div class="w3-row">
			<div class="w3-col m4 w3-center">
				<img src="images/about.jpeg" alt="" class="abtimg">
			</div>
			<div class="w3-col m8 spacy">
				<h4>Who are we</h4>
				<p>We're a game consultancy dedicated to helping developers succeed through expert gameplay design, strategic marketing, and meaningful player engagement. Whether you're launching your first title or scaling a live game, we bring the insight and creativity needed to elevate every aspect of your project.</p>
				<a href="#portfolio">our portfolio</a>
				<a href="#services">our expertise</a>
			</div>
		</div>
	</div>
	<div class="section w3-light-gray" id="portfolio">
		<h2>Our portfolio</h2>
		<div class="w3-row">
			<div class="w3-col l4">
				<div class="myitem">
					<img src="images/game_forza.png" alt="" class="themeimg">
					<div class="caption">
						<h4>Forza horizon 5</h4>
						<!-- <p>how we helped</p> -->
						<a href="portfolio.php" class="themelink v2">read more <i class="fa fa-angle-double-right icon"></i></a>
					</div>
					<div class="overlay">
						<button class="abadge">Player engagement</button>
					</div>
				</div>
			</div>
			<div class="w3-col l4">
				<div class="myitem">
					<img src="images/game_gotham knights.jpg" alt="" class="themeimg">
					<div class="caption">
						<h4>Gotham knights</h4>
						<!-- <p>how we helped</p> -->
						<a href="portfolio.php" class="themelink v2">read more <i class="fa fa-angle-double-right icon"></i></a>
					</div>
					<div class="overlay">
						<button class="abadge">Story design</button>
					</div>
				</div>
			</div>
			<div class="w3-col l4">
				<div class="myitem">
					<img src="images/game_battlefield.jpg" alt="" class="themeimg">
					<div class="caption">
						<h4>Battlefield 2042</h4>
						<!-- <p>how we helped</p> -->
						<a href="portfolio.php" class="themelink v2">read more <i class="fa fa-angle-double-right icon"></i></a>
					</div>
					<div class="overlay">
						<button class="abadge">Player engagement</button>
					</div>
				</div>
			</div>
		</div>
		<div class="spacy w3-center">
			<a href="#" class="themelink v2">view more</a>
		</div>
	</div>
	<div class="section" id="theteam">
		<h2>Our team</h2>
		<div class="w3-row">
			<div class="w3-col l6">
				<div class="w3-col m6">
					<div class="picholder">
						<img src="images/team_1.jpg" alt="">
						<div class="caption">
							<h5 class="therole">Marketing lead</h5>
							<span class="myname">Miranda Alscrow</span>
							<div class="socials">
								<a href="#" class="social"><i class="fa fa-facebook"></i></a>
								<a href="#" class="social"><i class="fa fa-instagram"></i></a>
								<a href="#" class="social"><i class="fa fa-twitter"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="w3-col m6">
					<div class="picholder">
						<img src="images/team_2.jpg" alt="">
						<div class="caption">
							<h5 class="therole">Player engagement Lead</h5>
							<span class="myname">Corinne Thibodeau</span>
							<div class="socials">
								<a href="#" class="social"><i class="fa fa-facebook"></i></a>
								<a href="#" class="social"><i class="fa fa-instagram"></i></a>
								<a href="#" class="social"><i class="fa fa-twitter"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="w3-col l6">
				<div class="w3-col m6">
					<div class="picholder">
						<img src="images/team_3.jpg" alt="">
						<div class="caption">
							<h5 class="therole">Game design lead</h5>
							<span class="myname">Letizia Pisani</span>
							<div class="socials">
								<a href="#" class="social"><i class="fa fa-facebook"></i></a>
								<a href="#" class="social"><i class="fa fa-instagram"></i></a>
								<a href="#" class="social"><i class="fa fa-twitter"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="w3-col m6">
					<div class="picholder">
						<img src="images/team_4b.png" alt="">
						<div class="caption">
							<h5 class="therole">Gameplay engineer lead</h5>
							<span class="myname">Gerard Kurviso</span>
							<div class="socials">
								<a href="#" class="social"><i class="fa fa-facebook"></i></a>
								<a href="#" class="social"><i class="fa fa-instagram"></i></a>
								<a href="#" class="social"><i class="fa fa-twitter"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section" id="contact">
		<h2>Contact us</h2>
		<div class="w3-row">
			<div class="w3-col m6">
				<div class="w3-row">
					<div class="w3-col s3 iconguy">
						<i class="fa fa-map-marker"></i>
					</div>
					<div class="w3-col s9">
						<h4>Location</h4>
						<span>123 ventura Ave.</span><br>
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
				<form action="feedback_system/addfeedback.php" method="post">
					<div class="input-holder">
						<label for="thename">your name (optional)</label>
						<input type="text" name="alias" id="thename">
					</div>
					<div class="input-holder">
						<label for="themail">email</label>
						<input type="text" name="theemail" id="themail" required>
					</div>
					<div class="input-holder">
						<label for="thesubject">subject</label>
						<input type="text" name="thesubject" id="thesubject" required>
					</div>
					<div class="input-holder">
						<label for="themessage">your message</label>
						<textarea name="themsg" id="themessage" rows="4" required></textarea>
					</div>
					<button class="w3-btn themebg">send <i class="fa fa-paper-plane"></i></button>
				</form>
			</div>
		</div>
	</div>
	<div class="subfooter w3-light-grey w3-hide">
		<div class="w3-row">
			<div class="w3-col l6">
				<div class="w3-row">
					<div class="w3-col m6 spacy linklist">
						<h4>Hyperion</h4>
						<p>Short description</p>
						<div class="mydata" data-showit="address"></div>
					</div>
					<div class="w3-col m6 spacy linklist">
						<h4>Services</h4>
						<ul class="w3-bar w3-bar-block">
							<li>Game design review</li>
							<li>DEI</li>
							<li>product design</li>
							<li>optimisation</li>
							<li>player interaction</li>
							<li>systems design</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="w3-col l6">
				<div class="w3-row">
					<div class="w3-col m6 spacy linklist">
						<h4>Menu</h4>
						<ul class="w3-bar w3-bar-block">
							<li>services</li>
							<li>about us</li>
							<li>portfolio</li>
							<li>Testimonials</li>
						</ul>
					</div>
					<div class="w3-col m6 spacy linklist">
						<h4>Legal</h4>
						<ul class="w3-bar w3-bar-block">
							<li>NDA policy</li>
							<li>Privacy policy</li>
							<li>Terms of service</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
		include 'elements/footer.php';
	?>

	<script src="js/app.js"></script>
</body>
</html>