<?php
    require_once('../includes/constants.php');
    $page = HOME_PAGE;
?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="../../assets/plugins/font-awesome/css/font-awesome.min.css">
    <!--ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" media="screen and (min-device-width: 1025px) and (max-device-width: 1920px)" href="../../index.css">
    <!-- MOBILE CSS -->
    <link rel="stylesheet" media="screen and (max-device-width: 1024px)" href="../../mobile.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn t work if you view the page via file:// -->
    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    <!-- SIDEBAR -->
    <?php
        require_once('../includes/components/sidebar.php');
    ?>

    <!-- SOCIAL LINKS -->
    <?php
        require_once('../includes/components/social-links.php');
    ?>

    <section id="home" class="home section">
        <!-- HAMBURGER -->
        <?php
                require_once('../includes/components/hamburger.php');
        ?>

        <!-- LEFT SECTION -->
        <div class="fixed-section">
            <div class="home-fixed-wrapper animated fadeInUp">
                <img class="logo" src="../../assets/images/logo/skream-logo.svg" alt="Skream Logo">
                <div class="divider"></div>
                <h3 class="home-heading">Lead the<br>game</h3>
                <h6 class="skream-date">07.01.19 - 11.01.19</h6>
                <a class="compete-button" href="http://bit.ly/SkreamRegistration" target="_blank" class="btn">Compete Now</a>
            </div>
        </div>
        <!-- END OF LEFT SECTION -->

        <!-- RIGHT SECTION -->
        <div class="home-info">
            <div class="card" id="about-section-2">
                <div class="card-content animated faster fadeInRight">
                    <div class="divider long"></div>
                    <h3 class="heading">About <br><span>Scream</span></h3>
                    <p class="content">
                        Skream is the national level sports festival of K.J. Somaiya College of Engineering and has completed 5 editions. It was started with the aim of cultivating and promoting sportsmanship, competitiveness, and discipline. It hosts students from over 100 institutes and boasts an array of indoor and outdoor games such as Football, Cricket, Badminton, Chess, Throwball, Basketball, Lawn Tennis, Squash etc.
                        Skream has been graced by prominent sports personalities such as Mr. Balwinder Singh Sandhu, Mr. Wasim Jaffer, Mr. Devindar Walmiki, and many more. Along with Parvaah, the social initiative of KJSCE, has hosted paralympic teams such as the Wheelchair Basketball Federation of India, Indian Blind Football Federation etc.
                    </p>
                </div>
            </div>
            <div class="card" id="about-kjsce">
                <div class="card-content animated faster fadeInRight">
                    <div class="divider long"></div>
                    <h3 class="heading">About <br><span>KJSCE</span></h3>
                    <p class="content">
                        K.J. Somaiya College of Engineering is located in the Somaiya Vidyanagari campus, Vidyavihar. Catering to about 40,000 students every day, this campus offers diverse fields of education such as Engineering, Management, Commerce, Arts, and Sciences along with actively promoting sports. Somaiya Vidyavihar boasts a 65-acre campus with sprawling grounds for various sports. Being granted Autonomous status from the academic year 2014-15, K.J. Somaiya College of Engineering also enjoys the status of being graded ‘A’ by the NAAC (National Assessment and Accreditation Council) in 2017
                    </p>
                </div>
            </div>
            <div class="pagination-container">
                <div id="page-0" class="indicator active"></div>
                <div id="page-1" class="indicator"></div>
            </div>


            <div class="social-links-mobile">
                <a href="<?php echo FACEBOOK_LINK ?>"><i class="social-link fa fa-facebook"></i></a>
                <a href="<?php echo TWITTER_LINK ?>"><i class="social-link fa fa-twitter"></i></a>
                <a href="<?php echo SNAPCHAT_LINK ?>"><i class="social-link fa fa-snapchat-ghost"></i></a>
                <a href="<?php echo INSTAGRAM_LINK ?>"><i class="social-link fa fa-instagram"></i></a>
                <a href="<?php echo YOUTUBE_LINK ?>"><i class="social-link fa fa-youtube-play"></i></a>
            </div>

            <!-- ADDING THE INFINITE COUNTERS -->
            <?php
                require_once('../includes/components/light-counters.php');
            ?>
            <!-- END OF INFINITE COUNTERS -->
        </div>
        <!--END OF RIGHT SECTION -->
    </section>

    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BOOSTRAP 3 -->
    <script src="../../assets/plugins/bootstrap%25203/js/bootstrap.min.js"></script>
    <!-- PAGE LEVEL SCRIPT -->
    <script src="./home.js"></script>
    <!-- GLOBAL SCRIPT -->
    <script src="../../index.js"></script>
</body>

</html>
