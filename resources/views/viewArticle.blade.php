@extends('layout')
@section('title', 'View Article')
@section('content')
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
                        <span>Author: </span>
                        <strong>{{ $article->aname }}</strong>
                    </div>
                    <div class="pb-2">
                        <span>Published Date: </span>
                        <strong>{{ $article->published_date }}</strong>
                    </div>
                    <div class="pb-2">
                        <span>GoogleScholar: </span>
                        <strong><a href="{{ $article->googleScholar }}">Click here
                            </a>
                        </strong>
                    </div>

                    <div class="pb-2">
                        <span>Keywords: </span>
                        <i>{{ $article->keywords }}
                        </i>
                    </div>




                    <div class="pb-2">
                        <strong>Abstract: </strong>
                        <div>
                            {{ $article->abstract }}
                        </div>
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

                            <a class="btn btn-sm btn-success px-2 text-capitalize" role="button"
                            href="{{ URL('assets/articles/' . $article->file) }}"
                            download="{{ $article->fileOriginalName ? $article->fileOriginalName : $article->name }}">
                            Download Full Article
                        </a>
                    </div>

                        <hr />

                        <div class="m-2">
                            <div>
                                Journal: <strong> {{ $article->j_name }} </strong>
                            </div>
                            <div>
                                ISSN(Online): <i> {{ $article->issn }} </i>
                            </div>
                            <div>
                                Publisher: <strong> {{ $article->publisher }} </strong>
                            </div>
                            <div>
                                Frequency:
                                <strong> {{ $article->frequency }} </strong>
                            </div>
                            <div>
                                <!-- Chief Editor: <strong>  {{ $article->chief_editor }}  </strong> -->
                            </div>
                            <div>
                                Language:
                                <strong> {{ $article->language }} </strong>
                            </div>
                        </div>

                        <hr />

                        <div class="text-center m-2">
                            <img src="{{ url('assets/journals/img/' . $article->photo) }}"
                                class="col-md-7" alt="{{ $article->name }}" style="width: 80%;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

@endsection
