@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container mt-30 mb-30">
            <div class="panel panel-table pt-20 pb-20">
                <table class="table-action table" id="datatable">
                    <thead>
                    <tr>
                        <th>{{trans('dash.columns.no')}}</th>
                        <th>{{trans('dash.columns.fee_category')}}</th>
                        <th>{{trans('dash.columns.apply_date')}}</th>
                        <th>{{trans('dash.columns.total')}}</th>
                        <th>{{trans('dash.columns.status')}}</th>
                        <th class="tight no_filter">{{trans('dash.columns.actions')}}</th>
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
        $datatables('#datatable', '{!! route('dashboard.data') !!}', {
            columns: [
                {
                    data: 'id',
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    },
                    orderable: false
                },
                { data: 'category' },
                { data: 'apply_date' },
                { data: 'sum' },
                { data: 'status'},
                {data: 'action'}
            ],
            order : [ [ 0, 'asc' ] ]
        });
    });
</script>
@endpush