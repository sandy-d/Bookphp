<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<html>
<body>
<h1>Add Book</h1>
<form action="" method="post" name="login">
    <label>Book Name</label>
<input type="text" name="bookname" placeholder="Book Name" required />
    <label>Book Stock</label>
<input type="text" name="bookstock" placeholder="Book Stock" required />
<br>
<input name="submit" type="submit" value="Add" />
</form>

</div>
</body>
</html>
<?php


if(isset($_POST['submit']))
{		
    $bookname = $_POST['bookname'];
    $bookstock = $_POST['bookstock'];

    $insert = mysqli_query($db,"INSERT INTO `bookad`(`bookname`, `bookstock`) VALUES ('$bookname','$bookage')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}


?>