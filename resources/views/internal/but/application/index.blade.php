@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container mt-30 mb-30">
            <div class="panel panel-table pt-20 pb-20">
                <table class="datatables table-action table" id="datatable">
                    <thead>
                    <tr>
                        <th>{{trans('dash.columns.no')}}</th>
                        <th>{{trans('dash.columns.type_application')}}</th>
                        <th>{{trans('dash.columns.breakdown')}}</th>
                        <th>{{trans('dash.columns.applicant')}}</th>
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
        $datatables('#datatable', '{!! route('internal.but.application.data') !!}', {
            columns: [
                {
                    data: null,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    },
                    orderable: false
                },
                {data: 'type'},
                {data: 'breakdown'},
                {data: 'applicant'},
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
                url: '{{ route('internal.but.application.action') }}/' + id,
                data: {_token: _token},
                success: function (data) {
                    $('#action').html(data);
                    $('#actionModal').modal();
                }
            });
        });

        $(document).on('submit', '#actionForm', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (data) {
                    $('#actionModal').modal('hide');
                    location.reload();
                }
            });
        });
    });
</script>
@endpush