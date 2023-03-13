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

        <h1 align = "center"> Add Users </h1> 
        <!--- Start of Content-->
        <tr> 
            <td> <h3 class = "label"> User ID: </h3> </td>
            <td><input type = "text" id = "userID"></td> 
        </tr>

        <tr> 
            <td> <h3 class = "label"> Name: </h3> </td>
            <td><input type = "text" id = "userName"></td> 
        </tr>
        <tr> 
            <td> <h3 class = "label"> Password: </h3> </td>
            <td><input type = "text" id = "userPwd"></td> 
        </tr>
        <tr> 
            <td> <h3 class = "label"> Address </h3> </td>
            <td><input type = "text" id = "userAddress"></td> 
        </tr>
        <tr> 
            <td> <h3 class = "label"> Phone  </h3> </td>
            <td><input type = "text" id = "userPhone"></td> 
        </tr>
        <tr> 
            <td> <h3 class = "label"> Email:  </h3> </td>
            <td><input type = "text" id = "userEmail"></td> 
        </tr>
        
        <tr>
            <td colspan = "2" align = "center"><input type = "submit" name = "check" id ="check" value = "Submit"> </td> 
        </tr> 


    </table>

</body>


</html>