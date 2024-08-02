@extends('layout')

@section('title', 'Journals')

<!-- this is journal page -->

@section('content')

    <style>
        thead {
            background-color: crimson;
            color: #fff
        }
    </style>

    <div class="container ">
        <div class="row journal-list p-3">
            <div class="col-md-9">
                <?php
                
                // dd($getManufullDetails)
                ?>
                <div>
                    <h4>ManuScript Details</h4>
                </div>
                <table class="table">
                    <thead>

                        <tr>
                            <td scope="row">Manuscript No</td>
                            <td>{{ $getManufullDetails->muuid }}</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">Manuscript Title</td>
                            <td>{{ $getManufullDetails->journal }}</td>
                            {{-- <td></td> --}}
                        </tr>
                        <tr>
                            <td scope="row">Authors Name</td>
                            <td>{{ $getManufullDetails->author }}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table">
                    <thead>
                        <tr>
                            <td scope="row">Date </td>
                            <td>Status</td>
                            {{-- <td>Corresponsing Author</td>
                        <td>Journal Name</td> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($manudata as $item)
                            <tr>
                                <td scope="row">{{ $item->date }}</td>
                                @if ($item->status === 0)
                                    <td scope="row">Accepted</td>
                                @elseif ($item->status === 1)
                                    <td scope="row">Draft</td>
                                @elseif ($item->status === 2)
                                    <td scope="row">Published</td>
                                @elseif ($item->status === 3)
                                    <td scope="row">Rejected</td>
                                @endif
                            </tr>
                        @endforeach
                        {{-- <td>
                        <td class="text-primary">{{$getManufullDetails->author}}</td>
                    </td>
                    <td>
                        <td class="text-primary">{{$getManufullDetails->file}}</td>
                    </td> --}}
                    </tbody>
                </table>
            </div>

            <div class="col-md-3 d-flex align-items-center">
                <div class="row ">
                    <div>
                        <div>
                            Journal: <b> {{ $getManufullDetails->journal }}</b>
                        </div>
                        <div>
                            Article: <a href="">{{ $getManufullDetails->file }}</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <br>
    <br>

@endsection
