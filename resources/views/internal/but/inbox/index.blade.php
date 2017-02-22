@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container mt-30 mb-30">
            <div class="panel panel-table pt-20 pb-20">
                <table class="datatables table-action table" id="datatable">
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
    $(function () {
        $datatables('#datatable', '{!! route('internal.but.inbox.data') !!}', {
            columns: [
                {data: 'id'},
                {data: 'info'},
                {data: 'date'},
                {data: 'status', name: 'status'}
            ],
            order: [[0, 'asc']]
        });
    });
</script>
@endpush