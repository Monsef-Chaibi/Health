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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Plans /</span> Edit</h4>

              <div class="card">
                <h5 class="card-header">Plans</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>SERVICE NAME</th>
                            <th>اسم الخدمة</th>
                            <th>THE ASSIGNEE</th>
                            <th>اسم المكلف</th>
                            <th>Email</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          @foreach($services as $service)
                          <tr>
                            <td><strong>{{ $service->nameEN }}</strong></td>
                            <td>{{ $service->nameAR }}</td>
                            <td>{{ $service->UserEN }}</td>
                            <td>{{ $service->UserAR }}</td>
                            <td>{{ $service->email }}</td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="{{ route('editServiceRouteName', $service->id) }}">
                                    <i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <button type="button" onclick="confirmDeletion({{ $service->id }})" class="dropdown-item">
                                        <i class="bx bx-trash me-1"></i> Delete
                                    </button>
                                </div>
                              </div>
                            </td>
                          </tr>
                          @endforeach
                          @if(empty($services))
                          <tr>
                            <td colspan="6" rowspan="2" class=" text-center font-bold text-green-600">
                                There is no service
                            </td>
                          </tr>
                          @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mt-6">
                {{ $services->links() }}
            </div>

            @if($services->isNotEmpty())
                @foreach ($services as $service)
                    <!-- Your form or any other HTML that uses $service -->
                    <form id="deleteServiceForm{{ $service->id }}" action="{{ route('deleteServiceRouteName', $service->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                @endforeach
            @endif

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

    <script>
        function confirmDeletion(serviceId) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Construct the form ID
                    var formId = "deleteServiceForm" + serviceId;
                    // Submit the form
                    document.getElementById(formId).submit();

                    // Optionally, show a success message (may not be seen if the page reloads)
                    /*
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });
                    */
                }
            });
        }

    </script>

    @include('AdminDash/include/script')

  </body>
</html>
