<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    

    <title>ONLINE SHOP</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  </head>

  <body id="top">
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <h1><a href="pertama.html">DISPERSIP</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="/">Beranda</a></li>
        <li><a class="active" href="/perpustakaan">Perpustakaan</a>
        </li>
        <li><a class="active" href="/kearsipan">Kearsipan</a>
        </li>
        <li><a cllass ="active" href="/galeri">Galeri</a></li>
        <li><a href="/berita">Berita Terkini</a></li>
        <li><a href="/kontak">Kontak Kami</a></li>
        <li><a href="/praktikum">Praktikum</a></li>
        @if (Route::has('login'))
            @auth
              @if(Auth::user()->id_level == 1 )
              <li>
              <a href="{{ url('/home') }}">Halaman Admin</a>

              </li>
              @else
              <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
              @endif
            @else
            <li>
            <a href="{{ route('login') }}" class="nav-link">Log in</a>
            </li>
          @endauth
        @endif
        </ul>
      </nav>
  </header>
</div>
<div class="wrapper bgded overlay gradient" style="background-image:url('images/demo/backgrounds/bg.jpeg');">
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
</body>
 


    
  </body>
</html>