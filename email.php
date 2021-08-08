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
			$courses = ["trialDive" => "Ponor na zkoušku", "owd" => "OWD", "aowd" => "AOWD", "nd" => "Nitrox Diver", "dd" => "Deep Diver", "and" => "Advanced Nitrox Diver", "artd" => "Advanced Recreational Trimix Diver", "ntd" => "Normoxic Trimix Diver", "td" =>
			"Trimix Diver", "rd" => "Rescue Diver", "dm" => "Divemaster", "id" => "Ice Diver", "dsd" => "Dry Suit Diver",];
			echo "<p>Jméno: <b>${_POST["firstName"]} ${_POST["lastName"]}</b>&emsp;Datum narození: <b>${_POST["birthDate"]}</b></p>
			<p>Adresa: <b>${_POST["street"]}</b></p>
			<p>PSČ: <b>${_POST["zip"]}</b> Stát: <b>${_POST["state"]}</b></p>
			<p>Email: <b>${_POST["email"]}</b> telefon: <b>${_POST["phone"]}</b></p>
			<h3>POŽADOVANÝ KURZ/kvalifikace <b>${courses[$_POST["course"]]}</b></h3>
			<p>Já níže podepsaný, se přihlašuji do označeného kurzu potápění vedeného instruktorem - členem IANTD <br> a k
				členství v IANTD.</p>";
			if ($_POST["course"] != "trialDive" && $_POST["course"] != "owd")
				echo "<p>Prohlašuji, že již jsem kvalifikovaný potápěč a že jsem svoji kvalifikaci
				<u>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</u> získal/a u následující organizace
				<u>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</u>, což dokládám.</p>";
			echo "<p>Jsem již členem IANTD
				<input type=\"checkbox\" id=member " . ($_POST[" member"] == "true" ? "checked" : "") . " disabled> <label>ANO</label>
        <input type=\"checkbox\" id=member " . ($_POST[" member"] == "false" ? "checked" : "") . " disabled> <label>NE</label></p>";
			echo "<p>Jsem srozuměn s tím, že aktivace mého členství v IANTD i aktivace platnosti mé kvalifikace je podmíněna
				úspěšným absolvováním kurzu a přijetím smluních podmínek členství v IANTD , které mne opravňuje k prokazování
				mnou dosažené potápěčské
				IANTD kvalifikace vůči třetím osobám. Dále beru na vědomí, že platný průkaz člena IANTD stvrzující moji
				kvalifikaci mi bude vystaven po absolvování kurzu a po úhradě příslušného poplatku prostřednictvím IANTD Central
				Europe s.r.o..</p>"
			?>
		</div>
	</main>
</body>

</html>