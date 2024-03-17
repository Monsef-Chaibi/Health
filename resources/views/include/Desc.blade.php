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
                    <h4 class="tab-title">
                        <img src="https://www.scphealth.com/wp-content/uploads/2023/10/Hands_Health_Orange.png" alt="{{ __('messages.sol_careDelivery_alt') }}">
                        {{ __('messages.sol_careDelivery') }}
                    </h4>
                    <div class="desc-wrap">
                        <p style="font-size: 14pt;">
                            {{ __('messages.sol_careDelivery_description') }}
                        </p>
                        <p class="text-xl my-8 font-bold text-[#db8b3d]"> {{ __('messages.sol_careDelivery_titel_1') }} </p>
                        <ul style="color: #e87e24;">
                            @foreach(__('messages.sol_careDelivery_list_1') as $item)
                             <li><span style="font-size: 14pt; color: #ffffff;">{{$item}}</span></li>
                            @endforeach
                        </ul>
                        <p class="text-xl my-8 font-bold text-[#db8b3d]"> {{ __('messages.sol_careDelivery_titel_1_2') }} </p>
                        <ul style="color: #e87e24;">
                            @foreach(__('messages.sol_careDelivery_list_1_2') as $item)
                             <li><span style="font-size: 14pt; color: #ffffff;">{{$item}}</span></li>
                            @endforeach
                        </ul>
                        <p class="text-xl my-8 font-bold text-[#db8b3d]"> {{ __('messages.sol_careDelivery_titel_1_3') }} </p>
                        <ul style="color: #e87e24; ">
                            @foreach(__('messages.sol_careDelivery_list_1_3') as $item)
                             <li><span style="font-size: 14pt; color: #ffffff;">{{$item}}</span></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div id="tab-2" class="tab-content text-white">
                    <h4 class="tab-title">
                        <img src="https://www.scphealth.com/wp-content/uploads/2023/10/Doctor_Call_Orange.png" alt="{{ __('messages.cs_alt') }}">
                        {{ __('messages.cs_title') }}
                    </h4>
                    <div class="desc-wrap">
                        <p style="text-align: justify;">
                            <span style="font-size: 14pt;">
                                {{ __('messages.cs_description') }}

                            </span>
                        </p>
                        <p class="text-xl my-8 font-bold text-[#db8b3d]"> {{ __('messages.cs_titel_2') }} </p>
                        <ul style="color: #e87e24;">
                            @foreach(__('messages.cs_list') as $item)
                            <li><span style="font-size: 14pt; color: #ffffff;">{{$item}}</span></li>
                           @endforeach
                        </ul>

                        @for ($i = 3; $i <= 13; $i++)
                            <p class="text-xl my-8 font-bold text-[#db8b3d]">{{ __('messages.cs_titel_'.$i) }}</p>
                                <ul style="color: #e87e24;">
                                    @foreach(__('messages.cs_list_'.$i) as $item)
                                        <li><span style="font-size: 14pt; color: #ffffff;">{{$item}}</span></li>
                                    @endforeach
                                </ul>
                        @endfor

                    </div>
                </div>

                <div id="tab-3" class="tab-content text-white">
                    <h4 class="tab-title">
                        <img src="{{ asset('path/to/image/Doctors_Orange.png') }}" alt="{{ __('messages.cwo_alt') }}">
                        {{ __('messages.cwo_title') }}
                    </h4>
                    <div class="desc-wrap">
                        <p style="text-align: justify;">
                            <span style="font-size: 14pt;">{{ __('messages.cwo_description_1') }}</span>
                        </p>
                        <ul style="color: #e87e24;">

                        @for ($i = 1; $i <= 4; $i++)
                            <p class="text-xl my-8 font-bold text-[#db8b3d]">{{ __('messages.cwo_titel_'.$i) }}</p>
                                <ul style="color: #e87e24;">
                                    @foreach(__('messages.cwo_list_'.$i) as $item)
                                        <li><span style="font-size: 14pt; color: #ffffff;">{{$item}}</span></li>
                                    @endforeach
                                </ul>
                        @endfor
                        </ul>
                    </div>
                </div>

                <div id="tab-4" class="tab-content text-white">
                    <h4 class="tab-title">
                        <img src="{{ asset('path/to/image/Document_Orange.png') }}" alt="{{ __('messages.drc_alt') }}">
                        {{ __('messages.drc_title') }}
                    </h4>
                    <div class="desc-wrap">
                        <p style="text-align: justify;">
                            <span style="font-size: 14pt;">{{ __('messages.drc_description') }}</span>
                        </p>
                        @for ($i = 1; $i <= 11; $i++)
                            <p class="text-xl my-8 font-bold text-[#db8b3d]">{{ __('messages.drc_titel_'.$i) }}</p>
                                <ul style="color: #e87e24;">
                                    @foreach(__('messages.drc_list_'.$i) as $item)
                                        <li><span style="font-size: 14pt; color: #ffffff;">{{$item}}</span></li>
                                    @endforeach
                                </ul>
                        @endfor
                    </div>
                </div>

                <div id="tab-5" class="tab-content text-white">
                    <h4 class="tab-title">
                        <img src="{{ asset('path/to/image/Technology_Orange.png') }}" alt="{{ __('messages.virtual_health_alt') }}">
                        {{ __('messages.virtual_health_title') }}
                    </h4>
                    <div class="desc-wrap">
                        <p style="text-align: justify;">
                            <span style="font-size: 14pt;">{{ __('messages.virtual_health_description') }}</span>
                        </p>
                        @for ($i = 1; $i <= 11; $i++)
                            <p class="text-xl my-8 font-bold text-[#db8b3d]">{{ __('messages.virtual_health_titel_'.$i) }}</p>
                                <ul style="color: #e87e24;">
                                    @foreach(__('messages.virtual_health_list_'.$i) as $item)
                                        <li><span style="font-size: 14pt; color: #ffffff;">{{$item}}</span></li>
                                    @endforeach
                                </ul>
                        @endfor
                    </div>
                </div>

                <div id="tab-6" class="tab-content text-white">
                    <h4 class="tab-title">
                        <img src="{{ asset('path/to/image/ACH_Orange.png') }}" alt="{{ __('messages.advanced_care_home_alt') }}">
                        {{ __('messages.advanced_care_home_title') }}
                    </h4>
                    <div class="desc-wrap">
                        <p style="text-align: justify;">
                            <span style="font-size: 14pt;">{{ __('messages.advanced_care_home_description1') }}</span>
                        </p>
                        @for ($i = 1; $i <= 7; $i++)
                            <p class="text-xl my-8 font-bold text-[#db8b3d]">{{ __('messages.advanced_care_home_titel_'.$i) }}</p>
                                <ul style="color: #e87e24;">
                                    @foreach(__('messages.advanced_care_home_list_'.$i) as $item)
                                        <li><span style="font-size: 14pt; color: #ffffff;">{{$item}}</span></li>
                                    @endforeach
                                </ul>
                        @endfor
                    </div>
                </div>


</div>
            </div></div>
</section>
