<div class="form-title row-table text-500 mt-30">
    <div class="col-cell cell-icon">
        <i class="zmdi zmdi-n-3-square text-muted mr-5"></i>
    </div>
    <div class="col-cell pl-10">
        Site Visit Pictures
    </div>
</div>


<hr class="mt-10 mb-30">

<div class="panel panel-table mb-30 mt-10">
    <table class="datatabless td-middle table ma-0">
        <tr>
            <td>
                Gambar Lokasi
            </td>
            <td>
                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                    <div class="form-control" data-trigger="fileinput"><i
                                class="glyphicon glyphicon-file fileinput-exists"></i>
                        <span class="fileinput-filename"></span>
                    </div>

								    <span class="input-group-addon btn btn-default btn-file text-400">
								    	<span class="fileinput-new">{{trans('apply.files.buttons.select')}}</span>
								    	<span class="fileinput-exists">{{trans('apply.files.buttons.change')}}</span>
                                        {!! Form::file('file1') !!}
								    </span>
                    <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                       data-dismiss="fileinput">{{trans('apply.files.buttons.remove')}}</a>
                </div>

                <div class="fileinput fileinput-new input-group mt-5" data-provides="fileinput">
                    <div class="form-control" data-trigger="fileinput"><i
                                class="glyphicon glyphicon-file fileinput-exists"></i>
                        <span class="fileinput-filename"></span>
                    </div>

								    <span class="input-group-addon btn btn-default btn-file text-400">
								    	<span class="fileinput-new">{{trans('apply.files.buttons.select')}}</span>
								    	<span class="fileinput-exists">{{trans('apply.files.buttons.change')}}</span>
                                        {!! Form::file('file2') !!}
								    </span>
                    <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                       data-dismiss="fileinput">{{trans('apply.files.buttons.remove')}}</a>
                </div>

                <div class="fileinput fileinput-new input-group mt-5" data-provides="fileinput">
                    <div class="form-control" data-trigger="fileinput"><i
                                class="glyphicon glyphicon-file fileinput-exists"></i>
                        <span class="fileinput-filename"></span>
                    </div>
								    <span class="input-group-addon btn btn-default btn-file text-400">
								    	<span class="fileinput-new">{{trans('apply.files.buttons.select')}}</span>
								    	<span class="fileinput-exists">{{trans('apply.files.buttons.change')}}</span>
                                        {!! Form::file('file3') !!}
								    </span>
                    <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                       data-dismiss="fileinput">{{trans('apply.files.buttons.remove')}}</a>
                </div>

                <div class="fileinput fileinput-new input-group mt-5" data-provides="fileinput">
                    <div class="form-control" data-trigger="fileinput"><i
                                class="glyphicon glyphicon-file fileinput-exists"></i>
                        <span class="fileinput-filename"></span>
                    </div>

								    <span class="input-group-addon btn btn-default btn-file text-400">
								    	<span class="fileinput-new">{{trans('apply.files.buttons.select')}}</span>
								    	<span class="fileinput-exists">{{trans('apply.files.buttons.change')}}</span>
                                        {!! Form::file('file4') !!}
								    </span>
                    <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                       data-dismiss="fileinput">{{trans('apply.files.buttons.remove')}}</a>
                </div>

                <div class="fileinput fileinput-new input-group mt-5" data-provides="fileinput">
                    <div class="form-control" data-trigger="fileinput"><i
                                class="glyphicon glyphicon-file fileinput-exists"></i>
                        <span class="fileinput-filename"></span>
                    </div>
								    <span class="input-group-addon btn btn-default btn-file text-400">
								    	<span class="fileinput-new">{{trans('apply.files.buttons.select')}}</span>
								    	<span class="fileinput-exists">{{trans('apply.files.buttons.change')}}</span>
                                        {!! Form::file('file5') !!}
								    </span>
                    <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                       data-dismiss="fileinput">{{trans('apply.files.buttons.remove')}}</a>
                </div>
            </td>
        </tr>
    </table>
</div>