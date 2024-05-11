@extends('layout')

@section('title', 'Journal Details')

<!-- this is journal page -->

@section('content')

<div class="container p-2">
    <div class="row">

        <!-- ======= Specials Section ======= -->
        <section id="specials" class="specials">
            <div class="container" data-aos="fade-up">

                <div class="specials-title">
                    <p>{{$Journal_details->j_name}}</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Aims And Scope</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Editorial board</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Archives</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Indexing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Impact Factor</a>
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
                                            @foreach($article as $data)
                                        <div class='card p-3'>
                                            <p>
                                                {{$data->name}}
                                                <br>
                                                <br>
                                                <i class="bi bi-person-circle text-info"></i>
                                                {{$data->aname}}
                                                <br>
                                                <i class="bi bi-tag-fill text-warning"></i> {{$data->designation}}
                                                <br>
                                                <i class="bi bi-book text-primary"></i> {{$data->page}}
                                                <br>
                                                <i class="bi bi-tag-fill "></i> {{$data->doi}}
                                                <br>
                                                <br>
                                                <a href="{{URL('assets/articles/'.$data->file)}}"
                                                    onclick="countFun({{$data->id}})" target="_blank"
                                                    download="Publishers">
                                                    <i class="bi bi-download" style="font-size: 2rem;"></i>
                                                </a>

                                                <button class="btn btn-sm btn-outline-warning float-end">Total
                                                    Downloads: {{$data->count}}</button>


                                            </p>

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
                                        <!--            Downloads: {{$data->count}}</button>-->


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
        window.location.href = "{{ URL('countDownload')}}/" + id;
    }
</script>

@endsection