<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p>Hello {{$participant->name}},</p>
    <p>&nbsp; Thank you for participating in CS Camp event.</p>
    <p>Please <strong>Save this QR Code image</strong> and show it to the event organizer when you attend</p>
    <img src="{!!$message->embedData(QrCode::format('png')
                        ->generate(url("/participants/{$participant->id}/confirm/{$hash}")) , 'QrCode.png'
        , 'image/png' )!!}">
</body>

</html>