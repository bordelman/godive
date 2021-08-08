<!DOCTYPE html>
<html lang='cz'>

<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' href='css/main.css'>
	<link rel='stylesheet' href='css/mail.css'>
	<link rel="icon" href="/sources/logo.ico" type="image/x-icon">
	<script src='index.js' type='text/javascript' defer></script>
	<title>GoDive | Potvrzení</title>
</head>


<body>
	<main class="thankUPage">
		<div class="content">
			<?php
			mb_internal_encoding("UTF-8");
			if ($_POST["botControl"] != date("Y")) {
				echo "<h1 style=\"color:red\"> Bohužel, konrolní otázka nebyla zodpovězena správně. Zkuste to, prosím, znova!</h1>";
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
				echo "<h1>Děkujeme za přihlášení na kurz<br>" . $courses[$_POST["course"]] . "</h1>";
			}
			?>
		</div>

		<?php
		if ($_POST["botControl"] == date("Y")) {
			$conditions = [
				"breathingProblems" => "Dýchání",
				"balanceProblem" => "Rovnováha",
				"alkoholProblem" => "Alkohol",
				"diabetesProblem" => "Cukrovka",
				"asthmaProblem" => "Astma",
				"smokingProblem" => "Kouření",
				"epilepsyProblem" => "Epilepsie",
				"earsProblem" => "Uši",
				"drugsProblem" => "Léky",
				"cardiacProblem" => "Srdce",
				"claustrofobiaProblem" => "Klaustrofobie",
				"recentSurgeryProblem" => "Operace",
				"headacheProblem" => "Hlava",
				"depressionProblem" => "Deprese",
				"dizzinessProblem" => "Závratě",
				"digestingProblem" => "Trávení",
				"pregnancyProblem" => "Těhotenství"
			];
			$date = new DateTime($_POST["birthDate"]);
			$date = $date->format('d.m.Y');
			$lineSpace = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			$courses = ["trialDive" => "Ponor na zkoušku", "owd" => "OWD", "aowd" => "AOWD", "nd" => "Nitrox Diver", "dd" => "Deep Diver", "and" => "Advanced Nitrox Diver", "artd" => "Advanced Recreational Trimix Diver", "ntd" => "Normoxic Trimix Diver", "td" =>
			"Trimix Diver", "rd" => "Rescue Diver", "dm" => "Divemaster", "id" => "Ice Diver", "dsd" => "Dry Suit Diver",];
			$message =  "
		<head>
	<style>
	.page * {
		text-shadow:none;
	color:black}
	.page {
		font-family: sans-serif;
		width: 21cm;
		height: 29.7cm;
		padding: 30mm 45mm 30mm 45mm;
		margin: auto
	}
	
	.page header p, h3 {
		margin: auto;
	}
	
	.headerText.column {
		display:flex;
		flex-direction: column;

	.pageHeader {
		display: flex;
		justify-content: space-around;
	}
	
	.page header img {
		height: 150px;
		width: auto;
	}
	
	.line {
		text-decoration: underline;
	}
	
	.underaged {
		display: flex;
		flex-direction: row;
		text-align: center;
	}
	
	.parent {
		width: 55ch;
		margin:auto
	}
	
	.sign {
		width: 30ch;
		margin: auto
	}
	</style>
</head>
					<div class=\"page\">
			<header class=\"pageHeader\" style=\"display:flex; flex-direction:row; justify-content: space-around;\">
				<img src=\"http://www.concept.godive.cz/sources/logo.png\" alt=\"godive logo\">
				<div class=\"headerText column\">
					<p>Instruktor: IANTD #9801 Ladislav Hájek www.godive.cz</p>
					<h3>Přihláška do kurzu a přihláška k členství</h3>
				</div class=\"headerText\">
				<img src=\"http://www.concept.godive.cz/sources/logoIantd.png\" alt=\"IANTD logo\">
			</header>
			<div id=\"personalInfo\">
			<p>Jméno: <b>${_POST["firstName"]} ${_POST["lastName"]}</b>&nbsp;Datum narození: <b>$date</b></p>
			<p>Adresa: <b>${_POST["street"]}, ${_POST["city"]}</b></p>
			<p>PSČ: <b>${_POST["zip"]}</b> Stát: <b>${_POST["state"]}</b></p>
			<p>Email: <b>${_POST["email"]}</b> telefon: <b>${_POST["phone"]}</b></p>
			<h3>POŽADOVANÝ KURZ/kvalifikace: <b>${courses[$_POST["course"]]}</b></h3>
			<p>Já níže podepsaný, se přihlašuji do označeného kurzu potápění vedeného instruktorem - členem IANTD <br> a k
				členství v IANTD.</p>
				<p>Prohlašuji, že již jsem kvalifikovaný potápěč a že jsem svoji kvalifikaci
				<span class=\"line\">$lineSpace</span> získal/a u následující organizace
				<span class=\"line\">$lineSpace</span>, což dokládám.</p>
			<p>Jsem již členem IANTD
				<input type=\"checkbox\" id=member " . ($_POST["member"] == "true" ? "checked" : "") . " disabled> <label>ANO</label>
        <input type=\"checkbox\" id=member " . ($_POST["member"] == "false" ? "checked" : "") . " disabled> <label>NE</label></p>
			<p>Jsem srozuměn s tím, že aktivace mého členství v IANTD i aktivace platnosti mé kvalifikace je podmíněna
				úspěšným absolvováním kurzu a přijetím smluních podmínek členství v IANTD , které mne opravňuje k prokazování
				mnou dosažené potápěčské
				IANTD kvalifikace vůči třetím osobám. Dále beru na vědomí, že platný průkaz člena IANTD stvrzující moji
				kvalifikaci mi bude vystaven po absolvování kurzu a po úhradě příslušného poplatku prostřednictvím IANTD Central
				Europe s.r.o..</p>
			
			<p>Podpisem této přihlášky zároveň stvrzuji přijetí závazků vyplývajících z mnou současně podepsancýh Podmínek členství. Svým podpisem této přihlášky výslovně potvrzuji, že:</p>
			<ul>
				<li>výše uvedené údaje jsou dle mého vědomí správné a úplně</li>
				<li>podmínky účasti v kurzu a členství v IANTD jsem si přečetl/-a jejich obsah plně akceptuji a souhlasím s ním</li>
				<li>splňuji podmínky pro účast v kurzu</li>
				<li>výslovně žádám, aby mé jméno, příjmení, datum narození, jakožto člena IANTD byly prostřednictvím instruktora a IANTD Central Europe s.r.o. předány IANTD/IAND Inc. a uvedeny na seznamu členů na webových stránkách IANTD, které obsahují seznam členů IANTD s vyznačením příslušné dosažené kvalifikace a č. IANTD</li>
				<li>v rámci kurzu se zavazuji respektovat pokyny instruktora</li>
				<li>potvrzuji, že jsem se před podpisem této listiny seznámil s Informací o opatřeních na ochranu osobních údajů instruktora / facility na jeho/ jejich www. stránkách a na stránkách IANTD Central Europe s.r.o. www.iantd.cz</li>
			</ul>
			<p>Datum: <span class=\"line\">$lineSpace</span></p>
			<p>Podpis: <span class=\"line\">$lineSpace</span>&nbsp;IANTD č.: <b>${_POST["memberId"]}</b></p>
			<p>Za nezletilého účastníka též zákonný zástupce:</p>
			<div class=\"underaged\">
				<p class=\"parent line\">$lineSpace$lineSpace$lineSpace$lineSpace</p>
				<p class=\"sign line\">$lineSpace</p>
			</div>
			<div class=\"underaged\">
				<p class=\"parent\">jméno, příjmení, datum narození, vztah k nezletilému</p>
				<p class=\"sign\">podpis</p>
			</div>
			<div>
				<p>$otherInfo</p>
			</div>			
		</div>
		</div>
		</main>
		</body>";

			$header = 'From:GoDive@godive.cz;';
			$header .= "\nMIME-Version: 1.0\n";
			$header .= "Content-Type: text/html; charset=\"utf-8\"\n";
			$subject = "Potvrzení přijetí přihlášky-asd";
			$succes = mb_send_mail($_POST["email"], $subject, $message, $header);
			echo " <div class=\"content\">
			<p>Vytiskněte si prosím přihlášku, podepište a přineste na první hodinu</p>
			<div class=\"buttons\">
				<button class=\"btn\" type=\"button\" onclick=\"window.print()\">Vytisknout přihlášku</button>
			</div>";
			if (
				$_POST["breathingProblems"] == "true" ||
				$_POST["balanceProblem"] == "true" ||
				$_POST["asthmaProblem"] == "true" ||
				$_POST["epilepsyProblem"] == "true" ||
				$_POST["drugsProblem"] == "true" ||
				$_POST["cardiacProblem"] == "true" ||
				$_POST["pregnancyProblem"] == "true"
			)
				echo "<p class=\"warning\">Z důvodu zdravotních komplikací bude pro účast vyžadován souhlas lékaře!</p>";
		}

		$otherInfo = "Výška: " . $_POST["height"] . "<br>";
		$otherInfo .= "Váha: " . $_POST["weight"] . "<br>";
		$otherInfo .= "Velikost boty: " . $_POST["shoeSize"] . "<br>";

		foreach ($conditions as $key => $condition) {
			if ($_POST[$key] == "true")
				$otherInfo .= "POZOR! " . $condition . "<br>";
		}
		echo $otherInfo;
		?>
		</div>

	</main>
	<div class="print">
		<?= $message ?>
	</div>
</body>

</html>