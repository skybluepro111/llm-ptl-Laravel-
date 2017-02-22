<div role="tabpanel" class="tab-pane" id="report">
    {{--pw.questions.$type--}}
    @foreach(trans('pw.questions.highway') as $inspInc => $inspection)
    <div class="form-title row-table text-500">
        <div class="col-cell cell-icon">
            <i class="zmdi zmdi-n-{{($inspInc+1)}}-square text-muted mr-5"></i>
        </div>
        <div class="col-cell pl-10">
            {!! $inspection['description'] !!}
        </div>
    </div>

    <hr class="mt-10 mb-30">

    <div class="row row-10">
        <div class="column col-sm-10 col-sm-offset-1">
            <div class="form-horizontal">

                <div class="form-group">
                    <label class="col-sm-4 control-label">Ulasan Ringkasan</label>
                    <div class="col-sm-5">
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                </div>

            </div>
        </div>
    </div><!--end.row-->
    @endforeach

</div>