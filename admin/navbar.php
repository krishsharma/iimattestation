<ul id="global" class="dropdown-content">
    <li><a href="<?php echo $_SESSION['baseurl']; ?>common/company-details.php">Company Details</a></li>
    <li class="divider"></li>
    <li><a href="<?php echo $_SESSION['baseurl']; ?>common/testimonials-section.php">Testimonials Section</a></li>
    <li class="divider"></li>
    <li><a href="<?php echo $_SESSION['baseurl']; ?>common/footer-section.php">Footer Section</a></li>
</ul>
<nav class="green lighten-1">
    <div class="nav-wrapper">
        <a href="#!" class="brand-logo">
            <img src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/iimattestation/images/logo.png">
        </a>
        <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Home</a></li>
            <li><a href="badges.html">About</a></li>
            <li><a href="badges.html">Profile</a></li>
            <li><a href="badges.html">Apostille</a></li>
            <li><a href="badges.html">Attestation</a></li>
            <li><a href="badges.html">Services</a></li>
            <li><a href="badges.html">Contact</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="global">Common Section<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
    </div>
    <?php
    if (isset($_SESSION['status'])) {
        if ($_SESSION['status'] == TRUE) {
            echo "<div class='popup msg-succ'>" . $_SESSION['message'] . "</div>";
        } else {
            echo "<div class='popup msg-err'>" . $_SESSION['message'] . "</div>";
        }
    }
    ?>
</nav>