<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nowa wiadomość z formularza kontaktowego</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            font-size: 24px;
        }
        p {
            font-size: 16px;
            color: #555;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #999;
            text-align: center;
        }
        .data-label {
            font-weight: bold;
        }
        .data-value {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Nowa wiadomość z formularza kontaktowego</h1>
        
        <p class="data-label">Imię:</p>
        <p class="data-value">{{ $data['first_name'] }}</p>

        <p class="data-label">Nazwisko:</p>
        <p class="data-value">{{ $data['last_name'] }}</p>

        <p class="data-label">E-mail:</p>
        <p class="data-value">{{ $data['email'] }}</p>

        <p class="data-label">Telefon:</p>
        <p class="data-value">{{ $data['phone'] }}</p>

        <p class="data-label">Wiadomość:</p>
        <p class="data-value">{{ $data['message'] }}</p>

        <div class="footer">
            <p>Ta wiadomość została wysłana z formularza kontaktowego na Twojej stronie.</p>
        </div>
    </div>
</body>
</html>
