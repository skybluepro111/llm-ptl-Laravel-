@include('partials.errors')
{!! Form::open(['route' => ['internal.pw.project.questionsStore', $project->id]]) !!}
<div class="form-title row-table text-500">
    <div class="col-cell cell-icon">
        <i class="zmdi zmdi-n-1-square text-muted mr-5"></i>
    </div>
    <div class="col-cell pl-10">
        Site Inspection Details
    </div>
</div>

<hr class="mt-10 mb-30">

<div class="row row-10">
    <div class="column col-sm-10 col-sm-offset-1">
        <div class="form-horizontal">

            <div class="form-group">
                <label class="col-sm-4 control-label">Site Visit Date</label>
                <div class="col-sm-3">
                    {!! Form::text('visit', old('visit'), ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-4 control-label">Current Location at Site (KM)</label>
                <div class="col-sm-6">
                    {!! Form::text('location', old('location'), ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-4 control-label">Direction</label>
                <div class="col-sm-6">
                    {!! Form::text('direction', old('direction'), ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-4 control-label">Applicant's Representative Names</label>
                <div class="col-sm-6">
                    {!! Form::text('applicant', old('applicant'), ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-4 control-label">Concessionaires Representative Names</label>
                <div class="col-sm-6">
                    {!! Form::text('concessionaire', old('concessionaire'), ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-4 control-label">Other Officer Names</label>
                <div class="col-sm-6">
                    {!! Form::text('officer', old('officer'), ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
    </div>
</div><!--end.row-->