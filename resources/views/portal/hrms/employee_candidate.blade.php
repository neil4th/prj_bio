@extends('component.main.hrms.hrms_master')
@section('title', 'HRMS | List of Applicants')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/pickr/themes/classic.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Recruitment</a></li>
    <li class="breadcrumb-item active" aria-current="page">Applicants
    </li>
  </ol>
</nav>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
            <h6 class="card-title">Probationary Period<span class="text-muted"> Training?</span></h6>
          <div class="table-responsive">
            <table id="dataTableExample" class="table table-bordered table-hover">
              <thead>
                <tr>
                    <th class="text-center  align-middle">ID</th>
                    <th class="text-center  align-middle">Name</th>
                    <th class="text-center  align-middle">Applying for</th>
                    <th class="text-center  align-middle">Remarks</th>
                    <th class="text-center  align-middle">Decision</th>
                </tr>
              </thead>
              <tbody class="text-center  align-middle">
                @if($personaldata->isNotEmpty())
                @forelse($personaldata as $pds)
                <tr>
                  <td>{{$pds['id']}}</td>
                  <td>{{$pds['firstname']}} {{$pds['lastname']}}</td>
                  <td>Layout Artist</td>
                  <td>Intern</td>
                  <td>
                    <button class="btn btn-outline-primary">Accept</button>
                    <button class="btn btn-outline-danger">Decline</button>
                  </td>
                </tr>
                @empty
                <p>No data available.</p>
                @endforelse
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style>
    table.table td:nth-child(4){
      word-wrap: break-word; /* Wrap long text */
      word-break: break-word; /* Break long words */
      max-width: 200px; /* Set a specific max width */
      min-width: 80px; /* Set a specific max width */
      white-space: normal; /* Allow wrapping */
      text-align: left;
    }
     td:nth-child(2){
      text-align: left;
    }
  </style>
  
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/typeahead-js/typeahead.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/dropzone/dropzone.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/dropify/js/dropify.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/pickr/pickr.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/flatpickr/flatpickr.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/form-validation.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap-maxlength.js') }}"></script>
  <script src="{{ asset('assets/js/inputmask.js') }}"></script>
  <script src="{{ asset('assets/js/select2.js') }}"></script>
  <script src="{{ asset('assets/js/typeahead.js') }}"></script>
  <script src="{{ asset('assets/js/tags-input.js') }}"></script>
  <script src="{{ asset('assets/js/dropzone.js') }}"></script>
  <script src="{{ asset('assets/js/dropify.js') }}"></script>
  <script src="{{ asset('assets/js/pickr.js') }}"></script>
  <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
@endpush
