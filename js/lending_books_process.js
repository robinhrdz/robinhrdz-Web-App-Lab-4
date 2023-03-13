function lend_Books_DB ()
{
    var getbook = document.getElementById("bookId").value;
    var getuser = document.getElementById("userId").value; 
    var getLendingDate = document.getElementById("dateLending");
    var getReturnDate = document.getElementById("dateReturn");

    var date1 = getDateInput(getLendingDate);
    var date2 = getDateInput(getReturnDate); 
    console.log(date1);
    console.log(date2);  
}

function getDateInput(element)
{
    var dateString = element.value; 

    var dateObject = new Date(dateString); 
    //Getting the values of the date
    var month = dateObject.getMonth() + 1; 
    var day = dateObject.getDate()+1; 
    var year = dateObject.getFullYear(); 
    return month+"/"+day+"/"+year; 

}

