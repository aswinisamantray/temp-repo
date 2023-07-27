<!doctype html>
<html lang="en">

<head>
    <title>2020-2021 Team</title>
    <?php include 'components/header.php'; ?>

</head>

<body>
    <?php include 'components/navbar.php'; ?>

    <?php
    $data = array(
        //   "Faculty Incharge" => array(
        //       array(
        //           "name" => "Dr. Pawan Kumar Mishra",
        //           "designation" => "Faculty Incharge",
        //           "email" => "pawan@iitbhilai.ac.in",
        //           "image" => "./static/images/team/20-21/pawan.jpg"
        //       )
        //   ),
        "General Secretary" => array(
            array(
                "name" => "Shivansh Mishra",
                "designation" => "General Secretary",
                "email" => "shivansha@iitbhilai.ac.in",
                "image" => "./static/images/team/shivansh.jpeg"
            ),
        ),
        "Executives" => array(
            array(
                "name" => "Anil mandilya",
                "designation" => "Executive",
                "email" => "anilm@iitbhilai.ac.in",
                "image" => "./static/images/team/anil-mandilya.jpg"
            ),
            array(
                "name" => "Ishaan shrivastava",
                "designation" => "Executive",
                "email" => "ishaans@iitbhilai.ac.in",
                "image" => "./static/images/team/ishaan.jpg"
            ),
            array(
                "name" => "Deepak singh",
                "designation" => "Executive",
                "email" => "deepaks@iitbhilai.ac.in",
                "image" => "./static/images/team/deepak.jpeg"
            ),
            array(
                "name" => "Prince Pansari",
                "designation" => "Executive",
                "email" => "princep@iitbhilai.ac.in",
                "image" => "./static/images/team/princep.jpg"
            ),
            array(
                "name" => "Ashutosh Sahu",
                "designation" => "Executive",
                "email" => "ashutoshsahu@iitbhilai.ac.in",
                "image" => "./static/images/team/ashutosh.jpeg"
            ),
            array(
                "name" => "Pratik Patil",
                "designation" => "Executive",
                "email" => "pratikp@iitbhilai.ac.in",
                "image" => "./static/images/team/pratikp.jpg"
            ),
            array(
                "name" => "Ketha Sandeep",
                "designation" => "Executive",
                "email" => "kethas@iitbhilai.ac.in",
                "image" => "./static/images/team/ketha-sandeep.jpg"
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