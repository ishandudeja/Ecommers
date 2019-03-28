<?php
if (!isset($_SESSION)) {
    session_start();
}

/**
 * Created by PhpStorm.
 * User: ishan
 * Date: 15-Aug-18
 * Time: 1:09 PM
 */

echo '<nav class="site-header sticky-top py-1 navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container d-flex   flex-md-row justify-content-between">
        <a class="py-1 navbar-brand" href="index.php">
       
SHOPPERS STOP
</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
            
            <li class="nav-item">
                  <div class="input-group input-group-lg ">
  <input type="text" class="form-control form-control-lg" placeholder="Your Product Search" aria-label="Your Product Search" aria-describedby="inputGroup-sizing-lg">
  <div class="input-group-append ">
    <button class="input-group-text" id="basic-addon2"><i class="fas fa-search fa-lg"></i></button>
  </div>
</div>
                </li>
            
                <li class="nav-item active">
                    <a class="py-2   nav-link" href="index.php">
    Best Deals <i class="far fa-kiss-wink-heart fa-lg"></i>  
                    </a>
                </li>';
if (!isset($_SESSION["userid"])) {
    echo ' <li class="nav-item">
                    <a class="py-2  d-md-inline-block nav-link" href="template/account/signIn.php?path=bagout.php?action=list">
    Your Bag 
    <i class="fas fa-shopping-bag fa-lg"><span class="badge badge-secondary badge-pill">';
    if (isset($_SESSION['cart']))
        echo $_SESSION['cart'];
    echo '</span> </i>
   
    
                    </a>
                </li>';
} else {

    if ($_SESSION["userType"] == "4") {
        echo ' <li class="nav-item">
                    <a class="py-2  d-md-inline-block nav-link" href="bagout.php?action=list">
   Your Bag 
   <i class="fas fa-shopping-bag fa-lg"><span class="badge badge-secondary badge-pill">';
        if (isset($_SESSION['cart'])) {
            echo $_SESSION['cart'];
        }
        echo '</span></i>
                    </a>
                </li>';
    } else {
        echo ' <li class="nav-item">
                    <a class="py-2  d-md-inline-block nav-link" href="adminPanal.php?action=list">
   Admin Panal <i class="fas fa-cannabis fa-lg"></i>
                    </a>
                </li>';
    }

}

if (isset($_SESSION["userid"])) {
    echo '<li class="nav-item">
        <form action="includes/signOut.inc.php">
            <button class="py-2  btn btn-link d-md-inline-block nav-link" type="submit">
                    SignOut <i class="fas fa-sign-out-alt fa-lg"></i>
            </button>
        </form>
        </li>';
} else {
    echo '<li class="nav-item">
                    <a class="py-2   d-md-inline-block nav-link" href="template/account/signIn.php">
    SignIn <i class="fas fa-sign-in-alt fa-lg"></i>
                    </a>
                </li>';
}

echo ' </ul>
        </div>
    </div>
</nav>';

?>

