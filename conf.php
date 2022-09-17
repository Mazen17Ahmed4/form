<?php 
$servername = "localhost";
$username = "root";
$password = "";
$DB = "task5";

// Create connection
$conn = mysqli_connect($servername, $username, $password , $DB);

$Name1 = $_POST['name'];
$Father_name = $_POST['father_name'];
$Adress = $_POST['address'];
$Gender = $_POST['gender'];
$state1 = $_POST['state'];
$city = $_POST['city'];
$DOB = $_POST['birth_date'];
$Pincode = $_POST['pincode'];
$Course = $_POST['course'];
$Email_ID = $_POST['email'];

echo $conn;
$sql = "INSERT INTO form (Name1	, Father_name, Adress, Gender, state1,	city, DOB, Pincode,Course,Email_ID)
        VALUES('$Name1', '$Father_name', '$Adress', '$Gender' , '$state1', '$city' , '$DOB','$Pincode' ,'$Course',$Email_ID')";
        
        if ($conn->query($sql) === TRUE) 
           echo "row inserted suc;