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
                                <span>Abbr. Title:</span> <strong> {{$data->abbr_title}}</strong>
                                <br>
                                <span>ISSN(Online):</span> <strong>  {{$data->issn}} </strong> 
                                <br>
                                <span>Publisher:</span>  <strong>  {{$data->publisher}} </strong> 
                                <br>
                                <span>Frequency:</span>  <strong>  {{$data->frequency}}  </strong> 
                                <br>
                                <span>Country of origin:</span>  <strong> {{$data->country_of_origin}} </strong> 
                                <br>
                                <span>Chief Editor:</span>  <strong>  {{$data->chief_editor}} </strong> 
                                <br>
                                <span>Language:</span>  <strong> {{$data->language}} </strong> 
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