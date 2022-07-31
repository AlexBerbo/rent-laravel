@extends('layout')

@section('content')
<header class="header">
	<div class="slika">
		<nav>
		<ul>
			<li>
				<a class="logo" href="cars.php">Alex Rent</a>
			</li>
			<li>
				<a class="nav-bar" href="nalog.php">Nalog</a>
			</li>
			<li>
				<a class="nav-bar" href="korpa.php">Korpa</a>
			</li>
			<li>
				<a class="nav-bar" href="logout.php">Log out</a>
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
		<p>Dobrodosli na vas Nalog, {{ auth()->user()->username }}</p>
		<h3>Izdvojeni Automobili</h3>
		<p>Porsche Taycan, Audi R8, Nismo GTR, VW Passat, Rolls Royce Phantom Series II, Lamborghini Huracan Performante.</p>
	</div>	
</section>

<?php
	if(isset($_POST['dodajj'])){
		if(!isset($_SESSION['username'])){
			echo "<script type='text/javascript'>
		 	alert('Morate se prvo prijaviti na Vaš nalog');
		 	location='login.php';
			</script>";
		}
		else{
			$korisnickoime=$_POST['username'] ;
			$result= "SELECT * FROM  korisnik WHERE username = '$korisnickoime'";
			$rezultat= $konekcija->query($result);
			if($niz=$rezultat->fetch_assoc()){
				$idkorisnika=$niz['idkorisnik'];
			}
			$idproizvoda=$_POST['id'];
			$_SESSION['car']=$_POST['id'];
			$cena=$_POST['cena'];
			$novacena=$cena*0.80;
			$user_check_query = "SELECT * FROM car WHERE idcar='$idproizvoda' LIMIT 1";
			$result = mysqli_query($konekcija, $user_check_query);
			$proizvod = mysqli_fetch_assoc($result);
			$date = $_POST['datum'];
			$count = $konekcija->query("SELECT count(*) as cnt from rezrvacija where idkorisnik='$idkorisnika'")->fetch_object()->cnt; 

			if($proizvod){
				if($count>2){
			 		$upit= "INSERT INTO korpa(idkorpa, datum, idkorisnik, cena) value('NULL', '$date', '$idkorisnika', '$novacena')";
			 	}
				else{
					$upit= "INSERT INTO korpa(idkorpa, datum, idkorisnik, cena) value('NULL', '$date', '$idkorisnika', '$cena')";
				}

			 	if($rezultat = $konekcija->query($upit)){
			 			echo "<script type='text/javascript'>
			 			alert('Uspesno ste dodali u korpu');
			 			location='korpa.php';
			 			</script>";
			 	}
			 	else{
			 		echo '<script language="javascript">';
			 		echo 'alert("Greška prilikom rezervisanja!")';
			 		echo '</script>';
				}
			}
			else{
			 	echo '<script language="javascript">';
			 	echo 'alert("Greška prilikom rezervisanja!")';
			 	echo '</script>';
			}
		}
	}
?>


<section id='menu' class='fix-slika-menu'>
	<div class='menu-text'>
		<h2 class='h2-text'>Meni</h2>
		<hr>
		<p class='p-text'>Nakon druge rezervacije, dobijate popust od 20% na bilo koju sledecu rezervaciju.</p>
		<p class='p-text'><a class='nav-bar' href='carsCenaDesc.php'>Sortiraj po ceni silazno</a></p>
		<p class='p-text'><a class='nav-bar' href='carsCenaAsc.php'>Sortiraj po ceni uzlazno</a></p>
	</div>
	@foreach ($automobili as $automobil)
		<div class='menu-menu'>
			<form class='forma' method='post' action='cars.php'>
				<div class='breakfast'>
					<hr class='hr-menu'>
					<h2 class='h2-menu-title'>OUR CARS</h2>
					<h2 class='h2-menu'>{{ $automobil->naziv }}</h2>
					<h2 class='h2-price'>{{ $automobil->cena }}</h2>
					<p class='p-menu'>{{ $automobil->opis }}</p>
					<p class='slike'><img src="/img/{{ $automobil->slika }}" class='rounded-circle'></p>
					<input type='date' id='datumm' name='datum' required>
					<p class='hiddenP'><input class='hidden' type='hidden' name='id' value=".$row['idcar']." /></p>
					<p class='hiddenP'><input class='hidden' type='hidden' name='cena' value=".$row['cena']." /></p>
					<input type='submit' name='dodajj' value='Rezervisi' class='buy'></input>
				</div>
			</form>
			</div>
		</div>
	@endforeach
</section>

<x-gallery />
@endsection

</body>
</html>