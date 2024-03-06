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
    <!-- Core JS -->
    <script src="{{ asset('AdminDash/AdminDash/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('AdminDash/AdminDash/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('AdminDash/AdminDash/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('AdminDash/AdminDash/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('AdminDash/AdminDash/assets/vendor/js/menu.js') }}"></script>

    <!-- Vendors JS -->
    <script src="{{ asset('AdminDash/AdminDash/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('AdminDash/AdminDash/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('AdminDash/AdminDash/assets/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

