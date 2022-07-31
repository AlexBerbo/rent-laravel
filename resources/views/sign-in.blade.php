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
                        <a class="nav-bar" href="register">Register</a>
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

    <section id="login" class="login-section">
        <div class="login-div-slika"></div>
        <div class="login-div">
            <form class="login-form" action="login" method="post">
                <!-- TODO: errors -->
                <h2>LOGIN</h2>
                <hr>
                <p>Korisnicko ime: <input type="text" name="username" /></p>
                @error('username')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
                <p>Lozinka: <input type="password" name="password" /></p>
                <input class="login-dugme" name="login" type="submit" value="Login" />
                <p>Zaboravili ste <a href="promeniSifru">lozinku?</a></p>
                <p>Admin ste? <a href="admin/index">Uloguj se</a></p>
                <p>Moderator ste? <a href="moderator/index">Uloguj se</a></p>
                <p>Nemate nalog? <a href="register">Registrujte se!</a></p>
            </form>
        </div>
    </section>

    <x-reservation />
@endsection
