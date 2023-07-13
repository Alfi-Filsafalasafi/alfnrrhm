<!DOCTYPE html>
<html lang="">
<head>
<title>DINAS KEARSIPAN DAN PERPUSTAKAAN</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
      <li ><a class="active" href="/">Beranda</a></li>
        <li><a class="active" href="/perpustakaan">Perpustakaan</a>
        </li>
        <li><a  href="/kearsipan">Kearsipan</a>
        </li>
        <li><a cllass ="active" href="/galeri">Galeri</a></li>
        <li><a href="/berita">Berita Terkini</a></li>
        <li><a href="/kontak">Kontak Kami</a></li>
        <li><a href="/praktikum">Praktikum</a></li>
        @if (Route::has('login'))
            @auth
              @if(Auth::user()->level == 1 )
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
<div>
            <form action="#" method="post">
              <fieldset>
                
                  <br>
                  <br>
                  <center><h2>BUKU TERPOPULER</h2>       
        <p>PERPUSTAKAAN UMUM KABUPATEN TUBAN</p></center>

        <body>
          <table border="none" bgcolor="white" >
            <tr>
              <td align="center"><img src="images/demo/gallery/novel 1.jpg"><br>
                <br>
                <input type="Submit" name="Baca" value="Baca"></td>
              <td align="center"><img src="images/demo/gallery/buku sejarah 1.jpg">
              <br>
                <br>
                <input type="Submit" name="Baca" value="Baca"></td>
              <td align="center"><img src="images/demo/gallery/bukpen 1.jpg">
              <br>
                <br>
                <input type="Submit" name="Baca" value="Baca"></td>
              <td align="center"><img src="images/demo/gallery/novel 2.jpg">
              <br>
                <br>
                <input type="Submit" name="Baca" value="Baca"></td>
              </center>
          </tr>
          </table>
        </body>