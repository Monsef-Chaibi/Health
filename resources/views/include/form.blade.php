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
                    <form method="post" action="{{ route('reservations.store') }}" id="gform_5" class="contactform" dir="{{ App::getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                        @csrf
                        <div class="gform_body gform-body">
                        <div class="gform_fields">
                            <div class="gfield width-full">
                                <label class="gfield_label">{{ App::getLocale() == 'en' ? 'Email*' : 'البريد الإلكتروني*' }}</label>
                                <div class="ginput_container">
                                    <input name="email" type="email" value="" class="large" aria-required="true" aria-invalid="false" tabindex="1" required>
                                </div>
                            </div>
                            <div class="gfield width-full">
                                <label class="gfield_label">{{ App::getLocale() == 'en' ? 'First Name*' : 'الاسم الأول*' }}</label>
                                <div class="ginput_container">
                                    <input name="First_Name" type="text" value="" class="large" aria-required="true" aria-invalid="false" tabindex="2" required>
                                </div>
                            </div>
                            <div class="gfield width-full">
                                <label class="gfield_label">{{ App::getLocale() === 'en' ? 'Last Name*' : 'اسم العائلة*' }}</label>
                                <div class="ginput_container">
                                    <input name="Last_Name" type="text" value="" class="large" aria-required="true" aria-invalid="false" tabindex="3" required>
                                </div>
                            </div>
                            <div class="gfield width-full">
                                <label class="gfield_label">{{ App::getLocale() === 'en' ? 'Phone*' : 'الهاتف*' }}</label>
                                <div class="ginput_container">
                                    <input name="Phone" type="text" value="" class="large" tabindex="7" aria-required="true" aria-invalid="false" required>
                                </div>
                            </div>
                            <div class="gfield width-full">
                                <label class="gfield_label1">{{ App::getLocale() === 'en' ? 'Choose the service type' : 'اختر نوع الخدمة' }}</label>
                                <div class="ginput_container">
                                    <select name="service_id" id="serviceSelect" class="large" style="padding: 10px" tabindex="4" aria-required="true" aria-invalid="false" required>
                                        <option hidden>{{ App::getLocale() === 'en' ? 'Choose the service type' : 'اختر نوع الخدمة' }}</option>
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}">{{ app()->getLocale() === 'en' ? $service->nameEN : $service->nameAR }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="gfield width-full">
                                <label class="gfield_label1">{{ App::getLocale() === 'en' ? 'Choose The Right Time For You' : 'اختر الوقت المناسب لك' }}</label>
                                <div class="flex items-center justify-center">
                                    <button type="button" class="bg-[#20ab95] text-white rounded-md px-1 py-1 hover:bg-[#008872] transition" onclick="openModal('modelConfirm')">
                                        {{ App::getLocale() === 'en' ? 'Click to choice Time' : 'انقر لاختيار الوقت' }}
                                    </button>
                                </div>
                                <div class="ginput_container">
                                    <span class="text-xs">{{ App::getLocale() === 'en' ? 'Your choice :' : 'اختيارك :' }}</span>
                                    <span id="Show-Time-Selected" class="text-xs text-green-600" required></span>
                                </div>
                                <input type="hidden" name="start_time" id="start_time">
                                <input type="hidden" name="end_time" id="end_time">
                            </div>
                            <div class="gfield width-full">
                                <label class="gfield_label1">{{ App::getLocale() === 'en' ? 'The Name Of The Assignee' : 'اسم المكلف' }}</label>
                                <div class="">
                                    <input name="assignee_name" type="text" id="assigneeName" value="" readonly class="large" tabindex="6" required>
                                </div>
                            </div>
                               <!-- Optional Website Field -->
            <div class="gfield width-full">
                <label class="gfield_label">{{ app()->getLocale() == 'en' ? 'Your Website (Optional)' : 'موقعك الإلكتروني (اختياري)' }}</label>
                <div class="ginput_container">
                    <input name="website" type="url" value="" class="large" aria-invalid="false">
                </div>
            </div>

            <!-- Category Field -->
            <div class="gfield width-full">
                <label class="gfield_label">{{ app()->getLocale() == 'en' ? 'You are?' : 'أنت؟' }}</label>
                <div class="ginput_container">
                    <select name="category" id="categorySelect" class="large" onchange="if (this.value=='other'){document.getElementById('otherCategory').style.display='block';}else{document.getElementById('otherCategory').style.display='none';}" required>
                        <option value="">{{ app()->getLocale() == 'en' ? 'Choose...' : 'اختر...' }}</option>
                        <option value="clinic_owner">{{ app()->getLocale() == 'en' ? 'Clinic Owner' : 'صاحب عيادة' }}</option>
                        <option value="dentist">{{ app()->getLocale() == 'en' ? 'Dentist' : 'طبيب أسنان' }}</option>
                        <option value="dermatologist">{{ app()->getLocale() == 'en' ? 'Dermatologist' : 'طبيب جلدية' }}</option>
                        <option value="local_investor">{{ app()->getLocale() == 'en' ? 'Local Investor' : 'مستثمر محلي' }}</option>
                        <option value="foreign_investor">{{ app()->getLocale() == 'en' ? 'Foreign Investor' : 'مستثمر أجنبي' }}</option>
                        <option value="other">{{ app()->getLocale() == 'en' ? 'Other' : 'أخرى' }}</option>
                    </select>
                    <input name="other_category" type="text" id="otherCategory" value="" class="large" style="display:none;" placeholder="{{ app()->getLocale() == 'en' ? 'Other (Please specify)' : 'أخرى (يرجى التوضيح)' }}">
                </div>
            </div>

            <!-- Service Type Field -->
            <div class="gfield width-full">
                <label class="gfield_label">{{ app()->getLocale() == 'en' ? 'Type of Service Required' : 'نوع الخدمة المطلوبة' }}</label>
                <div class="ginput_container">
                    <select name="service_type" id="serviceTypeSelect" class="large" onchange="if (this.value=='other'){document.getElementById('otherServiceType').style.display='block';}else{document.getElementById('otherServiceType').style.display='none';}" required>
                        <option value="">{{ app()->getLocale() == 'en' ? 'Choose...' : 'اختر...' }}</option>
                        <option value="consultation">{{ app()->getLocale() == 'en' ? 'Consultation' : 'استشارة' }}</option>
                        <option value="management_and_operation">{{ app()->getLocale() == 'en' ? 'Management and Operation Service' : 'خدمة الإدارة والتشغيل' }}</option>
                        <option value="clinic_establishment">{{ app()->getLocale() == 'en' ? 'Clinic/Clinical Complex Establishment' : 'تأسيس عيادة/ مجمع طبي' }}</option>
                        <option value="buy_or_sell_clinic">{{ app()->getLocale() == 'en' ? 'Buy or Sell Clinic/Clinical Complex' : 'شراء أو بيع عيادة/ مجمع طبي' }}</option>
                        <option value="partnership_with_arkan">{{ app()->getLocale() == 'en' ? 'Partnership with Arkan' : 'الشراكة مع أركان' }}</option>
                        <option value="other">{{ app()->getLocale() == 'en' ? 'Other' : 'أخرى' }}</option>
                    </select>
                    <input name="other_service_type" type="text" id="otherServiceType" value="" class="large" style="display:none;" placeholder="{{ app()->getLocale() == 'en' ? 'Other (Please specify)' : 'أخرى (يرجى التوضيح)' }}">
                </div>
            </div>

            <!-- Brief Message Field -->
            <div class="gfield width-full">
                <label class="gfield_label">{{ app()->getLocale() == 'en' ? 'Brief Message About Your Request' : 'رسالة مختصرة عن طلبك' }}</label>
                <div class="ginput_container">
                    <textarea name="brief_message" id="briefMessage" class="large" aria-invalid="false"></textarea>
                </div>
            </div>
        </div>
                        </div>
                        </div>
                        <div class="gform_footer"><input type="submit" class="gform_button button"  value="{{ App::getLocale() === 'en' ? 'Submit' : 'إرسال' }}" tabindex="0"></div>
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
