<li class="menu-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
    <a href="{{('dashboard')}}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
    </a>
</li>

<li class="menu-item {{ (request()->is('bus')) ? 'active' : '' }}"">
            <a href=" {{url('bus')}}" class="menu-link">
    <i class='menu-icon tf-icons bx bx-bus'></i>
    <div data-i18n="Analytics">Informasi Bus</div>
    </a>
</li>