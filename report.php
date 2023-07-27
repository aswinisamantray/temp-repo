<!doctype html>
<html lang="en">

<head>
    <title>2020-2021 Team</title>
    <?php include 'components/header.php'; ?>

</head>

<body>
    <?php include 'components/navbar.php'; ?>

    <?php
        $reports_details = array(
            array(
                "tenure" => "2021-22",
                "secratary" => "Abhinav Anand"
            ),
            array(
                "tenure" => "2020-21",
                "secratary" => "Shalini Kumari"
            ),
            array(
                "tenure" => "2019-20",
                "secratary" => "Prashant Kumar"
            ),
            array(
                "tenure" => "2018-19",
                "secratary" => "Shivansh Mishra"
            ),
        )
    ?>

    <div class="my-5 pt-5 container report_list_container" >

        <ul class="list-group">
            <?php foreach ($reports_details as $report) : ?>
                <a style="text-decoration: none;" href="<?php echo "./tenure_reports/".$report['tenure'].".pdf";?>" target="new_tab">
                    <li class="list-group-item report_link_item" >
                        <h5>NSS Tenure Report - <?= $report['tenure']; ?></h5>

                        <p>- <?= $report['secratary']; ?></p>
                    </li>
                </a>
            <?php endforeach; ?>
        </ul>
    </div>

    <?php include 'components/footer.php'; ?>

    <?php include 'components/scripts.php'; ?>


</body>

</html>