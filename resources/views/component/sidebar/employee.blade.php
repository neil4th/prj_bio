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
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item {{ active_class(route('employeeDashboard')) }}">
        <a href="{{ route('employeeDashboard') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">web apps</li>

      <li class="nav-item {{ active_class(route('DTR')) }}">
        <a href="{{ route('DTR') }}" class="nav-link">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">My DTR</span>
        </a>
      </li>

      
      <li class="nav-item {{ active_class(['/pds']) }}">
        <a href="{{ url('/employee') }}" class="nav-link">
          <i class="link-icon" data-feather="file-plus"></i>
          <span class="link-title">Employee PDS</span>
        </a>
      </li>

      <li class="nav-item {{ active_class(['email/*']) }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#email" role="button" aria-expanded="{{ is_active_route(['email/*']) }}" aria-controls="email">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Email</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['email/*']) }}" id="email">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/email/inbox') }}" class="nav-link {{ active_class(['email/inbox']) }}">Inbox</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/email/read') }}" class="nav-link {{ active_class(['email/read']) }}">Read</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/email/compose') }}" class="nav-link {{ active_class(['email/compose']) }}">Compose</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ active_class(['apps/chat']) }}">
        <a href="{{ url('/apps/chat') }}" class="nav-link">
          <i class="link-icon" data-feather="message-square"></i>
          <span class="link-title">Chat</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['apps/calendar']) }}">
        <a href="{{ url('/apps/calendar') }}" class="nav-link">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">Calendar</span>
        </a>
      </li>
     
  </div>
</nav>
