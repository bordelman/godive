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
        <h1>Děkujeme za vaší rezervaci</h1>
				<p>Na váš e-mail: <?=$_POST["email"];?> byla odeslána kopie vaší rezervace</p>
				<?php print_r($_POST);?>

    </main>
</body>
</html>