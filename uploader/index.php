<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-control" content="private">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    
    <title>
        Фотки Portico delle Parole
    </title>


</head>

<body>
<div class="main-container shadow" style="min-height: 100vh">


<?php
    if ($_POST) {
        // Debug
        // echo '<pre>';
        // echo htmlspecialchars(print_r($_FILES, true));
        // echo '</pre>';

        require_once 'bulletproof/bulletproof.php';
        require_once 'bulletproof/utils/func.image-resize.php';

        $image = new Bulletproof\Image($_FILES);

        // Image min and max size (bytes)
        $image->setSize(10 * 1024, 5000 * 1024);

        // Use a simplier name base for the file
        $image->setName(uniqid());

        // Where to save the image files
        $image->setLocation('../img/photos');

        if ($image["pictures"]){
            $upload = $image->upload();
            
            if (!$upload){
                echo $image["error"];
                exit();
            }

            $resized = Bulletproof\resize(
                $image->getFullPath(),
                $image->getMime(),
                $image->getWidth(),
                $image->getHeight(),
                640,
                480,
                true
            );
        }
    }
?>


<h1>Фотки</h1>


<form method="POST" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
    <input type="file" name="pictures" accept="image/*"/>
    <input type="submit" value="Загрузить"/>
</form>

<?php
    if ($upload) {

        // Make web url
        $url = '/img/photos/' . basename($upload->getFullPath());
        echo '<p>' . $url . '</p>';
        echo '<img src=\'' . $url .'\'>';
    }
?>

</div>
</body>
</html>
