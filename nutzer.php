<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP-Adresse Überprüfung</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .message {
            padding: 20px;
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .error {
            color: #ff0000;
        }
        .ip-address {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        function checkIP($ip) {
            $filePath = "saved_login/" . $ip . ".txt";
            return file_exists($filePath);
        }
        $userIP = $_SERVER['REMOTE_ADDR'];
        if (checkIP($userIP)) {
            echo "<div class='message'>IP-Adresse gefunden!</div>";
        } else {
            echo "<div class='message error'>Keine Berechtigung zum Öffnen dieser Seite.</div>";
            echo "<div class='ip-address'>Deine IP-Adresse: $userIP</div>";
        }
        ?>
    </div>
</body>
</html>
