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

    <section class="registration section">
        <!-- HAMBURGER -->
        <?php
                require_once('../includes/components/hamburger.php');
            ?>

        <!-- LEFT SECTION -->
        <div class="fixed-section">
            <div class="registration-wrapper animated fadeInUp">
                <img class="logo small" src="../../assets/images/logo/skream-logo.svg" alt="Skream Logo">
                <br><br>
                <h5 class="heading">Registration guidelines</h5>
                <br>
                <div class="content">
                    <p>List of documents to be submitted for registration : </p>
                    <ol>
                        <li> Team List. </li>
                        <li> Bonafide Certificate signed by the Principal/Sports in-charge. </li>
                        <li> Registration Form. </li>
                        <li> Government ID. </li>
                    </ol>
                </div>
                <br>
                <div class="content">
                    Submission of the required documents can be done online or offline :
                    <ol>
                        <li>
                            <strong>Online</strong> :
                            <ol>
                                <li>
                                    Scanned copies of all the required documents should be sent via e-mail at kjsceskream@somaiya.edu.
                                </li>
                                <li>
                                    The original copies of the aforementioned documents must be brought along with the player/team for the competition and have to be submitted at the registration desk.
                                </li>
                            </ol>
                        </li>
                        <li>
                            <strong>Offline</strong> :
                            <ol>
                                <li>
                                    All the required documents can be personally given to the Skream Team at the college. 
                                    Outstation colleges can submit via post at
                                    KJSCE Students' Council,
                                    A018, Ground Floor,
                                    K.J. Somaiya College Of Engineering,
                                    Vidyavihar, Mumbai- 400 077.
                                </li>
                            </ol>
                        </li>
                    </ol>
                </div>
                <br>
                <p class="note">
                    <span>NOTE : </span> Last date to submit entries and complete the procedure is <strong>25th December, 2017. </strong>
                </p>
                <br>
                <div class="content">
                    <p>
                        For any queries regarding registration, contact:
                    </p>
                    <ul>
                        <li><strong>Rushi Shah</strong> : 7588349698</li>
                        <li><strong>Rushi Shah</strong> : 7588349698</li>
                    </ul>
                </div>
                <br><br>
                <h5 class="heading">PAYMENT PROCEDURE</h5>
                <br>
                <div class="content">
                    <p>Payment should be done before the deadline specified in the guidelines. The different methods for payment are:</p>
                    <ul>
                        <li>Offline: The Participant can pay the registration amount to any concerned authority either at a place convenient to them or by coming to the college.</li>
                        <li>Online: A payment portal is given below. Using the portal, the participant can pay the registration fees online via Credit Cards, Debit Cards, Net Banking, etc</li>
                        <ul>
                            <li><strong>Portal</strong> : <a href="https://www.somaiya.edu/kjsce_admission/admission/student_fees.aspx">Somaiya.edu</a></li>
                            <li>The Participants can also pay through PayTM to the following number: <strong>8879359893</strong></li>
                        </ul>
                    </ul>
                    <p>When you make the payment, send the screenshot of the receipt with your name, college, and the event you have made the payment for, to the same number mentioned above, i.e., 8879359893 (This is for both the online methods) </p>
                </div>
                <br>
                <div class="content">
                    <p>For any queries regarding payment, contact : </p>
                    <ul>
                        <li><strong>Shranik Vora</strong> : 8879359893</li>
                        <li><strong>Parin Shah</strong> : 8291255338</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END OF LEFT SECTION -->

        <!-- RIGHT SECTION -->
        <div class="registration-info">
            <div class="divider long"></div>
            <h6 class="heading">registration</h6>
        </div>
        <!--END OF RIGHT SECTION -->

        <!-- ADDING THE INIFINTE COUNTER -->
        <?php
            require_once('../includes/components/dark-counters.php');
        ?>
        <!-- END OF INIFINTE COUNTERS -->
    </section>
    <a class="compete-button-bottom" href="http://bit.ly/SkreamRegistration" target="_blank" class="btn">Compete Now</a>
    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BOOSTRAP 3 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- GLOBAL SCRIPT -->
    <script src="../../index.js"></script>
</body>

</html>
