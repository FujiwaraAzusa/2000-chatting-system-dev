<?php
    function inputter($putting){
		$filename = fopen('chatlog.txt', "a");
		fputs($filename, $putting);
		fclose($filename);
    }
    $inter = date('n') . "月" . date('d') . "日" . date('H') . "時" . date('i') . "分" . date('s') . "秒" . " " . $_POST['name'] . " : " . $_POST['maintext'] . "\n";
    inputter($inter);
    header('Location: chat.php');
?>