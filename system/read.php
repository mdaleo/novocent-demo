<?php 	
$orderby='date';
if(empty($_GET)){
	$orderby='date';
}else{
	$orders=array("venue","date","time","ticketprice");
	$key=array_search($_GET['orderby'],$orders);
	$orderby=$orders[$key];
}

//$orderby = isset($_GET["orderby"]) ? $_GET["orderby"] : "";


$queryTour = "
	SELECT * 
	FROM events 
	JOIN locations 
	ON events.locationid = locations.locationid 
	ORDER BY $orderby
	";
$result = mysqli_query($cxn, $queryTour) or die ("query wasn't loaded into result");

// Functions


function getTourTable(){
	global $result;
	while ($row = mysqli_fetch_assoc($result))
	{
		extract($row);
		echo "<tr>\n";
			echo "	<td>$venue</td>\n";
			echo "	<td>$city, $state</td>\n";
			echo "	<td>$date</td>\n";
			echo "	<td>$time</td>\n";
			echo "	<td>$$ticketprice</td>\n";
		echo "</tr>\n";
	};

}

function getTourForm(){
	global $result;
	while ($row = mysqli_fetch_assoc($result))
	{
		extract($row);
		echo "<form action='system/update.php' method='post'>";
		echo "<tr>\n";
			echo "  <input type='hidden' name='eventid' value='$eventid'/>";
			echo "	<td class='td-hover'><input name='venue' type='text' value='$venue' /></td>\n";
			echo "	<td class='citystate'>$city, $state</td>\n";
			echo "	<td class='td-hover'><input name='date' type='text' value='$date' /></td>\n";
			echo "	<td class='td-hover'><input name='time' type='text' value='$time' /></td>\n";
			echo "	<td class='td-hover'><input name='ticketprice' type='text' value='$ticketprice' /></td>\n";
			echo "	<td><input class='updateBtn' type='submit' name='updateTour' value='update'/></td>\n";
		echo "</tr>\n";
		echo "</form>";
	};

}

?>