<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="{{route('admin.dashboard')}}">
            <img src="{{asset('backend/assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Azea logo">
            <img src="{{asset('backend/assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Azea logo">
            <img src="{{asset('backend/assets/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Azea logo">
            <img src="{{asset('backend/assets/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo" alt="Azea logo">
        </a>
    </div>
    <ul class="side-menu app-sidebar3">
        <li class="slide">
            <a class="side-menu__item"  href="{{route('admin.dashboard')}}">
                <svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"/></svg>
            <span class="side-menu__label">Dashboard</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                <svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M20 17V7c0-2.168-3.663-4-8-4S4 4.832 4 7v10c0 2.168 3.663 4 8 4s8-1.832 8-4zM12 5c3.691 0 5.931 1.507 6 1.994C17.931 7.493 15.691 9 12 9S6.069 7.493 6 7.006C6.069 6.507 8.309 5 12 5zM6 9.607C7.479 10.454 9.637 11 12 11s4.521-.546 6-1.393v2.387c-.069.499-2.309 2.006-6 2.006s-5.931-1.507-6-2V9.607zM6 17v-2.393C7.479 15.454 9.637 16 12 16s4.521-.546 6-1.393v2.387c-.069.499-2.309 2.006-6 2.006s-5.931-1.507-6-2z"/></svg>
            <span class="side-menu__label">Users</span><i class="angle fe fe-chevron-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{route('admin.user')}}" class="slide-item">User List</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                <svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M12 22c4.879 0 9-4.121 9-9s-4.121-9-9-9-9 4.121-9 9 4.121 9 9 9zm0-16c3.794 0 7 3.206 7 7s-3.206 7-7 7-7-3.206-7-7 3.206-7 7-7zm5.284-2.293 1.412-1.416 3.01 3-1.413 1.417zM5.282 2.294 6.7 3.706l-2.99 3-1.417-1.413z"/><path d="M11 9h2v5h-2zm0 6h2v2h-2z"/></svg>
            <span class="side-menu__label">Companies</span><i class="angle fe fe-chevron-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{route('admin.company.index')}}" class="slide-item"> Companies List</a></li>
                <li><a href="{{route('admin.company.create')}}" class="slide-item"> Add Company</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                <svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M12 22c4.879 0 9-4.121 9-9s-4.121-9-9-9-9 4.121-9 9 4.121 9 9 9zm0-16c3.794 0 7 3.206 7 7s-3.206 7-7 7-7-3.206-7-7 3.206-7 7-7zm5.284-2.293 1.412-1.416 3.01 3-1.413 1.417zM5.282 2.294 6.7 3.706l-2.99 3-1.417-1.413z"/><path d="M11 9h2v5h-2zm0 6h2v2h-2z"/></svg>
            <span class="side-menu__label">Employees</span><i class="angle fe fe-chevron-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{route('admin.employee.index')}}" class="slide-item"> Emplyees List</a></li>
                <li><a href="{{route('admin.employee.create')}}" class="slide-item"> Add Emplyee</a></li>
            </ul>
        </li>


    </ul>
</aside>
