@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container mt-30 mb-30">
            <div class="row row-10">
                <div class="column col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="panel">
                        <div class="pa-20">
                            {{trans('register.finish.first_message')}}

                            <div class="mt-20 mb-20 text-500 bg-1 pa-15 text-center">
                                <i class="zmdi zmdi-email text-muted mr-10"></i>
                                {{$email}}
                            </div>

                            <br>
                            {{trans('register.finish.notes')}}
                        </div>

                        <hr class="hr-muted ma-0">

                        <div class="pa-20">
                            <a href="{{url('/')}}" align="text-center">
                                {{trans('register.finish.back')}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection