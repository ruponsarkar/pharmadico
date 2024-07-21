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
    align-content: center;
    flex-wrap: wrap;
  }

  .volume-list a {
    width: 33%;
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
<div class="col-md-8 m-auto">

  <h4>Issue List</h4>
  <div class="volume-list">


    <table class="table table-striped table-inverse table-responsive">
      <thead class="thead-inverse">
        <tr>
          <th>sl</th>
          <th>name</th>
          <th></th>
          <th>action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($issues as $data)
        <tr>
          <td scope="row">{{ $loop->index + 1 }}</td>
          <td>{{ $data->name }}</td>
          <td class="text-center">
          <!-- <button type="button" class="btn btn-success btn-sm update-status-btn" data-bs-toggle="modal" data-bs-target="#updateStatusModal"> -->
            
            <a href="#" class="edit-button" data-bs-target="#editModal" data-id="{{ $data->id }}" data-name="{{ $data->name }}" data-bs-toggle="modal">
              <i class="far fa-edit"></i>
            </a>
          </td>
          <td class="text-center">
            <a class="confirmation" href="{{ URL('delete-journals/'.$data->id) }}">
              <i class="fas fa-trash-alt text-danger"></i>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
      
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Edit Issue</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="editForm">
              @csrf
              <input type="hidden" id="edit-id" name="id">
              <div class="form-group">
                <label for="edit-name">Name</label>
                <input type="text" class="form-control" id="edit-name" name="name" required>
              </div>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<!-- url: 'http://127.0.0.1:8000/update-issues', -->

@endsection
@section('script2')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Handle edit button click
        document.querySelectorAll('.edit-button').forEach(function(button) {
            button.addEventListener('click', function() {
                var id = this.getAttribute('data-id');
                var name = this.getAttribute('data-name');

                document.getElementById('edit-id').value = id;
                document.getElementById('edit-name').value = name;

                $('#editModal').modal('show');
            });
        });

        document.getElementById('editForm').addEventListener('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            fetch('http://127.0.0.1:8000/update-issues', {
                method: 'POST',
                headers: {
                    // 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    $('#editModal').modal('hide');
                    location.reload(); 
                } else {
                    alert('Error updating issue');
                }
            })
            .catch(error => {
                console.error('Error updating issue:', error);
                alert('Error updating issue');
            });
        });
    });
</script>

  @endsection