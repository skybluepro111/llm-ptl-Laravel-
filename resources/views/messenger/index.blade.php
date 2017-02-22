@extends('layouts.app')


@section('content')
    <div class="content">
        <div class="container mt-30 mb-30">

            <div class="col-sm-12 col-lg-12">
                <form class="form-inline">
                    <select name="type" id="type" class="form-control">
                        <option value="">Type</option>
                        <option value="application">Application</option>
                        <option value="project">Project</option>
                    </select>
                    <select name="items" id="items" class="form-control hide">
                    </select>
                </form>
            </div>

            <div class="col-sm-12 col-lg-12">
                <div id="messages"></div>
            </div>
        </div>
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
                {!! Form::hidden($type.'_id', $id) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
<script>
    $(function () {
        var $type = $('#type');
        var $items = $('#items');
        var $messages = $('#messages');
        var $form = $('#messageForm');
        var $composeModal = $('#composeModal');
        $type.on('change', function () {
            $.ajax({method: "GET", url: "{{route('messenger.items')}}/" + $type.val()})
                    .done(function (msg) {
                        $items.find('option').remove();
                        for (var item in msg) {
                            console.log(item, msg[item]);
                            $items.append('<option value="' + item + '">' + msg[item] + '</option>');
                        }
                        $items.removeClass('hide');
                    });
        });

        $items.on('change', function () {
            $.ajax({method: "GET", url: "{{route('messenger.messages')}}/" + $type.val() + '/' + $(this).val()})
                    .done(function (msg) {
                        $messages.html(msg);
                        $messages.removeClass('hide');
                    });
        });

        $composeModal.on('shown.bs.modal', function () {
            $('#compose').summernote();
        })

        $form.on('submit', function (e) {
            e.preventDefault();
            $.ajax({method: "POST", url: $(this).attr('action'), data: $(this).serialize()})
                    .done(function () {
//                        $composeModal.hide();
                    });
            return false;
        });

    });
</script>
@endpush

@push('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
@endpush