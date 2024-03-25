
<!doctype html>
<html  dir="{{ (app()->getLocale() == 'ar') ? 'rtl' : 'ltr' }}">

	@include('include/link')


<body  dir="{{ (app()->getLocale() == 'ar') ? 'rtl' : 'ltr' }}" class="home page-template page-template-template-parts page-template-template-home-page page-template-template-partstemplate-home-page-php page page-id-22">

	@include('include/header')

	<!-- banner area part -->
	<section class="hero-section "><div class="hero-banner">
        <img src="{{ __('messages.Firstimg') }}" alt="SCP Health - Your strategic health care partner, providing quality health solutions to all health care services.">
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
			</div></section><div class="main-content">
    <section class="tabbed-section ">
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
                                                <div class="services">
                                                    @foreach (['consultations', 'facility_management', 'ehealth_solutions'] as $service)
                                                        <p class="text-lg text-[#db8b3d] font-bold my-2">{{ __("messages.$service.title") }}</p>
                                                        <ul>
                                                            <li>{{ __("messages.$service.description") }}</li>
                                                        </ul>
                                                    @endforeach
                                                </div>

                                            </div>
                                            <a href="{{ route('Partner') }}" class="btn" target="" style="margin-top: 20px">{{ __('messages.partnerWithUs') }}</a>
                                        </div>
                                    </div>
                                    <div class="cell-lg-6">
                                        <div class="resource-wrapper">
                                            <div class="resource-inner">
                                                <a href=".resource/the-no-surprises-act-full-of-surprises/" class="img-wrapper">
                                                    <img alt="Doctor speaking with a medical professional holding a tablet." src="https://media.istockphoto.com/id/491210683/photo/arab-saudi-doctor-woman-examining-patient.jpg?s=612x612&w=0&k=20&c=rQ03mT_BUFuMJutOAPgUEV-uRkMKVxmme1fo0L65msM="/>
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
                                                <p  class="font-bold mb-4">{!! __('messages.cliniciansDescription') !!}</p>
                                                <ul style="color: #e87e24;">
                                                    @foreach(__('messages.clinicians_list') as $item)
                                                    <li class="text-md text-black">{{ $item }}</li>
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
                                                    <img alt="Health professionals engaged in a virtual meeting." src="https://media.istockphoto.com/id/1176308871/photo/middle-eastern-female-nurse.jpg?s=612x612&w=0&k=20&c=Rl0_vzTbfM2dKJ9dvyxHW9QGBWaY1rPUnqNY6jdyR6s="/>
                                                </a>
                                                <span class="asset-type"></span>

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
                                                    <li>{{ __('messages.joinOurli') }}</li>
                                                </ul>
                                            </div>
                                            <a class="btn" target="">{{ __('messages.elevateYourCareer') }}</a>
                                            <br>
                                            <a  class="btn" target="">{{ __('messages.elevateYourCareer1') }}</a>
                                        </div>
                                    </div>
                                    <div class="cell-lg-6 bg-arrow">
                                        <div class="promo-image branded desktop-image" data-src="data:image/jpeg;base64,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">
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
                <p style="margin-bottom:0px !important"><span style="font-size: 14pt;"><b>{{ __('messages.capability_hubs_national') }}</b></span></p>
                <ul style="color: #e87e24;">
                    <li><span style="font-size: 14pt; color: #63666b;">{{ __('messages.capability_hubs_national_description') }}</span></li>
                </ul>

            </div>
        </div>
    </section>


    <section class="fiftyfifty-section left brandedimage" id="50-50-promo-working-with-ahealth-care-partner">
        <div  class="promo-image branded desktop-image" data-src="https://media.istockphoto.com/id/526112999/photo/surgeon-doctor-posing-standing-with-folded-arms.jpg?s=612x612&w=0&k=20&c=c-mCjnbqG5HFehgHBnri_2DxjB9hcyqePzKs-_Q3jtk=">
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
        <div class="promo-image branded desktop-image" data-src="https://media.istockphoto.com/id/832275832/photo/female-medical-proffesional-from-middle-east-standing-in-a-hospital-hallway-looking-at-a-smart.jpg?s=612x612&w=0&k=20&c=18JBdRMS5mVGsfInw6dhwSHKyu4HLDAvWOuT_sJ7vAY=">
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
            <h3 style="text-align: center;" class="text-xl font-bold mb-4">{{ __('messages.clinical_integration_subtitle') }}</h3>
            <ul>
                <li><span style="font-size: 14pt;">{{ __('messages.clinical_integration_description') }}</span></li>
                <li><span style="font-size: 14pt;" >{{ __('messages.clinical_integration_description1') }}</span></li>
            </ul>

        </div>
    </section>


    <section class="vertical-carousel-section" id="vertical-carousel">
        <div class="vertical-carousel-wrapper">
            <div class="vertical-carousel-infobar">
                <h2>{{ __('messages.accelerate_your_clinical_career') }}</h2>
                <p>{{ __('messages.clinical_career_description') }}</p>

                <div class="slick-slider-controls"></div>
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
