<?php
    header("Expires: Mon, 26 Jul 2015 05:00:00 GMT");
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $result = "-1";

    if(!(empty($name) || empty($phone))){
        $db = mysqli_connect("localhost", "root", "A12345678");
        mysqli_select_db($db, "contact");

        $sql = "SELECT * FROM `contacts` WHERE name = '$name'";
        $rows = mysqli_query($db, $sql);
        $num = mysqli_num_rows($rows);
        if($num <= 0){
            $sql = "INSERT INTO `contacts`(`name`, `phone`) VALUES ('$name', '$phone')";
            if(mysqli_query($db, $sql)){
                $result = "1";
            }
        }
    }

    echo $result;
    mysqli_close($db);
?>