<div class="form-title row-table text-500 mt-30">
    <div class="col-cell cell-icon">
        <i class="zmdi zmdi-n-3-square text-muted mr-5"></i>
    </div>
    <div class="col-cell pl-10">
        {{trans('apply.second.declaration')}}
    </div>
</div>

<hr class="mt-10 mb-30">

<div class="row row-10">
    <div class="column col-sm-10 col-sm-offset-1">
        <div class="form-horizontal">
            <div class="form-group">
                <div class="col-sm-4 control-label">I/We declare and confirm</div>
                <div class="col-sm-8">
                    <div class="checkbox">
                        {!! Form::checkbox('verify-1', '1', false, ['id' => 'verify-1']) !!}
                        {!! Form::label('verify-1', trans('apply.second.fields.verify-1')) !!}
                    </div>

                    <br>

                    <div class="checkbox">
                        {!! Form::checkbox('verify-2', '1', false, ['id' => 'verify-2']) !!}
                        {!! Form::label('verify-2', trans('apply.second.fields.verify-2')) !!}
                    </div>

                    <br>

                    <div class="checkbox">
                        {!! Form::checkbox('verify-3', '1', false, ['id' => 'verify-3']) !!}
                        {!! Form::label('verify-3', trans('apply.second.fields.verify-3')) !!}
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-4">
                    <button type="submit"
                            class="btn btn-success btn-block-responsive pl-20 pr-20 pt-10 pb-10 mt-10 text-uppercase">
                        {{trans('general.continue')}}
                        <i class="zmdi zmdi-arrow-right ml-20"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div><!--end.row-->