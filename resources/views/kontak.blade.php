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
        <li ><a class="active" href="/">Beranda</a></li>
        <li><a class="active" href="/perpustakaan">Perpustakaan</a>
        </li>
        <li><a class="active"  href="/kearsipan">Kearsipan</a>
        </li>
        <li><a class ="active" href="/galeri">Galeri</a></li>
        <li><a href="/berita">Berita Terkini</a></li>
        <li class ="active"><a href="/kontak">Kontak Kami</a></li>
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

<div style="background-color: rgba(175, 238, 238);height: 100%;">
<section id="Gallery" class="wow flipInX animated" data-wow-delay=".5s">
    <br>
    <br>
    <body>
          
           
              <center>
               <p> HUBUNGI KAMI <p>KANTOR DINAS PERPUSTAKAAN DAN KEARSIPAN KABUPATEN TUBAN<br>
Jl. HOS. Cokroaminoto, No. 5, Semanding 62381</p>
<p>Hari senin s/d Kamis :<br>
      Pukul 07.30 s/d 15.30 WIB<br>
Hari Jum'at :<br>
      Pukul 07.30 s/d 14.30 WIB</p>

<p>PERPUSTAKAAN UMUM DAERAH TUBAN</p>

<p>Jl. Sunan Kalijogo No.10, Latsari, Kec. Tuban 62314</p>
<p>Hari senin s/d Jum’at :<br>
      Pukul 07.30 s/d 20.30 WIB<br>
Hari sabtu :<br>
      Pukul 07.30 s/d 19.00 WIB<br>
Hari Minggu :<br>
      Pukul 07.30 s/d 12.30 WIB</p>

<p></p>

<p>(0356) 323002, (0356) 320299</p>

<p>dispersip@tubankab.go.id</p></p> </center>
<br>
<br>
<br>
<br>
</body>
             
            
      