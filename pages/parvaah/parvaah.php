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
        <div class="parvah-info-container col-md-12">
            <div class="logo-container">
                <img src="../../assets/images/logo/parvah-1.svg" alt="Parvah Logo">
                <img src="../../assets/images/logo/parvah-2.svg" alt="Parvah Logo">
            </div>
            <p class="content">
                The social initiative of K.J. Somaiya College of engineering, named Parvaah, works each year with a purpose of providing to the underprivileged and oppressed. This time around, Parvaah is on a mission to establish a “Zero Waste Community,” wherein constant efforts are being made for reducing, reusing and recycling the waste generated and contributing back to the society.
            </p>
        </div>
        <!-- ADDING THE INFINITE COUNTERS -->
        <?php
            require_once('../includes/components/light-counters.php');
        ?>
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
