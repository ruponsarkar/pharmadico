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
                    <p>Research Journal of Education, linguistic and Islamic Culture</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <!--<li class="nav-item">-->
                            <!--  <a class="nav-link" data-bs-toggle="tab" href="#tab-1">Details</a>-->
                            <!--</li>-->
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-2">Aims And Scope</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Editorial board</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Archives</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Indexing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Impact Factor</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane" id="tab-1">
                                <div class="row border border-dark p-3">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <h3>Details</h3>
                                        <p class="fst-italic">
                                        <table style="width:75%">
                                            <tbody>
                                                <tr>
                                                    <th>Journal Name:</th>
                                                    <td>
                                                        j_name
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>Abbr. Title:</th>
                                                    <td>
                                                        abbr_title
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>ISSN(Online):</th>
                                                    <td>
                                                        issn
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>Frequency:</th>
                                                    <td>
                                                        frequency
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>Language: </th>
                                                    <td>
                                                        language
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>Chief Editor:</th>
                                                    <td>
                                                        chief_editor
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>Publisher:</th>
                                                    <td>
                                                        publisher
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>Country of Origin: </th>
                                                    <td>
                                                        country_of_origin
                                                    </td>
                                                </tr>

                                                <tr>
                                                </tr>
                                            </tbody>
                                        </table>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane active show" id="tab-2">
                                <div class="row border border-dark p-3">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <h3>Aim And Scope</h3>
                                        <p>
                                            Research Journal of Education , linguistic and Islamic Culture (RJELIC) is open access, Bimonthly, peer reviewed journal. The Journal publishes in all major disciplines and sub disciplines under- History of Islamic education, Educational Philosophy, Educational Psychology, Educational Sociology, Method of Teaching Anthropology, Archaeology, Communication, Criminology, Education, Aesthetics, Language, Epistemology, Ethics, Logic, Philosophy of Language, Linguistics, International Relations, Political Science, Geography, History, Law, Psychology, Health, Economy, Trade, Arts, History, Literature, civilization Marriage, Islamic Education of secondary and tertiary education, Media development and teaching method of Islamic education, Islamic character education, Counseling of Islamic education, Philosophy of Islamic education, Management of Islamic education, Madrasah (Islamic learning centre), Pesantren (Islamic boarding school), Islamic school and Islamic higher education, Contemporary Islamic education, Multiculturalism Islamic education, Interdiciplinary research of Islamic education, and etc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane border border-dark text-center p-3" id="tab-3">
                                <div class="row">
                                    <div class="col-lg-12 details order-2 text-center order-lg-1 p-2">
                                        <h3>EDITOR-IN-CHIEF</h3>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 offset-md-4">
                                        <div class="card">
                                            <div class="editorial pt-3">
                                                <img src="assets/img/journals/1.jpg" class="img-fluid rounded-circle border border-info border-3 editorial-img">
                                            </div>

                                            <div class="card-body text-center editorial-style">
                                                <div class="card-title small">Dr. Murad Hameed Al-Abullah</div>
                                                <p class="card-text fst-italic small">Associate Prof. in Contrastive Studies in Dep. of Linguistics & Literary Studies, Basrah & Arab Gulf Studies, University of Basrah -Iraq </p>
                                                <p class="card-text fst-italic small"></p>

                                                <p class="card-text small"> <b>Profile link: <a class="card-text small" href="#" target="_blank">profile</a></b> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <br><br>
                                <div class="row">
                                    <div class="col-lg-12 details order-2 text-center order-lg-1 p-2">
                                        <h3>ASSOCIATE EDITORIAL BOARD</h3>
                                    </div>
                                </div>

                                <div class="row p-3">

                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="editorial pt-3">
                                                <img src="assets/img/journals/2.jpg" class="img-fluid rounded-circle border border-info border-3 editorial-img">
                                            </div>

                                            <div class="card-body text-center editorial-style">
                                                <div class="card-title small">Dr. Adil Hashim</div>
                                                <p class="card-text fst-italic small">Professor in Ancient History – Ancient History of Iraq, Dep. of History, College of Arts, Basra University-Iraq </p>
                                                <p class="card-text fst-italic small"></p>
                                                <p class="card-text small"> <b>Profile link:
                                                        <a class="card-text small" href="#" target="_blank">profile</a> </b> </p>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>



                            <div class="tab-pane" id="tab-4">
                                <div class="row border border-dark p-3">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <h3>Archives</h3>
                                        <p>


                                            <button type="button" class="btn btn-outline-success">
                                                <ul class="nav ">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Archive 1</a>
                                                    </li>
                                                </ul>
                                            </button>

                                            <button type="button" class="btn btn-outline-success">
                                                <ul class="nav ">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Archive 2</a>
                                                    </li>
                                                </ul>
                                            </button>

                                        </p>
                                    </div>
                                </div>
                            </div>



                            <div class="tab-pane" id="tab-issue">
                                <div class="row border border-dark p-3">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <h3>Issues</h3>
                                        <p>


                                            <button type="button" class="btn btn-outline-success">
                                                <ul class="nav ">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">name</a>
                                                    </li>
                                                </ul>
                                            </button>

                                        </p>
                                    </div>
                                </div>
                            </div>




                            <div class="tab-pane" id="tab-5">
                                <div class="row border border-dark p-3">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <h3>Indexing</h3>
                                        <p>
                                        <div class="gallery">


                                            <a target="_blank" href="#">
                                                <img style="border: 1px solid #555;" src="assets/img/indexing/1.jpeg" alt="indexing" width="250" height=auto>
                                            </a> &nbsp; &nbsp; &nbsp;
                                            <a target="_blank" href="#">
                                                <img style="border: 1px solid #555;" src="assets/img/indexing/2.jpeg" alt="indexing" width="250" height=auto>
                                            </a> &nbsp; &nbsp; &nbsp;



                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>




                            <div class="tab-pane" id="tab-6">
                                <div class="row border border-dark p-3">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <h3>Impact Factor</h3>
                                        <p>

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

@endsection