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
                "name" => "Aneesh Tickoo",
                "designation" => "General Secretary",
                "email" => "aneeshtickoo@iitbhilai.ac.in",
                "image" => "./static/images/team/aneesh.jpeg"
            ),
        ),
        "Department Heads" => array(
            array(
                "name" => "Aishna Jain",
                "designation" => "Executive",
                "email" => "aishnaj@iitbhilai.ac.in",
                "image" => "./static/images/team/aishna_jain.jpg"
            ),
            array(
                "name" => "Siddharth Gupta",
                "designation" => "Executive",
                "email" => "siddharthgupta@iitbhilai.ac.in",
                "image" => "./static/images/team/siddartha_gupta.jpg"
            ),
            array(
                "name" => "Devendra Meena",
                "designation" => "Executive",
                "email" => "devendram@iitbhilai.ac.in",
                "image" => "./static/images/team/devendra_meena.jpg"
            ),
            array(
                "name" => "Lakshmi Lasya Kata",
                "designation" => "Executive",
                "email" => "katalakshmil@iitbhilai.ac.in",
                "image" => "./static/images/team/lakshmi_lasya_kata.jpg"
            ),
            array(
                "name" => "Mrinal Gupta",
                "designation" => "Executive",
                "email" => "mrinalg@iitbhilai.ac.in",
                "image" => "./static/images/team/mrinal_gupta.jpg"
            ),
        ),
        "Creative and Social Media" => array(
            array(
                "name" => "Jay Soni",
                "designation" => "Social Media Handler",
                "email" => "jaysoni@iitbhilai.ac.in",
                "image" => "./static/images/team/jay.png"
            ),
            array(
                "name" => "Gangesh Kumar",
                "designation" => "Design Coordinator",
                "email" => "gangeshk@iitbhilai.ac.in",
                "image" => "./static/images/team/gangesh_kumar.jpg"
            ),
            array(
                "name" => "Aswini Samantray",
                "designation" => "Content Writer",
                "email" => "aswinis@iitbhilai.ac.in",
                "image" => "./static/images/team/aswini_samantray.jpg"
            ),
            array(
                "name" => "Lavish",
                "designation" => "Web Developer",
                "email" => "lavishg@iitbhilai.ac.in",
                "image" => "./static/images/team/lavish.jpg"
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