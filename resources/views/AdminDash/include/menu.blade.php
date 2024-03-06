<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="{{route('Dash')}}"  class="app-brand-link flex items-center justify-center">
        <span class="app-brand-logo demo">
           <img src="{{ asset('img/logo1.png') }}" alt="" class="w-8 h-8\">
        </span>
        <span class="app-brand-text demo menu-text fw-bolder ms-2">Heath</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item {{ request()->routeIs('Dash') ? 'active' : '' }}">
        <a href="{{ route('Dash') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>
      <!-- Layouts -->
      <li class="menu-item {{ request()->routeIs('AddPlans','EditPlans','editServiceRouteName') ? 'active' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-layout"></i>
          <div data-i18n="Layouts">Plans</div>
        </a>

        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{route('AddPlans')}}" class="menu-link">
              <div data-i18n="Without menu">Add +</div>
            </a>
            <a href="{{route('EditPlans')}}" class="menu-link">
              <div data-i18n="Without menu">Edit Or Remove</div>
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Reservation</span>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-dock-top"></i>
          <div data-i18n="Account Settings">Reservation</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{route('AllReservation')}}" class="menu-link">
              <div data-i18n="Account">View All</div>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </aside>
