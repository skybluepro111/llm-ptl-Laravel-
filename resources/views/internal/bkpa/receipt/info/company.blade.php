<div role="tabpanel" class="tab-pane active" id="company">
    <div class="form-title row-table text-500">
        <div class="col-cell cell-icon">
            <i class="zmdi zmdi-n-1-square text-muted mr-5"></i>
        </div>
        <div class="col-cell pl-10">{{trans('bpo.application.info.company.applicant_info')}}</div>
    </div>

    <hr class="mt-10 mb-30">

    <div class="row row-10">
        <div class="column col-sm-10 col-sm-offset-1">
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-4 control-label">{{trans('bpo.application.info.company.applicant_category')}}</label>
                    <div class="col-sm-4">
                        <div class="form-control-icon form-control-locked">
                            <i class="zmdi text-muted pull-right"></i>
                            <div class="form-control">{{$application->user->type}}</div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">{{trans('bpo.application.info.company.name')}}</label>
                    <div class="col-sm-4">
                        <i class="zmdi text-muted pull-right"></i>
                        <div class="form-control">{{$application->user->details->name}}</div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">{{trans('bpo.application.info.company.number_registration')}}</label>
                    <div class="col-sm-4">
                        <i class="zmdi text-muted pull-right"></i>
                        <div class="form-control">{{$application->user->details->registration_number}}</div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">{{trans('bpo.application.info.company.address')}}</label>
                    <div class="col-sm-6">
                        <div class="form-control mt-10">
                            {{$application->user->details->address}}
                        </div>
                        <div class="form-control mt-10">
                            {{$application->user->details->post_address}}
                        </div>
                        <div class="row row-5">
                            <div class="column col-sm-3">
                                <div class="form-control mt-10">
                                    {{$application->user->details->postcode}}
                                </div>
                            </div>

                            <div class="column col-sm-5">
                                <div class="form-control mt-10">
                                    {{$application->user->details->country}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">{{trans('bpo.application.info.company.phone_office')}}</label>
                    <div class="col-sm-4">
                        <i class="zmdi text-muted pull-right"></i>
                        <div class="form-control">
                            {{$application->user->details->phone_office}}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">{{trans('bpo.application.info.company.phone_fax')}}</label>
                    <div class="col-sm-4">
                        <i class="zmdi text-muted pull-right"></i>
                        <div class="form-control">
                            {{$application->user->details->fax_office}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end.row-->

    <div class="form-title row-table text-500">
        <div class="col-cell cell-icon">
            <i class="zmdi zmdi-n-2-square text-muted mr-5"></i>
        </div>
        <div class="col-cell pl-10">{{trans('bpo.application.info.company.owner')}}</div>
    </div>

    <hr class="mt-10 mb-30">

    <div class="row row-10">
        <div class="column col-sm-10 col-sm-offset-1">
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-4 control-label">{{trans('bpo.application.info.company.name_account')}}</label>
                    <div class="col-sm-4">
                        <i class="zmdi text-muted pull-right"></i>
                        <div class="form-control mt-10">
                            {{$application->user->name}}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">{{trans('bpo.application.info.company.email')}}</label>
                    <div class="col-sm-4">
                        <i class="zmdi text-muted pull-right"></i>
                        <div class="form-control mt-10">
                            {{$application->user->email}}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">{{trans('bpo.application.info.company.cell_phone')}}</label>
                    <div class="col-sm-4">
                        <i class="zmdi text-muted pull-right"></i>
                        <div class="form-control mt-10">
                            {{$application->user->phone}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end.row-->
</div>