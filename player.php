<?php

$video_link = $_POST["Amount"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Play video using url">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="images/icon.ico">
    <link rel="stylesheet" href="bootstrap/style.css">
    <title>Live Player SorenaFile</title>
</head>
<body>

<div class="main-menu" id="main-menu">



<div>
 
     <video class="video" controls>
  <source src="<?php echo $video_link ?>" type="video/mp4">
  مرورگر شما این قابلیت رو پشتیبانی نمیکند
</video>   


<form id="form" action="..">
 
</div>
<button class="draw" type="submit">بازگشت</button>


</form>
</div>

</body>
</html>