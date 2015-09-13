<?php
/**
  * @author Punished Foxx{{ punishedfoxx@gmail.com }}
  * @version 3.0.0
  * @license Open Source
  * @copyright 2015 PunishedFoxx
 */
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Page not found</title>
	<style>
	html, body, #doc {
		height: 100%;
	}
	body {
		margin:  0;
		padding: 0;
		font-family: "Helvetica-Neue", "Helvetica", "Arial", sans-serif;
		font-size: 14px;
	}
	.appContainer {
		padding: 23px 57px 17px;
		margin: 0 auto;
		position: relative;
		min-height: 0;
	}
	h1 {
		font-family: "Helvetica-Neue", "Helvetica", "Arial", sans-serif;
		font-weight: 100;
		font-size: 28px;
	}
	code {
		font-size: 13px;
		color: #444;
	}
	font {
		color: #666;
		font-size: 13px;
	}
	</style>
</head>
<body>
	<div id="doc">
		<div class="appContainer">
			<p><h1>Page not found</h1></p>
			<p>The url you are tring to access does not exist or may be broken.</p>
			<p>Requested URL: " <code>http://<?php echo $_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'];?></code> "</p>
			<p>-- <font>Punished Foxx</font> --</p>
		</div>
	</div>
</body>
</html>