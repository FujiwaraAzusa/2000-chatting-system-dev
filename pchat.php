<html>
	<head>
		<metahttp-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<title>チャット</title>
	</head>
	<style>h1,h2,h3,p,a,span{color: white;}</style>
	<body style="background-color:black">
		<div style="margin-left: 2%;margin-right: 2%;margin-top: 3%;">
		<h2>チャット(掲示板型)</h2>
		<?php
		if(isset($_COOKIE["username"])){
			$username = $_COOKIE['username'];
		}
		ini_set("display_errors", "Off");
		$form = '<form action="publicinput.php" method="post"><span style="color:white">名前 </span><input type="text" size="10" autocomplete="name" name="name" value="' . $username . '"><br><span style="color:white">本文 </span><input type="text" size="30" autocomplete="no" name="maintext"><span> </span><input type="submit" value="送信"></form>';
		print $form;
		?>
		<button onclick="location.reload();">メッセージ更新</button><span> </span><button href="checkme.html" onclick="location.href='./checkme.html'">script送信用</button><span> </span><button href="checkme.html" onclick="location.href='./upfile.php'">ファイルUP</button><span> </span><button href="checkme.html" onclick="location.href='./parchive.php'">アーカイブ</button>
		<hr>
		<br>
		<style>p,span{padding-left:5px}</style>
			<?php
				$fp = fopen('./date/publiclog.txt','r');
				$maneof = 0;
				for($i = 0;!feof($fp);$i++)
				{
				$line[$i] = fgets($fp);
				$maneof++;
				}
				$maneof--;
				for(; $maneof >= 0; $maneof--) { 
					print $line[$maneof];
				}
			?>
	</body>
</html>