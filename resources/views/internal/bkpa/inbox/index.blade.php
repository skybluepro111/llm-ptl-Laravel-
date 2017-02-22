@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container mt-30 mb-30">
            <div class="panel panel-table pt-20 pb-20">
                <table class="table-action table" id="datatable">
                    <thead>
                    <tr>
                        <th>{{trans('dash.columns.no')}}</th>
                        <th>{{trans('dash.columns.info')}}</th>
                        <th>{{trans('dash.columns.date_notification')}}</th>
                        <th>{{trans('dash.columns.status')}}</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(function() {
        $datatables('#datatable', '{!! route('internal.bkpa.inbox.data') !!}', {
            columns: [
                {
                    data: 'id',
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    },
                    orderable: false
                },
                { data: 'info' },
                { data: 'date' },
                { data: 'status' }
            ],
            order : [ [ 0, 'asc' ] ]
        });
    });
</script>
@endpush