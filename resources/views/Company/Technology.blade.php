
<!-- BrightEdge Header Code I starts -->
<!-- BrightEdge Header Code I ends -->

<!doctype html>
<html  dir="{{ (app()->getLocale() == 'ar') ? 'rtl' : 'ltr' }}">

	@include('include/link')

<body class="page-template page-template-template-parts page-template-template-landing-page page-template-template-partstemplate-landing-page-php page page-id-6524 page-child parent-pageid-12">

    @include('include/header')

    <section class="hero-section heroimage hasgradient">
        <img src="{{ __('partner.advanced_technology_section.image_src') }}" alt="{{ __('partner.advanced_technology_section.alt_text') }}">
        <div class="hero-wrapper">
            <div class="container">
                <div class="hero-content">
                    <h1>{!! __('partner.advanced_technology_section.title') !!}</h1>
                    <p>{{ __('partner.advanced_technology_section.description') }}</p>
                    <div class="btn-group">
                        <!-- Buttons if any -->
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


                <section class="fiftyfifty-section right brandedimage" id="50-50-promo-dynamic-staffing">
                    <div class="promo-image branded desktop-image" data-src="https://www.shifaa.ma/content/uploads/2022/01/%D9%87%D9%84-%D8%AA%D8%A4%D8%AB%D8%B1-%D8%A7%D9%84%D8%B9%D9%84%D8%A7%D9%82%D8%A9-%D8%A8%D9%8A%D9%86-%D8%A7%D9%84%D8%B7%D8%A8%D9%8A%D8%A8-%D9%88%D8%A7%D9%84%D9%85%D8%B1%D9%8A%D8%B6-%D9%81%D9%8A-%D9%81%D8%A7%D8%B9%D9%84%D9%8A%D8%A9-%D8%A7%D9%84%D8%B9%D9%84%D8%A7%D8%AC%D8%9F.jpg">
                        <div class="svg-wrapper fiftyfifty-arrow green"></div>
                    </div>
                    <div class="promo-content">
                        <div class="promo-content-inner">
                            <h2 class="promo-title"><h2 id="dynamic-staffing">{{ __('partner.title') }}</h2></h2>
                            <p>{{ __('partner.description') }}</p>
                            <ul>
                                @foreach(__('partner.advantages') as $advantage)
                                    <li>{{ $advantage }}</li>
                                @endforeach
                            </ul>

                        </div>
                    </div>
                </section>

                <section class="resource-promo-comp">
                    <div class="container">
                        <div class="stories-heading">
                            <h2>{{ __('partner.innovation_expertise.title') }}</h2>
                        </div>
                        <div class="resource-promo-wrapper">
                            {{-- Main promo resource --}}
                            @php $mainResource = __('partner.innovation_expertise.resources')[0]; @endphp
                            <div class="resource-promo-img">
                                <div class="img-wrapper">
                                    <img src="https://cdn.arabsstock.com/uploads/videos/41931/clip-41931-portrait-saudi-arabian-gulf-doctor-behind-him-flag-kingdom-thumbnail.png" alt="{{ $mainResource['title'] }}">
                                </div>
                                <div class="detail-part">
                                    <h2>{{ $mainResource['title'] }}</h2>
                                    <p>{{ $mainResource['description'] }}</p>

                                </div>
                            </div>

                            {{-- Additional resources --}}
                            <div class="resource-promo-info">
                                <div class="heading-wrapper"></div>
                                <div class="resource-blog-row">
                                    @foreach(array_slice(__('partner.innovation_expertise.resources'), 1) as $resource)
                                        <div class="resource-blog-col">
                                            <div class="resource-blog-inner">
                                                <div class="resource-blog-col-top">
                                                    <h6><a href="{{ $resource['learn_more_url'] }}">{{ $resource['title'] }}</a></h6>
                                                    <p>{{ $resource['description'] }}</p>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="resource-promo-cta-block"></div>
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
