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
			if ($_POST["botControl"] != date("Y")) {
				echo "<h1 style=\"color:red\"> Bohužel, konrolní otázka nebyla zodpovězena správně. Zkuste to, prosím, znova!</h1>";
			} else {
				$date = new DateTime($_POST["birthDate"]);
				$date = $date->format('d.m.Y');
				$url = "http://www.concept.godive.cz/registrationForm.php?";
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
				$course = $courses[$_POST["course"]];
				$course .= $_POST["EANx"]?" + EANx":"";
				$urlParams = [];
				foreach ($response as $key => $value) {
					array_push($urlParams, $key . "=" . urlencode($value));
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
							echo "<h1>Děkujeme za přihlášení na kurz<br>$course</h1>
				</div>
				<div class=\"content\">
				<p>Vytiskněte si prosím přihlášku, podepište a přineste na první hodinu</p>
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
				$message = "<h1>Nově zaregistrovaný <a href=$url>uživatel</a> na kurz " . $courses[$_POST["course"]] . "</h1>";
				$message .= "<p>Jméno: ${_POST["firstName"]} ${_POST["lastName"]}, mobil: ${_POST["phone"]}, email: ${_POST["email"]} </p>";
				$message .= "<p>Výška: ${_POST["height"]}, váha: ${_POST["weight"]}, velikost boty: ${_POST["shoeSize"]}</p>";
				$message .= "<p>IANTD člen: " . ($_POST["member"] == "true" ? "ANO - " . $_POST["memberId"] : "NE") . "</p>";
				$message .= "<p>Udané problémy ve formuláři: " . implode(", ", $overallCondition) . "</p>";
				$message .= "<p>Udané závažné problémy ve formuláři: " . implode(", ", $overallCriticalCondition) . "</p>";
				$header = 'From:GoDive@godive.cz;';
				$header .= "\nMIME-Version: 1.0\n";
				$header .= "Content-Type: text/html; charset=\"utf-8\"\n";
				$subject = "Informace o nové přihlášce" .  $courses[$_POST["course"]];
				$succes = mb_send_mail($mailTo, $subject, $message, $header);

			}
			?>
		</div>
	</main>
</body>

</html>