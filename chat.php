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
		<p style="color:blue;">名前は上段、文は下段に入れて送信してください。</p>
			<?php
				$fp = fopen('./date/chatlog.txt','r');
				$maneof = 0;
				for($i = 0;!feof($fp);$i++)
				{
				$line[$i] = fgets($fp);
				$maneof++;
				}
				$maneof--;
				for(; $maneof >= 0; $maneof--) { 
					print "<p>" . $line[$maneof] . "</p>";
				}
			?>
	</body>
</html>