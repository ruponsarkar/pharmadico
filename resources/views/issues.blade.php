@extends('layout')
@section('title', 'Journal Details')

<!-- this is journal page -->

@section('content')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <div class="container p-2">
        <div class="row">

            <!-- ======= Specials Section ======= -->
            <section id="specials" class="specials">
                <div class="container" data-aos="fade-up">

                    <div class="specials-title">
                        <p>{{ $Journal_details->j_name }}</p>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-3">
                            <ul class="nav nav-tabs flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="/journal-details/1">Aims And Scope</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/journal-details/1">Editorial board</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="/journal-details/1">Archives</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/journal-details/1">Indexing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/journal-details/1">Impact Factor</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-9 mt-4 mt-lg-0">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="tab-4">
                                    <div class="row border border-dark p-3">
                                        <div class="col-lg-12 details order-2 order-lg-1">
                                            <h3>All Issues</h3>
                                            <p>
                                                @foreach ($article as $data)
                                                <div class="col-lg-12 p-2 d-lg-none d-xl-block">
                                                    <div class="swiper-slide">
                                                        <div class='card'>
                                                            <div class="d-flex justify-content-between">
                                                                <div class='title'>{{ Str::limit($data->name, 70) }}</div>
                                                                <div class='small p-2'><i class="bi bi-download text-info"></i> {{ $data->count}}</div>
                                                            </div>
                    
                                                            <p class="card-icon">
                                                                <i class="bi bi-person-circle text-info"></i>
                                                                {{ Str::limit($data->aname, 30) }}
                                                                <br>
                                                                <i class="bi bi-tag-fill text-warning"></i> {{ $data->designation }}
                                                            </p>
                                                            {{--
                                                        <p class='description' style="font-size: 2rem;">
                                                            <i class="bi bi-download text-primary"></i>
                                                        </p> --}}
                    
                                                            <div class="m-3">
                                                                <div class="d-flex gap-2">
                                                                    <div>
                                                                        <button class="btn btn-sm btn-success px-2 text-capitalize"
                                                                            type="button" data-bs-toggle="collapse"
                                                                            data-bs-target="#collapseExample-{{ $data->id }}"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapseExample-{{ $data->id }}">Abstract</button>
                                                                    </div>
                    
                                                                    <div>
                                                                        <a role="button" href="/article/{{ $data->slug }}"
                                                                            class="btn btn-sm btn-success px-2 text-capitalize">HTML
                                                                            Text</a>
                                                                    </div>
                                                                    <div>
                                                                        {{-- <button class="btn btn-sm btn-success px-2 text-capitalize">PDF</button> --}}
                                                                        <a class="btn btn-sm btn-success px-2 text-capitalize"
                                                                            role="button"
                                                                            onclick="onDowload({{ $data->id }})"
                                                                            href="{{ URL('/assets/articles/' . $data->file) }}"
                                                                            download="{{ $data->fileOriginalName ? $data->fileOriginalName : $data->name }}">
                                                                            PDF
                                                                        </a>
                                                                    </div>
                    
                    
                    
                                                                </div>
                                                                <div class="collapse" id="collapseExample-{{ $data->id }}">
                                                                    <div class="card card-body">
                                                                        {{ $data->abstract }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <br>
                                                @endforeach




                                                <!--<div class='card p-3'>-->
                                                <!--    <p>-->
                                                <!--        Conceptualization of Anger in Modern Standard Arabic and English: A-->
                                                <!--        Comparative Study Conceptualization of Anger in Modern Standard Arabic-->
                                                <!--        and English: A Comparative Study s-->
                                                <!--        <br>-->
                                                <!--        <br>-->
                                                <!--        <i class="bi bi-person-circle"></i>-->
                                                <!--        Derki Noureddine-->
                                                <!--        <br>-->
                                                <!--        <i class="bi bi-tag-fill"></i> Derki Noureddine-->
                                                <!--        <br>-->
                                                <!--        <i class="bi bi-book"></i> 1-8-->
                                                <!--        <br>-->
                                                <!--        <i class="bi bi-tag-fill"></i>-->
                                                <!--        <br>-->
                                                <!--        <br>-->
                                                <!--        <a href="#" target="_blank" download="Embar">-->
                                                <!--            <i class="bi bi-download" style="font-size: 2rem;"></i>-->
                                                <!--        </a>-->

                                                <!--        <button class="btn btn-sm btn-outline-warning float-end">Total-->
                                                <!--            Downloads: {{ $data->count }}</button>-->


                                                <!--    </p>-->

                                                <!--</div>-->

                                            </p>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>

                    <br><br>

                </div>
            </section><!-- End Specials Section -->
        </div>
    </div>
    <br>
    <br>


    <script>
        function countFun(id) {
            console.log(id);
            window.location.href = "{{ URL('countDownload') }}/" + id;
        }
    </script>

<script>
    function onDowload(id) {
        console.log("id : ", id);

        axios.get(`/countDownload/${id}`)
            .then(response => {
                console.log("response :", response);
            })
            .catch(error => {
                console.error('Error fetching search results:', error);
            });
    };
</script>

@endsection
