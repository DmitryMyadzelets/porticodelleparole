<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-control" content="private">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/main.css">
    <link rel="stylesheet" type="text/css" href="/css/pikaday.css">

    <title>
        Настройки Portico delle Parole
    </title>


</head>
<body>
<div class="main-container shadow" style="height: 100vh">

<?
    session_start();

    $authorized =
        (0 == strcmp(crypt($_SERVER['PHP_AUTH_USER'], 'PtJZBYLB$ZxdEgRLdTkm81W8aICEfS0'), 'PtFJzXps9Pua.')) &&
        (0 == strcmp(crypt($_SERVER['PHP_AUTH_PW'], '65UB0bil$ozz9ydv77PxgTodVmbwoe1'), '65J69sDP5Kr0M'));


    if (!$authorized) {
        header('WWW-Authenticate: Basic');
        header('HTTP/1.0 401 Unauthorized');
        echo '<h1>Authorization required</h1>';
        echo '</div></body></html>';
        exit;
    } else {
    }
?>

<?php

    $fname = 'config.json';

    if ($_POST && $authorized) {
        // Debug
        // echo '<pre>';
        // echo htmlspecialchars(print_r($_POST, true));
        // echo '</pre>';
        file_put_contents($fname, json_encode($_POST));
        header('Location: /');
        exit();
    }

    $data = @file_get_contents($fname);
    $config = (array)json_decode($data);

    // Debug
    // echo '<pre>';
    // echo htmlspecialchars(print_r($config, true));
    // echo $config;
    // echo $config['firstDateFormatted'];
    // echo '</pre>';
?>

    <h1>Настройки</h1>

    <form method="post" action="<?php $_PHP_SELF ?>">
        <label for="firstDateFormatted">Дата начала курса</label>
        <input id='firstDateFormatted' name="firstDateFormatted" type="text" value="<?php echo $config['firstDateFormatted']?>">
        <input id='firstDate' name="firstDate" type="text" value="<?php echo $config['firstDate']?>" hidden>

        <hr>
        <button type="submit">Сохранить</button>
        <? 
            if ($_POST) {
                echo '<a href="/">Сделано!...</a>';
            }
        ?>

    </form>


</div>

    <script src='/js/pikaday.min.js'></script>
    <script type="text/javascript">
        var year = (new Date()).getFullYear();
        var picker = new Pikaday({
            field: document.getElementById('firstDateFormatted'),
            i18n: {
                previousMonth : 'Mese precedente',
                nextMonth     : 'Mese successivo',
                months        : ['Gennaio','Febbraio','Marzo','Aprile','Maggio','Giugno','Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre'],
                weekdays      : ['Domenica','Luned&#236','Marted&#236','Mercoled&#236','Gioved&#236','Venerd&#236','Sabato'],
                weekdaysShort : ['Dom','Lun','Mar','Mer','Gio','Ven','Sab']
            },
            firstDay: 1,
            yearRange: [year, year + 1],
            onSelect: function() {
                var date = this.getDate();
                var d = date.getDate(),
                    m = date.getMonth(),
                    y = date.getFullYear();
                var mm = ['gennaio','febbraio','marzo','aprile','maggio','giugno','luglio','agosto','settembre','ottobre','novembre','dicembre'];
                var s = [d, m + 1, y].join('-');
                var ss = (d === 8) ? 'L’' : 'Il ';
                ss = ss + d + ' ' + mm[m];

                document.getElementById('firstDateFormatted').value = ss;
                document.getElementById('firstDate').value = s;
            }
        });
    </script>

</body>
</html>
