<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ convertEmailToUsername(Auth::user()->email) }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li id="dashboard">
                <a href="{{ url('home') }}"><i class='fa fa-dashboard'></i> <span>Dashboard</span></a></li>
            <li id="user-manager">
                <a href="{{route('users.index')}}"><i class='fa fa-user'></i> <span>User manager</span></a></li>
            <li class="treeview" id="product-manager">
                <a href="{{route('products.index')}}"><i class='fa fa-product-hunt'></i> <span>Product manager</span></a>
            </li>
            <li class="treeview" id="rate-manager">
                <a href="{{route('reviews.index')}}"><i class='fa fa-product-hunt'></i> <span>Rate manager</span></a>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
