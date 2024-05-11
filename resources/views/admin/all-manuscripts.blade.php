@extends('admin/layout')

@section('title', 'All Manuscript')



@section('content')



<section class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Manuscript</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
        <table id="example2" class="table table-bordered  table-hover small">
        <thead>
  <tr>
    <th>Id</th>
    <th>File</th>
     <th>Mode</th>
    <th>Author</th>
    <th>email & Mobile</th>
    <th>Journal</th>
    <th>Manuscript</th>
    <th>Type</th>
    <th>Affiliation</th>
    <th>Date</th>
  </tr>
        </thead>

        <tbody>
@foreach($manuscript as $data)
 <tr>
   <td>{{$data->m_id}}</td>
    <td><a href="viewer/{{$data->m_id}}"> {{$data->file}} </a></td>
      
      <td>{{$data->mode}}</td>
      <td>{{$data->author}}</td>
      <td>{{$data->email}}<br>{{$data->mobile}}</td>
      <td>{{$data->journal}}</td>
      <td>{{$data->manuscript}}</td>
      <td>{{$data->type}}</td>
      <td>{{$data->affiliation}}</td>
      <td>{{$data->date}}</td>
    </tr>



@endforeach
        </tbody>
        </table>
          </div>
          </div>
        </div>
        </div>
        <!-- /.row -->

    </div><!-- /.container-fluid -->
</section>

@endsection