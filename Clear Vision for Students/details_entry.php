<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="database123";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $full_name = $_POST['full_name'];
	 $email = $_POST['email'];
	 $phone = $_POST['phone'];
	 $address = $_POST['address'];
	 $amount = $_POST['amount'];

	 $sql_query = "INSERT INTO entry_details (full_name,email,phone,address,amount)
	 VALUES ('$full_name','$email','$phone','$address','$amount')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>