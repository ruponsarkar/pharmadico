@extends('layout')

@section('title', 'Manuscript')



@section('content')

<div class="container-fluid">
      
        <div class="row manuscript-bg pt-3 pb-3">
          <div class="col-md-6 offset-md-3 manuscript-form pb-3 border rounded border-dark">
            <div class="h3 fw-bold text-center p-3">Manuscript Submission</div>




            <form method="POST" action="{{url('submit_manuscript')}}" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                <label for="Select Mode" class="col-sm-4 col-form-label">Select Mode</label>
                <div class="col-sm-8">
                  <select class="form-select" id="specificSizeSelect" name="mode">
                    <option selected>Select</option>
                    <option value="Normal Mode">Normal Mode</option>
                    <option value="Fast Track Mode">Fast Track Mode</option>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <label for="Article Type" class="col-sm-4 col-form-label">Article Type</label>
                <div class="col-sm-8">
                  <select class="form-select" id="specificSizeSelect" name="type">
                    <option value="">Select</option>
                    <option value="Research article">Research article</option>
                    <option value="Review article">Review article</option>
                    <option value="Short Communication">Short Communication</option>
                    <option value="Case Report">Case Report</option>
                    <option value="Letter to editor">Letter to editor</option>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <label for="Select Journal" class="col-sm-4 col-form-label">Select Journal</label>
                <div class="col-sm-8">
                  <select class="form-select" id="specificSizeSelect" name="journal">      
                    <option value="">Select</option>
                    @foreach($journals as $data)
                    <option value="{{$data->j_id}}"> {{$data->j_name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <label for="Corresponding Author" class="col-sm-4 col-form-label">Corresponding Author</label>
                <div class="col-sm-8">
                  <input type="text" name="author" class="form-control" placeholder="Full Name">
                </div>
              </div>

              <div class="row mb-3">
                <label for="Full Affiliation" class="col-sm-4 col-form-label">Full Affiliation</label>
                <div class="col-sm-8">
                  <textarea type="text" name="affiliation" class="form-control" placeholder="Affiliation"></textarea>
                </div>
              </div>

              <div class="row mb-3">
                <label for="Email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                  <input type="email" name="mail" class="form-control" placeholder="Email">
                </div>
              </div>

              <div class="row mb-3">
                <label for="Mobile" class="col-sm-4 col-form-label">Mobile</label>
                <div class="col-sm-8">
                  <input type="number" name="mobile" class="form-control" placeholder="Mobile Number (Country code mandatory)">
                </div>
              </div>

              <div class="row mb-3">
                <label for="Manuscript Title" class="col-sm-4 col-form-label">Manuscript Title</label>
                <div class="col-sm-8">
                  <input type="text" name="manuscript" class="form-control" placeholder="Manuscript Title">
                </div>
              </div>

              <div class="row mb-3">
                <label for="Choose a file to upload" class="col-sm-4 col-form-label">Choose a file to upload</label>
                <div class="col-sm-8">
                  <input class="form-control" name="file" type="file" id="formFile">
                </div>
              </div>

              <div class="col-12 text-center">
                <button type="submit" class="btn effect01">Submit Manuscript</button>
              </div>

            </form>
          </div>
        </div> 
                
        </div>

@endsection