<div class="form-title row-table text-500 mt-30">
    <div class="col-cell cell-icon">
        <i class="zmdi zmdi-n-2-square text-muted mr-5"></i>
    </div>
    <div class="col-cell pl-10">
        Attachments
    </div>
</div>

<hr class="mt-10 mb-30">
<p>{{trans('apply.second.file_limit')}}</p>
<div class="panel panel-table mb-30 mt-10">
    <table class="datatabless td-middle table ma-0">
        <thead>
        <tr>
            <th class="tight">{{trans('apply.files.columns.first')}}</th>
            <th width="300">{{trans('apply.files.columns.second')}}</th>
            <th>{{trans('apply.files.columns.third')}}</th>
        </tr>
        </thead>

        <tbody>
        @if(isset($type) && $type =='highway')
            @foreach(trans('apply.files.rows') as $no => $file)
                @if($file['name'] =='design_concept' || $file['name'] =='Konsep_Rekabentuk')
                    <tr>
                        <td class="tight">{{($no+1)}}</td>
                        <td>
                            {{$file['title']}}
                            @if($file['subTitle'])
                                <span class="text-sm text-muted ml-5">{{$file['subTitle']}}</span>
                            @endif
                        </td>
                        <td>
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput">
                                    <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                    <span class="fileinput-filename"></span>
                                </div>
                                <span class="input-group-addon btn btn-default btn-file text-400">
                                    <span class="fileinput-new">{{trans('apply.files.buttons.select')}}</span>
                                    <span class="fileinput-exists">{{trans('apply.files.buttons.change')}}</span>
                                    {!! Form::file($file['name']) !!}
                                </span>
                                <a href="#"
                                   class="input-group-addon btn btn-default fileinput-exists"
                                   data-dismiss="fileinput">
                                    {{trans('apply.files.buttons.remove')}}
                                </a>
                            </div>
                            @if($file['sub'])
                                @foreach($file['sub'] as $subFile)
                                    <div class="fileinput fileinput-new input-group mt-5" data-provides="fileinput">
                                        <div class="form-control" data-trigger="fileinput"><i
                                                    class="glyphicon glyphicon-file fileinput-exists"></i>
                                            <span class="fileinput-filename"></span>
                                        </div>

                                    <span class="input-group-addon btn btn-default btn-file text-400">
                                        <span class="fileinput-new">{{trans('apply.files.buttons.select')}}</span>
                                    <span class="fileinput-exists">{{trans('apply.files.buttons.change')}}</span>
                                        {!! Form::file($subFile['name']) !!}
                                    </span>
                                        <a href="#"
                                           class="input-group-addon btn btn-default fileinput-exists"
                                           data-dismiss="fileinput">
                                            {{trans('apply.files.buttons.remove')}}
                                        </a>
                                </div>
                                @endforeach
                            @endif
                        </td>
                    </tr>
                @endif
            @endforeach
        @else
            @foreach(trans('apply.files.rows') as $no => $file)
            <tr>
                <td class="tight">{{($no+1)}}</td>
                <td>
                    {{$file['title']}}
                    @if($file['subTitle'])
                        <span class="text-sm text-muted ml-5">{{$file['subTitle']}}</span>
                    @endif
                </td>
                <td>
                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <div class="form-control" data-trigger="fileinput">
                            <i class="glyphicon glyphicon-file fileinput-exists"></i>
                            <span class="fileinput-filename"></span>
                        </div>
                        <span class="input-group-addon btn btn-default btn-file text-400">
                            <span class="fileinput-new">{{trans('apply.files.buttons.select')}}</span>
                            <span class="fileinput-exists">{{trans('apply.files.buttons.change')}}</span>
                            {!! Form::file($file['name']) !!}
                        </span>
                        <a href="#"
                           class="input-group-addon btn btn-default fileinput-exists"
                           data-dismiss="fileinput">
                            {{trans('apply.files.buttons.remove')}}
                        </a>
                    </div>
                    @if($file['name'] =='image_location' || $file['name'] =='Gambar_Lokasi')
                    <div class="box-image_location">
                        <div class="image_location_append"></div>
                        <br/>
                        <button type="button" class="btn btn-default add_image_location">{{trans('general.add_image')}}</button>
                    </div>
                    @endif

                    @if($file['sub'])
                        @foreach($file['sub'] as $subFile)
                            <div class="fileinput fileinput-new input-group mt-5" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"><i
                                            class="glyphicon glyphicon-file fileinput-exists"></i>
                                    <span class="fileinput-filename"></span>
                                </div>

                            <span class="input-group-addon btn btn-default btn-file text-400">
                                <span class="fileinput-new">{{trans('apply.files.buttons.select')}}</span>
                            <span class="fileinput-exists">{{trans('apply.files.buttons.change')}}</span>
                                {!! Form::file($subFile['name']) !!}
                            </span>
                                <a href="#"
                                   class="input-group-addon btn btn-default fileinput-exists"
                                   data-dismiss="fileinput">
                                    {{trans('apply.files.buttons.remove')}}
                                </a>
                        </div>
                        @endforeach
                    @endif
                </td>
            </tr>
            @endforeach
        @endif
        </tbody>
    </table>
</div>