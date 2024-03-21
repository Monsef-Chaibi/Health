
<!-- BrightEdge Header Code I starts -->
<!-- BrightEdge Header Code I ends -->

<!doctype html>
<html  dir="{{ (app()->getLocale() == 'ar') ? 'rtl' : 'ltr' }}">

	@include('include/link')


<body class="page-template page-template-template-parts page-template-template-landing-page page-template-template-partstemplate-landing-page-php page page-id-45717">

    @include('include/header')

    <section class="hero-section heroimage hasgradient">
        <img src="https://img.freepik.com/premium-photo/muslim-doctor-with-hijab-stethoscope-hospital_1062229-596.jpg?size=626&ext=jpg&ga=GA1.1.311507984.1694124201&semt=sph" alt="{{ __('Reservations.continuing_medical_education.image_alt') }}">
        <div class="hero-wrapper">
            <div class="container">
                <div class="hero-content">
                    <h1>{{ __('Reservations.continuing_medical_education.title') }}</h1>
                    <p>{{ __('Reservations.continuing_medical_education.description') }}</p>
                    <div class="btn-group">

                    </div>
                </div>
            </div>
        </div>
    </section>



            <div class="main-content">
                <section class="four-column-section" id="four-column-icon">
                    <div class="container">
                        <div class="sec-heading text-center">
                            <h2>{{ __('healthcare.future_healthcare_title') }}</h2>
                            <p>{{ __('healthcare.future_healthcare_description') }}</p>
                        </div>
                        <div class="four-column row justify-content-center">
                            <!-- Vision Section -->
                            <div class="four-column-item cell-lg-3 cell-md-6">
                                <div class="four-column-inner">
                                    <div class="four-column-hover">
                                        <div class="icon">
                                            <img src="https://www.scphealth.com/wp-content/uploads/2021/12/Doctor_Magenta-1.svg" alt="{{ __('healthcare.vision_title') }}">
                                        </div>
                                        <h4>{{ __('healthcare.vision_title') }}</h4>
                                        <ul>
                                            @foreach (__('healthcare.vision_list') as $item)
                                                <li>{{ $item }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Goal Section -->
                            <div class="four-column-item cell-lg-3 cell-md-6">
                                <div class="four-column-inner">
                                    <div class="four-column-hover">
                                        <div class="icon">
                                            <img src="https://www.scphealth.com/wp-content/uploads/2021/12/Retention-Rates_Magenta-1a.svg" alt="{{ __('healthcare.goal_title') }}">
                                        </div>
                                        <h4>{{ __('healthcare.goal_title') }}</h4>
                                        <ul>
                                            @foreach (__('healthcare.goal_list') as $item)
                                                <li>{{ $item }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Uniqueness Section -->
                            <div class="four-column-item cell-lg-3 cell-md-6">
                                <div class="four-column-inner">
                                    <div class="four-column-hover">
                                        <div class="icon">
                                            <img src="https://www.scphealth.com/wp-content/uploads/2021/12/Data_driven.svg" alt="{{ __('healthcare.uniqueness_title') }}">
                                        </div>
                                        <h4>{{ __('healthcare.uniqueness_title') }}</h4>
                                        <ul>
                                            @foreach (__('healthcare.uniqueness_list') as $item)
                                                <li>{{ $item }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Values Section -->
                            <div class="four-column-item cell-lg-3 cell-md-6">
                                <div class="four-column-inner">
                                    <div class="four-column-hover">
                                        <div class="icon">
                                            <img src="https://www.scphealth.com/wp-content/uploads/2021/12/Peak_Performance.svg" alt="{{ __('healthcare.values_title') }}">
                                        </div>
                                        <h4>{{ __('healthcare.values_title') }}</h4>
                                        <ul>
                                            @foreach (__('healthcare.values_list') as $item)
                                                <li>{{ $item }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="benefitbox-section bg-blue" id="card-promo">
                    <div class="container">
                        <div class="sec-heading"><h2>{{ __('hospital.heading') }}</h2></div>
                        <div class="benefitbox row justify-content-center">
                            @foreach(['core_values', 'nationwide_opportunities', 'stability_and_growth', 'employee_support'] as $section)
                                <div class="benefitbox-item cell-lg-3 cell-md-6">
                                    <a class="benefitbox-inner" href="{{ __('hospital.' . $section . '.link') }}" target="">
                                        <div class="benfiticons">
                                            <img src="{{ __('hospital.' . $section . '.image_normal') }}" alt="{{ __('hospital.' . $section . '.image_alt') }}" class="normal-image">
                                            <img src="{{ __('hospital.' . $section . '.image_hover') }}" alt="{{ __('hospital.' . $section . '.image_alt') }}" class="hover-image">
                                        </div>
                                        <h4>{!! nl2br(e(__('hospital.' . $section . '.title'))) !!}</h4>
                                        <div class="benefitbox-desc">
                                            <p>{{ __('hospital.' . $section . '.description') }}</p>
                                        </div>
                                        <span class="btn-link">{{ __('hospital.' . $section . '.link_text') }}</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>


                <section class="fiftyfifty-section right" id="50-50-promo-provider-portal">
                    <div class="promo-image">
                        <img src="{{ __('Reservations.provider_portal.image_src') }}" alt="{{ __('Reservations.provider_portal.image_alt') }}">
                    </div>
                    <div class="promo-content">
                        <div class="promo-content-inner">
                            <span class="promo-label">{{ __('Reservations.provider_portal.promo_label') }}</span>
                            <h2 class="promo-title">{{ __('Reservations.provider_portal.title') }}</h2>
                            <p>{{ __('Reservations.provider_portal.description') }}</p>
                            <ul>
                                @foreach(__('Reservations.provider_portal.features') as $feature)
                                    <li aria-level="1">{{ $feature }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </section>


                <section class="fiftyfifty-section left" id="50-50-promo-medical-leadership-clinical-development">
                    <div class="promo-image">
                        <img src="https://img.freepik.com/premium-photo/clinic-profession-people-health-care-medicine-concept-happy-group-medics-doctors-hospital-corridor_380164-120898.jpg?size=626&ext=jpg&ga=GA1.1.311507984.1694124201&semt=sph">
                    </div>
                    <div class="promo-content">
                        <div class="promo-content-inner">
                            <h2 class="promo-title">{{ __('Reservations.medical_leadership.title') }}</h2>
                            <p>{{ __('Reservations.medical_leadership.description') }}</p>
                            <ul>
                                @foreach(__('Reservations.medical_leadership.features') as $feature)
                                    <li aria-level="1">{{ $feature }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </section>


</div>
	</div>



	@include('include/footer')


</div>

@include('include/script')

</body>
</html>
