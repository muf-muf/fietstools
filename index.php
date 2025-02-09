<!DOCTYPE html>
<html data-bs-theme="dark">
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=0.9'>
    <link rel='icon' href='images/unicycle-color.png' type='image/x-icon'>
    <title>Fietstools</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <div class="page-tools container-md">
        <h2>Tools</h2>
        <?php include 'fietstools.php'; ?>
    </div>

<div class="footer container text-center">
    Includes icons from <a href="https://www.freepik.com" target="_blank">www.freepik.com</a>, created by <a href="https://www.freepik.com/author/freepik" target="_blank">Freepik</a>.
    <br><br>
    <span id="copyright">Copyright © Diogod 2025<?php if(date("Y") > 2025) {echo '-' . date("Y");} ?></span>
</div>

<script src="fietstools.js"></script>
</body>
</html>
