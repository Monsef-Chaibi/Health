
<!-- BrightEdge Header Code I starts -->
<!-- BrightEdge Header Code I ends -->

<!doctype html>
<html lang="en-US" >

    @include('include/link')

<body class="page-template page-template-template-parts page-template-template-contact page-template-template-partstemplate-contact-php page page-id-36644">

    @include('include/header')

    <section class="hero-contact">
        <div class="hero-contact-img">
          <img src="https://www.scphealth.com/wp-content/uploads/2021/11/Who-We-Are-1.jpg" alt="Medical professional holding their patient's hand.">
        </div>
        <div class="hero-contact-wrapper">
          <div class="container">
            <div class="hero-contact-inner">
              <h1>{{ __('Reservations.hero_title') }}</h1>
              <div class="hero-social">
                <span class="hero-social-title">{{ __('Reservations.follow_us') }}</span>
                <ul>
                  <li>
                    <a href="https://www.linkedin.com/company/scphealth" target="_blank" class="icon-linked-in"></a>
                  </li>
                  <li>
                    <a href="https://twitter.com/GrowWithSCP" target="_blank" class="icon-twitter"></a>
                  </li>
                  <li>
                    <a href="https://www.facebook.com/SCPHealth" target="_blank" class="icon-facebook"></a>
                  </li>
                  <li>
                    <a href="https://www.youtube.com/scphealth" target="_blank" class="icon-youtube"></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      @include('include/form')
      
<div class="main-content">

    {{-- <section class="tabbed-contact-form bg-blue" id="tabbed-contact-form"><div class="container">
			<div class="tabbed-contact-wrapper"><h2 class="text-white">{{ __('Reservations.Title') }}</h2>
                <div class="tabbed-contact-wrapper">
					<div class="tabbed-contact"><div class="contact-tab">
                        <div class="form-tab" data-slide="1">
                            </div></div><div class="tabbed-contact-form-slider"><div class="tabbed-contact-title-item contactform">
								<div class="contact-right">
                                    <form method="post" action="https://go.scp-health.com/l/105652/2023-01-30/qr45lr" id="gform_1" class="contactform">
                                        <div class="gform_body gform-body">
                                            <div class="gform_fields">
                                                <div class="gfield width-full">
                                                    <label class="gfield_label">{{ __('Reservations.email') }}</label>
                                                    <div class="ginput_container">
                                                        <input name="Email" type="email" value="" class="large" aria-required="true" aria-invalid="false" tabindex="0" required>
                                                    </div>
                                                </div>
                                                <div class="gfield width-full">
                                                    <label class="gfield_label">{{ __('Reservations.first_name') }}</label>
                                                    <div class="ginput_container">
                                                        <input name="First Name" type="text" value="" class="large" aria-required="true" aria-invalid="false" tabindex="0" required>
                                                    </div>
                                                </div>
                                                <div class="gfield width-full">
                                                    <label class="gfield_label">{{ __('Reservations.last_name') }}</label>
                                                    <div class="ginput_container">
                                                        <input name="Last Name" type="text" value="" class="large" aria-required="true" aria-invalid="false" tabindex="0" required>
                                                    </div>
                                                </div>
                                                <div class="gfield width-full">
                                                    <label class="gfield_label">{{ __('Reservations.job_title') }}</label>
                                                    <div class="ginput_container">
                                                        <input name="Job Title" type="text" value="" class="large" aria-required="true" aria-invalid="false" tabindex="0" required>
                                                    </div>
                                                </div>
                                                <div class="gfield width-full">
                                                    <label class="gfield_label">{{ __('Reservations.hospital_name') }}</label>
                                                    <div class="ginput_container">
                                                        <input name="Company" type="text" value="" class="large" aria-required="true" aria-invalid="false" tabindex="0" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gform_footer">
                                            <input type="submit" class="gform_button button" value="{{ __('Reservations.submit') }}" tabindex="0">
                                        </div>
                                    </form>
                                </div>

<div class="custom-frm"></div></div></div>
					</div>
				</div></div>
		</div>
    </section> --}}
    {{-- <section class="three-column-section" id="three-column-promo">
		<div class="container">
            <div class="three-column-wrapper">
                <div class="three-column row justify-content-center">
                    <div class="three-column-item cell-lg-4 cell-md-6 text-center">
                        <a class="three-column-inner" href="https://emb.patientwallet.com/" target="_blank">
                            <div class="three-column-icons">
                                <img src="https://www.scphealth.com/wp-content/uploads/2021/10/patient-billing.svg" alt="{{ __('Reservations.patient_billing_alt') }}">
                            </div>
                            <h4>{{ __('Reservations.best_price') }}</h4>
                        </a>
                    </div>
                    <div class="three-column-item cell-lg-4 cell-md-6 text-center">
                        <a class="three-column-inner" href="https://www.myscphealth.com/" target="_blank">
                            <div class="three-column-icons">
                                <img src="https://www.scphealth.com/wp-content/uploads/2021/10/provider-portal.svg" alt="{{ __('Reservations.provider_portal_alt') }}">
                            </div>
                            <h4>{{ __('Reservations.the_best_workers') }}</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
	</section> --}}
</div>
	</div>


	@include('include/footer')


</div>

@include('include/script')

</body>
</html>
