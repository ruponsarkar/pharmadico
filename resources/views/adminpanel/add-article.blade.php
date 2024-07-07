@extends('adminpanel/layout')
@section('title', 'Dashboard')
@section('content')


<div class="container-form card p-1 p-md-3 p-lg-4">
    <h1 class="p-3">Add Article</h1>
    
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

    <div class="col-md-10 col-md-8 col-11 m-auto">
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
    
            <div class="one form-group d-block "  >
                <label class="form-label"  for="name">File</label>
                <input type="file" name="file" id="" class="form-control">
            </div>
            <div class="one mt-lg-3 text-center">
                <input class="btn btn-block btn-primary w-50 m-auto" type="submit" name="submit-article" value="Save" id="">
            </div>
        </form>
    </div>

</div>



<div class="volume-list col-md-10 col-md-8 col-11 m-auto">

    @foreach ($article as $data)
    <div class="whole-list card p-1 p-md-3 p-lg-4">
        <div class="list-v">
            {{ $data->name }}
        </div>
        <!-- <a href="{{ URL('update-article/' . $data->id) }}">-->
        <!--<div class="list-link">-->
        <!--Edit (Not working)-->
        <!--</div>-->
        <!--</a>-->
        <a href="{{ URL('delete-article/' . $data->id) }}" class="btn btn-danger w-25 ms-auto">
            <div class="list-link">
                Delete
            </div>
        </a>
    </div>
    <br>
    @endforeach
</div>





@endsection