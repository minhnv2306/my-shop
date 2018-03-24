<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://www.w3schools.com/bootstrap/img_avatar3.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="active treeview menu-open">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="{{route('users.index')}}">
                    <i class="fa fa-user"></i> <span>User manager</span>
                </a>
            </li>
            <li class="treeview">
                <a href="{{route('products.index')}}">
                    <i class="fa fa-product-hunt"></i> <span>Product manager</span>
                </a>
            </li>
            <li class="treeview">
                <a href="{{route('reviews.index')}}">
                    <i class="fa fa-product-hunt"></i> <span>Rate manager</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>