
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Issues</title>
    @include('adminpanel.admin_partial.dash-link')


    <style>
    .list-v{
    width: 200px;
    height: 30px;
    border: 1px solid;
    margin: 10px;
    display: flex;
    align-items: center;
    background-color: burlywood;
    color: black;
    padding: 5px;
    border-radius: 3px;
    
    }

    .list-v:hover{
        background-color: red;
    }

    .volume-list{
        display: flex;
    justify-content: center;
    flex-direction: column;
    align-content: center;
    flex-wrap: wrap;
    }
    </style>


</head>
<body>
@include('adminpanel.admin_partial.dash-sidebar')


<div class="container-form">
    <h1>Add ISSUES</h1>

<form action="{{ URL('/add-issues/'.$id ) }}" method="post" enctype="multipart/form-data">
  @csrf

<div class="one">
<label for="language">ISSUES</label>
<select name="name" id="">
<option value="Issue 1">Issue 1</option>
<option value="Issue 2">Issue 2</option>
<option value="Issue 3">Issue 3</option>
<option value="Issue 4">Issue 4</option>
<option value="Issue 5">Issue 5</option>
<option value="Issue 6">Issue 6</option>
<option value="Issue 7">Issue 7</option>
<option value="Issue 8">Issue 8</option>
<option value="Issue 9">Issue 9</option>
<option value="Issue 10">Issue 10</option>
<option value="Issue 11">Issue 11</option>
<option value="Issue 12">Issue 12</option>


</select>
</div>

<div class="one">

<input type="submit" name="submit-issues" value="Save" id="">
</div>
</form>

</div>



<div class="volume-list">

@foreach($issues as $data)

  <a href="{{ URL('add-article/'.$data->id)}}">
  <div class="list-v">
  {{$data->name}} <br>
</div>
  </a>

@endforeach

</div>









@include('adminpanel.admin_partial.dash-bottom')





</body>
</html>