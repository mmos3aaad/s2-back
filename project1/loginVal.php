<html>
       <head>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">      
       <link rel="stylesheet" href="./assets/css/products.css">
        </head>

<?php
$user_email = $_REQUEST["in_email"]; $def_email = "example@ex.com";
$user_pass = $_REQUEST["in_pass"];   $def_pass = "pass123";

if ($user_email == $def_email && $user_pass == $def_pass  ) {
    echo "<h1 class='log_ok'/>Success<br/></h1>";
    print "<h3 class='log_ok_h'>Welcome, <span>Admin</span> </h3>";
    echo "<a class=' btn btn-success logbtn' href='index.php'/>Home</a>";
}
else {
    echo "<h2 class='log_no'/>please enter a correct email and password<br/></h2>";
    echo "<a class='logbtn btn btn-danger' href='join.html'/>Go back</a>";

}


?>

        </html>