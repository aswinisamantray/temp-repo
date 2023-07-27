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
                "name" => "Abhinav Anand",
                "designation" => "General Secretary",
                "email" => "abhinava@iitbhilai.ac.in",
                "image" => "./static/images/team/abhinav2.jpg"
            ),
        ),
        "Department Heads" => array(
            array(
                "name" => "Aneesh Tickoo",
                "designation" => "Social Executive",
                "email" => "aneeshtickoo@iitbhilai.ac.in",
                "image" => "./static/images/team/aneesh.jpeg"
            ),
            array(
                "name" => "Lavish",
                "designation" => "Environmental Exective",
                "email" => "lavishg@iitbhilai.ac.in",
                "image" => "./static/images/team/lavish.jpg"
            ),
            array(
                "name" => "Harshita Sankhla",
                "designation" => "Education Executive",
                "email" => "harshitasankhla@iitbhilai.ac.in",
                "image" => "./static/images/team/harshita.jpg"
            ),
        ),
        "Creative and Social Media" => array(
            array(
                "name" => "Chinmay Ratnaparkhe",
                "designation" => "Social Media Handler",
                "email" => "chinmayratnaparkhe@iitbhilai.ac.in",
                "image" => "./static/images/team/chinmay.jpg"
            ),
            array(
                "name" => "Jay Soni",
                "designation" => "Design Coordinator",
                "email" => "jaysoni@iitbhilai.ac.in",
                "image" => "./static/images/team/jay.png"
            ),
            array(
                "name" => "Jessica Unnam",
                "designation" => "Content Writer",
                "email" => "unnamjessica@iitbhilai.ac.in",
                "image" => "./static/images/team/jessica.jpg"
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