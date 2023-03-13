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

    <table>

    <div id = "catalogue" name = "catalogue"> 

        <?php
        include("db_connection.php"); 

        $sql1 = "SELECT * FROM books_table"; 
        $result1 = $connect->query($sql1); 

        echo "<table class = 'mytext'>";
        $count = 0;

        while($row1 = $result1->fetch_assoc())
        {
            if ($count % 5 == 0) {
                echo "<tr>"; // Display 5 elements and then create a new row
            }
            echo "<td> ";
            echo "<img src= ".$row1['cover_image']." class = 'cover_image'"."<br>";
            echo "<br>"; 
            echo "Book ID: "; 
            echo $row1['book_id'] . "<br>";
            echo "Title: "; 
            echo $row1['book_title'] . "<br>";
            echo "Price: "; 
            echo $row1['price'] . "<br>";
            $bk_title = $row1['book_title'];
            echo "</td>";

            $count++;
            if ($count % 5 == 0) {
                echo "</tr>"; // end the row after printing 5 elements
            }
        }

        echo "</table>";
        ?>
    </div> 
    </table> 


<body> 






</html>