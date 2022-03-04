<?php
if(isset($_POST['submit']))
{
$server = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "farmer_information";

$Name=$_POST['Name'];
$Address=$_POST['Address'];
$District=$_POST['District'];
$Division=$_POST['Division'];
$Problem_Duration=$_POST['Problem_Duration'];
$Phone_Number=$_POST['Phone_Number'];

$conn = mysqli_connect($server, $username, $password, $dbname);
$query="INSERT INTO inf0(Name,Address,District,Division,Problem_Duration,Phone_Number)VALUES('$Name','$Address','$District','$Division','$Problem_Duration','$Phone_Number')";


if(mysqli_query($conn,$query))
{
    echo 'Data Inserted';
}
else
{
    echo 'not inserted';
}

 }
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>কৃষকের তথ্য </title>
        <link rel="stylesheet" type="text/css" href="Farmer_info_css.css">
         <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; 
              charset=UTF-8" />
        
    </head>
    <body>
        <div class="wrap">
            <form action="Farmer_info.php" method="POST" accept-charset="utf-8">

                <h2><a href="" target="_blank">Information</a></h2>
                
                <input type="text" name="Name" placeholder="Name"></br>
                <input type="text" name="Address" placeholder="Address"></br>
                <input type="text" name="District" placeholder="District"></br>
                <input type="text" name="Division" placeholder="Division"></br>
                <input type="text" name="Problem_Duration" placeholder="Problem Duration"></br>
                <input type="text" name="Phone_Number" placeholder="Phone_Number"></br>
          
                
                </br>
          
                <input type="submit" name="submit" value="Submit">
            </form>
           
        </div>


    </body>
</html>