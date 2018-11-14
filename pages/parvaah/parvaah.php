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
    <link rel="stylesheet" href="../../index.css">
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

    <section id="parvaah" class="parvaah section">
        <!-- HAMBURGER -->
        <?php
                require_once('../includes/components/hamburger.php');
        ?>

        <!-- LEFT SECTION -->
        <div class="parvaah-fixed">
            <img class="logo" src="../../assets/images/parvahlogo.png" alt="Skream Logo">
            <p class="content">Parvaah is the social initiative of K. J. Somaiya College of Engineering and was born out of the need to give back to the society. Over the years, Parvaah has taken up various social issues such as women’s safety, child welfare, and LGBT rights. This year, Parvaah has taken up the cause of health and sanitation, and its major goal is to make Mumbai a clean and hygienic city. Many famous and distinguished personalities such as Ranbir Kapoor, Maharashtra Chief Minister Devendra Fadnavis, Sushant Singh Rajput, Comedian Kapil Sharma have signed the undertaking and have pledged to support Parvaah in its endeavours. Parvaah has inspired the younger generation to work for the collective good of the society and strives to make the world a better place to live.</p>
        </div>
        <!-- END OF LEFT SECTION -->

        <!-- RIGHT SECTION -->
        <div class="parvaah-info">

            <div class="card" id="beach-cleanup">
                <div class="card-content animated faster fadeInRight">
                    <img src="../../assets/images/parvaah/beachclean.png" alt="Beach Clean Up Image">
                    <h3 class="heading"><span>Beach Cleanup</span></h3>
                    <p class="content">
                        Under the initiative of health and sanitation, and in accordance with the government’s Swacch Bharat Abhiyan, Parvaah has undertaken the task of beautifying Versova beach. Along with long-time crusader Mr. Afroz Shah who is acknowledged as a United Nations’ Champion of the Earth, Parvaah has organized weekend cleanup drives at Versova beach. It’s an attempt to restore the pride of the beach and make it pristine again. If one wants to bring about a change, then it must come from within oneself, and this is a wonderful opportunity to restore the pride of the city and send a message to the society regarding importance of cleanliness.
                    </p>
                </div>
            </div>
            
            
            <div class="card" id="marathon">
                <div class="card-content animated faster fadeInRight">
                    <img src="../../assets/images/parvaah/marathon.png" alt="Beach Clean Up Image">
                    <h3 class="heading"><span>Marathon</span></h3>
                    <p class="content">
                        Parvaah plans to organize a marathon in association with a cancer research institute to raise awareness about the deadly disease. It’s an attempt to educate people about cancer and the ways to fight against it. There will also be a fund-raiser event for the cancer victims, which will be a small step towards helping the patients get cured.
                    </p>
                </div>
            </div>
            
            <div class="card" id="e-waste">
                <div class="card-content animated faster fadeInRight">
                    <img src="../../assets/images/parvaah/ewaste.png" alt="Beach Clean Up Image">
                    <h3 class="heading"><span>Awareness about electronic waste</span></h3>
                    <p class="content">
                        In an attempt to raise awareness about the importance of e-waste management, Parvaah has decided to install e-waste bins in the college premises. This will go a long way in the proper disposal of hazardous e-waste, which forms the major constituent of junk in our college.
                    </p>
                </div>
            </div>
            <div class="pagination-container">
                <div id="page-0" class="indicator active"></div>
                <div id="page-1" class="indicator"></div>
                <div id="page-2" class="indicator"></div>
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
    <!-- GLOBAL SCRIPT -->
    <script src="../../index.js"></script>
    <!-- PAGE LEVEL SCRIPT -->
    <script src="./parvaah.js"></script>
</body>

</html>
