<!-- Sidebar Holder -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h1>
            <a href="{!! route('developer.index') !!}">Simple Search</a>
        </h1>
        <span>S</span>
    </div>
    <div class="profile-bg"></div>
    <ul class="list-unstyled components">
        <li>
            <a href="{!! route('developer.index') !!}">
                <i class="fas fa-th-large"></i>
                Dashboard
            </a>
        </li>
        <li class="">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-laptop"></i>
                Developers
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="{!! route('developer.index') !!}">All Developers</a>
                </li>
                <li>
                    <a href="{!! route('developer.create') !!}">Add developers</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="{!! route('developer.search') !!}">
                <i class="fas fa-search"></i>
               Search
            </a>
        </li>

    </ul>
</nav>