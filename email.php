<!doctype html>
<html lang="CZ">

<head>
	<meta charset="utf-8">
	<title>GoDive</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/mail.css">
	<link rel="icon" href="/sources/logo.ico" type="image/x-icon">
</head>

<body>
	<main>
		<page>
			<header>
				<img src="sources/logo.png" alt="godive logo">
				<div class="headerText">
					<p>Instruktor: IANTD #9801 Ladislav Hájek www.godive.cz</p>
					<h3>Přihláška do kurzu a přihláška k členství</h3>
				</div class="headerText">
				<img src="sources/logoIantd.png" alt="IANTD logo">
			</header>
			<div id="personalInfo">
				<?php
				$date = new DateTime($_POST["birthDate"]);
				$date = $date->format('d.m.Y');
				$lineSpace = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				$courses = ["trialDive" => "Ponor na zkoušku", "owd" => "OWD", "aowd" => "AOWD", "nd" => "Nitrox Diver", "dd" => "Deep Diver", "and" => "Advanced Nitrox Diver", "artd" => "Advanced Recreational Trimix Diver", "ntd" => "Normoxic Trimix Diver", "td" =>
				"Trimix Diver", "rd" => "Rescue Diver", "dm" => "Divemaster", "id" => "Ice Diver", "dsd" => "Dry Suit Diver",];
				echo "<p>Jméno: <b>${_POST["firstName"]} ${_POST["lastName"]}</b>&nbsp;Datum narození: <b>$date</b></p>
			<p>Adresa: <b>${_POST["street"]}, ${_POST["city"]}</b></p>
			<p>PSČ: <b>${_POST["zip"]}</b> Stát: <b>${_POST["state"]}</b></p>
			<p>Email: <b>${_POST["email"]}</b> telefon: <b>${_POST["phone"]}</b></p>
			<h3>POŽADOVANÝ KURZ/kvalifikace: <b>${courses[$_POST["course"]]}</b></h3>
			<p>Já níže podepsaný, se přihlašuji do označeného kurzu potápění vedeného instruktorem - členem IANTD <br> a k
				členství v IANTD.</p>";
				if ($_POST["course"] != "trialDive" && $_POST["course"] != "owd")
					echo "<p>Prohlašuji, že již jsem kvalifikovaný potápěč a že jsem svoji kvalifikaci
				<span class=\"line\">$lineSpace</span> získal/a u následující organizace
				<span class=\"line\">$lineSpace</span>, což dokládám.</p>";
				echo "<p>Jsem již členem IANTD
				<input type=\"checkbox\" id=member " . ($_POST["member"] == "true" ? "checked" : "") . " disabled> <label>ANO</label>
        <input type=\"checkbox\" id=member " . ($_POST["member"] == "false" ? "checked" : "") . " disabled> <label>NE</label></p>";
				echo "<p>Jsem srozuměn s tím, že aktivace mého členství v IANTD i aktivace platnosti mé kvalifikace je podmíněna
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
			<p>Podpis: <span class=\"line\">$lineSpace</span>&nbsp;";

				if ($_POST["member"] == "true") {
					echo "IANTD č.: ";
					echo $_POST["memberId"];
				}
				echo "</p>";
				echo "
			<p>Za nezletilého účastníka též zákonný zástupce:</p>
			<div class=\"underaged\">
				<p class=\"parent line\">$lineSpace$lineSpace$lineSpace$lineSpace</p>
				<p class=\"sign line\">$lineSpace</p>
			</div>
			<div class=\"underaged\">
				<p class=\"parent\">jméno, příjmení, datum narození, vztah k nezletilému</p>
				<p class=\"sign\">podpis</p>
			</div>";
				?>
			</div>
		</page>
	</main>
</body>

</html>