<div class="modal fade" id="actionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(['route' => ['internal.bpo.application.actionPost', $application], 'id' => 'actionForm']) !!}
            {!! Form::hidden('application_id', $application->id) !!}
            <div class="modal-header">
                <div class="row-table">
                    <b class="col-cell">
                        {{trans('bpo.application.modal.application_details')}}
                    </b>

                    <div class="col-cell cell-tight" data-dismiss="modal">
                        <i class="zmdi zmdi-close text-muted size-20"
                           style="vertical-align: middle; cursor: pointer;"></i>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('register.second.details.company_name')}}</label>
                        <div class="col-sm-7">
                            <div class="form-control-static">{{$application->user->details->name}}</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('dash.columns.fee_category')}}</label>
                        <div class="col-sm-7">
                            <div class="form-control-static">{{$application->payment->fee->name}}</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('dash.columns.total')}}</label>
                        <div class="col-sm-7">
                            <div class="form-control-static">{{$application->payment->sum}}</div>
                        </div>
                    </div>

                    <hr style="margin: 15px -15px; border-color: #eee;">
                    <b class="col-cell">
                        {{trans('bpo.application.modal.confirmation_bkpa')}}
                    </b><br>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('dash.applications.title')}}</label>
                        <div class="col-sm-7">
                            <div class="form-control-static text-success">
                                {{--TODO What to place?--}}
                                Lengkap
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('apply.fourth.payment_details')}}</label>
                        <div class="col-sm-7">
                            <div class="form-control-static text-success">
                                {{trans('bkpa.no_payment_slip')}} : {{$application->payment->slip_num}}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('general.note')}}</label>
                        <div class="col-sm-7">
                            <div class="form-control-static text-muted">
                                {{$application->payment->review}}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('general.checked_by')}}</label>
                        <div class="col-sm-7">
                            <div class="form-control-static">
                                <b>{{$application->phase->user->name}}</b>
                                {{--TODO user's department--}}
                                <div>{{trans('bkpa.officer_bkpa')}}</div>
                                <div class="text-muted text-sm text-uppercase mt-5">
                                    {{$application->phase->created_at->formatLocalized(config('app.date_format'))}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr style="margin: 15px -15px; border-color: #eee;">
                    <b class="col-cell">
                        {{trans('bpo.modal.verification')}}
                    </b><br>
                    <div class="form-group">
                        <label class="col-sm-5 control-label">
                            {{trans('general.region_code')}}
                        </label>
                        <div class="col-sm-4">
                            <div class="form-control-select">
                                {!! Form::select('region',
                                $offices,
                                $application->highway->office_id,
                                ['class'=> 'form-control', 'disabled' => 'disabled']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('application.status')}}</label>
                        <div class="col-sm-7">
                            <div class="radio">
                                {!! Form::radio('status',
                                '1',
                                null,
                                ['id' => 'status-1']) !!}
                                <label for="status-1">
                                    {{trans('general.complete')}}
                                </label>
                            </div>

                            <div class="radio">
                                {!! Form::radio('status',
                                '0',
                                null,
                                ['id' => 'payment-2']) !!}
                                <label for="status-2">
                                    {{trans('general.incomplete')}}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('general.action')}}</label>
                        <div class="col-sm-7">
                            <div class="radio">
                                <input type="radio" id="act-1" name="act">
                                <label for="act-1">
                                    {{trans('bpo.modal.act.first')}}
                                </label>
                            </div>

                            <div class="radio">
                                <input type="radio" id="act-2" name="act">
                                <label for="act-2">
                                    {{trans('bkpa.back_to_applicant')}}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('general.note')}}</label>
                        <div class="col-sm-7">
                            {!! Form::textarea('note', null, ['rows' => 5, 'class' => 'form-control']) !!}
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('general.close')}}</button>
                <button type="submit" class="btn btn-primary">{{trans('general.save')}}</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>