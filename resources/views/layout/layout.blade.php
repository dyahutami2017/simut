<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Diklat Rumah Sakit Akademik Universitas Gadjah Mada</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/line-icons.css">
    <link rel="stylesheet" href="/css/all.css"> <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.theme.css">
    <link rel="stylesheet" href="/css/nivo-lightbox.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/color-switcher.css">
    <link rel="stylesheet" href="/css/menu_sideslide.css">
    <link rel="stylesheet" href="/css/main.css">    
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/sweetalert2.all.min.css">
    <link rel="stylesheet" href="/css/datatables.css">
    <link rel="icon" type="image/png" href="/img/logo-ugm.png">
    <style>
      .captcha
      { font: italic bold 30px "Sans Serif";
      color:#a0a0a0;background-color:#c0c0c0;
      width:100px;border-radius: 5px;
      text-align:center;
      text-decoration:line-through;
      }
      .errmsg
      {color:#ff0000;}
      .table-borderless td{
        padding: 0 !important;
      }
    </style>
  </head>
  
  <body>
    <!-- Header Section Start -->
    <header id="slider-area">  
      <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-white">
        <div class="container">          
          <a class="navbar-brand" href="/" style="font-size:15px">
            <div>
                <img id="logo-ugm" src="/img/logo-ugm/logo-ugm-blue.png" alt="Logo UGM" style="width: 25%; height: 50px; float:left">
                Diklat Rumah Sakit Akademik<br>Universitas Gadjah Mada
            </div>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="/" loc="home">Home</a>
              </li>           
              <li class="nav-item">
                <a class="nav-link page-scroll" href="/#jadwal" loc="jadwal">Jadwal</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link page-scroll" href="/#subscribe" loc="subscribe">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="/#portfolios" loc="works">Kegiatan Kami</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link page-scroll" href="/#team" loc="team">Struktur Organisasi</a>
              </li>    
              <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="/#blog" loc="blog">Berita</a>
              </li>  -->
              <li class="nav-item">
                <a class="nav-link page-scroll" href="/#kontak" loc="kontak">Kontak</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link page-scroll" href="/registrasi" loc="registrasi">Registrasi</a>
              </li> 
              <li class="nav-item">
                <a class="btn btn-common btn-effect btn-sm" style="padding: 5px 15px; font-size:12px; margin-left:10px" href="/login" loc="login">Login <i class="fa-solid fa-right-to-bracket"></i></a>
              </li>
            </ul>              
          </div>
        </div>
      </nav> 

      <!-- Main Carousel Section -->
     @yield('carousel')  

    </header>
    <!-- Header Section End --> 

    <!-- Section Start -->
    @yield('content')
    <!-- Section End -->

    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <p style="font-size:27px">Rumah Sakit Akademik <br> Universitas Gadjah Mada</p>
              <div class="textwidget" style="height:10%"></div>
              <!-- <ul class="footer-social">
                <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
              </ul>  -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Hubungi Kami</h3>
                <ul class="contact-footer">
                  <li>
                    <strong>Alamat :</strong> <span>Jl. Kabupaten (Ring Road), Kronggahan, Trihanggo, Gamping, Sleman, Yogyakarta 55291 Indonesia</span>
                  </li>
                  <li>
                    <strong>WhatsApp :</strong> 
                    <span>
                      <a href="https://api.whatsapp.com/send?phone=628112856214" target="_blank">+62 811-2856-214 (Instalasi Diklat RSA UGM)</a> <br>
                      <a href="https://api.whatsapp.com/send?phone=6282134162669" target="_blank">+62 821-3416-2669 (Danti) </a> <br>
                      <a href="https://api.whatsapp.com/send?phone=6285801208795" target="_blank">+62 858-0120-8795 (Mara)</a> <br>
                    </span>
                  </li>
                  <li>
                    <strong>E-mail :</strong> <span><a href="mailto:rsaugmdiklat@gmail.com">rsaugmdiklat@gmail.com</a></span>
                  </li>
                </ul> 
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <img src="/img/logo-rsa-2.png" alt="" style="width:100%; height:30%">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer area End -->
      
      <!-- Copyright Start  -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info float-left">
                <p>Rumah Sakit Akademik Universitas Gadjah Mada</p>
              </div>              
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End -->

    </footer>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-arrow-up"></i>
    </a>

    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>    

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="/js/jquery-min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/classie.js"></script>
    <script src="/js/color-switcher.js"></script>
    <script src="/js/jquery.mixitup.js"></script>
    <script src="/js/nivo-lightbox.js"></script>
    <script src="/js/owl.carousel.js"></script>    
    <script src="/js/jquery.stellar.min.js"></script>    
    <script src="/js/jquery.nav.js"></script>    
    <script src="/js/scrolling-nav.js"></script>    
    <script src="/js/jquery.easing.min.js"></script>     
    <script src="/js/wow.js"></script> 
    <script src="/js/jquery.vide.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>    
    <script src="/js/jquery.magnific-popup.min.js"></script>    
    <script src="/js/waypoints.min.js"></script>    
    <script src="/js/form-validator.min.js"></script>
    <script src="/js/contact-form-script.js"></script>   
    <script src="/js/main.js"></script>
    <script src="/js/all.js"></script> <!-- Fontawesome -->
    <script src="/js/sweetalert2.all.min.js"></script>
    <script src="/js/datatables.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
    <script>
      $(document).ready(function () {
        $('.nav-link').removeClass('active');
        $('#navbarCollapse li a').click(function (e) {
          var location = $(this).attr('href');
          var link = location.split('/').slice(-1)[0];
          if (location.indexOf('#') > -1) {
            $('html, body').stop().animate({
              scrollTop: $(link).offset().top
            }, 1500, 'easeInOutExpo');
          }
          $('#navbarCollapse li a').removeClass('active');
          $(this).addClass('active');
        });
      });
    </script>
    @yield('script')   
  </body>
</html>