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

        var Messenger = {
            getItems: function () {
                $.ajax({method: "GET", url: "{{route('messenger.items')}}/" + $type.val()})
                        .done(function (msg) {
                            $items.find('option').remove();
                            for (var item in msg) {
                                console.log(item, msg[item]);
                                $items.append('<option value="' + item + '">' + msg[item] + '</option>');
                            }
                            $items.trigger('change');
                            $items.removeClass('hide');
                        });
            },
            getMessages: function () {
                $.ajax({method: "GET", url: "{{route('messenger.messages')}}/" + $type.val() + '/' + $items.val()})
                        .done(function (msg) {
                            $messages.html(msg);
                            $messages.removeClass('hide');
                        });
            },
            sendMessage: function (form) {
                $.ajax({method: "POST", url: $(form).attr('action'), data: $(form).serialize()})
                        .done(function () {
                            console.log('yess');
                            $('#composeModal').modal('hide');
                        });
            }
        };

        $type.on('change', function () {
            Messenger.getItems();
        });

        $items.on('change', function () {
            Messenger.getMessages();
        });

        $(document).on('show.bs.modal', '#composeModal', function () {
            $('#compose').summernote();
        })

        $(document).on('submit', '#messageForm', function (e) {
            e.preventDefault();
            Messenger.sendMessage($(this));
            return false;
        });

    });
</script>
@endpush

@push('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
@endpush