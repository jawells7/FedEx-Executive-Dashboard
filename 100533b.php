<?php
	session_start();
	include('includes/session_check.inc');
?>
	
<html>

<head>

<title> 100533 Manager Portal</title>
<?php include './includes/ExecutiveHeader.css';?>
</head>

<body>
	<div class="header" style="background-color: #4D148C;">
		<div class="menu" style="padding-left:40%;">
			<div class="submenu">
				<button class="dropbtn"><a href="100533.php" style="colore:white;">Manager Main</a></button>
			</div>
			<div class="submenu">
				<button class="dropbtn"><a href="USER_GUIDE.pdf" target="_blank" style="colore:white;">Help</a></button>
			</div>
			<div class="submenu">
				<button class="dropbtn"><a href="logout.php" style="color:white;">Logout</a></button>
			</div>
		</div>
	</div>
		<br><br>
	<span id="info">
		<iframe title="100533b" width="100%" height="804" src="https://app.powerbi.com/view?r=eyJrIjoiOWM4ODM5MDItZWM4Yi00ZWU5LTlmZmMtZjY3NzNiODNlMTI1TiwidCI6IjUyOTM0M2ZhLWU4YzgtNDE5Zi1hYjHlLWYjJlLWE3MGMxMDAzODgxMCIsImMiOjZ9" frameborder="O" allowFullScreen="true"></iframe>
	</span>
</body>

<?php include './includes/ExecutiveFooter.css';?>

</html>