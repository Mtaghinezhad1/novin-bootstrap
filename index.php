<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- head -->
    <?php include_once ('./__import/head.php'); ?>
</head>

<body class="">

    <!-- top Ads -->
    <?php include_once "./__import/topAds.php"; ?>

    <!-- header -->
    <?php include_once "./__import/header.php"; ?>

    <!-- page title -->
    <?php include_once "./__import/pageTitle.php" ?>

    <!-- marketing -->
    <?php include_once "./__import/marketing.php" ?>

    <!-- miniCards -->
    <?php include_once "./__import/miniCards.php" ?>

    <!-- digital marketing and carousels -->
    <?php include_once "./__import/digitalMarketingAndCarousels.php" ?>

    <!-- cards -->
    <?php include_once "./__import/cards.php" ?>

<!-- footer -->
    <?php include_once "./__import/footer.php"?>

    <!-- moshavere button-->
    <?php include_once "./__import/modal.php" ?>



    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="index.js"></script>
    <script>

        /* slicky slider package for carousels*/
        $("#slickyLogos").slick({

            // normal options...
            infinite: true,
            loop: true,
            autoplay: true,
            slidesToShow: 6,
            arrows: false,


            // the magic
            responsive: [{

                breakpoint: 1200,
                settings: {
                    slidesToShow: 6,
                    infinite: true
                }

            }, {

                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4,
                        infinite: true
                    }

                }, {

                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    infinite: true
                }

            }, {

                breakpoint: 576,
                settings: {
                    slidesToShow: 2,
                    infinite: true
                }

            }, {

                breakpoint: 300,
                settings: "unslick" // destroys slick

            }]
        });
        $("#carouselComment").slick({

            // normal options...
            infinite: true,
            loop: true,
            autoplay: true,
            slidesToShow: 3,
            arrows: false,


            // the magic
            responsive: [{

                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    infinite: true
                }

            }, {

                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    infinite: true
                }

            }, {

                breakpoint: 300,
                settings: "unslick" // destroys slick

            }]
        });
    </script>
</body>


</html>