<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bezpečnostní služby</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <a href="{{ route('index') }}"><img src="{{ asset('images/security_logo_new.jpg') }}" alt="Logo společnosti"></a>
        </div>
        <ul class="menu">
            <li><a href="{{ route('index') }}">Střežení objektů</a></li>
            <li><a href="{{ route('index') }}">Střežení vozidel</a></li>
            <li><a href="{{ route('index') }}">Videoslužby</a></li>
            <li><a href="{{ route('login') }}">Zákaznická zóna</a></li> 
        </ul>
    </div>
    <div class="content">
    </div>
</body>
</html>
