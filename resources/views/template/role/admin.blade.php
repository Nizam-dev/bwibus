<li class="menu-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
    <a href="{{('dashboard')}}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
    </a>
</li>

<li class="menu-item {{ (request()->is('user')) ? 'active' : '' }}"">
            <a href=" {{url('user')}}" class="menu-link">
    <i class='menu-icon tf-icons bx bx-user-circle'></i>
    <div data-i18n="Analytics">User</div>
    </a>
</li>

<li class="menu-item {{ (request()->is('bus')) ? 'active' : '' }}"">
            <a href=" {{url('bus')}}" class="menu-link">
    <i class='menu-icon tf-icons bx bx-bus'></i>
    <div data-i18n="Analytics">Bus</div>
    </a>
</li>

<li class="menu-item {{ (request()->is('jadwalbus')) ? 'active' : '' }}"">
            <a href=" {{url('jadwalbus')}}" class="menu-link">
    <i class='menu-icon tf-icons bx bx-bus'></i>
    <div data-i18n="Analytics">Jadwal Bus</div>
    </a>
</li>

<li class="menu-item {{ (request()->is('tarifbus')) ? 'active' : '' }}"">
            <a href=" {{url('tarifbus')}}" class="menu-link">
    <i class='menu-icon tf-icons bx bx-bus'></i>
    <div data-i18n="Analytics">Tarif Bus</div>
    </a>
</li>