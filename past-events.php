<!doctype html>
<html lang="en">

<head>
    <title>Events</title>
    <?php include 'components/header.php'; ?>
</head>

<body>
    <?php include 'components/navbar.php'; ?>

    <!-- events -->


    <!-- EVENTS SECTION -->

    <!-- heading -->
    <h1 class="events_heading text-center display-4">PAST EVENTS</h1>

    <!-- events -->
    <?php
    $past_events = array(
        array(
            "title" => "<b>Plogging and Plantation Drive</b>",
            "subtitle" => "Green India",
            "description" => "The NSS team regularly organized Plogging and Plantation Drives as part of our
            initiatives. These activities involve collecting litter, promoting cleanliness and
            environmental consciousness. Additionally, plantation drives were conducted to
            contribute to the greening of the surroundings. On the occasion of Gandhi Jayanti,
            a special event was organized, aligning with Mahatma Gandhi's principles of
            cleanliness and sustainable living. ",
            "date" => "Oct 02 2022",
            "image" => "./static/images/past-events-22-23/Plantation.webp"
        ),
        array(
            "title" => "<b>Swachhta Pakhwada</b>",
            "subtitle" => "Clean India",
            "description" => "We began the Swachhta Pakhwada with a pledge, emphasizing the importance of
            cleanliness. The event was enriched with various activities aimed at promoting
            cleanliness and sustainability. A cleaning drive was conducted to tidy up the
            surroundings, followed by a plantation initiative to enhance the greenery.
            Additionally, engaging activities like pot painting, paper bag making, and a best
            out of waste campaign were organized, encouraging creativity and resourcefulness.",
            "date" => "Sep 03, 2022 ",
            "image" => "./static/images/past-events-22-23/Swachta.webp",
        ),
        array(
            "title" => "<b>Self defense training</b>",
            "subtitle" => "Self Defense",
            "description" => "NSS IIT Bhilai is organizing a self-defense training program at the campus,
            spanning 15 classes throughout the semester. Recognizing the significance of
            self-defense, particularly for women, in today's world, the initiative aims to equip
            individuals with essential skills and knowledge to protect themselves.",
            "date" => "Feb 24, 2020 to Mar 15 2020",
            "image" => "./static/images/past-events-22-23/",
        ),
        array(
            "title" => "<b>Visit to Akshaya Patra</b>",
            "subtitle" => "Outing",
            "description" => "NSS IIT Bhilai had an enriching experience visiting the Akshaya Patra
            Foundation's kitchen in Raipur. The foundation, known for its school lunch
            program benefiting millions of children, invited the students to witness the logistics
            behind their large-scale operation.
            ",
            "date" => "Aug 03, 2019 to Aug 04,2019 ",
            "image" => "./static/images/images2/5.webp",
        ),
        array(
            "title" => "<b>SOS Children's Village Visit</b>",
            "subtitle" => "Workshop",
            "description" => "The women volunteers of NSS IIT Bhilai visited an orphanage in Raipur to
            connect with the girls residing there. They shared their personal experiences as
            IITians, inspiring the girls to dream big and pursue higher education. Through
            engaging games and activities, they created a joyful and inclusive atmosphere,
            fostering a sense of camaraderie. ",
            "date" => "Feb 12, 2023 ",
            "image" => "./static/images/past-events-22-23/SOS_visit.webp",
        ),
        array(
            "title" => "<b>Tinkering Lab</b>",
            "subtitle" => "Workshop",
            "description" => "After actively engaging in various social service activities, the NSS team decided
            to embark on an educational tour. Collaborating with the Epsilon Club, the
            Robotics club of IIT Bhilai, we visited the Atal Tinkering Labs (ATL) at BSP
            Senior Secondary School in Bhilai.
            ",
            "date" => "Jan 24, 2020 ",
            "image" => "./static/images/past-events-22-23/Tinkering.webp",
        ),
        array(
            "title" => "<b>Blood Donation Camp</b>",
            "subtitle" => "Blood Donation",
            "description" => "The NSS team is actively involved in organizing blood donation camps at least
            once every semester. In collaboration with AIIMS Raipur, we recently conducted a
            voluntary blood donation camp at IIT Bhilai. The camp aimed to encourage
            individuals to donate blood, emphasizing the importance of this noble act in saving
            lives. We expressed our gratitude to all the donors by presenting them with
            certificates as a token of appreciation for their selfless contribution.",
            "date" => "Apr 03, 2023 ",
            "image" => "./static/images/past-events-22-23/Blood_Donation.webp",
        ),
        array(
            "title" => "<b>BLS Training Session</b>",
            "subtitle" => "Training",
            "description" => "The NSS in collaboration with Health Center at IIT Bhilai successfully organized a
            Basic Life Support (BLS) training session for the faculty, staff, and students. The
            event aimed to equip participants with essential skills and knowledge to respond
            effectively in emergency situations. The Head of Department, Emergency and
            Critical Care from Ramakrishna Care Hospital graced the session with their
            expertise, sharing valuable insights on BLS.",
            "date" => "Apr 20, 2023 ",
            "image" => "./static/images/past-events-22-23/BLS_Training.webp",
        ),
        array(
            "title" => "<b>Cloth Donation Drive</b>",
            "subtitle" => "Donation",
            "description" => "The NSS team has been actively conducting cloth donation drives as part of their
            philanthropic initiatives. In collaboration with Goonj NGO, we previously
            organized a successful cloth donation drive. This time, we partnered with Smile
            Bringing NGO to carry out another donation drive as we were transitioning from
            our transit campus. The outgoing batch of 2023 actively participated in the drive,
            generously donating clothes for those in need.",
            "date" => "Apr 20, 2023 ",
            "image" => "./static/images/past-events-22-23/Cloth_donation.webp",
        ),
        // Please fill this
    )

    ?>
    <div class="events_class pb-5">
        <?php foreach ($past_events as $event) : ?>
            <div class="blog-card mt-5">
                <div class="meta">
                    <div class="photo" style="background-image: url(<?= $event['image']; ?>)"></div>
                    <ul class="details">
                        <li class="date"><?= $event['date']; ?></li>
                    </ul>
                </div>
                <div class="description">
                    <div class="blueButter p-1">
                        <h1><?= $event['title']; ?></h1>
                        <h2><?= $event['subtitle']; ?></h2>
                        <p><?= $event['description']; ?> </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

 </div>

<!-- footer -->
<?php include 'components/footer.php'; ?>


<!-- jQuery-->
<?php include 'components/scripts.php'; ?>

</body>

</html>