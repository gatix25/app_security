<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poslední aktivita uživatele</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
        <div class="header">
            <h2 class="login-title">Poslední aktivita uživatele</h2>
        </div>
        <div class="content-activity">
            <table>
                <thead>
                    <tr>
                        <th>Datum a čas</th>
                        <th>Událost</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($logins as $login)
                        <tr>
                            <td>{{ $login->created_at }}</td>
                            <td>{{ $login->type }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="dashboard-section"> 
            <a href="{{ route('dashboard') }}" class="btn back">Zpět</a>
        </div>    
    </div>

    <script>
        setTimeout(function() {
            window.location.reload(1);
        }, 15000);
    </script>
</body>
</html>
