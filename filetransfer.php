<?php 
/**
 * Transfer file server to server using php 
 * */

//Unlimited max execution time
set_time_limit(0);

// Destination path 
$path = 'newfilename.zip';

// Source file path
$url =  'https://domain.com/filename.zip';

$newfname = $path;
echo 'Starting Download!<br>';
$file = fopen ($url, "rb");
if($file) {
	$newf = fopen ($newfname, "wb");
	if($newf)
		while(!feof($file)) {
			fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
			echo '1 MB File Chunk Written!<br>';
		}
}
if($file) {
	fclose($file);
}
if($newf) {
	fclose($newf);
}
echo 'Finished!';
