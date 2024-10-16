<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podrobnosti o uživateli</title>
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
            <h2 class="login-title">Podrobnosti o uživateli</h2>
            <form action="{{ url('/logout') }}" method="POST" class="logout-form">
                @csrf 
                <button type="submit" class="btn logout">Odhlásit</button>
            </form>
        </div>
        <div class="dashboard">
            <nav>
                <ul>
                    <li><a href="#" class="menu-item" data-target="overview">Přehled</a></li>
                    <li><a href="#" class="menu-item" data-target="billing">Fakturace</a></li>
                    <li><a href="#" class="menu-item" data-target="settings">Nastavení</a></li>
                    <li><a href="#" class="menu-item" data-target="events">Poslední události</a></li>
                </ul>
            </nav>
            
            <div id="overview" class="content-section">
                <h3>Přehled</h3>
                <p>Informace o zákazníkovi:</p>
                <ul>
                    <li>Jméno zákazníka: Jan Novák</li>
                    <li>Kompletní adresa: Kyselova 648 123, 11000 Praha</li>
                    <li>Fakturační adresa: Legerova 4586, 12000 Praha</li>
                    <li>Číslo smlouvy: 123456789</li>
                </ul>
            </div>
            
            <div id="billing" class="content-section">
                <h3>Fakturace</h3>
                <p>Přehled posledních 10 plateb:</p>
                <ul>
                    <li>Platba 1: Uhrazena</li>
                    <li>Platba 2: Neuhrazena po splatnosti</li>
                    <li>Platba 3: Uhrazena</li>
                </ul>
            </div>
            
            <div id="settings" class="content-section">
                <h3>Nastavení</h3>
                <p>Kontaktní osoby:</p>
                <ul>
                    <li>Jméno a příjmení: Petr Svoboda, Tel.: +420 608 456 789, Email: svobodapetr@email.cz</li>
                    <li>Jméno a příjmení: Eva Novotná, Tel.: +420 731 654 321, Email: novotnaeva@email.cz</li>
                </ul>
            </div>
            
            <div id="events" class="content-section">
                <h3>Poslední události</h3>
                <p>Přehled posledních událostí:</p>
                <ul>
                    <li>Poplach: 01.01.2024, 12:00</li>
                    <li>Změna kontaktu: 02.01.2024, 14:00</li>
                    <li>Odchodování: 03.01.2024, 16:00</li>
                </ul>
            </div>
        </div>    
        <div class="dashboard-section"> 
            <a href="{{ route('activity') }}" class="btn activity">Zobrazit aktivitu</a>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.menu-item').on('click', function(e) {
                var target = $(this).data('target');
                if (target) {
                    e.preventDefault();
                    $('.content-section').hide();
                    $('#' + target).show();
                }
            });
            
            $('#overview').show();
        });
    </script>
</body>
</html>
