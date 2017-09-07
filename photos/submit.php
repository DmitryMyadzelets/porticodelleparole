<?php

    function dump (&$v) {
        echo '<pre>' . print_r($v, true) . '</pre>';
    };

    require 'ImageUploader.php';

    try {

        $id = uniqid();
        $iu = new ImageUploader();

        $iu->setPath('../img/photos');              // The directory where images will be uploaded
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

        // Output

        $path = '/photos/img/?id=' . $id;
        dump($path);
        echo '<img src=\'' . $path .  '\'>';

    } catch (Exception $e) {
        dump($e);
    }
?>