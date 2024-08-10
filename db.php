<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db  ="testDb";
    $conn=mysqli_connect($host,$user,$pass,$db);
    if(mysqli_connect_error()){
    	echo "فشل الأتصال بقاعدة البيانات";
    }

?>