<?php

    function dump (&$v) {
        echo '<pre>' . print_r($v, true) . '</pre>';
    };

    require 'ImageUploader.php';
    $path = '../img/photos';

    try {

        $id = uniqid();
        $iu = new ImageUploader();

        $iu->setPath($path);                        // The directory where images will be uploaded
        $iu->setMinFileSize(10 * 1024);             // Set minimum file size in bytes
        $iu->setMaxFileSize(5000 * 1024);           // Set maximum file size in bytes

        // Resizes the image resource
        $resize = function (&$im) {
            // Get current dimensions
            $sw = imagesx($im);                     // Source width
            $sh = imagesy($im);                     // Source height
            $mw = 640;                              // Max width
            $mh = 480;                              // Max height
            $scale = min($mw / $sw, $mh / $sh);     // Scale
            $dw = ceil($sw * $scale);               // Destination width
            $dh = ceil($sh * $scale);               // Destination height

            $new = imagecreatetruecolor($dw, $dh);  // Create new image
            // Resize
            imagecopyresampled($new, $im, 0, 0, 0, 0, $dw, $dh, $sw, $sh);

            imagedestroy($im);                      // Delete old image
            $im = $new;
        };

        // Upload from file, and resize
        $iu->upload($_FILES["image"], $id, $resize);

        // Save
        $o = new stdClass();
        $o->date = date('c');
        $o->id = $id;
        $o->name = $_FILES['image']['name'];

        $fn = $path . '/log.txt';
        $json = json_encode($o);

        $bytes = file_put_contents($fn, $json . PHP_EOL , FILE_APPEND | LOCK_EX);

        // Output

        $path = '/photos/?id=' . $id;
        $str = 'Logged ' . $bytes . ' bytes to ' . $fn . '';

        dump($json);
        dump($str);
        dump($path);
        echo '<img src=\'' . $path .  '\'>';

    } catch (Exception $e) {
        dump($e);
    }
?>