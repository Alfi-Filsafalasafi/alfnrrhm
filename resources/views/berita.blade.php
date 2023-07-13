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
        <li ><a class ="active" href="/kearsipan">Kearsipan</a>
        </li>
        <li><a  href="/galeri">Galeri</a></li>
        <li class="active"><a href="/berita">Berita Terkini</a></li>
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
<div class="wrapper bgded overlay gradient" 
style="background-image:url('images/demo/backgrounds/mn.jpeg');">
<section id="Gallery" class="wow flipInX animated" data-wow-delay=".5s">
    <div class="col-xs-12 col-sm-12 wow fadeInRight animated" data-wow-delay=".5s">
    <br>
    <br>
    <br>
    <div class="row justify-content-center">
      <div class="col-sm-6">
      <center>
      <h2>PENGUMUMAN</h2>
      <p>SURAT EDARAN NOMOR 367/3822/414.012/2021 TENTANGPEMBERLAKUAN PEMBATASAN KEGIATAN MASYARAKAT DARURAT CORONA VIRUS DISEASE 2019 DI KABUPATEN TUBAN </p>
      <br>

           <p>SURAT EDARAN NOMOR 367/3822/414.012/2021 TENTANG PEMBERLAKUAN PEMBATASAN KEGIATAN MASYARAKAT DARURAT CORONA VIRUS DISEASE 2019 DI KABUPATEN TUBAN Menindaklanjuti Instruksi Menteri Dalam Negeri Nomor 15 Tahun 2021 tentang Pemberlakuan Pembatasan Kegiatan Masyarakat Darurat Corona Virus Disease 2019 di Wilayah Jawa dan Bali dan Keputusan Gubernur Jawa Timur. Unduh disini</p>
           </center>
      </div>
    </div>
                  

          </div>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>