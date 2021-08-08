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
			echo "<h1>Děkujeme za přihlášení na kurz " . $courses[$_POST["course"]] . "</h1>";

			$body = "vaše ulice je: " . $_POST["street"];

			$header = 'From:GoDive@godive.cz;';
			$header .= "\nMIME-Version: 1.0\n";
			$header .= "Content-Type: text/html; charset=\"utf-8\"\n";
			$subject = 'Nová zpráva z mailformu';
			echo "<br>" . $body . "<br>";
			$succes = mb_send_mail($_POST["email"], $subject, $body, $header);
			$succes = mb_send_mail($_POST["email"], $subject, $body, $header);
			echo "<br>odesláno " . $succes;
			if ($succes)
				echo "<p>Na váš e-mail: " . $_POST["email"] . " byla odeslána kopie vaší přihlášky</p>";
			else
				echo "<p>E-mail se nepodařilo odeslat, kontaktujte nás prosím přímo na <a href=\"tel:+420 602 148 026\">+420 602 148 026</a></p>";
		}
		?>

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
				$lineSpace = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				$courses = ["trialDive" => "Ponor na zkoušku", "owd" => "OWD", "aowd" => "AOWD", "nd" => "Nitrox Diver", "dd" => "Deep Diver", "and" => "Advanced Nitrox Diver", "artd" => "Advanced Recreational Trimix Diver", "ntd" => "Normoxic Trimix Diver", "td" =>
				"Trimix Diver", "rd" => "Rescue Diver", "dm" => "Divemaster", "id" => "Ice Diver", "dsd" => "Dry Suit Diver",];
				echo "<p>Jméno: <b>${_POST["firstName"]} ${_POST["lastName"]}</b>&nbsp;Datum narození: <b>${_POST["birthDate"]}</b></p>
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
				<input type=\"checkbox\" id=member " . ($_POST[" member"] == "true" ? "checked" : "") . " disabled> <label>ANO</label>
        <input type=\"checkbox\" id=member " . ($_POST[" member"] == "false" ? "checked" : "") . " disabled> <label>NE</label></p>";
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