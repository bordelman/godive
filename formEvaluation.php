<!DOCTYPE html>
<html lang='cz'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='css/main.css'>
    <link rel="icon" href="/sources/logo.ico" type="image/x-icon">
    <script src='index.js' type='text/javascript' defer></script>
    <title>GoDive | Potvrzení</title>
</head>


<body>
    <main>
        <h1>Děkujeme za přihlášení na kurz
					<?php
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
				echo $courses[$_POST["course"]];
				?></h1>
				<p>Na váš e-mail: <?php echo $_POST["email"];?> byla odeslána kopie vaší přihlášky</p>
				<?php
				$body = "";
				foreach($_POST as $item){
					echo $item;
					$body .= $item;
				}
				echo "\nmrdat\n\n";
				echo var_dump($body);
				mb_send_mail($_POST["email"], "Prdel", $body);
				?>

    </main>
</body>
</html>