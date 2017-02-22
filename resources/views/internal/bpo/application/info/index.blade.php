@extends('layouts.app')

@section('tabs')
    @include('partials.tabs', compact('tabs'))
@endsection

@section('content')
    <div class="content">
        <div class="container mt-30 mb-30 tab-content">
            @include('internal.bpo.application.info.company', compact('application'))
            @include('internal.bpo.application.info.project', compact('application'))
        </div>
    </div>
@include('internal.bpo._partials.documentModal')
@endsection

@push('scripts')
<script>
$(function(){
    $(document).on('click','.documentModal',function(e){
        e.preventDefault();
        var url = $(this).data('url');
        $('#documentModal').find('iframe').attr('src', url);
        $('#documentModal').modal();
    });
});
</script>
@endpush()