<div class="modal fade" id="actionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(['route' => ['internal.bpo.project.postModal', $project], 'id' => 'actionForm']) !!}
            <div class="modal-header">
                <div class="row-table">
                    <b class="col-cell">
                        {{trans('bpo.modal.title')}}
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
                        <label class="col-sm-5 control-label">{{trans('dash.columns.no_file_project')}}</label>
                        <div class="col-sm-7">
                            <div class="form-control-static">
                                {{$project->slug}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('register.second.details.company_name')}}</label>
                        <div class="col-sm-7">
                            <div class="form-control-static">
                                {{$project->application->user->details->name}}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('dash.columns.development_type')}}</label>
                        <div class="col-sm-7">
                            <div class="form-control-static">
                                {{$project->application->payment->fee->development_type->name}}
                            </div>
                        </div>
                    </div>

                    <hr style="margin: 15px -15px; border-color: #eee;">

                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('general.regional_office')}}</label>
                        <div class="col-sm-7">
                            <div class="form-control-select">
                                {!! Form::select('office_id', $offices, null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('general.concessionaire')}}</label>
                        <div class="col-sm-7">
                            <div class="form-control-static text-muted">
                                <div class="form-control-icon form-control-locked">
                                    <i class="zmdi zmdi-lock text-muted pull-right" data-toggle="tooltip"
                                       data-placement="top" data-original-title="Dikunci & ditetapkan"></i>
                                    <div class="form-control">
                                        KONSORTIUM LEBUHRAYA UTARA-TIMUR (KL) SDN. BHD.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr style="margin: 15px -15px; border-color: #eee;">

                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('general.action')}}</label>
                        <div class="col-sm-7">
                            <div class="checkbox">
                                <input type="checkbox" name="status" id="status">
                                <label for="status">
                                    {{trans('bpo.project.modal.status')}}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('general.close')}}</button>
                <button class="btn btn-primary">{{trans('general.send')}}</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>