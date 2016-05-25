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
        <h1>È inviato!</h1>

        <p>
            Ti ringraziamo per averci dedicato il tuo tempo. Ti contatiamo appeno possibile!
        </p>

        <p>
            Tornare a pagina della <a href="/">assoziazone Portico delle Parole</a>.
        </p>
    </div>

    <div <?php if ($state == State::done) { echo 'style="visibility:hidden; height:0"'; } ?>>
        <h1>Apply for a full-immersion program in Russia</h1>

        <p>
            L'associazione Portico delle Parole le invita a fare un corso di lingua russa in Russia a una bellisima cita <a href="https://www.google.it/search?q=Petrozavodsk&tbm=isch">Petrozavodsk</a>, a la <a href="http://www.enjoyrussian.com">scuola &quot;Enjoy Russian&quot;</a>! Please, come to l'associazione Portico delle Parole or call us if you have any questions.
        </p>
        <p> 
            Per cominciare l’iscrizione compila la forma giu.
        </p>

        <hr>

        <form method="post" action="<?php $_PHP_SELF ?>">

            <h2>About your stay in Russia</h2>

            <div>
                <label for="Level of Russian">Livello di competenza della lingua russa</label><br>
                <select name="Level of Russian">
                    <option value="Beginner">Principiante (nessuna conoscenza della lingua russa)</option>
                    <option value="Elementary (you have learned 100 language hours)">Elementario (100 ore di studio)</option>
                    <option value="Basic (you have learned 300 language hours)">Base (300 ore di studio)</option>
                    <option value="First certificate level (you have learned 900 language hours)">Primo livello del certificato linguistico (900 ore di studio)</option>
                    <option value="Second certificate level (you have learned 1500 language hours)">Secondo livello del certificato linguistico (1500 ore di studio)</option>
                    <option value="Third certificate level (you have learned 1800 language hours)">Terzo livello del certificato linguistico  (you have learned 1800 language hours)</option>
                </select>
            </div>

            <div>
                <label for="Program">Programma</label><br>
                <select name="Program">
                    <option value="Intensive Russian in a group (3-5 people)">Corso intensivo in gruppo di 3-5 persone</option>
                    <option value="Individual">Corso individuale</option>
                    <option value="Skype course">Corso su Skype</option>
                    <!-- <option value="Volunteer + Russian">Volontariato + Russo</option> -->
                    <!-- <option value="Scholarship">Borsa di studio</option> -->
                    <!-- <option value="Summer / Intensive Russian in a group">Summer / Intensive Russian in a group</option> -->
                    <!-- <option value="Summer / One-to-one">Summer / One-to-one</option> -->
                </select>
            </div>

            <div>
                <label for="Month">Mese</label><br>
                <select name="Month">
                    <option value="January">Gennaio</option>
                    <option value="February">Febbraio</option>
                    <option value="March">Marzo</option>
                    <option value="April">Aprile</option>
                    <option value="May">Maggio</option>
                    <option value="June">Giugno</option>
                    <option value="July">Luglio</option>
                    <option value="August">Agosto</option>
                    <option value="September">Settembre</option>
                    <option value="October">Ottobre</option>
                    <option value="November">Novembre</option>
                    <option value="December">Dicembre</option>
                </select>
            </div>

            <div>
                <label for="Duration">Durata</label><br>
                <select name="Duration">
                    <option value="1 week">1 settimana</option>
                    <option value="2 weeks">2 settimane</option>
                    <option value="3 weeks">3 settimane</option>
                    <option value="4 weeks">4 settimane</option>
                    <option value="2 months">2 mesi</option>
                    <option value="3 months">3 mesi</option>
                </select>
            </div>

            <div>
                <label for="ExactDates">Le date esatte, se si conosce</label><br>
                <input name="ExactDates" type="text">
            </div>

            <div>
                <label for="Accommodation">Alloggio</label><br>
                <select name="Accommodation">
                    <option value="Homestay with breakfast and evening meal">
                        Alloggio presso famiglie ospitanti con colazione e cena
                    </option>
                    <option value="Homestay with breakfast">
                        Alloggio presso famiglie ospitanti con colazione
                    </option>
                    <option value="hostel">Ostello</option>
                </select>
            </div>

            <div>
                <label for="Visa is reqired">È richiesto invito per il visto</label><br>
                <select name="Visa is reqired">
                    <option value="Yes">Si</option>
                    <option value="No">No</option>
                </select>
            </div>

            <h2>Dati personali</h2>

            <div class='div-table'>
                <div class='div-column col-half'>
                    <label for="Name">Nome</label>
                    <input name="Name" type="text" required>
                </div>

                <div class='div-column col-half'>
                    <label for="Surname">Cognome</label>
                    <input name="Surname" type="text" required>
                </div>
            </div>

            <div>
                <label for="Birthday">Data di nascita</label>
                <input name="Birthday" type="text" required>
            </div>

            <div>
                <label for="Gender">Sesso</label><br>
                <select name="Gender">
                    <option value="male">Maschile</option>
                    <option value="female">Femminile</option>
                </select>
            </div>

            <div>
                <label for="Citizenship">Cittadinanza</label>
                <input name="Citizenship" type="text" required>
            </div>

            <div class='div-table'>
                <div class='div-column col-half'>
                    <label for="Email">E-mail</label>
                    <input name="Email" type="email" required>
                </div>

                <div class='div-column col-half'>
                    <label for="Phone">Telefono</label>
                    <input name="Phone" type="text" required>
                </div>
            </div>

            <div style="visibility:hidden; height:0">
                <input name="Agent in Italy" type="text" value="Associazione Portico delle Parole">
            </div>

            <h2>Opzionale</h2>

            <div>
                <label for="Whishes">Aspettative dal corso</label>
                <input name="Whishes" type="text">
            </div>

            <div>
                <input name="Send me promitions" value="Yes" type="checkbox">
                <label for="Send me promitions">Voglio ricevere informazione di nuovi corsi</label>
            </div>

            <button type="submit">Invia</button>

        </form>
    </div>
    

</div>
</body>
<?php

    if ($state == State::done) {

        $to  = 'info@porticodelleparole.it'.',';
        $to .= 'DmitryMyadzelets@gmail.com';
        $subject = 'Application from Portico delle Parole';

        $message = "This is an appliction sent from association 'Portico delle Parole' (www.porticodelleparole.it) \r\n\r\n";
        foreach ($values as $key => $value) {
            $message = $message.$key.' : '.$value."\r\n";
        }

        $headers   = array();
        $headers[] = "MIME-Version: 1.0";
        $headers[] = "Content-type: text/plain; charset=iso-8859-1";
        $headers[] = "From: Portico delle Parole <info@porticodelleparole.it>";
        // $headers[] = "Reply-To: Recipient Name <info@porticodelleparole.it>";
        $headers[] = "Subject: {$subject}";
        // $headers[] = "X-Mailer: PHP/".phpversion();

        mail($to, $subject, $message, implode("\r\n", $headers));
    }
?>

</html>