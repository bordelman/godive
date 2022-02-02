<!DOCTYPE html>
<html lang='cz'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='css/main.css'>
    <link rel="icon" href="/sources/logo.ico" type="image/x-icon">
    <script src='index.js?'  defer></script>
    <title>GoDive | Potvrzení</title>
</head>


<body>
    <main>
        <div class="content">
            <h1>Děkujeme za vaší rezervaci</h1>
            <p>Na váš e-mail: <?= $_POST["email"]; ?> byla odeslána kopie vaší rezervace (přihlášku máte k dispozici ve vaší e-mailové schránce, zkontrolujte prosím i složku s nevyžádanou poštou)</p>
            <?php
            $url = "https://www.godive.cz/vypujcni-protokol.php?";
            $urlParams = [];
            foreach ($_POST as $key => $value) {
                if ($_POST[$key])
                    array_push($urlParams, $key . "=" . urlencode(htmlspecialchars($value)));
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
            if ($succes != 1) echo "<p>Nebyl vám odeslán konfirmační email, prosím kontaktujte nás na <a href='mailto:info@godive.cz'>info@godive.cz</a></p>";

            $mailTo = "info@godive.cz";
            $message = "Nová rezervace.<br><b><a href=$url>Rezervační formulář</a></b>";
            $header = 'From:GoDive@godive.cz;';
            $header .= "\nMIME-Version: 1.0\n";
            $header .= "Content-Type: text/html; charset=\"utf-8\"\n";
            $subject = "Nová rezervace";
            $succes = mb_send_mail($mailTo, $subject, $message, $header);
            if ($succes != 1) echo "<p>Email pro godive nebyl odeslán správně, prosím kontaktujte nás na <a href='mailto:info@godive.cz'>info@godive.cz</a></p>";
            ?>
            <div class="buttons">
                <a class="btn" href=<?= $url ?> target="_blank">Vytisknout rezervační formulář</a>
            </div>
        </div>
    </main>
</body>

</html>