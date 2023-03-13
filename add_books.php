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

    <table align = "center">
        <!--- Start of Content-->
        <tr> 
            <td> <h3 class = "label"> Book ID: </h3> </td>
            <td><input type = "text" id = "bookID" ></td> 
        </tr>

        <tr> 
            <td> <h3 class = "label"> Title: </h3> </td>
            <td><input type = "text" id = "bookTitle"></td> 
        </tr>
        <tr> 
            <td> <h3 class = "label"> Author: </h3> </td>
            <td><input type = "text" id = "bookAuthor"></td> 
        </tr>
        <tr> 
            <td> <h3 class = "label"> Price </h3> </td>
            <td><input type = "text" id = "bookPrice"></td> 
        </tr>
        <tr> 
            <td> <h3 class = "label"> Publisher </h3> </td>
            <td><input type = "text" id = "bookPublisher"></td> 
        </tr>
        <tr> 
            <td> <h3 class = "label"> Edition No.  </h3> </td>
            <td><input type = "text" id = "bookEdition"></td> 
        </tr>
        <tr> 
            <td> <h3 class = "label"> Year of Publication </h3> </td>
            <td><input type = "text" id = "bookYear"></td> 
        </tr>
        <tr> 
            <td><h3 class="label">Description</h3></td>
            <td><textarea id="bookDescription"></textarea></td>
        </tr>
        <tr>
            <td colspan = "2" align = "center"><input type = "submit" name = "submitButton" id ="submitButton" onclick="submitBook(event)"> </td> 
        </tr> 
          

    </table>

</body>


</html>