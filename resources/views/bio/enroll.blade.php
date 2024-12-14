@section('title', 'Enrollment')
@extends('component.main.hrms.hrms_master')

@push('plugin-styles')
<link rel="stylesheet" href="{{asset('assets/bioscript/css/bootstrap-min.css')}}">
<link rel="stylesheet" href="{{asset('assets/bioscript/app.css')}}" type="text/css" />

@endpush

@section('content')


<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">
        <ul class="">
            <li id="Capture" class="">
                <a href="#" class="btn btn-primary" onclick="toggle_visibility(['content-capture','content-reader']);setActive('Capture','Reader')">
                    Capture</a>
            </li>
        </ul>
        <ul class="">
            <li id="Reader" class="active">
                <a href="#" class="btn btn-primary" onclick="toggle_visibility(['content-reader','content-capture']);setActive('Reader','Capture')">
                    Reader</a>
            </li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-md-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <form action="{{route('newFerson')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!-- Left side: Image Div inside the form -->
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <!-- Image Div -->
                                    <div id="imagediv"></div>
                                    </br>

                                    <input type="text" id="qualityInputBox" size="20" style="background-color:#DCDCDC;text-align:center;" disabled> </br>
                                     <h5>Scan Quality</h5>
                                </div><!-- End of Card Body -->
                            </div><!-- End of Card -->
                        </div><!-- End of Left side -->

                        <!-- Right side: Personal Information Form inside the same form -->
                        <div class="col-sm-8">
                            <h6 class="card-title">Personal Information</h6>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Employee ID</label>
                                        <input type="text" name="employee_id" class="form-control" placeholder="Enter Employee ID">
                                    </div>
                                </div><!-- Col -->

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">First Name</label>
                                        <input type="text" name="firstname" class="form-control" placeholder="Enter first name">
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" name="lastname" class="form-control" placeholder="Enter last name">
                                    </div>
                                </div><!-- Col -->

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="position" class="form-label">Position</label>
                                        <select class="form-select" name="position" id="position">
                                            <option value="" disabled selected>-- Select Position --</option>
                                            <option value="Manager">Manager</option>
                                            <option value="Developer">Developer</option>
                                            <option value="Designer">Designer</option>
                                            <option value="Tester">Tester</option>
                                        </select>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="role" class="form-label">Role</label>
                                        <select class="form-select" name="role" id="role">
                                            <option value="" disabled selected>-- Select Role --</option>
                                            <option value="Admin">Admin</option>
                                            <option value="User">User</option>
                                            <option value="Guest">Guest</option>
                                        </select>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->

                            <div class="d-flex justify-content-between">
                                <!-- Left aligned buttons -->
                                <div>
                                    <input type="button" class="btn btn-primary" id="clearButton" value="Clear" onclick="Javascript:onClear()">
                                    <input type="button" class="btn btn-primary" id="save" value="Save" onclick="Javascript:onSave()">
                                    <input type="button" class="btn btn-primary" id="start" value="Start" onclick="Javascript:onStart()">
                                    <input type="button" class="btn btn-primary" id="stop" value="Stop" onclick="Javascript:onStop()">
                                    <input type="button" class="btn btn-primary" id="info" value="Info" onclick="Javascript:onGetInfo()">
                                </div>
                                <!-- Right aligned 'Save Information' button -->
                                <div>
                                    <button type="submit" class="btn btn-primary submit">Save Information</button>
                                </div>
                            </div>
                        </div><!-- End of Right side -->
                    </div><!-- End of Nested Row -->
                </form><!-- End of Form -->
            </div><!-- End of Card Body -->
        </div><!-- End of Card -->
    </div><!-- End of Col -->
</div><!-- End of Row -->


<div class="row">
    <div class="col-lg-5 col-xl-12 grid-margin grid-margin-xl-0 stretch-card">
        <div class="card">
            <div class="card-body">

                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <!-- Form to upload fingerprint -->




                    <div id="Scores" hidden></div>
                    <div id="content-capture" style="display : none;">
                        <div id="status"></div>

                        <div id="contentButtons">

                        </div>

                        <div id="imageGallery">
                        </div>
                        <div id="deviceInfo">
                        </div>

                        <div id="saveAndFormats">

                            <form name="myForm" style="border : solid grey;padding:5px;" hidden>
                                <b>Acquire Formats :</b><br>
                                <table>
                                    <tr data-toggle="tooltip" title="Will save data to a .raw file.">
                                        <td>
                                            <input type="checkbox" name="Raw" value="1" onclick="checkOnly(this)"> RAW <br>
                                        </td>
                                    </tr>
                                    <tr data-toggle="tooltip" title="Will save data to a Intermediate file">
                                        <td>
                                            <input type="checkbox" name="Intermediate" value="2" onclick="checkOnly(this)"> Feature Set<br>
                                        </td>
                                    </tr>
                                    <tr data-toggle="tooltip" title="Will save data to a .wsq file.">
                                        <td>
                                            <input type="checkbox" name="Compressed" value="3" onclick="checkOnly(this)"> WSQ<br>
                                        </td>
                                    </tr>
                                    <tr data-toggle="tooltip" title="Will save data to a .png file.">
                                        <td>
                                            <input type="checkbox" name="PngImage" checked="true" value="4" onclick="checkOnly(this)"> PNG
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <br>
                            <input type="button" class="btn btn-primary" id="saveImagePng" value="Export" onclick="Javascript:onImageDownload()">
                        </div>

                    </div>

                    <div id="content-reader" hidden>
                        <h4>Select Reader :</h4>
                        <select class="form-control" id="readersDropDown" onchange="selectChangeEvent()">
                        </select>
                        <div id="readerDivButtons">
                            <table width=70% align="center">
                                <tr>
                                    <td>
                                        <input type="button" class="btn btn-primary" id="refreshList" value="Refresh List"
                                            onclick="Javascript:readersDropDownPopulate(false)">
                                    </td>
                                    <td>
                                        <input type="button" class="btn btn-primary" id="capabilities" value="Capabilities"
                                            data-toggle="modal" data-target="#myModal" onclick="Javascript:populatePopUpModal()">
                                    </td>
                                </tr>
                            </table>

                            <!-- Modal - Pop Up window content-->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content -->
                                    <div class="modal-content" id="modalContent">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Reader Information</h4>
                                        </div>
                                        <div class="modal-body" id="ReaderInformationFromDropDown">

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>







                </div>
            </div>
        </div>
    </div>
</div> <!-- row -->






@endsection

@push('plugin-scripts')
<script src="{{ asset('assets/plugins/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>


@endpush

@push('custom-scripts')
<script src="{{ asset('assets/js/dashboard.js') }}"></script>

<script src="{{asset('assets/bioscript/lib/jquery.min.js')}}"></script>
<script src="{{asset('assets/bioscript/lib/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/bioscript/scripts/es6-shim.js')}}"></script>
<script src="{{asset('assets/bioscript/scripts/websdk.client.bundle.min.js')}}"></script>
<script src="{{asset('assets/bioscript/scripts/fingerprint.sdk.min.js')}}"></script>
<script src="{{asset('assets/bioscript/app.js')}}"></script>
@endpush
