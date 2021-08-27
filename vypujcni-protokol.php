<!DOCTYPE html>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='stylesheet' href='css/confirmation.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>GoDive | Tisk rezervace</title>
</head>

<body onload="window.print()">
	<main>

		<div class="page">
			<header class="pageHeader">
				<img src="sources/logo.png" alt="GoDive logo">
				<div class="headerText column">
					<p>Instruktor: IANTD #9801 Ladislav Hájek www.godive.cz</p>
					<h3>Rezervační formulář</h3>
				</div>
				<img src="sources/logoIantd.png" alt="IANTD logo">
			</header>
			<?php
			$space = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			$emptyLine = "<span style='text-decoration:underline'>$space</span>";
			$name = $_GET["zip"] ? $_GET["firstName"] . " " . $_GET["lastName"] : $emptyLine;
			$address = $_GET["zip"] ? $_GET["street"] . ", " . $_GET["zip"] . " " . $_GET["city"] . ", " . $_GET["state"] : $emptyLine.$emptyLine;
			$email = $_GET["zip"] ? $_GET["email"] : $emptyLine;
			$phone = $_GET["zip"] ? $_GET["phone"] : $emptyLine;
			$height = $_GET["zip"] ? $_GET["height"] : $emptyLine;
			$weight = $_GET["zip"] ? $_GET["weight"] : $emptyLine;
			$shoeSize = $_GET["zip"] ? $_GET["shoeSize"] : $emptyLine;
			$dateFrom = new DateTime($_GET["dateFrom"]);
			$dateFrom = $dateFrom->format('d.m.Y');
			$dateTo = date("d.m.Y", strtotime("+" . $_GET["days"] . " day", strtotime($_GET["dateFrom"])));
			$term = $_GET["days"] ? $dateFrom . " - " . $dateTo . " (" . $_GET["days"] . ")" : $emptyLine.$emptyLine;
			echo "<p>Jméno: $name</p>
			<p>Adresa: $address<p>
			<p>Email: $email</p>
			<p>Telefon: $phone</p>
			<p>Číslo OP: <span style=\"text-decoration:underline\">$space</span></p>
			<p>Výška: $height cm, váha: $weight kg, velikost boty: $shoeSize
			<p>Termín zapůjčení: $term"?>
			<table id="rentTable">
				<thead>
					<tr>
						<td class="item">Položka</td>
						<td class="p10">Rezervováno</td>
						<td class="p10">Zapůjčeno</td>
						<td class="p10">Vráceno</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="item"><label for="mask">Maska</label></td>
						<td class="t-center"><input type="checkbox" <?= $_GET["mask"] ? "checked" : "unchecked" ?> disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
					</tr>
					<tr>
						<td class="item"><label for="fin">Ploutve</label></td>
						<td class="t-center"><input type="checkbox" <?= $_GET["fin"] ? "checked" : "unchecked" ?> disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
					</tr>
					<tr>
						<td class="item"><label for="shoes">Neoprenové boty</label></td>
						<td class="t-center"><input type="checkbox" <?= $_GET["shoes"] ? "checked" : "unchecked" ?> disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
					</tr>
					<tr>
						<td class="item"><label for="neoprene">Neoprenový oblek</label></td>
						<td class="t-center"><input type="checkbox" <?= $_GET["neoprene"] ? "checked" : "unchecked" ?> disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
					</tr>
					<tr>
						<td class="item"><label for="balaclavaHelmet">Kukla</label></td>
						<td class="t-center"><input type="checkbox" <?= $_GET["balaclavaHelmet"] ? "checked" : "unchecked" ?> disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
					</tr>
					<tr>
						<td class="item"><label for="gloves">Rukavice</label></td>
						<td class="t-center"><input type="checkbox" <?= $_GET["gloves"] ? "checked" : "unchecked" ?> disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
					</tr>
					<tr>
						<td class="item"><label for="drySuit">Suchý oblek</label></td>
						<td class="t-center"><input type="checkbox" <?= $_GET["drySuit"] ? "checked" : "unchecked" ?> disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
					</tr>
					<tr>
						<td class="item"><label for="wing">Žaket/křídlo</label></td>
						<td class="t-center"><input type="checkbox" <?= $_GET["wing"] ? "checked" : "unchecked" ?> disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
					</tr>
					<tr>
						<td class="item"><label for="weightBelt">Zátěžový opasek</label></td>
						<td class="t-center"><input type="checkbox" <?= $_GET["weightBelt"] ? "checked" : "unchecked" ?> disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
					</tr>
					<tr>
						<td class="item"><label for="diveWeight">Kostka závaží 1kg, 1,5kg, 2kg</label></td>
						<td class="t-right"><span><?= $_GET["diveWeight"] ?> ks</span></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
					</tr>
					<tr>
						<td class="item"><label for="automatika">Plicní automatika včetně octopusu</label></td>
						<td class="t-center"><input type="checkbox" <?= $_GET["automatika"] ? "checked" : "unchecked" ?> disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
					</tr>
					<tr>
						<td class="item"><label for="tank10">Ocelová láhev, 10 litrů, plná/200 bar (vzduch)</label></td>
						<td class="t-center"><input type="checkbox" <?= $_GET["tank10"] ? "checked" : "unchecked" ?> disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
					</tr>
					<tr>
						<td class="item"><label for="tank12">Ocelová láhev, 12 litrů, plná/200 bar (vzduch)</label></td>
						<td class="t-center"><input type="checkbox" <?= $_GET["tank12"] ? "checked" : "unchecked" ?> disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
					</tr>
					<tr>
						<td class="item"><label for="tank15">Ocelová láhev, 15 litrů, plná/200 bar (vzduch)</label></td>
						<td class="t-center"><input type="checkbox" <?= $_GET["tank15"] ? "checked" : "unchecked" ?> disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
					</tr>
					<tr>
						<td class="item"><label for="computer">Dekompresní počítač Suunto Vyber/Vytec/atd.</label></td>
						<td class="t-center"><input type="checkbox" <?= $_GET["computer"] ? "checked" : "unchecked" ?> disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
					</tr>
					<tr>
						<td class="item"><label for="primaryLight">Potápěčské hlavní světlo</label></td>
						<td class="t-center"><input type="checkbox" <?= $_GET["primaryLight"] ? "checked" : "unchecked" ?> disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
					</tr>
					<tr>
						<td class="item"><label for="secundaryLight">Potápěčské světlo malé</label></td>
						<td class="t-center"><input type="checkbox" <?= $_GET["secundaryLight"] ? "checked" : "unchecked" ?> disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
					</tr>
					<tr>
						<td class="item"><label for="knife">Potápěčský nůž</label></td>
						<td class="t-center"><input type="checkbox" <?= $_GET["knife"] ? "checked" : "unchecked" ?> disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
					</tr>
					<tr>
						<td class="item"><label for="compass">Potápěčský kompas</label></td>
						<td class="t-center"><input type="checkbox" <?= $_GET["compass"] ? "checked" : "unchecked" ?> disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
					</tr>
					<tr>
						<td class="item"><label for="buoy">Dekompresní bójka (včetně bubínku)</label></td>
						<td class="t-center"><input type="checkbox" <?= $_GET["buoy"] ? "checked" : "unchecked" ?> disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
						<td class="t-center"><input type="checkbox" unchecked disabled></td>
						</td>
					</tr>
					<tr><td>&nbsp;</td></tr>
					<tr>
						<td class="t-center" colspan="4">Orientační cena cena: <?= $_GET["price"] ? $_GET["price"] : $emptyLine ?> Kč</td>
					</tr>
				</tbody>
			</table>
		</div>
	</main>
</body>