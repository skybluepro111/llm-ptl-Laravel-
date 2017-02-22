@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container mt-30 mb-30">
            <div class="panel panel-table pt-20 pb-20">
                <table class="datatables table-action table" id="datatable">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>No Fail Projek</th>
                        <th>Jenis Pembangunan</th>
                        <th>Tarikh Permohonan</th>
                        <th>Status</th>
                        <th class="tight no_filter">Tindakan</th>
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
        $datatables('#datatable', '{!! route('internal.but.project.data') !!}', {
            columns: [
                {data: 'id'},
                {data: 'num'},
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
                url: '{{ route('internal.but.project.action') }}/' + id,
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