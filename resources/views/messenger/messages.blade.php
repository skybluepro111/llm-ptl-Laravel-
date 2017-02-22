<div class="panel panel-default">
    <div class="panel-body">
        <div class="top col-md-12">
            <div class="pull-left">
                <h5 class="subtitle mb5">Inbox</h5>
                <p class="text-muted">Showing 1 - 15 of 230 messages</p>
            </div>
            <div class="pull-left">
                <a href="#" data-toggle="modal" data-target="#composeModal"
                   class="btn btn-danger btn-compose-email">Compose Email</a>
            </div>
        </div>

        <div class="table-responsive col-md-12">
            <table class="table table-email row">
                <tbody>
                @if($messages)
                    @foreach($messages as $message)
                        @include('messenger.partials.message', compact($message))
                    @endforeach
                @endif
                </tbody>
            </table>
        </div><!-- table-responsive -->

    </div><!-- panel-body -->
</div>


<!-- Modal -->
<div class="modal fade" id="composeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            {!! Form::open(['route' => 'messenger.sendMessage', 'id' => 'messageForm']) !!}
            <div class="modal-body">
                {!! Form::textarea('message', null, ['id' => 'compose']) !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="sendMessage">Send</button>
            </div>
            {!! Form::hidden('type', $type) !!}
            {!! Form::hidden('id', $id) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
