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
        <li class="breadcrumb-item active" aria-current="page">Reservations</li>
    </ol>
</nav>
<div class="container-fluid mt-2">
    <div>
        <a href="productList.php" class="btn btn-dark">New Booking</a>
    </div>
<!--Table show user booking list-->
    <div class="row">
        <div class="col font-weight-bold">Booking Number</div>
        <div class="col font-weight-bold">You booked for</div>
        <div class="col font-weight-bold">Booking Date</div>
        <div class="col font-weight-bold">Booking Time</div>
        <div class="col font-weight-bold">Number of guest</div>
        <div class="col font-weight-bold">Location</div>
        <div class="col font-weight-bold">Special Instruction</div>
        <div class="col font-weight-bold">Action</div>
    </div>
    <?php
    include_once 'includes/dbh.inc.php';
// geting all bookings from db and allow them to edit and delete record
    $sql = "SELECT * from bookingview where orderOnSite=1 and userID=" . $_SESSION["userid"] . "";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
    <div class="row">
        <div class="col mb-1">' . $row["bookingId"] . '</div>
        <div class="col mb-1">' . $row["services"] . '</div>
        <div class="col mb-1">' . $row["bookingDate"] . '</div>
        <div class="col mb-1">' . $row["bookingTime"] . '</div>
        <div class="col mb-1">' . $row["guestDescription"] . '</div>
        <div class="col mb-1">' . $row["location"] . '</div>
        <div class="col mb-1">' . $row["specialInstruction"] . '</div>
        <div class="col mb-1">
        <ul class="nav">
          <li class="nav-item mr-1">
            <a href="#?service=' . $row["serviceID"] . '&booking=' . $row["bookingId"] . '" class="btn btn-primary  btn-sm active" role="button" aria-pressed="true">Edit</a>

          </li>
          <li class="nav-item">
             <form class="form-inline" method="POST" action="">
                      <input  type="hidden" name="bookingId" value="' . $row["bookingId"] . '">
                        <button type="submit" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Delete</button>
             </form>
          </li>
         </ul>       
        </div>
    </div>
    
    ';
        }
    } else {
        echo "0 results";
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


</div>
<script src="./js/jquery/jquery.js"></script>
<script src="./css/bootstrap/js/bootstrap.js"></script>
</body>
</html>