<!DOCTYPE html> 
<html> 
<head> 
    <title> Book System Management</title>
    <link rel = "stylesheet" href = "css/style.css">
    <?php include 'banner.php'; ?>
    <?php include 'topMenu.php'; ?>
    <script src="js/lending_books_process.js"></script>
</head>

<body> 

    <?php

    $bid=$_POST['book_id'];
    $uid = $_POST['user_id'];
    $dol = $_POST['date_of_lending'];
    $dor = $_POST['date_of_return'];
    $status = $_POST['status'];
    $remarks = $_POST['remarks'];

    $lid=rand(1,10000);

    include("db_connection.php"); 

    $sql = "INSERT INTO lending_table (`sid`, `lending_id`, `book_id`, `user_id`, `date_of_lending`, `date_of_return`, `status`, `remarks`) 
            VALUES ('', '$lid', '$bid', '$uid', '$dol', '$dor', '$status', '$remarks')";

    $result = $connect->query($sql);

    if ($result == FALSE)
    {
        echo "Error: ". $connect->error;
    }
    else{
        echo "Information Saved"; 
    }

    ?>

</body> 

</html> 