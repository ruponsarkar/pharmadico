@extends('layout')
@section('title', 'View Article')
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <section>
        <div class="container">
            <div class="row mt-2">
                <div class="col-md-8 border p-2">
                    <div class="text-center">
                        <h4>
                            {{ $article->name }}
                        </h4>
                    </div>

                    <hr />

                    <div class="pb-2">
                        <strong>Sr No: </strong>
                        <span>{{ $article->sr_no }}</span>
                    </div>
                    @if ($article->page)
                        <div class="pb-2">
                            <strong>Page No: </strong>
                            <span>{{ $article->page }}</span>
                        </div>
                    @endif


                    @if ($article->language)
                        <div class="pb-2">
                            <strong>Language: </strong>
                            <span>{{ $article->language }}</span>
                        </div>
                    @endif
                    @if ($article->licence)
                        <div class="pb-2">
                            <strong>Licence: </strong>
                            <span>{{ $article->licence }}</span>
                        </div>
                    @endif
                    @if ($article->aname)
                        <div class="pb-2">
                            <strong>Authors: </strong>
                            <span>{{ $article->aname }}</span>
                        </div>
                    @endif
                    @if ($article->received)
                        <div class="pb-2">
                            <strong>Received: </strong>
                            <span>{{ $article->received }}</span>
                        </div>
                    @endif
                    @if ($article->revised)
                        <div class="pb-2">
                            <strong>Revised: </strong>
                            <span>{{ $article->revised }}</span>
                        </div>
                    @endif
                    @if ($article->accepted)
                        <div class="pb-2">
                            <strong>Accepted: </strong>
                            <span>{{ $article->accepted }}</span>
                        </div>
                    @endif
                    @if ($article->doi)
                        <div class="pb-2">
                            <strong>DOI: </strong>
                            <span>{{ $article->doi }}</span>
                        </div>
                    @endif
                    @if ($article->published_date)
                        <div class="pb-2">
                            <strong>Published Date: </strong>
                            <span>{{ $article->published_date }}</span>
                        </div>
                    @endif
                    @if ($article->googleScholar)
                        <div class="pb-2">
                            <strong>GoogleScholar: </strong>
                            <span><a href="{{ $article->googleScholar }}">Click here
                                </a>
                            </span>
                        </div>
                    @endif







                    <div class="pb-2">
                        <strong>Abstract: </strong>
                        <div>
                            {{ $article->abstract }}
                        </div>
                    </div>

                    <div class="pb-2">
                        <strong>Keywords: </strong>
                        <i>{{ $article->keywords }}
                        </i>
                    </div>

                    <!-- <div class="text-center py-3 fixed-bottom">
                                    <button class="btn btn-success">
                                        <i class="fa fa-download"></i> &nbsp; Download
                                    </button>
                                </div> -->
                </div>
                <div class="col-md-4 border">
                    <div class="row">
                        {{-- <div class="text-center py-3">
                            <a href="/download/{{$article->airticle_id}}" class="btn btn-success">
                                <i class="fa fa-download"></i> &nbsp; Download
                            </a>
                            <button class="btn btn-secondary">
                                <i class="fa fa-eye"></i> &nbsp; {{$article->count}}
                            </button>
                        </div> --}}

                        <div class="py-3">

                            <a class="btn btn-sm btn-success px-2 text-capitalize"
                                onclick="onDowload({{ $article->airticle_id }})" role="button"
                                href="{{ URL('assets/articles/' . $article->file) }}"
                                download="{{ $article->fileOriginalName ? $article->fileOriginalName : $article->name }}">
                                Download Full Article
                            </a>
                        </div>

                        <hr />

                        <div class="m-2">
                            <div>
                               <strong> Journal:</strong> <span> {{ $article->j_name }} </span>
                            </div>
                            <div>
                                <strong> ISSN(Online): </strong> <i> {{ $article->issn }} </i>
                            </div>
                            <div>
                                <strong> Publisher: </strong> <span> {{ $article->publisher }} </span>
                            </div>
                            <div>
                                <strong> Frequency: </strong>
                                <span> {{ $article->frequency }} </span>
                            </div>
                            <div>
                                <!-- Chief Editor: <span>  {{ $article->chief_editor }}  </span> -->
                            </div>
                            <div>
                                <strong> Language:</strong>
                                <span> {{ $article->language }} </span>
                            </div>
                        </div>

                        <hr />

                        <div class="text-center m-2">
                            <img src="{{ url('assets/journals/img/' . $article->photo) }}" class="col-md-7"
                                alt="{{ $article->name }}" style="width: 80%;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>









    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

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
