<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
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
      <li class="nav-item nav-category">Human Resources Panel</li>
      <li class="nav-item {{ active_class(route('Dashboard-hrms')) }}">
        <a href="{{ route('Dashboard-hrms') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Overview</span>
        </a>
      </li>
      <li class="nav-item nav-category">Recruitment</li>
      <li class="nav-item {{ active_class(route('jobPosting')) }}">
        <a href="{{ route('jobPosting') }}" class="nav-link">
          <i class="link-icon" data-feather="file-text"></i>
          <span class="link-title">Job Postings</span>
        </a>
      </li>

      <li class="nav-item {{ active_class(route('jobApplication')) }}">
        <a href="{{ route('jobApplication') }}" class="nav-link">
          <i class="link-icon" data-feather="file-plus"></i>
          <span class="link-title">Applications Received</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['#']) }}">
        <a href="{{ url('#') }}" class="nav-link">
          <i class="link-icon" data-feather="users"></i>
          <span class="link-title">Scheduled Interviews</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/pds']) }}">
        <a href="{{ url('#') }}" class="nav-link">
          <i class="link-icon" data-feather="file-plus"></i>
          <span class="link-title">Employee Onboarding</span>
        </a>
      </li>

      <li class="nav-item nav-category">Employee Management</li>
      <li class="nav-item {{ active_class(['ui-components/*']) }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="{{ is_active_route(['ui-components/*']) }}" aria-controls="uiComponents">
          <i class="link-icon" data-feather="user"></i>
          <span class="link-title">Employee</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['ui-components/*']) }}" id="uiComponents">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('newPerson')}}" class="nav-link {{ active_class(['portal/hrms/new_person']) }}">New Person Data</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('newEmployee') }}" class="nav-link {{ active_class(['portal/hrms/new_employee']) }}">Employment</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/ui-components/alerts') }}" class="nav-link {{ active_class(['ui-components/alerts']) }}">Maintain Employee Records</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/ui-components/badges') }}" class="nav-link {{ active_class(['ui-components/badges']) }}">Update Employee Record</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/ui-components/badges') }}" class="nav-link {{ active_class(['ui-components/badges']) }}">Deactivate Employee Record</a>
            </li>
           
          </ul>
        </div>
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


      <li class="nav-item {{ active_class(['ui-components/*']) }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#perf" role="button" aria-expanded="{{ is_active_route(['ui-components/*']) }}" aria-controls="uiComponents">
          <i class="link-icon" data-feather="award"></i>
          <span class="link-title">Performance Management</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['ui-components/*']) }}" id="perf">
          <ul class="nav sub-menu">
            <li class="nav-item {{ active_class(['/position']) }}">
              <a href="{{ url('/position') }}" class="nav-link">Set KPI</a>
            </li>
            <li class="nav-item {{ active_class(['/pds']) }}">
              <a href="{{ url('/employee') }}" class="nav-link">Collect Feedback</a>
            </li>
            <li class="nav-item {{ active_class(['/pds']) }}">
              <a href="{{ url('/employee') }}" class="nav-link">Evaluate Performance</a>
            </li>
            <li class="nav-item {{ active_class(['/pds']) }}">
              <a href="{{ url('/employee') }}" class="nav-link">Generate Reports</a>
            </li>
          </ul>
        </div>
      </li>

    </ul>
  </div>
</nav>

