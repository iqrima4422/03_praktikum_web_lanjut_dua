@extends('layouts.main')
@section('main')
<body>
    <!-- header image -->
    <div class="header-img-4">
    </div>
    <!-- end header image -->
    <!-- Welcome message -->
    <div class="welcome-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="welcome-wrapper">
                        <h2 class="welcome-title text-uppercase">Contact</h2>
                        <img src="asset/img/welcome-divider-lines.png" alt="Welcome divider" class="welcome-divider-lines-img">
                        <p class="welcome-description">Anda dapat menghubungi kami jika anda membutuhkan informasi mengenai kesehatan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome message -->
    <!-- main content -->
    <section class="templatemo-container">
        <div class="container">
            <div class="row margin-bottom-30">
                <div class="col-lg-12 text-uppercase text-center">
                    <h2 class="section-title">Contact</h2>
                    <div class="section-title-underline-blue"></div>
                    <hr class="section-title-underline">
                    <p class="small">Group 3 - TI 2F</p>
                </div> <!-- col-lg-12 -->
            </div> <!-- row -->
            <div class="row margin-bottom-30">
                <div class="col-lg-6 col-md-6 contact-left">
                    <h3 class="section-title-2 text-uppercase font-weight-300"><b>Our</b> <span class="blue-text">Information</span></h3>
                    <p class="margin-bottom-30">We're very approachable and would love to speak to you. <br>Feel free to call, send us an email.<br> You can simply complete the enquiry form</p>
                    <div class="contact-point">
                        <i class="fa fa-map-marker fa-3x contact-point-icon blue-text"></i>
                        <div class="contact-point-detail-container">
                            <b class="text-uppercase contact-point-title blue-text font-weight-700">Address</b>
                            <p class="contact-point-detail">Jl. Soekarno Hatta No.9, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141</p>
                        </div>
                    </div>
                    <div class="contact-point">
                        <i class="fa fa-envelope-o fa-3x contact-point-icon blue-text"></i>
                        <div class="contact-point-detail-container">
                            <b class="text-uppercase contact-point-title blue-text font-weight-700">Email</b>
                            <p class="contact-point-detail">cs@polinema.ac.id</p>
                        </div>
                    </div>
                    <div class="contact-point">
                        <i class="fa fa-phone fa-3x contact-point-icon blue-text"></i>
                        <div class="contact-point-detail-container">
                            <b class="text-uppercase contact-point-title blue-text font-weight-700">Phone</b>
                            <p class="contact-point-detail">(0341) 404424</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 contact-right">
                    <h3 class="section-title-2 text-uppercase font-weight-300"><b>Leave</b> <span class="blue-text">a message</span></h3>
                    <form action="#" method="post" class="tm-contact-form">
                        <div class="tm-contact-form">
                            <div class="form-group">
                                <input type="text" id="contact_name" class="form-control" placeholder="NAME" />
                            </div>
                            <div class="form-group">
                                <input type="email" id="contact_email" class="form-control" placeholder="EMAIL" />
                            </div>
                            <div class="form-group">
                                <input type="text" id="contact_subject" class="form-control" placeholder="SUBJECT" />
                            </div>
                            <div class="form-group">
                                <textarea id="contact_message" class="form-control" rows="8" placeholder="MESSAGE"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="text-uppercase btn-blue-gradient btn-submit">send message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="google-map-container">
                        <div id="google-map" class="google-map"></div>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </section>
    <div class="blue-divider effect1">
        <div class="dark-blue-bg"></div>
        <div class="blue-divider-bg-graphic"></div>
        <div class="blue-bg"></div>
    </div>
    <section class="templatemo-container blue-bg footer-nav effect1">
        <div class="container">
            <div class="col-lg-2 col-md-2 col-sm-6 footer-block">
                <h3 class="text-uppercase">Main menu</h3>
                <nav class="text-uppercase templatemo-nav-2">
                    <ul>
                        <li><a href="/home">home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/profile">Profile</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 footer-block">
                <h3 class="text-uppercase">History</h3>
                <p>Suatu gaya hidup dengan memperhatikan faktor-faktor tertentu yang mempengaruhi kesehatan.
                    Manfaat pola hidup sehat adalah dapat terhindar dari berbagai penyakit terutama penyakit di organ dalam
                    dan membuat tubuh menjadi sehat dan bugar.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 footer-block">
                <h3 class="text-uppercase">Resources</h3>
                <ul>
                    <li><a href="#">halodoc.com</a></li>
                    <li><a href="#">alodokter.com</a></li>
                    <li><a href="#">klikdokter.com</a></li>
                    <li><a href="#">guesehat.com</a></li>
                    <li><a href="#">tanyadok.com</a></li>
                    <li><a href="#">doktersehat.com</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 footer-block">
                <h3 class="text-uppercase">Nutrisi</h3>
                <ul>
                    <li><a href="#">Mineral</a></li>
                    <li><a href="#">Kalori</a></li>
                    <li><a href="#">Vitamin</a></li>
                    <li><a href="#">Serat</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main content -->
    <!-- JS -->
    <script type="text/javascript" src="asset/js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="asset/js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
        /* Google map
        ------------------------------------------------*/
        var map = '';
        var center;

        function initialize() {
            var mapOptions = {
                zoom: 16,
                center: new google.maps.LatLng(-7.9452398,112.609241),
                scrollwheel: false
            };

            map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

            google.maps.event.addDomListener(map, 'idle', function() {
                calculateCenter();
            });

            google.maps.event.addDomListener(window, 'resize', function() {
                map.setCenter(center);
            });
        }

        function calculateCenter() {
            center = map.getCenter();
        }

        function loadGoogleMap(){
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
            document.body.appendChild(script);
        }
        $(document).ready(function(){
            loadGoogleMap();
        });
    </script>
</body>
@endsection