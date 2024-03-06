@php
    // Fetching services with their related times that are not confirmed.
    // This assumes your Service model has a 'times' relationship defined,
    // and your Time model (or equivalent) has a 'confirmed' column.
    $services = \App\Models\Service::with(['times' => function($query) {
        $query->where('confirmed', false); // Assuming 'false' signifies not confirmed
    }])->get();
@endphp


<section class="contactform-section bg-blue" id="contact-form">
    <div class="container">
        <div class="contactform-wrapper">
            <div class="contact-left">
                <h2>{{ __('messages.title') }}</h2>
                <p>{{ __('messages.description') }}</p>
                <div id="calendar"></div>

            </div>
            <div class="contact-right grey contactform">
                <div class="contactform-inner">
                    <div class="contactform-inner">
                    <form method="post" action="{{ route('reservations.store') }}" id="gform_5" class="contactform">
                        @csrf
                        <div class="gform_body gform-body">
                        <div class="gform_fields">
                            <div class="gfield width-full">
                                <label class="gfield_label">Email*</label>
                                <div class="ginput_container">
                                    <input name="email" type="email" value="" class="large" aria-required="true" aria-invalid="false" tabindex="1" required>
                                </div>
                            </div>
                            <div class="gfield width-full">
                                <label class="gfield_label">First Name*</label>
                                <div class="ginput_container">
                                    <input name="First_Name" type="text" value="" class="large" aria-required="true" aria-invalid="false" tabindex="2" required>
                                </div>
                            </div>
                            <div class="gfield width-full">
                                <label class="gfield_label">Last Name*</label>
                                <div class="ginput_container">
                                    <input name="Last_Name" type="text" value="" class="large" aria-required="true" aria-invalid="false" tabindex="3" required>
                                </div>
                            </div>
                            <div class="gfield width-full">
                                <label class="gfield_label">Phone *</label>
                                <div class="ginput_container">
                                    <input name="Phone" type="text" value="" class="large" tabindex="7" aria-required="true" aria-invalid="false" required>
                                </div>
                            </div>
                            <div class="gfield width-full">
                                <label class="gfield_label1">Choose the service type</label>
                                <div class="ginput_container">
                                    <select name="service_id" id="serviceSelect" class="large" style="padding: 10px" tabindex="4">
                                        <option hidden>Choose the service type</option>
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}">{{ app()->getLocale() === 'en' ? $service->nameEN : $service->nameAR }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="gfield width-full">
                                <label class="gfield_label1">Choose The Right Time For You</label>
                                <div class="ginput_container">
                                    <span class="text-xs">Your choice :</span>
                                    <span id="Show-Time-Selected" class="text-xs text-green-600"></span>
                                </div>
                                <input type="hidden" name="start_time" id="start_time">
                                <input type="hidden" name="end_time" id="end_time">
                            </div>
                            <div class="gfield width-full">
                                <label class="gfield_label1">The Name Of The Assignee</label>
                                <div class="">
                                    <input name="assignee_name" type="text" id="assigneeName" value="" readonly class="large" tabindex="6" required>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="gform_footer"><input type="submit" class="gform_button button" value="Submit" tabindex="0"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Modal HTML embedded directly into document -->
<div id="test-modal" class="mfp-hide white-popup">
    <p>Modal content...</p>
  </div>
<!-- Modal -->
<div class="modal fade w-full"  id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const services = @json($services);
        const serviceSelect = document.getElementById('serviceSelect');
        const assigneeName = document.getElementById('assigneeName');
        const currentLanguage = @json(app()->getLocale()); // Assuming you're using Laravel's localization

        var calendarEl = document.getElementById('calendar');
        var today = new Date(); // Get today's date
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'timeGridWeek',
            initialDate: today, // Start the calendar from today
            allDaySlot: false,
            selectable: false, // Disable arbitrary selection
            validRange: {
                start: today, // Prevent interaction with past dates
            },
            headerToolbar: {
                right: 'prev,next',
                left: 'title',
            },
            events: function(fetchInfo, successCallback, failureCallback) {
                // Initially, no events
                successCallback([]);
            },
            eventClick: function(clickInfo) {
                var startDate = new Date(clickInfo.event.startStr);
                var endDate = new Date(clickInfo.event.endStr);

                // Options to format the date as desired
                var options = { year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit', hour12: false };

                // Formatting dates
                var startFormatted = startDate.toLocaleString('en-GB', options).replace(',', '');
                var endFormatted = endDate.toLocaleString('en-GB', options).replace(',', '');

                // Display formatted dates
                document.getElementById('Show-Time-Selected').innerHTML = startFormatted + ' to ' + endFormatted;

                // Update hidden inputs directly with ISO strings for start and end times
                document.getElementById('start_time').value = clickInfo.event.startStr;
                document.getElementById('end_time').value = clickInfo.event.endStr;
            }
        });
        calendar.render();

        serviceSelect.addEventListener('change', function() {
            const selectedService = services.find(service => service.id == this.value);

            // Convert database slots to FullCalendar events
            const events = selectedService.times.map(time => ({
                title: 'Available',
                start: time.date_from,
                end: time.date_to,
                allDay: false
            }));

            // Load events into the calendar
            calendar.removeAllEvents(); // Clear any existing events first
            calendar.addEventSource(events); // Add new events

            // Update assignee name based on the current language
            const assigneeNameValue = currentLanguage === 'en' ? selectedService.UserEN : selectedService.UserAR;
            assigneeName.value = assigneeNameValue;
        });

        // Trigger change event on page load to populate initial values
        serviceSelect.dispatchEvent(new Event('change'));
    });
</script>
