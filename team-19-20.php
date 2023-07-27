<!doctype html>
<html lang="en">

<head>

    <title>2019-2020 Team</title>
    <?php include 'components/header.php'; ?>

</head>

<body>
    <?php include 'components/navbar.php'; ?>


    <?php
    $data = array(
        "Faculty Incharge" => array(
            array(
                "name" => "Dr. Suchetan Pal",
                "designation" => "Faculty Incharge",
                "email" => "suchetanp@iitbhilai.ac.in",
                "image" => "./static/images/team/suchetan.jpg"
            )
        ),
        "General Secretary" => array(
            array(
                "name" => "Prashant Kumar",
                "designation" => "General Secretary",
                "email" => "prashantk@iitbhilai.ac.in",
                "image" => "./static/images/team/prashant.jpeg"
            ),
        ),
        "Department Heads" => array(
            array(
                "name" => "Shalini Kumari",
                "designation" => "Executive",
                "email" => "shalinik@iitbhilai.ac.in",
                "image" => "./static/images/team/shalini.jpeg"
            ),
            array(
                "name" => "Tarun Singh",
                "designation" => "Executive",
                "email" => "taruns@iitbhilai.ac.in",
                "image" => "./static/images/team/tarun.jpeg"
            ),
            array(
                "name" => "Rishabh Ranjan",
                "designation" => "Executive",
                "email" => "rishabhr@iitbhilai.ac.in",
                "image" => "./static/images/team/rishabh.jpg"
            ),
            array(
                "name" => "Abhinav Anand",
                "designation" => "Executive",
                "email" => "abhinava@iitbhilai.ac.in",
                "image" => "./static/images/team/abhinav.jpeg"
            ),
            array(
                "name" => "Ishika",
                "designation" => "Education department",
                "email" => "ishikaj@iitbhilai.ac.in",
                "image" => "./static/images/team/ishika.png"
            ),
            array(
                "name" => "Ayush Ojha",
                "designation" => "Social Department",
                "email" => "ayushojha@iitbhilai.ac.in",
                "image" => "./static/images/team/ayush-ojha.jpg"
            ),
            array(
                "name" => "Atharv",
                "designation" => "Environment department",
                "email" => "atharvp@iitbhilai.ac.in",
                "image" => "./static/images/team/atharv.jpg"
            ),
        ),
        "Content Creation and Social Media" => array(
            array(
                "name" => "Anand Panchbhai",
                "designation" => "Design Coordinator",
                "email" => "anandp@iitbhilai.ac.in",
                "image" => "./static/images/team/anand.jpeg"
            ),
            array(
                "name" => "Harsh vardhan",
                "designation" => "Content Writer",
                "email" => "harshvardhanp@iitbhilai.ac.in",
                "image" => "./static/images/team/harsh.jpg"
            ),
            array(
                "name" => "Siddharth",
                "designation" => "Co-Writer",
                "email" => "siddhartha@iitbhilai.ac.in",
                "image" => "./static/images/team/siddharth.jpg"
            ),
        ),
        "Web Developers" => array(
            array(
                "name" => "Ahaan",
                "designation" => "Backend Dev",
                "email" => "ahaand@iitbhilai.ac.in",
                "image" => "./static/images/team/ahaan.png"
            ),

            array(
                "name" => "Hemant",
                "designation" => "Frontend Dev",
                "email" => "hemantm@iitbhilai.ac.in",
                "image" => "./static/images/team/hemant.jpg"
            ),
            array(
                "name" => "Bharath",
                "designation" => "Backend Dev",
                "email" => "bharath@iitbhilai.ac.in",
                "image" => "./static/images/team/bharath.jpeg"
            ),
        ),
    )
    ?>

    <div class="container">
        <h2 class="my-5 pt-5 events_heading text-center display-4">Our Team</h2>

        <?php foreach ($data as $member_type => $members) : ?>
            <h2 class="text-center mt-5 mb-4"><?= $member_type; ?></h2>
            <div class="row d-flex justify-content-around">
                <?php foreach ($members as $member) : ?>
                    <div class="mb-3">
                        <figure class="snip1477">
                            <img src=<?= $member['image']; ?> alt="Pawan" />
                            <div class="title">
                                <div>
                                    <h2><?= $member['name']; ?></h2>
                                    <h4><?= $member['designation']; ?></h4>
                                </div>
                            </div>
                            <figcaption>
                                <p><?= $member['email']; ?></p>
                            </figcaption>
                        </figure>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>

    </div>

    <?php include 'components/footer.php'; ?>

    <?php include 'components/scripts.php'; ?>

    <!-- <script src="/JS/modernizr.custom.86080.js"></script>
    <script src="/JS/slider/owl.carousel.min.js"></script> -->

</body>

</html>