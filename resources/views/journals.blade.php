@extends('layout')

@section('title', 'Journals')

<!-- this is journal page -->

@section('content')
<div class="container">
    <div class="row journal-list">
        @foreach($allJournals as $data)
        <div class="col-lg-6  d-flex justify-content-center">
            <div class="card float-right">
                <div class="row">
                    <div class="col-4">
                        <img class="d-block w-100" src="{{url('assets/journals/img/'.$data->photo)}}" alt="">
                    </div>
                    <div class="col-8">
                        <div class="card-block">
                            <div class="card-title journal-card-name">
                                {{$data->j_name}}
                            </div>
                            <div class="card-text">
                                <b>Abbr. Title:</b>{{$data->abbr_title}}
                                <br>
                                <b>ISSN(Online):</b> {{$data->issn}}
                                <br>
                                <b>Publisher:</b> {{$data->publisher}}
                                <br>
                                <b>Frequency:</b> {{$data->frequency}}
                                <br>
                                <b>Country of origin:</b> {{$data->country_of_origin}}
                                <br>
                                <b>Chief Editor:</b> {{$data->chief_editor}}
                                <br>
                                <b>Language:</b> {{$data->language}}
                            </div>
                            <br>
                            <div class="row justify-content-end">
                                <a href="{{ url('/journal-details/'.$data->j_id) }}" class="col-2 btn btn-primary effect01">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<br>
<br>

@endsection