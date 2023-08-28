<html lang="en">
<head>
  <title>Website Cincan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    #navbar {
        background-color: transparent;
        position: fixed;
        top: 0px;
        width: 100%;
        display: block;
        transition: top 0.3s;
    }
    </style>

  <!-- bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/31149d48b0.js" crossorigin="anonymous"></script>
  <!--aos -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!--slider-->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<link href="{{ asset('home.css') }}" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet" />
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>
</head>

<body>
    <nav role="navigation" class="header-navbar navbar-expand-sm navbar fixed-top navbarScroll navbar-hide-on-scroll fixed-top" id="navbar" >
        <div class="container">
            <h1><a class="navbar-brand" href="#">Website Cincan</a></h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#letterForYou">Letter For You</a></li>
                    <li class="nav-item"><a class="nav-link" href="#memories">Our Memories</a></li>
                    <li class="nav-item"><a class="nav-link" href="#events">Our Events</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @section('scripts')
        <script>
            $(document).ready(function(){
                $('.customer-logos').slick({
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 1500,
                    arrows: false,
                    dots: false,
                    pauseOnHover: false,
                    responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 4
                        }
                    }, {
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 3
                        }
                    }]
                });
            });
        </script>
        <script>
            $(document).ready(function(){
                document.getElementById("navbar").style.backgroundColor = "rgb(198, 237, 255)";
            });
            var prevScrollpos = window.pageYOffset;
            window.onscroll = function() {
                var currentScrollPos = window.pageYOffset;
                if (prevScrollpos > currentScrollPos) {
                    document.getElementById("navbar").style.top = "0";
                    document.getElementById("navbar").style.backgroundColor = "transparent";
                    if (currentScrollPos < 49){
                        document.getElementById("navbar").style.backgroundColor = "rgb(198, 237, 255)";
                    }
                } else {
                    document.getElementById("navbar").style.top = "-100px";
                }
                prevScrollpos = currentScrollPos;
            }
        </script>
    @endsection

    @yield('content')
    @yield('scripts')
</body>

<!--<footer id="footer">
    <div class="container-fluid" id="contacts">
        <div>
            <div class="d-flex justify-content-center p-1 fs-4">
                Contact me
            </div>
        </div>

        {{-- Socmed --}}
        <div class="social-icons mt-4">
            <div class="p-1">
                <a href="https://www.instagram.com/" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>

            <div class="p-1">
                <a href="https://twitter.com/" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>

            <div class="p-1">
                <a href="https://www.facebook.com/" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
            </div>
            <div class="p-1">
                <a href="https://www.linkedin.com/" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
    </div>
</footer>-->
</html>
