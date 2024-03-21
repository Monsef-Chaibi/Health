
<!-- BrightEdge Header Code I starts -->
<!-- BrightEdge Header Code I ends -->

<!doctype html>
<html  dir="{{ (app()->getLocale() == 'ar') ? 'rtl' : 'ltr' }}" >


	@include('include/link')

<body class="page-template page-template-template-parts page-template-template-servicedetail page-template-template-partstemplate-servicedetail-php page page-id-2092 page-child parent-pageid-8">

	@include('include/header')

<section class="hero-services">
    <div class="container">
        <div class="services-row align-items-center">
            <div class="services-img right-part">
                <figure>
                    <img src="https://img.freepik.com/premium-photo/smiling-arabic-doctor-hospital-with-tablet-stethoscope_155404-185.jpg" alt="{{ __('healthcare.experienced_investors_title') }}">
                </figure>
            </div>
            <div class="services-info left-part">
                <h1>{{ __('healthcare.experienced_investors_title') }}</h1>
                <p>
                    {{ __('healthcare.experienced_investors_description') }}
                </p>

                <div class="btn-group">
                    <a href="..com/wp-content/uploads/2022/05/SCP_CC.pdf" target="_blank" class="btn">{{ __('healthcare.learn_more') }}</a>
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



	@include('include/Desc')


    <section class="fiftyfifty-section right" id="50-50-promo-high-intensity-staffing-and-management-services">
        <div class="promo-image">
            <img src="https://png.pngtree.com/background/20230330/original/pngtree-the-arab-saudi-doctor-with-stethoscope-in-hospital-arab-saudi-doctor-picture-image_2200089.jpg" alt="{{ __('healthcare.network_expansion.image_alt') }}">
        </div>
        <div class="promo-content">
            <div class="promo-content-inner">
                <h2 class="promo-title">
                    {{ __('healthcare.network_expansion.title') }}
                </h2>
                <ul>
                    <p class="my-6">{{ __('healthcare.network_expansion.strategic_partnerships_intro') }}</p>
                    @foreach(__('healthcare.network_expansion.strategic_partnerships') as $partnership)
                        <li><span style="font-size: 14pt;">{{ $partnership }}</span></li>
                    @endforeach
                    <p class="mt-6">{{ __('healthcare.network_expansion.fruitful_collaborations_intro') }}</p>
                    @foreach(__('healthcare.network_expansion.fruitful_collaborations') as $collaboration)
                        <li><span style="font-size: 14pt;">{{ $collaboration }}</span></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>



    <section class="fiftyfifty-section left" id="50-50-promo-telehealth-intensivist-programs">
        <div class="promo-image">
            <img src="https://cdn.arabsstock.com/uploads/images/9822/image-9822-old-man-appointment-two-saudi-specialist-consultant-doctors-thumbnail.webp" alt="{{ __('healthcare.advanced_analytics.image_alt') }}">
        </div>
        <div class="promo-content">
            <div class="promo-content-inner">
                <h2 class="promo-title">
                    {{ __('healthcare.advanced_analytics.title') }}
                </h2>
                <p><span style="font-size: 14pt;">{{ __('healthcare.advanced_analytics.market_data_title') }}</span></p>
                <ul>
                    @foreach(__('healthcare.advanced_analytics.market_data') as $data)
                        <li><span style="font-size: 14pt;">{{ $data }}</span></li>
                    @endforeach
                </ul>
                <p><span style="font-size: 14pt;">{{ __('healthcare.advanced_analytics.analytical_tools_title') }}</span></p>
                <ul>
                    @foreach(__('healthcare.advanced_analytics.analytical_tools') as $tool)
                        <li><span style="font-size: 14pt;">{{ $tool }}</span></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>



    <section class="benefitbox-section bg-blue" id="card-promo">
        <div class="container">
            <div class="sec-heading">
                <h2>{{ __('emergency.virtual_health_solutions_for_acute_patient_care') }}</h2>
            </div>
            <div class="benefitbox row justify-content-center">
                <div class="benefitbox-item cell-lg-3 cell-md-6">
                    <div class="benefitbox-inner">
                        <h4>{{ __('emergency.care_coordination') }}</h4>
                        <div class="benefitbox-desc">
                            <p>{{ __('emergency.care_coordination_desc') }}</p>
                        </div>
                    </div>
                </div>
                <div class="benefitbox-item cell-lg-3 cell-md-6">
                    <div class="benefitbox-inner">
                        <h4>{{ __('emergency.virtual_care') }}</h4>
                        <div class="benefitbox-desc">
                            <p>{{ __('emergency.virtual_care_desc') }}</p>
                        </div>
                    </div>
                </div>
                <div class="benefitbox-item cell-lg-3 cell-md-6">
                    <div class="benefitbox-inner">
                        <h4>{{ __('emergency.patient_engagement') }}</h4>
                        <div class="benefitbox-desc">
                            <p>{{ __('emergency.patient_engagement_desc') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('include/form')
</div>
	</div>



	@include('include/footer')


</div>

@include('include/script')

</body>
</html>
