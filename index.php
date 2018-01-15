<?php include("/var/www/html/entry/password_protect.php"); ?>
<html>
<head>
	<title>Verium Miner Monitor</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="styles.css">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>

<script>
    $(function() {
        var auto_refresh;
        auto_refresh = setTimeout(function loadStats () {
            $("#page").load("index_monitor.php", function () {setTimeout(loadStats, 30000);});
        },0); //first run is instant


    });

</script>

<div id="header">
<img class="logo" src="http://217.182.71.8/img/verium_logo.jpg">
<h1>Miner Monitor</h1>
<p class="donation">Donate Verium: VBJayZt78qmhQh36F5YNnEezuM1QHqHbFk<br>Donate Vericoin: VHkouL9YEXocpSm7PWKhrV42DbhyBwa9jf</p>
</div>

<div id="page">Working...</div>

<div id="footer">
<p><a class="footerLink" href="http://217.182.71.8/entry/password_protect.php?logout=1">Logout</a></p>
</div>

</body>
</html>