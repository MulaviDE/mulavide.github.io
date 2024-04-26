<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP-Adresse Überprüfung</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .message {
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .message.success {
            background-color: #dff0d8;
            color: #3c763d;
        }
        .message.error {
            background-color: #f2dede;
            color: #a94442;
        }
        .ip-address {
            font-weight: bold;
            color: #337ab7;
            display: inline-block;
        }
        .copy-button {
            background-color: #337ab7;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            margin-left: 10px;
            transition: background-color 0.3s ease;
        }
        .copy-button:hover {
            background-color: #135688;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        function checkIP($ip) {
            $fileContent = file_get_contents("saved_ip.txt");
            return strpos($fileContent, $ip) !== false;
        }
        $userIP = $_SERVER['REMOTE_ADDR'];
        $deviceName = gethostbyaddr($userIP);
        if (checkIP($userIP)) {
            echo "<div class='message success'>IP-Adresse gefunden!</div>";
        } else {
            echo "<div class='message error'>Keine Berechtigung zum Öffnen dieser Seite.</div>";
            echo "<div class='ip-address' id='ip-address'>$userIP</div>";
            echo "<button class='copy-button' onclick='copyIP(this)'><i class='far fa-copy'></i> Kopieren</button>";
        }
        ?>
    </div>

    <script>
        function copyIP(button) {
            var ipAddress = document.getElementById("ip-address").textContent;
            navigator.clipboard.writeText(ipAddress)
            .then(function() {
                button.innerHTML = "<i class='far fa-check'></i> Kopiert";
                setTimeout(function(){
                    button.innerHTML = "<i class='far fa-copy'></i> Kopieren";
                }, 2000); // Change back to original text after 2 seconds
            })
            .catch(function() {
                console.error("Kopieren fehlgeschlagen.");
            });
        }
    </script>
</body>
</html>
