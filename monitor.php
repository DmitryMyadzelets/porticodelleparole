<?php

    do {
        if (empty($_POST)) break;

        // Get POST data

        if (!isset($_POST['page_height'])) break;
        if (!isset($_POST['view_height'])) break;
        if (!isset($_POST['view_offset'])) break;

        $page_height = $_POST['page_height'];
        $view_height = $_POST['view_height'];
        $view_offset = $_POST['view_offset'];

        $data = $page_height.", ".$view_height.", ".$view_offset."\n";

        // Make file name

        $str_date = date('Ymd', strtotime('now'));
        $ip = getenv("REMOTE_ADDR");
        $fname = 'monitor/'.$str_date.'_'.$ip.'.log';

        echo $data;

        $fsize = 0;
        
        if (file_exists($fname)) { $fsize = filesize($fname); }

        if ($fp = fopen($fname, 'a')) {
            // Maximum file size (protection from overfill)
            $fsize_max = 100*1024;

            if ($fsize < $fsize_max) {
                fwrite($fp, $data);
            }

            fclose($fp);
        }
    } while (false);

?>