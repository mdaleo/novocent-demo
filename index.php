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
			<form action="admin.php" class="center">
				<fieldset>
					<input id="username" type="text" value="username"/>
					<input id="password" type="password" value="password"/>
					<input class="login-submit" id="sumbit" type="submit" value="login" />
				</fieldset>
			</form>
		</div>
		<div id="header" class="width_980 center">
			<h1 id="logo">The Squares</h1>
			<ul id="nav-list">
				<li><a href="#content-home">home</a></li>
				<li><a href="#content-tour">tour</a></li>
				<li><a href="#content-contact">contact</a></li>
			</ul>
		</div>
		<div id="content">
			
			<div id="content-home">
				<div id="home-image">&nbsp;</div>
				<div class="width_760 center">
					<h2 id="h2-home">Making hipster music since 2006</h2>
					<p>
					Like most social groups, Hipsters have their own way of communicating. They converse using special terms and lingo to show they are in the know. Being up on the latest slang is essential to being a Hipster.
					</p>
					<p>
					Though it may be humorous to tell someone that his or her Pumas are "tubular," utilizing a dated term such as this can be a serious faux pas if not used ironically. Retro terms such as "grody," "bofu," "fresh," and "wicked" all work well when with a tongue-in-cheek, but such words should be used sparingly. 
					</p>
				</div>
			</div>
			
			<div id="content-tour">
				<div class="width_760 center">
					<h2 id="h2-tour">Sweet tour dates</h2>
			
					<table id="tour-table">
						<thead>
						<tr>
							<td>venue</td>
							<td>city</td>
							<td>date</td>
							<td>time</td>
							<td>ticket price</td>
						</tr>
						</thead>
						
						<tbody>
							
							<?php getTourTable();?>

						
						</tbody>
					
					</table>
				</div>
			</div>
			
			<div id="content-contact">
				<div class="width_760 center">
					<h2 id="h2-contact">Contact us. For reals.</h2>
					
					<div id="form-status" class="validation-error">

					</div>
					
					
					<form id="contact-form" action="system/contactForm.php" method="post">
					<fieldset>
						<label for="name">name(required): <br /><input id="name" class="input-text" type="text" name="name" /></label><br />
						<label for="email">email(required): <br /><input id="email" class="input-text" type="text" name="email" /></label><br />
						<label for="phone">phone: <br /><input id="phone" class="input-text" type="text" name="phone" /></label><br />
						
						<label for="message">message(required): <br /><textarea id="message" class="input-text" name="message" cols="38" rows="100"></textarea></label><br />
						
						<input id="submit" type="submit" value="send now"/>
					</fieldset>	
					</form>
						
				</div>
			</div>
		
		</div>
		
	</body>
</html>