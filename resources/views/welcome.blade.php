
<!doctype html>
<html  dir="{{ (app()->getLocale() == 'ar') ? 'rtl' : 'ltr' }}">

	@include('include/link')

    
<body class="home page-template page-template-template-parts page-template-template-home-page page-template-template-partstemplate-home-page-php page page-id-22">

	@include('include/header')

	<!-- banner area part -->
	<section class="hero-section "><div class="hero-banner">
        <img src="{{ asset(__('messages.Firstimg')) }}" alt="SCP Health - Your strategic health care partner, providing quality health solutions to all health care services.">
    </div><div class="hero-wrapper">
				<div class="container">
					<div class="hero-content">
                        <h1>{{ __('messages.welcomeTitle') }}</h1>
                        <p>{!! __('messages.heroContent') !!}</p>
                        <div class="btn-group">
                            <a href="{{ route('Health') }}" target="_self" class="btn">
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
                                                        <li><a class="btn-link" href="{{ route('Health') }}">{{ __('messages.emergencyMedicine') }}</a></li>
                                                        <li><a class="btn-link" href="{{ route('Hospital') }}">{{ __('messages.hospitalMedicine') }}</a></li>
                                                        <li><a class="btn-link" href="{{ route('Critical') }}">{{ __('messages.criticalCareMedicine') }}</a></li>
                                                    </ul>
                                                </div>
                                                <div class="gca-column one-half">
                                                    <p style="font-weight: 400;"><strong>{{ __('messages.solutions') }}</strong></p>
                                                    <ul style="color: #e87e24;">
                                                        <li><a class="btn-link" href="">{{ __('messages.careDelivery') }}</a></li>
                                                        <li><a class="btn-link" href="{{ route('Clinical') }}">{{ __('messages.clinicalIntegration') }}</a></li>
                                                        <li><a class="btn-link" href="">{{ __('messages.clinicalWorkforceOptimization') }}</a></li>
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
                                                <span class="asset-type">{{ __('messages.guide') }}</span>
                                                <a href=".resource/the-no-surprises-act-full-of-surprises/" class="title">{{ __('messages.noSurprisesActTitle') }}</a>
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
                                                    <li><span style="color: #000000;">{{ __('messages.nationwideOpportunities') }}</span></li>
                                                    <li><span style="color: #000000;">{{ __('messages.workLifeBalance') }}</span></li>
                                                    <li><span style="color: #000000;">{{ __('messages.leadingBenefits') }}</span></li>
                                                    <li><span style="color: #000000;">{{ __('messages.marketBasedCompensation') }}</span></li>
                                                    <li><span style="color: #000000;">{{ __('messages.remoteCareDelivery') }}</span></li>
                                                    <li><span style="color: #000000;">{{ __('messages.residencyPositions') }}</span></li>
                                                    <li><span style="color: #000000;">{{ __('messages.careerDevelopment') }}</span></li>
                                                    <li><span style="color: #000000;">{{ __('messages.clinicalTechnologyTools') }}</span></li>
                                                    <li><span style="color: #000000;">{{ __('messages.ongoingTrainingAndEducation') }}</span></li>
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
                                                    <li><span style="color: #000000;">{{ __('messages.valuesBasedEnvironment') }}</span></li>
                                                    <li><span style="color: #000000;">{{ __('messages.remoteHybridInPersonOpportunities') }}</span></li>
                                                    <li><span style="color: #000000;">{{ __('messages.companyStabilityGrowth') }}</span></li>
                                                    <li><span style="color: #000000;">{{ __('messages.significantEmployeeSupport') }}</span></li>
                                                    <li><span style="color: #000000;">{{ __('messages.workLifeBalanceJoin') }}</span></li>
                                                    <li><span style="color: #000000;">{{ __('messages.comprehensiveBenefitsJoin') }}</span></li>
                                                    <li><span style="color: #000000;">{{ __('messages.marketBasedCompensationJoin') }}</span></li>
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
    <section class="sidebartab-section bg-blue" id="sidebar-slider">
        <div class="container">
            <div class="sec-heading text-center">
                <h2>{{ __('messages.solution_healthSolutions') }}</h2>
                <p>{{ __('messages.solution_healthSolutionsDescription') }}</p>
            </div>
            <div class="sidebartabs justify-content-center">
                <div class="sidebartab-left">
                    <ul class="tabs">
                        <li>
                            <a href="javascript:;" rel="#tab-1" title="{{ __('messages.solution_careDelivery') }}">
                                <img src="https://www.scphealth.com/wp-content/uploads/2023/10/Hands_Health_Orange.png" alt="{{ __('messages.solution_careDelivery') }}">
                                {{ __('messages.solution_careDelivery') }}
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" rel="#tab-2" title="{{ __('messages.solution_clinicalStaffing') }}">
                                <img src="https://www.scphealth.com/wp-content/uploads/2023/10/Doctor_Call_Orange.png" alt="{{ __('messages.solution_clinicalStaffing') }}">
                                {{ __('messages.solution_clinicalStaffing') }}
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" rel="#tab-3" title="{{ __('messages.solution_clinicalWorkforceOptimization') }}">
                                <img src="https://www.scphealth.com/wp-content/uploads/2023/10/Doctors_Orange.png" alt="{{ __('messages.solution_clinicalWorkforceOptimization') }}">
                                {{ __('messages.solution_clinicalWorkforceOptimization') }}
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" rel="#tab-4" title="{{ __('messages.solution_documentationRevenueCycle') }}">
                                <img src="https://www.scphealth.com/wp-content/uploads/2023/10/Document_Orange.png" alt="{{ __('messages.solution_documentationRevenueCycle') }}">
                                {{ __('messages.solution_documentationRevenueCycle') }}
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" rel="#tab-5" title="{{ __('messages.solution_virtualHealth') }}">
                                <img src="https://www.scphealth.com/wp-content/uploads/2023/10/Technology_Orange.png" alt="{{ __('messages.solution_virtualHealth') }}">
                                {{ __('messages.solution_virtualHealth') }}
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" rel="#tab-6" title="{{ __('messages.solution_advancedCareDashboard') }}">
                                <img src="https://www.scphealth.com/wp-content/uploads/2023/10/ACH_Orange.png" alt="{{ __('messages.solution_advancedCareDashboard') }}">
                                {{ __('messages.solution_advancedCareDashboard') }}
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" rel="#tab-7" title="{{ __('messages.solution_clinicalIntegration') }}">
                                <img src="https://www.scphealth.com/wp-content/uploads/2023/10/Health_Cycle_Orange.png" alt="{{ __('messages.solution_clinicalIntegration') }}">
                                {{ __('messages.solution_clinicalIntegration') }}
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="sidebartab-right">
                    <div id="tab-1" class="tab-content text-white">
                        <h4 class="tab-title">
                            <img src="https://www.scphealth.com/wp-content/uploads/2023/10/Hands_Health_Orange.png" alt="{{ __('messages.sol_careDelivery_alt') }}">
                            {{ __('messages.sol_careDelivery') }}
                        </h4>
                        <div class="desc-wrap">
                            <p style="font-size: 14pt;">
                                {{ __('messages.sol_careDelivery_description') }}
                                <a href="{{ url('/healthcare-solutions/care-delivery/') }}">{{ __('messages.sol_careDelivery_linkText') }}</a>,
                                {{ __('messages.sol_careDelivery_continuation') }}
                            </p>
                            <ul style="color: #e87e24;">
                                <li><span style="font-size: 14pt; color: #ffffff;">{{ __('messages.sol_scheduling') }}</span></li>
                                <li><span style="font-size: 14pt; color: #ffffff;">{{ __('messages.sol_standardizationOfCare') }}</span></li>
                                <li><span style="font-size: 14pt; color: #ffffff;">{{ __('messages.sol_inPersonCareDelivery') }}</span></li>
                                <li><span style="font-size: 14pt; color: #ffffff;">{{ __('messages.sol_virtualCareDelivery') }}</span></li>
                                <li><span style="font-size: 14pt; color: #ffffff;">{{ __('messages.sol_dischargeProcesses') }}</span></li>
                            </ul>
                        </div>
                    </div>

                    <div id="tab-2" class="tab-content text-white">
                        <h4 class="tab-title">
                            <img src="https://www.scphealth.com/wp-content/uploads/2023/10/Doctor_Call_Orange.png" alt="{{ __('messages.cs_alt') }}">
                            {{ __('messages.cs_title') }}
                        </h4>
                        <div class="desc-wrap">
                            <p style="text-align: justify;">
                                <span style="font-size: 14pt;">
                                    {{ __('messages.cs_description') }}
                                    <a href="{{ url('/healthcare-solutions/clinical-staffing/') }}" target="_blank" rel="noopener">{{ __('messages.cs_linkText') }}</a>,
                                    {{ __('messages.cs_continuation') }}
                                </span>
                            </p>
                            <p>{{ __('messages.cs_mySCP') }}</p>
                            <p><span style="font-size: 14pt;"><strong>{{ __('messages.cs_recruitingRetention') }}</strong></span></p>
                            <ul style="color: #e87e24;">
                                <li><span style="font-size: 14pt; color: #ffffff;">{{ __('messages.cs_screening') }}</span></li>
                                <li><span style="font-size: 14pt; color: #ffffff;">{{ __('messages.cs_providerResources') }}</span></li>
                                <li><span style="font-size: 14pt; color: #ffffff;">{{ __('messages.cs_training') }}</span></li>
                                <li><span style="font-size: 14pt; color: #ffffff;">{{ __('messages.cs_recruiters') }}</span></li>
                            </ul>
                            <p><span style="font-size: 14pt;"><strong>{{ __('messages.cs_developmentEngagement') }}</strong></span></p>
                            <ul style="color: #e87e24;">
                                <li><span style="font-size: 14pt; color: #ffffff;">{{ __('messages.cs_mlc') }}</span></li>
                                <li><span style="font-size: 14pt; color: #ffffff;">{{ __('messages.cs_support') }}</span></li>
                                <li><span style="font-size: 14pt; color: #ffffff;">{{ __('messages.cs_leadershipDevelopment') }}</span></li>
                                <li><span style="font-size: 14pt; color: #ffffff;">{{ __('messages.cs_educationOpportunities') }}</span></li>
                            </ul>
                        </div>
                    </div>

                    <div id="tab-3" class="tab-content text-white">
                        <h4 class="tab-title">
                            <img src="{{ asset('path/to/image/Doctors_Orange.png') }}" alt="{{ __('messages.cwo_alt') }}">
                            {{ __('messages.cwo_title') }}
                        </h4>
                        <div class="desc-wrap">
                            <p style="text-align: justify;">
                                <span style="font-size: 14pt;">{{ __('messages.cwo_description_1') }}</span>
                            </p>
                            <p style="text-align: justify;">
                                <span style="font-size: 14pt;">{{ __('messages.cwo_description_2') }}</span>
                            </p>
                            <p><strong><span style="font-size: 14pt;"><a href="{{ url('path/to/clinical-workforce-optimization') }}" target="_blank" rel="noopener">{{ __('messages.cwo_linkText') }}</a></span><span style="font-size: 14pt;"> includes:</span></strong></p>
                            <ul style="color: #e87e24;">
                                @foreach(__('messages.cwo_list') as $item)
                                    <li><span style="font-size: 14pt; color: #ffffff;">{{ $item }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div id="tab-4" class="tab-content text-white">
                        <h4 class="tab-title">
                            <img src="{{ asset('path/to/image/Document_Orange.png') }}" alt="{{ __('messages.drc_alt') }}">
                            {{ __('messages.drc_title') }}
                        </h4>
                        <div class="desc-wrap">
                            <p style="text-align: justify;">
                                <span style="font-size: 14pt;">{{ __('messages.drc_description') }}</span>
                            </p>
                            <p><strong><span style="font-size: 14pt;">{{ __('messages.drc_cost_management_title') }}</span></strong></p>
                            <ul style="color: #e87e24;">
                                @foreach(__('messages.drc_cost_management_list') as $item)
                                    <li><span style="font-size: 14pt; color: #ffffff;">{{ $item }}</span></li>
                                @endforeach
                            </ul>
                            <p><strong><span style="font-size: 14pt;">{{ __('messages.drc_revenue_growth_title') }}</span></strong></p>
                            <ul style="color: #e87e24;">
                                @foreach(__('messages.drc_revenue_growth_list') as $item)
                                    <li><span style="font-size: 14pt; color: #ffffff;">{{ $item }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div id="tab-5" class="tab-content text-white">
                        <h4 class="tab-title">
                            <img src="{{ asset('path/to/image/Technology_Orange.png') }}" alt="{{ __('messages.virtual_health_alt') }}">
                            {{ __('messages.virtual_health_title') }}
                        </h4>
                        <div class="desc-wrap">
                            <p style="text-align: justify;">
                                <span style="font-size: 14pt;">{{ __('messages.virtual_health_description') }}</span>
                            </p>
                            <ul style="color: #e87e24;">
                                @foreach(__('messages.virtual_health_list') as $item)
                                    <li><span style="font-size: 14pt; color: #ffffff;">{{ $item }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div id="tab-6" class="tab-content text-white">
                        <h4 class="tab-title">
                            <img src="{{ asset('path/to/image/ACH_Orange.png') }}" alt="{{ __('messages.advanced_care_home_alt') }}">
                            {{ __('messages.advanced_care_home_title') }}
                        </h4>
                        <div class="desc-wrap">
                            <p style="text-align: justify;">
                                <span style="font-size: 14pt;">{{ __('messages.advanced_care_home_description1') }}</span>
                            </p>
                            <p style="text-align: justify;">
                                <span style="font-size: 14pt;">{{ __('messages.advanced_care_home_description2') }}</span>
                            </p>
                        </div>
                    </div>

                    <div id="tab-7" class="tab-content text-white">
                        <h4 class="tab-title">
                            <img src="{{ asset('path/to/image/Health_Cycle_Orange.png') }}" alt="{{ __('messages.clinical_integration_alt') }}">
                            {{ __('messages.clinical_integration_title') }}
                        </h4>
                        <div class="desc-wrap">
                            <p style="text-align: justify;">
                                <span style="font-size: 14pt;">{{ __('messages.clinical_integration_description1') }}</span>
                            </p>
                            <p><span style="font-size: 14pt;">{{ __('messages.clinical_integration_enablement') }}</span></p>
                            <ul style="color: #e87e24;">
                                @foreach(__('messages.clinical_integration_features') as $feature)
                                    <li><span style="font-size: 14pt; color: #ffffff;">{{ $feature }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

</div>
                </div></div>
    </section>

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
            <div class="new-arrows">
                <div class="container">
                    <div class="arrows left-arrow"></div>
                    <div class="arrows right-arrow"></div>
                </div>
            </div>
            <div class="testimonial-slider-wrapper">
                <div class="slide-anm"></div>
                <div class="testimonial-slider">
                    <div class="testimonial-item">
                        <div class="testimonial-inner">
                            <p>{{ __('messages.testimonial_1_text') }}</p>
                            <div class="testimonial-meta">
                                <p><strong>{{ __('messages.testimonial_1_author') }}</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-inner">
                            <p>{{ __('messages.testimonial_2_text') }}</p>
                            <div class="testimonial-meta">
                                <p><strong>{{ __('messages.testimonial_2_author') }}</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-inner">
                            <p>{{ __('messages.testimonial_3_text') }}</p>
                            <div class="testimonial-meta">
                                <p><strong>{{ __('messages.testimonial_3_author') }}</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-inner">
                            <p>{{ __('messages.testimonial_4_text') }}</p>
                            <div class="testimonial-meta">
                                <p><strong>{{ __('messages.testimonial_4_author') }}</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-cutsom-dot"></div>
            </div>
            <div class="testimoniallogo-slider"></div>
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
                <p><span style="font-size: 14pt;">{{ __('messages.strategies_transform_icu_description') }} <a href="https://www.linkedin.com/in/erika-gabbard/" target="_blank" rel="noopener">{{ __('messages.erika_gabbard_name') }}</a> {{ __('messages.strategies_transform_icu_followup') }}</span></p>
            </div>
        </div>
    </section>


    <section class="wysiwyg-section">
        <div class="container">
            <h2 style="text-align: center;">{{ __('messages.clinical_integration_title1') }}</h2>
            <h3 style="text-align: center;">{{ __('messages.clinical_integration_subtitle') }}</h3>
            <p><span style="font-size: 14pt;">{{ __('messages.clinical_integration_description') }}</span></p>
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
                <a href="/clinicians/clinician-careers/career-results/" target="_self" class="btn-link">{{ __('messages.view_all_positions') }}</a>
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
