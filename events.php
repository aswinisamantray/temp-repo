<!doctype html>
<html lang="en">

<head>
    <title>Events</title>
    <?php include 'components/header.php'; ?>
</head>
<body>
    <?php include 'components/navbar.php'; ?>


    <!-- <h2 class="events_heading text-center display-4">UPCOMING EVENTS</h2> -->

    <!-- events -->
    <div class="container" style="margin:auto !important;">
    <!-- page-container-1 -->
        <div class="module">
        <h2 class="events_heading text-center display-4" id="heading" style="color:#DE5935;">Upcoming Events</h2>
            <div class="subtitle my-3" style="font-size: larger;">NSS</div>
            <?php
            $upcoming_events = array(
                array(
                    "name" => "SEJBAHAR SURVEY",
                    "date" => "SAT, 4th or 5th January 2020",
                    "description" => "We will be conducting sejbahar's survey to get an idea about the problems in this village and also will
                    try to solve them."
                ),
                array(
                    "name" => "TINKERING LAB VISIT",
                    "date" => "SAT, 11th or 12th January 2020",
                    "description" => "We will be visiting schools in bhilai having tinkering lab and will motivate the students for new projects."
                ),
                array(
                    "name" => "SAFETY EVENTS",
                    "date" => "SAT, 18th or 19th January 2020",
                    "description" => "It includes fire fighting and first-aid training."
                ),
                array(
                    "name" => "PLANTATION AND WATERING",
                    "date" => "Regular Activity",
                    "description" => "Will plant on every birthday."
                ),
                array(
                    "name" => "TEACHING CELL",
                    "date" => "Regular Activity",
                    "description" => "To teach childrens of Sejbahar."
                ),
                array(
                    "name" => "MEDICAL CHECKUP IN SEJBAHAR",
                    "date" => "After 1st Tierce",
                    "description" => "In collaboration with NSS AIIMS Raipur, this camp will be organised in Sejabahar."
                ),
                array(
                    "name" => "BLOOD DONATION",
                    "date" => "After 1st Tierce",
                    "description" => "Self-explanatory."
                ),
                array(
                    "name" => "SELF DEFENCE TRAINING",
                    "date" => "Regular Activity",
                    "description" => "Self-explanatory."
                ),
                array(
                    "name" => "TRAFFIC MANAGEMENT.",
                    "date" => "Regular Activity",
                    "description" => "Will help officers to maintain the traffic."
                ),
                array(
                    "name" => "OTHER ACTIVITIES.",
                    "date" => "Will decide that later.",
                    "description" => "It includes cleanliness drivess, poster making and may be paper bag making."
                ),
                // Fill this please
            )
            ?>
            <!-- <ul class="events-list row d-flex justify-content-around"> -->

                
         <!-- </div> -->
<div class="container">
 <div class="row my-2 mx-3">
 <!-- style="display:flex; column-gap:9rem; flex-wrap: wrap; position:relative;" -->
 <!-- width:1000px; -->
     <?php foreach ($upcoming_events as $event) : ?>
        <div class="col-md-4" style="margin-bottom:12px;">
        <!-- id="card" -->
       <div class="card my-4" style="width:15rem; background:white; filter: drop-shadow(2px 2px 6px gray); margin:auto !important;">
       <!-- F7F7F7 -->
                <!-- #e6e6e6 -->
         <!-- <span class="position-relative translate-middle badge rounded-pill bg-success" style="left:90%; zIndex:1; word-wrap: break-word;">
         
            </span> -->
        <img src="static/images/new_logo.png" class="card-img-top" alt="..." style="width:15rem;"/>
        
        <div class="bg-transparent" style="color:black; text-align:center; font-family:'Lexend Deca'"><?= $event['date']; ?></div>
        <div class="card-body" style="background: linear-gradient(-30deg, #3d0b0b 50%, #2b0808 50%);">
        <!-- #F7F7F7 background:linear-gradient(170deg, rgba(49, 57, 73, 0.8) 20%,rgba(49, 57, 73, 0.5) 35%, rgba(41, 48, 61, 0.8) 45%, rgba(49, 57, 73, 0.5) 75%), linear-gradient(45deg, white 0%, white 50%, rgb(255 255 255) 100%) red; color:white;-->
          <h5 class="card-title" style="color:white;">
          <?= $event['name']; ?>
          </h5>
          <!-- <p class="card-text" style="font-family:cursive;"><?= $event['description']; ?></p> -->
          <a href="https://nss.iitbhilai.ac.in" target="_blank" class="btn btn-sm glow-on-hover my-2" style="color:white !important; width:10rem;">Register</a>
        </div>
    </div>

  </div>
 <?php endforeach; ?>
 </div>
</div>
</div>
</div>
<!-- </ul> -->

    <!-- footer -->
    <?php include 'components/footer.php'; ?>


    <!-- jQuery-->
    <?php include 'components/scripts.php'; ?>

</body>

</html>