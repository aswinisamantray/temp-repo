<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-light fixed-top">
<!-- style="background: " -->
    <!-- <a href="./index.php" class="navbar-brand hvr-buzz-out">NSS</a>  -->
    <div class="navbar-header">
        <a href="./index.php" id="nss-nav" class="navbar-brand hvr-grow">
            <img src="./static/images/new_logo.png" alt="" width="50pc" padding="0" margin="0"/>
            NSS</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item pr-1">
                <a href="./index.php#section-2" class="nav-link" style="font-family: sans-serif; color:black;">ABOUT</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="./team.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                    EVENTS
                </a> 
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a href="./events.php" class="dropdown-item">Upcoming events</a>
            <a href="./past-events.php" class="dropdown-item">Past Events</a>
            </div>
                <!-- <a href="./events.php" class="nav-link ">EVENTS</a> -->
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="./team.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                    OUR TEAM
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./team-23-24.php">TEAM 2023-2024</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="./team-22-23.php">TEAM 2022-2023</a>
                    <a class="dropdown-item" href="./team-21-22.php">TEAM 2021-2022</a>
                    <a class="dropdown-item" href="./team-20-21.php">TEAM 2020-2021</a>
                    <a class="dropdown-item" href="./team-19-20.php">TEAM 2019-2020</a>
                    <a class="dropdown-item" href="./team-18-19.php">TEAM 2018-2019</a>
                    <a class="dropdown-item" href="./team-17-18.php">TEAM 2017-2018</a>
                    <a class="dropdown-item" href="./team-16-17.php">TEAM 2016-2017</a>
                </div>
            </li>

            <li class="nav-item pr-1">
                <a href="./gallery.php" class="nav-link " >GALLERY</a>
            </li>
            <!-- <li class="nav-item pr-1">
                    <a href="./oauth.php" class="nav-link hvr-hang">CHECK HOURS</a>
                </li> -->
        </ul>
        <!-- redirect_uri=http%3A%2F%2Fnss.iitbhilai.ac.in%2Foauth3.php&amp; -->
        <ul class="nav navbar-nav ml-auto">
            <li>

                <?php
                require_once './config.php';
                $href_prefix = "https://accounts.google.com/o/oauth2/auth?response_type=code&amp;access_type=online&amp;client_id=486063441077-fdq512bmjn0c5uu454qglqamrb0alu1e.apps.googleusercontent.com&amp;state&amp;scope=email%20profile&amp;approval_prompt=auto";

                $redirect_uri = $BASE_URL . "/oauth.php";
                $check_hours_href = $href_prefix . "&amp;redirect_uri=" . urlencode($redirect_uri)
                ?>

                <a href="<?php echo $check_hours_href ?>" data-front="CHECK HOURS" data-back="back">
                    <button type="button" id="hours" class="btn glow-on" style="border-radius : .25rem; font-size: large; color:white; background: linear-gradient(-30deg, #3d0b0b 50%, #2b0808 50%);">
                        CHECK HOURS
                    </button>
                </a>

            </li>
        </ul>
    </div>
  </nav>

