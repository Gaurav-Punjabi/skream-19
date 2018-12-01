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
    <link rel="stylesheet" media="screen and (max-device-width: 480px)" href="../../mobile.css">
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
        <!-- SIDEBAR -->
        <?php
            require_once('../includes/components/hamburger.php');
        ?>
        <div class="parvaah-info-container col-md-12">
            <div class="logo-container">
                <img src="../../assets/images/logo/parvah-1.svg" alt="Parvah Logo">
                <img src="../../assets/images/logo/parvah-2.svg" alt="Parvah Logo">
            </div>
            <p class="content">
                The social initiative of K.J. Somaiya College of engineering, named Parvaah, works each year with a purpose of providing to the underprivileged and oppressed. This time around, Parvaah is on a mission to establish a “Zero Waste Community,” wherein constant efforts are being made for reducing, reusing and recycling the waste generated and contributing back to the society.
            </p>
            <a class="volunteer-button" href="https://docs.google.com/forms/d/e/1FAIpQLSfW0-zbqvDQ-PYd3YAq_c_rCpHG5yXBAnkl0W5u7-Xq5B-Wsw/viewform" class="btn">Volunteer</a>
        </div>

        <div class="parvaah-event">
            <img src="../../assets/images/parvaah/school-awareness.jpg" alt="Beach Clean" class="event-image">
            <div class="parvaah-event-info">
                <h6 class="heading right">SCHOOL AWARENESS CAMPAIGN</h6>
                <p class="content right">It is said ‘The students of today are the future of tomorrow’. Realising this, Parvaah plans on visiting schools in Mumbai and teach the students the basic principles of a zero waste community. It’s an attempt to educate the students as well as the staff of the school about the need to go zero waste. Along with this, we also aim at transforming the schools into a zero waste locality. Instilling a sense of responsibility in the students towards managing their waste will go a long way in realising our goal of a cleaner Mumbai.</p>
            </div>
        </div>

        <div class="parvaah-event">
            <div class="parvaah-event-info">
                <h6 class="heading left">PLASTIC &amp; E-COLLECTION DRIVE</h6>
                <p class="content left">Keeping in mind the perils caused by plastic and e-waste, Parvaah has decided to conduct a collection drive for these hazardous items. The plastic and e-waste which is collected will then be sent for recycling thus ensuring there is no harm caused towards the environment. E-waste contains heavy metals like cadmium, lead, copper, and chromium that can contaminate the environment while plastic, on the other hand, is made from toxic compounds known to cause illness, and because it is meant for durability, it is not biodegradable. Constituting a major chunk of our waste, a proper and efficient disposal of these items is the need of the hour.</p>
            </div>
            <img src="../../assets/images/parvaah/plastic-collection.jpg" alt="Beach Clean" class="event-image right">
        </div>

        <div class="parvaah-event">
            <img src="../../assets/images/parvaah/ganpati-visarjan.jpg" alt="Beach Clean" class="event-image">
            <div class="parvaah-event-info">
                <h6 class="heading right">GANPATI VISARJAN CLEAN-UP</h6>
                <p class="content right">The festive season of Ganesh Chaturthi is one which is celebrated with great pride and enthusiasm all across the state. But what follows at the end of 11 days is a beach replete of floral waste and half-broken idols. To overcome this, Parvaah has decided to organize a beach clean-up at the Girgaum Chowpatty on the day after Ganesh Visarjan to clear up the beach of all its waste. We plan on associating with other college students from that area and make this a ground-breaking youth moment. Similarly, we would also be spreading awareness about celebrating an eco-friendly Ganesh Utsav in the weeks leading to the festival.</p>
            </div>
        </div>

        <div class="parvaah-event">
            <div class="parvaah-event-info">
                <h6 class="heading left">SIGNAL SHALA</h6>
                <p class="content left">Signal Shala is an innovative concept initialized by Samarth Bharat Vyaspith along with Thane Municipal Corporation, to provide education to underprivileged children living on signals in Thane. Situated in a small container below a bridge, the main aim of Signal Shala is to make these kids capable of adjusting themselves with the mainstream world. We at Parvaah plan on spreading awareness about Zero Waste with the help of these kids and also teach them simple ways to treat their waste. As signals witness a frequent number of vehicles, we aim to use this medium to make the people aware of the basic habits they can follow to effectively manage their waste. We at Parvaah believe that only when it is a collective effort of all its citizens can a city truly make great progress in achieving a goal.</p>
            </div>
            <img src="../../assets/images/parvaah/ganpati-visarjan.jpg" alt="Beach Clean" class="event-image right">
        </div>

        <div class="parvaah-event">
            <img src="../../assets/images/parvaah/secret-santa.jpg" alt="Beach Clean" class="event-image">
            <div class="parvaah-event-info">
                <h6 class="heading right">SECRET SANTA</h6>
                <p class="content right">On the occasion of Christmas, Parvaah plans on visiting an orphanage and celebrate with the kids. To further the joy, we would also be distributing toys, goodies, and sweets among the kids. This would be followed by playing games with the children, interacting with them and ensuring that everyone has a smile on his or her face.</p>
            </div>
        </div>

        <div class="parvaah-event">
            <div class="parvaah-event-info">
                <h6 class="heading left">PARVAAH MARATHON</h6>
                <p class="content left">Parvaah plans to organize a marathon to raise awareness about waste crisis. The marathon is proposed to take place in the Ghatkopar area of suburban Mumbai. We would also be starting a fundraiser event through this marathon.</p>
            </div>
            <img src="../../assets/images/parvaah/ganpati-visarjan.jpg" alt="Beach Clean" class="event-image right">
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
</body>

</html>
