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
			$name = $_GET["zip"] ? urldecode($_GET["firstName"] . " " . $_GET["lastName"]) : $emptyLine;
			$address = $_GET["zip"] ? urldecode($_GET["street"] . ", " . $_GET["city"] . " " . $_GET["zip"] . ", " . $_GET["state"]) : $emptyLine . $emptyLine;
			$email = $_GET["zip"] ? urldecode($_GET["email"]) : $emptyLine;
			$phone = $_GET["zip"] ? urldecode($_GET["phone"]) : $emptyLine;
			$height = $_GET["zip"] ? $_GET["height"] : $emptyLine;
			$weight = $_GET["zip"] ? $_GET["weight"] : $emptyLine;
			$shoeSize = $_GET["zip"] ? $_GET["shoeSize"] : $emptyLine;
			$license = $_GET["zip"] ? urldecode($_GET["license"]) : $emptyLine;
			$dateFrom = new DateTime($_GET["dateFrom"]);
			$dateFrom = $dateFrom->format('d.m.Y');
			$dateTo = date("d.m.Y", strtotime("+" . $_GET["days"] . " day", strtotime($_GET["dateFrom"])));
			$term = $_GET["days"] ? $dateFrom . " - " . $dateTo . " (" . $_GET["days"] . ")" : $emptyLine . $emptyLine;
			echo "<p>Jméno: <b>$name</b></p>
			<p>Adresa: <b>$address</b></p>
			<p>Potápěčská kvalifikace: <b>$license</b></p>
			<p>Email: <b>$email</b></p>
			<p>Telefon: <b>$phone</b></p>
			<p>Číslo OP: <span style=\"text-decoration:underline\">$space</span></p>
			<p>Výška: <b>$height cm</b>, váha: <b>$weight kg</b>, velikost boty: <b>$shoeSize</b></p>
			<p>Termín zapůjčení: <b>$term</b>"; ?>
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
						<td class="item"><label>Maska</label></td>
						<td class="t-center "><span><?= $_GET["mask"]  ?></span></td>
						<td class="t-center"><input type="checkbox" disabled></td>
						<td class="t-center"><input type="checkbox" disabled></td>
					</tr>
					<tr>
						<td class="item"><label>Ploutve</label></td>
						<td class="t-center "><span><?= $_GET["fin"]  ?></span></td>
						<td class="t-center"><input type="checkbox" disabled></td>
						<td class="t-center"><input type="checkbox" disabled></td>
					</tr>
					<tr>
						<td class="item"><label>Neoprenové boty</label></td>
						<td class="t-center "><span><?= $_GET["shoes"]  ?></span></td>
						<td class="t-center"><input type="checkbox" disabled></td>
						<td class="t-center"><input type="checkbox" disabled></td>
					</tr>
					<tr>
						<td class="item"><label>Neoprenový oblek</label></td>
						<td class="t-center "><span><?= $_GET["neoprene"]  ?></span></td>
						<td class="t-center"><input type="checkbox" disabled></td>
						<td class="t-center"><input type="checkbox" disabled></td>
					</tr>
					<tr>
						<td class="item"><label>Kukla</label></td>
						<td class="t-center "><span><?= $_GET["balaclavaHelmet"]  ?></span></td>
						<td class="t-center"><input type="checkbox" disabled></td>
						<td class="t-center"><input type="checkbox" disabled></td>
					</tr>
					<tr>
						<td class="item"><label>Rukavice</label></td>
						<td class="t-center "><span><?= $_GET["gloves"]  ?></span></td>
						<td class="t-center"><input type="checkbox" disabled></td>
						<td class="t-center"><input type="checkbox" disabled></td>
					</tr>
					<tr>
						<td class="item"><label>Suchý oblek</label></td>
						<td class="t-center "><span><?= $_GET["drySuit"]  ?></span></td>
						<td class="t-center"><input type="checkbox" disabled></td>
						<td class="t-center"><input type="checkbox" disabled></td>
					</tr>
					<tr>
						<td class="item"><label>Žaket/křídlo</label></td>
						<td class="t-center "><span><?= $_GET["wing"]  ?></span></td>
						<td class="t-center"><input type="checkbox" disabled></td>
						<td class="t-center"><input type="checkbox" disabled></td>
					</tr>
					<tr>
						<td class="item"><label>Zátěžový opasek</label></td>
						<td class="t-center "><span><?= $_GET["weightBelt"]  ?></span></td>
						<td class="t-center"><input type="checkbox" disabled></td>
						<td class="t-center"><input type="checkbox" disabled></td>
					</tr>
					<tr>
						<td class="item"><label>Kostka závaží (1kg, 1,5kg, 2kg)</label></td>
						<td class="t-right"><span><?= $_GET["diveWeight"] ?> ks</span></td>
						<td class="t-center"><input type="checkbox" disabled></td>
						<td class="t-center"><input type="checkbox" disabled></td>
					</tr>
					<tr>
						<td class="item"><label>Plicní automatika včetně octopusu</label></td>
						<td class="t-center "><span><?= $_GET["automatika"]  ?></span></td>
						<td class="t-center"><input type="checkbox" disabled></td>
						<td class="t-center"><input type="checkbox" disabled></td>
					</tr>
					<tr>
						<td class="item"><label>Ocelová láhev, 10 litrů, plná/200 bar (vzduch)</label></td>
						<td class="t-center "><span><?= $_GET["tank10"]  ?></span></td>
						<td class="t-center"><input type="checkbox" disabled></td>
						<td class="t-center"><input type="checkbox" disabled></td>
					</tr>
					<tr>
						<td class="item"><label>Ocelová láhev, 12 litrů, plná/200 bar (vzduch)</label></td>
						<td class="t-center "><span><?= $_GET["tank12"]  ?></span></td>
						<td class="t-center"><input type="checkbox" disabled></td>
						<td class="t-center"><input type="checkbox" disabled></td>
					</tr>
					<tr>
						<td class="item"><label>Ocelová láhev, 15 litrů, plná/200 bar (vzduch)</label></td>
						<td class="t-center "><span><?= $_GET["tank15"]  ?></span></td>
						<td class="t-center"><input type="checkbox" disabled></td>
						<td class="t-center"><input type="checkbox" disabled></td>
					</tr>
					<tr>
						<td class="item"><label>Dekompresní počítač Suunto Vyber/Vytec/atd.</label></td>
						<td class="t-center "><span><?= $_GET["computer"]  ?></span></td>
						<td class="t-center"><input type="checkbox" disabled></td>
						<td class="t-center"><input type="checkbox" disabled></td>
					</tr>
					<tr>
						<td class="item"><label>Potápěčské hlavní světlo</label></td>
						<td class="t-center "><span><?= $_GET["primaryLight"]  ?></span></td>
						<td class="t-center"><input type="checkbox" disabled></td>
						<td class="t-center"><input type="checkbox" disabled></td>
					</tr>
					<tr>
						<td class="item"><label>Potápěčské světlo malé</label></td>
						<td class="t-center "><span><?= $_GET["secundaryLight"]  ?></span></td>
						<td class="t-center"><input type="checkbox" disabled></td>
						<td class="t-center"><input type="checkbox" disabled></td>
					</tr>
					<tr>
						<td class="item"><label>Potápěčský nůž</label></td>
						<td class="t-center "><span><?= $_GET["knife"]  ?></span></td>
						<td class="t-center"><input type="checkbox" disabled></td>
						<td class="t-center"><input type="checkbox" disabled></td>
					</tr>
					<tr>
						<td class="item"><label>Potápěčský kompas</label></td>
						<td class="t-center "><span><?= $_GET["compass"]  ?></span></td>
						<td class="t-center"><input type="checkbox" disabled></td>
						<td class="t-center"><input type="checkbox" disabled></td>
					</tr>
					<tr>
						<td class="item"><label>Dekompresní bójka (včetně bubínku)</label></td>
						<td class="t-center "><span><?= $_GET["buoy"]  ?></span></td>
						<td class="t-center"><input type="checkbox" disabled></td>
						<td class="t-center"><input type="checkbox" disabled></td>
						</td>
					</tr>
					<tr>
						<td colspan="4">&nbsp;</td>
					</tr>
					<tr>
						<td class="t-center" colspan="4">Orientační cena cena: <?= $_GET["price"] ? $_GET["price"] : $emptyLine ?> Kč</td>
					</tr>
				</tbody>
			</table>
		</div>
	</main>
</body>