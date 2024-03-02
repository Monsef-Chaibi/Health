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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('calendar');

          var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'interaction', 'timeGrid' ],
            header: {
              left: 'prev,next today',
              center: 'title',
              right: ''
            },
            initialView: 'timeGridWeek', // Set initial view to week view
            initialDate: new Date(), // Set initial date to today's date
            navLinks: false,
            selectable: true,
            allDaySlot: false,
            selectMirror: true,
            select: function(arg) {
              var startDate = arg.start.toLocaleString();
              var endDate = arg.end.toLocaleString();
              var defaultTitle = 'Selected range: ' + startDate + ' to ' + endDate;

              calendar.addEvent({
                title: defaultTitle,
                start: arg.start,
                end: arg.end,
                allDay: arg.allDay,
                textColor: 'white'
              });
              calendar.unselect();
            },
            eventClick: function(arg) {
              arg.event.remove();
            },
            editable: true,
            eventLimit: true
          });

          calendar.render();
        });
        </script>

