<title>ファイルアップローダー</title>
<body>
<form action="./up_for_personal.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="ファイルをアップロードする">
</form>
<?php
$hour = date('H');
$date = date('d');
$hour += 8;
if ($hour > 23) {
	$date += 1;
	$hour -= 24;
}
ini_set("display_errors", "Off");
$todaydate = date('n') . "/" . $date . "/" . $hour . ":" . date('i') . ":" . date('s');
$fp = fopen('./pasonau/count.txt', "r");
$count =  fgets($fp);
try{
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
	        move_uploaded_file($_FILES['file']['tmp_name'], './pasonau/'.$_FILES['file']['name']);
            echo "<p>"."./pasonau/".$_FILES['file']['name'].$filetype."として保存されました"."</p>";
			echo '<h2>UP完了</h2>';
			//log
            $count++;
			$filename = './pasonau/count.txt';
			$fp = fopen($filename, 'w');
			$data = $count;
			fputs($fp, $data);
			fclose($fp);
		}
}catch(Exception $e) {
        echo 'エラー:', $e->getMessage().PHP_EOL;
}
//研究対象コード
//何故動いた...w
?>
<a href="./index.html" style="text-decoration:none">ホームに戻る</a>
</body>