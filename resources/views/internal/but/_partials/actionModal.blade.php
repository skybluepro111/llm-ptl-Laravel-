<div class="modal fade" id="actionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(['route' => ['internal.but.application.actionPost', $application], 'id' => 'actionForm']) !!}
            {!! Form::hidden('application_id', $application->id) !!}
            <div class="modal-header">
                <div class="row-table">
                    <b class="col-cell">
                        {{trans('general.label.application_details')}}
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
                        <label class="col-sm-5 control-label">{{trans('general.label.company_name')}}</label>
                        <div class="col-sm-7">
                            <div class="form-control-static">{{$application->user->details->name}}</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('general.label.category')}}</label>
                        <div class="col-sm-7">
                            <div class="form-control-static">{{$application->payment->processing_fee->name}}</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('general.label.total_process_fee')}}</label>
                        <div class="col-sm-7">
                            <div class="form-control-static">{{Helper::priceFormat($application->payment->sum)}}</div>
                        </div>
                    </div>

                    <hr style="margin: 15px -15px; border-color: #eee;">
                    <b class="col-cell">
                        {{trans('general.label.verify_BKPA')}}
                    </b><br>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('general.label.application_status')}}</label>
                        <div class="col-sm-7">
                            <div class="form-control-static text-success">
                                Lengkap
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('general.label.slip_no')}}</label>
                        <div class="col-sm-7">
                            <div class="form-control-static text-success">
                                {{$application->payment->slip_num}}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('general.label.notes')}}</label>
                        <div class="col-sm-7">
                            <div class="form-control-static text-muted">
                                {{$application->payment->review}}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('general.label.verified_by')}}</label>
                        <div class="col-sm-7">
                            <div class="form-control-static">
                                <b>{{$application->phase->user->name}}</b>
                                {{--TODO user's department--}}
                                <div class="hidden">Pegawai Tadbir BKPA</div>
                                <div class="text-muted text-sm text-uppercase mt-5 hidden">
                                    {{$application->phase->created_at->formatLocalized(config('app.date_format'))}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr style="margin: 15px -15px; border-color: #eee;">
                    <b class="col-cell">
                        {{trans('general.label.application_verification')}}
                    </b><br>
                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('general.label.regional_code')}}</label>
                        <div class="col-sm-4">
                            <div class="form-control-select">
                                {!! Form::select('region', $offices, $application->highway->office_id, ['class'=> 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('general.label.application_status')}}</label>
                        <div class="col-sm-7">
                            <div class="radio">
                                {!! Form::radio('status', '1', null, ['id' => 'status-1']) !!}
                                <label for="status-1">
                                    {{trans('general.complete')}}
                                </label>
                            </div>

                            <div class="radio">
                                {!! Form::radio('status', '0', null, ['id' => 'status-2']) !!}
                                <label for="status-2">
                                    {{trans('general.incomplete')}}
                                </label>
                            </div>
                        </div>
                    </div>

                    {{--<div class="form-group">--}}
                        {{--<label class="col-sm-5 control-label">Tindakan</label>--}}
                        {{--<div class="col-sm-7">--}}
                            {{--<div class="radio">--}}
                                {{--<input type="radio" id="act-1" name="act">--}}
                                {{--<label for="act-1">--}}
                                    {{--Jana nombor fail--}}
                                {{--</label>--}}
                            {{--</div>--}}

                            {{--<div class="radio">--}}
                                {{--<input type="radio" id="act-2" name="act">--}}
                                {{--<label for="act-2">--}}
                                    {{--Kembali kepada Pemohon--}}
                                {{--</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('general.label.notes')}}</label>
                        <div class="col-sm-7">
                            {!! Form::textarea('note', null, ['rows' => 5, 'class' => 'form-control']) !!}
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('general.close')}}</button>
                <button type="submit" class="btn btn-primary">{{trans('general.submit')}}</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>