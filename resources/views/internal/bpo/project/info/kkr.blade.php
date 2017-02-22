<div role="tabpanel" class="tab-pane" id="kkr">
    <div class="form-title row-table text-500">
        <div class="col-cell cell-icon">
            <i class="zmdi zmdi-n-1-square text-muted mr-5"></i>
        </div>
        <div class="col-cell pl-10">
            {{trans('bpo.application.info.tabs.kkr')}}
        </div>
    </div>

    <hr class="mt-10 mb-30">

    <div class="row row-10">
        <div class="column col-sm-10 col-sm-offset-1">
            <div class="form-horizontal">
                {!! Form::open([
                'url' => route('internal.but.postKKR'),
                'files' => true
                ]) !!}
                {!! Form::hidden('project_id', $project->id) !!}
                <div class="form-group">
                    <label class="col-sm-4 control-label">{{trans('bpo.application.info.kkr.status_result')}}</label>
                    <div class="col-sm-5">
                        <div class="radio">
                            <input type="radio"
                                   name="kkr-status"
                                   id="kkr-status-1"
                                   value="1"
                            @if(isset($project->kkr->status) && $project->kkr->status == 1){{' checked'}}@endif>

                            <label for="kkr-status-1">
                                {{trans('general.approved')}}
                            </label>
                        </div>
                        <div class="radio">
                            <input type="radio"
                                   name="kkr-status"
                                   id="kkr-status-2"
                                   value="0"
                            @if(isset($project->kkr->status) && $project->kkr->status == 0){{' checked'}}@endif>
                            <label for="kkr-status-2">
                                {{trans('general.reject')}}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">{{trans('general.feedback')}}</label>
                    <div class="col-sm-5">
                        {!! Form::textarea(
                        'feedback',
                        (isset($project->kkr->feedback)) ? $project->kkr->feedback : null,
                        ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">{{trans('general.file_attachment')}}</label>
                    <div class="col-sm-5">
                        @include('partials.file', ['name' => 'document'])
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5 col-sm-offset-4 text-center">
                        {!! Form::submit(trans('general.submit'), ['class' => 'btn btn-success']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div><!--end.row-->
</div>