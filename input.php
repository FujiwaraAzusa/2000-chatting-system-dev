<?php
	$hour = date('H');
	$date = date('d');
	$hour += 8;
	if ($hour > 23) {
		$date += 1;
		$hour =- 24;
	}
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