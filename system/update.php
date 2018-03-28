<?php 


include('connect.php');

if(isset($_POST['updateTour'])){
	

	
	$eventid = $_POST['eventid'];
	$venue = $_POST['venue'];
	//$city = $_POST['city'];
	//$state = $_POST['state'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$ticketprice = $_POST['ticketprice'];	
	
	$sql = "UPDATE events SET venue='$venue',date='$date',time='$time', ticketprice='$ticketprice' WHERE eventid=$eventid";
	$result = mysqli_query($cxn, $sql) or die ("update query failed - what exaclty is going wrong?");
	
	if($result){
		header("location:  ../admin.php");
	
	}

}
