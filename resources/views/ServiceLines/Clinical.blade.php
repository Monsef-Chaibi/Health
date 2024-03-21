
<!-- BrightEdge Header Code I starts -->
<!-- BrightEdge Header Code I ends -->

<!doctype html>
<html  dir="{{ (app()->getLocale() == 'ar') ? 'rtl' : 'ltr' }}">


	@include('include/link')

<body class="page-template page-template-template-parts page-template-template-servicedetail page-template-template-partstemplate-servicedetail-php page page-id-247000 page-child parent-pageid-247443">

	@include('include/header')

    <section class="hero-services">
        <div class="container">
            <div class="services-row align-items-center">
                <div class="services-img right-part">
                    <figure>
                        <img src="https://www.clevelandclinicabudhabi.ae/health-byte/-/media/images/health-byte/article-image/x-ray-imaging-is-it-a-risk-to-my-health/x-ray-imaging-is-it-a-risk-to-my-health-lg.png?h=514&w=877&la=ar-AE&hash=5E15D79065D50B3E60D066EA812889A8" alt="{{ __('clinical.hero_services.image_alt') }}">
                    </figure>src'
                </div>
                <div class="services-info left-part">
                    <h1>{{ __('clinical.hero_services.title') }}</h1>
                    <p>{{ __('clinical.hero_services.description') }}</p>
                    <div class="btn-group">
                        <a href="{{ __('clinical.hero_services.button_link') }}" target="_blank" class="btn">{{ __('clinical.hero_services.button_text') }}</a>
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

                    <section class="fiftyfifty-section right brandedimage" id="50-50-promo-achieving-a-clinically-integrated-network">
                        <div class="promo-image branded desktop-image" data-src="{{ __('clinical.clinically_integrated_network.image_src') }}"><div class=" svg-wrapper fiftyfifty-arrow pink"></div></div>
                        <div class="promo-content">
                            <div class="promo-content-inner">
                                <h2 class="promo-title">{{ __('clinical.clinically_integrated_network.title') }}</h2>
                                <p class="text-xl my-4">{{ __('clinical.clinically_integrated_network.intro') }}</p>
                                <ul>
                                    <li><span style="font-size: 14pt;">{{ __('clinical.clinically_integrated_network.plans.max_value') }}</span></li>
                                    <li><span style="font-size: 14pt;">{{ __('clinical.clinically_integrated_network.plans.continuity') }}</span></li>
                                </ul>
                                <p class="text-xl my-4">{{ __('clinical.clinically_integrated_network.market_analysis') }}</p>
                                <ul>
                                    <li><span style="font-size: 14pt;">{{ __('clinical.clinically_integrated_network.selling_points.ideal_timing') }}</span></li>
                                    <li><span style="font-size: 14pt;">{{ __('clinical.clinically_integrated_network.selling_points.profitable_sale') }}</span></li>
                                </ul>
                                <p class="text-xl mt-6">{{ __('clinical.clinically_integrated_network.post_sale_services') }}</p>
                                <ul>
                                    <li><span style="font-size: 14pt;">{{ __('clinical.clinically_integrated_network.post_sale_points.continual_support') }}</span></li>
                                    <li><span style="font-size: 14pt;">{{ __('clinical.clinically_integrated_network.post_sale_points.smooth_transition') }}</span></li>
                                </ul>
                            </div>
                        </div>
                    </section>



                    <section class="fiftyfifty-section left brandedimage" id="50-50-promo-integrated-medicine">
                        <div class="promo-image branded desktop-image" data-src="{{ __('clinical.integrated_medicine.image_src') }}">
                            <div class="svg-wrapper fiftyfifty-arrow orange"></div>
                        </div>
                        <div class="promo-content">
                            <div class="promo-content-inner">
                                <h2 class="promo-title">{{ __('clinical.integrated_medicine.title') }}</h2>
                                <p class="text-xl my-4">{{ __('clinical.integrated_medicine.wide_network') }}</p>
                                <ul>
                                    <li><span style="font-size: 14pt;">{{ __('clinical.integrated_medicine.network_benefits.access') }}</span></li>
                                    <li><span style="font-size: 14pt;">{{ __('clinical.integrated_medicine.network_benefits.quick_sale') }}</span></li>
                                </ul>
                                <p class="text-xl my-4">{{ __('clinical.integrated_medicine.fair_evaluation') }}</p>
                                <ul>
                                    <li><span style="font-size: 14pt;">{{ __('clinical.integrated_medicine.evaluation_benefits.best_value') }}</span></li>
                                    <li><span style="font-size: 14pt;">{{ __('clinical.integrated_medicine.evaluation_benefits.reliable_experience') }}</span></li>
                                </ul>
                                <p class="text-xl mt-6">{{ __('clinical.integrated_medicine.integrated_service') }}</p>
                                <ul>
                                    <li><span style="font-size: 14pt;">{{ __('clinical.integrated_medicine.service_features.marketing') }}</span></li>
                                    <li><span style="font-size: 14pt;">{{ __('clinical.integrated_medicine.service_features.deal_management') }}</span></li>
                                </ul>
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
