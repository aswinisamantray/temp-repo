<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallery</title>
    <?php include 'components/header.php'; ?>
    <link rel="stylesheet" href="./static/css/gallery_new.css">
</head>

<body>

    <?php include 'components/navbar.php'; ?>

    <h2 class="events_heading text-center display-4">GALLERY</h2>
    <?php
    $gallery_items = array(
        array(
            "title" => "<strong>COVID 19</strong> Awareness",
            "url" => "./covid19.php",
            "image" => "/static/images/poster/corona.jpg",

        ),
        array(
            "title" => "Blood Donation",
            "url" => "https://photos.google.com/share/AF1QipPhpoIkCt9TdTW-I5OoqW15HRWddGl2C58T9L7Jo8hti0IpWj8N0keOtjVDxyuFOw?key=RDBLdkQ5bHdYTzFWaDlnNlRUUkVxRHZGcGtHWVVn",
            "image" => "./static/images/gallery/blood.jpg",

        ),
        array(
            "title" => "Change 150",
            "url" => "https://photos.google.com/share/AF1QipOlm-i8rSeDJVtPW_NyaXgiiMyO372D2rzRxdL1BC1rSq9tI15DMMIvBf5sb3SyTA?key=elZrSFMyU2ZCM2VsdnpoWlR0R1ZNLXZvY2lWY0xB",
            "image" => "./static/images/gallery/change150.jpg",

        ),

        array(
            "title" => "Akshaya Patra",
            "url" => "https://photos.google.com/share/AF1QipOlm-i8rSeDJVtPW_NyaXgiiMyO372D2rzRxdL1BC1rSq9tI15DMMIvBf5sb3SyTA?key=elZrSFMyU2ZCM2VsdnpoWlR0R1ZNLXZvY2lWY0xB",
            "image" => "./static/images/gallery/akshaya.jpg",

        ),


        array(
            "title" => "Foundation Day",
            "url" => "https://photos.google.com/share/AF1QipNMlxDeR3QihkrcAfVmJAUmuqxLOL0PE74s7GgtlKaTv7qxapckwhp9LMKPXkLxHg?key=UGs0MDRYb0t0VXB5aUFrdkpZajNJaEU0NmkzRTdR",
            "image" => "./static/images/gallery/foundation.jpg",

        ),


        array(
            "title" => "Teaching Cell",
            "url" => "https://photos.google.com/share/AF1QipPlo95sFvii95i_XYifFz388NAILQVVG0Utvy113JDWVnxR2oSxA0vEWc6bPCJY0A?key=UF9yQW5kS3hIaWIyclFmc1NYbWZ6OGhMNG41WHpn",
            "image" => "./static/images/gallery/teaching.jpg",

        ),


        array(
            "title" => "Cleanliess Drive",
            "url" => "https://photos.google.com/share/AF1QipNLwzGXoZT0p_OeSkCRPJAr1YmdD7O7wbYt0FWHvYHUAJxxzn6k7-YqiBeNtlALCA?key=U0g1eXVqOGl4SjhNVkVVcWJNNzduOE04SmdHVFNB",
            "image" => "./static/images/gallery/swachh.jpg",

        ),


        array(
            "title" => "Tour-De-Jashpur Orientation",
            "url" => "https://photos.google.com/share/AF1QipNTK6Xgdh8FuK0XQi0YqqDR-qu_syhN3b0IBMm1TM8t91V_wBz2Wqo5324exPKhXA?key=U1ZwMEkwaDBCdWJPd3pYVU1lTkxqSkhOMzdVdnJB",
            "image" => "./static/images/gallery/tour.jpg",

        ),


        array(
            "title" => "Tree Plantation",
            "url" => "https://photos.google.com/share/AF1QipMPRcPEvtmSyVXfM6UnAfmRvvAF03B6KTtDUBArbKyKAjNiTTxBqO3ZHSsBDJ3PMQ?key=aG5TTGw3ckhsYXNJRUR4Vjg0bm1aNTIxU0Z6MHl3",
            "image" => "./static/images/gallery/plantation.jpg",
            "classes" => ""
        ),


        array(
            "title" => "Paper Bag Making",
            "url" => "https://photos.google.com/share/AF1QipMuFHFJSoTPkoJ2xh7QWWZ5_1ku0GcRnxH99JNwD6Z0nbyr1CQu5BTWHII2b1NK6g?key=YkJydkRQRVV5djNXekZnTUpOaTdTd2RmSkd3aUdR",
            "image" => "./static/images/gallery/paper.jpg",

        ),

    )

    ?>

    <div id="gallery">
        <div id="images">
            <?php foreach ($gallery_items as $item) : ?>
                <div class="figure" style="background:white;  box-shadow: 6px 6px 6px 6px rgb(230, 230, 255); margin:12px;">
                    <img class="image" src=<?= $item['image']; ?> style="padding:5%;" />
                    <a href=<?= $item['url']; ?> >
                        <div class="caption">
                            <div class="body">
                                <h1 class="title" style="color:cornsilk; font-family:serif; margin-top: 50%;">
                                    <?= $item['title']; ?>
                                </h1>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- partial -->

    <?php include 'components/footer.php'; ?>

    <!-- JavaScript -->
    <?php include 'components/scripts.php'; ?>


</body>

</html>