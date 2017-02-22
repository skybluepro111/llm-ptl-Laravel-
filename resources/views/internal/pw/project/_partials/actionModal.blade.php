<div class="modal fade" id="actionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(
            ['route' => ['internal.pw.project.actionPost', $project],
            'files' => true,
            'id' => 'actionForm'
            ]) !!}
            {!! Form::hidden('project_id', $project->id) !!}
            <div class="modal-header">
                <div class="row-table">
                    <b class="col-cell">
                        {{trans('pw.modal.caption')}}
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
                        <label class="col-sm-5 control-label">{{trans('register.company_name')}}</label>
                        <div class="col-sm-7">
                            <div class="form-control-static">
                                {{$project->application->user->details->name}}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('apply.third.development_type')}}</label>
                        <div class="col-sm-7">
                            <div class="form-control-static">
                                {{$project->application->payment->fee->development_type->name}}
                            </div>
                        </div>
                    </div>

                    <hr style="margin: 15px -15px; border-color: #eee;">
                    <!--
                    <div class="form-group">
                            <label class="col-sm-5 control-label">Pejabat Wilayah</label>
                            <div class="col-sm-7">
                                <div class="form-control-select">
                                    <select class="form-control">
                                        <option>Pilih Pejabat Wilayah</option>
                                        <option>Pejabat Wilayah Utara</option>
                                        <option>Pejabat Wilayah Selatan</option>
                                        <option>Pejabat Wilayah Tengah</option>
                                        <option>Pejabat Wilayah Timur</option>
                                    </select>
                                </div>
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">Syarikat Konsesi</label>
                        <div class="col-sm-7">
                            <div class="form-control-static text-muted">
                                <div class="form-control-icon form-control-locked">
                                    <i class="zmdi zmdi-lock text-muted pull-right" data-toggle="tooltip" data-placement="top" data-original-title="Dikunci & ditetapkan"></i>
                                    <div class="form-control">
                                        KONSORTIUM LEBUHRAYA UTARA-TIMUR (KL) SDN. BHD.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('pw.modal.review')}}</label>
                        <div class="col-sm-7">
                            <textarea class="form-control" rows="5" name="form" id="form"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('pw.modal.documents.title')}}</label>
                        <div class="col-sm-3">
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"><i
                                            class="glyphicon glyphicon-file fileinput-exists"></i>
                                    <span class="fileinput-filename"></span>
                                </div>

								    <span class="input-group-addon btn btn-default btn-file text-400">
								    	<span class="fileinput-new">Pilih Fail</span>
								    	<span class="fileinput-exists">Tukar</span>
								    	{!! Form::file('document') !!}
								    </span>
                                <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                                   data-dismiss="fileinput">Buang</a>
                            </div>
                        </div>
                    </div>


                    <hr style="margin: 15px -15px; border-color: #eee;">

                    <div class="form-group">
                        <label class="col-sm-5 control-label">{{trans('general.action')}}</label>
                        <div class="col-sm-7">
                            <div class="checkbox">
                                <input type="checkbox" id="status" name="status" value="accepted">
                                <label for="status">{{trans('pw.modal.action')}}</label>
                            </div>
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