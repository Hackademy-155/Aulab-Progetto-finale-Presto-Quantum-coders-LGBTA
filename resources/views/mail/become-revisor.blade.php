<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto-Shop</title>
</head>
<body>

    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #3498db;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .content {
            padding: 20px;
        }
        .footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 10px;
            font-size: 12px;
        }
        .btn {
            display: inline-block;
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Richiesta per essere supervisore</h1>
        </div>

        <div class="content">
            <p>L'utente {{$user->name}} ha mandato la richiesta per essere supervisore.</p>
            <p>Qui di seguito i suoi dati</p>
            <ul>
                <li>Nome: {{$user->name}}</li>
                <li>Email: {{$user->email}}</li>
                <li>Causale: {{$motivazione}}</li>
            </ul>
            <a href="{{route('make.revisor', compact('user')) }}" class="btn">Clicca per accettare</a>
        </div>

        <div class="footer">
            <p>© 2024 Presto Shop</p>
        </div>
    </div>
</body>
</html>