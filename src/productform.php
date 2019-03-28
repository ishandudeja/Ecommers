<?php
include_once 'includes/dbh.inc.php';// db connection file
//getting id from url
$productId = test_input($_GET['product']);
//validating data get from url
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// these  statement fill the booking from on the base of bookingId
$categoryId = "";
$colourId = "";
$description = "";
$imageUrl = "";
$name = "";
$price = "";
$sizeId = "";
$statusID = "";
$stockCount = 0;
if (isset($productId)) {
    //selecting data associated with this particular id
    $result = mysqli_query($conn, "SELECT p.*,i.stockCount FROM products p join inventory i on p.productId=i.productId where p.productId=$productId");

    while ($res = mysqli_fetch_array($result)) {
        $categoryId = $res['categoryId'];
        $colourId = $res['colourId'];
        $description = $res['description'];
        $imageUrl = $res['imageUrl'];
        $name = $res['name'];
        $price = $res['price'];
        $sizeId = $res['sizeId'];
        $statusID = $res['statusID'];
        $stockCount = $res['stockCount'];
    }


}
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Product create and edit page">
    <meta name="author" content="Ishan dudeja">

    <title>Restaurant</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap/css/bootstrap-grid.css" rel="stylesheet">
    <link href="css/bootstrap/css/bootstrap-reboot.css" rel="stylesheet">


    <link rel="stylesheet" href="js/jquery/jquery-ui-1.12.1.custom/jquery-ui.css">
    <link rel="stylesheet" href="js/jquery/jquery-timepicker-1.3.5/jquery.timepicker.css">

    <script src="js/jquery/jquery.js"></script>

    <script src="js/jquery/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <script src="js/jquery/jquery-timepicker-1.3.5/jquery.timepicker.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <script>
        $(function () {
            $("#bookingdatepicker").datepicker({minDate: new Date(), maxDate: "+1M +10D"});
            $("#bookingdatepicker").on("change", function () {
                $("#bookingdatepicker").datepicker("option", "dateFormat", "yy-mm-dd");
            });

            $('#bookingtimepicker').timepicker({
                timeFormat: 'h:mm p',
                interval: 60,
                minTime: '08',
                maxTime: '10:00pm',
                defaultTime: '00',
                startTime: '08:00',
                dynamic: false,
                dropdown: true,
                scrollbar: true
            });
        });
    </script>
</head>
<body>

<?php include 'template/header.php'; ?>
<!--breadcrumb to navigate back along the pages-->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>

        <?php
        // change navigation path depending on edit and new entry
        if ($productId == 0) {
            echo '      <li class="breadcrumb-item"><a href="adminPanal.php">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">New Booking</li>  ';
        } else {
            echo ' <li class="breadcrumb-item"><a href="productList.php?category=1">Product List</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Booking</li>';
        }
        ?>

    </ol>
</nav>
<div class="container mt-2">
    <form class="needs-validation" action="./includes/booking.inc.php" method="POST" novalidate>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Product Name</label>
            <div class="col-sm-10">
                <input type="text" autocomplete="off" name="name" class="form-control"
                       placeholder="Product Name" value="<?php echo $name; ?>" required>
                <div class="invalid-feedback">
                    Valid Product Name is required.
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <input type="text" autocomplete="off" class="form-control" name="description"
                       placeholder="produt description" value="<?php echo $description; ?>" required>
                <div class="invalid-feedback">
                    Valid Description is required.
                </div>
            </div>
        </div>


        <div class="form-group row">
            <label for="guestDetail" class="col-sm-2 col-form-label">Image URL</label>
            <div class="col-sm-10">
                <input type="text" autocomplete="off" class="form-control" name="imageUrl" rows="3"
                       value="<?php echo $imageUrl; ?>" required></input>
                <div class="invalid-feedback">
                    Valid Image Url is required.
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">price</label>
            <div class="col-sm-10">
                <input type="number" autocomplete="off" class="form-control" name="price"
                       rows="3" value="<?php echo $price; ?>"></input>
            </div>
        </div>

        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Inventory Count</label>
            <div class="col-sm-10">
                <input type="number" autocomplete="off" class="form-control" name="Inventory"
                       rows="3" value="<?php echo $stockCount; ?>"></input>
            </div>
        </div>

        <div class="form-group row">
            <label for="category" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-10">
                <select class="form-control" name="category" required>
                    <?php
                    //include_once 'includes/dbh.inc.php';
                    $result = mysqli_query($conn, "SELECT * FROM productcategory");
                    //populate dropdown with location entry from database
                    while ($res = mysqli_fetch_array($result)) {
                        echo '<option value="' . $res['Id'] . '"';
                        if ($res['Id'] == $categoryId) {
                            echo 'selected';
                        }
                        echo '>' . $res['name'] . '</option>';
                    }
                    ?>

                </select>
                <div class="invalid-feedback">
                    Please Select category From List
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="size" class="col-sm-2 col-form-label">Size</label>
            <div class="col-sm-10">
                <select class="form-control" name="size" required>
                    <?php
                    //include_once 'includes/dbh.inc.php';
                    $result = mysqli_query($conn, "SELECT * FROM sizetype");
                    //populate dropdown with location entry from database
                    while ($res = mysqli_fetch_array($result)) {
                        echo '<option value="' . $res['sizeId'] . '"';
                        if ($res['sizeId'] == $sizeId) {
                            echo 'selected';
                        }
                        echo '>' . $res['name'] . '</option>';
                    }
                    ?>

                </select>
                <div class="invalid-feedback">
                    Please Select size From List
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="colour" class="col-sm-2 col-form-label">Colour</label>
            <div class="col-sm-10">
                <select class="form-control" name="colour" required>
                    <?php
                    //include_once 'includes/dbh.inc.php';
                    $result = mysqli_query($conn, "SELECT * FROM colourtype");
                    //populate dropdown with location entry from database
                    while ($res = mysqli_fetch_array($result)) {
                        echo '<option value="' . $res['colourTypeId'] . '"';
                        if ($res['colourTypeId'] == $colourId) {
                            echo 'selected';
                        }
                        echo '>' . $res['name'] . '</option>';
                    }
                    ?>

                </select>
                <div class="invalid-feedback">
                    Please Select colour From List
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">Status</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <?php echo '<input class="form-check-input" value="1" name="status" type="checkbox" id="gridCheck1"';
                    if ($statusID == 6) {
                        echo 'checked';
                    }
                    echo '>';
                    ?>
                    <label class="form-check-label" for="gridCheck1">
                        In Stock
                    </label>
                </div>
            </div>
        </div>
        <?php

        echo '<input type="hidden"   name="productId" value=' . $productId . '>';
        ?>


        <div class="form-group row">
            <div class="col-sm-5">

            </div>
            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <div class="col-sm-5">
                <a href="index.php" class="btn btn-primary">Clear</a>
            </div>
        </div>

    </form>


</div>

<script>
    // JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';

        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</body>
</html>

