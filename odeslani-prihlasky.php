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
			if ($_POST["botControl"] != date("Y")) {
				echo "<h1 style=\"color:red\"> Bohužel, konrolní otázka nebyla zodpovězena správně. Zkuste to, prosím, znova!</h1>";
			} else {
				$date = new DateTime($_POST["birthDate"]);
				$date = $date->format('d.m.Y');
				$url = "https://www.godive.cz/tisk-prihlasky.php?";
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
				$response = [
					"course" => $_POST["course"],
					"eanx" => $_POST["EANx"],
					"firstName" => $_POST["firstName"],
					"lastName" => $_POST["lastName"],
					"street" => $_POST["street"],
					"zip" => $_POST["zip"],
					"state" => $_POST["state"],
					"city" => $_POST["city"],
					"email" => $_POST["email"],
					"phone" => $_POST["phone"],
					"member" => $_POST["member"],
					"memberId" => $_POST["memberId"],
					"date" => $date
				];
				$course = htmlspecialchars($courses[$_POST["course"]]);
				$course .= $_POST["EANx"] ? " + EANx" : "";
				$urlParams = [];
				foreach ($response as $key => $value) {
					array_push($urlParams, $key . "=" . urlencode(htmlspecialchars($value)));
				}
				$url .= implode("&", $urlParams);
				mb_internal_encoding("UTF-8");
				$mailTo = $_POST["email"];
				$message = "Děkujeme za vaší přihlášku, pokud jste si přihlášku nestáhli/nevytsiknuli, najdete ji na tomto odkazu:\n <b><a href=$url>Přihláška</a></b>";
				$header = 'From:GoDive@godive.cz;';
				$header .= "\nMIME-Version: 1.0\n";
				$header .= "Content-Type: text/html; charset=\"utf-8\"\n";
				$subject = "Potvrzení přijetí přihlášky";
				$succes = mb_send_mail($mailTo, $subject, $message, $header);
				if ($succes != 1) echo "<p>Nebyl vám odeslán konfirmační e-mail, prosím kontaktujte nás na <a href='mailto:info@godive.cz'>info@godive.cz</a></p>";

				echo "<h1>Děkujeme za přihlášení na kurz<br>$course</h1>
				</div>
				<div class=\"content\">
				<p>Vytiskněte si prosím přihlášku, podepište a přineste na první hodinu (přihlášku máte k dispozici ve vaší e-mailové schránce, zkontrolujte prosím i složku s nevyžádanou poštou)</p>
				<div class=\"buttons\">
				<a class=\"btn\" href=$url target=\"_blank\">Vytisknout přihlášku</button></a>
				</div>";
				$conditions = [
					"alkoholProblem" => "Alkohol",
					"diabetesProblem" => "Cukrovka",
					"smokingProblem" => "Kouření",
					"earsProblem" => "Problém s ušima",
					"claustrofobiaProblem" => "Klaustrofobie",
					"recentSurgeryProblem" => "Operace",
					"headacheProblem" => "Bolesti hlavy",
					"depressionProblem" => "Deprese",
					"dizzinessProblem" => "Závratě",
					"digestingProblem" => "Problémy s trávením",
				];
				$overallCondition = [];
				foreach ($conditions as $key => $value) {
					if ($_POST[$key] == "true") {
						array_push($overallCondition, $value);
					}
				}
				$criticalConditions = [
					"breathingProblems" => "Dýchání",
					"balanceProblem" => "Rovnováha",
					"asthmaProblem" => "Astma",
					"epilepsyProblem" => "Epilepsie",
					"drugsProblem" => "Léky",
					"cardiacProblem" => "Srdce",
					"pregnancyProblem" => "Těhotenství"
				];

				$overallCriticalCondition = [];
				foreach ($criticalConditions as $key => $value) {
					if ($_POST[$key] == "true") {
						array_push($overallCriticalCondition, $value);
					}
				}

				if (count($overallCriticalCondition) > 0) echo "<p class=\"warning\">Ze zdravotních důvodů (" . implode(", ", $overallCriticalCondition) . ") bude pro účast vyžadován souhlas lékaře!</p>";
				$mailTo = "info@godive.cz";
				$message = "<h1>Nově zaregistrovaný <a href=$url>uživatel</a> na kurz $course </h1>";
				$message .= "<p>Jméno: " . htmlspecialchars($_POST["firstName"]) . " " . htmlspecialchars($_POST["lastName"]) . ", mobil: " . htmlspecialchars($_POST["phone"]) . ", email: " . htmlspecialchars($_POST["email"]) . "</p>";
				$message .= "<p>Výška: " . htmlspecialchars($_POST["height"]) . ", váha: " . htmlspecialchars($_POST["weight"]) . ", velikost boty: " . htmlspecialchars($_POST["shoeSize"]) . "</p>";
				$message .= "<p>IANTD člen: " . ($_POST["member"] == "true" ? "ANO - " . htmlspecialchars($_POST["memberId"]) : "NE") . "</p>";
				$message .= "<p>Udané problémy ve formuláři: " . implode(", ", $overallCondition) . "</p>";
				$message .= "<p>Udané závažné problémy ve formuláři: " . implode(", ", $overallCriticalCondition) . "</p>";
				$header = 'From:GoDive@godive.cz;';
				$header .= "\nMIME-Version: 1.0\n";
				$header .= "Content-Type: text/html; charset=\"utf-8\"\n";
				$subject = "Informace o nové přihlášce" .  $courses[$_POST["course"]];
				$succes = mb_send_mail($mailTo, $subject, $message, $header);
				if ($succes != 1) echo "<p>Email pro godive nebyl odeslán správně, prosím kontaktujte nás na <a href='mailto:info@godive.cz'>info@godive.cz</a></p>";
			}
			?>
		</div>
	</main>
</body>

</html>