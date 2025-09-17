<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'elements/headpart.php';
    ?>

    <title><?=$sitename?> - About us</title>
</head>
<body>
    <div class="hero small">
        <div class="imgguy">
            <!-- <img src="images/bg 1.jpg" alt="" class="myimg"> -->
        </div>
        <div class="hero_txt">
            <span class="thetitle">About Us</span>
        </div>
    </div>

    <?php
        include 'elements/navbar.php';
    ?>

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
    <script>
        limit = 25;
    </script>
</body>
</html>