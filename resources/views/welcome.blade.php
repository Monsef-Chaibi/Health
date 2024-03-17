
<!doctype html>
<html  dir="{{ (app()->getLocale() == 'ar') ? 'rtl' : 'ltr' }}">

	@include('include/link')


<body  dir="{{ (app()->getLocale() == 'ar') ? 'rtl' : 'ltr' }}" class="home page-template page-template-template-parts page-template-template-home-page page-template-template-partstemplate-home-page-php page page-id-22">

	@include('include/header')

	<!-- banner area part -->
	<section class="hero-section "><div class="hero-banner">
        <img src="{{ asset(__('messages.Firstimg')) }}" alt="SCP Health - Your strategic health care partner, providing quality health solutions to all health care services.">
    </div><div class="hero-wrapper">
				<div class="container">
					<div class="hero-content">
                        <h1>
                            {{ __('messages.welcomeTitle') }}
                            <span class="text-base font-bold">
                            {{ __('messages.welcomeTitle2') }}
                            </span>
                        </h1>
                        <p class="text-sm">{!! __('messages.heroContent') !!}</p>
                        <div class="btn-group">
                            <a href="{{ route('Health') }}" target="_self" class="btn" style="margin-top: 45px">
                                {{ __('messages.aboutUs') }}
                            </a>
                        </div>
                    </div>
				</div>
			</div></section><div class="main-content"><section class="tabbed-section ">
        <div class="tb-wrapper">
            <div class="tb-top">
                <div class="container">
                    <div class="tb-inner">
                        <ul class="tab">
                            <li class="">
                                <a href="javascript:;" rel="#tab-11" title="{{ __('messages.healthCareExecutives') }}">
                                    <span>{{ __('messages.healthCareExecutives') }}</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="javascript:;" rel="#tab-12" title="{{ __('messages.clinicians') }}">
                                    <span>{{ __('messages.clinicians') }}</span>
                                </a>
                            </li>
                            <li class="lottie-anm">
                                <a href="javascript:;" rel="#tab-13" title="{{ __('messages.joinOurTeam') }}">
                                    <span>{{ __('messages.joinOurTeam') }}</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="tb-bottom-wrap">
                <div class="container">
                    <div class="tb-bottom list-style">
                        <div class="tab-wrapper">
                            <ul class="tab">
                                <li class="tab-item">
                                    <a href="javascript:;" rel="#tab-11" title="{{ __('messages.healthCareExecutivesTitle') }}">
                                        <span>{{ __('messages.healthCareExecutivesTitle') }}</span>
                                        <i class="icon-arrow-down"></i>
                                    </a>
                                </li>
                            </ul>
                            <div id="tab-11" class="tab-content">
                                <div class="row">
                                    <div class="cell-lg-6">
                                        <div class="tab-content-inner tick-list-style">
                                            <h2>{{ __('messages.healthCareExecutivesTitle') }}</h2>
                                            <div class="desc-wrapper">
                                                <p style="font-weight: 400;">{{ __('messages.healthCareExecutivesDesc') }}</p>
                                                <div class="gca-column one-half first">
                                                    <p style="font-weight: 400;"><strong>{{ __('messages.services') }}</strong></p>
                                                    <ul style="color: #e87e24;">
                                                        @foreach(__('messages.emergencyMedicine_list') as $item)
                                                        <li class="text-base font-bold text-black">{{ $item }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="gca-column one-half">
                                                    <p style="font-weight: 400;"><strong>{{ __('messages.solutions') }}</strong></p>
                                                    <ul style="color: #e87e24;">
                                                        @foreach(__('messages.solutions_list') as $item)
                                                        <li class="text-base font-bold text-black">{{ $item }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <a href="{{ route('Partner') }}" class="btn" target="" style="margin-top: 20px">{{ __('messages.partnerWithUs') }}</a>
                                        </div>
                                    </div>
                                    <div class="cell-lg-6">
                                        <div class="resource-wrapper">
                                            <div class="resource-inner">
                                                <a href=".resource/the-no-surprises-act-full-of-surprises/" class="img-wrapper">
                                                    <img alt="Doctor speaking with a medical professional holding a tablet." src="https://www.scphealth.com/wp-content/uploads/2022/10/CWO_arrow-1568x882.jpg"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-wrapper">
                            <ul class="tab">
                                <li class="tab-item ">
                                    <a href="javascript:;" rel="#tab-12" title="{{ __('messages.cliniciansTitle') }}">
                                        <span>{{ __('messages.cliniciansTitle') }}</span>
                                        <i class="icon-arrow-down"></i>
                                    </a>
                                </li>
                            </ul>
                            <div id="tab-12" class="tab-content">
                                <div class="row">
                                    <div class="cell-lg-6">
                                        <div class="tab-content-inner tick-list-style">
                                            <h2>{{ __('messages.cliniciansTitle') }}</h2>
                                            <div class="desc-wrapper">
                                                <p style="font-weight: 400;">{!! __('messages.cliniciansDescription') !!}</p>
                                                <ul style="color: #e87e24;">
                                                    @foreach(__('messages.clinicians_list') as $item)
                                                    <li class="text-base font-bold text-black">{{ $item }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <a href="..com/clinicians/clinician-careers/" class="btn" target="">{{ __('messages.searchAllClinicalOpenings') }}</a>
                                        </div>
                                    </div>
                                    <div class="cell-lg-6 ">
                                        <div class="resource-wrapper">
                                            <div class="resource-inner">
                                                <a href=".blog/9-be-attitudes-for-making-connections-in-virtual-practice/" class="img-wrapper">
                                                    <img alt="Health professionals engaged in a virtual meeting." src="https://www.scphealth.com/wp-content/uploads/2022/10/Hospital_Virtual_Care_Delivery.jpg"/>
                                                </a>
                                                <span class="asset-type"></span>
                                                <a href=".blog/9-be-attitudes-for-making-connections-in-virtual-practice/" class="title">{{ __('messages.beAttitudesVirtualPractice') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-wrapper">
                            <ul class="tab">
                                <li class="tab-item lottie-anm">
                                    <a href="javascript:;" rel="#tab-13" title="{{ __('messages.joinOurTeam1') }}">
                                        <span>{{ __('messages.joinOurTeam1') }}</span>
                                        <i class="icon-arrow-down"></i>
                                    </a>
                                </li>
                            </ul>
                            <div id="tab-13" class="tab-content">
                                <div class="row">
                                    <div class="cell-lg-6">
                                        <div class="tab-content-inner tick-list-style">
                                            <h2>{{ __('messages.joinOurTeam1') }}</h2>
                                            <div class="desc-wrapper">
                                                <p style="font-weight: 400;">{{ __('messages.joinOurTeamDescription') }}</p>
                                                <ul style="color: #e87e24;">
                                                    @foreach(__('messages.clinicians_list') as $item)
                                                         <li><span style="color: #000000;">{{$item}}</span></li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                            <a href="/company/corporate-careers/" class="btn" target="">{{ __('messages.elevateYourCareer') }}</a>
                                        </div>
                                    </div>
                                    <div class="cell-lg-6 bg-arrow">
                                        <div class="promo-image branded desktop-image" data-src="https://www.scphealth.com/wp-content/uploads/2023/08/SCP_Dashboard_Join_Our_Team.jpg">
                                            <div class="tab_anm fiftyfifty-arrow pink"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                            </div>
                </div>
            </div>
        </div>
    </section>

	@include('include/Desc')


    <section class="four-column-section" id="four-column-icon">
        <div class="container">
            <div class="sec-heading text-center">
                <h2>{{ __('messages.clinical_services_results_title') }}</h2>
                <p><span style="font-size: 14pt;">{{ __('messages.continuous_improvement') }}</span></p>
            </div>
            <div class="four-column row justify-content-center">
                <div class="four-column-item cell-lg-3 cell-md-6">
                    <div class="four-column-inner">
                        <div class="four-column-hover">
                            <div class="icon">
                                <img src="https://www.scphealth.com/wp-content/uploads/2022/09/Collaboration.png" alt="{{ __('messages.collaboration_alt') }}">
                            </div>
                            <h4>{{ __('messages.clinician_retention_rate') }}</h4>
                        </div>
                    </div>
                </div>
                <div class="four-column-item cell-lg-3 cell-md-6">
                    <div class="four-column-inner">
                        <div class="four-column-hover">
                            <div class="icon">
                                <img src="https://www.scphealth.com/wp-content/uploads/2022/09/Confidence.png" alt="{{ __('messages.confidence_alt') }}">
                            </div>
                            <h4>{{ __('messages.mips_scores') }}</h4>
                        </div>
                    </div>
                </div>
                <div class="four-column-item cell-lg-3 cell-md-6">
                    <div class="four-column-inner">
                        <div class="four-column-hover">
                            <div class="icon">
                                <img src="https://www.scphealth.com/wp-content/uploads/2022/10/Reduce_Patient_Transistion_icon.png" alt="{{ __('messages.reduce_patient_transition_alt') }}">
                            </div>
                            <h4>{{ __('messages.locums_usage') }}</h4>
                        </div>
                    </div>
                </div>
                <div class="four-column-item cell-lg-3 cell-md-6">
                    <div class="four-column-inner">
                        <div class="four-column-hover">
                            <div class="icon">
                                <img src="https://www.scphealth.com/wp-content/uploads/2021/12/Revenue_Cycle-1.svg" alt="{{ __('messages.revenue_cycle_alt') }}">
                            </div>
                            <h4>{{ __('messages.average_collections_increase') }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonial-section" id="logo-testimonial">
        <div class="container">
            <div class="sec-heading text-center">
                <h2>{{ __('messages.health_care_services_experience_title') }}</h2>
            </div>
            <swiper-container class="mySwiper my-20" navigation="true">
                @foreach(__('messages.swipper_list') as $item)
                    <swiper-slide>
                        {!! nl2br(e($item)) !!}
                    </swiper-slide>
                @endforeach
            </swiper-container>
        </div>
    </section>

    <section class="fiftyfifty-section right" id="50-50-promo-capability-hubs">
        <div class="promo-image">
            <img src="https://www.scphealth.com/wp-content/uploads/2023/05/Screen-Shot-2023-05-31-at-9.04.42-AM-1.png" alt="{{ __('messages.capability_hubs_title') }}">
        </div>
        <div class="promo-content">
            <div class="promo-content-inner">
                <span class="promo-label">{{ __('messages.capability_hubs_intro') }}</span>
                <h2 class="promo-title">{{ __('messages.capability_hubs_title') }}</h2>
                <p><span style="font-size: 14pt;">{{ __('messages.capability_hubs_description') }}</span></p>
                <p><span style="font-size: 14pt;"><b>{{ __('messages.capability_hubs_local') }}</b></span></p>
                <ul style="color: #e87e24;">
                    <li><span style="font-size: 14pt; color: #63666b;">{{ __('messages.capability_hubs_local_description') }}</span></li>
                </ul>
                <p><span style="font-size: 14pt;"><b>{{ __('messages.capability_hubs_regional') }}</b></span></p>
                <ul style="color: #e87e24;">
                    <li><span style="font-size: 14pt; color: #63666b;">{{ __('messages.capability_hubs_regional_description') }}</span></li>
                </ul>
                <p><span style="font-size: 14pt;"><b>{{ __('messages.capability_hubs_national') }}</b></span></p>
                <ul style="color: #e87e24;">
                    <li><span style="font-size: 14pt; color: #63666b;">{{ __('messages.capability_hubs_national_description') }}</span></li>
                </ul>
                <a class="btn" href="{{ route('Partner') }}" target="_self">{{ __('messages.capability_hubs_cta') }}</a>
            </div>
        </div>
    </section>


    <section class="fiftyfifty-section left brandedimage" id="50-50-promo-working-with-ahealth-care-partner">
        <div class="promo-image branded desktop-image" data-src="https://www.scphealth.com/wp-content/uploads/2023/11/SCP_Health_Care_Partner.jpg">
            <div class="svg-wrapper fiftyfifty-arrow pink"></div>
        </div>
        <div class="promo-content">
            <div class="promo-content-inner">
                <h2 class="promo-title">{{ __('messages.working_with_health_care_partner_title') }}</h2>
                <p><span style="font-size: 14pt;">{{ __('messages.working_with_health_care_partner_description') }}</span></p>
                <a class="btn" href="{{ route('Working') }}" target="_self">{{ __('messages.join_our_team') }}</a>
            </div>
        </div>
    </section>


    <section class="fiftyfifty-section right brandedimage" id="50-50-promo-4-strategies-to-transform-the-icu-by-bringing-the-c-suite-to-the-bedside">
        <div class="promo-image branded desktop-image" data-src="https://www.scphealth.com/wp-content/uploads/2021/11/GettyImages-695218436-1-scaled.jpeg">
            <div class="svg-wrapper fiftyfifty-arrow green"></div>
        </div>
        <div class="promo-content">
            <div class="promo-content-inner">
                <h2 class="promo-title">{{ __('messages.strategies_transform_icu_title') }}</h2>
                @for ($i = 1; $i <= 2; $i++)
                    <p class="text-xl my-8 font-bold text-[#db8b3d]">{{ __('messages.strategies_transform_icu_title_'.$i) }}</p>
                        <ul style="color: #e87e24;">
                            @foreach(__('messages.strategies_transform_icu_list_'.$i) as $item)
                                <li><span style="font-size: 14pt; color: #000000;">{{$item}}</span></li>
                            @endforeach
                        </ul>
                @endfor
            </div>
        </div>
    </section>


    <section class="wysiwyg-section">
        <div class="container">
            <h2 style="text-align: center;">{{ __('messages.clinical_integration_title1') }}</h2>
            <h3 style="text-align: center;">{{ __('messages.clinical_integration_subtitle') }}</h3>
            <p><span style="font-size: 14pt;">{{ __('messages.clinical_integration_description') }}</span></p>
            <p><span style="font-size: 14pt;">{{ __('messages.clinical_integration_description1') }}</span></p>
        </div>
    </section>
    <section class="success-stories-comp" id="resource-slider">
        <div class="slider-wrapper">
            <div class="stories-slider">
                {{-- Success Stories Images --}}
                <div class="item">
                    <div class="stories-img"><img src="https://www.scphealth.com/wp-content/uploads/2022/09/NSA-Web-banner-1-scaled.jpg" alt="{{ __('messages.story1_alt') }}"></div>
                </div>
                <div class="item">
                    <div class="stories-img"><img src="https://www.scphealth.com/wp-content/uploads/2022/09/CCM-Web-banner_c-scaled.jpg" alt="{{ __('messages.story2_alt') }}"></div>
                </div>
                <div class="item">
                    <div class="stories-img"><img src="https://www.scphealth.com/wp-content/uploads/2022/10/Documentation_Revenue_Cycle_Management_Case-Study_01-scaled.jpg" alt="{{ __('messages.story3_alt') }}"></div>
                </div>
            </div>
            <div class="stories-desc-wrapper">
                <div class="stories-desc">
                    <ul class="stories-tab">
                        <li class="active-tab">{{ __('messages.tab1') }}</li>
                        <li>{{ __('messages.tab2') }}</li>
                        <li>{{ __('messages.tab3') }}</li>
                    </ul>
                    <div class="stories-title-slider">
                        {{-- Success Stories Titles and Descriptions --}}
                        <div class="stories-title-item">
                            <h3>{{ __('messages.title1') }}</h3>
                            <p>{{ __('messages.description1') }}</p>
                            <a href="..com/resource/how-to-establish-an-emergency-medicine-hospital-medicine-joint-operations-committee/" class="btn-link orange">{{ __('messages.cta1') }}</a>
                        </div>
                        <div class="stories-title-item">
                            <h3>{{ __('messages.title2') }}</h3>
                            <p>{{ __('messages.description2') }}</p>
                            <a href="..com/resource/20-key-questions-to-align-your-emergency-medicine-and-hospital-medicine-teams/" class="btn-link orange">{{ __('messages.cta2') }}</a>
                        </div>
                        <div class="stories-title-item">
                            <h3>{{ __('messages.title3') }}</h3>
                            <p>{{ __('messages.description3') }}</p>
                            <a href="..com/resource/5-collaborative-solutions-to-prevent-ed-physician-and-hospitalist-conflict/" class="btn-link orange">{{ __('messages.cta3') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-controls">
            <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </section>

    <section class="vertical-carousel-section" id="vertical-carousel">
        <div class="vertical-carousel-wrapper">
            <div class="vertical-carousel-infobar">
                <h2>{{ __('messages.accelerate_your_clinical_career') }}</h2>
                <p>{{ __('messages.clinical_career_description') }}</p>

                <div class="slick-slider-controls"></div>
            </div>
            <div class="vertical-carousel-rightside">
                <div class="vertical-carousel-slider">
                    <div class="vertical-carousel-slide">
                        <a target="_blank" class="vertical-carousel-slide-inner">
                            <div class="content-part">
                                <h4>{{ __('messages.emergency_medicine_physician') }}</h4>
                            </div>
                            <div class="img-wrapper">
                                <img src="https://www.scphealth.com/wp-content/uploads/2021/11/GettyImages-1030323574-1-265x320.jpg" alt="{{ __('messages.emergency_medicine_physician_alt') }}">
                            </div>
                        </a>
                    </div>
                    <div class="vertical-carousel-slide">
                        <a target="_blank" class="vertical-carousel-slide-inner">
                            <div class="content-part">
                                <h4>{{ __('messages.emergency_medicine_np_pa') }}</h4>
                            </div>
                            <div class="img-wrapper">
                                <img src="https://www.scphealth.com/wp-content/uploads/2021/11/GettyImages-1209225824-265x320.jpg" alt="{{ __('messages.emergency_medicine_np_pa_alt') }}">
                            </div>
                        </a>
                    </div>
                    <div class="vertical-carousel-slide">
                        <a target="_blank" class="vertical-carousel-slide-inner">
                            <div class="content-part">
                                <h4>{{ __('messages.acute_nurse_practitioner') }}</h4>
                            </div>
                            <div class="img-wrapper">
                                <img src="https://www.scphealth.com/wp-content/uploads/2021/12/GettyImages-1209225824-4-265x320.jpg" alt="{{ __('messages.acute_nurse_practitioner_alt') }}">
                            </div>
                        </a>
                    </div>
                    <div class="vertical-carousel-slide">
                        <a target="_blank" class="vertical-carousel-slide-inner">
                            <div class="content-part">
                                <h4>{{ __('messages.medical_director') }}</h4>
                            </div>
                            <div class="img-wrapper">
                                <img src="https://www.scphealth.com/wp-content/uploads/2021/12/how_we_do_it-265x320.jpg" alt="{{ __('messages.medical_director_alt') }}">
                            </div>
                        </a>
                    </div>
                    <div class="vertical-carousel-slide">
                        <a target="_blank" class="vertical-carousel-slide-inner">
                            <div class="content-part">
                                <h4>{{ __('messages.hospital_medicine_physician') }}</h4>
                            </div>
                            <div class="img-wrapper">
                                <img src="https://www.scphealth.com/wp-content/uploads/2021/12/GettyImages-1271564743_new-265x320.jpg" alt="{{ __('messages.hospital_medicine_physician_alt') }}">
                            </div>
                        </a>
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
