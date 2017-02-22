<ul class="navbar-left navbar-nav nav">
    <li class="dropdown dropdown-hover">
        <a href="{{route('internal.bkpa.receipt.index')}}">
            <b class="col-cell cell-icon text-center">
                <i class="zmdi zmdi-layers"></i>
                <em>{{$notifications->count()}}</em>
            </b>
            <b class="col-cell cell-name pl-10">{{trans('bkpa.navbar.new_applications')}}</b>
        </a>
    </li>
</ul>