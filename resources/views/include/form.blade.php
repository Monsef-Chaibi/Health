<section class="contactform-section bg-blue" id="contact-form">
    <div class="container">
        <div class="contactform-wrapper">
            <div class="contact-left">
                <h2>{{ __('messages.title') }}</h2>
                <p>{{ __('messages.description') }}</p>
                <ul style="color: #e87e24;">
                    <li><span style="font-size: 14pt; color: #ffffff;">{{ __('messages.options.schedule_vip_meeting') }}</span></li>
                    <li><span style="font-size: 14pt; color: #ffffff;">{{ __('messages.options.request_consultation') }}</span></li>
                    <li><span style="font-size: 14pt; color: #ffffff;">{{ __('messages.options.speak_with_clinical_expert') }}</span></li>
                    <li><span style="font-size: 14pt; color: #ffffff;">{{ __('messages.options.chat_with_recruiter') }}</span></li>
                    <li><span style="font-size: 14pt; color: #ffffff;">{{ __('messages.options.get_in_touch_with_scheduler') }}</span></li>
                    <li><span style="font-size: 14pt; color: #ffffff;">{{ __('messages.options.contact_sales_representative') }}</span></li>
                </ul>
            </div>
            <div class="contact-right grey contactform">
                <div class="contactform-inner">
                    <form method="post" id="gform_5" class="contactform">
                        @csrf
                        <div class="gform_body gform-body">
                            <div class="gform_fields">
                                @foreach(['email' => 'email', 'first_name' => 'text', 'last_name' => 'text', 'job_title' => 'text', 'hospital_name' => 'text', 'system_affiliation' => 'text', 'phone' => 'text'] as $name => $type)
                                    <div class="gfield width-full">
                                        <label class="gfield_label">{{ __('messages.form.' . $name) }}{{ $name === 'email' || $name === 'first_name' || $name === 'last_name' || $name === 'hospital_name' ? '*' : '' }}</label>
                                        <div class="ginput_container">
                                            <input name="{{ $name }}" type="{{ $type }}" value="" class="large" aria-required="{{ in_array($name, ['email', 'first_name', 'last_name', 'hospital_name']) ? 'true' : 'false' }}" aria-invalid="false" tabindex="1" {{ in_array($name, ['email', 'first_name', 'last_name', 'hospital_name']) ? 'required' : '' }}>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="gform_footer">
                                <input type="submit" class="gform_button button" value="{{ __('messages.form.submit_button') }}" tabindex="0">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
