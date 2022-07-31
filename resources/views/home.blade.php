@extends('layout')

@section('content')
    <header class="header">
        <div class="slika">
            <nav>
                <ul>
                    <li>
                        <a class="logo" href="/">Alex Rent</a>
                    </li>
                    <li>
                        <a class="nav-bar" href="#about">O nama</a>
                    </li>
                    <li>
                        <a class="nav-bar" href="#menu">Meni</a>
                    </li>
                    <li>
                        <a class="nav-bar" href="#gallery">Galerija</a>
                    </li>
                    <li>
                        <a class="nav-bar" href="#cars">Automobili</a>
                    </li>
                    <li>
                        <a class="nav-bar" href="#contact">Kontakt</a>
                    </li>
                    <li>
                        <a class="nav-bar" href="login">Log In</a>
                    </li>
                </ul>
            </nav>
            <div class="zavesa">
                <h1 class="touche-intro">Alex Rent</h1>
                <p class="intro-p">IZNAJMLJIVANJE LUKSUZNIH AUTOMOBILA</p>
                <a href="">PRONADJI UZITAK</a>
            </div>
        </div>
    </header>

    <section id="about" class="about-section">
        <div class="about-div-slika"></div>
        <div class="about-div">
            <h2>ALEX RENT</h2>
            <hr>
            <p>Iznajmljivanje luksuznih, sportskih, elektricnih i pouzdanih automobila za bilo koje potrebe.</p>
            <h3>Izdvojeni Automobili</h3>
            <p>Porsche Taycan, Audi R8, Nismo GTR, VW Passat, Rolls Royce Phantom Series II, Lamborghini Huracan
                Performante.</p>
        </div>
    </section>

    <section id="menu" class="fix-slika-menu">
        <div class="menu-text">
            <h2 class="h2-text">Meni</h2>
            <hr>
            <p class="p-text">Vozila koja nudimo u nasoj kompaniji Alex Rent</p>
        </div>
        <div class="menu-menu">
            <div class="breakfastt">
                <h2 class="h2-menu-title">ELEKTRICNA VOZILA</h2>
                <hr class="hr-menu">
                <h2 class="h2-menu">Tesla Model S</h2>
                <h2 class="h2-price">600$</h2>
                <p class="p-menu">Potpuno električni Tesla Model S je impresivno kompetentan luksuzni elektricni automobil
                    sa visokim performansama, udobnosti i dometa.</p>
                <h2 class="h2-menu">Porsche Taycan TURBO S</h2>
                <h2 class="h2-price">700$</h2>
                <p class="p-menu">Impresivne, ponovljive vrhunske performanse i revolucionarna tehnologija.</p>
                <h2 class="h2-menu">Audi RS E-Tron GT</h2>
                <h2 class="h2-price">600$</h2>
                <p class="p-menu">RS e-tron GT je napravljen zajedno sa legendarnim Audijem R8 u fabrici Bollinger Hofe u
                    Nemačkoj, gde se pažnja posvećena detaljima susreće sa preciznošću i kvalitetom.</p>
                <h2 class="h2-menu">BMW i4</h2>
                <h2 class="h2-price">650$</h2>
                <p class="p-menu">Električni BMW i4 limuzina je važan deo BMW-ovog portfolija elektricnih vozila. Grand
                    Coupe serije 4 sa baterijskim pogonom i veoma udobnim i sportskim manirima na putu.</p>
            </div>
            <div class="main-course">
                <h2 class="h2-menu-title">AUTOMOBILI ZA STAZE</h2>
                <hr class="hr-menu">
                <h2 class="h2-menu">Lamborghini Huracan Performante</h2>
                <h2 class="h2-price">600$</h2>
                <p class="p-menu">Huracan Performante je preradio koncept super sportskih automobila i podigao pojam
                    performansi na nivoe nikada ranije.</p>
                <h2 class="h2-menu">Audi R8</h2>
                <h2 class="h2-price">550$</h2>
                <p class="p-menu">Audi R8 performance Coupe pokazuje svoj motorsportski DNK sa V10 motorom od 610 KS.</p>
                <h2 class="h2-menu">Nismo GTR</h2>
                <h2 class="h2-price">700$</h2>
                <p class="p-menu">Otkrijte Nissan GT-R NISMO 2021: sportski automobil sa 4 sedišta sa legendarnim
                    istorijskim trkačkim nasleđem.</p>
                <h2 class="h2-menu">McLaren P1</h2>
                <h2 class="h2-price">1000$</h2>
                <p class="p-menu">Otkrijte McLaren P1 sportski automobil - dizajniran, projektovan i napravljen da bude
                    najbolji automobil za vozače na svetu, inspirisan legendarnim F1 modelom.</p>
            </div>
        </div>
        <div class="menu-menu-2">
            <div class="dinner">
                <h2 class="h2-menu-title">AUTOBAHN KRUZERI</h2>
                <hr class="hr-menu">
                <h2 class="h2-menu">VW Passat</h2>
                <h2 class="h2-price">150$</h2>
                <p class="p-menu">Volkswagen Passat 2022 ima dobro izrađen luksuzni enterijer koji će pružiti udobnost
                    celoj vašoj posadi.</p>
                <h2 class="h2-menu">Audi RS6</h2>
                <h2 class="h2-price">300$</h2>
                <p class="p-menu">Sa snažnim konjskim snagama i puno prostora za prtljag, 2022 RS6 Avant donosi fuziju
                    sporta, korisnosti i udobnosti za celu vašu posadu.</p>
                <h2 class="h2-menu">Audi RS4</h2>
                <h2 class="h2-price">250$</h2>
                <p class="p-menu">Performanse superautomobila i praktičnost Audi Avant-a. Ova dva različita kvaliteta su
                    savršeno kombinovana u novom Audiju RS 4 Avant.</p>
                <h2 class="h2-menu">Skoda Superb</h2>
                <h2 class="h2-price">125$</h2>
                <p class="p-menu">Škoda Superb 2022 ima dobro izrađen luksuzni enterijer koji će pružiti udobnost celoj
                    vašoj posadi.</p>
            </div>
            <div class="coffe">
                <h2 class="h2-menu-title">LUKSUZNA VOZILA</h2>
                <hr class="hr-menu">
                <h2 class="h2-menu">BMW M760Li</h2>
                <h2 class="h2-price">1400$</h2>
                <p class="p-menu">BMW Serije 7 limuzina danas ispunjava zahteve sutrašnjice kao nijedno drugo vozilo: bilo
                    da se radi o luksuzu, udobnosti ili vodećim inovacijama.</p>
                <h2 class="h2-menu">Mercedes Benz S63s AMG</h2>
                <h2 class="h2-price">1000$</h2>
                <p class="p-menu">Na mnogo načina, Mercedes-Benz S-klasa predstavlja najbolje od najboljih ako ste na
                    tržištu za veliki luksuzni automobil.</p>
                <h2 class="h2-menu">Audi S8</h2>
                <h2 class="h2-price">900$</h2>
                <p class="p-menu">Brza i razigrana sportska limuzina izuzetno velike veličine, Audi S8 kombinuje udobnost
                    unutrašnjosti sa snažnim performansama koje spajaju najbolje iz oba sveta.</p>
                <h2 class="h2-menu">Rolls Roys Phantom Series II</h2>
                <h2 class="h2-price">4500$</h2>
                <p class="p-menu">Vrhunski Rolls-Roice, Phantom Series II je legendarni maverick i ikona neponovljivog
                    savršenstva.</p>
            </div>
    </section>

    <x-gallery />

    <section id="cars" class="fix-slika-cars">
        <div class="cars-text">
            <h2 class="h2-text">Nasi Favoriti</h2>
            <hr>
            <p class="p-text">Vozila koja preporucujemo po svaku cenu.</p>
            <div class="cars-slike">
                <div class="cars-p1"></div>
                <div class="cars-2"></div>
                <div class="cars-3"></div>
            </div>
            <div class="cars-about">
                <div>
                    <h3 class="h3-cars">McLaren P1</h3>
                    <p class="p-cars">Otkrijte McLaren P1 sportski automobil <br>
                        - dizajniran, projektovan i napravljen da bude najbolji automobil za vozače na svetu, <br>
                        inspirisan legendarnim F1 modelom.</p>
                </div>
                <div class="r8">
                    <h3 class="h3-cars">Audi R8</h3>
                    <p class="p-cars">Audi R8 performance Coupe pokazuje svoj motorsportski <br>
                        DNK sa V10 motorom od 610 KS.</p>
                </div>
                <div>
                    <h3 class="h3-cars">Audi RS6</h3>
                    <p class="p-cars">Sa snažnim konjskim snagama i puno prostora za prtljag, <br>
                        2022 RS6 Avant donosi fuziju sporta, korisnosti i udobnosti za celu vašu posadu.</p>
                </div>
            </div>
        </div>
    </section>

    <x-reservation />

    <section class="section-form">
        <div class="contact-form-text">
            <h2 class="h2-form">Kontakt forma</h2>
            <hr>
            <p class="p-form">Za sva pitanja i odgovore mozete nam poslati poruku.</p>
            <form class="form">
                <input class="prva-forma" type="text" name="ime" placeholder="Name">
                <input class="druga-forma" type="text" name="mail" placeholder="Email">
            </form>
            <form class="form-2">
                <textarea class="treca-forma" type="text" name="msg" placeholder="Message"></textarea>
            </form>
            <div class="div-button">
                <button class="button-send-message">
                    <a class="message-send" href="">Posalji poruku</a>
                </button>
            </div>
        </div>
    </section>
@endsection
