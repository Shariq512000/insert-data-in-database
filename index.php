<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input placeholder="Name" name="userName" type="text">
        <input type="text" placeholder="Degree" name="degree">
        <input type="tel" name="mobile" id="" placeholder="mobile">
        <input type="email" name="email" id="" placeholder="email">
        <input type="text" name="refer" id="" placeholder="Refer">
        <input type="text" name="job" id="" placeholder="Job Post">
        <button name="submit">Submit</button>
    </form>
</body>
</html>

<?php

include "connection.php";

if(isset($_POST['submit'])){
    $name = $_POST['userName'];
    $degree = $_POST['degree'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $refer = $_POST['refer'];
    $job = $_POST['job'];

    $insertQuery = "insert into jobregistration(name, degree, mobile, email, refer, jobpost) values('$name', '$degree', '$mobile', '$email', '$refer', '$job')";

    $res = mysqli_query($con , $insertQuery);

    if($res){
        echo "RESGISTRATION ADDED";
    }else{
        echo "Some thing went wrong";
    }

}

?>