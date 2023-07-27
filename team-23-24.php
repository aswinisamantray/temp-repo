<!doctype html>
<html lang="en">

<head>
    <title>2023-2024 Team</title>
    <?php include 'components/header.php'; ?>

</head>
<!-- font-family: 'Lexend Deca';
    color: darkcyan; -->
    <!-- style="background: linear-gradient(to top,F5F0BB,FAEDCD,transparent);" -->
<body>
    <?php include 'components/navbar.php'; ?>
    <?php
    $data = array(
        "Faculty Incharge" => array(
            array(
                "name" => "Dr. Pawan Kumar Mishra",
                "designation" => "",
                "email" => "pawan@iitbhilai.ac.in",
                "image" => "./static/images/team/20-21/pawan.jpg"
            )
        ),
        "General Secretary" => array(
            array(
                "name" => "Lakshmi Lasya Kata",
                "designation" => "",
                "email" => "katalakshmil@iitbhilai.ac.in",
                "image" => "./static/images/team-23-24/Lasya.webp"
            ),
        ),
        "Pragati" => array(
            array(
                "name" => "Ashwin Jaiswal",
                "designation" => "Executive",
                "email" => "ashwinj@iitbhilai.ac.in",
                "image" => "./static/images/team-23-24/Ashwin.webp"
            ),
            array(
                "name" => "Khushi Dutta",
                "designation" => "Executive",
                "email" => "khushid@iitbhilai.ac.in",
                "image" => "./static/images/team-23-24/Khushi.webp"
            )
        ),

        "Pragyaan" => array(
            array(
                "name" => "Piyush Chandrakar",
                "designation" => "Executive",
                "email" => " piyushc@iitbhilai.ac.in",
                "image" => "./static/images/team-23-24/Piyush_Chandrakar.webp"
            )
        ),

        "Pragyaan" => array(
            array(
                "name" => "Kriti Arora",
                "designation" => "Executive",
                "email" => "kritia@iitbhilai.ac.in",
                "image" => "./static/images/team-23-24\Kriti.webp"
            )
        ),
        "Prakriti" => array(
            array(
                "name" => "Gorrepati Hasitha",
                "designation" => "Executive",
                "email" => "gorrepatih@iitbhilai.ac.in",
                "image" => "./static/images/team-23-24\Hasitha.webp"
            ),
            array(
                "name" => "Manas Raghuwanshi ",
                "designation" => "Executive",
                "email" => "manasraghuwanshi@iitbhilai.ac.in",
                "image" => "./static/images/team-23-24\Manas.webp"
            )
        ),
        "Prachaar" => array(
            array(
                "name" => "Astha Rangare",
                "designation" => "Content Head",
                "email" => "asthar@iitbhilai.ac.in",
                "image" => "./static/images/team-23-24\Astha.webp"
            ),
            array(
                "name" => "Arey Pragna Sri",
                "designation" => "Design Coordinator",
                "email" => "areyprag@iitbhilai.ac.in",
                "image" => "./static/images/team-23-24\Pragna_Sri_Arey.webp"
            ),
            array(
                "name" => "Aswini Samantray",
                "designation" => "Web Developer",
                "email" => "aswinis@iitbhilai.ac.in",
                "image" => "./static/images/team-23-24\Aswini.webp"
            ),
            array(
                "name" => "Parth Om Sarwade ",
                "designation" => "Social Media Handler",
                "email" => "partha@iitbhilai.ac.in",
                "image" => "./static/images/team-23-24\Parth.webp"
            )
        ),
    )
    ?>

    <div class="container">
        <h2 class="my-5 pt-5 events_heading text-center display-4" style=" color: midnightblue;">Our Team</h2>

        <?php foreach ($data as $member_type => $members) : ?>
            <h2 class="text-center mt-5 mb-4"><?= $member_type; ?></h2>
            <div class="row d-flex justify-content-around">
                <?php foreach ($members as $member) : ?>
                    <div class="mb-3" style="position:relative;">
                        <figure class="snip1477">
                            <img src=<?= $member['image']; ?> alt="Pawan" style=" border: solid 2px black;"/>
                            <div class="title">
                                <div>
                                    <h2><?= $member['name']; ?></h2>
                                    <h4 style="background: linear-gradient(to right,FEFAE0,FAEDCD);  border-radius: 13px;"><?= $member['designation']; ?></h4>
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