<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faiqotin Naimah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  </head>
  <style>
    @media (min-width: 767px) {
      .carouss{
        width: 100%;
      }
    }
    @media (max-width: 767px) {
      .carouss{
        height:500px;
      }
    }
  </style>

  <body>

    <!---Navbar-->

    <nav  class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #1F6475 !important">
      <div class="container" >
        <a class="navbar-brand" href="#">
          <img src="{{ asset('img/logo1.png') }}" alt="" width="50" height="50" class="m-2">
          FAIQOTIN NAIMAH
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#home">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#profil">PROFIL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#info">INFO</a>
            </li>
            @if (Route::has('login'))
            @auth
              <li class="nav-item">
                <a href="{{ url('/home') }}" class="nav-link">HOME</a>
              </li>
            @else
              <li class="nav-item">
                <a href="{{ url('/login') }}" class="nav-link">LOGIN</a>
              </li>
            @endauth
            @endif
          </ul>
        </div>
      </div>
    </nav>
    <body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left"> 
      </ul>
    </div>
          <div>
            <form action="#" method="post">
              <fieldset>
              </fieldset>
            </form>
          </div>
        </li>
      </ul>
       </div>
  </div>
</div>
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <h1><a href="pertama.html">DISPERSIP</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="pertama.html">Beranda</a></li>
        <li><a class="active" href="Perpustakaan.html">Perpustakaan</a>
        </li>
        <li><a class="active" href="kearsipan2.html">Kearsipan</a>
        </li>
        <li><a cllass ="active" href="galeri.html">Galeri</a></li>
        <li><a href="berita.html">Berita Terkini</a></li>
        <li><a href="kontak.html">Kontak Kami</a></li>
        <li><a href="praktikum.html">Praktikum</a></li>
        </ul>
      </nav>
  </header>
</div>
<div class="wrapper bgded overlay gradient" 
style="background-image:url('images/demo/backgrounds/bg.jpeg');">
<section id="Gallery" class="wow flipInX animated" data-wow-delay=".5s">
  <div id="pageintro" class="hoc clear">
  <article>
  	<center>
  		<h3 class="heading">DINAS PERPUSTAKAAN & KEARSIPAN KABUPATEN TUBAN</h3>
            <footer>
  	</center>
    <br>
    <br>
    <br>
        </ul>
      </footer>
    </article> 
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>

</html>
