<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přihlášení</title>
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
            <h2 class="login-title">Přihlášení</h2>
        </div>
        <form id="login-form" class="login-form">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Heslo:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn login">Přihlásit</button>
        </form>
        <p class="register-link">Ještě nemáte účet? <a href="{{ url('/register') }}">Registrovat</a></p>
    </div>

    <script>
        $('#login-form').on('submit', function(e) {
            e.preventDefault();

            var email = $('#email').val();
            var password = $('#password').val();

            if (!email || !password) {
                alert('Prosím, zkontrolujte a správně vyplňte všechny položky formuláře.');
                return;
            }

            if (password.length < 3) {
                alert('Heslo musí mít alespoň 3 znaky.');
                return;
            }

            $.ajax({
                url: '{{ url('/login') }}',
                method: 'POST',
                data: {
                    email: email,
                    password: password,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    window.location.href = '{{ url('/dashboard') }}';
                },
                error: function(response) {
                    alert('Chybné přihlašovací údaje.');
                }
            });
        });
    </script>
</body>
</html>
