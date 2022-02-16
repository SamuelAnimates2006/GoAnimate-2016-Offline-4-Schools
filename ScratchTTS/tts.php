<?php
   $voice = 'male';
   $text = 'Error. There isnt any text input in the textbox OR in the query parameter.';
   $text = urlencode('Error. There isnt any text input in the textbox OR in the query parameter.');

if ($_GET['voice']) {
	$voice = $_GET['voice'];
}

if ($_GET['query']) {
	$text = substr($_GET['query'], 0, 128);
	$text = urlencode($_GET['query']);
}

   $filename  = bin2hex($voice) . '.' . md5($text);

   $file = "audio/" . $filename . ".mp3";
   
   $filename2 = $filename . ".mp3";

   if (!file_exists($file)) {
     $mp3 = file_get_contents('https://synthesis-service.scratch.mit.edu/synth?locale=en-US&gender=' . $voice . '&text=' . $text);
     file_put_contents($file, $mp3);
   }
   if (file_exists($file)) {
	 header('Content-Type: audio/mpeg');
     header('Content-Disposition: inline; filename="' . $filename2 . '"');
     header('Content-length: '. filesize($file));
     header('Cache-Control: no-cache');
     header('Content-Transfer-Encoding: chunked'); 
     readfile($file);
     exit;
   }
?>