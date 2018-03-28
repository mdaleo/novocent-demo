<?php include("system/connect.php") ?>
<?php include("system/read.php") ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
	<head>
		<title>The Squares</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<link rel="stylesheet" href="styles.css" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
		<script type="text/javascript" src="scripts.js"></script>
	</head>
	
	<body>
		<div id="login" class="center">
			<form action="index.php" class="center">
				<fieldset>
					<input class="login-submit"type="submit" value="back home"style="position:relative;left:150px;"/>
				</fieldset>
			</form>
		</div>
		<div id="header" class="width_980 center">
			<h1 id="logo">The Squares</h1>

		</div>
		<div id="content">
			
			<div id="content-admin">
				<div class="width_760 center">
					<h2 id="h2-admin">Administrate this sucker</h2>
			
					<table id="tour-table">
						<thead>
						<tr>
							<td><a href="?orderby=venue">venue</a></td>
							<td>location</td>
							<td><a href="?orderby=date">date</a></td>
							<td><a href="?orderby=time">time</a></td>
							<td><a href="?orderby=ticketprice">ticket price</a></td>
							<td>update</td>
						</tr>
						</thead>
						
						<tbody>
							
							<?php getTourForm()?>
						
						</tbody>
					
					</table>
				</div>
			</div>	
		</div>
		
	</body>
</html>