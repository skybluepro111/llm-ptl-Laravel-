@extends('layouts.app')

@section('toolbar')
    @include('partials.steps', compact($steps))
@endsection

@section('content')
    <div class="content">
        <div class="container mt-30 mb-30">
            <div class="row row-10">
                <div class="column col-sm-9">
                    <div class="mb-30"><font><font class="">{{trans('register.first')}}</font></font></div>

                    <div class="row row-10">
                        @foreach(trans('register.types') as $code => $type)
                        <div class="column col-xs-6 col-sm-3">
                            <a href="{{route('register.step2', ['type' => $code])}}"
                               class="panel panel-link text-center" style="display: block;">
                                <div class="pa-20">
                                    <i class="zmdi {{$type['icon']}}" style="font-size: 64px;"></i>
                                </div>
                                <hr class="hr-muted ma-0">
                                <div class="panel-foot text-500 pa-20 pt-15 pb-15"><font><font>{{$type['title']}}</font></font>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
