<!DOCTYPE html>
<html lang='cz'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='css/main.css'>
    <link rel="icon" href="/sources/logo.ico" type="image/x-icon">
    <script src='index.js' type='text/javascript' defer></script>
    <title>GoDive | Potvrzení</title>
</head>


<body>
    <main>
        <div class="content">
            <h1>Děkujeme za vaší rezervaci</h1>
            <p>Na váš e-mail: <?= $_POST["email"]; ?> byla odeslána kopie vaší rezervace</p>
            <?php
            $url = "http://www.godive.cz/rentForm.php?";
            $urlParams = [];
            foreach ($_POST as $key => $value) {
                if ($_POST[$key])
                array_push($urlParams, $key . "=" . urlencode($value));
            }
            $url .= implode("&", $urlParams);
            $mailTo = $_POST["email"];
            mb_internal_encoding("UTF-8");
            $message = "Děkujeme za vaší rezervaci. Prosím vyčkejte na potvrzení.<br><b><a href=$url>Rezervační formulář</a></b>";
            $header = 'From:GoDive@godive.cz;';
            $header .= "\nMIME-Version: 1.0\n";
            $header .= "Content-Type: text/html; charset=\"utf-8\"\n";
            $subject = "Potvrzení přijetí rezervace";
            $succes = mb_send_mail($mailTo, $subject, $message, $header);

            $message = "Nová rezervace.<br><b><a href=$url>Rezervační formulář</a></b>";
            $header = 'From:GoDive@godive.cz;';
            $header .= "\nMIME-Version: 1.0\n";
            $header .= "Content-Type: text/html; charset=\"utf-8\"\n";
            $subject = "Nová rezervace";
            $succes = mb_send_mail($mailTo, $subject, $message, $header);

            ?>
            <div class="buttons">
                <a class="btn" href=<?= $url ?> target="_blank">Vytisknout rezervační formulář</a>
            </div>
        </div>
    </main>
</body>

</html>