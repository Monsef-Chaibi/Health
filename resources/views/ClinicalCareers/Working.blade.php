
<!-- BrightEdge Header Code I starts -->
<!-- BrightEdge Header Code I ends -->

<!doctype html>
<html  dir="{{ (app()->getLocale() == 'ar') ? 'rtl' : 'ltr' }}">


    @include('include/link')

<body class="page-template page-template-template-parts page-template-template-careers page-template-template-partstemplate-careers-php page page-id-199 page-parent page-child parent-pageid-3873">

    @include('include/header')

    <section class="hero-career hero-career has-overlay jobsearch">
        <div class="hero-career-img">
            <img src="https://img.freepik.com/free-photo/doctor-crossing-arms-while-holding-stethoscope-white-coat_176474-8491.jpg?size=626&ext=jpg&ga=GA1.1.311507984.1694124201&semt=sph" alt="@lang('Reservations.hero_title1')">
        </div>
        <div class="hero-wrapper">
            <div class="container">
                <div class="hero-content">
                    <h1>@lang('Reservations.hero_title1')</h1>
                    <p>@lang('Reservations.hero_description')</p>

                </div>
                <div class="social-share mobile">
                    <span class="social-share-title">@lang('Reservations.share')</span>
                    <ul>
                        <li><a href="{{ config('Reservations.social_links.linkedin') }}" class="icon-linked-in" target="_blank"></a></li>
                        <li><a href="{{ config('Reservations.social_links.twitter') }}" class="icon-twitter" target="_blank"></a></li>
                        <li><a href="{{ config('Reservations.social_links.facebook') }}" class="icon-facebook" target="_blank"></a></li>
                        <!-- The copy text functionality would require some JavaScript to copy the current page's URL -->
                        <li><a href="#" class="copy_text icon-link" target="_blank"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="filter-form-wrapper">
            <div class="container">
                <!-- Your filter form content goes here -->
            </div>
        </div>
    </section>
    <section class="fiftyfifty-section right brandedimage" id="{{ __('Reservations.clinical_leadership_careers.section_id') }}">
        <div class="promo-image branded desktop-image" data-src="https://img.freepik.com/premium-photo/front-view-doctor-holding-stethoscope_23-2149551150.jpg?size=626&ext=jpg&ga=GA1.1.311507984.1694124201&semt=sph">
            <div class="svg-wrapper fiftyfifty-arrow green"></div>
        </div>
        <div class="promo-content">
            <div class="promo-content-inner">
                <h2 class="promo-title"><a href="#clinical_leadership">{{ __('Reservations.clinical_leadership_careers.title') }}</a></h2>
                <p>
                    {{ __('Reservations.clinical_leadership_careers.description_part1') }}
                    <a href="{{ __('Reservations.clinical_leadership_careers.technology_link_url') }}">{{ __('Reservations.clinical_leadership_careers.technology_link_text') }}</a>
                    {{ __('Reservations.clinical_leadership_careers.and') }}
                    <a href="{{ __('Reservations.clinical_leadership_careers.development_link_url') }}">{{ __('Reservations.clinical_leadership_careers.development_link_text') }}</a>
                    <a href="{{ __('Reservations.clinical_leadership_careers.clinical_leaders_link_url') }}">{{ __('Reservations.clinical_leadership_careers.clinical_leaders_link_text') }}</a>.
                </p>
                <p>{{ __('Reservations.clinical_leadership_careers.description_part2') }}</p>
            </div>
        </div>
    </section>


    <section class="fiftyfifty-section left brandedimage" id="{{ __('Reservations.staff_physician_careers.section_id') }}">
        <div class="promo-image branded desktop-image" data-src="https://img.freepik.com/free-photo/i-trying-be-best-doctor_329181-2188.jpg?size=626&ext=jpg&ga=GA1.1.311507984.1694124201&semt=sph">
            <div class="svg-wrapper fiftyfifty-arrow pink"></div>
        </div>
        <div class="promo-content">
            <div class="promo-content-inner">
                <h2 class="promo-title" id="physicians">{{ __('Reservations.staff_physician_careers.title') }}</h2>
                <p>{{ __('Reservations.staff_physician_careers.description1') }}</p>
                <p>
                    {{ __('Reservations.staff_physician_careers.description2') }}
                    <a href="{{ __('Reservations.staff_physician_careers.cme_opportunities_url') }}">{{ __('Reservations.staff_physician_careers.cme_opportunities_text') }}</a>.
                </p>
            </div>
        </div>
    </section>

    <section class="fiftyfifty-section right brandedimage" id="{{ __('Reservations.nurse_pa_careers.section_id') }}">
        <div class="promo-image branded desktop-image" data-src="https://img.freepik.com/free-photo/portrait-smiling-male-doctor_171337-1532.jpg?size=626&ext=jpg&ga=GA1.1.311507984.1694124201&semt=sph">
            <div class="svg-wrapper fiftyfifty-arrow orange"></div>
        </div>
        <div class="promo-content">
            <div class="promo-content-inner">
                <h2 class="promo-title" id="nppa">{{ __('Reservations.nurse_pa_careers.title') }}</h2>
                <p>{{ __('Reservations.nurse_pa_careers.description1') }}</p>
                <p>{{ __('Reservations.nurse_pa_careers.description2') }}</p>
            </div>
        </div>
    </section>




</div>
	</div>


	@include('include/footer')


</div>

@include('include/script')

</body>
</html>
