<nav class="progress bg-0 pt-20 pb-20">
    <div class="container">
        <div class="text-500 ma-0" style="display: table;">
            <div class="col-cell text-500 text-muted hidden-sms hidden-xs pr-30">{{$steps['title']}}</div>

            @foreach($steps['steps'] as $num => $step)
                <div class="col-cell cell-icon pr-15 @if($num != $steps['active']){{'text-muted hidden-sms hidden-xs'}}@endif"><i class="zmdi zmdi-n-{{$num+1}}-square"></i></div>

                <div class="col-cell text-400 @if($num != $steps['active']){{'text-muted hidden-sms hidden-xs'}}@endif">{{$step}}</div>
                @if(($num+1) < count($steps['steps']))
                <div class="col-cell pl-20 pr-20 text-muted hidden-sms hidden-xs"><i class="zmdi zmdi-chevron-right"></i></div>
                @endif
            @endforeach



        </div>
    </div>
</nav>
<hr class="ma-0">