<?php
    header("Expires: Mon, 26 Jul 2015 05:00:00 GMT");
    $name = $_POST["name"];

    $db = mysqli_connect("localhost", "root", "A12345678");
    mysqli_select_db($db, "contact");

    $sql = "SELECT * FROM `contacts` WHERE `name` = '$name'";
    $rows = mysqli_query($db, $sql);
    $num = mysqli_num_rows($rows);
    if($num <= 0)
        $phone = "沒有此聯絡人！";
    else{
        $row = mysqli_fetch_row($rows);
        $phone = $row[1];
    }

    echo $phone;
    mysqli_close($db);
?>