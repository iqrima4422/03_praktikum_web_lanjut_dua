@extends('layouts.content')
@section('content')
<body>
    <!-- header image -->
    <div class="header-img-3"></div>
        <!-- end header image -->
        <!-- Welcome message -->
        <div class="welcome-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="welcome-wrapper">
                            <h2 class="welcome-title text-uppercase">Profile</h2>
                            <img src="asset/img/welcome-divider-lines.png" alt="Welcome divider" class="welcome-divider-lines-img">
                            <p class="welcome-description">Berbagai macam cara untuk tetap hidup sehat. Dimulai dari menjaga pola makan serta olahraga yang teratur.</p>
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
                        <h2 class="section-title">Profile</h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                        <p class="small">MACAM-MACAM HIDUP SEHAT</p>
                    </div>
                </div>
                <div class="row margin-bottom-30">
                    <div class="col-lg-12">
                        <ul id="filters" class="folio-filters">
                            <li class="current"><a href="#" data-filter="*">All</a></li>
                            <li class=""><a href="#" data-filter=".makanan">Makanan</a></li>
                            <li class=""><a href="#" data-filter=".minuman">Minuman</a></li>
                            <li class=""><a href="#" data-filter=".olahraga">Olahraga</a></li>
                            <li class=""><a href="#" data-filter=".kecantikan">Kecantikan</a></li>
                        </ul>
                    </div>
                </div>
                <div id="folio-container" class="row">
                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6 margin-bottom-30 folio-item makanan">
                        <img src="https://cdn1.katadata.co.id/media/images/thumb/2021/08/04/Makanan_sehat-2021_08_04-18_44_26_4c9d620b5c4b7ae8dcb1a36f2e913db1_400x267_thumb.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6 margin-bottom-30 folio-item makanan">
                        <img src="https://d324bm9stwnv8c.cloudfront.net/4-jenis-makanan-sehat-untuk-sambut-tahun-baru-2019-Halodoc.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6 margin-bottom-30 folio-item makanan">
                        <img src="https://mhomecare.co.id/blog/wp-content/uploads/2020/10/Syarat-makanan-sehat-dan-jenis-jenisnya-1024x683.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6 margin-bottom-30 folio-item minuman">
                        <img src="https://static.tokopedia.net/blog/wp-content/uploads/2019/11/9.-Teh-Jahe.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6 margin-bottom-30 folio-item minuman">
                        <img src="https://static.tokopedia.net/blog/wp-content/uploads/2019/11/12.-Air-Kelapa.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6 margin-bottom-30 folio-item minuman">
                        <img src="https://awsimages.detik.net.id/community/media/visual/2019/07/15/082caf73-71b3-4b06-aa85-815a8476f42b.jpeg?w=700&q=90" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6 margin-bottom-30 folio-item olahraga">
                        <img src="https://awsimages.detik.net.id/content/2015/06/12/763/thinkstockphotos464584343.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6 margin-bottom-30 folio-item olahraga">
                        <img src="https://cdn.popbela.com/content-images/post/20210405/1-ee3dfa1de8728dc7df2d125541010213_750x500.jpg" alt="Image" class="img-thumbnail">
                        </div>
                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6 margin-bottom-30 folio-item olahraga">
                        <img src="https://data.bookingdokter.com/article/1621430890DvfOV-thumbnail.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6 margin-bottom-30 folio-item kecantikan">
                        <img src="https://d1bpj0tv6vfxyp.cloudfront.net/3tipsperawatanwajahseharihariantiribethalodoc.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6 margin-bottom-30 folio-item kecantikan">
                        <img src="https://abisgajian.id/images/thumbnail/5-profil-muda-sukses-yang-di-bidang-kecantikan.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6 margin-bottom-30 folio-item kecantikan">
                        <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1560849464/attached_image/mengenal-peran-dokter-estetika-untuk-perawatan-kecantikan-kulit.jpg" alt="Image" class="img-thumbnail">
                    </div>
                </div>
            </div>
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
    <script type="text/javascript" src="asset/js/isotope.pkgd.min.js"></script>      <!-- Isotope, http://isotope.metafizzy.co -->
    <script type="text/javascript" src="asset/js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
        // All images are loaded. Call isotope
        $(window).load(function() {
            var $container = $('#folio-container');
            // init
            $container.isotope({
            // options
            itemSelector: '.folio-item',
            animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                },
            });

            // filter items when filter link is clicked
            jQuery('#filters a').click(function(){
                var selector = $(this).attr('data-filter');
                $container.isotope({ filter: selector });
                return false;
            });

            jQuery('#filters li a').click(function(){

                jQuery('#filters li').removeClass('current');
                jQuery(this).parent().addClass('current');
            });
        });
    </script>
</body>
@endsection