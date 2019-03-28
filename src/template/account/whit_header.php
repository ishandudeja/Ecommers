<?php
/**
 * Created by PhpStorm.
 * User: ishan
 * Date: 15-Aug-18
 * Time: 2:08 PM
 */
echo '
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Kiwi Yo</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Features</a>
        <a class="p-2 text-dark" href="#">Offers</a>
        <a class="p-2 text-dark" href="#">Events</a>
        <a class="p-2 text-dark" href="#">About</a>
    </nav>';
   if(isset($url))
   {echo '<a class="btn btn-outline-primary" href='.$url.'>'.$urlText.'</a>';}

    //<!--link to navigate sign in page-->
    
echo '</div>';