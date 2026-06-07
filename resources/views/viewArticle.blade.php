@extends('layout')
@php
    $articleTitle = trim($article->name ?: 'View Article');
    $journalTitle = trim($article->j_name ?: 'International Journal of Pharmaceutical Science and Medicine');
    $metaTitle = $articleTitle . ' | ' . $journalTitle;
    $metaDescription = \Illuminate\Support\Str::limit(
        trim(strip_tags($article->abstract ?: 'Read this peer-reviewed article published by the International Journal of Pharmaceutical Science and Medicine.')),
        160
    );
    $metaKeywords = trim($article->keywords ?: 'pharmaceutical science, medicine, journal article, research');
    $metaImage = !empty($article->photo) ? url('assets/journals/img/' . $article->photo) : url('assets/img/logo3.png');
    $canonicalUrl = url('article/' . $article->slug);
    $pdfUrl = !empty($article->file) ? url('assets/articles/' . $article->file) : null;
    $doi = trim((string) ($article->doi ?? ''));
    $doiUrl = $doi !== '' ? (\Illuminate\Support\Str::startsWith($doi, ['http://', 'https://']) ? $doi : 'https://doi.org/' . ltrim($doi, '/')) : null;
    $citationAuthors = collect(preg_split('/\s*,\s*/', (string) ($article->aname ?? ''), -1, PREG_SPLIT_NO_EMPTY));
    $publishedTimestamp = !empty($article->published_date) ? strtotime($article->published_date) : false;
    $publishedDateIso = $publishedTimestamp ? date('Y-m-d', $publishedTimestamp) : null;
    $receivedTimestamp = !empty($article->received) ? strtotime($article->received) : false;
    $receivedDateIso = $receivedTimestamp ? date('Y-m-d', $receivedTimestamp) : null;
    $acceptedTimestamp = !empty($article->accepted) ? strtotime($article->accepted) : false;
    $acceptedDateIso = $acceptedTimestamp ? date('Y-m-d', $acceptedTimestamp) : null;
@endphp
@section('title', $articleTitle)
@section('meta_title', $metaTitle)
@section('meta_description', $metaDescription)
@section('meta_keywords', $metaKeywords)
@section('meta_image', $metaImage)
@section('canonical', $canonicalUrl)
@section('meta_type', 'article')
@section('citation_meta')
    <meta name="citation_title" content="{{ $articleTitle }}">
    <meta name="citation_journal_title" content="{{ $journalTitle }}">
    <meta name="citation_public_url" content="{{ $canonicalUrl }}">
    <meta name="citation_abstract_html_url" content="{{ $canonicalUrl }}">
    @if ($publishedDateIso)
        <meta name="citation_publication_date" content="{{ $publishedDateIso }}">
        <meta name="citation_online_date" content="{{ $publishedDateIso }}">
    @endif
    @if (!empty($article->issn))
        <meta name="citation_issn" content="{{ $article->issn }}">
    @endif
    @if (!empty($article->publisher))
        <meta name="citation_publisher" content="{{ $article->publisher }}">
    @endif
    @if (!empty($article->keywords))
        <meta name="citation_keywords" content="{{ $article->keywords }}">
    @endif
    @if (!empty($article->language))
        <meta name="citation_language" content="{{ $article->language }}">
    @endif
    @if (!empty($article->page))
        <meta name="citation_firstpage" content="{{ preg_replace('/[^0-9].*/', '', $article->page) }}">
    @endif
    @if ($doi !== '')
        <meta name="citation_doi" content="{{ $doi }}">
    @endif
    @if ($pdfUrl)
        <meta name="citation_pdf_url" content="{{ $pdfUrl }}">
    @endif
    @foreach ($citationAuthors as $citationAuthor)
        <meta name="citation_author" content="{{ $citationAuthor }}">
    @endforeach
@endsection
@section('structured_data')
    <script type="application/ld+json">
        {!! json_encode(
            array_filter([
                '@context' => 'https://schema.org',
                '@type' => 'ScholarlyArticle',
                'headline' => $articleTitle,
                'name' => $articleTitle,
                'description' => $metaDescription,
                'url' => $canonicalUrl,
                'sameAs' => $doiUrl,
                'datePublished' => $publishedDateIso,
                'dateReceived' => $receivedDateIso,
                'dateAccepted' => $acceptedDateIso,
                'inLanguage' => $article->language ?? null,
                'keywords' => !empty($article->keywords) ? array_values(array_filter(array_map('trim', explode(',', $article->keywords)))) : null,
                'identifier' => $doi !== '' ? $doi : null,
                'image' => $metaImage,
                'isAccessibleForFree' => true,
                'license' => $article->licence ?? null,
                'author' => $citationAuthors->map(fn ($author) => ['@type' => 'Person', 'name' => $author])->values()->all(),
                'publisher' => !empty($article->publisher)
                    ? [
                        '@type' => 'Organization',
                        'name' => $article->publisher,
                    ]
                    : null,
                'isPartOf' => [
                    '@type' => 'Periodical',
                    'name' => $journalTitle,
                    'issn' => $article->issn ?? null,
                ],
                'mainEntityOfPage' => [
                    '@type' => 'WebPage',
                    '@id' => $canonicalUrl,
                ],
            ], fn ($value) => !is_null($value) && $value !== '' && $value !== []),
            JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
        ) !!}
    </script>
@endsection
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

                    @if ($article->sr_no)
                    <div class="pb-2">
                        <strong>Sr No: </strong>
                        <span>{{ $article->sr_no }}</span>
                    </div>
                    @endif
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
