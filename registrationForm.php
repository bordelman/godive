<!DOCTYPE html>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='stylesheet' href='css/confirmation.css'>
	<title>GoDive | Tisk přihlášky</title>
</head>

<body>
	<main>
		<?php

		$lineSpace = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

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
		?>
		
		<div class="page">
			<header class="pageHeader\">
				<img src="sources/logo.png" alt="godive logo">
				<div class="headerText column">
					<p>Instruktor: IANTD #9801 Ladislav Hájek www.godive.cz</p>
					<h3>Přihláška do kurzu a přihláška k členství</h3>
				</div class="headerText">
				<img src="sources/logoIantd.png" alt="IANTD logo">
			</header>
			<?=
			"<div id=\"personalInfo\">
				<p>Jméno: <b>${_GET["firstName"]} ${_GET["lastName"]}</b>&nbsp;Datum narození: <b>${_GET["date"]}</b></p>
				<p>Adresa: <b>${_GET["street"]}, ${_GET["city"]}</b></p>
				<p>PSČ: <b>${_GET["zip"]}</b> Stát: <b>${_GET["state"]}</b></p>
				<p>Email: <b>${_GET["email"]}</b> telefon: <b>${_GET["phone"]}</b></p>
				<h3>POŽADOVANÝ KURZ/kvalifikace: <b>${courses[$_GET["course"]]}</b></h3>
				<p>Já níže podepsaný, se přihlašuji do označeného kurzu potápění vedeného instruktorem - členem IANTD <br> a k
					členství v IANTD.</p>
				<p>Prohlašuji, že již jsem kvalifikovaný potápěč a že jsem svoji kvalifikaci
					<span class=\"line\">$lineSpace</span> získal/a u následující organizace
					<span class=\"line\">$lineSpace</span>, což dokládám.
				</p>
				<p>Jsem již členem IANTD
					<input type=\"checkbox\" id=member " . ($_GET["member"] == "true" ? "checked" : "") . " disabled> <label>ANO</label>
        <input type=\"checkbox\" id=member " . ($_GET["member"] == "false" ? "checked" : "") . " disabled> <label>NE</label></p>
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
			<p>Datum: <span class=\" line\">$lineSpace</span>
				</p>
				<p>Podpis: <span class=\"line\">$lineSpace</span>&nbsp;IANTD č.: ". (intval($_GET["memberId"]) > 0 ? "<b>${_GET["memberId"]}</b>" : "<span class=\"line\">$lineSpace</span>")."</p>
				<p>Za nezletilého účastníka též zákonný zástupce:</p>
				<div class=\"underaged\">
					<p class=\"parent line\">$lineSpace$lineSpace$lineSpace$lineSpace</p>
					<p class=\"sign line\">$lineSpace</p>
				</div>
				<div class=\"underaged\">
					<p class=\"parent\">jméno, příjmení, datum narození, vztah k nezletilému</p>
					<p class=\"sign\">podpis</p>
				</div>
			</div>
		</div>
		";
		?>
	</main>
</body>