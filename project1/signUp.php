<html>
       <head>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">      
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
       <link rel="stylesheet" href="./assets/css/sup.css">
        </head>

<?php
$user=[
    'fname'=> $_REQUEST["f_name"],
    'lname'=> $_REQUEST["l_name"],
    'bday'=> $_REQUEST["bday"],
    'gender'=> $_REQUEST["gender"],
    'num' => $_REQUEST["p_number"],
    'email' => $_REQUEST["up_email"],
    'pass' => $_REQUEST["up_pass"],
    'cpass' => $_REQUEST["c_up_pass"],
];

if ($user['pass'] != $user['cpass']) {
    echo "<h1 class='pass'/>PASSWORDS DON'T MATCH<br/></h1>";
    ;
}
?>
<body>
<div class="userinfo">
    <h1 id="welcome" >Hello, <?php echo $user['fname'] ." " .$user['lname']; ?> </h1>
    <div class="user_info">
        <h5>First Name: <span> <?php echo $user['fname']; ?> </span>  <a href="#"><i class="bi bi-pencil-square"></i></a></h5>
        <h5>Last Name: <span> <?php echo $user['lname']; ?> </span>  <a href="#"><i class="bi bi-pencil-square"></i></a></h5>
        <h5>Birth Date: <span> <?php echo $user['bday']; ?> </span>  <a href="#"><i class="bi bi-pencil-square"></i></a></h5>
        <h5>Gender: <span> <?php echo $user['gender']; ?> </span>  <a href="#"><i class="bi bi-pencil-square"></i></a></h5>
        <h5>Phone Number: <span> <?php echo $user['num']; ?> </span>  <a href="#"><i class="bi bi-pencil-square"></i></a></h5>
        <h5>Email: <span> <?php echo $user['email']; ?> </span>  <a href="#"><i class="bi bi-pencil-square"></i></a></h5>
        <h5>Password: *****  <a href="#"><i class="bi bi-pencil-square"></i></a></h5>
    </div>
</div>
</body>


 </html>
