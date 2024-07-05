@extends('adminpanel/layout')

@section('title', 'Dashboard')
@section('breadcrumb', 'Dashboard')



@section('content')
<style>
  body {
    font: normal 18px/1.5 "Fira Sans", "Helvetica Neue", sans-serif;
    background: #3AAFAB;
    color: #000;
  }

  .container {
    width: 80%;
    max-width: 1200px;
    margin: 0 auto;
  }

  .container * {
    box-sizing: border-box;
  }

  .flex-outer,
  .flex-inner {
    list-style-type: none;
    padding: 0;
  }

  .flex-outer {
    max-width: 800px;
    margin: 0 auto;
  }

  .flex-outer li,
  .flex-inner {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
  }

  .flex-inner {
    padding: 0 8px;
    justify-content: space-between;
  }

  .flex-outer>li:not(:last-child) {
    margin-bottom: 20px;
  }

  .flex-outer li label,
  .flex-outer li p {
    padding: 8px;
    font-weight: 300;
    letter-spacing: .09em;
    text-transform: uppercase;
  }

  .flex-outer>li>label,
  .flex-outer li p {
    flex: 1 0 120px;
    max-width: 220px;
  }

  .flex-outer>li>label+*,
  .flex-inner {
    flex: 1 0 220px;
  }

  .flex-outer li p {
    margin: 0;
  }

  .flex-outer li input:not([type='checkbox']),
  .flex-outer li textarea,
  select {
    padding: 15px;
    border: none;
  }

  .flex-outer li button {
    margin-left: auto;
    padding: 8px 16px;
    border: none;
    background: #333;
    color: #f3f3f3;
    text-transform: uppercase;
    letter-spacing: .09em;
    border-radius: 2px;
  }

  .flex-inner li {
    width: 100px;
  }
</style>
<div class="container">

  @if(session()->has('message'))
  <div class="alert alert-success">
    {{ session()->get('message') }}
  </div>
  @endif

  <div class="error_msg">
    <ul>
      @foreach($errors->all() as $e)
      <li>{{ $e }}</li>
      @endforeach
    </ul>
  </div>

  <form method="POST" action="{{URL('updateJournalsData/'.$journal->j_id)}}">
    @csrf
    <ul class="flex-outer">
      <li>
        <label for="first-name">Journal Name</label>
        <input type="text" id="name" name="jname" value="{{$journal->j_name}}">
      </li>
      <li>
        <label for="last-name">Abbr. title</label>
        <input type="text" id="university" name="abbr" value="{{$journal->abbr_title}}">
      </li>
      <li>
        <label for="last-name">ISSN</label>
        <input type="text" id="university" name="issn" value="{{$journal->issn}}">
      </li>
      <li>
        <label for="email">Frequency</label>
        <input type="text" id="details" name="frequency" value="{{$journal->frequency}}">
      </li>
      <li>
        <label for="phone">Language</label>
        <input type="text" id="type" name="language" value="{{$journal->language}}">
      </li>

      <li>
        <label for="phone">Chief Editor</label>
        <input type="text" id="type" name="chief" value="{{$journal->chief_editor}}">
      </li>

      <li>
        <label for="phone">Publisher</label>
        <input type="text" id="type" name="publisher" value="{{$journal->publisher}}">
      </li>

      <li>
        <label for="phone">Country of Origin</label>
        <input type="text" id="type" name="country" value="{{$journal->country_of_origin}}">
      </li>

      <li>
        <label for="phone">Aim and Scope<br> <span style="font-size:10px; color:black; font-weight: bold; text-transform: none;">(For change a pragraph type <br> "< br>" and for bold type <br> "< b>" without space )</span></label>

        <textarea name="aim" id="aim" cols="30" rows="20">{{$journal->aim_and_scope}}</textarea>

      </li>


      <li>

        <input type="hidden" name="id" value="{{$journal->j_id}}">

      <li>
        <button type="submit" name="submit">Update Details</button>
      </li>
    </ul>
  </form>

  <br><br><br><br><br><br><br><br>

  <form action="{{URL('updateJournalPhoto/'.$journal->j_id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <ul class="flex-outer">
      <li>
        <label for="phone">Change image</label>
        <input type="file" name="photo">
        <button type="submit" name="img-change">Change Image</button>
      </li>
    </ul>
  </form>



</div>


@endsection