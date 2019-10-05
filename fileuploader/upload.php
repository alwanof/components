<?php

//Config

define('UPLOUD_FOLDER', 'storage');
define('SUBFOLDER', true);


$subfolder=(SUBFOLDER)?RandomString(11).'/':null;

if(!empty($_FILES))
{
	if(is_uploaded_file($_FILES['control']['tmp_name']))
	{
		sleep(1);
		$path = UPLOUD_FOLDER.'/'.$subfolder;
		$source_path = $_FILES['control']['tmp_name'];
		$target_path = UPLOUD_FOLDER.'/'.$subfolder. $_FILES['control']['name'];
		if ( ! is_dir($path)) {
		    mkdir($path);
		}
		if(move_uploaded_file($source_path, $target_path))
		{
			echo substr($_FILES['control']['name'], 0,15).'...';
			//echo '<img src="'.$target_path.'" class="img-thumbnail" width="300" height="250" />';
		}
	}
}

  function RandomString($length = 11) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>