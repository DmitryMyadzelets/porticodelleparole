<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Coso di lingua russa in Russia con Associazione Portoco delle Parole">
    <meta name="keywords" content="corso di russo a bologna,
    corso di russo in Russia,
    corso di russo Petrozavodsk
    scuola Enjoy Russian,
    scuola di lingue,
    corso di lingua russa,
    portico delle parole,
    porticodelleparole,
    porticodelleparole.it
    ">

    <link rel="stylesheet" type="text/css" href="../normalize.css">
    <link rel="stylesheet" type="text/css" href="../main.css">
    <style type="text/css">
        form
        input[type=text],
        input[type=email] {
            width: 100%;
            margin-top: 0.2em;
            padding: 0.3em;
            /*box-sizing: border-box;*/
        }

        form select {
            margin-top: 0.2em;
            padding: 0.1em;
        }

        form div {
            margin-bottom: 1em;
            margin-right: 1em;
        }

        .div-column {
            padding-right: 1em;
        }

        button {
            padding: 0.3em 1em;
            margin-bottom: 1em;
        }
    </style>

    <title>Corso di russo in Russia</title>

</head>

<body>

<?php
    class State {
        const typing = 0;
        const done = 2;
    }

    $state = State::typing;

    if ($_POST) {
        $state = State::done;
    }

    $values = array();


    if ($_POST) {
        // Debug
        // echo '<pre>';
        // echo htmlspecialchars(print_r($_POST, true));
        // echo '</pre>';
        
       
        do {

            if ($state != State::done) { break; }

            /* Make file name. It is current date + CSV */
            $str_date = date('Ymd', strtotime('now'));
            $fname = './log/'.$str_date.'-enjoyrussian.csv';

            $fsize = 0;
            
            if (file_exists($fname)) { $fsize = filesize($fname); }


            if ($fp = fopen($fname, 'a')) {
                /* Write CSV header if file is new or it's empty.
                Newly created file has size 1.
                */
            
                if ($fsize < 1) {
                    $names = array_merge(array('ip'), array_keys($_POST));
                    fputcsv($fp, 
                        $names,
                        ';');
                }

                /* Maximum file size (protection from overfill) */
                $fsize_max = 100*1024;

                if ($fsize < $fsize_max) {
                    $values = array();
                    $values['ip'] = getenv("REMOTE_ADDR");
                    $values = array_merge($values, $_POST);
                    fputcsv($fp, 
                        $values,
                        ';');
                }

                fclose($fp);
            }

        } while (false);
    }
?>

