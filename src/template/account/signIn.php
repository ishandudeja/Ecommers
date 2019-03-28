<?php

session_start();
if (isset($_SESSION)!=0) {
   if(isset($_SESSION["userid"])!=0)
   {
       header("Location: ../../index.php");
   }

}

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../src/css/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">
</head>

<body>
<!--Menu bar to which provide direct access to pages -->
<?php
$urlText="sign Up";
$url="signUp.php";
include 'whit_header.php'; ?>
<!--breadcrumb to navigate back along the pages-->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sign In</li>
    </ol>
</nav>
<!--login form start -->
<main class="text-center">
    <!--form that post user input to server-->
    <form class="form-signin" action="../../includes/signIn.inc.php" method="POST">
        <img class="mb-4"
             src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCIgdmlld0JveD0iMCAwIDM4MC43MjEgMzgwLjcyMSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzgwLjcyMSAzODAuNzIxOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTE5MC4zNzIsMjkuODEzYy04OC42NzMsMC0xNjAuNTQ2LDcxLjg3My0xNjAuNTQ2LDE2MC41NDdjMCw2My44OTEsMzcuNDE4LDExOC44OTQsOTEuNDQ1LDE0NC43MzRsNS4wMjUtOTcuMDk4ICAgIGMwLDAtOS40NTItMy4xMDItMTEuNTIxLTQuMTEyYy0yMC4wNDgtOC44MzEtMzQuNjEyLTM0LjgzMy0zNC42MTItNjguNThjMC0zNi44MjUsMjguNTU5LTY4LjU0NCw1Ni4xNy02OC44MDYgICAgYzAuMDM1LDAsMC4wMzUsMCwwLjA1OCwwYzAuMDEyLDAsMC4wMzUsMCwwLjA0NiwwYzI3LjYxNywwLjI2MSw1Ni4xNzcsMzEuOTgsNTYuMTc3LDY4LjgwNmMwLDMzLjc0Ny0xNC41ODIsNTkuNzM4LTM0LjU4OSw2OC41OCAgICBjLTAuMTU3LDAuMDY5LTExLjYxMyw0LjIyOS0xMS42MTMsNC4yMjlsNS42MTIsMTA3Ljk2MWMxMi4zMTUsMy4wMzEsMjUuMTE5LDQuODEsMzguMzcsNC44MWMxNy44NywwLDM0Ljk4NC0zLjA0NCw1MS4wNDEtOC40MjQgICAgbDQuOTczLTk2LjIxNGMtMTMuMTA1LTIuODgyLTI0LjI4My0xMS4yMjUtMzEuMjg5LTIxLjY5MmMtOC42NzktMTMuMDAxLDYuNjgxLTEyOC4wNjcsNi42ODEtMTI4LjA2N2g5Ljk5MnYxMDcuOTc4aDkuOTIzVjk2LjQ5OSAgICBoMTAuODUydjEwNy45OWg5Ljg3NlY5Ni40OTloMTEuMjU5djEwNy45OWg5LjkxVjk2LjQ5OWg3LjY2OGMwLDAsMTUuMzYsMTE1LjA2Niw2LjY3LDEyOC4wNjcgICAgYy02LjkzNywxMC4zNjQtMTguMDEsMTguNjgzLTMwLjk1MiwyMS42MzRjLTAuMjMyLDAuMDgyLTAuNDQyLDAuMTYyLTAuNDQyLDAuMTYybDQuMzIyLDgyLjc2MSAgICBjNDcuODIzLTI3LjgwNCw4MC4wNTMtNzkuNDYsODAuMDUzLTEzOC43NjJDMzUwLjkwNywxMDEuNjg3LDI3OS4wMzQsMjkuODEzLDE5MC4zNzIsMjkuODEzeiIgZmlsbD0iIzAwMDAwMCIvPgoJCTxwYXRoIGQ9Ik0xMDMuNjYyLDE0OC45OGMwLjU3NS0yLjM0MSwxLjM0OC00LjU2NiwxLjM4My00LjYwNmMwLjI1LTAuODc3LTAuMjE1LTEuNzcyLTEuMTY4LTIuMzQxICAgIGMtMC45MDYtMC40ODgtMi4wMS0wLjIzOC0yLjUyMSwwLjU0NmMwLDAtMS4wOTgsMS43NDktMi42OSw0LjMzNGMtMS4yOTUsMi4yMjUtMy4yMTIsNS43OC00LjUyLDEwLjIwNyAgICBjLTEuMTMzLDMuODgtMi40ODYsOS4wMzktMy4wOTYsMTQuODEzYy0wLjI2MSwzLjAzMy0wLjMyLDUuNzY5LTAuMjI3LDguNTg2YzAuMjI3LDMuMjEyLDAuNzE0LDUuOTYsMS42NDQsOS4xMDMgICAgYzMuMTU0LDguOTY0LDUuNTgzLDE3LjY0NCwxNC4zNDksMjYuMjA2YzIuNzcxLDIuODQ3LDUuNjE4LDQuNzg3LDcuNjc0LDYuMjE2bDAuNzI2LDAuNTExYzAuNDQyLDAuMjkxLDAuODY2LDAuNTU5LDEuMjg0LDAuODAzICAgIGMxLjcyNiwwLjkwNiwyLjg4MSwxLjIzMSwzLjA5MSwxLjI3N2MwLjg1OSwwLjIzMiwxLjc0My0wLjE4NiwyLjEwOC0wLjg4M2MwLjM0My0wLjczMiwwLjA5My0xLjY1LTAuNjIxLTIuMjMgICAgYzAsMC0xLTAuODcxLTIuMjgzLTIuNDk4Yy0wLjg3Ny0wLjk4OC0xLjgzLTIuNDE3LTIuOTM5LTQuMDMxYy0wLjc4NC0xLjEzOS0xLjcwOC0yLjQyOS0yLjU2OC0zLjY4NCAgICBjLTQuMjctNi41MTgtNi43MzItMTUuNjE1LTEwLjEzNy0yNC45MzRjLTAuNjY4LTIuMDIyLTEuMjE0LTQuNjQyLTEuNDE4LTYuODY3Yy0wLjI3Mi0yLjU2OC0wLjQtNS4wNDItMC40LTcuMzM3ICAgIGMtMC4wOTktNS4zMzMsMC4xMzktOS45MTEsMC42MDQtMTMuNjIzQzEwMi40NzEsMTU0LjM2LDEwMi44ODksMTUxLjIxNywxMDMuNjYyLDE0OC45OHoiIGZpbGw9IiMwMDAwMDAiLz4KCQk8cGF0aCBkPSJNMTkwLjM3MiwwQzg1LjQxNSwwLDAsODUuMzk3LDAsMTkwLjM2QzAsMjk1LjMsODUuNDE1LDM4MC43MjEsMTkwLjM3MiwzODAuNzIxYzEwNC45NTIsMCwxOTAuMzUtODUuNDIxLDE5MC4zNS0xOTAuMzYxICAgIEMzODAuNzIxLDg1LjM5NywyOTUuMzI0LDAsMTkwLjM3MiwweiBNMTkwLjM3MiwzNjYuNTIzYy05Ny4xNDQsMC0xNzYuMTgtNzkuMDMtMTc2LjE4LTE3Ni4xNjMgICAgYzAtOTcuMTQ0LDc5LjAzNi0xNzYuMTgsMTc2LjE4LTE3Ni4xOGM5Ny4xMzMsMCwxNzYuMTc1LDc5LjAzNiwxNzYuMTc1LDE3Ni4xOEMzNjYuNTQ2LDI4Ny40OTMsMjg3LjUwNCwzNjYuNTIzLDE5MC4zNzIsMzY2LjUyM3ogICAgIiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="userName" class="sr-only">User Name</label>
        <input type="text" id="userName" name="userName" class="form-control" placeholder="User Name" required
               autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="pasCode" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <?php
        $path="index.php";
        if(isset($_GET["path"]))
        { $path=$_GET["path"];
        echo ' <input type="hidden" name="path" value="'.$path.'">';
        }
        ?>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
</main>
<!--login form end -->
</body>
</html>