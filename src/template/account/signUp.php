<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="../../../../favicon.ico">-->

    <title>Sign Up</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/signup.css" rel="stylesheet">
</head>

<body class="bg-light">

<!--Menu and Navigation bar with logo-->
<?php
$urlText="sign In";
$url="signIn.php";
include 'whit_header.php'; ?>
<!--BreadCrumb to navigate back pages-->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="signIn.php">Sign In</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
    </ol>
</nav>
<!--User Registration page start-->
<div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4"
             src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCIgdmlld0JveD0iMCAwIDM4MC43MjEgMzgwLjcyMSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzgwLjcyMSAzODAuNzIxOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTE5MC4zNzIsMjkuODEzYy04OC42NzMsMC0xNjAuNTQ2LDcxLjg3My0xNjAuNTQ2LDE2MC41NDdjMCw2My44OTEsMzcuNDE4LDExOC44OTQsOTEuNDQ1LDE0NC43MzRsNS4wMjUtOTcuMDk4ICAgIGMwLDAtOS40NTItMy4xMDItMTEuNTIxLTQuMTEyYy0yMC4wNDgtOC44MzEtMzQuNjEyLTM0LjgzMy0zNC42MTItNjguNThjMC0zNi44MjUsMjguNTU5LTY4LjU0NCw1Ni4xNy02OC44MDYgICAgYzAuMDM1LDAsMC4wMzUsMCwwLjA1OCwwYzAuMDEyLDAsMC4wMzUsMCwwLjA0NiwwYzI3LjYxNywwLjI2MSw1Ni4xNzcsMzEuOTgsNTYuMTc3LDY4LjgwNmMwLDMzLjc0Ny0xNC41ODIsNTkuNzM4LTM0LjU4OSw2OC41OCAgICBjLTAuMTU3LDAuMDY5LTExLjYxMyw0LjIyOS0xMS42MTMsNC4yMjlsNS42MTIsMTA3Ljk2MWMxMi4zMTUsMy4wMzEsMjUuMTE5LDQuODEsMzguMzcsNC44MWMxNy44NywwLDM0Ljk4NC0zLjA0NCw1MS4wNDEtOC40MjQgICAgbDQuOTczLTk2LjIxNGMtMTMuMTA1LTIuODgyLTI0LjI4My0xMS4yMjUtMzEuMjg5LTIxLjY5MmMtOC42NzktMTMuMDAxLDYuNjgxLTEyOC4wNjcsNi42ODEtMTI4LjA2N2g5Ljk5MnYxMDcuOTc4aDkuOTIzVjk2LjQ5OSAgICBoMTAuODUydjEwNy45OWg5Ljg3NlY5Ni40OTloMTEuMjU5djEwNy45OWg5LjkxVjk2LjQ5OWg3LjY2OGMwLDAsMTUuMzYsMTE1LjA2Niw2LjY3LDEyOC4wNjcgICAgYy02LjkzNywxMC4zNjQtMTguMDEsMTguNjgzLTMwLjk1MiwyMS42MzRjLTAuMjMyLDAuMDgyLTAuNDQyLDAuMTYyLTAuNDQyLDAuMTYybDQuMzIyLDgyLjc2MSAgICBjNDcuODIzLTI3LjgwNCw4MC4wNTMtNzkuNDYsODAuMDUzLTEzOC43NjJDMzUwLjkwNywxMDEuNjg3LDI3OS4wMzQsMjkuODEzLDE5MC4zNzIsMjkuODEzeiIgZmlsbD0iIzAwMDAwMCIvPgoJCTxwYXRoIGQ9Ik0xMDMuNjYyLDE0OC45OGMwLjU3NS0yLjM0MSwxLjM0OC00LjU2NiwxLjM4My00LjYwNmMwLjI1LTAuODc3LTAuMjE1LTEuNzcyLTEuMTY4LTIuMzQxICAgIGMtMC45MDYtMC40ODgtMi4wMS0wLjIzOC0yLjUyMSwwLjU0NmMwLDAtMS4wOTgsMS43NDktMi42OSw0LjMzNGMtMS4yOTUsMi4yMjUtMy4yMTIsNS43OC00LjUyLDEwLjIwNyAgICBjLTEuMTMzLDMuODgtMi40ODYsOS4wMzktMy4wOTYsMTQuODEzYy0wLjI2MSwzLjAzMy0wLjMyLDUuNzY5LTAuMjI3LDguNTg2YzAuMjI3LDMuMjEyLDAuNzE0LDUuOTYsMS42NDQsOS4xMDMgICAgYzMuMTU0LDguOTY0LDUuNTgzLDE3LjY0NCwxNC4zNDksMjYuMjA2YzIuNzcxLDIuODQ3LDUuNjE4LDQuNzg3LDcuNjc0LDYuMjE2bDAuNzI2LDAuNTExYzAuNDQyLDAuMjkxLDAuODY2LDAuNTU5LDEuMjg0LDAuODAzICAgIGMxLjcyNiwwLjkwNiwyLjg4MSwxLjIzMSwzLjA5MSwxLjI3N2MwLjg1OSwwLjIzMiwxLjc0My0wLjE4NiwyLjEwOC0wLjg4M2MwLjM0My0wLjczMiwwLjA5My0xLjY1LTAuNjIxLTIuMjMgICAgYzAsMC0xLTAuODcxLTIuMjgzLTIuNDk4Yy0wLjg3Ny0wLjk4OC0xLjgzLTIuNDE3LTIuOTM5LTQuMDMxYy0wLjc4NC0xLjEzOS0xLjcwOC0yLjQyOS0yLjU2OC0zLjY4NCAgICBjLTQuMjctNi41MTgtNi43MzItMTUuNjE1LTEwLjEzNy0yNC45MzRjLTAuNjY4LTIuMDIyLTEuMjE0LTQuNjQyLTEuNDE4LTYuODY3Yy0wLjI3Mi0yLjU2OC0wLjQtNS4wNDItMC40LTcuMzM3ICAgIGMtMC4wOTktNS4zMzMsMC4xMzktOS45MTEsMC42MDQtMTMuNjIzQzEwMi40NzEsMTU0LjM2LDEwMi44ODksMTUxLjIxNywxMDMuNjYyLDE0OC45OHoiIGZpbGw9IiMwMDAwMDAiLz4KCQk8cGF0aCBkPSJNMTkwLjM3MiwwQzg1LjQxNSwwLDAsODUuMzk3LDAsMTkwLjM2QzAsMjk1LjMsODUuNDE1LDM4MC43MjEsMTkwLjM3MiwzODAuNzIxYzEwNC45NTIsMCwxOTAuMzUtODUuNDIxLDE5MC4zNS0xOTAuMzYxICAgIEMzODAuNzIxLDg1LjM5NywyOTUuMzI0LDAsMTkwLjM3MiwweiBNMTkwLjM3MiwzNjYuNTIzYy05Ny4xNDQsMC0xNzYuMTgtNzkuMDMtMTc2LjE4LTE3Ni4xNjMgICAgYzAtOTcuMTQ0LDc5LjAzNi0xNzYuMTgsMTc2LjE4LTE3Ni4xOGM5Ny4xMzMsMCwxNzYuMTc1LDc5LjAzNiwxNzYuMTc1LDE3Ni4xOEMzNjYuNTQ2LDI4Ny40OTMsMjg3LjUwNCwzNjYuNTIzLDE5MC4zNzIsMzY2LjUyM3ogICAgIiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg=="
             alt="" width="72" height="72">
        <h2>SignUp form</h2>
        <p class="lead">Excellent service, quality seasonal produce and award-winning wines combine to create a
            memorable experience.</p>
    </div>
    <div class="row">
        <!--Box that shows existing offer in restaurant-->
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Exciting Offer</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Dinner for tow</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$12</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Lunch for two</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$8</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Delight breakfast</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$5</span>
                </li>


            </ul>


        </div>
        <!--SignUp from start-->
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Register your self</h4>
            <form class="needs-validation" action="../../includes/signup.inc.php" method="POST" novalidate>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" name="firstName" id="firstName" placeholder="" value=""
                               required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" name="lastName" id="lastName" placeholder="" value=""
                               required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="username">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" name="userName" id="username" placeholder="Username"
                               required>
                        <div class="invalid-feedback" style="width: 100%;">
                            Your username is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="username">PasCode</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="pasCode" id="pasCode" placeholder="PasCode"
                               required>
                        <div class="invalid-feedback" style="width: 100%;">
                            Your pasCode is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="phone">Mobile Number </label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Mobile Number"
                           required>
                    <div class="invalid-feedback">
                        Please enter a valid contact number for shipping updates.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St"
                           required>
                    <div class="invalid-feedback">
                        Please enter your billing address.
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Country</label>
                        <select class="custom-select d-block w-100" name="country" id="country" required>
                            <option value="">Choose...</option>
                            <option>New Zealand</option>
                            <option>United States</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">State</label>
                        <select class="custom-select d-block w-100" name="state" id="state" required>
                            <option value="">Choose...</option>
                            <option>Auckland</option>
                            <option>Waikato</option>
                            <option>California</option>

                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control" name="zip" id="zip" placeholder="" required>
                        <div class="invalid-feedback">
                            Zip code required.
                        </div>
                    </div>
                </div>

                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
            </form>
        </div>
        <!--SignUp from end-->
    </div>
    <!--Footer to be redefine-->
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Company Name</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>

</div>
<!--User Registration page end-->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../../js/jquery/jquery.js"></script>
<!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>-->
<script src="../../css/bootstrap/js/bootstrap.min.js"></script>
<!--<script src="../../assets/js/vendor/holder.min.js"></script>-->
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
