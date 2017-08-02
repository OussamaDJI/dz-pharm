<div class="side-menu" style="display:hidden">
    <aside class="menu m-l-10 m-t-20 m-r-10">
        <p class="menu-label ">
            Generale
        </p>
        <ul class="menu-list">
            <li>
                <a href="{{route('manage.dashboard')}}">Dashboard</a>
            </li>
        </ul>

        <p class="menu-label">
            Administration
        </p>
        <ul class="menu-list">
            <li><a href="{{route('users.index')}}">Gérer les utilisateurs</a></li>
            <li><a href="#">Roles & Permissions</a>
                <ul>
                    <li><a href="{{route('roles.index')}}">Roles</a></li>
                    <li><a href="{{route('permissions.index')}}">Permissions</a></li>
                </ul>
            </li>
            
        </ul>
    </aside>
</div>

