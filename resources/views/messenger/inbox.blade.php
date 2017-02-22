<div class="panel panel-default">
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-email">
                <tbody>
                @foreach($messages as $message)
                    <tr class="unread">
                        <td>
                            <div class="media">
                                <a href="#" class="pull-left">
                                    <img alt="{{$message->user->name}}" src="{{$message->user->details->avatar}}"
                                         class="media-object" width="40" height="40">
                                </a>
                                <div class="media-body">
                                    <span class="media-meta pull-right">Today at 7:30am</span>
                                    <h4 class="text-primary">{{$message->user->name}}</h4>
                                    <small class="text-muted"></small>
                                    <p class="email-summary">{{$message->message}}</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div><!-- table-responsive -->

    </div><!-- panel-body -->
</div><!-- panel -->