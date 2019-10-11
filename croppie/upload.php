<?php

//upload.php

if(isset($_POST["image"]))
{
 $data = $_POST["image"];

 $image_array_1 = explode(";", $data);

 $image_array_2 = explode(",", $image_array_1[1]);

 $data = base64_decode($image_array_2[1]);

 $imageName =((isset($_GET['title']))?$_GET['title']: time()) . '.png';

 file_put_contents('uploads/'.$imageName, $data);

 echo '<img src="uploads/'.$imageName.'" class="img-thumbnail" />';
}

?>