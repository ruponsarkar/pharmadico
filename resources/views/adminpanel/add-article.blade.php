<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Journals</title>
    @include('adminpanel.admin_partial.dash-link')

    <style>
        .list-v {
            width: 90%;
            height: auto;
            border: 1px solid;
            margin: 10px;
            display: flex;
            align-items: center;
            background-color: burlywood;
            color: black;
            padding: 5px;
            border-radius: 3px;

        }

        .list-link {
            width: auto;
            height: 30px;
            border: 1px solid;
            margin: 10px;
            display: flex;
            align-items: center;
            background-color: red;
            color: black;
            padding: 5px;
            border-radius: 3px;
            color: white;
        }

        .list-link:hover {
            background-color: blue;

        }

        .volume-list {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-content: center;
            flex-wrap: wrap;
        }

        .whole-list {
            width: 100%;
            margin: 0px;
            display: flex;
        }
    </style>


</head>

<body>


    @include('adminpanel.admin_partial.dash-sidebar')



    <div class="container-form">
        <h1>Add Article</h1>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="error_msg">
            <ul>
                @foreach ($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>


        <form action="{{ URL('addArticleData/' . $id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="one">
                <label for="name">Article Name</label>
                <input type="text" name="name" id="">
            </div>


            <div class="one">
                <label for="name">Corresponding Author</label>
                <input type="text" name="aname" id="">
            </div>


            <div class="one">
                <label for="name">Author Designation</label>
                <input type="text" name="designation" id="">
            </div>


            <div class="one">
                <label for="name">DOI</label>
                <input type="text" name="doi" id="doi">
            </div>

            <div class="one">
                <label for="name">Page No</label>
                <input type="text" name="page" id="page">
            </div>

            <div class="one">
                <label for="name">Abstract</label>
                <textarea name="abstract" id="" cols="30" rows="10"></textarea>
                {{-- <input type="text" name="designation" id=""> --}}
            </div>

            <div class="one">
                <label for="name">File</label>
                <input type="file" name="file" id="">
            </div>



            <div class="one">

                <input type="submit" name="submit-article" value="Save" id="">
            </div>
        </form>

    </div>



    <div class="volume-list">

        @foreach ($article as $data)
            <div class="whole-list">

                <div class="list-v">
                    {{ $data->name }}
                </div>

                <!-- <a href="{{ URL('update-article/' . $data->id) }}">-->
                <!--<div class="list-link">-->
                <!--Edit (Not working)-->
                <!--</div>-->
                <!--</a>-->

                <a href="{{ URL('delete-article/' . $data->id) }}">
                    <div class="list-link">
                        Delete
                    </div>
                </a>



            </div>
            <br>
        @endforeach


    </div>





    @include('adminpanel.admin_partial.dash-bottom')



</body>

</html>
