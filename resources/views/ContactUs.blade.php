
<!-- BrightEdge Header Code I starts -->
<!-- BrightEdge Header Code I ends -->

<!doctype html>
<html lang="en-US" >

    @include('include/link')
    <style>
        .plan {
            display: grid !important;
            grid-template-columns: repeat(3, 1fr) !important;
            grid-gap: 15px !important;
            margin: 50px !important;
            padding: 0px 20px !important;
        }
        .pricing-table {
           box-shadow: 0px 0px 18px #ccc !important;
           text-align: center !important;
           padding: 30px 0px !important;
           border-radius: 5px !important;
           position: relative !important;
        }
        .pricing-table .head {
            border-bottom: 1px solid #eee !important;
            padding-bottom: 50px !important;
            transition: all 0.5s ease !important;
        }
        .pricing-table:hover .head {
           border-bottom: 1px solid #db8b3d !important;
        }
        .pricing-table .head .title {
            margin-bottom: 20px !important;
            font-size: 20px !important;
            font-weight: 700 !important;
        }
        .pricing-table .content .price {
            background: linear-gradient(to right, #db8b3d 0%, #db8b3d 100%) !important;
            width: 90px !important;
            height: 90px !important;
            margin: auto !important;
            line-height: 90px !important;
            border-radius: 50% !important;
            border: 5px solid #fff !important;
            box-shadow: 0px 0px 10px #ccc !important;
            margin-top: -50px !important;
            transition: all 0.5s ease !important;
        }
        .pricing-table:hover .content .price {
            transform: scale(1.2) !important;
        }
        .pricing-table .content .price h1 {
            color: #fff !important;
            font-size: 30px !important;
            font-weight: 700 !important;
        }
        .pricing-table .content ul {
           list-style-type: none !important;
           margin-bottom: 20px !important;
           padding-top: 10px !important;
        }
        .pricing-table .content ul li {
            margin: 20px 0px !important;
            font-size: 17px !important;
            font-weight: bold !important;
            color: #555 !important;
        }
        .pricing-table .content .sign-up {
            background: linear-gradient(to right, #db8b3d 0%, #db8b3d 100%) !important;
            border-radius: 40px !important;
            font-weight: 500 !important;
            position: relative !important;
            display: inline-block !important;
        }
        .pricing-table .btnplan {
            color: #fff !important;
            padding: 14px 40px !important;
            display: inline-block !important;
            text-align: center !important;
            font-weight: 600 !important;
            transition: all 0.3s linear !important;
            border: none !important;
            font-size: 14px !important;
            text-transform: capitalize !important;
            position: relative !important;
            text-decoration: none !important;
            margin: 2px !important;
            z-index: 9999 !important;
            border-radius: 50px !important;
        }
        .pricing-table .btnplan:hover {
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3) !important;
        }
        .pricing-table .btnplan.bordered {
            z-index: 50 !important;
            color: #333 !important;
        }
        .pricing-table:hover .btnplan.bordered {
            color: #fff !important;
        }
        .pricing-table .btnplan.bordered:after {
            background: #fff none repeat scroll 0 0 !important;
            border-radius: 50px !important;
            content: "" !important;
            height: 100% !important;
            left: 0 !important;
            position: absolute !important;
            top: 0 !important;
            transition: all 0.3s linear !important;
            width: 100% !important;
            z-index: -1 !important;
            transform: scale(1) !important;
        }
        .pricing-table:hover .btnplan.bordered:after {
            opacity: 0 !important;
            transform: scale(0) !important;
        }
        @media screen and (max-width: 768px) {
           .plan {
                grid-template-columns: repeat(2, 1fr) !important;
            }
        }
        @media screen and (max-width: 600px) {
           .plan {
                grid-template-columns: 1fr !important;
            }
        }
        </style>


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
      <div class="plan">
        <div class="pricing-table gprice-single">
            <div class="head">
                 <h4 class="title">Basic</h4>
            </div>
            <div class="content">
                <div class="price flex items-center justify-center ">
                    <h1 class="mt-4">$19</h1>
                </div>
                <ul>
                    <li>5 GB Ram</li>
                    <li>40GB SSD Cloud Storage</li>
                    <li>Month Subscription</li>
                    <li>Responsive Framework</li>
                    <li> <del>Monthly Billing Software</del> </li>
                    <li> <del>1 Free Website</del></li>

                </ul>
                <div class="sign-up">
                    <a href="#" class="btnplan bordered radius">Signup Now</a>
                </div>
            </div>
        </div>
        <div class="pricing-table gprice-single">
            <div class="head">
                 <h4 class="title">Basic</h4>
            </div>
            <div class="content">
                <div class="price flex items-center justify-center ">
                    <h1 class="mt-4">$19</h1>
                </div>
                <ul>
                    <li>5 GB Ram</li>
                    <li>40GB SSD Cloud Storage</li>
                    <li>Month Subscription</li>
                    <li>Responsive Framework</li>
                    <li> <del>Monthly Billing Software</del> </li>
                    <li> <del>1 Free Website</del></li>

                </ul>
                <div class="sign-up">
                    <a href="#" class="btnplan bordered radius">Signup Now</a>
                </div>
            </div>
        </div>
        <div class="pricing-table gprice-single">
            <div class="head">
                 <h4 class="title">Basic</h4>
            </div>
            <div class="content">
                <div class="price flex items-center justify-center ">
                    <h1 class="mt-4">$19</h1>
                </div>
                <ul>
                    <li>5 GB Ram</li>
                    <li>40GB SSD Cloud Storage</li>
                    <li>Month Subscription</li>
                    <li>Responsive Framework</li>
                    <li> <del>Monthly Billing Software</del> </li>
                    <li> <del>1 Free Website</del></li>

                </ul>
                <div class="sign-up">
                    <a href="#" class="btnplan bordered radius">Signup Now</a>
                </div>
            </div>
        </div>
            <div class="pricing-table gprice-single">
                <div class="head">
                    <h4 class="title">Standard</h4>
                </div>
                <div class="content">
                    <div class="price flex items-center justify-center ">
                        <h1 class="mt-4">$29</h1>
                    </div>
                    <ul>
                        <li>5 GB Ram</li>
                        <li>40GB SSD Cloud Storage</li>
                        <li>Month Subscription</li>
                        <li>Responsive Framework</li>
                        <li>Monthly Billing Software</li>
                       <li><del>1 Free Website</del></li>

                    </ul>
                    <div class="sign-up">
                        <a href="#" class="btnplan bordered radius">Signup Now</a>
                    </div>
                </div>
            </div>
                <div class="pricing-table gprice-single">
                    <div class="head">
                        <h4 class="title">Premium</h4>
                    </div>
                    <div class="content">
                        <div class="price flex items-center justify-center ">
                            <h1 class="mt-4">$39</h1>
                        </div>
                        <ul>
                            <li>5 GB Ram</li>
                            <li>40GB SSD Cloud Storage</li>
                            <li>Month Subscription</li>
                            <li>Responsive Framework</li>
                            <li>Monthly Billing Software</li>
                            <li>1 Free Website</li>
                        </ul>
                        <div class="sign-up">
                            <a href="#" class="btnplan bordered radius">Signup Now</a>
                        </div>
                    </div>
                </div>
    </div>
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
