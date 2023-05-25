@auth
<!DOCTYPE html>
<html>
<head>
    <title>Doge Page</title>
    <style>
        body {
            background-color: #F5F5F5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            font-family: Arial, sans-serif;
        }

        .doge-img {
            max-width: 500px;
        }

        .caption {
            font-size: 24px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://upload.wikimedia.org/wikipedia/en/5/5f/Original_Doge_meme.jpg" alt="Doge" class="doge-img">
        <div class="caption">Such Laravel. Much Wow. Very Protec.</div>
    </div>
</body>
</html>
@else
    <h1>Access Denied</h1>
        <p>This page is only available for logged-in users.</p>
@endauth


