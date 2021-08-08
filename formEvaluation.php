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
		<?php
			mb_internal_encoding("UTF-8");

			if ($_POST["botControl"] != date("Y")) {
				echo "<h1 style=\"color:red\"> Bohužel, konrolní otázka nebyla zodpovězena správně. Zkuste to znova!</h1>";
			} else {
			$courses = [
				"trialDive" => "Ponor na zkoušku",
				"owd" => "OWD",
				"aowd" => "AOWD",
				"nd" => "Nitrox Diver",
				"dd" => "Deep Diver",
				"and" => "Advanced Nitrox Diver",
				"artd" => "Advanced Recreational Trimix Diver",
				"ntd" => "Normoxic Trimix Diver",
				"td" => "Trimix Diver",
				"rd" => "Rescue Diver",
				"dm" => "Divemaster",
				"id" => "Ice Diver",
				"dsd" => "Dry Suit Diver",
			];
			echo "<h1>Děkujeme za přihlášení na kurz ".$courses[$_POST["course"]]."</h1>";

				$body = "vaše ulice je: ".$_POST["street"];
				
				$header = 'From:GoDive //<info@godive.cz>;';
$header .= "\nMIME-Version: 1.0\n";
$header .= "Content-Type: text/html; charset=\"utf-8\"\n";
$subject = 'Nová zpráva z mailformu';
				echo "<br>".$body."<br>";
				$succes = mb_send_mail($_POST["email"], $subject, $body);//, $header);
				echo "<br>odesláno ".$succes;
				if ($succes)
				echo "<p>Na váš e-mail: ".$_POST["email"]." byla odeslána kopie vaší přihlášky</p>";
				else 
					echo "<p>E-mail se nepodařilo odeslat, kontaktujte nás prosím přímo na <a href=\"tel:+420 602 148 026\">+420 602 148 026</a></p>";
		}
				?>

    </main>
</body>
</html>