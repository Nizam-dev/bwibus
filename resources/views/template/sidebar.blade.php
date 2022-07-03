<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{asset('public/image/icon.png')}}" alt="" style="width:27px;">
            </span>
            <span class="app-brand-text menu-text fw-bolder ms-2">Bwi Bus</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
            <a href="{{('dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-item {{ (request()->is('user')) ? 'active' : '' }}"">
            <a href="{{url('user')}}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-user-circle'></i>
                <div data-i18n="Analytics">User</div>
            </a>
        </li>

        <li class="menu-item {{ (request()->is('bus')) ? 'active' : '' }}"">
            <a href="{{}}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-bus'></i>
                <div data-i18n="Analytics">Bus</div>
            </a>
        </li>


    </ul>
</aside>