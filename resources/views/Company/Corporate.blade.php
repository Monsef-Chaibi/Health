
<!-- BrightEdge Header Code I starts -->
<!-- BrightEdge Header Code I ends -->

<!doctype html>

<html  dir="{{ (app()->getLocale() == 'ar') ? 'rtl' : 'ltr' }}">

	@include('include/link')

<body class="page-template page-template-template-parts page-template-template-landing-page page-template-template-partstemplate-landing-page-php page page-id-2121 page-child parent-pageid-12">
    @include('include/header')

    <section class="hero-section heroimage hasgradient">
        <img src="https://www.scphealth.com/wp-content/uploads/2022/10/corp_careers_hero-scaled.jpg" alt="{{ __('hospital.hero_section1.image_alt') }}">
        <div class="hero-wrapper">
            <div class="container">
                <div class="hero-content">
                    <h1>{{ __('hospital.hero_section1.title') }}</h1>
                    <p>{{ __('hospital.hero_section1.description') }}</p>
                    <div class="btn-group">
                        <a href="{{ __('hospital.hero_section1.btn_link') }}" class="btn">{{ __('hospital.hero_section1.btn_text') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <div class="main-content">

            <section class="benefitbox-section bg-blue" id="card-promo">
                <div class="container">
                    <div class="sec-heading"><h2>{{ __('hospital.heading') }}</h2></div>
                    <div class="benefitbox row justify-content-center">
                        @foreach(['core_values', 'nationwide_opportunities', 'stability_and_growth', 'employee_support'] as $section)
                            <div class="benefitbox-item cell-lg-3 cell-md-6">
                                <a class="benefitbox-inner" href="{{ __('hospital.' . $section . '.link') }}" target="">
                                    <div class="benfiticons">
                                        <img src="{{ __('hospital.' . $section . '.image_normal') }}" alt="{{ __('hospital.' . $section . '.image_alt') }}" class="normal-image">
                                        <img src="{{ __('hospital.' . $section . '.image_hover') }}" alt="{{ __('hospital.' . $section . '.image_alt') }}" class="hover-image">
                                    </div>
                                    <h4>{!! nl2br(e(__('hospital.' . $section . '.title'))) !!}</h4>
                                    <div class="benefitbox-desc">
                                        <p>{{ __('hospital.' . $section . '.description') }}</p>
                                    </div>
                                    <span class="btn-link">{{ __('hospital.' . $section . '.link_text') }}</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>


	@include('include/Desc')


</div>
	</div>



	@include('include/footer')


</div>

@include('include/script')

</body>
</html>