<div class="main-container shadow">

    <div style="position: relative; left: 0; top: 0;">
        <img src="enjoy_russian_header.jpg">
        <img src="http://www.enjoyrussian.com/img/logo.png" alt="Logo of Enjoy Russian" style="width: 266px !important; position: absolute; left: 0">
    </div>
    
    <div <?php if ($state != State::done) { echo 'style="visibility:hidden; height:0"'; } ?>>
        <h1>Inviato!</h1>

        <p>
            Ti ringraziamo per averci dedicato un po’ del tuo tempo. Ti contatteremo appena possibile.
        </p>

        <p>
            Tornare alla pagina dell’<a href="/">associazione Portico delle Parole</a>.
        </p>
    </div>

    <div <?php if ($state == State::done) { echo 'style="visibility:hidden; height:0"'; } ?>>
        <h1>Iscriviti per un programma &quot;full-immersion&quot; in Russia</h1>

        <p>
            <a href="/">L’associazione Portico delle Parole</a> ti invita a fare un corso di lingua russa in Russia 
            nella bellissima città di <a href="https://www.google.it/search?q=Petrozavodsk&tbm=isch">Petrozavodsk</a>, 
            presso la <a href="http://www.enjoyrussian.com">scuola &quot;Enjoy Russian&quot;</a>!
        </p>
        <p> 
            Per cominciare l’iscrizione compila gli spazi sottostanti. 
        </p>

        <hr>

        <form method="post" action="<?php $_PHP_SELF ?>">

            <h2>La tua permanenza in Russia</h2>

            <div>
                <label for="Текущий уровень русского языка">Livello di competenza</label><br>
                <select name="Текущий уровень русского языка">
                    <option value="Начинающий (знание отсутствует)">Principiante (nessuna conoscenza della lingua russa)</option>
                    <option value="Элементарный (100 часов обучения)">Elementare (100 ore di studio)</option>
                    <option value="Базовый (300 часов обучения)">Base (300 ore di studio)</option>
                    <option value="Сертификат первого уровня (900 часов обучения)">Primo livello del certificato linguistico (900 ore di studio)</option>
                    <option value="Сертификат второго уровня (1500 часов обучения)">Secondo livello del certificato linguistico (1500 ore di studio)</option>
                    <option value="Сертификат третьего уровня (1800 часов обучения)">Terzo livello del certificato linguistico  (1800 ore di studio)</option>
                </select>
            </div>

            <div>
                <label for="Программа">Programma</label><br>
                <select name="Программа">
                    <option value="Курс интенсивный в группе (3-5 человек)">Corso intensivo in gruppo di 3-5 persone</option>
                    <option value="Курс индивидуальный">Corso individuale</option>
                    <option value="Курс по Скайпу">Corso su Skype</option>
                    <!-- <option value="Volunteer + Russian">Volontariato + Russo</option> -->
                    <!-- <option value="Scholarship">Borsa di studio</option> -->
                    <!-- <option value="Summer / Intensive Russian in a group">Summer / Intensive Russian in a group</option> -->
                    <!-- <option value="Summer / One-to-one">Summer / One-to-one</option> -->
                </select>
            </div>

            <div>
                <label for="Месяц">Mese</label><br>
                <select name="Месяц">
                    <option value="Январь">Gennaio</option>
                    <option value="Февраль">Febbraio</option>
                    <option value="Март">Marzo</option>
                    <option value="Апрель">Aprile</option>
                    <option value="Май">Maggio</option>
                    <option value="Июнь">Giugno</option>
                    <option value="Июль">Luglio</option>
                    <option value="Август">Agosto</option>
                    <option value="Сентябрь">Settembre</option>
                    <option value="Октябрь">Ottobre</option>
                    <option value="Ноябрь">Novembre</option>
                    <option value="Декабрь">Dicembre</option>
                </select>
            </div>

            <div>
                <label for="Продолжительность">Durata</label><br>
                <select name="Продолжительность">
                    <option value="1 неделя">1 settimana</option>
                    <option value="2 недели">2 settimane</option>
                    <option value="3 недели">3 settimane</option>
                    <option value="4 недели">4 settimane</option>
                    <option value="2 месяца">2 mesi</option>
                    <option value="3 месяца">3 mesi</option>
                </select>
            </div>

            <div>
                <label for="Точные даты">Le date esatte, se si conosce</label><br>
                <input name="Точные даты" type="text">
            </div>

            <div>
                <label for="Проживание">Alloggio</label><br>
                <select name="Проживание">
                    <option value="В семье, с завтраком и ужином">
                        Alloggio presso famiglie ospitanti con colazione e cena
                    </option>
                    <option value="В семье, с завтраком">
                        Alloggio presso famiglie ospitanti con colazione
                    </option>
                    <option value="В хостеле">Ostello</option>
                </select>
            </div>

            <div>
                <label for="Требуется приглашие для визы">È richiesto invito per il visto</label><br>
                <select name="Требуется приглашие для визы">
                    <option value="Да">Si</option>
                    <option value="Нет">No</option>
                </select>
            </div>

            <h2>Dati personali</h2>

            <div class='div-table'>
                <div class='div-column col-half'>
                    <label for="Имя">Nome</label>
                    <input name="Имя" type="text" required>
                </div>

                <div class='div-column col-half'>
                    <label for="Фамилия">Cognome</label>
                    <input name="Фамилия" type="text" required>
                </div>
            </div>

            <div>
                <label for="Дата рождения">Data di nascita</label>
                <input name="Дата рождения" type="text" required>
            </div>

            <div>
                <label for="Пол">Sesso</label><br>
                <select name="Пол">
                    <option value="мужской">Maschile</option>
                    <option value="женский">Femminile</option>
                </select>
            </div>

            <div>
                <label for="Гражданство">Cittadinanza</label>
                <input name="Гражданство" type="text" required>
            </div>

            <div class='div-table'>
                <div class='div-column col-half'>
                    <label for="Email">E-mail</label>
                    <input name="Email" type="email" required>
                </div>

                <div class='div-column col-half'>
                    <label for="Телефон">Telefono</label>
                    <input name="Телефон" type="text" required>
                </div>
            </div>

            <div style="visibility:hidden; height:0">
                <input name="Агент в Италии" type="text" value="Ассоциация Portico delle Parole">
            </div>

            <h2>Opzionale</h2>

            <div>
                <label for="Ожидания от курса">Aspettative dal corso</label>
                <input name="Ожидания от курса" type="text">
            </div>

            <div>
                <input name="Сообщайте мне о новых курсах" value="Да" type="checkbox">
                <label for="Сообщайте мне о новых курсах">Voglio ricevere informazioni sui nuovi corsi</label>
            </div>

            <button type="submit">Invia</button>

        </form>
    </div>
    

</div>
</body>
<?php

    if ($state == State::done) {

        $to  = 'DmitryMyadzelets@gmail.com';
        $to .= ','.'info@porticodelleparole.it';
        $to .= ','.'info@enjoyrussian.com';
        $subject = 'Заявка от ассоциации Portico delle Parole';

        $message = "Заявка на прохождение программы изучения русского языка, от ассоциации 'Portico delle Parole' (www.porticodelleparole.it) \r\n\r\n";
        foreach ($values as $key => $value) {
            $message = $message.$key." : ".$value."\r\n";
        }

        $headers   = array();
        $headers[] = "MIME-Version: 1.0";
        // $headers[] = "Content-type: text/plain; charset=iso-8859-1";
        // $headers[] = "Content-Type: text/html; charset=UTF-8";
        $headers[] = "Content-Type: text/plain; charset=utf-8;";
        $headers[] = "From: Portico delle Parole <info@porticodelleparole.it>";
        $headers[] = "Subject: {$subject}";
        $headers[] = "X-Mailer: PHP/".phpversion();

        mail($to, $subject, $message, implode("\r\n", $headers));
    }
?>

</html>