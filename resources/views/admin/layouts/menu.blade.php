<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{ route('admin.dashbroad') }}"><i class="fa fa-dashboard fa-fw"></i> Tổng quan</a>
            </li>
            <li>
                <a href=""><i class="fa fa-fw fa-list-alt"></i> Danh mục<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.categories.index') }}">Danh mục sản phẩm</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.sub-categories.index') }}">Danh mục sản phẩm con</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Sản phẩm<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.products.index') }}">Sản phẩm</a>
                    </li>
                    <li>
                        <a href="">Nhập kho</a>
                    </li>
                    <li>
                        <a href="">Tồn kho</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=""><i class="fa fa-cube fa-fw"></i> Tin tức<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.posts.index') }}">Danh sách tin tức</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.post-groups.index') }}">Nhóm tin tức</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=""><i class="fa fa-fw fa-pencil-square-o"></i> Đơn hàng<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="">Đơn hàng</a>
                    </li>
                    <li>
                        <a href="">Vận chuyển</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=""><i class="fa fa-fw fa-windows"></i> Khách hàng<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="">Danh sách khách hàng</a>
                    </li>
                    <li>
                        <a href="">Liên hệ từ khách hàng</a>
                    </li>
                    <li>
                        <a href="">Danh sách Email đăng ký</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=""><i class="fa fa-cube fa-fw"></i> Banners<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.banners.index') }}">Danh sách banners</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>