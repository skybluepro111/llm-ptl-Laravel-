<tr @if($message->is_seen){{'class="unread"'}}@endif>
    <td>
        <div class="media">
            <a href="#" class="pull-left">
                <img alt="{{$message->user->name}}" src="{{$message->user->details->avatar}}" width="50" height="50"
                     class="media-object">
            </a>
            <div class="media-body">
                <span class="media-meta pull-right">{{$message->created_at->diffForHumans()}}</span>
                <h4 class="text-primary">{{$message->user->name}}</h4>
                <small class="text-muted"></small>
                <p class="email-summary">{!! $message->message !!}</p>
            </div>
        </div>
    </td>
</tr>


{{--<div class="media {{($message->user->id == auth()->user()->id) ? 'text-right' : 'text-left'}}">--}}
{{--<div class="h5">--}}
{{--<a href="" class="thumb-sm avatar">--}}
{{--<label class=""--}}
{{--for="">{{$message->user->id == auth()->user()->id?'You':$message->user->name}}</label>--}}
{{--</a>--}}
{{--</div>--}}
{{--<div class="media-body">--}}
{{--<div class="{{$message->user->id == auth()->user()->id?'pos-rlt wrapper b b-light r r-2x bg-light':'pos-rlt wrapper b b-light r r-2x'}}">--}}
{{--<p class="m-b-none">{{$message->message}}</p>--}}
{{--</div>--}}
{{--<small class="text-muted"><i--}}
{{--class="fa fa-check-circle text-success hide"></i> {{$message->time_ago}}--}}
{{--</small>--}}
{{--</div>--}}
{{--</div>--}}