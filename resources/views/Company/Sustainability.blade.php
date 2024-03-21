
<!-- BrightEdge Header Code I starts -->
<!-- BrightEdge Header Code I ends -->

<!doctype html>
<html  dir="{{ (app()->getLocale() == 'ar') ? 'rtl' : 'ltr' }}">


    @include('include/link')

<body class="page-template page-template-template-parts page-template-template-landing-page page-template-template-partstemplate-landing-page-php page page-id-6524 page-child parent-pageid-12">

    @include('include/header')

    <section class="hero-section heroimage hasgradient">
        <img src="https://www.scphealth.com/wp-content/uploads/2022/10/Tech-Web-banner-scaled.jpg" alt="{{ __('hospital.hero_section.image_alt') }}">
        <div class="hero-wrapper">
            <div class="container">
                <div class="hero-content">
                    <h1>{!! __('hospital.hero_section.title') !!}</h1>
                    <p>{{ __('hospital.hero_section.description') }}</p>
                    <div class="btn-group">
                        <a href="#contact-us" class="btn">{{ __('hospital.hero_section.btn_text') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


            <div class="main-content">

                <section class="four-column-section" id="four-column-icon">
                    <div class="container">
                        <div class="sec-heading text-center">
                            <h2>{{ __('partner.clinical_workflow_technologies.title') }}</h2>
                            <p>{{ __('partner.clinical_workflow_technologies.description') }}</p>
                        </div>
                        <div class="four-column row justify-content-center">
                            @foreach(__('partner.clinical_workflow_technologies.apps') as $app)
                                <div class="four-column-item cell-lg-3 cell-md-6">
                                    <div class="four-column-inner">
                                        <div class="four-column-hover">
                                            <div class="icon">
                                                <img src="{{ $app['icon'] }}" alt="{{ $app['name'] }}">
                                            </div>
                                            <h4>{{ $app['name'] }}</h4>
                                            <p>{{ $app['description'] }}
                                                <ul>
                                                    @foreach($app['features'] as $feature)
                                                        <li>{{ $feature }}</li>
                                                    @endforeach
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>


                <section class="fiftyfifty-section right brandedimage" id="{{ __('hospital.dynamic_staffing.section_id') }}">
                    <div class="promo-image branded desktop-image" data-src="https://www.scphealth.com/wp-content/uploads/2024/01/dynamic_staffing.jpeg">
                        <div class="svg-wrapper fiftyfifty-arrow green"></div>
                    </div>
                    <div class="promo-content">
                        <div class="promo-content-inner">
                            <span class="promo-label">{{ __('hospital.dynamic_staffing.label') }}</span>
                            <h2 class="promo-title" id="dynamic-staffing">{{ __('hospital.dynamic_staffing.title') }}</h2>
                            <p>{{ __('hospital.dynamic_staffing.description') }}</p>
                            <ul>
                                @foreach(__('hospital.dynamic_staffing.list') as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                            <a class="btn" href="{{ __('hospital.dynamic_staffing.btn_link') }}" target="_self">{{ __('hospital.dynamic_staffing.btn_text') }}</a>
                        </div>
                    </div>
                </section>


                <section class="fiftyfifty-section left brandedimage" id="{{ __('hospital.clinical_education_and_training.section_id') }}">
                    <div class="promo-image branded desktop-image" data-src="https://img.freepik.com/premium-photo/smiling-arabic-doctor-hospital-with-tablet-stethoscope_155404-185.jpg">
                        <div class="svg-wrapper fiftyfifty-arrow pink"></div>
                    </div>
                    <div class="promo-content">
                        <div class="promo-content-inner">
                            <h2 class="promo-title">{!! __('hospital.clinical_education_and_training.title') !!}</h2>
                            <p>{!! __('hospital.clinical_education_and_training.description') !!}</p>
                            <a class="btn" href="{{ __('hospital.clinical_education_and_training.btn_link') }}" target="_self">{{ __('hospital.clinical_education_and_training.btn_text') }}</a>
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
