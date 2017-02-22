<div class="navbar-custom-menu pull-left">
    <ul class="nav navbar-nav">
        <!-- =================================================== -->
        <!-- ========== Top menu items (ordered left) ========== -->
        <!-- =================================================== -->

        <!-- <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li> -->

        <!-- ========== End of top menu left items ========== -->
    </ul>
</div>


<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- ========================================================= -->
      <!-- ========== Top menu right items (ordered left) ========== -->
      <!-- ========================================================= -->

      <!-- <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li> -->

        @if (Auth::guest())
            <li><a href="{{ url('admin/login') }}">{{ trans('backpack::base.login') }}</a></li>
            @if (config('backpack.base.registration_open'))
            <li><a href="{{ url('admin/register') }}">{{ trans('backpack::base.register') }}</a></li>
            @endif
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                    <i class="fa fa-globe"></i> Translations<span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li class=""><a href="{{ url('admin/language') }}"><i class="fa fa-flag-checkered"></i> Languages</a></li>
                    <li class=""><a href="{{ url('admin/language/texts') }}"><i class="fa fa-language"></i> Site texts</a></li>
                </ul>
            </li>
            <li><a href="{{ url('admin/logout') }}"><i class="fa fa-btn fa-sign-out"></i> {{ trans('backpack::base.logout') }}</a></li>
        @endif

       <!-- ========== End of top menu right items ========== -->
    </ul>
</div>
