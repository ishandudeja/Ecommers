<?php
session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="KiviYo Restaurant">
    <meta name="author" content="Ishan dudeja">

    <title>ECommorce</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="./css/bootstrap/css/bootstrap-grid.css" rel="stylesheet">
    <link href="./css/bootstrap/css/bootstrap-reboot.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
</head>

<body>
<!--Menu bar which gives direct access to other pages-->
<?php
$relativePath = "";
include_once 'template/header.php'; ?>

<ul class="nav justify-content-center">
    <?php
    include_once 'includes/dbh.inc.php';
    // geting all bookings from db and allow them to edit and delete record
    $sql = "SELECT * from productCategory ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo ' <li class="nav-item">
                <a class="nav-link" href="productList.php?category=' . $row["Id"] . '&action=filter ">' . $row["name"] . '</a>
                </li>
                ';
        }
    }
    ?>

</ul>

<main role="main">

    <div class="row">
        <div class="col-2">
            <div class="card ml-2 mb-1" style="width: 100%;">
                <div class="card-header">
                    Filter
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Price
                        <p>
                            <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
                        </p>
                    </li>
                    <li class="list-group-item">
                        Size
                        <p>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Or toggle this other custom
                                radio</label>
                        </div>
                        </p>
                    </li>
                    <li class="list-group-item">Colour
                        <p>
                            <select class="custom-select">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </p>
                    </li>
                </ul>
            </div>


        </div>
        <div class="col-10 p-0">
            <!--carousel of image slider to present exiting offers -->
            <div id="myCarousel" class="carousel slide  max-width: 80%; max-height: 10%;" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="first-slide carousel-img"
                             src="https://images-na.ssl-images-amazon.com/images/G/01/AMAZON_FASHION/2018/EDITORIAL/FALL2/AF_GW/HERO/TDH/F2_M_S_GW_TDH_FALLSHOE_1X._CB484746795_.jpg"
                             alt="First slide">
                        <div class="container">

                            <div class="carousel-caption text-left">
                                <h1>Best Deal</h1>
                                <p>Shop with us and get best deal on all products.</p>
                                <p><a class="btn btn-lg btn-primary" href="template/account/signIn.php" role="button">Sign
                                        up today</a></p>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="second-slide carousel-img"
                             src="https://images-na.ssl-images-amazon.com/images/G/01/mobile-apps/dex/alexa/alexa-voice-service/campaigns/2018/V49851947_Bose_QC35/V49851947_bose_qc35_gw_hero_1500x600._CB484116641_.jpg"
                             alt="Second slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Best Deal</h1>
                                <p>Shop with us and get best deal on all products.</p>
                                <p><a class="btn btn-lg btn-primary" href="template/account/signIn.php" role="button">Sign
                                        up today</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="third-slide carousel-img"
                             src="https://images-na.ssl-images-amazon.com/images/G/01/kindle/merch/2018/E-Reader/Muscat/VX-1878_ERD_GW_Refresh_Bleeding-Hero-1500x600._CB470596266_.jpg"
                             alt="Third slide">
                        <div class="container">
                            <div class="carousel-caption text-right">
                                <h1>Best Deal</h1>
                                <p>Shop with us and get best deal on all products.</p>
                                <p><a class="btn btn-lg btn-primary" href="template/account/signIn.php" role="button">Sign
                                        up today</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="third-slide carousel-img"
                             src="https://sslimages.shoppersstop.com/sys-master/root/h77/h28/11752829222942/banner_04_2000x600_homewearfest_EN_2000W_20181008.jpg"
                             alt="Third slide">
                        <div class="container">
                            <div class="carousel-caption text-right">
                                <h1>Best Deal</h1>
                                <p>Shop with us and get best deal on all products.</p>
                                <p><a class="btn btn-lg btn-primary" href="template/account/signIn.php" role="button">Sign
                                        up today</a></p>

                            </div>
                        </div>
                    </div>


                    <div class="carousel-item">
                        <img class="third-slide carousel-img"
                             src="https://sslimages.shoppersstop.com/sys-master/root/h06/heb/11756369149982/banner_04_2000x600_back-to-earth_EN_2000W_20181009.jpg"
                             alt="Third slide">
                        <div class="container">
                            <div class="carousel-caption text-right">
                                <h1>Best Deal</h1>
                                <p>Shop with us and get best deal on all products.</p>
                                <p><a class="btn btn-lg btn-primary" href="template/account/signIn.php" role="button">Sign
                                        up today</a></p>

                            </div>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>


    <!--rest of body need redefine -->
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <?php
        include_once 'includes/dbh.inc.php';
        // geting all bookings from db and allow them to edit and delete record
        $sql = "SELECT * from products";
        $result = mysqli_query($conn, $sql);
        echo '<div class="row">';
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
            <div class="col-md-3 mb-2">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="' . $row["imageUrl"] . '" style="width:285px;height:270px; alt="card image cap">
                    <div class="card-body">
                        <h5 class="card-title">' . $row["name"] . '</h5>
                        <p class="card-text">' . $row["description"] . '</p>
                       ';
                if (!isset($_SESSION["userType"]) || $_SESSION["userType"] == "4") {
                    echo '<a href="productDetail.php?product=' . $row["productId"] . '&quantity=1" class="btn btn-primary">Bag It</a>';
                } else {
                    echo '<a href="productform.php?product=' . $row["productId"] . '" class="btn btn-primary">Edit</a>';
                }

                echo '</div>
                </div>
            </div>
         ';
            }
        }
        echo '</div>'
        ?>

    </div>
</main>
<?php include 'template/footer.php'; ?>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./js/jquery/jquery.js"></script>
<script src="./css/bootstrap/js/bootstrap.js"></script>

</body>
</html>
