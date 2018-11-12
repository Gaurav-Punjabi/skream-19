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

    <section class="home section">
        <!-- HAMBURGER -->
        <?php
                require_once('../includes/components/hamburger.php');
        ?>

        <!-- LEFT SECTION -->
        <div class="fixed-section">
            <div class="home-fixed-wrapper animated fadeInUp">
                <img class="logo" src="../../assets/images/logo/skream-logo.svg" alt="Skream Logo">
                <div class="divider"></div>
                <h3 class="home-heading">Seize the<br>play</h3>
                <h6 class="skream-date">07.01.19 - 11.01.19</h6>
                <a class="compete-button" href="javascript:;" class="btn">Compete Now</a>
            </div>
        </div>
        <!-- END OF LEFT SECTION -->

        <!-- RIGHT SECTION -->
        <div class="home-info">
            <div id="default-home-section"></div>
            <div id="about-section">
                <div class="about-section-wrapper animated faster fadeInRight">
                    <div class="about-divider"></div>
                    <h3 class="about-heading">About <br><span>Scream</span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, quasi aut cum sed voluptatibus odit, architecto impedit, doloremque quossit amet, consectetur adipisicing elit. Aliquam dicta iusto sequi aperiam qui, quo. Fuga, ipsum sunt. Odio totam laboriosam veritatis cupiditate quod delectus vel sed quaerat! Nihil, ad?</p>
                </div>
            </div>
            <div id="about-kjsce">
                <div class="about-section-wrapper animated faster fadeInRight">
                    <div class="about-divider"></div>
                    <h3 class="about-heading">About <br><span>KJSCE</span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus corporis tempora consectetur porro ut dolores voluptas perspiciatis harum, earum possimus nobis laboriosam totam, pariatur quibusdam iusto. Eligendi, ut tempora optio.</p>
                </div>
            </div>
            <div class="home-pagination">
                
            </div>
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
