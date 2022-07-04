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
        @if(auth()->user()->role == "admin")
            @include('template.role.admin')
        @elseif(auth()->user()->role == "kernet")
            @include('template.role.kernet')
        @endif

    </ul>
</aside>