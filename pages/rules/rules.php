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

    <section class="rules section">
        <!-- HAMBURGER -->
        <?php
                require_once('../includes/components/hamburger.php');
            ?>

        <!-- LEFT SECTION -->
        <div class="fixed-section">
            <div class="rules-wrapper animated fadeInUp">
                <img class="logo small" src="../../assets/images/logo/skream-logo.svg" alt="Skream Logo">
                <br><br>
                <h5 class="heading">Contingency rules</h5>
                <br>
                <p class="note">Winners, Runners-up &amp; Semi-finalists will be awarded points as per the following :
                </p>
                <br>
                <h6 class="heading small">Team Events</h6>
                <div class="content">
                    <ul>
                        <li>The winning team will be awarded 15 points</li>
                        <li>The runners-up team will be awarded 9 points</li>
                        <li>Semi-finalists will be awarded 5 points</li>
                    </ul>
                </div>
                <br>
                <h6 class="heading small">Individual Events</h6>
                <ul class="content">
                    <li>
                        The winning team will be awarded 10 points
                    </li>
                    <li>
                        The runners-up team will be awarded 6 points
                    </li>
                    <li>
                        Semifinalists will be awarded 3 points
                    </li>
                    <li>
                        Points awarded for participation: 2 for individuals, 5 for teams
                    </li>
                    <li>
                        Points will be awarded for online contest. For more details, visit ourFacebook page : <a href="javascript:;">KJSCE SKREAM</a>
                    </li>
                </ul>
                <br>
                <h5 class="heading">General Rules</h5>
                <ul class="content">
                    <li>The last date for filling the registration form is 25th December. Any registration entered beyond the last date will not be considered.</li>
                    <li>All matches will be played according to respective university rules</li>
                    <li>Teams should be present 30 minutes before every match.</li>
                    <li>All teams are requested to submit a complete list of squad when they report for their first match along with valid college ID cards, Bonafide Certificates</li>
                    <li>No DROP OUTS are allowed to play under any circumstances (as objected to by any opposing team) the team will be disqualified. <strong>(Original ID cards are must)</strong>.</li>
                    <li>Use of abusive language and foul play is strictly prohibited and may even lead to expulsion of the team.</li>
                    <li>The Referee's decision is final in case of any dispute</li>
                    <li>The draws are made by the Event Managers, will not be revealed. They cannot be changed or questioned by anyone.</li>
                    <li>First Aid will be provided by us.</li>
                    <li>The college and the fest will not be responsible for any mishaps during the event</li>
                </ul>
                <br>
                <p class="note"><span>NOTE</span> : Football will not be considered in the contingency</p>
            </div>
        </div>
        <!-- END OF LEFT SECTION -->

        <!-- RIGHT SECTION -->
        <div class="rules-info">
            <div class="divider long"></div>
            <h6 class="heading">rules</h6>
        </div>
        <!--END OF RIGHT SECTION -->

        <!-- ADDING THE INIFINTE COUNTER -->
        <?php
            require_once('../includes/components/dark-counters.php');
        ?>
        <!-- END OF INIFINTE COUNTERS -->
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
