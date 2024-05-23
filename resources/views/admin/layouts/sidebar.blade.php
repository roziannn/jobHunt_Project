<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html" class="navbar-brand">BUILDHUB</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="active">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Starter</li>

            <li class="dropdown {{ setSidebarActive(['admin.industry-types.*', 'admin.organization-types.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Attributes</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.industry-types.*']) }}"><a class="nav-link"
                            href="{{ route('admin.industry-types.index') }}">Industry Type</a></li>
                    <li class="{{ setSidebarActive(['admin.organization-types.*']) }}"><a class="nav-link"
                            href="{{ route('admin.organization-types.index') }}">Organization Type</a>
                    </li>
                    <li class="{{ setSidebarActive(['admin.languages.*']) }}"><a class="nav-link"
                            href="{{ route('admin.languages.index') }}">Languages</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown {{ setSidebarActive(['admin.countries.*', 'admin.states.*', 'admin.cities.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Locations</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.countries.*']) }}"><a class="nav-link"
                            href="{{ route('admin.countries.index') }}">Countries</a></li>
                    <li class="{{ setSidebarActive(['admin.states.*']) }}"><a class="nav-link"
                            href="{{ route('admin.states.index') }}">States</a></li>
                    <li class="{{ setSidebarActive(['admin.cities.*']) }}"><a class="nav-link"
                            href="{{ route('admin.cities.index') }}">Cities</a></li>
                </ul>
            </li>


            {{-- <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Layout</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
                    <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
                    <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
                </ul>
            </li> --}}
            <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank
                        Page</span></a></li>
        </ul>
    </aside>
</div>
