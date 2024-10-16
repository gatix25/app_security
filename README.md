#### Popis aplikace my_app_security

Tato webová aplikace je B2C portál s čtyřmi samostatnými stránkami a jedním REST API. Aplikace je inspirovaná grafickým stylem webu a implementuje REST API, které vrací statická data o uživateli a jeho historii na základě ID.

#### Technologie:
- **Backend**: PHP 8.0+ (s využitím frameworku jako Nette, Laravel, nebo preferovaný CodeIgniter)
- **Databáze**: MySQL 8.0+ s InnoDB a podporou cizích klíčů (Foreign Key)
- **Frontend**: HTML5, JavaScript (použití Angular, React nebo preferované jQuery)
- **REST API**: Implementováno pouze GET pro získání dat o uživateli
- **Server**: Aplikace je kompatibilní s Apache/Nginx na Linuxu
- **Friendly URLs**: Zajištěny pro uživatelsky přívětivé adresy

#### Instalace:

1. **Rozbalení aplikace**:
   - Aplikaci rozbalte do složky na serveru.
   
2. **Nastavení databáze**:
   - Spusťte skript `install.php`, který automaticky vytvoří databázové schéma a všechny potřebné tabulky.

#### Funkcionality:

1. **Login stránka (stránka 1)**:
   - Stránka obsahuje dvě input pole (login a heslo) a tlačítko pro přihlášení.
   - AJAXem se odesílají přihlašovací údaje k ověření v databázi (metoda POST).
   - Po úspěšném přihlášení se uživatel přesměruje na stránku 3.
   - Přihlašovací údaje jsou validovány pomocí JavaScriptu před odesláním (kontrola emailu a hesla delšího než 3 znaky).

2. **Registrační stránka (stránka 2)**:
   - Obsahuje tři input pole (email, heslo, potvrzení hesla) a tlačítko pro registraci.
   - Validace dat probíhá pomocí JavaScriptu (kontrola formátu emailu a délky hesla).
   - Po úspěšné registraci se data zapíší do databáze a zobrazí se uživateli notifikace o úspěšné registraci.

3. **Hlavní stránka pro přihlášené uživatele (stránka 3)**:
   - Zobrazuje se pouze přihlášeným uživatelům.
   - Obsahuje následující sekce:
     - **Přehled**: Informace o zákazníkovi (jméno, adresa, číslo smlouvy).
     - **Fakturace**: Posledních 10 plateb a stav poslední faktury.
     - **Nastavení**: Kontaktní osoby (jména, telefon, emaily).
     - **Poslední události**: Přehled událostí na objektu (poplachy, akce call centra atd.).

4. **Stránka poslední aktivity (stránka 4)**:
   - Přístupná pouze přihlášeným uživatelům.
   - Zobrazuje poslední aktivity (přihlášení/odhlášení) uživatele za poslední týden.
   - Data se obnovují automaticky každých 15 sekund.

#### REST API:
- Implementuje GET endpoint pro vrácení statických dat o uživateli na základě jeho ID.

