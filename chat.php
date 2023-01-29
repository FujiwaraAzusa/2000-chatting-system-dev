<html>
	<head>
		<metahttp-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<title>チャット</title>
	</head>
	<style>h1,h2,h3,p,a{color: white;}</style>
	<body style="background-color:black">
		<div style="margin-left: 2%;margin-right: 2%;margin-top: 3%;">
		<h2>チャット(掲示板型)</h2>
		<form action="input.php" method="post">
			<input type="text" size="10" autocomplete="name" name="name"><br>
			<input type="text" size="30" autocomplete="no" name="maintext">
			<input type="submit">
		</form>
		<button onclick="location.reload();">メッセージ更新</button>
		<hr>
			<?php
				$fp = fopen("chatlog.txt", "r");
				while ($line = fgets($fp)) {
				  print "<p>$line<p>";
				}
				fclose($fp);
			?>
	</body>
</html>