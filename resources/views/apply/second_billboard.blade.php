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
                    {{trans('apply.second.ad.location_type.title')}}
                </div>
            </div>

            <hr class="mt-10 mb-30">
            {!! Form::model($application,
            ['route' => ['apply.second', $type],
            'files' => true]) !!}

            <div class="row row-10">

                <div class="column col-sm-10 col-sm-offset-1">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">{{trans('apply.second.fields.category.title')}}</label>
                            <div class="col-sm-8">
                                <div class="radio">
                                    {!! Form::radio('category', 'new', true) !!}
                                    {!! Form::label('category', trans('apply.second.fields.category.first')) !!}
                                </div>
                                <!--
                                <div class="radio">
                                    <input type="radio" id="apply-2" name="apply">
                                    <label for="apply-2">
                                        {{trans('apply.second.fields.category.first')}}
                                    </label>
                                </div>
                            -->
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">{{trans('apply.second.fields.highway')}}</label>
                            <div class="col-sm-5">
                                <div class="form-control-selects">
                                    {!! Form::select('highway_id',
                                    $highways->lists('name', 'id'),
                                    old('highway_id', $application->highway_id),
                                    ['class' => 'form-control form-chosen', 'id' => 'highway']) !!}
                                </div>
                            </div>
                        </div>

                        @include('apply._partials.location_direction')

                        <div class="form-group">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">{{trans('apply.second.fields.from_city')}}</label>
                                <div class="col-sm-3">
                                    {!! Form::text('from_city', old('from_city'), ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">{{trans('apply.second.fields.to_city')}}</label>
                                <div class="col-sm-3">
                                    {!! Form::text('to_city', old('to_city'), ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">{{trans('apply.second.fields.coordinates')}}</label>
                            <div class="col-sm-6">
                                <a href="#" data-toggle="modal" data-target="#guide"
                                   class="btn btn-success btn-block-responsive pl-20 pr-20 pt-10 pb-10 mt-10 text-uppercase">
                                    {{trans('apply.second.map')}}
                                    <i class="zmdi zmdi-arrow-right ml-20"></i>
                                </a>
                                <div id="coordinatesContainer"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">{{trans('apply.second.fields.area')}}</label>
                            <div class="col-sm-3">
                                {!! Form::text('area', old('area'), ['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">{{trans('apply.second.fields.zone.title')}}</label>
                            <div class="col-sm-3">
                                <div class="form-control-select">
                                    {!! Form::select('zone_id', $zones,
                                    old('zone'), ['class' => 'form-control', 'id' => 'zone']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">{{trans('apply.second.fields.authority.title')}}</label>
                            <div class="col-sm-6">
                                <div class="form-control-select">
                                    {!! Form::select('authority_id', $local_authorities,
                                    old('authority'), ['class' => 'form-control', 'id' => 'authority']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end.row-->

            @include('apply._partials.documents')

            @include('apply._partials.validation')

            @include('apply._partials.coordinates', ['highways' => $highways->lists('coordinates', 'id')])

            {!! Form::hidden('ls_file_append', '', ['id' => 'ls_file_append', 'class' => 'ls_file_append']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection

@push('scripts')
<script>
    var num_file_append = 1;
    var ls_file_append = '';
    $(document).ready(function(){
        //: Make lat, lng empty on load
        $('#lat').val('');
        $('#lng').val('');

        //: Add image_location
        $('.add_image_location').click(function(){
            num_file_append ++;
            var file_append = `<div class="fileinput fileinput-new input-group mt-5" data-provides="fileinput">
                                    <div class="form-control" data-trigger="fileinput"><i
                                                class="glyphicon glyphicon-file fileinput-exists"></i>
                                        <span class="fileinput-filename"></span>
                                    </div>

                                    <span class="input-group-addon btn btn-default btn-file text-400">
                                        <span class="fileinput-new">{{trans('apply.files.buttons.select')}}</span>
                                        <span class="fileinput-exists">{{trans('apply.files.buttons.change')}}</span>
                                        {!! Form::file('image_location-`+num_file_append+`') !!}
                                    </span>
                                    <a href="#"
                                       class="input-group-addon btn btn-default fileinput-exists"
                                       data-dismiss="fileinput">
                                        {{trans('apply.files.buttons.remove')}}
                                    </a>
                                </div>`;
            var new_file_append = 'image_location-'+num_file_append;
            ls_file_append = $('.ls_file_append').val();
            if(ls_file_append ==''){
                ls_file_append = new_file_append;
            }
            else{
                ls_file_append += ','+new_file_append;
            }
            $('.ls_file_append').val(ls_file_append);
            $('.image_location_append').append(file_append);

        });
    });

    $('#guide').on('shown.bs.modal', function (e) {
        initialize();
    });

    $('#zone').on('change', function () {
        var zone = $(this).val();
        $.ajax({method: "GET", url: "{{route('apply.local_authorities')}}/" + zone})
                .done(function (msg) {
                    var $authority = $('#authority');
                    $authority.find('option').remove();
                    for (item in msg) {
                        $authority.append('<option value="' + item + '">' + msg[item] + '</option>');
                    }
                });
    });
</script>
@endpush