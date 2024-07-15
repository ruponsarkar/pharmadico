@extends('adminpanel/layout')
@section('title', 'Dashboard')
@section('content')


<div class="container-form card p-1 p-md-3 p-lg-4">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="p-3">Add Article</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add Article
        </button>
    </div>
    <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content ">
                <div class="modal-body">
                    <form action="{{ URL('addArticleData/' . $id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="one form-group">
                            <label for="name" class="form-label">Article Name</label>
                            <input type="text" name="name" id="" class="form-control">
                        </div>


                        <div class="one">
                            <label class="form-label" for="name">Corresponding Author</label>
                            <input type="text" name="aname" id="" class="form-control">
                        </div>


                        <div class="one">
                            <label class="form-label" for="name">Author Designation</label>
                            <input type="text" name="designation" id="" class="form-control">
                        </div>


                        <div class="one">
                            <label class="form-label" for="name">DOI</label>
                            <input type="text" name="doi" id="doi" class="form-control">
                        </div>

                        <div class="one">
                            <label class="form-label" for="name">Page No</label>
                            <input type="text" name="page" id="page" class="form-control">
                        </div>

                        <div class="one">
                            <label class="form-label" for="name">Abstract</label>
                            <textarea name="abstract" id="" cols="30" rows="10" class="form-control"></textarea>
                            {{-- <input type="text" name="designation" id=""> --}}
                        </div>

                        <div class="one form-group d-block ">
                            <label class="form-label" for="name">File</label>
                            <input type="file" name="file" id="" class="form-control">
                        </div>
                        <div class="one mt-lg-3 text-center">
                            <input class="btn btn-block btn-primary w-50 m-auto" type="submit" name="submit-article" value="Save" id="">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif -->

    <!-- <div class="error_msg">
        <ul>
            @foreach ($errors->all() as $e)
            <li class="alert alert-success">{{ $e }}</li>
            @endforeach
        </ul>
    </div> -->




    <div class="volume-list col-md-12 col-md-8 col-11 m-auto">

        <table class="table">
            <thead>
                <tr>
                    <th>sl no</th>
                    <th>Name</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // dd($article)
                ?>
                @foreach ($article as $data)
                <tr>
                    <td scope="row"> {{ $loop->index + 1 }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        <a href="{{ URL('update-article/' . $data->id) }}" class="btn btn- btn-success w-100 ms-auto">Edit</a>
                        <a href="{{ URL('delete-article/' . $data->id) }}" class="btn btn- btn-danger w-100 ms-auto">
                                Delete
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>






@endsection