<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Winnica</title>
    <link rel="stylesheet" href="styleCss/mainStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <img src="pictures/z1.jpg" class="tlo">
        <div id="nav">
            <?php include_once "partials/pictureTop.php"?>
            <?php include_once "partials/navMenu.php"?>
        </div>
        <div id="textHeader">
            <h1>Z myślą o Tobie</h1>
            <span>CENTRUM CHRZEŚCIJAŃSKIE WINNICA</span>
        </div>
    </header>
    <section>
        <div id="3Divy" class="threebox">
            <div class="information">
                <h3>Nowy tutaj?</h3>
                <div class="line" style="color: white">_____</div>
                <span>Centrum Chrześcijańskie Winnica to wspólnota ludzi z różnych środowisk, którzy nie są doskonali, dlatego też każdy może się w niej odnaleźć. Wierzymy, że Bóg chce wykorzystać każdego z nas do szerzenia Jego Królestwa.</span>
                <button>więcej</button>
            </div>
            <div class="information">
                <h3>Społeczność</h3>
                <div class="line">_____</div>
                <span>Przestrzeń gdzie możesz zbudować relacje
                        z Bogiem i z ludźmi. To miejsce w którym wspólnie odkrywamy jak wiara w Boga i Jego Słowo może być odpowiedzią na problemy, które nurtują współczesnego człowieka.</span>
                <button>więcej</button>
            </div>
            <div class="information">
                <h3>Napisz do nas</h3>
                <div class="line">_____</div>
                <span>Nie wiesz jak do nas dojechać lub masz nurtujące Cię pytanie na które szukasz odpowiedzi? Napisz do nas, a z chęcią udzielimy Ci wszelkiej pomocy jak i duchowego wsparcia.</span>
                <button>więcej</button>
            </div>
        </div>
        <div class="infsite">
            <img src="pictures/z2.jpg" class="tloo" >
            <div>
                <div class="textContainer">
                    <h2>Oglądaj live</h2>
                    <div class="line">_____</div>
                    <span>
                        Wierzymy, że Pismo Święte - Biblia - jest Słowem Bożym, nieomylnym jak również  natchnionym przez Ducha Świętego, i stanowi jedyną normę wiary i życia. Niesamowicie ważne jest codzienne słuchanie Jego Słowa, dlatego jeżeli  nie możesz być z nami na żywo, bądź z nami online! 
                        </span>
                </div>
                <button>więcej</button>
            </div>
        </div>
        <div id="oKościele" class="thematicdiv">
                <figure>
                    <img src="pictures/oNas.webp" alt="tu miało być zdjęcie">
                </figure>
                <article>
                    <h4>Kościół</h4>
                    <div class="test">
                        <h3>Jesteśmy Kościołem
                            wierzącym w Jezusa
                            & kochającym Boga
                            i ludzi 
                        </h3>
                        <div class="line">__________</div>
                    </div>  
                    <span>
                            Centrum Chrześcijańskie Winnica jest częścią Kościoła Bożego w Chrystusie (zarejestrowany 27 lutego 1988 r.; wpisany do Rejestru Kościołów i Związków Wyznaniowych, prowadzonych przez Departament Wyznań MSWiA, do działu A, poz.28.)
                    </span>
                    <span>Kościół Boży w Chrystusie jest kościołem charyzmatycznym, należącym do nurtu kościołów ewangelicznych. Jest członkiem Aliansu Ewangelicznego w Polsce, który należy do Europejskiego Aliansu Ewangelicznego (European Evangelical Alliance) oraz Światowej Społeczności Ewangelicznej (World Evangelical Fellowship).</span>
                    
                    <button>Więcej</button>
                </article>
        </div>
        <div id="wydarzenia">
            <header>
                <h4>KALENDARZ</h4>
                <h2>Nadchodzące wydarzenia</h2>
                <div class="line">______</div>
            </header>
            <div id="miejsceNaWydarzenia">
                <div class="event">
                    <div class="data">
                        <p id="dataP1">24</p>
                        <p id="dataP2">11.18</p>
                        <p id="dataP3">sb.</p>
                    </div>
                    <div class="nazwa">
                        <h3>Poligon | KONFERENCJA</h3>
                        <h4>Centrum Chrześcijańskie Winnica</h4>
                    </div>
                    <button>Więcej</button>
                </div>
                <div class="event">
                    <div class="data">
                        <p id="dataP1">24</p>
                        <p id="dataP2">11.18</p>
                        <p id="dataP3">sb.</p>
                    </div>
                    <div class="nazwa">
                        <h3>Poligon | KONFERENCJA</h3>
                        <h4>Centrum Chrześcijańskie Winnica</h4>
                    </div>
                    <button>Więcej</button>
                </div>
            </div>
        </div>
        <div id="dolaczDoNas" class="infsite">
            <img src="pictures/z3.jpg" class="tloo">
            <div>
                <div class="textContainer">
                    <h2>Dołącz do nas</h2>
                    <div class="line">_____</div>
                    <span>
                            Centrum Chrześcijańskie Winnica to przestrzeń gdzie możesz zbudować relacje z Bogiem i z ludźmi. To miejsce w którym wspólnie odkrywamy jak wiara w Boga i Jego Słowo może być odpowiedzią na problemy, które nurtują współczesnego człowieka.
                    </span>
                </div>
                <button>więcej</button>
            </div>
        </div>
        <div id="kontakt">
            <div id=kont>
                <h4>KONTAKT</h4>
                <div class="test">
                <h2>Napisz do nas!</h2>
                <div class="line">_____</div>
                </div>
                <form action="">
                    <input type="email" placeholder="e-mail" id="email" class="pole">
                    <input type="text" placeholder="Twoje imię" id="imie" class="pole">
                    <textarea placeholder="Twoja wiadomość" id="wiadomosc" class="pole"></textarea>
                    <input type="checkbox" id="checkbox"> <p>Wyrażam zgodę na przetwarzanie moich danych osobowych zgodnie z ochroną danych osobowych w celu wysłania informacji handlowej. Podanie danych osobowych jest dobrowolne. Zostałem poinformowany, że przysługuje mi prawo do swoich danych, możliwości ich poprawiania, żądania zaprzestania ich przetwarzania. Administratorem danych jest (Centrum Chrześcijańskie Winnica ul.Sosnowa 7 44-203 Rybnik)
                    </p>
                    <input type="submit" id="submit">
                </form>
            </div>
            <div id="mapa">
                TUMABYĆ MAPA !!!!!
            </div>
        </div>
    </section>
    <?php include_once "partials/footer.php"?>
    
    <script src="skrypty/scrollTop.js"></script>
    <script src="skrypty/scroll.js"></script>
</body>

</html>