<?php
	session_start();

	if(!isset($_SESSION["token"])){
		header("Location: ./login");
	}
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<noscript>
            <meta http-equiv="refresh" content="0;URL=error/noscript.html">
        </noscript>

		<title>Discord BOT Client</title>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="assetsss/main.css">

		<link rel="apple-touch-icon" sizes="180x180" href="assetsmg/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="assetsmg/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="assetsmg/favicon-16x16.png">
		<link rel="manifest" href="assetsmg/site.webmanifest">
		<link rel="mask-icon" href="assetsmg/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="assetsmg/favicon.ico">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-config" content="./assets/img/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">

		<head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/ fb# prefix属性: https://ogp.me/ns/ prefix属性#">
		<meta property="og:url" content="https://app.gakerbot.net/" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="アプリ" />
		<meta property="og:description" content="Made By Discord BOT Client Team" />
		<meta property="og:site_name" content="Discord BOT Client" />
		<meta property="og:image" content="https://app.gakerbot.net/assets/img/favicon.ico" />

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Discord BOT Client Team">
		<meta name="keywords" content="Discord,BOT">
	</head>
	<body>
		<main>

		</main>
		<script src="assetss/load.js"></script>
	</body>
</html>