<!DOCTYPE html>
<html lang='cz'>

<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' href='css/main.css'>
	<link rel='stylesheet' href='css/confirmation.css'>
	<link rel="icon" href="/sources/logo.ico" type="image/x-icon">
	<script src='index.js?' defer></script>
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

			$messageBody = '
			<div>
				<h5>Fakturační údaje</h5>
				<table>
					<tr>
						<td>Jméno</td>
						<td>' . $_POST["firstName"] . " " . $_POST["lastName"] . '</td>
					</tr>
					<tr>
						<td>Adresa</td>
						<td>' . $_POST["street"] . '</td>
					</tr>
					<tr>
						<td>Město</td>
						<td>' . $_POST["city"] . '</td>
					</tr>
					<tr>
						<td>PSČ</td>
						<td>' . $_POST["zip"] . '</td>
					</tr>
					<tr>
						<td>Stát</td>
						<td>' . $_POST["state"] . '</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>' . $_POST["email"] . '</td>
					</tr>
				</table>
			</div>
			';
			$mailTo = "info@godive.cz";
			//$mailTo = "peckaku@gmail.com";
			$message = "<h1>Nová žádost o voucher na kurz $course</h1>";
			$message .= $messageBody;
			$message .= "<p>Poznámka: " . htmlspecialchars($_POST["note"]) . "</p>";
			$header = 'From:GoDive@godive.cz;';
			$header .= "\nMIME-Version: 1.0\n";
			$header .= "Content-Type: text/html; charset=\"utf-8\"\n";
			$subject = "Informace o nové žádosti o voucher na $course";
			$succes = mb_send_mail($mailTo, $subject, $message, $header);
			if ($succes != 1) echo "<p>Email pro godive nebyl odeslán správně, prosím kontaktujte nás na <a href='mailto:info@godive.cz'>info@godive.cz</a></p>";
			?>

		</div>
	</main>
</body>

</html>