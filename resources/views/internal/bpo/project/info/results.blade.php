<div role="tabpanel" class="tab-pane" id="results">
    <div class="form-title row-table text-500">
        <div class="col-cell cell-icon">
            <i class="zmdi zmdi-n-1-square text-muted mr-5"></i>
        </div>
        <div class="col-cell pl-10">
            {{trans('bpo.project.info.meeting.title')}}
        </div>
    </div>

    <hr class="mt-10 mb-30">

    <div class="row row-10">
        <div class="column col-sm-10 col-sm-offset-1">
            <div class="form-horizontal">
                {!! Form::open([
                'url' => route('internal.but.postReview'),
                'files' => true
                ]) !!}
                {!! Form::hidden('project_id', $project->id) !!}
                <div class="form-group">
                    <label class="col-sm-4 control-label">
                        {{trans('bpo.project.info.meeting.meeting_no')}}
                    </label>
                    <div class="col-sm-5">
                        {!! Form::input(
                        'text',
                        'no',
                        (isset($project->meeting->no)) ? $project->meeting->no : null,
                        ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">
                        {{trans('bpo.project.info.meeting.summary')}}
                    </label>
                    <div class="col-sm-5">
                        {!! Form::textarea(
                        'review',
                        (isset($project->meeting->review)) ? $project->meeting->review : null,
                        ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">
                        {{trans('general.status')}}
                    </label>
                    <div class="col-sm-5">
                        @for($i=1;$i<4;$i++)
                        <div class="radio">
                            <input type="radio"
                                   name="status"
                                   id="status-{{$i}}"
                                   value="{{$i}}"
                                   @if(
                                   isset($project->meeting->status) &&
                                   $project->meeting->status == $i)
                                       {{' checked'}}
                                   @endif>
                                   @if(!empty($project->meeting->status) && $project->meeting->status == $i){{' checked'}}@endif>

                            <label for="status-{{$i}}">
                                {{trans('bpo.project.info.meeting.statuses')[($i-1)]}}
                            </label>
                        </div>
                        @endfor
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">{{trans('general.document')}}</label>
                    <div class="col-sm-5">
                        @include('partials.file', ['name' => 'document'])
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5 col-sm-offset-4 text-center">
                        {!! Form::submit(trans('general.save'), ['class' => 'btn btn-success']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div><!--end.row-->
</div>