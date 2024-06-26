@extends('layout')

@section('title', 'Home')



@section('content')

    <div class="container px-md-5 py-2">

        <div class="">

            <div class="col-xl-12 ">
                <section id="hero">
                    <div class="hero-container">
                        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                            <div class="carousel-inner" role="listbox">

                                <!-- Slide 1 -->
                                <div class="carousel-item active" style="background-image: url(assets/img/slide/3.jpg)">
                                    <div class="carousel-container">
                                        <div class="carousel-content">
                                            <h2 class="animate__animated animate__fadeInDown">Welcome to
                                                <span>Pharmedico Publishers</span>
                                            </h2>
                                            <p class="animate__animated animate__fadeInUp">Writing is a solitary endeavor,
                                                being an author is not
                                            </p>
                                            <a href=""
                                                class="btn-get-started animate__animated animate__fadeInUp">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 2 -->
                                <div class="carousel-item" style="background-image: url(assets/img/slide/1.jpg)">
                                    <div class="carousel-container">
                                        <div class="carousel-content">
                                            <h2 class="animate__animated fanimate__adeInDown">Pharmedico
                                                <span>Publishers</span>
                                            </h2>
                                            <p class="animate__animated animate__fadeInUp">Silence is the death of a story
                                            </p>
                                            <a href=""
                                                class="btn-get-started animate__animated animate__fadeInUp">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 3 -->
                                <div class="carousel-item" style="background-image: url(assets/img/slide/4.jpg)">
                                    <div class="carousel-container">
                                        <div class="carousel-content">
                                            <h2 class="animate__animated animate__fadeInDown">Pharmedico <span>Publishers
                                                </span></h2>
                                            <p class="animate__animated animate__fadeInUp">lets you feed your inner control
                                                freak
                                            </p>
                                            <a href=""
                                                class="btn-get-started animate__animated animate__fadeInUp">Read
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

                <div class="row">
                    <div class="col-md-4">
                        <div class="card-c hover-card p-4 d-flex align-items-center justify-content-center">
                            <b>
                                OMICRON: THE VARIANT OF CONCERN
                            </b>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-c hover-card  p-4 d-flex align-items-center justify-content-center">
                            <b>
                                THE DEVELOPMENT OF AYURVEDA: FROM ANCIENT PRACTICE TO MODERN FAD
                            </b>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-c hover-card  p-4 d-flex align-items-center justify-content-center">
                            <b>
                                CANCER IMMUNOTHERAPY: A PROMISING DAWN IN CANCER RESEARCH
                            </b>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row  py-4">

                <div class="col-md-4">
                    <div class="card-c">
                        <div class="h-box">
                            <div class="h-box-text p-2">
                                Open Access Policy
                            </div>
                        </div>
                        <div class="row align-items-stretch">
                            <section id="access-policy">
                                <div class="access-policy-container">
                                    <div class="access-policy-item">
                                        <h4>Open Access Policy</h4>
                                        <br>
                                        Copyright and Licensing: All articles published in journals our have Attribution-
                                        Share
                                        Alike CC BY- NC: Creative Commons Attribution-Share Alike 4.0 International License.
                                        License readers can share...
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 d-flex align-items-center">
                    <div class="card-c">
                        <div class="h-box">
                            <div class="h-box-text p-2">
                                Resources
                            </div>
                        </div>
                        <div>
                            <div class="p-3">
                                <div class="col-sm-12 text-center p-1">
                                    <div class="btn effect01">Publication Ethics and Malpractice Statement</div>
                                </div>
                                <div class="col-sm-12 text-center p-1">
                                    <div class="btn effect01">Manuscript Preparation Guidelines</div>
                                </div>
                                <div class="col-sm-12 text-center p-1">
                                    <div class="btn effect01">Research Guidelines</div>
                                </div>
                                <div class="col-sm-12 text-center p-1">
                                    <div class="btn effect01">APA Style (6th Edition)</div>
                                </div>
                                <div class="col-sm-12 text-center p-1">
                                    <div class="btn effect01">Writing a good research paper</div>
                                </div>
                                <div class="col-sm-12 text-center p-1">
                                    <div class="btn effect01">Google Language Translator</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center">
                    <div class="card-c">
                        <div class="h-box">
                            <div class="h-box-text p-2">
                                Journal
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="col-md-12 p-2 ">

                                @foreach ($journals as $data)
                                    <div class="d-flex justify-content-center">
                                        <img class="" src="{{ url('assets/journals/img/' . $data->photo) }}"
                                            alt="Image" style="height: 350px">
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="card-c">
                        <div class="h-box">
                            <div class="h-box-text p-2">
                                Latest Article
                            </div>
                        </div>
                        <div class="">
                            @foreach ($latestArticle as $data)
                                <div class="col-lg-12 p-2 d-lg-none d-xl-block">
                                    <div class="swiper-slide">
                                        <div class='card'>
                                            <div class='title'>{{ Str::limit($data->name, 85) }}</div>

                                            <p class="card-icon">
                                                <i class="bi bi-person-circle text-info"></i>
                                                {{ Str::limit($data->aname, 30) }}
                                                <br>
                                                <i class="bi bi-tag-fill text-warning"></i>
                                                {{ $data->designation }}
                                            </p>
                                            {{-- <p class='description' style="font-size: 2rem;">
                                                <i class="bi bi-download text-primary"></i>
                                            </p> --}}

                                            <div class="m-3">
                                                <div class="d-flex gap-2">
                                                    <div>
                                                        <button class="btn btn-sm btn-success px-2 text-capitalize"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseExample-{{$data->id}}" aria-expanded="false"
                                                            aria-controls="collapseExample-{{$data->id}}">Abstract</button>
                                                    </div>
                                                    {{-- <div>
                                                        <button class="btn btn-sm btn-success px-2 text-capitalize">HTML Full Text</button>
                                                    </div> --}}
                                                    <div>
                                                        {{-- <button class="btn btn-sm btn-success px-2 text-capitalize">PDF</button> --}}
                                                        <a class="btn btn-sm btn-success px-2 text-capitalize" role="button" href="{{ URL('assets/articles/' . $data->file) }}"
                                                            download="{{ $data->fileOriginalName ? $data->fileOriginalName : $data->name  }}">
                                                            PDF 
                                                        </a>
                                                    </div>



                                                </div>
                                                <div class="collapse" id="collapseExample-{{$data->id}}">
                                                    <div class="card card-body">
                                                        {{$data->abstract}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>



            {{-- <div class="col-xl-4">

                <div class="row pt-3">
                    <section id="indexing" class="indexing">
                        <div class="section-title">
                            <h2>Indexing</h2>
                        </div>
                        <div class="container" data-aos="fade-left">
                            <div class="indexing-slider swiper">
                                <div class="swiper-wrapper align-items-center">

                                    @foreach ($indexings as $data)
                                        <div class="swiper-slide"><img src="{{ url('assets/img/indexing/' . $data->img) }}"
                                                class="img-fluid" alt=""></div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </section>
                </div>

                <div class="row">

                    <div class="col-sm-12 text-center p-1">
                        <div class="btn effect01">Publication Ethics and Malpractice Statement</div>
                    </div>
                    <div class="col-sm-12 text-center p-1">
                        <div class="btn effect01">Manuscript Preparation Guidelines</div>
                    </div>
                    <div class="col-sm-12 text-center p-1">
                        <div class="btn effect01">Research Guidelines</div>
                    </div>
                    <div class="col-sm-12 text-center p-1">
                        <div class="btn effect01">APA Style (6th Edition)</div>
                    </div>
                    <div class="col-sm-12 text-center p-1">
                        <div class="btn effect01">Writing a good research paper</div>
                    </div>
                    <div class="col-sm-12 text-center p-1">
                        <div class="btn effect01">Google Language Translator</div>
                    </div>
                </div>
            </div> --}}

        </div>


        <!-- ======= Journal Section ======= -->
        {{-- <section id="article" class="article testimonials-bg p-1">
            <div class="section-title">
                <h2>Journals</h2>
                <!-- <p>Latest Posts</p> -->
            </div>


            <div class="container-fluid" data-aos="fade-left">
                <div class="row">

                    <div class="article-slider swiper">
                        <div class="swiper-wrapper align-items-center text-center">

                            @foreach ($journals as $data)
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ url('assets/journals/img/' . $data->photo) }}">
                                </div>
                            @endforeach


                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>


        </section> --}}
        <!-- End Testimonials Section -->



        {{-- <div class="row p-2">
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
                <section id="article" class="article testimonials-bg">
                    <div class="section-title">
                        <h2>Latest Articles</h2>
                    </div>


                    <div class="container-fluid" data-aos="fade-up">
                        <div class="row">

                            @foreach ($latestArticle as $data)
                                <div class="col-lg-4 col-md-6 col-xl-3 p-2 d-lg-none d-xl-block">
                                    <div class="swiper-slide">
                                        <div class='card'>
                                            <div class='title'>{{ Str::limit($data->name, 65) }}</div>

                                            <p class="card-icon">
                                                <i class="bi bi-person-circle text-info"></i>
                                                {{ Str::limit($data->aname, 30) }}
                                                <br>
                                                <i class="bi bi-tag-fill text-warning"></i>
                                                {{ $data->designation }}
                                            </p>
                                            <p class='description' style="font-size: 2rem;">
                                                <i class="bi bi-download text-primary"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            @foreach ($latestArticleThree as $data)
                                <div class="col-lg-4 col-md-6 col-xl-3 p-2 d-none d-lg-block d-xl-none">
                                    <div class="swiper-slide">
                                        <div class='card'>
                                            <div class='title'>{{ Str::limit($data->name, 65) }}</div>

                                            <p class="card-icon">
                                                <i class="bi bi-person-circle text-info"></i>
                                                {{ Str::limit($data->aname, 30) }}
                                                <br>
                                                <i class="bi bi-tag-fill text-warning"></i>
                                                {{ $data->designation }}
                                            </p>
                                            <p class='description' style="font-size: 2rem;">
                                                <i class="bi bi-download text-primary"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach



                            <div class="text-center p-2"><strong><a href="#"> SHOW MORE</a></strong></div>
                        </div>

                    </div>


                </section><!-- End Testimonials Section -->
            </div>
        </div> --}}

    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        function countFun(id) {
            console.log(id);
            window.location.href = "{{ URL('countDownload') }}/" + id;
        }
    </script>


@endsection
