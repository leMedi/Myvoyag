<aside class="sidebar-1">
    <h4 class="title">Menu</h4>
    <ul>
        <li{{ setActive('hotels') }}>
            <a class="menu-link" href="{{ url('/hotels') }}">Hotels</a>
        </li>
        <li{{ setActive('sites') }}>
            <a class="menu-link" href="{{ url('/sites') }}">Sites</a>
        </li>
    </ul>
</aside>