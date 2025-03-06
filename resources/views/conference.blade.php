@extends('layout')

@section('title', 'Conference Proceedings')



@section('content')

<?php 
    // dd($confrence)
?>
<div class="container pt-4">
    <div class="conference">
        <div class="card">
            <div class="card-body">
                <h1 class="title">Conference Proceedings</h1>
    
                @foreach ( $confrence as $item )
                
                <div class="card p-2">
                <a href="{{ asset('assets/conference/' . $item->file) }}" target="_blank">
                        <!-- 1st International Conference on ” New Horizons in Pharmaceutical Sciences and Biomedical Sciences” NHPBMS-2013, Dehradun (UK), Indi -->
                        {{ $loop->index + 1 }}  {{$item->title}}
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection