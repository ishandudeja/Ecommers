<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="KiviYo Restaurant">
    <meta name="author" content="Ishan dudeja">

    <title>ECommarce</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap/css/bootstrap-grid.css" rel="stylesheet">
    <link href="css/bootstrap/css/bootstrap-reboot.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<?php include 'template/header.php'; ?>
<!--breadcrumb to navigate back along the pages-->
<!--<nav aria-label="breadcrumb">-->
<!--    <ol class="breadcrumb">-->
<!--        <li class="breadcrumb-item"><a href="index.php">Home</a></li>-->
<!--        <li class="breadcrumb-item"><a href="reservations.php">You Reservations</a></li>-->
<!--        <li class="breadcrumb-item active" aria-current="page">Our services</li>-->
<!--    </ol>-->
<!--</nav>-->
<div class="container-fluid mt-2">
    <div class="album py-2 bg-light">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">

            <div class="row">

                <?php
                include_once 'includes/dbh.inc.php';
                // geting all bookings from db and allow them to edit and delete record
                $productCategoryId = test_input($_GET['category']);
                //validating data get from url

                $sql = "SELECT * from products where categoryId=" . $productCategoryId . "";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
     <div class="col-md-3 mb-2">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="' . $row["imageUrl"] . '"style="width:285px;height:270px; alt="card image cap">
                        <div class="card-body">
                            <h5 class="card-title">' . $row["name"] . '</h5>
                            <p class="card-text">' . $row["description"] . '</p>
                            ';
                        if (!isset($_SESSION["userType"]) ||$_SESSION["userType"]== "4") {
                            echo '<a href="productDetail.php?product=' . $row["productId"] . '&quantity=1&action=detail" class="btn btn-primary">Bag It</a>';
                        } else {
                            echo '<a href="productform.php?product=' . $row["productId"] . '" class="btn btn-primary">Edit</a>';
                        }
                        echo '</div>
                    </div>
                </div>
         
    
    ';
                    }
                } else {
                    echo "No Product available";
                }
                // this statement show  message to screen on the basis of action result
                $action = test_input($_GET['action']);

                function test_input($data)
                {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                switch ($action) {
                    case "insertsuccess":
                        echo '<div class="alert alert-success" role="alert">
            Thanks for booking with us.
            </div>';
                        break;
                    case"editsuccess":
                        echo '<div class="alert alert-success" role="alert">
            Your booking has been changed successfully.
            </div>';
                        break;
                    case"deletesuccess":
                        echo '<div class="alert alert-success" role="alert">
            Your booking has been deleted successfully.
            </div>';
                        break;

                    case "insertfail":
                        echo '<div class="alert alert-danger" role="alert">
            Sorry we are unable to conform you booking
            </div>';
                        break;
                    case"editfail":
                        echo '<div class="alert alert-danger" role="alert">
            Sorry we are unable to update you booking
            </div>';
                        break;
                    case"editfail":
                        echo '<div class="alert alert-danger" role="alert">
            Sorry we are unable to delete you booking
            </div>';
                        break;
                }

                ?>


                <!--                <div class="col-md-4 mb-2">-->
                <!--                    <div class="card" style="width: 18rem;">-->
                <!--                        <img class="card-img-top" src="http://blog.collegegreenlight.com/blog/wp-content/uploads/2014/12/Morning-Checklist.jpg" style="width:285px;height:200px; alt="card image cap">-->
                <!--                        <div class="card-body">-->
                <!--                            <h5 class="card-title">Morning Breakfast</h5>-->
                <!--                            <p class="card-text">some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                <!--                            <a href="#?service=1&booking=0" class="btn btn-primary">Book Now</a>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="col-md-4 mb-2">-->
                <!--                    <div class="card" style="width: 18rem;">-->
                <!--                        <img class="card-img-top" src="http://mamiverse.com/wp-content/uploads/2014/09/Brain-Food-13-Packed-Lunch-Ideas-to-Help-Your-Kid-Stay-Sharp-photo2.jpg" style="width:285px;height:200px; alt="card image cap">-->
                <!--                        <div class="card-body">-->
                <!--                            <h5 class="card-title">Delight Lunch</h5>-->
                <!--                            <p class="card-text">some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                <!--                            <a href="#?service=2&booking=0" class="btn btn-primary">Book Now</a>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="col-md-4 mb-2">-->
                <!--                    <div class="card" style="width: 18rem;">-->
                <!--                        <img class="card-img-top" src="https://quandoo-creatives.s3.amazonaws.com/collections/topical_page_facebook_media_images/candle_light_dinner_social.jpg" style="width:285px;height:200px; alt="card image cap">-->
                <!--                        <div class="card-body">-->
                <!--                            <h5 class="card-title">Candle Light Dinner</h5>-->
                <!--                            <p class="card-text">some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                <!--                            <a href="#?service=3&booking=0" class="btn btn-primary">Book Now</a>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!---->
                <!--                <div class="col-md-4 mb-2">-->
                <!--                    <div class="card" style="width: 18rem;">-->
                <!--                        <img class="card-img-top" src="https://media1.popsugar-assets.com/files/thumbor/_ql1hsQS40MRlrDsPpNM_NspLhs/fit-in/1024x1024/filters:format_auto-!!-:strip_icc-!!-/2017/10/16/868/n/43638449/eee8fce159e3bc12c01151.62980716_edit_img_cover_file_44145574_1508096408/i/Creative-First-Birthday-Party-Ideas.jpg" style="width:285px;height:200px;" alt="card image cap">-->
                <!--                        <div class="card-body">-->
                <!--                            <h5 class="card-title">Birthday Party</h5>-->
                <!--                            <p class="card-text">some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                <!--                            <a href="#?service=4&booking=0" class="btn btn-primary">Book Now</a>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="col-md-4 mb-2">-->
                <!--                    <div class="card" style="width: 18rem;">-->
                <!--                        <img class="card-img-top" src="https://elenadamy.com/wp-content/uploads/2014/06/studio_EMP-4286-2.jpg" style="width:285px;height:200px; alt="card image cap">-->
                <!--                        <div class="card-body">-->
                <!--                            <h5 class="card-title">Wedding Reception</h5>-->
                <!--                            <p class="card-text">some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                <!--                            <a href="#?service=5&booking=0" class="btn btn-primary">Book Now</a>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="col-md-4 mb-2">-->
                <!--                    <div class="card" style="width: 18rem;">-->
                <!--                        <img class="card-img-top" src="http://www.carlton-hotel-stannes.co.uk/images/evening-party.jpg" style="width:285px;height:200px; alt="card image cap">-->
                <!--                        <div class="card-body">-->
                <!--                            <h5 class="card-title">Exotic Parties</h5>-->
                <!--                            <p class="card-text">some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                <!--                            <a href="#?service=6&booking=0" class="btn btn-primary">Book Now</a>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->


            </div>
        </div>
    </div>


</div>
<script src="./js/jquery/jquery.js"></script>
<script src="./css/bootstrap/js/bootstrap.js"></script>
</body>
</html>

