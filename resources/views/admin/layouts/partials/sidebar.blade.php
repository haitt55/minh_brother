<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{ route('admin.home.index') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="{{ route('admin.product_categories.index') }}"><i class="fa fa-list fa-fw"></i> Danh mục khóa học</a>
            </li>
            <li>
                <a href="{{ route('admin.products.index') }}"><i class="fa fa-qrcode fa-fw"></i> Khóa học</a>
            </li>
            <li>
                <a href="{{ route('admin.teachers.index') }}"><i class="fa fa-user-md fa-fw"></i> Giáo viên</a>
            </li>
            <li>
                <a href="{{ route('admin.students') }}"><i class="fa fa-users fa-fw"></i> Học viên</a>
            </li>
            <li>
                <a href="{{ route('blog-categories.index') }}"><i class="fa fa-users fa-fw"></i> Danh mục tin tức</a>
            </li>
            <li>
                <a href="{{ route('blogs.index') }}"><i class="fa fa-users fa-fw"></i> Tin tức</a>
            </li>
            <li>
                <a href="{{ route('admin.appSettings.general') }}"><i class="fa fa-wrench fa-fw"></i> Thông tin chung</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
