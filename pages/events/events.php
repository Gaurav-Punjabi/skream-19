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
    <div class="sidebar-wrapper close">
        <nav>
            <!-- HOME -->
            <a href="../home/home.php" class="animated fadeInUp">
                <li class="sidebar-option animated selected">
                    home
                </li>
            </a>

            <!-- EVENTS -->
            <a href="../events/events.php" class="animated fadeInUp">
                <li class="sidebar-option animated">
                    events
                </li>
            </a>

            <!-- RULES -->
            <a href="../rules/rules.php" class="animated fadeInUp">
                <li class="sidebar-option animated">
                    events
                </li>
            </a>

            <!-- ACCOMODATION -->
            <a href="../accomodation/accomodation.php" class="animated fadeInUp">
                <li class="sidebar-option animated">
                    accomodations
                </li>
            </a>

            <!-- REGISTRATION  -->
            <a href="../registration/registration.php" class="animated fadeInUp">
                <li class="sidebar-option animated">
                    registration
                </li>
            </a>

            <!-- PARVAAH  -->
            <a href="../parvaah/parvaah.php" class="animated fadeInUp">
                <li class="sidebar-option animated">
                    parvaah
                </li>
            </a>

            <!-- CONTACT  -->
            <a href="../contact/contact.php" class="animated fadeInUp">
                <li class="sidebar-option animated">
                    contact
                </li>
            </a>
        </nav>
    </div>

    <!-- SOCIAL LINKS -->
    <div class="social-links animated fadeInRight">
        <a href="https://www.facebook.com/KJSCESKREAM/"><i class="social-link fa fa-facebook"></i></a>
        <a href="https://twitter.com/kjsceskream"><i class="social-link fa fa-twitter"></i></a>
        <a href="https://www.snapchat.com/add/kjscelive"><i class="social-link fa fa-snapchat-ghost"></i></a>
        <a href="https://www.instagram.com/kjscelive/"><i class="social-link fa fa-instagram"></i></a>
        <a href="https://www.youtube.com/kjscelive/"><i class="social-link fa fa-youtube-play"></i></a>
    </div>

    <section class="events section">
        <!-- HAMBURGER -->
        <div class="hamburger" id="hamburger"></div>

        <!-- RIGHT SECTION -->
        <div class="events-info mobile">
            <div class="heading-container sport">
                <div class="divider long animated faster slideInUp"></div>
                <h6 class="event-heading animated faster slideInUp">Events</h6>
            </div>

            <div class="football heading-container hidden">
                <div class="divider long animated faster slideInUp"></div>
                <h6 class="event-heading animated faster slideInUp">Football</h6>
            </div>

            <div class="badminton heading-container hidden">
                <div class="divider long animated faster slideInUp"></div>
                <h6 class="event-heading animated faster slideInUp">Badminton</h6>
            </div>

            <div class="cricket heading-container hidden">
                <div class="divider long animated faster slideInUp"></div>
                <h6 class="event-heading animated faster slideInUp">Cricket</h6>
            </div>

            <div class="rink-football heading-container hidden">
                <div class="divider long animated faster slideInUp"></div>
                <h6 class="event-heading animated faster slideInUp">Rink Football</h6>
            </div>

            <div class="box-cricket heading-container hidden">
                <div class="divider long animated faster slidInUp"></div>
                <h6 class="event-heading animated faster slidInUp">Box Cricket</h6>
            </div>

            <div class="squash heading-container hidden">
                <div class="divider long animated faster slidInUp"></div>
                <h6 class="event-heading animated faster slidInUp">squash</h6>
            </div>

            <div class="lawn-tennis heading-container hidden">
                <div class="divider long animated faster slidInUp"></div>
                <h6 class="event-heading animated faster slidInUp">Lawn Tennis</h6>
            </div>

            <div class="table-tennis heading-container hidden">
                <div class="divider long animated faster slidInUp"></div>
                <h6 class="event-heading animated faster slidInUp">Table Tennis</h6>
            </div>

            <div class="carrom heading-container hidden">
                <div class="divider long animated faster slidInUp"></div>
                <h6 class="event-heading animated faster slidInUp">Carrom</h6>
            </div>

            <div class="athletics heading-container hidden">
                <div class="divider long animated faster slidInUp"></div>
                <h6 class="event-heading animated faster slidInUp">Athletics</h6>
            </div>

            <div class="basketball heading-container hidden">
                <div class="divider long animated faster slidInUp"></div>
                <h6 class="event-heading animated faster slidInUp">Basketball</h6>
            </div>

            <div class="volleyball heading-container hidden">
                <div class="divider long animated faster slidInUp"></div>
                <h6 class="event-heading animated faster slidInUp">Volleyball</h6>
            </div>

            <div class="throwball heading-container hidden">
                <div class="divider long animated faster slidInUp"></div>
                <h6 class="event-heading animated faster slidInUp">Throwball</h6>
            </div>
        </div>

        <!-- LEFT SECTION -->
        <div class="fixed-section">
            <div class="event-wrapper animated fadeInUp">
                <img class="logo small" src="../../assets/images/logo/skream-logo.svg" alt="Skream Logo">
                <div class="custom-select" id="select-event">
                    <select>
                        <option>sport</option>
                        <option>badminton</option>
                        <option>football</option>
                        <option>rink-football</option>
                        <option>squash</option>
                        <option>cricket</option>
                        <option>box-cricket</option>
                        <option>lawn-tennis</option>
                        <option>table-tennis</option>
                        <option>carrom</option>
                        <option>athletics</option>
                        <option>basketball</option>
                        <option>volleyball</option>
                        <option>throwball</option>
                    </select>
                </div>

                <!-- DEFAULT SECTION -->
                <div class="event sport">
                    <div class="content">
                        <br>
                        Participants from about <span>100 institutes</span> over the country participate in :
                        <ul class="headings">
                            <br>
                            <li>football </li>
                            <li>cricket </li>
                            <li>badminton </li>
                            <li>rink football </li>
                            <li>Throwball </li>
                            <li>carrom </li>
                            <li>box cricket </li>
                            <li>squash </li>
                            <li>lawn tennis </li>
                            <li>Basketball </li>
                            <li>table tennis </li>
                            <li>athletics </li>
                            <li>volleyball </li>
                            <li>chess</li>
                        </ul>
                    </div>
                </div>
                <!--END OF DEFAULE SECTION -->

                <!-- BADMINTON-->
                <div class="event  animated faster slidInUp hidden badminton">
                    <h3 class="gender selected boys-option">boys</h3>
                    <h3 class="gender girls-option">girls</h3>

                    <!-- BOYS-->
                    <div id="boys" class="hidden">
                        <h6 class="content-heading">Rules</h6>
                        <div class="content">
                            <ul>
                                <li>Single event and team event</li>
                                <li>No. of players per team : 5 maximum, 3 minimum</li>
                                <li>Team event will be played in following manner</li>
                                <ul>
                                    <li>Singles</li>
                                    <li>Doubles</li>
                                </ul>
                                <li>Only one player can play two matches (but not both singles)</li>
                                <li>Direct knockout format for both singles and team event</li>
                                <li>Gum sole shoes are mandatory</li>

                            </ul>
                        </div>

                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">singles </div>
                                <div class="column"> &#x20b9; 3,500</div>
                                <div class="column"> &#x20b9; 1,800</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">doubles </div>
                                <div class="column"> &#x20b9; 6,500</div>
                                <div class="column"> &#x20b9; 2,500</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">SINGLES</div>
                                <div class="column">DOUBLES</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 350</div>
                                <div class="column">&#x20b9; 750</div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF BOYS SECTION -->

                    <!-- GIRLS-->
                    <div id="girls" class="hidden">
                        <h6 class="content-heading">Rules</h6>
                        <div class="content">
                            <ul>
                                <li>Single event and Doubles event</li>
                                <li>Both player should be from same college</li>
                                <li>Direct knockout format</li>
                                <li>Gum sole shoes are mandatory</li>
                            </ul>
                        </div>

                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">singles </div>
                                <div class="column"> &#x20b9; 2,500</div>
                                <div class="column"> &#x20b9; 1,000</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">doubles </div>
                                <div class="column"> &#x20b9; 4,500</div>
                                <div class="column"> &#x20b9; 1,800</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">SINGLES</div>
                                <div class="column">DOUBLES</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 300</div>
                                <div class="column">&#x20b9; 500</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Event Heads</h6>
                        <p class="content">
                            Tanisha Ashar: 8976284930
                            <br>
                            Karan Pandya: 9930833040
                        </p>
                    </div>
                    <!-- END OF GIRLS SECTION -->
                </div>
                <!-- END OF BADMINTON -->

                <!-- FOOTBALL-->
                <div class="event  animated faster slidInUp hidden football">
                    <h3 class="gender selected boys-option">boys</h3>
                    <h3 class="gender girls-option">girls</h3>

                    <!-- BOYS-->
                    <div id="boys" class="hidden">

                        <h6 class="content-heading">Rules</h6>
                        <div class="content">
                            <ul>
                                <li>No. of players per team : 11 + 5</li>
                                <li>3 substitutions are allowed</li>
                                <li>Half length : 20 mins with a 5 mins break between halves</li>
                                <li>All players should come in proper kit.</li>
                            </ul>
                        </div>

                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">team </div>
                                <div class="column"> &#x20b9; 32,000</div>
                                <div class="column"> &#x20b9; 13,000</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">TEAM</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 2,800</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Event Heads</h6>
                        <p class="content">
                            Aniket Shah: 9930186221
                            <br>
                            Sanyam Savla: 9987690969
                        </p>
                    </div>
                    <!-- END OF BOYS SECTION -->

                    <!-- GIRLS-->
                    <div id="girls" class="hidden">
                        <h6 class="content-heading">Rules</h6>
                        <div class="content">
                            <ul>
                                <li>No. of players per team : 5 + 2</li>
                                <li>Rolling substitutes are allowed</li>
                                <li>Half length is of 7 minutes</li>
                                <li>Shoes are compulsory (Studs are not allowed)</li>
                            </ul>
                        </div>

                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">team </div>
                                <div class="column"> &#x20b9; 6,000</div>
                                <div class="column"> &#x20b9; 2,500</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">TEAM</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 800</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Event Heads</h6>
                        <p class="content">
                            Rhyme Manjalkar: 9004826569
                            <br>
                            Parth Dedhia: 9930035100
                        </p>
                    </div>
                    <!-- END OF GIRLS SECTION -->
                </div>
                <!-- END OF FOOTBALL -->


                <!-- RINK FOOTBALL-->
                <div class="event  animated faster slidInUp hidden rink-football">
                    <h3 class="gender selected boys-option">boys</h3>

                    <!-- BOYS-->
                    <div id="boys" class="hidden">
                        <h6 class="content-heading">Event Heads</h6>
                        <p class="content">
                            Aditya Shinde: 8104426081
                            <br>
                            Nikhil Chaplot: 9892531773
                            <br>
                            Rambhia Om: 9768369999
                        </p>

                        <h6 class="content-heading">Rules</h6>
                        <div class="content">
                            <ul>
                                <li>No. of players per team : 5 + 2</li>
                                <li>Shoes are compulsory (studs are not allowed)</li>
                                <li>Rolling substitutes are allowed</li>
                                <li>The tournament will proceed on a knockout basis</li>
                                <li>Half length is of 7 minutes</li>
                                <li>The rules and regulations for rink football are as follows:-</li>
                                <ul>
                                    <li>Tie will be decided by a one on one match</li>
                                    <li>Throw-ins will be replaced by touch-ins</li>
                                    <li>5 straight corners conceded are penalized with 1 end to end penalty</li>
                                    <li>High passes are allowed in your own half but across the field passes have to be below chest height</li>
                                    <li>Free kicks can be direct in the attacking half. However, in the team's own half they have to be indirect and the rise rule is applicable once again.</li>
                                    <li>Hand balls and fouls will be penalized with free kick or penalty depending on the position.</li>
                                </ul>
                            </ul>
                        </div>

                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">team </div>
                                <div class="column"> &#x20b9; 6,500</div>
                                <div class="column"> &#x20b9; 2,500</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">TEAM</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 700</div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF BOYS SECTION -->
                </div>
                <!-- END OF RINK FOOTBALL -->


                <!-- CRICKET-->
                <div class="event  animated faster slidInUp hidden cricket">
                    <h3 class="gender selected boys-option">boys</h3>

                    <!-- BOYS-->
                    <div id="boys" class="hidden">
                        <h6 class="content-heading">Rules</h6>
                        <div class="content">
                            <ul>
                                <li>No. of players per team : 11 + 5</li>
                                <li>6 overs per match</li>
                                <li>Super over in case of a draw</li>
                            </ul>
                        </div>

                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">team </div>
                                <div class="column"> &#x20b9; 15,000</div>
                                <div class="column"> &#x20b9; 6,000</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">TEAM</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 1,800</div>
                            </div>
                        </div>
                        <h6 class="content-heading">Event Heads</h6>
                        <p class="content">
                            Mayank Kakad: 8879856958
                            <br>
                            Vignesh Sunderraman: 9029908968
                            <br>
                            Aaditya Rajgor: 7738682010
                            <br>
                            Ebrahim Kaeed Zoher Bhinderwala: 8369012355
                        </p>
                    </div>
                    <!-- END OF BOYS SECTION -->
                </div>
                <!-- END OF CRICKET -->


                <!-- BOX CRICKET-->
                <div class="event  animated faster slidInUp hidden box-cricket">
                    <h3 class="gender selected boys-option">boys</h3>

                    <!-- BOYS-->
                    <div id="boys" class="hidden">
                        <h6 class="content-heading">Rules</h6>
                        <div class="content">
                            <ul>
                                <li>No. of players per team : 6+3</li>
                                <li>Five over a side</li>
                                <li>Minimum 4 bowlers(2-1-1-1)</li>
                                <li>1 tip 1 hand out.</li>
                                <li>Direct boundary cross out.</li>
                                <li>4 runs, 2 runs and 1 run declared will be marked.</li>
                                <li>No juggling while taking a catch after 1 tip.</li>
                                <li>Wide / No ball - 2 runs.</li>
                                <li>Movement of Legs while bowling will not be allowed. Bowler will have to stand in the square box and bowl.</li>
                                <li>Hand Swing while bowling will be restricted and umpires decision will be the final decision on this.</li>
                                <li>Angle between the bowling hand and the body should be less than 30 degrees. The bend of the elbow should also be less than 30 degrees.</li>
                                <li>No ball criteria: (Above Waist height) 2nd bounce is no ball and direct (full toss) above knee level is no ball.</li>
                                <li>Wide + stumping = Wicket +1 run(Ball not counted)</li>
                                <li>If ball crosses the boundaries directly after touching a player, runs will be given accordingly. </li>
                                <li>The batsmen will be not-out.</li>
                                <li><span>Challenge Over</span> : The batting team has to select an over. The batting team will then tell the umpire the number of runs they have set as a target for that over. If they achieve it, the no. of runs that they have set for that over, will double. If they fail, they will be given no runs for that over, it will be counted as a maiden over. (Eg. If the batting team selects the 2nd over as the challenge over, and sets a target of 10 runs for that over. If they score 10 or more, they will get 20 runs. If they fail they'll get 0)
                                </li>
                                <li>If the batting team doesn't select a challenge over, then by default last over will be considered as challenge over.</li>
                                <li>On the fall of every wicket in the challenge over, 3 runs will be deducted from the score each time.</li>

                            </ul>
                        </div>

                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">team </div>
                                <div class="column"> &#x20b9; 6,000</div>
                                <div class="column"> &#x20b9; 2,500</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">TEAM</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 800</div>
                            </div>
                        </div>
                        <h6 class="content-heading">Event Heads</h6>
                        <p class="content">
                            Rachit Jain: 7977579880
                            <br>
                            Jenil Gosar: 9619638731
                            <br>
                            Dhairya Shah :9920609969
                            <br>
                        </p>
                    </div>
                    <!-- END OF BOYS SECTION -->


                </div>
                <!-- END OF BOX CRICKET -->



                <!-- LAWN TENNIS-->
                <div class="event  animated faster slidInUp hidden lawn-tennis">
                    <h3 class="gender selected boys-option">boys</h3>
                    <h3 class="gender girls-option">girls</h3>

                    <!-- BOYS-->
                    <div id="boys" class="hidden">

                        <h6 class="content-heading">Rules</h6>
                        <div class="content">
                            <ul>
                                <li>Singles event only</li>
                                <li>Direct knockout format</li>
                                <li>Non-Marking Shoes are compulsory</li>
                            </ul>
                        </div>

                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">singles </div>
                                <div class="column"> &#x20b9; 4,000</div>
                                <div class="column"> &#x20b9; 1,800</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">SINGLES</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 450/-</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Event Heads</h6>
                        <p class="content">
                            Kruthika Gangaraju: 8424998412
                            <br>
                            Shreya Ughade: 9757297544
                        </p>
                    </div>
                    <!-- END OF BOYS SECTION -->

                    <!-- GIRLS-->
                    <div id="girls" class="hidden">
                        <h6 class="content-heading">Rules</h6>
                        <div class="content">
                            <ul>
                                <li>Singles event only</li>
                                <li>Direct knockout format</li>
                                <li>Non-Marking Shoes are compulsory</li>
                            </ul>
                        </div>

                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">singles</div>
                                <div class="column"> &#x20b9; 2,000</div>
                                <div class="column"> &#x20b9; 800</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">SINGLES</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 200/-</div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF GIRLS SECTION -->
                </div>
                <!-- END OF LAWN TENNIS -->


                <!-- SQUASH-->
                <div class="event  animated faster slidInUp hidden squash">
                    <h3 class="gender selected boys-option">boys</h3>
                    <h3 class="gender girls-option">girls</h3>

                    <!-- BOYS-->
                    <div id="boys" class="hidden">

                        <h6 class="content-heading">Rules</h6>
                        <div class="content">
                            <ul>
                                <li>Singles event only</li>
                                <li>Best of 3 games</li>
                                <li>Semi-finals and finals, best of 5.</li>
                            </ul>
                        </div>

                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">singles </div>
                                <div class="column"> &#x20b9; 2,700</div>
                                <div class="column"> &#x20b9; 1,200</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">SINGLES</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 400/-</div>
                            </div>
                        </div>
                        <h6 class="content-heading">Event Heads</h6>
                        <p class="content">
                            Jugal Chauhan: 9594999300
                            <br>
                            Vipul Dube: 7208430810
                        </p>
                    </div>
                    <!-- END OF BOYS SECTION -->

                    <!-- GIRLS-->
                    <div id="girls" class="hidden">

                        <h6 class="content-heading">Rules</h6>
                        <div class="content">
                            <li>Singles event only</li>
                            <li>Best of 3 games</li>
                            <li>Semi-finals and finals, best of 5.</li>
                        </div>

                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">singles</div>
                                <div class="column"> &#x20b9; 1,500</div>
                                <div class="column"> &#x20b9; 500</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">SINGLES</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 150/-</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Event Heads</h6>
                        <p class="content">
                            Anushka Darade: 9594408667
                        </p>
                    </div>
                    <!-- END OF GIRLS SECTION -->
                </div>
                <!-- END OF SQUASH -->



                <!-- TABLE TENNIS-->
                <div class="event  animated faster slidInUp hidden table-tennis">
                    <h3 class="gender selected boys-option">boys</h3>
                    <h3 class="gender girls-option">girls</h3>

                    <!-- BOYS-->
                    <div id="boys" class="hidden">

                        <h6 class="content-heading">Rules</h6>
                        <div class="content">
                            <ul>
                                <li>All matches will be played as a best of 5 games between 3 players from each team.</li>
                                <li>Matches will be strictly conducted according to TTFI rules.</li>
                                <li>Singles event and Team event.</li>
                                <li>No. of players per team : 5 maximum,3 minimum.</li>
                                <li>Direct knockout format for singles event and league format for the team event.</li>
                            </ul>
                        </div>

                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">singles </div>
                                <div class="column"> &#x20b9; 2,500</div>
                                <div class="column"> &#x20b9; 1,800</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">team </div>
                                <div class="column"> &#x20b9; 5,500</div>
                                <div class="column"> &#x20b9; 2,500</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">SINGLES</div>
                                <div class="column">TEAM</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 350</div>
                                <div class="column">&#x20b9; 600</div>
                            </div>
                        </div>
                        <h6 class="content-heading">Event Heads</h6>
                        <p class="content">
                            Dhruv Bid: 9930119556
                            <br>
                            Dhvanit Bhimani: 9870774815
                        </p>
                    </div>
                    <!-- END OF BOYS SECTION -->

                    <!-- GIRLS-->
                    <div id="girls" class="hidden">

                        <h6 class="content-heading">Rules</h6>
                        <div class="content">
                            <li>Only singles event</li>
                            <li>Guidelines laid down by TTFI will be followed for the tournament</li>
                            <li>Tournament will be conducted in a league format</li>
                        </div>

                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">singles </div>
                                <div class="column"> &#x20b9; 2,500</div>
                                <div class="column"> &#x20b9; 1,000</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">SINGLES</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 300</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Event Heads</h6>
                        <p class="content">
                            Tanisha Ashar: 8976284930
                            <br>
                            Karan Pandya: 9930833040
                        </p>
                    </div>
                    <!-- END OF GIRLS SECTION -->
                </div>
                <!-- END OF TABLE TENNIS -->


                <!-- CARROM-->
                <div class="event  animated faster slidInUp hidden carrom">
                    <h3 class="gender selected boys-option">boys</h3>
                    <h3 class="gender girls-option">girls</h3>

                    <!-- BOYS-->
                    <div id="boys" class="hidden">

                        <h6 class="content-heading">Rules</h6>
                        <div class="content">
                            <ul>
                                <li>All university rules applicable</li>
                                <li>Singles and doubles event</li>
                                <li>In doubles, both the players should be from the same college</li>
                                <li>Direct knockout format</li>
                            </ul>
                        </div>

                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">singles </div>
                                <div class="column"> &#x20b9; 2,000</div>
                                <div class="column"> &#x20b9; 800</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">doubles </div>
                                <div class="column"> &#x20b9; 3,500</div>
                                <div class="column"> &#x20b9; 1,500</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">SINGLES</div>
                                <div class="column">DOUBLES</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 100</div>
                                <div class="column">&#x20b9; 300</div>
                            </div>
                        </div>
                        <h6 class="content-heading">Event Heads</h6>
                        <p class="content">
                            Jeet Mehta: 9870772737
                            <br>
                            Deep Shah: 7498560754
                            <br>
                            Akshar Barchha :7977861078
                        </p>
                    </div>
                    <!-- END OF BOYS SECTION -->

                    <!-- GIRLS-->
                    <div id="girls" class="hidden">
                        <h6 class="content-heading">Rules</h6>
                        <div class="content">
                            <li>All university rules applicable</li>
                            <li>Singles event</li>
                            <li>Direct knockout format</li>
                        </div>

                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">singles </div>
                                <div class="column"> &#x20b9; 1,500</div>
                                <div class="column"> &#x20b9; 800</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">SINGLES</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 150</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Event Heads</h6>
                        <p class="content">
                            Deepika Mantri: 7588352761
                            <br>
                            Pooja Shah: 9022635304
                        </p>
                    </div>
                    <!-- END OF GIRLS SECTION -->
                </div>
                <!-- END OF CARROM -->


                <!-- CHESS-->
                <div class="event  animated faster slidInUp hidden chess">
                    <h3 class="gender selected boys-option">boys</h3>
                    <h3 class="gender girls-option">girls</h3>

                    <!-- BOYS-->
                    <div id="boys" class="hidden">

                        <h6 class="content-heading">Rules</h6>
                        <div class="content">
                            <span>Traditional</span>
                            <ul>
                                <li>A Swiss League tournament will be conducted which will follow the rules laid down by the federation.</li>
                                <li>Number of rounds will be decided based on number of entries.</li>
                                <li>Time Control : 40 minutes per match.</li>
                                <li>2 illegal moves will result into a loss.</li>
                                <li>Other standard rules apply.</li>
                                <li>In case of tie after the last round, standings will be decided by tiebreaker/ progressive ratings/ rBH.</li>
                                The player has to report within 20 minutes of the start of round, failing which a bye will be <li>offered to the opponent.</li>
                            </ul>
                            <br>
                            <span>bughouse</span>
                            <ul>
                                <li>Team of two.</li>
                                <li>Both the players should be from the same college.</li>
                                <li>Time control will be 5|0.</li>
                                <li>Tournament will be conducted in Swiss league format.</li>
                            </ul>
                        </div>

                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                                <div class="columnn">3<sup>rd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">swiss league </div>
                                <div class="column"> &#x20b9; 3,000</div>
                                <div class="column"> &#x20b9; 1500</div>
                                <div class="column"> &#x20b9; 800</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">bughouse </div>
                                <div class="column"> &#x20b9; 1000</div>
                                <div class="column"></div>
                                <div class="column"></div>
                            </div>
                        </div>

                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">SWISS LEAGUE</div>
                                <div class="column">BUGHOUSE</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 150</div>
                                <div class="column">&#x20b9; 150</div>
                            </div>
                        </div>
                        <h6 class="content-heading">Event Heads</h6>
                        <p class="content">
                            Jeet Mehta: 9870772737
                            <br>
                            Deep Shah: 7498560754
                            <br>
                            Akshar Barchha :7977861078
                        </p>
                    </div>
                    <!-- END OF BOYS SECTION -->

                    <!-- GIRLS-->
                    <div id="girls" class="hidden">


                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">singles </div>
                                <div class="column"> &#x20b9; 1,500</div>
                                <div class="column"> &#x20b9; 800</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">SINGLES</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 150</div>
                            </div>
                        </div>
                        <h6 class="content-heading">Event Heads</h6>
                        <p class="content">
                            Deepika Mantri: 7588352761
                            <br>
                            Pooja Shah: 9022635304
                        </p>
                    </div>
                    <!-- END OF GIRLS SECTION -->
                </div>
                <!-- END OF CARROM -->


                <!-- ATHLETICS-->
                <div class="event  animated faster slidInUp hidden athletics">
                    <h3 class="gender selected boys-option">boys</h3>
                    <h3 class="gender girls-option">girls</h3>

                    <!-- BOYS-->
                    <div id="boys" class="hidden">
                        <h6 class="content-heading">Events</h6>
                        <div class="content">
                            <ul>
                                <li>100m</li>
                                <li>200m</li>
                                <li>400m</li>
                                <li>800m</li>
                                <li>Relay</li>
                                <li>Shot Put</li>
                                <li>Long Jump</li>
                            </ul>
                        </div>

                        <h6 class="content-heading">Rules</h6>
                        <div class="content">
                            The tournament will follow the latest rules laid down by the Athletics Federation of India.
                        </div>

                        <!-- PRIZE SECTION -->
                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team no-margin">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">100M </div>
                                <div class="column"> &#x20b9; 1,200</div>
                                <div class="column"> &#x20b9; 500</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">200M </div>
                                <div class="column"> &#x20b9; 1,200</div>
                                <div class="column"> &#x20b9; 500</div>
                            </div>
                        </div>
                        <div class="prize-money team no-margin col-2">
                            <div class="winning-place">
                                <div class="column label">400M </div>
                                <div class="column"> &#x20b9; 1,200</div>
                                <div class="column"> &#x20b9; 500</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">800M </div>
                                <div class="column"> &#x20b9; 1,500</div>
                                <div class="column"> &#x20b9; 700</div>
                            </div>
                        </div>
                        <div class="prize-money team">
                            <div class="winning-place">
                                <div class="column label">Relay </div>
                                <div class="column"> &#x20b9; 2,500</div>
                                <div class="column"> &#x20b9; 1000</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">Shotput </div>
                                <div class="column"> &#x20b9; 1,000</div>
                                <div class="column"> &#x20b9; 400</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">Longjump </div>
                                <div class="column"> &#x20b9; 1,000</div>
                                <div class="column"> &#x20b9; 400</div>
                            </div>
                        </div>
                        <!-- END OF PRIZE SECTION -->


                        <!-- ENTRY FEE SECTION -->
                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee no-margin">
                            <div class="header">
                                <div class="column">100M</div>
                                <div class="column">200M</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 100</div>
                                <div class="column">&#x20b9; 100</div>
                            </div>
                        </div>
                        <div class="entry-fee no-margin">
                            <div class="header">
                                <div class="column">400M</div>
                                <div class="column">800M</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 100</div>
                                <div class="column">&#x20b9; 100</div>
                            </div>
                        </div>
                        <div class="entry-fee no-margin">
                            <div class="header">
                                <div class="column">RELAY</div>
                                <div class="column">SHOTPUT</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 600</div>
                                <div class="column">&#x20b9; 100</div>
                            </div>
                        </div>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">LONGJUMP</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 100</div>
                            </div>
                        </div>
                        <!-- END OF FEE SECTION -->
                        <br>
                        <h6 class="content-heading">Event Heads</h6>
                        <p class="content">
                            Agam Shah: 88888 85580
                            <br>
                            Kaitav Parikh: 9619300969
                        </p>
                    </div>
                    <!-- END OF BOYS SECTION -->

                    <!-- GIRLS-->
                    <div id="girls" class="hidden">

                        <h6 class="content-heading">Events</h6>
                        <div class="content">
                            <ul>
                                <li>100M</li>
                                <li>200M</li>
                                <li>400M</li>
                                <li>Relay</li>
                                <li>Shotput</li>
                            </ul>
                        </div>

                        <h6 class="content-heading">Rules</h6>
                        <div class="content">
                            The tournament will follow the latest rules laid down by the Athletics Federation of India
                        </div>

                        <!-- PRIZE SECTION -->
                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team no-margin">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">100M </div>
                                <div class="column"> &#x20b9; 1,200</div>
                                <div class="column"> &#x20b9; 500</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">200M </div>
                                <div class="column"> &#x20b9; 1,200</div>
                                <div class="column"> &#x20b9; 500</div>
                            </div>
                        </div>
                        <div class="prize-money team no-margin col-2">
                            <div class="winning-place">
                                <div class="column label">400M </div>
                                <div class="column"> &#x20b9; 1,200</div>
                                <div class="column"> &#x20b9; 500</div>
                            </div>
                        </div>
                        <div class="prize-money team">
                            <div class="winning-place">
                                <div class="column label">Relay </div>
                                <div class="column"> &#x20b9; 2,500</div>
                                <div class="column"> &#x20b9; 1000</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">Shotput </div>
                                <div class="column"> &#x20b9; 1,000</div>
                                <div class="column"> &#x20b9; 400</div>
                            </div>
                        </div>
                        <!-- END OF PRIZE SECTION -->

                        <!-- ENTRY FEE SECTION -->
                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee no-margin">
                            <div class="header">
                                <div class="column">100M</div>
                                <div class="column">200M</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 100</div>
                                <div class="column">&#x20b9; 100</div>
                            </div>
                        </div>
                        <div class="entry-fee no-margin">
                            <div class="header">
                                <div class="column">400M</div>
                                <div class="column">RELAY</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 100</div>
                                <div class="column">&#x20b9; 600</div>
                            </div>
                        </div>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">SHOTPUT</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 100</div>
                            </div>
                        </div>
                        <!-- END OF ENTRY FEE SECTION -->

                        <h6 class="content-heading">Event Heads</h6>
                        <p class="content">
                            Shruti Gosain: 9757283521
                            <br>
                            Jay Shah: 9769593915
                        </p>
                        <br>
                    </div>
                    <!-- END OF GIRLS SECTION -->
                </div>
                <!-- END OF ATHLETICS -->


                <!--BASKETBALL-->
                <div class="event  animated faster slidInUp hidden basketball">
                    <h3 class="gender selected boys-option">boys</h3>
                    <h3 class="gender girls-option">girls</h3>

                    <!-- BOYS-->
                    <div id="boys" class="hidden">
                        <h6 class="content-heading">Event Heads</h6>
                        <p class="content">
                            Deep Shah: 9870404085
                            <br>
                            Kunal Jain: 9920338372
                        </p>

                        <h6 class="content-heading">Rules</h6>
                        <div class="content">
                            <ul>
                                <li>No. of players per team : 5+7</li>
                                <li>Direct knockout format</li>
                                <li>Quarter length :9 minutes running</li>
                                <li>Colours and kits are compulsory</li>
                                <li>All matches will be played according to FIBA rules</li>
                            </ul>
                        </div>

                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">team </div>
                                <div class="column"> &#x20b9; 15,000</div>
                                <div class="column"> &#x20b9; 7,000</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">TEAM</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 1,500</div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <!-- END OF BOYS SECTION -->

                    <!-- GIRLS-->
                    <div id="girls" class="hidden">
                        <h6 class="content-heading">Event Heads</h6>
                        <p class="content">
                            Labdhi Jain: 9930390635
                            <br>
                            Aditi Joisher: 8291415239
                        </p>

                        <h6 class="content-heading">Rules</h6>
                        <div class="content">
                            <ul>
                                <li>No. of players per team : 5+7</li>
                                <li>Direct knockout format</li>
                                <li>Quarter length :9 minutes running</li>
                                <li>Colours and kits are compulsory</li>
                                <li>All matches will be played according to FIBA rules</li>
                            </ul>
                        </div>

                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">team </div>
                                <div class="column"> &#x20b9; 6,000</div>
                                <div class="column"> &#x20b9; 2,700</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">TEAM</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 800</div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <!-- END OF GIRLS SECTION -->
                </div>
                <!-- END OF BASKETBALL -->




                <!-- VOLLEYBALL-->
                <div class="event  animated faster slidInUp hidden volleyball">
                    <h3 class="gender selected boys-option">boys</h3>
                    <h3 class="gender girls-option">girls</h3>

                    <!-- BOYS-->
                    <div id="boys" class="hidden">
                        <h6 class="content-heading">Event Heads</h6>
                        <p class="content">
                            Krunal Dattani: 8425935778
                            <br>
                            Paresh Shelke: 8689948183
                            <br>
                            Soham Mehta : 8433617151
                        </p>

                        <h6 class="content-heading">Rules</h6>
                        <div class="content">
                            <ul>
                                <li>No. of players per team : 6+6</li>
                                <li>Best of 3 sets</li>
                                <li>All the rules and standards to be followed, apart from above mentioned, are according to FIVB</li>
                                <li>Libero kit should be of a different colour</li>
                                <li>Direct knockout format</li>
                            </ul>
                        </div>

                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">team </div>
                                <div class="column"> &#x20b9; 13,000</div>
                                <div class="column"> &#x20b9; 6,000</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">TEAM</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 1,200</div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <!-- END OF BOYS SECTION -->

                    <!-- GIRLS-->
                    <div id="girls" class="hidden">
                        <h6 class="content-heading">Event Heads</h6>
                        <p class="content">
                            Akanksha Shridharani: 8452029290
                            <br>
                            Kajal Shethia: 7021724900
                            <br>
                        </p>

                        <h6 class="content-heading">Rules</h6>
                        <div class="content">
                            <ul>
                                <li>No. of players per team : 6+6.</li>
                                <li>Best of 3 sets.</li>
                                <li>All the rules and standards to be followed, apart from above mentioned, are according to FIVB.</li>
                                <li>Libero kit should be of a different colour.</li>
                                <li>Direct knockout format.</li>
                            </ul>
                        </div>

                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">team </div>
                                <div class="column"> &#x20b9; 5,000</div>
                                <div class="column"> &#x20b9; 2,500</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">TEAM</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 700</div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF GIRLS SECTION -->
                </div>
                <!-- END OF VOLLEYBALL -->


                <!-- THROWBALL-->
                <div class="event  animated faster slidInUp hidden throwball">
                    <h3 class="gender boys-option selected">girls</h3>

                    <!-- GIRLS-->
                    <div id="boys" class="hidden">
                        <h6 class="content-heading">Event Heads</h6>
                        <p class="content">
                            Debdatta Kundu: 8169206478
                            <br>
                            Shreya Kulkarni: 8454918491
                            <br>
                        </p>

                        <h6 class="content-heading">Rules</h6>
                        <div class="content">
                            <ul>
                                <li>No. of players per team : 7+4</li>
                                <li>Tournament will be conducted in league format</li>
                                <li>Match will be best of three games</li>
                            </ul>
                        </div>

                        <h6 class="content-heading">Prize</h6>
                        <div class="prize-money team">
                            <div class="header">
                                <div class="column"></div>
                                <div class="column">1<sup>st</sup> Place</div>
                                <div class="column">2<sup>nd</sup> Place</div>
                            </div>
                            <div class="winning-place">
                                <div class="column label">team </div>
                                <div class="column"> &#x20b9; 3,500</div>
                                <div class="column"> &#x20b9; 1,500</div>
                            </div>
                        </div>

                        <h6 class="content-heading">Entry Fee</h6>
                        <div class="entry-fee">
                            <div class="header">
                                <div class="column">TEAM</div>
                            </div>
                            <div class="fee">
                                <div class="column">&#x20b9; 400</div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF GIRLS SECTION -->

                </div>
            </div>
            <!-- END OF LEFT SECTION -->

            <!-- RIGHT SECTION -->
            <div class="events-info desktop">
                <div class="heading-container sport">
                    <div class="divider long animated faster slideInUp"></div>
                    <h6 class="event-heading animated faster slideInUp">Events</h6>
                </div>

                <div class="football heading-container hidden">
                    <div class="divider long animated faster slideInUp"></div>
                    <h6 class="event-heading animated faster slideInUp">Football</h6>
                </div>

                <div class="badminton heading-container hidden">
                    <div class="divider long animated faster slideInUp"></div>
                    <h6 class="event-heading animated faster slideInUp">Badminton</h6>
                </div>

                <div class="cricket heading-container hidden">
                    <div class="divider long animated faster slideInUp"></div>
                    <h6 class="event-heading animated faster slideInUp">Cricket</h6>
                </div>

                <div class="rink-football heading-container hidden">
                    <div class="divider long animated faster slideInUp"></div>
                    <h6 class="event-heading animated faster slideInUp">Rink Football</h6>
                </div>

                <div class="box-cricket heading-container hidden">
                    <div class="divider long animated faster slidInUp"></div>
                    <h6 class="event-heading animated faster slidInUp">Box Cricket</h6>
                </div>

                <div class="squash heading-container hidden">
                    <div class="divider long animated faster slidInUp"></div>
                    <h6 class="event-heading animated faster slidInUp">squash</h6>
                </div>

                <div class="lawn-tennis heading-container hidden">
                    <div class="divider long animated faster slidInUp"></div>
                    <h6 class="event-heading animated faster slidInUp">Lawn Tennis</h6>
                </div>

                <div class="table-tennis heading-container hidden">
                    <div class="divider long animated faster slidInUp"></div>
                    <h6 class="event-heading animated faster slidInUp">Table Tennis</h6>
                </div>

                <div class="carrom heading-container hidden">
                    <div class="divider long animated faster slidInUp"></div>
                    <h6 class="event-heading animated faster slidInUp">Carrom</h6>
                </div>

                <div class="athletics heading-container hidden">
                    <div class="divider long animated faster slidInUp"></div>
                    <h6 class="event-heading animated faster slidInUp">Athletics</h6>
                </div>

                <div class="basketball heading-container hidden">
                    <div class="divider long animated faster slidInUp"></div>
                    <h6 class="event-heading animated faster slidInUp">Basketball</h6>
                </div>

                <div class="volleyball heading-container hidden">
                    <div class="divider long animated faster slidInUp"></div>
                    <h6 class="event-heading animated faster slidInUp">Volleyball</h6>
                </div>

                <div class="throwball heading-container hidden">
                    <div class="divider long animated faster slidInUp"></div>
                    <h6 class="event-heading animated faster slidInUp">Throwball</h6>
                </div>
            </div>
            <!--END OF RIGHT SECTION -->

            <!-- ADDING THE INFINITE COUNTERS -->
            <!-- ADDING THE INFINITE COUNTERS -->
            <div class="counters">
                <div class="counter"></div>
                <div class="counter"></div>
                <div class="counter"></div>
                <div class="counter"></div>
                <div class="counter"></div>
                <div class="counter"></div>
                <div class="counter"></div>
                <div class="counter"></div>
                <div class="counter"></div>
                <div class="counter"></div>
                <div class="counter"></div>
                <div class="counter"></div>
                <div class="counter"></div>
                <div class="counter"></div>
                <div class="counter"></div>
                <div class="counter"></div>
                <div class="counter"></div>
                <div class="counter"></div>
                <div class="counter"></div>
                <div class="counter"></div>
            </div>
            <!-- END OF INFINITE COUNTERS -->
            <!-- END OF INFINITE COUNTERS -->
    </section>

    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BOOSTRAP 3 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- GLOBAL SCRIPT -->
    <script src="../../index.js"></script>
    <script src="./events.js"></script>
</body>

</html>
