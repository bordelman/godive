<!DOCTYPE html>
<html lang='cz'>

<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' href='css/main.css'>
	<link rel='stylesheet' href='css/confirmation.css'>
	<link rel="icon" href="/sources/logo.ico" type="image/x-icon">
	<script src='index.js' type='text/javascript' defer></script>
	<title>GoDive | Potvrzení</title>
</head>


<body>
	<main class="thankUPage">
		<div class="content">
			<?= "<div class=\"content\">";
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
			$course = $courses[$_POST["course"]];
			$course .= $_POST["EANx"] ? " + EANx" : "";
			
			mb_internal_encoding("UTF-8");
			$mailTo = $_POST["email"];
			$message = "Děkujeme za váš zájem, brzy vás budeme kontaktovat";
			$header = 'From:GoDive@godive.cz;';
			$header .= "\nMIME-Version: 1.0\n";
			$header .= "Content-Type: text/html; charset=\"utf-8\"\n";
			$subject = "Potvrzení přijetí přihlášky";
			$succes = mb_send_mail($mailTo, $subject, $message, $header);
			echo "<h1>Děkujeme za váš zájem o <br>$course</h1>
				<div class=\"content\">
				<p>Brzy vám zašleme platební a ostatní informace</p>
				</div>
				";

			$message = "<h1>Nová žádost o voucher na kurz $course</h1>";
			$message .= "<p>Jméno: ${_POST["firstName"]} ${_POST["lastName"]}, email: ${_POST["email"]}</p><p>Poznámka: ${_POST["note"]}</p>";
			$header = 'From:GoDive@godive.cz;';
			$header .= "\nMIME-Version: 1.0\n";
			$header .= "Content-Type: text/html; charset=\"utf-8\"\n";
			$subject = "Informace o nové žádosti o voucher na $course";
			$succes = mb_send_mail($mailTo, $subject, $message, $header);
			?>
		</div>
	</main>
</body>

</html>