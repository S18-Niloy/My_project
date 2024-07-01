<?php
require_once("DB_connect.php");

if (isset($_POST['username']) && isset($_POST['id']))
{
    $user = $_POST['username'];
    $pass = $_POST['id'];
    $query = "Select * From users Where username='$user' and id = '$pass';";
    $result = mysqli_query($conn,$query);

    if (mysqli_num_rows($result)>0){
        echo "User exists";
    } else{
        echo "User doesn't exist";
    }
}

?>