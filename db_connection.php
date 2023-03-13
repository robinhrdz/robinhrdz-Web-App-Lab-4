<?php
    $connect = new mysqli("localhost", "root", "", "book_management"); 

    if($connect->connect_errno)
    {
        die("Could not Connect:".$connect->connect_errno); 
    }

?>