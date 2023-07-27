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
        "Faculty Incharge" => array(
            array(
                "name" => "Dr. Pawan Kumar Mishra",
                "designation" => "Faculty Incharge",
                "email" => "pawan@iitbhilai.ac.in",
                "image" => "./static/images/team/20-21/pawan.jpg"
            )
        ),
        "General Secretary" => array(
            array(
                "name" => "Shalini Kumari",
                "designation" => "General Secretary",
                "email" => "shalini@iitbhilai.ac.in",
                "image" => "./static/images/team/shalini.jpeg"
            ),
        ),
        "Department Heads" => array(
            array(
                "name" => "Puja Bansal",
                "designation" => "Education Department",
                "email" => "pujab@iitbhilai.ac.in",
                "image" => "./static/images/team/puja-bansal.jpeg"
            ),
            array(
                "name" => "Abhinav Anand",
                "designation" => "Environment Department",
                "email" => "abhinava@iitbhilai.ac.in",
                "image" => "./static/images/team/abhinav.jpeg"
            ),
            array(
                "name" => "Ayush ojha",
                "designation" => "Social Department",
                "email" => "ayushojha@iitbhilai.ac.in",
                "image" => "./static/images/team/ayush-ojha.jpg"
            ),
        ),
        "Content Creation and Social Media" => array(
            array(
                "name" => "Syamantak Bera",
                "designation" => "Design Coordinator",
                "email" => "syamantakb@iitbhilai.ac.in",
                "image" => "./static/images/team/syamantak.jpg"
            ),
            array(
                "name" => "Aryavrata Singh Baghel",
                "designation" => "Content Writer",
                "email" => "aryavratab@iitbhilai.ac.in",
                "image" => "./static/images/team/aryavrata.jpg"
            ),
            array(
                "name" => "Rishabh Ranjan",
                "designation" => "Social Media Coordinator",
                "email" => "rishabhr@iitbhilai.ac.in",
                "image" => "./static/images/team/rishabh.jpg"
            ),
        ),
        "Web Developers" => array(
            array(
                "name" => "Mohit",
                "designation" => "Contributor",
                "email" => "mohit@iitbhilai.ac.in",
                "image" => "./static/images/team/mohit.jpg"
            ),
            array(
                "name" => "Jyotika",
                "designation" => "Contributor",
                "email" => "jyokita@iitbhilai.ac.in",
                "image" => "./static/images/team/jyotika.jpg"
            ),
            array(
                "name" => "Kumar Shivendu",
                "designation" => "Web Developer",
                "email" => "shivendu@iitbhilai.ac.in",
                "image" => "./static/images/team/shivendu.jpg"
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


</body>

</html>