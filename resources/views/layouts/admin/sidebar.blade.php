<aside class="main-sidebar sidebar-dark-primary">

    <!-- Sidebar -->
    <div class="sidebar">
        <div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="" class="nav-link text-center mb-4">
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fa fa-building"></i>
                            <p>
                                مدیریت سازمان ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            @hasanyrole('Admin|Manager')
                            <li class="nav-item">
                                <a href="{{route('admin.organizations.create')}}" class="nav-link">
                                    <i class="fa fa-plus nav-icon"></i>
                                    <p>افزودن سازمان</p>
                                </a>
                            </li>
                            @endhasanyrole
                            <li class="nav-item">
                                <a href="{{route('admin.organizations.all')}}" class="nav-link">
                                    <i class="fa fa-list nav-icon"></i>
                                    <p>لیست سازمان ها</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fa fa-file-text"></i>
                            <p>بدنه ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @hasanyrole('Admin|Manager')

                            <li class="nav-item">
                                <a href="{{route('admin.dispatches.create')}}" class="nav-link">
                                    <i class="nav-icon fa fa-plus"></i>
                                    <p class="text">ایجاد بدنه</p>
                                </a>
                            </li>
@endhasanyrole
                            <li class="nav-item">
                                <a href="{{route('admin.dispatches.all')}}" class="nav-link">
                                    <i class="nav-icon fa fa-list"></i>
                                    <p>لیست بدنه ها</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-exchange"></i>
                            <p>
                                مدیریت درخواست ها
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{route('admin.items.import')}}" class="nav-link">
                                    <i class="fa fa-plus nav-icon"></i>
                                    <p>ایجاد درخواست</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('admin.requests.all')}}" class="nav-link">
                                    <i class="fa fa-list nav-icon"></i>
                                    <p> لیست درخواست ها</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @hasanyrole('Admin')


                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                مدیریت کاربران
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.users.create')}}" class="nav-link">
                                    <i class="fa fa-plus nav-icon"></i>
                                    <p>افزودن</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.users.all')}}" class="nav-link">
                                    <i class="fa fa-list nav-icon"></i>
                                    <p>لیست</p>
                                </a>
                            </li>
                        </ul>
                    </li>
@endhasanyrole
                    @hasanyrole('Admin')


                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-users"></i>
                            <p>
                                مدیریت واحد ها
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.departments.create')}}" class="nav-link">
                                    <i class="fa fa-plus nav-icon"></i>
                                    <p>افزودن</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.departments.all')}}" class="nav-link">
                                    <i class="fa fa-list nav-icon"></i>
                                    <p>لیست</p>
                                </a>
                            </li>
                        </ul>
                    </li>
@endhasanyrole

                    <li class="nav-item">
                        <a href="{{route('admin.dash.main')}}" class="nav-link">
                            <i class="nav-icon fa fa-bar-chart"></i>
                            <p class="text">گزارش ها</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('auth.logout')}}" class="nav-link">
                            <i class="nav-icon fa fa-sign-out"></i>
                            <p class="text">خروج</p>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
