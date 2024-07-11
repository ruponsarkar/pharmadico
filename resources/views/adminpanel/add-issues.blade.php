@extends('adminpanel/layout')
@section('title', 'Dashboard')
@section('content')

<style>
  .list-v {
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

  .list-v:hover {
    background-color: red;
  }

  .volume-list {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-content: center;
    flex-wrap: wrap;
  }
</style>

<div class="container-form">
  <div class="col-md-6 m-auto">
    <h1>Add ISSUES</h1>
    <div class="card p-md-5">

      <form action="{{ URL('/add-issues/'.$id ) }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="one" class="form-group">
          <label class="form-label" for="language">ISSUES</label>
          <input name="name" id="" class="form-control" />
          <!-- <select name="name" id="" class="form-select">
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
          </select> -->
        </div>

        <div class="one w-100 text-center m-2">
          <input type="submit" name="submit-issues" value="Save" id="" class="btn btn-primary btn-block w-100">
        </div>
      </form>
    </div>
  </div>
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







@endsection