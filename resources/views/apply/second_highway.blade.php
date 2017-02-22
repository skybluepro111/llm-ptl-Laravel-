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
                    <font><font class="">
                            {{trans('apply.second.highway.title')}}
                        </font></font>
                </div>
            </div>

            <hr class="mt-10 mb-30">
            {!! Form::model($application, ['route' => ['apply.second', $type,], 'files' => true]) !!}
            <div class="row row-10">
                <div class="column col-sm-10 col-sm-offset-1">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">
                                <font><font>{{trans('apply.second.fields.category.title')}}</font></font>
                            </label>
                            <div class="col-sm-8">
                                <div class="radio">
                                    {!! Form::radio('category',
                                    'new', true,
                                    ['id' => 'category-1']) !!}
                                    <label for="category-1-1">
                                        <font><font>{{trans('apply.second.fields.category.first')}}</font></font>
                                    </label>
                                </div>
                                <!--
                                <div class="radio">
                                    <input type="radio" id="apply-2" name="apply">
                                    <label for="apply-2">
                                        Pembaharuan Tempoh Kelulusan
                                    </label>
                                </div>
                            -->
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">
                                <font><font class="">{{trans('apply.second.fields.highway')}}</font></font>
                            </label>
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
                            <label class="col-sm-4 control-label">
                                <font><font>{{trans('apply.second.coordinates')}}</font></font>
                            </label>
                            <div class="col-sm-6">
                                <a href="#" data-toggle="modal" data-target="#guide"
                                   class="btn btn-success btn-block-responsive pl-20 pr-20 pt-10 pb-10 mt-10 text-uppercase"><font><font>
                                            {{trans('apply.second.map')}}
                                        </font></font><i class="zmdi zmdi-arrow-right ml-20"></i>
                                </a>
                                <div id="coordinatesContainer"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--end.row-->

            @include('apply._partials.documents')

            @include('apply._partials.validation')

            @include('apply._partials.coordinates', ['highways' => $highways->lists('coordinates', 'id')])

            {!! Form::close() !!}
        </div>
    </div>
@endsection