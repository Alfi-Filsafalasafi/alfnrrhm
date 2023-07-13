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
        <li class="active"><a  href="/kearsipan">Kearsipan</a>
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
<center>
<p>Bidang Kearsipan dipimpin oleh seorang Kepala Bidang, yang berkedudukan dibawah dan bertanggungjawab kepada kepala dinas</p>
<label>Bidang Kearsipan mempunyai tugas</label>
<select name =" kearsipan">
  <option>pengawasan</option>
  <option>pengendalian</option>
  <option>Melaksanakan merumuskan Kebijakan</option>
  <option>Melaksanakan Koordinasi dengan perangkat daerah</option>
  <option>petunjuk teknis dan melaksanakan pembinaan</option>
</select>
<br>
<br>
<br>
<br>
<br>
<label>Bidang Kearsipan membawakan dan mengkoordinasikan</label>
<select name="Koordinasi">
  <option>Seksi Akuisisi dan Pelestarian Arsip</option>
  <option>Seksi Pengolahan dan Pelayanan Arsip</option>
  <option>Seksi Penilaian dan Penyusutan</option>
  
</select>
</center>