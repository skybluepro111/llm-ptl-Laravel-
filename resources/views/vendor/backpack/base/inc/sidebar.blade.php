@if (Auth::check())
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="http://placehold.it/160x160/00a65a/ffffff/&text={{ Auth::user()->name[0] }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('backpack::base.administration') }}</li>
            <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-group"></i> <span>User Management</span> <i
                            class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
                    <li><a href="{{ url('admin/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
                    <li><a href="{{ url('admin/permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
                    <li><a href="{{ url('admin/responsibility') }}"><i class="fa fa-key"></i>
                            <span>Responsibilities</span></a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-group"></i> <span>Side Highway Development</span> <i
                            class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/development_type') }}"><i class="fa fa-user"></i>
                            <span>Development Type</span></a></li>
                    <li><a href="{{ url('admin/development_details') }}"><i class="fa fa-user"></i>
                            <span>Development Details</span></a></li>
                    <li><a href="{{ url('admin/highway_processing_fee') }}"><i class="fa fa-key"></i> <span>Processing Fee</span></a>
                    </li>
                    <li><a href="{{ url('admin/highway_services_fee') }}"><i class="fa fa-key"></i>
                            <span>Services Fee</span></a></li>
                    <li><a href="{{ url('admin/highway_extension_fee') }}"><i class="fa fa-key"></i>
                            <span>Extension Fee</span></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-group"></i> <span>Display Ads</span> <i
                            class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/ad_processing_fee') }}"><i class="fa fa-key"></i>
                            <span>Processing Fee</span></a></li>
                    <li><a href="{{ url('admin/ad_services_fee') }}"><i class="fa fa-key"></i> <span>Services Fee</span></a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-group"></i> <span>Email Settings</span> <i
                            class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/email') }}"><i class="fa fa-user"></i>
                            <span>Email Transaction Listing</span></a></li>
                    <li><a href="{{ url('admin/smtp') }}"><i class="fa fa-group"></i> <span>SMTP Settings</span></a>
                    </li>
                </ul>
            </li>
            <li class="header">Dataset Settings</li>
            <li><a href="{{ url('admin/highway') }}"><i class="fa fa-user"></i> <span>Highway</span></a></li>
            <li><a href="{{ url('admin/concessionaire') }}"><i class="fa fa-user"></i> <span>Concessionaire</span></a>
            <li><a href="{{ url('admin/contractor_category') }}"><i class="fa fa-user"></i>
                    <span>Contractor Category</span></a></li>
            <li><a href="{{ url('admin/application_category') }}"><i class="fa fa-user"></i>
                    <span>Application Category</span></a></li>
            <li><a href="{{ url('admin/payment_type') }}"><i class="fa fa-user"></i> <span>Payment Type</span></a></li>
            <li><a href="{{ url('admin/regional_office') }}"><i class="fa fa-user"></i> <span>Regional Office</span></a>
            </li>
            <li><a href="{{ url('admin/zone') }}"><i class="fa fa-user"></i> <span>Zone</span></a></li>
            <li><a href="{{ url('admin/local_authority') }}"><i class="fa fa-user"></i>
                    <span>Local authority</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
@endif
