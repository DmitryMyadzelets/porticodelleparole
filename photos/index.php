<?php

    function dump (&$v) {
        echo '<pre>' . print_r($v, true) . '</pre>';
    };

    require '../upload/ImageUploader.php';

    try {

        $query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
        parse_str($query, $params);

        if (!isset($params['id'])) {
            $id = 0;
        } else {
            $id = $params['id'];
        }


        $iu = new ImageUploader('../img/photos/');
        if ($iu->exists($id)) {
            $iu->serve($id);
        } else {
            http_response_code(404);
        }

    } catch (Exception $e) {
        dump($e);
    }
?>