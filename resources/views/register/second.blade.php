@extends('layouts.app')

@section('toolbar')
    @include('partials.steps', compact($steps))
@endsection

@section('content')

    <div class="content">
        <div class="container mt-30 mb-30">

            @include('partials.errors')

            <div class="form-title row-table text-500">
                <div class="col-cell cell-icon">
                    <i class="zmdi zmdi-n-1-square text-muted mr-5"></i>
                </div>
                <div class="col-cell pl-10">
                    {{trans('register.second.details.title')}}
                </div>
            </div>

            <hr class="mt-10 mb-30">
            {!! Form::open() !!}
            {!! Form::hidden('type', $type) !!}
            {!! Form::hidden('contractor_category_id', $contractor_category_id) !!}
            <div class="row row-10" id="company_details">
                <div class="column col-sm-10 col-sm-offset-1">
                    <div class="form-horizontal">
                        @if($type == 'company')
                            <div class="form-group">
                                <label class="col-sm-4 control-label">{{trans('register.second.details.category')}}</label>
                                <div class="col-sm-4">
                                    <div class="form-control-select">
                                        {!! Form::select('contractor_category_id',
                                        $contractors,
                                        old('contractor_category_id'),
                                        ['class' => 'form-control', 'id' => 'contractor_category']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" id="concessionaires_list">
                                <label class="col-sm-4 control-label">
                                    {{trans('register.second.details.concessionaires')}}
                                </label>
                                <div class="col-sm-4">
                                    <div class="form-control-select">
                                        {!! Form::select(
                                        'concessionaire_id',
                                        $concessionaires->lists('name', 'id'),
                                        old('concessionaire_id'),
                                        ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="form-group">
                            <label class="col-sm-4 control-label">
                                {{trans('register.second.details.company_name')}}
                            </label>
                            <div class="col-sm-8">
                                {!! Form::text('company_name',
                                old('com_name'),
                                ['class' => 'form-control', 'id' => 'company_name']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">
                                {{trans('register.second.details.registration')}}
                            </label>
                            <div class="col-sm-5">
                                {!! Form::text('registration_number',
                                old('registration_number'),
                                ['class' => 'form-control', 'id' => 'registration_number']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">{{trans('register.second.details.address')}}</label>
                            <div class="col-sm-8">
                                {!! Form::text('address',
                                old('address'),
                                ['class' => 'form-control',
                                'placeholder' => trans('register.address.address'),
                                'id' => 'address']) !!}
                                {!! Form::text('post_address',
                                old('post_address'),
                                ['class' => 'form-control mt-10',
                                'placeholder' => trans('register.address.post_address'),
                                'id' => 'post_address']) !!}
                                <br>
                                <div class="row row-5">
                                    <div class="column col-sm-3">
                                        {!! Form::text('postcode',
                                        old('postcode'),
                                        ['class' => 'form-control',
                                        'placeholder' => trans('register.address.postcode'),
                                        'id' => 'postcode']) !!}
                                    </div>
                                    <div class="column col-sm-4">
                                        {!! Form::text('city',
                                        old('city'),
                                        ['class' => 'form-control',
                                        'id' => 'city',
                                        'placeholder' => trans('register.address.city')]) !!}
                                    </div>
                                    <div class="column col-sm-5">
                                        {!! Form::text('state',

                                        old('state'),
                                        ['class' => 'form-control',
                                        'id' => 'state',
                                        'placeholder' => trans('register.address.state')]) !!}
                                    </div>
                                </div><br>
                                <div class="row row-5">
                                    <div class="column col-sm-4">
                                        {!! Form::text('country',
                                        old('country'),
                                        ['class' => 'form-control',
                                        'id' => 'country',
                                        'placeholder' => trans('register.address.country')]) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">{{trans('register.second.details.phone')}}</label>
                            <div class="col-sm-4">
                                {!! Form::text(
                                'phone_office',
                                old('phone_office'),
                                ['class' => 'form-control',
                                'id' => 'phone_office']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">
                                {{trans('register.second.details.fax')}}
                            </label>
                            <div class="col-sm-4">
                                {!! Form::text('fax_office',
                                old('fax_office'),
                                ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end.row-->

            <div class="form-title row-table text-500">
                <div class="col-cell cell-icon">
                    <i class="zmdi zmdi-n-2-square text-muted mr-5"></i>
                </div>
                <div class="col-cell pl-10">
                    {{trans('register.second.account.title')}}
                </div>
            </div>

            <hr class="mt-10 mb-30">

            <div class="row row-10">
                <div class="column col-sm-10 col-sm-offset-1">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">
                                {{trans('register.second.account.name')}}
                            </label>
                            <div class="col-sm-8">
                                {!! Form::text('name',
                                old('name'),
                                ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">
                                {{trans('register.second.account.email')}}
                            </label>
                            <div class="col-sm-5">
                                {!! Form::text('email',
                                old('email'),
                                ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">
                                {{trans('register.second.details.phone')}}
                            </label>
                            <div class="col-sm-5">
                                {!! Form::text('phone',
                                old('phone'),
                                ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">
                                {{trans('general.password')}}
                            </label>
                            <div class="col-sm-4">
                                {!! Form::password('password',
                                ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">
                                {{trans('general.password_confirm')}}
                            </label>
                            <div class="col-sm-4">
                                {!! Form::password('password_confirmation',
                                ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-4">
                                <button type="submit"
                                        class="btn btn-success btn-block-responsive pl-20 pr-20 pt-10 pb-10 mt-10 text-uppercase">
                                    {{trans('general.continue')}}
                                    <i class="zmdi zmdi-arrow-right ml-20"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end.row-->
            {!! Form::close() !!}
        </div>
    </div>

@endsection

@push('styles')
<style>
    #concessionaires_list {
        display: none;
    }
</style>
@endpush

@push('scripts')
@if($type == 'company')
<script>
    var concessionaires = {};
    @foreach($concessionaires as $concessionaire)
            concessionaires[{{$concessionaire->id}}] = {
        name: '{{$concessionaire->name}}',
        registration_number: '##',
        address: '{{$concessionaires[0]->address}}',
        city: '{{$concessionaires[0]->city}}',
        postcode: '{{$concessionaires[0]->postcode}}',
        state: '{{$concessionaires[0]->state}}',
        country: '{{$concessionaires[0]->country}}',
        phone_office: '{{$concessionaires[0]->phone}}'
    };
    @endforeach

    function setConcessionaire(index) {
        var concessionaire = concessionaires[index];
        for (var partName in concessionaire) {
            $('#' + partName).val(concessionaire[partName]);
        }
    }

    var $concessionaires_list = $('#concessionaires_list');
    $('#contractor_category').on('change', function () {
        var index = $(this).find("option:selected").index();
        if (index == 1) {
            $concessionaires_list.show();
            setConcessionaire(1);
        }else if(index == 0) {
            $concessionaires_list.hide();
            $("#company_details input").val("");
        }
    });
    $concessionaires_list.on('change', function () {
        var id = parseInt($(this).find('option:selected').attr('value'));
        setConcessionaire(id);
    });
</script>
@endif
@endpush