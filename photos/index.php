<?php

    function dump (&$v) {
        echo '<pre>' . print_r($v, true) . '</pre>';
    };

    try {

        $query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
        parse_str($query, $params);
        $id = $params['id'];

        if ($id) {

            require 'ImageUploader.php';

            $iu = new ImageUploader('../img/photos/');
            $iu->serve($id);

        } else {

            readfile('form.html');

        }

    } catch (Exception $e) {
        dump($e);
    }
?>