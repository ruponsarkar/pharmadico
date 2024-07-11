@extends('adminpanel/layout')

@section('title', 'All Manuscript')
@section('breadcrumb', 'All Manuscript')

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title text-center">All Manuscript</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover small">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Unique ID </th>
                  <th>File</th>
                  <th>Mode</th>
                  <th>Author</th>
                  <th>email & Mobile</th>
                  <th>Journal</th>
                  <th>Manuscript</th>
                  <th>Type</th>
                  <th>Affiliation</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($manuscript as $data)
                <tr class="manuscript-row" data-id="{{$data->m_id}}" data-status="{{$data->status}}">
                  <td>{{$data->m_id}}</td>
                  <td>{{$data->muuid}}</td>
                  <td><a href="viewer/{{$data->m_id}}"> {{$data->file}} </a></td>
                  <td>{{$data->mode}}</td>
                  <td>{{$data->author}}</td>
                  <td>{{$data->email}}<br>{{$data->mobile}}</td>
                  <td>{{$data->journal}}</td>
                  <td>{{$data->manuscript}}</td>
                  <td>{{$data->type}}</td>
                  <td>{{$data->affiliation}}</td>
                  <td>{{ $data->date }}</td>
                  <td>
                    @if ($data->status === 0)
                    <span class="btn btn-sm btn-success">Accepted</span>
                    @elseif ($data->status === 1)
                    <span class="btn btn-sm btn-warning">Draft</span>
                    @elseif ($data->status === 2)
                    <span class="btn btn-sm btn-primary">Published</span>
                    @else
                    <span class="btn btn-sm btn-danger">Rejected</span>
                    @endif
                  </td>
                  <td class="text-center">
                    <button type="button" class="btn btn-success btn-sm update-status-btn" data-bs-toggle="modal" data-bs-target="#updateStatusModal">
                      Update Status
                    </button>
                  </td>
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

<!-- Modal -->
<div class="modal fade" id="updateStatusModal" aria-hidden="true" aria-labelledby="updateStatusModalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="updateStatusModalLabel">Update Manuscript</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="" id="updateStatusForm" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="status" id="selectedStatus">
          <input type="hidden" name="mid" id="mid" value="">
          <select class="form-select" aria-label="Default select example" id="statusSelect">
            <option selected disabled>Select status</option>
            <option value="0">Accepted</option>
            <!-- <option value="Draft">Draft</option> -->
            <option value="2">Published</option>
            <option value="3">Rejected</option>
          </select>
          <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const updateStatusModal = new bootstrap.Modal(document.getElementById('updateStatusModal'));
    const updateStatusForm = document.getElementById('updateStatusForm');
    const selectedStatusInput = document.getElementById('selectedStatus');
    const manuid = document.getElementById('mid');
    const statusSelect = document.getElementById('statusSelect');
    
    // alert(manuid.value);
    let mid;
    document.querySelectorAll('.update-status-btn').forEach(button => {
      button.addEventListener('click', function() {
        const row = this.closest('.manuscript-row');
        mid = row.getAttribute('data-id');
        const status = row.getAttribute('data-status');
        updateStatusForm.action = `/update-manuscripts/${mid}/${manuid}`;
        // Optionally, set the status in the select field
        statusSelect.value = status;
      });
    });

    // Update hidden input when select changes
    statusSelect.addEventListener('change', function() {
      selectedStatusInput.value = statusSelect.value;
      manuid.value = mid;
    });
  });
</script>

@endsection
