
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add editors</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  /* padding: 18px;
  margin-left: 10px; */
  border: 1px solid #dddddd;
  text-align: left;
  
}

td, th {
    padding: 10px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
tr:nth-child(1) {
  background-color: deeppink;
}

</style>
    @include('adminpanel.admin_partial.dash-link')
</head>
<body>
@include('adminpanel.admin_partial.dash-sidebar')


<div class="container-form">

<h1>Update Editors</h1>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<div class="error_msg">
  <ul>
    @foreach($errors->all() as $e)
    
    <li> <div class="alert alert-danger">{{ $e }} </div></li>
    @endforeach
  </ul>
</div>



<form action="updateEditors/{{$editors->id}}" method="post" enctype="multipart/form-data">
    @csrf
<div class="one">
<label for="jname">Editors Name</label>
<input type="text" name="name" value="{{$editors->name}}" id="">
</div>

<div class="one">
<label for="abbr">University Name</label>
<input type="text" name="university" value="{{$editors->university}}" id="">
</div>

<div class="one">
<label for="issn">Details (*Optional)</label>
<input type="text" name="details" value="{{$editors->details}}" id="">
</div>

<div class="one">
<label for="type">Type</label>
<select name="type" id="" required>
<option value=""></option>
    <option value="ass">Associative</option>
    <option value="chief">Chief</option>
</select>
</div>

<div class="one">
<label for="language">For journal</label>
<select name="journal" id="" required>
<option value=""></option>
@foreach($journal as $data)
    <option value="{{$data->j_id}}">{{$data->j_name}}</option>

@endforeach
</select>


</div>


<div class="one">
<label for="abbr">Profile Link: </label>
<input type="text" name="profile" value="{{$editors->profile}}" id="profile">
</div>



<!-- <div class="one">
<label for="photo">Photo</label>
<input type="file" name="photo" id="">
</div> -->

<div class="one">

<input type="submit" name="submit-editors" value="Save" id="">
</div>
</form>


</div>






@include('adminpanel.admin_partial.dash-bottom')



</body>
</html>