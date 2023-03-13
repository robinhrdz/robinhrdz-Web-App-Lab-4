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
    <table align = "center" class = "mytable"> 
        <h1 align = "center" > Lending Books </h1> 
        <form action = "lending_book_process.php" method = "post"> 
        <tr> 
            <td><img src = "https://cdn-icons-png.flaticon.com/512/10000/10000603.png" width= "50px" align = "center"/> </td>
            <td><h3>Book ID:  </h3>  </td> 
            <td> <input type = "text" id = "bookId" name = "book_id"> </td>
        </tr> 

        <tr> 
        
             <td><img src = "https://cdn-icons-png.flaticon.com/512/681/681392.png" width= "50px" align = "center"/> </td>
            <td><h3>User ID: </h3>  </td>
            <td> <input type = "text" id = "userId" name = "user_id"> </td>  
        </tr> 

        <tr>
            <td><img src = " https://cdn-icons-png.flaticon.com/512/9576/9576083.png" width= "50px" align = "center"/> </td>
            <td> <h3> Data of Lending: </h3> </td> 
            <td> <input type = "date" id = "dateLending" name = "date_of_lending"> </td>  
        </tr> 

        <tr>
            <td><img src = " https://cdn-icons-png.flaticon.com/512/9576/9576083.png" width= "50px" align = "center"/> </td>
            <td><h3> Data of Return </h3> </td>  
            <td> <input type = "date" id = "dateReturn" name = "date_of_return"> </td> 
        </tr> 

        <tr> 
            <td><img src = "https://cdn-icons-png.flaticon.com/512/6570/6570800.png" width= "50px" align = "center"/> </td>
            <td> <h3> Status: </h3> </td> 
            <td> <input type = "text" id = "status" name = "status"> </td>  
        </tr> 
        <tr>
       
            <td><img src = " https://cdn-icons-png.flaticon.com/512/4436/4436002.png" width= "50px" align = "center"/> </td>
            <td> <h3> Remarks: </h3> </td> 
            <td><textarea id="remarks" name="remarks" rows="4" cols="20"> </textarea></td>
        </tr>
        
        <tr>
            <td colspan = "3" align = "center"><input type = "submit" class ="submit"  name = "submit" id ="submit" value = ""> </td> 
        </tr> 
</form> 
 

    </table> 


</body> 

</html>
