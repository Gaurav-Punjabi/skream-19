
<div class="sidebar-wrapper close">
    <nav>
        <?php
            $options = ['home', 'events', 'rules', 'accomodation', 'registration', 'parvaah', 'sponsors', 'contact'];
            $links = ['../home/home.php', '../events/events.php', '../rules/rules.php', '../accomodation/accomodation.php', '../registration/registration.php', '../parvaah/parvaah.php', '../sponsors/sponsors.php', '../contact/contact.php'];
            for($i=0;$i<sizeof($options);$i++) {
        ?>
        <a href="<?php echo $links[$i] ?>" class="animated fadeInUp"><li class="sidebar-option animated"> <?php echo $options[$i]; ?> </li></a>
        <?php
            }
        ?>
    </nav>
</div>