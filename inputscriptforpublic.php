<?php
	$hour = date('H');
	$date = date('d');
	$hour += 8;
	if ($hour > 23) {
		$date += 1;
		$hour -= 24;
	}
	setcookie('username', $_POST['name'], time() + 2592000);
	if (!strlen($_POST['name'])) {
        $_POST['name'] = "名無し";
    }
    if (!strlen($_POST['name'])) {
        $_POST['name'] = "名無し";
    }
	$todaydate = date('n') . "/" . $date . "/" . $hour . ":" . date('i') . ":" . date('s');
    function inputter($putting){
		$filename = fopen('./date/publiclog.txt', "a");
		fputs($filename, $putting);
		fclose($filename);
    }
	if (!strlen($_POST['maintext'])) {
		header('Location: pchat.php');
	}else {
		$inter = '<div style="border: 2px solid white;padding-left:10px;padding-bottom:10px">'."<p>".$_POST['name'] ."　　".$todaydate."</p>". $_POST['maintext'] ."</div>". "\n";
	inputter($inter);
    	header('Location: pchat.php');
	}
    
?>