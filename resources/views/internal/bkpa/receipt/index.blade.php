@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container mt-30 mb-30">
            <div class="panel panel-table pt-20 pb-20">
                <table class="table-action table" id="datatable">
                    <thead>
                    <tr>
                        <th>{{trans('dash.columns.no')}}</th>
                        <th>{{trans('dash.columns.app_id')}}</th>
                        <th>{{trans('dash.columns.fee_category')}}</th>
                        <th>{{trans('dash.columns.breakdown')}}</th>
                        <th>{{trans('dash.columns.total_payments')}}</th>
                        <th>{{trans('dash.columns.payment_date')}}</th>
                        <th>{{trans('dash.columns.pay_state')}}</th>
                        <th>{{trans('dash.columns.status')}}</th>
                        <th>{{trans('dash.columns.no_payment_slip')}}</th>
                        <th class="tight no_filter">{{trans('dash.columns.actions')}}</th>
                    </tr>
                    </thead>

                </table>
            </div>
        </div>
    </div>
    <div id="action"></div>
    @include('internal.bkpa._partials.documentModal')
@endsection

@push('scripts')
<script>
    $(function() {
        $datatables('#datatable', '{!! route('internal.bkpa.receipt.data') !!}', {
            columns: [
                {
                    data: null,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    },
                    orderable: false
                },
                { data: 'app_id' },
                {data: 'category_fee'},
                {data: 'breakdown'},
                { data: 'sum' },
                { data: 'date' },
                { data: 'state' },
                { data: 'status' },
                { data: 'slug' },
                { data: 'action' }
            ],
            order : [ [ 0, 'asc' ] ]
        });

        $(document).on('click','.documentModal',function(e){
            e.preventDefault();
            var url = $(this).data('url');
            $('#documentModal').find('iframe').attr('src', url);
            $('#documentModal').modal();
        });

        $(document).on('click','.actionModal',function(e){
            e.preventDefault();
            var _token = '{{ csrf_token() }}';
            var id = $(this).data('id');
            $.ajax({
                type:'GET',
                url:'{{ route('internal.bkpa.receipt.action') }}/'+id,
                data:{_token:_token},
                success:function(data){
                    $('#action').html(data);
                    $('#actionModal').modal();
                }
            });
        });

        $(document).on('submit', '#actionForm', function (e) {
            $('#actionModal').modal('hide');
            $('.processingModal').modal('show');

            e.preventDefault();
            var formData = new FormData($(this)[0]);
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                //async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    location.reload();
                },
                error: function(response){
                    console.log(response);
                }
            });
        });
    });

</script>
@endpush