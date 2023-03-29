<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
        <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AppSéminaire</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview {{ request()->is('admin') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/admin') }}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>
                    </ul>
                </li>

                @permission('User', 'read')
                    <li class="nav-item has-treeview
        {{ request()->is('users') ? 'menu-open' : '' }}
        ">
                        <a href="#" class="nav-link
            {{ request()->is('users') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-folder"></i>
                            <p>
                                Utilisateurs
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}"
                                    class="nav-link {{ request()->is('users') ? 'active' : '' }}">
                                    <i class="far fa-file nav-icon"></i>
                                    <p>Administrateurs</p>
                                </a>
                            </li>
                        </ul>

                    </li>
                @endpermission
                @permission('Role', 'read')
                    <li class="nav-item has-treeview {{ request()->is('roles') ? 'menu-open' : '' }}
        ">
                        <a href="#" class="nav-link {{ request()->is('roles') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-folder"></i>
                            <p>
                                Roles
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('roles.index') }}"
                                    class="nav-link {{ request()->is('roles') ? 'active' : '' }}">
                                    <i class="far fa-file nav-icon"></i>
                                    <p>Roles</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endpermission
                @permission('Moderateur', 'read')
                    <li
                        class="nav-item has-treeview
        {{ request()->is('moderateurs') ? 'menu-open' : '' }}
        ">
                        <a href="#" class="nav-link
            {{ request()->is('moderateurs') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-folder"></i>
                            <p>
                                Moderateurs
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('moderateurs.index') }}"
                                    class="nav-link {{ request()->is('moderateurs') ? 'active' : '' }}">
                                    <i class="far fa-file nav-icon"></i>
                                    <p>Moderateurs</p>
                                </a>
                            </li>
                        </ul>

                    </li>
                @endpermission
                @permission('Seminaire', 'create')
                    <li
                        class="nav-item has-treeview
            {{ request()->is('seminaires') ? 'menu-open' : '' }}{{ request()->is('seminaires/create') ? 'menu-open' : '' }}
            ">
                        <a href="#"
                            class="nav-link
                {{ request()->is('seminaires') ? 'active' : '' }}{{ request()->is('seminaires/create') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-folder"></i>
                            <p>
                                Séminaires
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('seminaires.index') }}"
                                    class="nav-link {{ request()->is('seminaires') ? 'active' : '' }}">
                                    <i class="far fa-file nav-icon"></i>
                                    <p>Séminaires</p>
                                </a>
                            </li>
                        </ul>
                        @permission('Seminaire', 'create')
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('seminaires.create') }}"
                                        class="nav-link {{ request()->is('seminaires/create') ? 'active' : '' }}">
                                        <i class="far fa-file nav-icon"></i>
                                        <p>Créer un séminaire</p>
                                    </a>
                                </li>
                            </ul>
                        @endpermission
                    </li>
                @endpermission
                    <li
                    class="nav-item has-treeview {{ request()->is('orateurs') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->is('orateurs') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Orateurs
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('orateurs.index') }}"
                                class="nav-link {{ request()->is('orateurs') ? 'active' : '' }}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Orateurs</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @permission('Intervation', 'create')
                <li
                    class="nav-item has-treeview
        {{ request()->is('intervations') ? 'menu-open' : '' }}{{ request()->is('intervations/create') ? 'menu-open' : '' }}
        ">
                    <a href="#"
                        class="nav-link
            {{ request()->is('intervations') ? 'active' : '' }}{{ request()->is('intervations/create') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Interventions
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('intervations.index') }}"
                                class="nav-link {{ request()->is('intervations') ? 'active' : '' }}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Interventions</p>
                            </a>
                        </li>
                    </ul>
                </li>
            @endpermission
             {{--    <li
                    class="nav-item has-treeview {{ request()->is('addproduct') ? 'menu-open' : '' }}
            {{ request()->is('products') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->is('addproduct') ? 'active' : '' }}
                {{ request()->is('products') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Products
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/addproduct') }}"
                                class="nav-link {{ request()->is('addproduct') ? 'active' : '' }}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Add product</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/products') }}"
                                class="nav-link {{ request()->is('products') ? 'active' : '' }}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Products</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ request()->is('orders') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('orders') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Orders
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/orders') }}"
                                class="nav-link {{ request()->is('orders') ? 'active' : '' }}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Orders</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">MISCELLANEOUS</li>
                <li class="nav-item">
                    <a href="https://adminlte.io/docs/3.0/" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Documentation</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar --> --}}
</aside>
