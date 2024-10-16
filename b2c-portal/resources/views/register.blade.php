<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrace</title>
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
        <h2 class="login-title">Registrovat</h2>
        <form id="register-form" class="register-form">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Heslo:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Potvrzení hesla:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
            </div>
            <button type="submit" class="btn register">Registrovat</button>
        </form>
        <p class="register-link">Jste již zaregistrovaní? <a href="{{ url('/login') }}">Přihlásit</a></p>
    </div>

    <script>
        $('#register-form').on('submit', function(e) {
            e.preventDefault();

            var email = $('#email').val();
            var password = $('#password').val();
            var password_confirmation = $('#password_confirmation').val();

            if (!email || !password || !password_confirmation) {
                alert('Prosím, vyplňte všechny položky formuláře.');
                return;
            }

            if (password.length < 3) {
                alert('Heslo musí být alespoň 3 znaky dlouhé.');
                return;
            }

            if (password !== password_confirmation) {
                alert('Hesla se neshodují.');
                return;
            }

            $.ajax({
                url: '{{ url('/register') }}',
                method: 'POST',
                data: {
                    email: email,
                    password: password,
                    password_confirmation: password_confirmation,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    alert('Registrace proběhla v pořádku. Nyní se můžete přihlásit.');
                    window.location.href = '{{ url('/login') }}';
                },
                error: function(response) {
                    alert('Registrace se nezdařila.');
                }
            });
        });
    </script>
</body>
</html>
