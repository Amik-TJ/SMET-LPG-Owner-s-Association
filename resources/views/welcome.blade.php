@extends('layouts.landing_layout')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
            <h1>LPG Auto Gas Station & Conversion Workshop Owner's Association Bangladesh</h1>
            <h2>We are team of LPG Autogas Owner's in Bangladesh</h2>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container">

                <div class="row">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                        <img src="assets/img/clients/c-1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="200">
                        <img src="assets/img/clients/c-2.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="300">
                        <img src="assets/img/clients/c-3.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="400">
                        <img src="assets/img/clients/c-4.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="500">
                        <img src="assets/img/clients/c-5.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="600">
                        <img src="assets/img/clients/c-6.png" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                        <h2>LPG Autogas Station and Workshop Owner's Association</h2>
                        <h3>We are largest LPG Autogas Owner's Association in Bangladesh</h3>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
                        <p>
                            We are connected to provide better services to our Customer. Our Aim is to Build the largest LPG Gas Station Chain in Bangladesh. BD LPG Owner's Association is a team with well trained professionals has been working in different engineering divisions continuosly through efficient communications in order to meet client's needs and requirements.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> LPG Station and Conversion || LPG Autogas Station</li>
                            <li><i class="ri-check-double-line"></i> LPG Distribution || Domestic LPG System </li>
                            <li><i class="ri-check-double-line"></i>  Fuel Station Management System || LPG Bottling Plant Equipments</li>
                        </ul>
                        <p class="font-italic">
                            Our Aim at BD LPG Autogas Owner's Association is known as a One Stop Engineering Solution with the ability to complete any kind of Project Successfully in various fields.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row counters">

                    {{--<div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">186</span>
                        <p>Total Members</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">380</span>
                        <p>LPG Stations</p>
                    </div>--}}
                    <div class="col-lg-6 col-6 text-center">
                        <span data-toggle="counter-up">186</span>
                        <p>Total Members</p>
                    </div>

                    <div class="col-lg-6 col-6 text-center">
                        <span data-toggle="counter-up">380</span>
                        <p>LPG Stations</p>
                    </div>

                    {{-- <div class="col-lg-3 col-6 text-center">
                         <span data-toggle="counter-up">1,463</span>
                         <p>Ongoing Projects</p>
                     </div>

                     <div class="col-lg-3 col-6 text-center">
                         <span data-toggle="counter-up">15</span>
                         <p>Upcoming Projects</p>
                     </div>--}}

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
                        <div class="content">
                            <h3 class="text-center">Who We Are & What is Our Goal ?</h3>
                            <p>
                                We are Largest LPG Autogas Owner's Association in Bangladesh. Our Aim is to Provide Number 1 Service to our Clients.
                            </p>
                            <div class="text-center">
                                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-receipt"></i>
                                        <h4>Supply Of LPG Station Equipment</h4>
                                        <p>We supply all kind of LPG Filling Station Equipments throughout the Country</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-cube-alt"></i>
                                        <h4>Ensure Best Fuel Price in Whole Bangladesh</h4>
                                        <p>Our Aim is to ensure exact same fuel price throughout the country</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-images"></i>
                                        <h4>Build Strong LPG Station Owner's Chain</h4>
                                        <p>Our Major concern is to solve different difficulties of LPG Owner's and Improve the quality of LPG Service</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="text-center" data-aos="zoom-in">
                    <h3>Join With Us</h3>
                    <p> Join with us to make our Community strong, Get better Services and Know more about Us</p>
                    <a class="cta-btn" href="#">Join Us</a>
                </div>
            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title" data-aos="fade-right">
                            <h2>Services</h2>
                            <p>Our Main Goal is to fulfill Members Claim and Demand Together.Our Major concern is to solve different difficulties of LPG Owner's and Improve the quality of LPG Service</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                    <h4><a href="">Owner's Benefit</a></h4>
                                    <p>Solve different issues of LPG Station Owners and Make Maximum Benefit</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="icon"><i class="bx bx-file"></i></div>
                                    <h4><a href="">Largest LPG Owners Chain Management</a></h4>
                                    <p>We are Largest LPG Owner's Association Chain in Bangladesh.</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex align-items-stretch mt-4">
                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                                    <h4><a href="">Autogas Business</a></h4>
                                    <p>The body aims at enhancing the auto gas business in the country and defending customers’ interest through following government’s regulations and policies.</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex align-items-stretch mt-4">
                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="icon"><i class="bx bx-world"></i></div>
                                    <h4><a href="">LPG Station Management</a></h4>
                                    <p>LPG Station and Conversion || LPG Autogas Station || LPG Distribution || Domestic LPG System</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

    {{--<!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-left">
                <h2>Portfolio</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Portfolio Section -->--}}

    {{--<!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Testimonials</h2>
                        <p>Magnam dolores commodi suscipit uisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="owl-carousel testimonials-carousel">

                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                        </div>

                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                        </div>

                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                        </div>

                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                        </div>

                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Testimonials Section -->--}}

    <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title" data-aos="fade-right">
                            <h2>Central Committee</h2>
                            <p>LPG Owner's Association Committee</p>
                            <p>The association was formed at a meeting in Dhaka recently. The meeting also formed a 9-member adhoc committee and a 3-member advisory body.</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                                    <div class="member-info">
                                        <h4>Serajul Mawla</h4>
                                        <span>President</span>
                                        <p>Owner of Smet Services & Saad Motors</p>
                                        <div class="social">
                                            <a href=""><i class="ri-twitter-fill"></i></a>
                                            <a href="https://www.facebook.com/serajul.mawla.ripon" target="_blank"><i class="ri-facebook-fill"></i></a>
                                            <a href=""><i class="ri-instagram-fill"></i></a>
                                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-4 mt-lg-0">
                                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="pic"><img src="assets/img/team/Rashed Ud Doula Khan.jpg" class="img-fluid" alt=""></div>
                                    <div class="member-info">
                                        <h4>Rashed Ud Doula Khan</h4>
                                        <span>Vice President</span>
                                        <p>Owner of Khan Brothers CNG ltd</p>
                                        <div class="social">
                                            <a href=""><i class="ri-twitter-fill"></i></a>
                                            <a href="https://www.facebook.com/rashed.u.khan.7" target="_blank"><i class="ri-facebook-fill"></i></a>
                                            <a href=""><i class="ri-instagram-fill"></i></a>
                                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-4">
                                <div class="member" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                                    <div class="member-info">
                                        <h4>Nur Hossain Miron</h4>
                                        <span>Vice President</span>
                                        <p>Owner of Hazi Filling Station</p>
                                        <div class="social">
                                            <a href=""><i class="ri-twitter-fill"></i></a>
                                            <a href="https://www.facebook.com/md.miron.7921975" target="_blank"><i class="ri-facebook-fill"></i></a>
                                            <a href=""><i class="ri-instagram-fill"></i></a>
                                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-4">
                                <div class="member" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="pic"><img src="assets/img/team/Hasin_Parvez.jpg" class="img-fluid" alt=""></div>
                                    <div class="member-info">
                                        <h4>Hasin Pervez</h4>
                                        <span>General Secretary</span>
                                        <p>Owner of Green Fuel Filling Station</p>
                                        <div class="social">
                                            <a href=""><i class="ri-twitter-fill"></i></a>
                                            <a href=""><i class="ri-facebook-fill"></i></a>
                                            <a href=""><i class="ri-instagram-fill"></i></a>
                                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <div class="section-title">
                            <h2>Contact US</h2>
                            <p>Location : House -2 , Road - 2, Pallabi, Mirpur, Dhaka - 1216</p>
                        </div>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.8732256691405!2d90.36190351363625!3d23.82310669191473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c13b145beaed%3A0x4d0de0eaa5b38c53!2sSMET%20SERVICES!5e0!3m2!1sen!2sbd!4v1612334750653!5m2!1sen!2sbd" frameborder="0" allowfullscreen></iframe>
                        <div class="info mt-4">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p>House - 2, Road - 2, Pallabi, Mirpur, Dhaka-1216</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mt-4">
                                <div class="info">
                                    <i class="icofont-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>bdlpgautogas19@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="info w-100 mt-4">
                                    <i class="icofont-phone"></i>
                                    <h4>Call:</h4>
                                    <p>01704179247</p>
                                </div>
                            </div>
                        </div>

                        <form action="/contact_us_send_message" method="POST"  class="php-email-form mt-4">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter Subject" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="phone" data-msg="Please enter a valid Phone" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            {{--<div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>--}}
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Contact Section -->
    </main><!-- End #main -->
@endsection
