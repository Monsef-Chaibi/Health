	<!-- footer part -->
	<footer class="main-footer">

	
						<div class="footer-right">
                            <section id="nav_menu-2" class="widget widget_nav_menu">
                                <span class="widget-title">{{ __('messages.menu_capabilities_title') }}</span>
                                <nav class="menu-footer-menu-capabilities-container" aria-label="{{ __('messages.menu_capabilities_title') }}">
                                    <ul id="menu-footer-menu-capabilities" class="menu">
                                        @foreach(__('messages.menu_capabilities_items') as $path => $name)
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                <a href="/healthcare-solutions/{{ Str::slug($path) }}">{{ $name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </section>
                            
                            <section id="nav_menu-7" class="widget widget_nav_menu">
                                <span class="widget-title">{{ __('messages.specialties_title') }}</span>
                                <nav class="menu-footer-menu-services-container" aria-label="{{ __('messages.specialties_title') }}">
                                    <ul id="menu-footer-menu-services" class="menu">
                                        @foreach(__('messages.specialties_items') as $key => $name)
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                <a href="/{{ Str::slug($key) }}">{{ $name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </section>
                            
                            <section id="nav_menu-4" class="widget widget_nav_menu">
                                <span class="widget-title">{{ __('messages.company_title') }}</span>
                                <nav class="menu-footer-menu-company-container" aria-label="{{ __('messages.company_title') }}">
                                    <ul id="menu-footer-menu-company" class="menu">
                                        @foreach(__('messages.company_menu') as $key => $item)
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                <a href="/company/{{ Str::slug($key) }}">{{ $item }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </section>
                            
<section id="nav_menu-6" class="widget widget_nav_menu" style="text-align: center;font-size:30px"><span class="widget-title">{{__('messages.Social_Media')}}</span><nav class="menu-footer-menu-news-resources-container" aria-label="RESOURCES"><ul id="menu-footer-menu-news-resources" class="menu">
<li id="menu-item-5064" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5064"><a href=".resources/"><i class="fa-brands fa-x-twitter"></i></a></li>
<li id="menu-item-5065" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5065"><a href=".blog/"><i class="fa-brands fa-facebook-f"></i></a></li>
<li id="menu-item-5067" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5067"><a href=".news/"><i class="fa-brands fa-youtube"></i></a></li>
<li id="menu-item-85688" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-85688"><a href=".events/"><i class="fa-brands fa-linkedin-in"></i></a></li>
</ul></nav></section>
<section id="block-2" class="widget widget_block widget_text">
</ul></nav></section>
			</div>
					</div>



	</footer>