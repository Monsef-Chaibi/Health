
<!-- BrightEdge Header Code I starts -->
<!-- BrightEdge Header Code I ends -->

<!doctype html>
<html  dir="{{ (app()->getLocale() == 'ar') ? 'rtl' : 'ltr' }}" >

@include('include/link')


<body class="page-template page-template-template-parts page-template-template-servicedetail page-template-template-partstemplate-servicedetail-php page page-id-2051 page-child parent-pageid-8">

	@include('include/header')


    <section class="hero-services">
        <div class="container">
            <div class="services-row align-items-center">
                <div class="services-img right-part">
                    <figure>
                        <img src="https://www.scphealth.com/wp-content/uploads/2021/12/Emergency-Medicine_new.jpg" alt="{{ __('emergency.hero_title') }}">
                    </figure>
                </div>
                <div class="services-info left-part">
                    <h1>{{ __('emergency.hero_title') }}</h1>
                    <p>{!! __('emergency.hero_description') !!}</p>
                    <div class="btn-group">
                        <a target="_blank" class="btn">{{ __('emergency.learn_more') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('include/Desc')

    <section class="fiftyfifty-section right " id="50-50-promo-management-by-emergency-medicine-specialists">
        <div class="promo-image">
            <img src="https://www.scphealth.com/wp-content/uploads/2021/12/management_services-2.jpg">
        </div>
        <div class="promo-content">
            <div class="promo-content-inner">
                <h2 class="promo-title">{{ __('emergency.workshops_and_training') }}</h2>
                <p>{{ __('emergency.workshops_training_description') }}</p>

                <h2 class="promo-title">{{ __('emergency.custom_strategic_consulting') }}</h2>
                <ul>
                    <li>{{ __('emergency.strategic_consulting_description_1') }}</li>
                    <li>{{ __('emergency.strategic_consulting_description_2') }}</li>
                    <li>{{ __('emergency.strategic_consulting_description_3') }}</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="fiftyfifty-section left " id="50-50-promo-virtual-triage-program">
        <div class="promo-image">
            <img src="https://www.scphealth.com/wp-content/uploads/2021/12/Telehealth_Intensivist.jpg">
        </div>
        <div class="promo-content">
            <div class="promo-content-inner">
                <h2 class="promo-title">{{ __('emergency.continuous_support_every_step') }}</h2>
                <ul>
                    <li>{{ __('emergency.support_details.we_provide_support_at_every_step') }}</li>
                    <li>{{ __('emergency.support_details.help_in_choosing_location') }}</li>
                    <li>{{ __('emergency.support_details.operational_support_to_ensure_efficiency') }}</li>
                </ul>
                <h2 class="promo-title">{{ __('emergency.personal_support_and_flexibility') }}</h2>
                <ul>
                    <li>{{ __('emergency.personal_advisor') }}</li>
                </ul>
                <p class="mt-6 font-bold">{{ __('emergency.with_arkan') }}</p>
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

    <section class="employee-testimonial-section" id="employee-testimonial">
        <div class="container">
            <div class="employee-testimonial-inner bg-blue">
                <div class="employee-testimonial-img">
                    <img src="https://www.scphealth.com/wp-content/uploads/2021/12/speech_bubble2.png" alt="{{ __('emergency.hear_from_our_partners') }}">
                </div>
                <div class="employee-testimonial-content">
                    <h3>{{ __('emergency.hear_from_our_partners') }}</h3>
                    <p>"{{ __('emergency.partner_testimonial') }}"</p>
                    <div class="authormeta">
                        <span class="authorname">{{ __('emergency.testimonial_author') }}</span>
                        <span class="authortitle">{{ __('emergency.testimonial_author_title') }}</span>
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
