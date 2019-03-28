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

    <?php
    include_once 'includes/dbh.inc.php';// db connection file
    //getting id from url
    $productId = test_input($_GET['product']);
    $quantity=test_input($_GET['quantity']);
    //validating data get from url
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        //  $data = escape_string($data);
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
    $category="";
    if (isset($productId)) {
        //selecting data associated with this particular id
        $result = mysqli_query($conn, "SELECT * FROM productsView WHERE productId=$productId");

        while ($res = mysqli_fetch_array($result)) {
            $category = $res['productCategory'];
            $colourId = $res['productColour'];
            $description = $res['description'];
            $imageUrl = $res['imageUrl'];
            $name = $res['productName'];
            $price = $res['price'];
            $sizeId = $res['productSize'];
            $statusID = $res['statusID'];
            $categoryId=$res["categoryId"];
        }

    }
echo '<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="productList.php?category='.$categoryId.'&action=filter'.$categoryId.'">'.$category.'</a></li>
        <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
    </ol>
</nav>
<div class="container-fluid mt-2">';

    echo '  <div class="row">
  
            <div class="col-sm">
            <span class="border">
                <img class="" src="' . $imageUrl . '"style="width:385px;height:300px;">
                </span>
            </div>
            <div class="col-sm-8">
                 <div class="jumbotron">
                 <form action="includes/bagIt.inc.php" method="POST">
                      <h5 class="display-5">' . $category . '</h5>
                         <h1 class="display-4">' . $name . '</h1>
                         <p class="lead"> <h5 class="display-5">Price $' . $price . ' </h5>
                            <h6 class="display-6">Size: ' . $sizeId . ' Colour: ' . $colourId . '</h6>
                        </p>
                           <hr class="my-4">
                        <p>' . $description . '</p>
                     
                      <input type="hidden"   name="productId" value=' . $productId . '>
                     <div class="input-group mb-3">
                        <div class="input-group-prepend" id="button-addon3">
                            <button  id="plus" class="btn btn-outline-secondary" type="button">+</button>
                            <button id="minus" class="btn btn-outline-secondary" type="button">-</button>
                        </div>
                    <input type="text" id="quantity" name="quantity" class="form-control" placeholder="Quantity" value="'.$quantity.'" aria-label="Example text with two button addons" aria-describedby="button-addon3">
                    </div>
                      
                     <button class="btn btn-primary btn-lg" type="submit">
                    Add to Bag
                     </button>
                 </form>
                    
                </div>
            </div>
 

    </div>';

    $action = test_input($_GET['action']);



    switch ($action) {
        case "addtocartsuccess":
            echo '<div class="alert alert-success" role="alert">
            Your purchase successfully add to cart.
            </div>';
            break;
        case"outofstock":
            echo '<div class="alert alert-danger" role="alert">
           This product is out of stock, sorry for this time.
            </div>';
            break;
        case"insertsuccess":
            echo '<div class="alert alert-success" role="alert">
           Product has been add successfully
            </div>';
            break;

        case "insertfail":
            echo '<div class="alert alert-danger" role="alert">
            Sorry we are unable to conform you booking
            </div>';
            break;
        case"editsuccess":
            echo '<div class="alert alert-success" role="alert">
            Product has been edit successfully
            </div>';
            break;
        case"editfail":
            echo '<div class="alert alert-danger" role="alert">
            Sorry we are unable to delete you booking
            </div>';
            break;
    }


    ?>

</div>
<script src="./js/jquery/jquery.js"></script>
<script src="./css/bootstrap/js/bootstrap.js"></script>
<script>
    $(document).ready(function () {

        $("#plus").click(function () {
            var qty = $("#quantity");
            var q = parseInt(qty.val()) + 1;
            qty.val(q);
        })
        $("#minus").click(function () {
            var qty = $("#quantity");
            var q = parseInt(qty.val()) - 1;
            qty.val(q);
        })
    });
</script>
</body>
</html>