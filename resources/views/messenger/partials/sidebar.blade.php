<div class="col-sm-3 col-lg-2">
    <ul class="nav nav-pills nav-stacked nav-email mb20">
        @foreach($applications as $application)
            <li>
                <a href="{{route('messenger.read', ['id' => $application->id])}}">
                    <span class="badge pull-right">0</span>
                    <i class="glyphicon glyphicon-folder-open"></i> Application {{$application->id}}
                </a>
            </li>
        @endforeach
    </ul>

</div>