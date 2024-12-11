<nav class="sidebar">
  <div class="sidebar-header">
    <a href="{{ route('Dashboard-hrms') }}" class="sidebar-brand">
      Bacaca<span class="fs-5">Printshop</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      {{-- <li class="nav-item nav-category">Human Resources Panel</li>
      <li class="nav-item {{ active_class(route('Dashboard-hrms')) }}">
        <a href="{{ route('Dashboard-hrms') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Overview</span>
        </a>
      </li> --}}
      <li class="nav-item nav-category">Recruitment</li>
      <li class="nav-item {{ active_class(route('jobPosting')) }}">
        <a href="{{ route('jobPosting') }}" class="nav-link">
          <i class="link-icon" data-feather="file-text"></i>
          <span class="link-title">Job Posting</span>
        </a>
      </li>

      <li class="nav-item {{ active_class(route('jobApplication')) }}">
        <a href="{{ route('jobApplication') }}" class="nav-link">
          <i class="link-icon" data-feather="info"></i>
          <span class="link-title">Applications</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['#']) }}">
        <a href="{{ url('#') }}" class="nav-link">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">Scheduled Interviews</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/pds']) }}">
        <a href="{{ route('newPerson')}}" class="nav-link">
          <i class="link-icon" data-feather="clipboard"></i>
          <span class="link-title">Personal Data Sheet</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/pds']) }}">
        <a href="{{ route('employeeCandidate') }}" class="nav-link">
          <i class="link-icon" data-feather="file-plus"></i>
          <span class="link-title">Applicant Onboarding</span>
        </a>
      </li>

      <li class="nav-item nav-category">Employee Management</li>
     
      <li class="nav-item {{ active_class(['/pds']) }}">
        <a href="{{ route('newEmployee') }}"  class="nav-link">
          <i class="link-icon" data-feather="users"></i>
          <span class="link-title">Employment</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/pds']) }}">
        <a href="{{ url('#') }}" class="nav-link">
          <i class="link-icon" data-feather="file-plus"></i>
          <span class="link-title">Maintain Employee</span>
        </a>
      </li>

      <li class="nav-item {{ active_class(['ui-components/*']) }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#attendance" role="button" aria-expanded="{{ is_active_route(['ui-components/*']) }}" aria-controls="uiComponents">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">Attendance & Leave</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['ui-components/*']) }}" id="attendance">
          <ul class="nav sub-menu">
            <li class="nav-item {{ active_class(['/mydtr']) }}"><a href="{{ url('/mydtr') }}" class="nav-link">
                Mark Attendance</a>
            </li>
      
            <li class="nav-item {{ active_class(['/position']) }}">
              <a href="{{ url('/position') }}" class="nav-link">Record Leave Requests</a>
            </li>
            <li class="nav-item {{ active_class(['/pds']) }}">
              <a href="{{ url('/employee') }}" class="nav-link">Approve/Reject Leave</a>
            </li>
            <li class="nav-item {{ active_class(['/pds']) }}">
              <a href="{{ url('/employee') }}" class="nav-link">Update Leave Balance</a>
            </li>
          </ul>
        </div>
      </li>


      <li class="nav-item {{ active_class(['ui-components/*']) }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#payroll" role="button" aria-expanded="{{ is_active_route(['ui-components/*']) }}" aria-controls="uiComponents">
          <i class="link-icon" data-feather="loader"></i>
          <span class="link-title">Payroll Processing</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['ui-components/*']) }}" id="payroll">
          <ul class="nav sub-menu">
            <li class="nav-item {{ active_class(['/mydtr']) }}"><a href="{{ url('/mydtr') }}" class="nav-link">Fetch Employee Attendance</a>
            </li>
            <li class="nav-item {{ active_class(['/position']) }}">
              <a href="{{ url('/position') }}" class="nav-link">Calculate Salary</a>
            </li>
            <li class="nav-item {{ active_class(['/pds']) }}">
              <a href="{{ url('/employee') }}" class="nav-link">Process Payroll</a>
            </li>
            <li class="nav-item {{ active_class(['/pds']) }}">
              <a href="{{ url('/employee') }}" class="nav-link">Generate Payslip</a>
            </li>
            <li class="nav-item {{ active_class(['/pds']) }}">
              <a href="{{ url('/employee') }}" class="nav-link">Distribute Salary</a>
            </li>
          </ul>
        </div>
      </li>


     

    </ul>
  </div>
</nav>

