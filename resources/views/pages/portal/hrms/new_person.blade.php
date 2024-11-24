@section('title', 'HRMS | New Person data')
@extends('pages.portal.admin_hrms')

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
    <li class="breadcrumb-item"><a href="#">Employee</a></li>
    <li class="breadcrumb-item active" aria-current="page">New Person data</li>
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
          <h6 class="card-title">Personal Information</h6>
            <form action="/new_person" method="POST" >
              @csrf
              <div class="row">
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" name="firstname" class="form-control" placeholder="Enter first name">
                  </div>
                </div><!-- Col -->
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label class="form-label">Middle Name</label>
                    <input type="text" name="middlename" class="form-control" placeholder="Enter middle name">
                  </div>
                </div><!-- Col -->
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="lastname" class="form-control" placeholder="Enter last name">
                </div>
                </div><!-- Col -->
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label class="form-label">Name Extension <span class="text-muted">(Sr.Jr.)</span></label>
                    <input type="text" class="form-control" name="name_ext" placeholder="name extension">
                </div>
                </div><!-- Col -->
              </div><!-- Row -->

              <div class="row">
                <div class="col-sm-4">
                  <div class="mb-3">
                  <label class="form-label">Gender</label>
                  <div>
                    <div class="form-check form-check-inline">
                      <input type="radio" class="form-check-input" value="male" name="sex" id="gender1">
                      <label class="form-check-label" for="gender1">
                        Male
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input type="radio" class="form-check-input" value="female" name="sex" id="gender2">
                      <label class="form-check-label" for="gender2">
                        Female
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input type="radio" class="form-check-input" value="other"  name="sex" id="gender3">
                      <label class="form-check-label" for="gender3">
                        Other
                      </label>
                    </div>
                  </div>
                </div>
                </div><!-- Col -->
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label class="form-label">Birthday</label>
                    <div class="input-group flatpickr" id="flatpickr-date">
                      <span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
                      <input type="text" class="form-control" placeholder="Select date" name="dateofbirth" data-input>
                    </div>
                  </div>
                </div><!-- Col -->
                <div class="col-sm-2">
                  <div class="mb-3">
                    <label class="form-label">Height</label>
                    <input type="text" class="form-control" name="height" placeholder="Enter your Height">
                  </div>
                </div><!-- Col -->
                <div class="col-sm-2">
                  <div class="mb-3">
                    <label class="form-label">Weight</label>
                    <input type="text" class="form-control" name="weight" placeholder="Enter your Weight">
                  </div>
                </div><!-- Col -->
              </div><!-- Row -->


              <div class="row">
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter your address">
                  </div>
                </div><!-- Col -->
                
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email">
                  </div>
                </div><!-- Col -->
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label class="form-label">Contact Number</label>
                    <input type="text" class="form-control" name="contact_number" placeholder="Enter your Contact number">
                  </div>
                </div><!-- Col -->
              </div><!-- Row -->

              <div class="row">
                <div class="col-sm-4">
                  <div class="mb-3">
                    {{-- <a id="more" href="#" onclick="$('.details').slideToggle(function(){$('#more').html($('.details').is(':visible')?'See Less Details':'See More Details');});">See More Details</a> --}}

                    <label for="civil_stat" class="form-label">Civil Status</label>
                    <select class="form-select" name="civil_status"  id="civil_stat" 
                    onchange="toggleDetails(this.value)" >
                      <option  Value="Single" selected >Single</option>
                      <option value="Married">Married</option>
                      <option value="Widowed" >Widowed / Widower</option>
                      <option value="Separated">Separated</option>
                    </select>
                  </div>
                </div><!-- Col -->
                
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label class="form-label">Citizenship</label>
                    <input type="text" class="form-control" name="citizenship" placeholder="Enter citizenship">
                  </div>
                </div><!-- Col -->
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label class="form-label">Religion</label>
                    <input type="text" class="form-control" name="religion" placeholder="Enter your religion">
                  </div>
                </div><!-- Col -->
              </div><!-- Row -->
                  
              <div class="details" style="display:none">
              
              <div class="row">
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label class="form-label" id="spouse_label">Spouse's Name</label>
                    <input type="text" class="form-control" name="spouse" id="spouse_input" placeholder="Enter Spouse's Name">
                  </div>
                </div><!-- Col -->
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label class="form-label">Spouse's Occupation </label>
                    <input type="text" class="form-control" name="spouse_occupation" placeholder="Enter Spouse's Occupation">
                  </div>
                </div><!-- Col -->
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label class="form-label">Name of  Children/s</label>
                    <input type="text" class="form-control" name="name_of_children" placeholder="Enter name of your children/s ">
                  </div>
                </div><!-- Col -->
                </div><!-- Hidden when Single is chosen -->
              </div><!-- Row -->


              <div class="row">
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label class="form-label">Father's Name</label>
                    <input type="text" class="form-control" name="father" placeholder="Enter your Father's Name">
                  </div>
                </div><!-- Col -->
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label class="form-label">Father Occupation</label>
                    <input type="text" class="form-control" name="father_occupation" placeholder="Enter your Father's Occupation">
                  </div>
                </div><!-- Col -->
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label class="form-label">Mother's Name</label>
                    <input type="text" class="form-control" name="mother" placeholder="Enter your Mother's Name">
                  </div>
                </div><!-- Col -->
                <div class="col-sm-3">
                  <div class="mb-3">
                    <label class="form-label">Mother's Occupation</label>
                    <input type="text" class="form-control" name="mother_occupation" placeholder="Enter your Mother's Occupation">
                  </div>
                </div><!-- Col -->
              </div><!-- Row -->


              <div class="row">
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label class="form-label">Language or Dialect,Spoken/Written</label>
                    <input type="text" class="form-control" name="language_dialect" placeholder="Enter Language or Dialect,Spoken/Written">
                  </div>
                </div><!-- Col -->
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label class="form-label">Contact Person</label>
                    <input type="text" class="form-control" name="contact_person_name" placeholder="Person To be Contacted incase of Emergency">
                  </div>
                </div><!-- Col -->
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label class="form-label">Contact Person Mobile Number</label>
                    <input type="text" class="form-control" name="contact_person_number" placeholder="Contact Person Phone Number">
                  </div>
                  </div>
              </div><!-- Row -->
              <div class="flex justify-content-center text-center">
                <button type="submit" class="btn btn-primary submit ">Save Information</input>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>

@endsection

<script>
  function toggleDetails(value) {
    const details = document.querySelector('.details');
    const spouseLabel = document.getElementById('spouse_label');
    const spouseInput = document.getElementById('spouse_input');

    if (value === 'Single') {
      details.style.display = 'none'; // Hide details
    } else {
      details.style.display = 'block'; // Show details

      if (value === 'Widowed') {
        spouseLabel.textContent = "Late Spouse's Name";
        spouseInput.placeholder = "Enter Late Spouse's Name";
      } else {
        spouseLabel.textContent = "Spouse's Name";
        spouseInput.placeholder = "Enter Spouse's Name";
      }
    }
  }
</script>

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
