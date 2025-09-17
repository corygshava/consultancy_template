<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'elements/headpart.php';
    ?>

    <title><?=$sitename?> - Our services</title>
</head>
<body>
    <div class="hero small">
        <div class="imgguy">
            <!-- <img src="images/bg 1.jpg" alt="" class="myimg"> -->
        </div>
        <div class="hero_txt">
            <span class="thetitle">Our services</span>
        </div>
    </div>

    <?php
        include 'elements/navbar.php';
    ?>

    <div class="section" id="services">
        <h2>Our services</h2>
        <div class="mysection">
            <div class="item small">
                <img src="images/service_marketing.jpg" alt="" class="myimg">
            </div>
            <div class="item large deets">
                <span class="hedtxt">Game Marketing</span>
                <p>We craft tailored marketing strategies to help your game reach the right audience. From launch campaigns to influencer outreach, we boost visibility and drive player engagement.</p>
                <a href="book_session.php" class="themelink v2">Book session</a>
            </div>
        </div>

        <div class="mysection">
            <div class="item small">
                <img src="images/service_design.jpg" alt="" class="myimg">
            </div>
            <div class="item large deets">
                <span class="hedtxt">Game Design Consultation</span>
                <p>We provide expert insights on game mechanics, user experience, and design flow to ensure your game is both fun and accessible to players.</p>
                <a href="book_session.php" class="themelink v2">Book session</a>
            </div>
        </div>

        <div class="mysection">
            <div class="item small">
                <img src="images/service_monetization.jpg" alt="" class="myimg">
            </div>
            <div class="item large deets">
                <span class="hedtxt">Monetization Strategy</span>
                <p>Our team helps you implement ethical and effective monetization models that maximize revenue without compromising player satisfaction.</p>
                <a href="book_session.php" class="themelink v2">Book session</a>
            </div>
        </div>

        <div class="mysection">
            <div class="item small">
                <img src="images/service_qa.webp" alt="" class="myimg">
            </div>
            <div class="item large deets">
                <span class="hedtxt">Quality Assurance</span>
                <p>We offer thorough QA testing services to ensure your game runs smoothly, is free of bugs, and delivers a polished experience across all platforms.</p>
                <a href="book_session.php" class="themelink v2">Book session</a>
            </div>
        </div>

        <div class="mysection">
            <div class="item small">
                <img src="images/service_community.jpg" alt="" class="myimg">
            </div>
            <div class="item large deets">
                <span class="hedtxt">Community Management</span>
                <p>We help you build, nurture, and engage your player community, creating loyal fans who stay invested in your game long-term.</p>
                <a href="book_session.php" class="themelink v2">Book session</a>
            </div>
        </div>

        <div class="mysection">
            <div class="item small">
                <img src="images/service_live.jpg" alt="" class="myimg">
            </div>
            <div class="item large deets">
                <span class="hedtxt">Live Service Management</span>
                <p>We support your game's ongoing success with live service strategies, content updates, and event planning that keep players coming back for more.</p>
                <a href="book_session.php" class="themelink v2">Book session</a>
            </div>
        </div>

    </div>

    <?php
        include 'elements/footer.php';
    ?>

    <script src="js/app.js"></script>
    <script>
        services = [
            'quality assurance', 
            'community management consultation', 
            'live service management'
        ]

        limit = 25;
    </script>
</body>
</html>