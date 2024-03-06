<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
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
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Services /</span> Edit</h4>

                <form action="{{ route('UpService', $service->id) }}"  method="POST" id="serviceForm">
                    @csrf
                    @method('PUT') <!-- Important for Laravel to recognize this as an update request -->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <h5 class="card-header">Details in English</h5>
                                <div class="card-body">
                                    <div class="mb-3 row">
                                        <label class="col-md-3 col-form-label" for="nameEN">Service Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="nameEN" id="nameEN" value="{{ $service->nameEN }}" required />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-md-3 col-form-label" for="UserEN">Assignee Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="UserEN" id="UserEN" value="{{ $service->UserEN }}" required />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-md-3 col-form-label" for="email">Email</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="email" name="email" id="email" value="{{ $service->email }}" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6" dir="rtl">
                            <div class="card mb-4">
                                <h5 class="card-header">Details in Arabic</h5>
                                <div class="card-body">
                                    <div class="mb-3 row">
                                        <label class="col-md-3 col-form-label" for="nameAR">اسم الخدمة</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="nameAR" id="nameAR" value="{{ $service->nameAR }}" required />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-md-3 col-form-label" for="UserAR">اسم المكلف</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="UserAR" id="UserAR" value="{{ $service->UserAR }}" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id='calendar'></div>
                    <!-- Hidden field for dates -->
                    <input type="hidden" name="selectedDates" id="selectedDates" value='@json($selectedDates)'>

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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var selectedDatesInput = document.getElementById('selectedDates'); // The hidden input where selected dates will be stored
            var preloadedEvents = @json($selectedDates);

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['interaction', 'timeGrid'],
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: '' // Hide day/week buttons
                },
                initialView: 'timeGridWeek',
                initialDate: new Date(),
                navLinks: true,
                selectable: true,
                selectMirror: true,
                allDaySlot: false,
                events: preloadedEvents,
                select: function(arg) {
                    calendar.addEvent({
                        title: '', // Add without title
                        start: arg.start,
                        end: arg.end,
                        allDay: arg.allDay
                    });
                    updateSelectedEvents();
                    calendar.unselect();
                },
                eventClick: function(arg) {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'Do you want to remove this event?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            arg.event.remove();
                            updateSelectedEvents();
                        }
                    });
                },
                editable: true,
                eventDrop: updateSelectedEvents, // Call when an event is dragged and dropped to a new date/time
                eventResize: updateSelectedEvents // Call when an event is resized to a new duration
            });

            calendar.render();

            // Function to update the hidden input with the latest selected dates
            function updateSelectedEvents() {
                var events = calendar.getEvents();
                var selectedEvents = events.map(function(event) {
                    return {
                        start: event.start.toISOString(),
                        end: event.end ? event.end.toISOString() : event.start.toISOString()
                    };
                });
                selectedDatesInput.value = JSON.stringify(selectedEvents);
            }

            // Call to update the input with initial preloaded events
            updateSelectedEvents();

            // Ensure the latest events are captured before form submission
            document.getElementById('serviceForm').addEventListener('submit', function(e) {
                updateSelectedEvents();
            });
        });
        </script>



  </body>
</html>
