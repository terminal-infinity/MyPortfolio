<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Mail</title>
</head>
<body>
    <h1>{{ $mailData['subject']}}</h1>

    <p>Name: {{ $mailData['name']}}</p>
    <p>email: {{ $mailData['email']}}</p>
    <p>Message: </p>
    <p>{{ $mailData['message']}}</p>

    <h3>THANKS</h3>
</body>
</html>