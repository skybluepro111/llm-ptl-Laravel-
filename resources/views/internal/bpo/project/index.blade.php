@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container mt-30 mb-30">
            <div class="panel panel-table pt-20 pb-20">
                <table class="datatables table-action table" id="datatable">
                    <thead>
                    <tr>
                        <th>{{trans('dash.columns.no_payment_slip')}}</th>
                        <th>{{trans('dash.columns.no_file_project')}}</th>
                        <th>{{trans('dash.columns.development_type')}}</th>
                        <th>{{trans('dash.columns.date_application')}}</th>
                        <th>{{trans('dash.columns.status')}}</th>
                        <th class="tight no_filter">{{trans('dash.columns.actions')}}</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <div id="action"></div>
@endsection

@push('scripts')
<script>
    $(function () {
        $datatables('#datatable', '{!! route('internal.bpo.project.data') !!}', {
            columns: [
                {data: 'id'},
                {data: 'slug'},
                {data: 'type'},
                {data: 'date_application'},
                {data: 'status'},
                {data: 'action'}
            ],
            order: [[0, 'asc']]
        });


        $(document).on('click', '.actionModal', function (e) {
            e.preventDefault();
            var _token = '{{ csrf_token() }}';
            var id = $(this).data('id');
            $.ajax({
                type: 'GET',
                url: '{{ route('internal.bpo.project.action') }}/' + id,
                data: {_token: _token},
                success: function (data) {
                    $('#action').html(data);
                    $('#actionModal').modal();
                }
            });
        });

        $(document).on('submit', '#actionForm', function (e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    $('#actionModal').modal('hide');
                    location.reload();
                }
            });
        });
    });
</script>
@endpush