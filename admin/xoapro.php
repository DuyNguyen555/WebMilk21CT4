<?php
    $ma = $_GET["key"];
    require_once("../sql/connect.php");
    $sql = "delete from sua where maSua = $ma";
    $result = mysqli_query($connect, $sql);
    if($result)
    {
        mysqli_close($connect);
        header("location:dspro.php");
    }
    else
    {
        echo "Delete thất bại".mysqli_error($connect);
    }
?>