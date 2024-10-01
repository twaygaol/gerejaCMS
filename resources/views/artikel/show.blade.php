<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <title>@yield('title', "HKBP Mulia Medan")</title>

    <!-- Loading third party fonts -->
    <link href="https://fonts.googleapis.com/css?family=Belgrano:400" rel="stylesheet" type="text/css">
    <link href="{{ asset('fonts/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @stack('head')

</head>
<body>
    <div class="site-content">

        <div class="site-header header-collapsed" style="background-color:#312048 ">
            <div class="container" >
                <div class="header-bar">
                    <a href="{{ url('/') }}" class="branding">
                        <img src="{{ asset('images/logo.png') }}" alt="" class="logo">
                        <h1 class="site-title">HKBP Mulia Medan</h1>
                    </a>

                    <!-- Default snippet for navigation -->
                    <div class="main-navigation">
                        <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                        <ul class="menu">
                            <li class="menu-item current-menu-item"><a href="#about">About us</a></li>
                            <li class="menu-item"><a href="#pastors">Pelayanan</a></li>
                            <li class="menu-item"><a href="#events">Artikel</a></li>
                            <li class="menu-item"><a href="#seremons">Jadwal</a></li>
                            <li class="menu-item"><a href="#families">Galeri</a></li>
                            <li class="menu-item"><a href="#contact">Contact</a></li>
                            <li class="menu-item"><a href="/admin">login</a></li>
                        </ul>
                    </div>

                    <div class="mobile-navigation"></div>
                </div>
            </div>
        </div>


        <div class="container" style="margin-top:150px;">
            <div class="article-detail">
                <img width="100%" height="80%" style="justify-content: center;"  src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul_artikel }}" class="img-fluid">
                <h1 style="margin-top: 10px;">{{ $artikel->judul_artikel }}</h1>
                <p class="date"><i class="fa fa-calendar"></i> {{ $artikel->tgl_artikel->format('d/m/Y') }}</p>
                <div class="article-content" style="background-color:#F5F5F5; padding:15px; border-radius:15px; ">
                    {!! $artikel->isi_artikel !!}
                </div>
                <a href="{{ url()->previous() }}" class="button btn btn-primary"style="margin-top:50px;">Back to Articles</a>
            </div>
        </div>

        <div id="contact" class="fullwidth-block" data-bg-color="#4a3173">
            <div class="container">
                <h2 class="section-title">Contact us</h2>
                <p class="section-intro">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>

                <div class="contact-detail">
                    <span><img src="images/icon-marker.png" alt="" class="icon"> 294 Samuelson Rd, portage</span>
                    <span><img src="images/icon-phone.png" alt="" class="icon"> (989) 589 423 553</span>
                    <span><img src="images/icon-envelope.png" alt="" class="icon"> contact@patrichchurch.com</span>
                </div>
            </div>
        </div>
    </main>
</div>



<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script src="js/plugins.js"></script>
<script src="js/app.js"></script>

</body>

</html>
</body>
</html>
