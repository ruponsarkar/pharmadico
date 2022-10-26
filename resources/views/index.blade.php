@extends('layout')

@section('title', 'Home')



@section('content')





<div class="row">
    <div class="col-xl-8 pt-2">
        <section id="hero" data-aos="fade-left" data-aos-delay="100">
            <div class="hero-container">
                <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                    <div class="carousel-inner" role="listbox">

                        <!-- Slide 1 -->
                        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2 class="animate__animated animate__fadeInDown">Welcome to
                                        <span>Eterna</span>
                                    </h2>
                                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a
                                        aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam.
                                    </p>
                                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read
                                        More</a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2 class="animate__animated fanimate__adeInDown">Lorem <span>Ipsum
                                            Dolor</span></h2>
                                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a
                                        aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam.
                                    </p>
                                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read
                                        More</a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2 class="animate__animated animate__fadeInDown">Sequi ea <span>Dime
                                            Lara</span></h2>
                                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a
                                        aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam.
                                    </p>
                                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read
                                        More</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                    </a>

                    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                    </a>

                </div>
            </div>
        </section>
    </div>
    <div class="col-xl-4">

        <div class="row pt-3">
            <!-- ======= indexing Section ======= -->
            <section id="indexing" class="indexing">
                <div class="section-title">
                    <h2>Indexing</h2>
                </div>
                <div class="container" data-aos="zoom-in">
                    <div class="indexing-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide"><img src="assets/img/indexing/1.jpeg" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/indexing/2.jpeg" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/indexing/3.jpeg" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/indexing/4.jpeg" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/indexing/5.jpeg" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/indexing/6.jpeg" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/indexing/7.jpeg" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/indexing/8.jpeg" class="img-fluid" alt=""></div>
                        </div>
                        <!-- <div class="swiper-pagination"></div> -->
                    </div>

                </div>
            </section><!-- End indexing Section -->
        </div>

        <div class="row " data-aos="zoom-in" data-aos-delay="100">
            <!-- <section id="submit">
        <div class="submit-container">
            <div class="submit-item">
              <a href="https://twitter.com/masuwa1018" class="btn effect01" target="_blank"><span> Submit Manuscript </span></a>
            </div>
        </div>
      </section> -->
            <div class="col-sm-6 text-center p-1">
                <div class="btn effect01">Publication Ethics and Malpractice Statement</div>
            </div>
            <div class="col-sm-6 text-center p-1">
                <div class="btn effect01">Manuscript Preparation Guidelines</div>
            </div>
            <div class="col-sm-6 text-center p-1">
                <div class="btn effect01">Research Guidelines</div>
            </div>
            <div class="col-sm-6 text-center p-1">
                <div class="btn effect01">APA Style (6th Edition)</div>
            </div>
            <div class="col-sm-6 text-center p-1">
                <div class="btn effect01">Writing a good research paper</div>
            </div>
            <div class="col-sm-6 text-center p-1">
                <div class="btn effect01">Google Language Translator</div>
            </div>
        </div>
    </div>
</div>


<!-- ======= Journal Section ======= -->
<section id="article" class="article testimonials-bg p-1">
    <div class="section-title">
        <h2>Journals</h2>
        <!-- <p>Latest Posts</p> -->
    </div>


    <div class="container-fluid" data-aos="fade-up">
        <div class="row">

            <div class="article-slider swiper">
                <div class="swiper-wrapper align-items-center text-center">
                    <div class="swiper-slide">
                        <img class="img-fluid" src="assets/img/journals/1.jpg">
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" src="assets/img/journals/2.jpg">
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" src="assets/img/journals/3.png">
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" src="assets/img/journals/4.png">
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" src="assets/img/journals/5.png">
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" src="assets/img/journals/6.png">
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" src="assets/img/journals/7.png">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>


</section><!-- End Testimonials Section -->



