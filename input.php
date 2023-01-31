<?php
	$hour = date('H');
	$date = date('d');
	if ($hour > 15) {
		$date -= 15;
	}
	$hour += 8;
	$todaydate = date('n') . "/" . $date . "/" . $hour . ":" . date('i') . ":" . date('s');
    function inputter($putting){
		$filename = fopen('./date/chatlog.txt', "a");
		fputs($filename, $putting);
		fclose($filename);
    }
	if (!strlen($_POST['maintext'])) {
		header('Location: chat.php');
	}else {
		$inter = $_POST['name'] . " : " . $_POST['maintext'] ."　　　". $todaydate ."\n";
	inputter($inter);
    	header('Location: chat.php');
	}
    
?>