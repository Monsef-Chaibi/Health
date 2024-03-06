<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Basic Inputs - Forms | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    @include('AdminDash/include/link')

  </head>



  <body>

    @if (session('success'))
      <script>
          Swal.fire({
            position: "center",
            icon: "success",
            title:  '{{ session('success') }}',
            showConfirmButton: false,
            timer: 2000
            });
      </script>
    @endif

    @if (session('error'))
        <script>
          Swal.fire({
            position: "center",
            icon: "error",
            title:  '{{ session('error') }}',
            showConfirmButton: false,
            timer: 2000
            });
      </script>
    @endif



    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        @include('AdminDash/include/menu')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  <a
                    class="github-button"
                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                    >Star</a
                  >
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Reservation /</span> Edit</h4>

                <form action="{{ route('reservations.update', $reservation->id) }}" method="POST" id="serviceForm">
                    @csrf
                    @method('PUT') <!-- Important for Laravel to recognize this as an update request -->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <h5 class="card-header"></h5>
                                <div class="card-body">
                                    <div class="mb-3 row">
                                        <label class="col-md-3 col-form-label" for="nameEN">Last Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="nameEN" id="nameEN" value="{{$reservation->first_name}}" required />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-md-3 col-form-label" for="UserEN">First Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="UserEN" id="UserEN" value="{{$reservation->last_name}}" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <h5 class="card-header"></h5>
                                <div class="card-body">
                                    <div class="mb-3 row">
                                        <label class="col-md-3 col-form-label" for="nameAR">Email</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="nameAR" id="nameAR" value="{{$reservation->email}}" required />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-md-3 col-form-label" for="UserAR">Phone</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="UserAR" id="UserAR" value="{{$reservation->phone}}" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id='calendar'></div>
                    <input type="hidden" name="start_time" id="start_time" value="{{ $reservation->start_time }}">
                    <input type="hidden" name="end_time" id="end_time" value="{{ $reservation->end_time }}">

                    <div class="text-center mt-3">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">  Save  </button>
                    </div>
                </form>
            </div>


            <!-- / Content -->
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    @include('AdminDash/include/script')

  </body>
</html>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: ['interaction', 'timeGrid'],
        header: {
            left: 'prev,next today',
            center: 'title',
            right: ''
        },
        initialView: 'timeGridWeek',
        initialDate: new Date(), // Adjust if needed
        navLinks: false,
        selectable: true,
        allDaySlot: false,
        selectMirror: true,
        events: [
            {
                title: 'Existing Reservation',
                start: document.getElementById('start_time').value,
                end: document.getElementById('end_time').value || document.getElementById('start_time').value, // Use start time if end time is absent
                allDay: false, // Adjust based on your requirements
                textColor: 'white' // For better visibility
            }
        ],
        select: function(selectionInfo) {
            // Remove the existing reservation event before adding a new selection
            var events = calendar.getEvents();
            events.forEach(function(evt) {
                if (evt.title === 'Existing Reservation') {
                    evt.remove();
                }
            });

            // Add new selection as 'Existing Reservation' to reflect the change immediately on the calendar
            calendar.addEvent({
                title: 'Existing Reservation',
                start: selectionInfo.start,
                end: selectionInfo.end,
                allDay: selectionInfo.allDay
            });

            // Update hidden input fields to reflect new selection
            document.getElementById('start_time').value = selectionInfo.startStr;
            document.getElementById('end_time').value = selectionInfo.endStr || selectionInfo.startStr;
            calendar.unselect(); // Clear current selection
        },
        eventDrop: function(info) {
            // Update hidden inputs when an existing event is moved
            document.getElementById('start_time').value = info.event.startStr;
            document.getElementById('end_time').value = info.event.endStr || info.event.startStr;
        },
        editable: true,
        eventLimit: true
    });

    calendar.render();
});

</script>

