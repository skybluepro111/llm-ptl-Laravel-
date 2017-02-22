<div class="form-group">
    <label class="col-sm-4 control-label">{{trans('apply.second.fields.location')}}</label>
    <div class="col-sm-3">
        {!! Form::text('location', old('location'), ['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-sm-4 control-label">{{trans('apply.second.fields.direction.title')}}</label>
    <div class="col-sm-3">
        {!! Form::select('direction', trans('apply.second.fields.direction.items'), old('direction'), ['class'=>'form-control']) !!}
    </div>
</div>