<div class="row p-2">
    <div class="col-lg-3">
        <div class="row align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <section id="access-policy">
                <div class="access-policy-container">
                    <div class="access-policy-item">
                        <h4>Open Access Policy</h4>
                        <br>
                        Copyright and Licensing: All articles published in journals our have Attribution- Share
                        Alike CC BY- NC: Creative Commons Attribution-Share Alike 4.0 International License.
                        License readers can share...
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="col-lg-9">
        <!-- ======= article Section ======= -->
        <section id="article" class="article testimonials-bg">
            <div class="section-title">
                <h2>Latest Articles</h2>
                <!-- <p>Latest Posts</p> -->
            </div>


            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-xl-3 p-2">
                        <div class="swiper-slide">
                            <div class='card'>
                                <div class='info'>
                                    <div class='title'>Traditional Sanctions for the Performers of the Theft of
                                        Pratima...</div>

                                    <p class="card-icon">
                                        <i class="bi bi-person-circle"></i>
                                        Kharisma Nanda Sattwika, Ketut...
                                        <br>
                                        <i class="bi bi-tag-fill"></i>
                                        Kharisma Nanda Sattwika
                                    </p>
                                    <p class='description' style="font-size: 2rem;">
                                        <i class="bi bi-download"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xl-3 p-2">
                        <div class="swiper-slide">
                            <div class='card'>
                                <div class='info'>
                                    <div class='title'>Research Journal of Education, linguistic and Islamic
                                        Culture</div>
                                    <p class="card-icon">
                                        <i class="bi bi-person-circle"></i>
                                        Razzakov, S.J., & Qosbergenov,
                                        <br>
                                        <i class="bi bi-tag-fill"></i>
                                        Razzakov, S.J.
                                    </p>
                                    <p class='description' style="font-size: 2rem;">
                                        <i class="bi bi-download"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xl-3 p-2">
                        <div class="swiper-slide">
                            <div class='card'>
                                <div class='info'>
                                    <div class='title'>The Impact of Globalization and the Role of Universities
                                        in the F...</div>
                                    <p class="card-icon">
                                        <i class="bi bi-person-circle"></i>
                                        Sultaniyazov Madiyar Baxtiyaro...
                                        <br>
                                        <i class="bi bi-tag-fill"></i>
                                        Sultaniyazov Madiyar Baxtiyarovich
                                    </p>
                                    <p class='description' style="font-size: 2rem;">
                                        <i class="bi bi-download"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xl-3 d-lg-none d-xl-block p-2">
                        <div class="swiper-slide">
                            <div class='card'>
                                <div class='info'>
                                    <div class='title'>Research Journal of Education, linguistic and Islamic
                                        Culture</div>
                                    <p class="card-icon">
                                        <i class="bi bi-person-circle"></i>
                                        Razzakov, S.J., & Qosbergenov,
                                        <br>
                                        <i class="bi bi-tag-fill"></i>
                                        Razzakov, S.J.
                                    </p>
                                    <p class='description' style="font-size: 2rem;">
                                        <i class="bi bi-download"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center p-2"><strong><a href="#"> SHOW MORE</a></strong></div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>

            </div>


        </section><!-- End Testimonials Section -->
    </div>
</div>


<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row" data-aos="zoom-in" data-aos-delay="100">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3>About Us </h3>
                        <p>
                            Emabr Publishers is an independent, open-access, international research based
                            publishing house committed to providing a 'peer reviewed' platform to outstanding
                            researchers and
                            ...<a href="#"> Read more</a>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Open Access Licence</h4>
                    <a rel="license" href="https://creativecommons.org/licenses/by-nc/4.0/"> <img alt="Creative Commons License" style="border-width:0;float:left" src="assets/img/li.png"></a><br>
                    <p class="about-us" style="text-align:left">
                        <br>This work is licensed under a Creative Commons Attribution-NonCommercial 4.0
                        International License.
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-info">
                    <h4>Contact Information</h4>

                    <h6 style="color:red; font-weight:bold;">Principal Contact</h6>
                    <p><i class="bi bi-people"></i>
                        Kawsar Ahmed- Director <br>
                    <p><i class="bi bi-geo-alt-fill"></i>
                        017 Uttar Nowabil, Ambari Hojai, Assam- &nbsp; &nbsp; &nbsp; &nbsp; India 782445<br>
                        <i class="bi bi-envelope"></i>
                        <strong>Email:</strong> director@embarpublishers.com<br><br>

                </div>

                <div class="col-lg-3 col-md-6 footer-info">
                    <h4>.</h4>


                    <h6 style="color:red; font-weight:bold;">Registered Office</h6>
                    <p><i class="bi bi-geo-alt-fill"></i>
                        112 Iraga, Solana, Cagayan Valley- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; Philippines 3500<br>
                        <i class="bi bi-envelope"></i>
                        <strong>Email:</strong> contact@embarpublishers.com<br><br>
                    </p>

                    <a href="#">
                        <h6 style="color:yellow; font-weight:bold;">Country wise Office locations...</h6>
                    </a>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>EMBAR Publishers</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Developed by <a href="https://pageuptechnologies.com"><b> PageUpTechnologies </b></a>
        </div>
    </div>
</footer>



</div>






@endsection