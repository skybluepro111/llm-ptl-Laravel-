@extends('layouts.app')

@section('toolbar')
    @include('partials.steps', compact($steps))
@endsection

@section('content')
    <div class="content">
        <div class="container mt-30 mb-30">
            <div class="form-title row-table text-500">
                <div class="col-cell cell-icon">
                    <i class="zmdi zmdi-n-1-square text-muted mr-5"></i>
                </div>
                <div class="col-cell pl-10">{{trans('apply.first.hint')}}</div>
            </div>

            <hr class="mt-10 mb-30">

            <div class="row row-10">
                <div class="column col-sm-9">
                    <div class="row row-10">
                        @foreach(trans('apply.first.types') as $code => $type)
                        <div class="column col-xs-6 col-sm-4">
                            <a href="{{route('apply.second', ['type'=>$code])}}" class="panel panel-link text-center" style="display: block;">
                                <div class="pa-20">
                                    <i class="zmdi zmdi-city-alt" style="font-size: 64px;"></i>
                                </div>
                                <hr class="hr-muted ma-0">
                                <div class="panel-foot text-500 pa-20 pt-15 pb-15">{{$type}}</div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection