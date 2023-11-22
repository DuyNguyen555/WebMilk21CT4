<?php
    $ma = $_GET["key"];
    require_once("../../sql/connect.php");
    $sql = "delete from hang where maHang = '$ma'";
    $result = mysqli_query($connect, $sql);
    if($result)
    {
        mysqli_close($connect);
        header("location:list.php");
    }
    else
    {
        echo "Delete thất bại".mysqli_error($connect);
    }
?>