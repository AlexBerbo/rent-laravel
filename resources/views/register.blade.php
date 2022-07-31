@extends('layout')

@section('content')
    <header class="header">
        <div class="slika">
            <nav>
                <ul>
                    <li>
                        <a class="logo" href="/">Alex Rent</a>
                    </li>
                    <li>;
                        <a class="nav-bar" href="/login">Log In</a>
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

    <section id="register" class="register-section">
        <div class="register-div-slika"></div>
        <div class="register-div">
            <form class="register-form" action="/register" method="post">
                @csrf
                <!-- TODO: dodati -->
                <h2>REGISTER</h2>
                <hr>
                <p>Ime: <input type="text" required name="ime" /></p>
                <p>Prezime: <input type="text" required name="prezime" /></p>
                <p>Email: <input type="text" required name="email" /></p>
                <p>Korisnicko ime: <input type="text" required name="username" /></p>
                <p>Lozinka: <input type="password" required name="password" /></p>
                <input class="register-dugme" name="register" type="submit" value="Register" />
                <p> Zaboravili ste <a href="promeniSifru">lozinku?</a></p>
                <p> Admin ste? <a href="admin/index">Uloguj se</a></p>
                <p> Moderator ste? <a href="moderator/index">Uloguj se</a></p>
            </form>
        </div>
    </section>
@endsection
