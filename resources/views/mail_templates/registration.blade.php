<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank you</title>
</head>
<body>

<p>Dear {{ $data['name'] }},</p>
<p>Thank you for Registration</p>
<p><a href="{{ $data['login'] }}">login</a></p>

</body>
</html>