<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <title>N.A.R Clouds</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo" style="size: 30%">
                            <ul>
                                <li> <b>N. A. R. Clouds</b> </li>
                            </ul>

                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#products">Products</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="scroll-to-section"></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h2>N.A.R. Clouds</h2>
                                        <p>N.A.R. Clouds offers flexibility to meet your spesific needs,from wide range
                                            of use cases,
                                            ultra-scalability,to costumization.Make the most of our cloud service in the
                                            form of Anything
                                            as a Service (AaaS) for flexibility and remote convenience.</p>

                                        <div class="white-button scroll-to-section d-flex justify-content-end">
                                            <a
                                                href="https://api.whatsapp.com/send?phone=6285294024911&text=Hallo%20Kak!%20Saya%20Ingin%20Bertanya%20Products%20Di%20N.A.R%20Clouds!"><i
                                                    class="fab fa-whatsapp mx-1"></i>Contact Admin via
                                                Whatsapp</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 px-5">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="/img/photo.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="products" class="pricing-tables">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h4>We Have The Best <em>Prices</em> You Can Get</h4>
                        <img src="assets/images/heading-line-dec.png" alt="">
                    </div>
                </div>

                @foreach ($clouds as $cloud)
                    <div class="col-lg-4 mx-auto">
                        <div class="pricing-item-pro">
                            <span class="price">${{ $cloud->price }}</span>
                            <h4>{{ $cloud->name }}</h4>
                            <div class="icon">
                                <img src="/img/1.png" alt="">
                            </div>
                            <ul>
                                <li>{{ $cloud->storage }}</li>
                            </ul>
                            <div class="border-button">
                                <a
                                    href="https://api.whatsapp.com/send?phone=6285294024911&text=Hallo%20Kak!%20Saya%20Ingin%20Paket%20{{ $cloud->name }}%20Di%20N.A.R%20Clouds!"><i
                                        class="fab fa-whatsapp"></i> Order via Whatsapp</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="about" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Amazing Web Creators</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-3">
                    <div class="service-item second-service">
                        <div class="icon"></div>
                        <h4>Nerissa Arviana Ridwan</h4>
                        <p>As Designer</p>
                        <p>2113191005</p>
                        <p> A1 - Teknik Informatika</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item third-service">
                        <div class="icon"></div>
                        <h4>Ade Lukman</h4>
                        <p>As Programmer</p>
                        <p>2113191007</p>
                        <p> A1 - Teknik Informatika</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item fourth-service">
                        <div class="icon"></div>
                        <h4>Muhamad Ridwan</h4>
                        <p>As Designer</p>
                        <p>2113191008</p>
                        <p> A1 - Teknik Informatika</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <footer id="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p>Copyright © Tugas kelompok 2021.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
