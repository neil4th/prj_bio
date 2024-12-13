<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'Daily Time Record')</title>
  <link rel="shortcut icon" href="{{ asset('/fav.ico') }}">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Select the time display div
      const timeDisplay = document.getElementById('realTimeClock');
      const clockInput = document.getElementById('clockInput');
      // Function to update time
      function updateTime() {
        const now = new Date();
        const options = {
          timeZone: 'Asia/Manila', // Change this to your preferred time zone
          hour: '2-digit',
          minute: '2-digit',
          second: '2-digit',
          hour12: true,
        };
        const formatter = new Intl.DateTimeFormat('en-US', options);
        const formattedTime = formatter.format(now);
        timeDisplay.textContent = formattedTime;
        clockInput.value = formattedTime
      }
      // Update the clock every second
      setInterval(updateTime, 1000);
      // Set initial time
      updateTime();
    });
  </script>
  <!-- end plugin css -->
</head>

<body class="container">
  
    <div class="d-flex justify-content-center align-items-center vh-100">
      <div class="text-center">
        <img src="{{ url('assets/images/bacaca_logo.png') }}" height="50px">
        <div class="mb-3">
          <div style="font-size: 80px; font-weight: bold;" id="realTimeClock" >
            <!-- The time will be displayed here -->
          </div>
          <div class="d-flex flex-row justify-content-center gap-3 ">
           
            <form action="{{route('dtr.record') }}" method="POST" >
              @csrf
            <button type="submit" class=" btn  bg-success p-2 text-xl text-white" data-bs-toggle="modal" data-bs-target="#fingerprintModal"><strong>Fingerprint</strong></button>
          </form>
          </div>
          <!-- <select name="type" class="form-select form-select-lg m-2 p-2">
            <option value="Time-In">Time In</option>
            <option value="Time-Out">Time Out</option>
            <option value="Over">Over Time</option>
          </select> -->
        </div>
        <!-- <button class="btn btn-primary">Verify Fingerprint</button> -->
      </div>


  <div class="modal fade" id="fingerprintModal" tabindex="-1" aria-labelledby="fingerprintModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content shadow-sm rounded-3 bg-white">
            <div class="modal-header">
                <h5 class="modal-title" id="fingerprintModalLabel">Fingerprint Authentication</h5>
                 <h5 class="modal-title2" id="fingerprintModalLabel"style="display: none;" >Authentication Successfull</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 d-flex justify-content-center align-items-center" style="height: 200px;">
                <div class="mb-3 text-center" id="modalContent">
                    <!-- Fingerprint Icon -->
                    <i id="fingerprintIcon" class="fas fa-fingerprint mt-2" style="font-size: 100px;"></i>
                    <!-- Check Icon (Initially Hidden) -->
                    <i id="checkIcon" class="fas fa-check mt-2" style="font-size: 100px; display: none; color: green;"></i>

                    <div id="profileContent" style="display: none;">
                        <div class="card bg-transparent border-0 shadow-sm rounded-3">
                            <div class="card-body p-4">
                                <!-- Flex row for profile image and name, ensuring everything stays in one line -->
                                <div class="d-flex align-items-center">
                                    <!-- Profile Picture Column -->
                                    <div class="me-4">
                                        <img id="userProfilePic" src="{{asset('assets/images/employee/tony.jpg')}}" alt="Tony Stark" class="img-fluid rounded-circle shadow" style="width: 120px; height: 120px; object-fit: cover;">
                                    </div>
                                    <!-- User Details Column -->
                                    <div class="d-flex flex-column">
                                        <h3 id="userName" class="card-title mb-0" style="font-size: 1.5rem; font-weight: 600; color: #333; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Tony Stark</h3>
                                        <p id="userTitle" class="card-text text-muted" style="font-size: 1.1rem; font-weight: 500; color: #777; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Graphic Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>