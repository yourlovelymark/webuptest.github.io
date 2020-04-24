<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Marek Dworecki">
    <meta content="Zajęcia muzyczne">
    <title>SOA im. Henryka Wieniawskiego</title>
    <link rel="icon" href="../assets/icon.png">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script src="../packages/gsap-public/minified/gsap.min.js"></script>
</head>
<body>
    <div class="main">
        <div class="main__header">
            <h2>Społeczne Ognisko Artystyczne</h2>
            <h4>im. Henryka Wieniawskiego</h4>
        </div>
        <div class="main__article">
            <article>
                <h5>Kontakt...</h5>
                <br>
                <div class="main__article__info">
                    <h4>Społeczne Ognisko Artystyczne</h4>
                    <br>
                    <span>
                        68-200 Żary
                        <br>
                        Ul. Przyklad nr.
                        <br>
                        Tel: 00000000
                        <br>
                        Godziny pracy: 10:00-18:00
                    </span>
                </div>
            </article>
        </div>
        <div class="main__mail__form">
            <form class="mail__form" method="POST" action="../mail.php">
                <input type="text" name="name" placeholder="Imię"><br>
                <input type="text" name="lastname" placeholder="Nazwisko"><br>
                <input type="text" name="subject" placeholder="Temat wiadomości"><br>
                <input type="email" name="email" placeholder="Twój adres e-mail"><br>
                <textarea style="resize: none;" name="message" placeholder="Treść wiadomości"></textarea><br>
                <button type="submit">Wyślij</button>
            </form>
        </div>
        <div class="main__hamburger">
            <div class="main__hamburger__line line1"></div>
            <div class="main__hamburger__line line2"></div>
            <div class="main__hamburger__line line3"></div>
        </div>
    </div>
    <div class="main__side--menu">
        <ul>
            <li class="side__menu__list--item"><a href="../../public/index.php">Główna</a></li>
            <hr>
            <li class="side__menu__list--item"><a href="./belfers.php">Kadra nauczycielska</a></li>
            <hr>
            <li class="side__menu__list--item"><a href="./info.php">Aktualności</a></li>
            <hr>
            <li class="side__menu__list--item"><a href="./payment.php">Kształcenie i czesne</a></li>
            <hr>
            <li class="side__menu__list--item"><a href="./gallery.php">Galeria</a></li>
            <hr>
            <li class="side__menu__list--item"><a href="./contact.php">Kontakt</a></li>
            <hr>
        </ul>
    </div>
    </div>


    <script src="../gsap-animations.js"></script>
</body>
</html>