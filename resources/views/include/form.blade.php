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
                                    <select name="service_id" id="serviceSelect" class="large" style="padding: 10px" tabindex="4" aria-required="true" aria-invalid="false" required>
                                        <option hidden>Choose the service type</option>
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}">{{ app()->getLocale() === 'en' ? $service->nameEN : $service->nameAR }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="gfield width-full">
                                <label class="gfield_label1">Choose The Right Time For You</label>
                                <div class="flex items-center justify-center">
                                    <button type="button" class="bg-[#20ab95] text-white rounded-md px-1 py-1 hover:bg-[#008872] transition" onclick="openModal('modelConfirm')">
                                        Click to choice Time
                                    </button>
                                </div>
                                <div class="ginput_container">
                                    <span class="text-xs">Your choice :</span>
                                    <span id="Show-Time-Selected" class="text-xs text-green-600" required></span>
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


<!-- Trigger Button -->

<!-- Modal Structure -->
<div id="modelConfirm" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
    <div class="relative top-[7rem] mx-auto shadow-xl rounded-md bg-white max-w-[80%]" onclick="event.stopPropagation();">
        <div class="p-6 pt-0 text-center overflow-auto" style="max-height: 80vh;">
            <!-- Modal Content Here -->
            <div id="calendar" class="md:h-[500px] xl:h-[650px] 2xl:h-[700px]"></div>
            <!-- Optional Close Button -->
        </div>
    </div>
</div>



<script type="text/javascript">
    var calendar; // Define calendar globally

    window.openModal = function(modalId) {
        document.getElementById(modalId).style.display = 'block';
        document.getElementsByTagName('body')[0].classList.add('overflow-y-hidden');

        // Initialize or re-render the calendar when the modal is opened
        setTimeout(function() {
            if (!calendar) { // Check if the calendar is not already initialized
                var calendarEl = document.getElementById('calendar');
                var today = new Date();
                calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'timeGridWeek',
                    initialDate: today,
                    allDaySlot: false,
                    selectable: false,
                    validRange: {
                        start: today,
                    },
                    headerToolbar: {
                        center: 'prev,next',
                        left: 'title',
                        right: '',
                    },
                    dateClick: function(info) {
    // Format the selected date and display it before closing the modal
    var selectedDate = info.dateStr; // Gets the selected date in YYYY-MM-DD format
    var options = { year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit', hour12: false };
    var formattedDate = new Date(selectedDate).toLocaleString('en-GB', options).replace(',', '');

    // Assuming you have an element with ID 'Show-Date-Selected' to display the selected date
    document.getElementById('Show-Date-Selected').innerHTML = "Selected Date: " + formattedDate;

    // Now close the modal
    closeModal('modelConfirm');
},

                    events: function(fetchInfo, successCallback, failureCallback) {
                        successCallback([]);
                    },
                    eventClick: function(clickInfo) {
                        // Event click logic here, for example:
                        var startDate = new Date(clickInfo.event.startStr);
                        var endDate = new Date(clickInfo.event.endStr);
                        var options = { year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit', hour12: false };
                        var startFormatted = startDate.toLocaleString('en-GB', options).replace(',', '');
                        var endFormatted = endDate.toLocaleString('en-GB', options).replace(',', '');

                        document.getElementById('Show-Time-Selected').innerHTML = startFormatted + ' to ' + endFormatted;
                        document.getElementById('start_time').value = clickInfo.event.startStr;
                        document.getElementById('end_time').value = clickInfo.event.endStr;
                    },
                     dateClick: function() {
                        closeModal('modalId'); // Assuming 'modalId' is the ID of your modal
                    },
                });
                calendar.render();
            } else {
                calendar.render();
            }
        }, 10); // A small delay to ensure the modal is fully displayed
    };

    window.closeModal = function(modalId) {
        document.getElementById(modalId).style.display = 'none';
        document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden');
    };


    document.addEventListener('DOMContentLoaded', function() {
        // Modal closing logic, applied after the DOM is fully loaded
        document.getElementById('modelConfirm').addEventListener('click', function(event) {
            closeModal('modelConfirm');
        });

        document.querySelectorAll('.modal-content').forEach(function(element) {
            element.addEventListener('click', function(event) {
                event.stopPropagation();
            });
        });

        document.onkeydown = function(event) {
            event = event || window.event;
            if (event.keyCode === 27) {
                closeModal('modelConfirm');
            }
        };
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const services = JSON.parse('@json($services)'); // Update according to your data passing mechanism
        const serviceSelect = document.getElementById('serviceSelect');
        const assigneeName = document.getElementById('assigneeName');
        const currentLanguage = 'en'; // Or dynamically set your current language

        serviceSelect.addEventListener('change', function() {
            const selectedService = services.find(service => service.id == this.value);

            const events = selectedService.times.map(time => ({
                title: 'Available',
                start: time.date_from,
                end: time.date_to,
                allDay: false
            }));

            if (calendar) {
                calendar.removeAllEvents();
                calendar.addEventSource(events);
            }

            const assigneeNameValue = currentLanguage === 'en' ? selectedService.UserEN : selectedService.UserAR;
            assigneeName.value = assigneeNameValue;
        });

        // Optionally, trigger the change event on page load
        // serviceSelect.dispatchEvent(new Event('change'));
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Select the node that will be observed for mutations
    var targetNode = document.getElementById('Show-Time-Selected');

    // Options for the observer (which mutations to observe)
    var config = { characterData: true, subtree: true, childList: true };

    // Callback function to execute when mutations are observed
    var callback = function(mutationsList, observer) {
        for(var mutation of mutationsList) {
            if (mutation.type === 'childList' || mutation.type === 'characterData') {
                console.log('A change occurred: ', targetNode.innerText);
                document.getElementById('modelConfirm').style.display = 'none';
                 document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden');
            }
        }
    };

    // Create an instance of the MutationObserver with the callback
    var observer = new MutationObserver(callback);

    // Start observing the target node for configured mutations
    observer.observe(targetNode, config);

    // Later, you can stop observing
    // observer.disconnect();
});

</script>
