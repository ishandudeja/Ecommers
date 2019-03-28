<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="KiviYo Restaurant">
    <meta name="author" content="Ishan dudeja">

    <title>Restaurant</title>

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
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Bag It</li>
    </ol>
</nav>

<div class="container-fluid mt-2">
    <div>
        <a href="checkOut.php" class="btn btn-dark">Check Out</a>
    </div>
    <!--Table show user booking list-->
    <div class="row">
        <div class="col font-weight-bold">Product</div>
        <div class="col font-weight-bold">Price</div>
        <div class="col font-weight-bold">Size</div>
        <div class="col font-weight-bold">Colour</div>
        <div class="col font-weight-bold">Quantity</div>
        <div class="col font-weight-bold">Category</div>
        <div class="col font-weight-bold">Description</div>
        <div class="col font-weight-bold">Action</div>
    </div>
    <!--    --><?php
    include_once 'includes/dbh.inc.php';

    foreach ($_SESSION as $name => $value) {
        if ($value > 0) {
            if (substr($name, 0, 8) == "product_") {
                //echo $name;
               // echo strlen($name);
                $length = strlen($name )-8;
                $id = substr($name, 8, $length);

                $sql = "SELECT * from productsView where productId=" .  $id . "";

                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
    <div class="row">
        <div class="col mb-1">' . $row["productName"] . '</div>
        <div class="col mb-1">' . $row["price"] . '</div>
        <div class="col mb-1">' . $row["productSize"] . '</div>
        <div class="col mb-1">' . $row["productColour"] . '</div>
        <div class="col mb-1">' . $_SESSION["product_".$id] . '</div>
        <div class="col mb-1">' . $row["productCategory"] . '</div>
        <div class="col mb-1">' . $row["description"] . '</div>
        <div class="col mb-1">
        <ul class="nav">
          <li class="nav-item mr-1">
            <a href="productDetail.php?product='.$row["productId"].'&quantity='.$_SESSION["product_".$id].'" class="btn btn-primary  btn-sm active" role="button" aria-pressed="true">Edit</a>
            
          </li>
          <li class="nav-item">
            <form class="form-inline" method="POST" action="includes/deleteProduct.inc.php">
                      <input  type="hidden" name="productId" value='.$row["productId"].'>
                        <button type="submit" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Delete</button>
             </form>
          </li>
         </ul>
        </div>
    </div>

    ';
                    }
                }
            }
        }
    }



    //// this statement show  message to screen on the basis of action result
        $action = test_input($_GET['action']);

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        switch ($action) {
            case "checkoutSuccess":
                echo '<div class="alert alert-success" role="alert">
                Thanks for Shopping with us.
                </div>';
                break;
            case"checkoutfail":
                echo '<div class="alert alert-success" role="alert">
                Your booking has been changed successfully.
                </div>';
                break;
            case"deletesuccess":
                echo '<div class="alert alert-success" role="alert">
                Your booking has been deleted successfully.
                </div>';
                break;

            case "checkoutfail":
                echo '<div class="alert alert-danger" role="alert">
                 Sorry we are unable to make payment
                </div>';
                break;
            case"editfail":
                echo '<div class="alert alert-danger" role="alert">
                Sorry we are unable to make payment 
                </div>';
                break;

        }

        ?>


</div>
<script src="./js/jquery/jquery.js"></script>
<script src="./css/bootstrap/js/bootstrap.js"></script>
</body>
</html>