<div class="fileinput fileinput-new input-group" data-provides="fileinput">
    <div class="form-control" data-trigger="fileinput"><i
                class="glyphicon glyphicon-file fileinput-exists"></i>
        <span class="fileinput-filename"></span>
    </div>
    <span class="input-group-addon btn btn-default btn-file text-400">
        <span class="fileinput-new">{{trans('apply.files.buttons.select')}}</span>
        <span class="fileinput-exists">{{trans('apply.files.buttons.change')}}</span>
        {!! Form::file($name) !!}
    </span>
    <a href="#" class="input-group-addon btn btn-default fileinput-exists"
       data-dismiss="fileinput">{{trans('apply.files.buttons.remove')}}</a>
</div>