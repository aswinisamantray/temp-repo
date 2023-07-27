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

        "General Secretary" => array(
            array(
                "name" => "Sri Harsha",
                "designation" => "General Secretary",
                "email" => "ketanm@iitbhilai.ac.in",
                "image" => "./static/images/team/mlharsha.jpg"
            ),
            array(
                "name" => "Smarna Pankanti",
                "designation" => "General Secretary",
                "email" => "smaranas@iitbhilai.ac.in",
                "image" => "./static/images/team/smarna.jpeg"
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