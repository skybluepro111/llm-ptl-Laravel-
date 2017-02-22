@extends('layouts.app')

@section('toolbar')
    @include('partials.steps', compact($steps))
@endsection

@section('content')

    <div class="content">
        <div class="container mt-30 mb-30">
            <div class="row row-10">
                <div class="column col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="panel">
                        {!! Form::model($application, ['route' => ['apply.fourth', $type]]) !!}
                        <div class="pa-20">
                            <h4 class="ma-0 mb-20 text-400 text-success">
                                {{trans('apply.fourth.title')}}
                            </h4>
                            {{trans('apply.fourth.subtitle')}}

                            <table class="table table-bordered mt-20 mb-20">
                                <thead>
                                <tr>
                                    <th colspan="2">
                                        <span class="text-muted text-sm text-400 text-uppercase">{{trans('dash.columns.fee_category')}}</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ $fee_name }}</td>
                                    <td width="45%">{{trans('general.currency.symbol')}} {{$amount}}</td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="table table-bordered mt-20 mb-20">
                                <thead>
                                <tr>
                                    <th colspan="2">
                                        <span class="text-muted text-sm text-400 text-uppercase">{{trans('apply.fourth.payment_details')}}</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{trans('apply.fourth.payment_type')}}</td>
                                    <td width="45%">{!!trans('apply.third.payment.method.' . $payment->pay)!!}</td>
                                </tr>

                                <tr>
                                    <td>{{trans('apply.third.slip_num')}}</td>
                                    <td>{{ $payment->slip_num  }}</td>
                                </tr>

                                <tr>
                                    <td>{{trans('apply.fourth.total_payments')}}</td>
                                    <td>{{trans('general.currency.symbol')}} {{$payment->sum}}</td>
                                </tr>

                                <tr>
                                    <td>{{trans('apply.third.payment.date')}}</td>
                                    <td>{{ $payment->payment_date }}</td>
                                </tr>

                                <tr>
                                    <td>{{trans('apply.third.bank')}}</td>
                                    <td>{{trans('apply.third.banks.' . $payment->bank)}}</td>
                                </tr>
                                </tbody>
                            </table>

                            <p class="mb-20">
                                {{trans('apply.fourth.notice')}}
                            </p>
                        </div>

                        <hr class="hr-muted ma-0">

                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-3">
                                <a href="{{route('dashboard.index')}}"
                                   class="btn btn-success btn-block-responsive pl-20 pr-20 pt-10 pb-10 mt-10 text-uppercase">
                                    {{trans('apply.fourth.button')}}
                                </a>

                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection