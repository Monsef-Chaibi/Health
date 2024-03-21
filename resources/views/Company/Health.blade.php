
<!-- BrightEdge Header Code I starts -->
<!-- BrightEdge Header Code I ends -->

<!doctype html>
<html  dir="{{ (app()->getLocale() == 'ar') ? 'rtl' : 'ltr' }}">


    @include('include/link')

<body class="page-template page-template-template-parts page-template-template-landing-page page-template-template-partstemplate-landing-page-php page page-id-12 page-parent">

	@include('include/header')


    <!-- banner area part -->
    <section class="hero-section heroimage hasgradient">
        <img src="https://img.freepik.com/free-photo/doctor-is-seen-writing-notes-clipboard-welllit-hospital-corridor-with-plenty-space-additional-information_157027-3117.jpg?size=626&ext=jpg&ga=GA1.1.311507984.1694124201&semt=sph" alt="{{ __('health.our_services.alt_text') }}">
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
                    <div class="promo-image branded desktop-image" data-src="https://png.pngtree.com/thumb_back/fh260/background/20230306/pngtree-doctor-student-studying-the-bones-of-skeleton-photo-image_1819701.jpg">
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
                    <div class="promo-image branded desktop-image" data-src="https://www.alraimedia.com/HTTP/mawaqaa/Website/ArticleFiles/Attachments/2018/10/19/20181018160500506.jpg">
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
                    <div class="promo-image branded desktop-image" data-src="https://www.shifaa.ma/content/uploads/2022/01/%D9%87%D9%84-%D8%AA%D8%A4%D8%AB%D8%B1-%D8%A7%D9%84%D8%B9%D9%84%D8%A7%D9%82%D8%A9-%D8%A8%D9%8A%D9%86-%D8%A7%D9%84%D8%B7%D8%A8%D9%8A%D8%A8-%D9%88%D8%A7%D9%84%D9%85%D8%B1%D9%8A%D8%B6-%D9%81%D9%8A-%D9%81%D8%A7%D8%B9%D9%84%D9%8A%D8%A9-%D8%A7%D9%84%D8%B9%D9%84%D8%A7%D8%AC%D8%9F.jpg">
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
