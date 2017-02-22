<div role="tabpanel" class="tab-pane" id="project">

    <div class="form-title row-table text-500">
        <div class="col-cell cell-icon">
            <i class="zmdi zmdi-n-1-square text-muted mr-5"></i>
        </div>
        <div class="col-cell pl-10">
            Perincian Projek
        </div>
    </div>

    <hr class="mt-10 mb-30">

    <div class="row row-10">
        <div class="column col-sm-10 col-sm-offset-1">
            <div class="form-horizontal">

                <div class="form-group">

                    <label class="col-sm-4 control-label">{{trans('bpo.application.info.project.highway')}}</label>

                    <div class="col-sm-6">
                        <div class="form-control-static text-muted">
                            <div class="form-control-icon form-control-locked">
                                <i class="zmdi zmdi-lock text-muted pull-right" data-toggle="tooltip"
                                   data-placement="top" data-original-title="Dikunci &amp; ditetapkan"></i>
                                <div class="form-control">{{$application->highway->name}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @if($application->user->details->concessionaires)
                <div class="form-group">

                    <label class="col-sm-4 control-label">{{trans('bpo.application.info.project.concession')}}</label>

                    <div class="col-sm-6">
                        <div class="form-control-static text-muted">
                            <div class="form-control-icon form-control-locked">
                                <i class="zmdi zmdi-lock text-muted pull-right" data-toggle="tooltip"
                                   data-placement="top" data-original-title="Dikunci &amp; ditetapkan"></i>
                                <div class="form-control">{{trans('register.concessionaires')[$application->user->details->concessionaires]}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                    @endif
                <!--
                <div class="form-group">
                    <label class="col-sm-4 control-label">No. Lebuhraya</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control">
                    </div>
                </div>-->

                <div class="form-group">
                    <label class="col-sm-4 control-label">{{trans('bpo.application.info.project.location')}}</label>
                    <div class="col-sm-3">
                        <i class="zmdi text-muted pull-right"></i>
                        <div class="form-control">{{$application->location}}</div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">{{trans('bpo.application.info.project.direction')}}</label>
                    <div class="col-sm-4">
                        <i class="zmdi text-muted pull-right"></i>
                        <div class="form-control">{{$application->direction.'bound'}}</div>
                    </div>
                </div>

                <div class="form-group hidden">
                    <label class="col-sm-4 control-label">{{trans('bpo.application.info.project.from_city')}}</label>
                    <div class="col-sm-3">
                        <i class="zmdi text-muted pull-right"></i>
                        <div class="form-control">{{$application->from_city}}</div>
                    </div>
                </div>

                <div class="form-group hidden">
                    <label class="col-sm-4 control-label">{{trans('bpo.application.info.project.to_city')}}</label>
                    <div class="col-sm-3">
                        <i class="zmdi text-muted pull-right"></i>
                        <div class="form-control">{{$application->to_city}}</div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">{{trans('bpo.application.info.project.coordinates')}}</label>
                    <div class="col-sm-6">
                        <a href="#" data-toggle="modal" data-target="#guide"
                           class="btn btn-success btn-block-responsive pl-20 pr-20 pt-10 pb-10 mt-10 text-uppercase">
                            Peta Interaktif
                            <i class="zmdi zmdi-arrow-right ml-20"></i>
                        </a>
                    </div>
                </div>

                <!--
                <div class="form-group">
                    <label class="col-sm-4 control-label">Zon</label>
                    <div class="col-sm-3">
                        <div class="form-control-select">
                            <select class="form-control">
                                <option>Pilih Zon</option>>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Pihak berkuasa Tempatan</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control">
                    </div>
                </div>
            -->
            </div>
        </div>
    </div><!--end.row-->

    <div class="form-title row-table text-500 mt-30">
        <div class="col-cell cell-icon">
            <i class="zmdi zmdi-n-2-square text-muted mr-5"></i>
        </div>
        <div class="col-cell pl-10">
            {{trans('bpo.application.info.project.documents')}}
        </div>
    </div>

    <hr class="mt-10 mb-30">

    <div class="panel panel-table mb-30 mt-10">
        <table class="datatabless td-middle table ma-0">
            <thead>
            <tr>
                <th class="tight">Bil</th>
                <th width="300">Butiran</th>
                <th></th>
            </tr>
            </thead>

            <tbody>
            @php ($i = 1)
            @foreach($application->documentsApplication as $name => $document)
                <tr>
                    <td class="tight">{{$i}}</td>
                    <td>{{trans('apply.files.attachment_label.'.$name)}}</td>
                    <td>
                        <a href="#" data-url="{{url('documents/'.$application->id.'/'.$document)}}" class="documentModal">{{trans('bpo.document')}}</a>
                    </td>
                </tr>
                @php ($i++)
            @endforeach
            </tbody>
        </table>
    </div>
</div>