<?php

    function dump (&$v) {
        echo '<pre>' . print_r($v, true) . '</pre>';
    };

    require '../ImageUploader.php';

    try {

        $query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
        parse_str($query, $params);

        $id = $params['id'];

        $iu = new ImageUploader('../../img/photos/');
        $iu->serve($id);

    } catch (Exception $e) {
        dump($e);
    }
?>