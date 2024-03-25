<section class="sidebartab-section bg-blue" id="sidebar-slider">
    <div class="container">
        <div class="sec-heading text-center">
            <h2>{{ __('messages.solution_healthSolutions') }}</h2>
            <p>{{ __('messages.solution_healthSolutionsDescription') }}</p>
        </div>
        <div class="sidebartabs justify-content-center">
            <div class="sidebartab-left">
                <ul class="tabs">
                    <li>
                        <a href="javascript:;" rel="#tab-1" title="{{ __('messages.solution_careDelivery') }}">
                            <img src="https://www.scphealth.com/wp-content/uploads/2023/10/Hands_Health_Orange.png" alt="{{ __('messages.solution_careDelivery') }}">
                            {{ __('messages.solution_careDelivery') }}
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" rel="#tab-2" title="{{ __('messages.solution_clinicalStaffing') }}">
                            <img src="https://www.scphealth.com/wp-content/uploads/2023/10/Doctor_Call_Orange.png" alt="{{ __('messages.solution_clinicalStaffing') }}">
                            {{ __('messages.solution_clinicalStaffing') }}
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" rel="#tab-3" title="{{ __('messages.solution_clinicalWorkforceOptimization') }}">
                            <img src="https://www.scphealth.com/wp-content/uploads/2023/10/Doctors_Orange.png" alt="{{ __('messages.solution_clinicalWorkforceOptimization') }}">
                            {{ __('messages.solution_clinicalWorkforceOptimization') }}
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" rel="#tab-4" title="{{ __('messages.solution_documentationRevenueCycle') }}">
                            <img src="https://www.scphealth.com/wp-content/uploads/2023/10/Document_Orange.png" alt="{{ __('messages.solution_documentationRevenueCycle') }}">
                            {{ __('messages.solution_documentationRevenueCycle') }}
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" rel="#tab-5" title="{{ __('messages.solution_virtualHealth') }}">
                            <img src="https://www.scphealth.com/wp-content/uploads/2023/10/Technology_Orange.png" alt="{{ __('messages.solution_virtualHealth') }}">
                            {{ __('messages.solution_virtualHealth') }}
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" rel="#tab-6" title="{{ __('messages.solution_advancedCareDashboard') }}">
                            <img src="https://www.scphealth.com/wp-content/uploads/2023/10/ACH_Orange.png" alt="{{ __('messages.solution_advancedCareDashboard') }}">
                            {{ __('messages.solution_advancedCareDashboard') }}
                        </a>
                    </li>

                </ul>
            </div>

            <div class="sidebartab-right">
                <div id="tab-1" class="tab-content text-white">
                    <h4 class="tab-title text-lg font-bold mb-2">
                        <img src="https://www.scphealth.com/wp-content/uploads/2023/10/Hands_Health_Orange.png" alt="{{ __('messages.sol_careDelivery_alt') }}">
                        {{ __('messages.sol_careDelivery') }}
                    </h4>
                    <div class="desc-wrap">
                        <p style="font-size: 14pt;">
                            {{ __('messages.sol_careDelivery_description') }}
                        </p>
                        <a  class="btn mt-4" target="">{{ __('messages.getmore') }}</a>

                    </div>
                </div>

                <div id="tab-2" class="tab-content text-white">
                    <h4 class="tab-title text-lg font-bold mb-2">
                        <img src="https://www.scphealth.com/wp-content/uploads/2023/10/Doctor_Call_Orange.png" alt="{{ __('messages.cs_alt') }}">
                        {{ __('messages.cs_title') }}
                    </h4>
                    <div class="desc-wrap">
                        <p style="text-align: justify;">
                            <span style="font-size: 14pt;">
                                {{ __('messages.cs_description') }}
                            </span>
                        </p>
                        <a  class="btn mt-4" target="">{{ __('messages.getmore') }}</a>

                    </div>
                </div>

                <div id="tab-3" class="tab-content text-white">
                    <h4 class="tab-title text-lg font-bold mb-2">
                        <img src="{{ asset('path/to/image/Doctors_Orange.png') }}" alt="{{ __('messages.cwo_alt') }}">
                        {{ __('messages.cwo_title') }}
                    </h4>
                    <div class="desc-wrap">
                        <p style="text-align: justify;">
                            <span style="font-size: 14pt;">{{ __('messages.cwo_description_1') }}</span>
                        </p>
                        <a  class="btn mt-4" target="">{{ __('messages.getmore') }}</a>

                    </div>
                </div>

                <div id="tab-4" class="tab-content text-white">
                    <h4 class="tab-title text-lg font-bold mb-2">
                        <img src="{{ asset('path/to/image/Document_Orange.png') }}" alt="{{ __('messages.drc_alt') }}">
                        {{ __('messages.drc_title') }}
                    </h4>
                    <div class="desc-wrap">
                        <p style="text-align: justify;">
                            <span style="font-size: 14pt;">{{ __('messages.drc_description') }}</span>
                        </p>
                        <a  class="btn mt-4" target="">{{ __('messages.getmore') }}</a>

                    </div>
                </div>

                <div id="tab-5" class="tab-content text-white">
                    <h4 class="tab-title text-lg font-bold mb-2">
                        <img src="{{ asset('path/to/image/Technology_Orange.png') }}" alt="{{ __('messages.virtual_health_alt') }}">
                        {{ __('messages.virtual_health_title') }}
                    </h4>
                    <div class="desc-wrap">
                        <p style="text-align: justify;">
                            <span style="font-size: 14pt;">{{ __('messages.virtual_health_description') }}</span>
                        </p>
                        <a  class="btn mt-4" target="">{{ __('messages.getmore') }}</a>

                    </div>
                </div>

                <div id="tab-6" class="tab-content text-white">
                    <h4 class="tab-title text-lg font-bold mb-2">
                        <img src="{{ asset('path/to/image/ACH_Orange.png') }}" alt="{{ __('messages.advanced_care_home_alt') }}">
                        {{ __('messages.advanced_care_home_title') }}
                    </h4>
                    <div class="desc-wrap">
                        <p style="text-align: justify;">
                            <span style="font-size: 14pt;">{{ __('messages.advanced_care_home_description1') }}</span>
                        </p>
                        <a  class="btn mt-4" target="">{{ __('messages.getmore') }}</a>

                    </div>
                </div>


</div>
            </div></div>
</section>
