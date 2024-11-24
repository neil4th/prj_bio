@extends('layout.master')

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
    <li class="breadcrumb-item"><a href="#">Daily Time Record</a></li>
    <li class="breadcrumb-item active" aria-current="page">My Daily Time Record</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Daily Time Record</h6>
          <form>
            <div class="row">
              <div class="col-sm-4">
                <div class="mb-3">
                  <label class="form-label">Select Date</label>
                  <div class="input-group flatpickr" id="flatpickr-date-range"  >
                    <span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
                    <input type="text" class="form-control" placeholder="Select date" mode="range" name="dateofbirth" data-input>
                    <button type="button" class="btn btn-primary submit">Generate DTR</button>
                  </div>
                </div>
                </div>
                        <div class="table-responsive">
                          <table id="dataTableExample" class="table table-bordered table-hover">
                            <thead>
                              <tr>
                                  <th rowspan="2" class="text-center  align-middle" >Day</th>
                                  <th colspan="2" class="text-center  align-middle">A.M</th>
                                  <th colspan="2" class="text-center  align-middle">P.M</th>  
                                  <th colspan="2" class="text-center  align-middle">Undertime</th>  
                              </tr>
                              <tr>
                                  <th class="text-center  align-middle">Arrival</th>
                                  <th class="text-center  align-middle">Departure</th>
                                  <th class="text-center  align-middle">Arrival</th>
                                  <th class="text-center  align-middle">Departure</th>
                                  <th class="text-center  align-middle">Arrival</th>
                                  <th class="text-center  align-middle">Departure</th>
                              </tr>
                                
                            
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>07:03</td>
                                <td>11:53</td>
                                <td>07:03</td>
                                <td>11:53</td>
                                <td>00:05</td>
                                <td>00:05</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>07:03</td>
                                <td>11:53</td>
                                <td>07:03</td>
                                <td>11:53</td>
                                <td>00:05</td>
                                <td>00:05</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>07:03</td>
                                <td>11:53</td>
                                <td>07:03</td>
                                <td>11:53</td>
                                <td>00:05</td>
                                <td>00:05</td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>07:03</td>
                                <td>11:53</td>
                                <td>07:03</td>
                                <td>11:53</td>
                                <td>00:05</td>
                                <td>00:05</td>
                              </tr>
                             
                            </tbody>
                          </table>
                        </div>
                 

            </div><!-- Row -->
          </form>
          <button type="button" class="btn btn-primary submit">Submit form</button>
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
@endpush