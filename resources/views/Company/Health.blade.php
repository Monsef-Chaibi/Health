
<!-- BrightEdge Header Code I starts -->
<!-- BrightEdge Header Code I ends -->

<!doctype html>
<html  dir="{{ (app()->getLocale() == 'ar') ? 'rtl' : 'ltr' }}">


    @include('include/link')

<body class="page-template page-template-template-parts page-template-template-landing-page page-template-template-partstemplate-landing-page-php page page-id-12 page-parent">

	@include('include/header')


    <!-- banner area part -->
    <section class="hero-section heroimage hasgradient">
        <img src="{{ __('health.our_services.image_src') }}" alt="{{ __('health.our_services.alt_text') }}">
        <div class="hero-wrapper">
            <div class="container">
                <div class="hero-content">
                    <h1>{{ __('health.our_services.title') }}</h1>
                    <p>{{ __('health.our_services.description') }}</p>
                    <div class="btn-group">
                        <!-- Add any buttons if needed -->
                    </div>
                </div>
            </div>
        </div>
    </section>


            <div class="main-content">

                <section class="fiftyfifty-section right brandedimage" id="50-50-promo-focused-on-clinical-solutions-and-patient-experience">
                    <div class="promo-image branded desktop-image" data-src="{{ __('health.consulting_services.image_src') }}">
                        <div class="svg-wrapper fiftyfifty-arrow green"></div>
                    </div>
                    <div class="promo-content">
                        <div class="promo-content-inner">
                            @foreach(__('health.consulting_services.sections') as $section => $details)
                                <p class="text-xl text-black m-4">{{ $details['title'] }}</p>
                                <ul>
                                    @foreach($details['items'] as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </section>





                <section class="fiftyfifty-section left brandedimage" id="50-50-promo-delivering-exceptional-patient-care">
                    <div class="promo-image branded desktop-image" data-src="{{ __('health.management_and_operation.image_src') }}">
                        <div class="svg-wrapper fiftyfifty-arrow orange"></div>
                    </div>
                    <div class="promo-content">
                        <div class="promo-content-inner">
                            <h2 class="promo-title">{{ __('health.management_and_operation.title') }}</h2>
                            @foreach(__('health.management_and_operation.sections') as $section)
                                <p class="text-xl text-black my-4">{{ $section['subtitle'] }}</p>
                                <ul>
                                    @foreach($section['items'] as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </section>


                <section class="fiftyfifty-section right brandedimage" id="50-50-promo-2022-annual-review">
                    <div class="promo-image branded desktop-image" data-src="{{ __('health.medical_services_and_innovation.image_src') }}">
                        <div class="svg-wrapper fiftyfifty-arrow pink"></div>
                    </div>
                    <div class="promo-content">
                        <div class="promo-content-inner">
                            <h2 class="promo-title">{{ __('health.medical_services_and_innovation.title') }}</h2>
                            @foreach(__('health.medical_services_and_innovation.sections') as $section)
                                <p class="text-xl text-black my-4">{{ $section['subtitle'] }}</p>
                                <ul>
                                    @foreach($section['items'] as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </section>
                <h2 style="text-align: center !important; margin-bottom:20px !important;">
                    {{ __('health.medical_services_and_innovation.discover_more') }}
                </h2>

   </div>
	</div>



	@include('include/footer')


</div>

@include('include/script')

</body>
</html>
