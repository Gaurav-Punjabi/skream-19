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

    <section class="accomodation section">
        <!-- HAMBURGER -->
        <?php
                require_once('../includes/components/hamburger.php');
            ?>

        <!-- LEFT SECTION -->
        <div class="fixed-section">
            <div class="accomodation-wrapper animated fadeInUp">
                <img class="logo small" src="../../assets/images/logo/skream-logo.svg" alt="Skream Logo">
                <br><br>
                <p class="content">All outstation teams participating in Skream 2018 will be provided accommodation by K.J. Somaiya College of Engineering on the basis of availability of rooms.</p>
                <br><br>
                <p class="content">
                    For any queries contact
                    <br>
                    <strong>Aayush Shah : </strong> 9892822280
                    <br>
                    <strong>Nishad Joshi : </strong> 9619824425
                </p>
            </div>
        </div>
        <!-- END OF LEFT SECTION -->

        <!-- RIGHT SECTION -->
        <div class="accomodation-info">
            <div class="divider long"></div>
            <h6 class="heading">accomodations</h6>
        </div>
        <!--END OF RIGHT SECTION -->
        
    </section>
    <a class="compete-button-bottom" href="javascript:;" class="btn">Compete Now</a>

    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BOOSTRAP 3 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- GLOBAL SCRIPT -->
    <script src="../../index.js"></script>
</body>

</html>
