<?php
include_once 'dataBaseRegistration.php';
if(isset($_POST['submit']))
{
    $std_name = $_POST['std_name'];
    $fName = $_POST['fName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $DOB = $_POST['DOB'];
    $phone = $_POST['phone'];
    $Temp_addr = $_POST['Temp_addr'];
    $Per_add = $_POST['Per_add'];
    $upload_img = $_POST['upload_img'];

    $sql = "INSERT INTO registration(std_name, fName, gender, email, DOB, phone, Temp_addr, Per_add, upload_img)
    VALUES('$std_name', '$fName', '$gender', '$email', '$DOB', '$phone', '$Temp_addr', '$Per_add', '$upload_img')";
    
    
    if (mysqli_query($con,$sql))
    {
        echo"Data Registered..";
      }
    else{
        echo "Error: ".sql ." ".mysqli_error($con);
    }
    mysqli_close($con);

}
?>