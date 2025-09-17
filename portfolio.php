<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'elements/headpart.php';
    ?>

    <title><?=$sitename?> - Portfolio</title>
</head>
<body>
    <div class="hero small">
        <div class="imgguy">
            <!-- <img src="images/bg 1.jpg" alt="" class="myimg"> -->
        </div>
        <div class="hero_txt">
            <span class="thetitle">Our portfolio</span>
        </div>
    </div>

    <?php
        include 'elements/navbar.php';
    ?>

    <div class="section w3-light-gray" id="portfolio">
        <h2>Our portfolio</h2>

        <div class="cardlist">
            <div class="card">
                <img src="images/game_battlefield.jpg" alt="" class="themeimg">
                <div class="caption">
                    <h4>Battlefield 2042</h4>
                    <!-- <p>how we helped</p> -->
                    <a href="#" class="themelink v2">read more <i class="fa fa-angle-double-right icon"></i></a>
                </div>
                <div class="overlay">
                    <button class="abadge">Player engagement</button>
                </div>
            </div>
        </div>
    </div>

    <div class="mymodal trans w3-animate-opacity" style="display:none" id="deetsmodal" data-shown="0">
        <div class="modal-content w3-animate-zoom">
            <button class="w3-right w3-btn themeround" onclick="toggleShowB('#deetsmodal','flex','none')"><i class="fa fa-times"></i></button>
            <div class="mysection v2">
                <div class="item small">
                    <img src="images/service_qa.webp" alt="" class="myimg theimg">
                </div>
                <div class="item large deets">
                    <span class="hedtxt thegame">Forza horizon</span>
                    <b class="themetxt theservice">Game design</b>
                    <p class="thedesc">We offer thorough QA testing services to ensure your game runs smoothly, is free of bugs, and delivers a polished experience across all platforms.</p>
                    <a href="book_session.php" class="themelink v2">Book session</a>
                </div>
            </div>
        </div>
    </div>

    <div class="spacy-lg w3-center">
        <h2>Join them today</h2>
        <p>Join us to make the list of industry heavy weights today!</p>
        <a href="book_session.php" class="themelink v2">book session</a>
    </div>

    <?php
        include 'elements/footer.php';
    ?>

    <script src="js/app.js"></script>
    <script>
        limit = 25;

        populate_portfolio('#portfolio>.cardlist',0);
    </script>
</body>
</html>