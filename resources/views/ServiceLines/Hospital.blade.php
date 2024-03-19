
<!-- BrightEdge Header Code I starts -->
<!-- BrightEdge Header Code I ends -->

<!doctype html>
<html  dir="{{ (app()->getLocale() == 'ar') ? 'rtl' : 'ltr' }}">


	@include('include/link')


<body class="page-template page-template-template-parts page-template-template-servicedetail page-template-template-partstemplate-servicedetail-php page page-id-2064 page-child parent-pageid-8">

	@include('include/header')


    <section class="hero-services">
        <div class="container">
            <div class="services-row align-items-center">
                <div class="services-img right-part">
                    <figure>
                        <img src="{{ __('hospital.hero_services.image_src') }}" alt="{{ __('hospital.hero_services.image_alt') }}">
                    </figure>
                </div>
                <div class="services-info left-part">
                    <h1>{{ __('hospital.hero_services.title') }}</h1>
                    <p>{{ __('hospital.hero_services.description') }}</p>
                    <div class="btn-group">
                        <a href="{{ __('hospital.hero_services.button_link') }}" target="_blank" class="btn">{{ __('hospital.hero_services.button_text') }}</a>
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

@include('include/form')
</div>
	</div>


	@include('include/footer')


</div>

@include('include/script')

</body>
</html>
