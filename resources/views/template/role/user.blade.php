<li class="menu-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
    <a href="{{('dashboard')}}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
    </a>
</li>

<li class="menu-item {{ (request()->is('tarifbus')) ? 'active' : '' }}"">
    <a href=" {{url('tarifbus')}}" class="menu-link">
    <i class='menu-icon tf-icons bx bx-bus'></i>
    <div data-i18n="Analytics">Tarif Bus</div>
    </a>
</li>

<li class="menu-item {{ (request()->is('kritiksaranuser')) ? 'active' : '' }}">
    <a href="{{('kritiksaranuser')}}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-mail-send"></i>
        <div data-i18n="Analytics">Kritik dan Saran</div>
    </a>
</li>

<li class="menu-item {{ (request()->is('profile')) ? 'active' : '' }}">
    <a href="{{('profile')}}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-user-circle"></i>
        <div data-i18n="Analytics">Profile</div>
    </a>
</li>


<!-- <li class="menu-item {{ (request()->is('bus')) ? 'active' : '' }}"">
            <a href=" {{url('bus')}}" class="menu-link">
    <i class='menu-icon tf-icons bx bx-bus'></i>
    <div data-i18n="Analytics">Informasi Bus</div>
    </a>
</li> -->