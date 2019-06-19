<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Winnica</title>
    <link rel="stylesheet" href="styleCss/kontaktStyle.css">

</head>
<body>
    <header>
        <div id="nav">
            <?php include_once "partials/pictureTop.php"?>
            <?php include_once "partials/navMenu.php"?>
        </div>
    </header>
    <section>
        <div>
            <div id=kontakt>
                <h4>KONTAKT</h4>
                <h2>Napisz do nas!</h2>
                <form action="">
                    <input type="email" placeholder="e-mail" class="pole">
                    <input type="text" placeholder="Twoje imię" class="pole">
                    <textarea class="pole" placeholder="Twoja wiadomość"></textarea>
                    <input type="checkbox">
                    <input type="submit">
                </form>
            </div>
            <div>
                <h4>Lokalizacja</h4>
                <h2>Kontakt</h2>
                <p>CENTRUM CHRZEŚCIJAŃSKIE WINNICA </p>
                <p>Kościół Boży w Chrystusie | Rybnik </p>
                <p>Adres: <span>ul. Sosnowa 7, 44-203 Rybnik </span></p>
                <p>Telefon: <span>509 825 001</span></p>
                <p>Email: <a href="#">winnica@winnica.org</a></p>
                <p>Numer konta: <span>65 1050 1344 1000 0022 9720 4824 </span></p>
            </div>
        </div>
        <div></div>
    </section>
    <?php include_once "partials/footer.php"?>
</body>

</html>