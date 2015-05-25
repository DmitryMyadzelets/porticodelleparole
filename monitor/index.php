<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>
        User behaviour analysis
    </title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <div class='files'>

        <?php
        /*
        Reads the current derectory and returns a document which contain a div's.
        Each div has an id equal to a file name.
        */
        do {
            // Extention of files we want
            $file_ext = 'log';
            // Get current work directory
            $fname = getcwd();
            
            // Get array of files
            $files = scandir($fname);
            if (!is_array($files)) break;

            // Make <div> for each file
            foreach ($files as $file) {
                $ext = pathinfo($file, PATHINFO_EXTENSION);
                if (0 == strcasecmp($ext, $file_ext)) {
                    echo "<div id=".$file."></div>";
                }
            }

        } while (false);
        ?>

    </div>
    <script type="text/javascript" src='http://cdnjs.cloudflare.com/ajax/libs/d3/2.10.0/d3.v2.min.js'></script>
    <script type="text/javascript" src='index.js'></script>
</body>
</html>
