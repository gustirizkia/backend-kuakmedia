<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{ asset('image/logo.png') }}" alt="Logo" srcset="" class="img-fluid"></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">ADMIN KUAK MEDIA</li>

                <li class="sidebar-item  {{ (request()->is('admin')) ? 'active' : '' }}">
                    <a href="/admin" class='sidebar-link'>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item  {{ (request()->is('admin/artikel*')) ? 'active' : '' }}">
                    <a href="{{ route('artikel.index') }}" class='sidebar-link'>
                        <span>Artikel</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
