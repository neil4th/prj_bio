@section('title', 'HRMS | New Employee')
@extends('component.main.hrms.hrms_master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/pickr/themes/classic.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Employee</a></li>
    <li class="breadcrumb-item active" aria-current="page">New Employee</li>
  </ol>
</nav>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="row">
  <div class="col-sm-4">
    <div class="mb-3">
    <label class="form-label">Person ID: BPS-{{Date('o-dm') }} </label>
      <input type="text" name="person_id" class="form-control" placeholder="Enter Person_Data ID">
    </div>
  </div><!-- Col -->
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Employee Assignment</h6>
            <form action="/new_employee" method="POST" >
              @csrf
              <div class="row">
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label class="form-label">Employment Starts</label>
                      <div class="input-group flatpickr" id="flatpickr-date">
                        <span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
                        <input type="text" class="form-control" placeholder="Select date" name="employment_date" data-input >
                    </div>
                  </div>
                </div><!-- Col -->
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label class="form-label">Employment Status</label>
                    <select class="form-select" name="employment_status" id="civil_stat">
                      <option selected >Regular</option>
                      <option>Contract of Service</option>
                      <option>Job Order</option>
                      <option>Abscences without leave</option>
                    </select>
                  </div>
                </div><!-- Col -->
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label class="form-label">Position</label>
                    <input type="text" name="position" class="form-control" placeholder="Enter Position">
                  </div>
                </div><!-- Col -->
               
              </div><!-- Row -->
              <div class="row">
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label class="form-label">Department</label>
                    <select class="form-select" name="department" id="department">
                      <option selected >PrintShop</option>
                      <option>Car Wash</option>
                      <option>Human Resource</option>
                      <option>Carenderia</option>
                    </select>
                  </div>
                </div><!-- Col -->
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label class="form-label">Immediate Supervisor</label>
                    <select class="form-select" name="supervisor" id="supervisor">
                      <option selected >supervisor 1</option>
                      <option  >supervisor 2</option>
                      <option >supervisor 3</option>
                      <option  >supervisor 4</option>
                    </select>
                  </div>
                </div><!-- Col -->
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label class="form-label">Manager</label>
                    <select class="form-select" name="manager" id="manager">
                      <option selected >Manager 1</option>
                      <option  >Manager 2</option>
                      <option  >Manager 3</option>
                      <option  >Manager 4</option>
                      <option  >Manager 5</option>  
                    </select>
                  </div>
                </div><!-- Col -->
              </div><!-- Row -->
            
              
              <button type="submit" class="btn btn-primary submit">Assign Employee</input>
            </form>
        </div>
      </div>
    </div>
  </div>

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


  <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.js') }}"></script>
@endpush
