<div class="form-title row-table text-500 mt-30">
    <div class="col-cell cell-icon">
        <i class="zmdi zmdi-n-4-square text-muted mr-5"></i>
    </div>
    <div class="col-cell pl-10">
        Verification Status
    </div>
</div>

<hr class="mt-10 mb-30">

<div class="row row-10">
    <div class="column col-sm-10 col-sm-offset-1">
        <div class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-4 control-label">Feedback Summary</label>
                <div class="col-sm-6">
                    {!! Form::textarea('feedback', old('feedback'), ['rows' => 5, 'cols' => 80]) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Inspection Compliance Status</label>
                <div class="col-sm-6">
                    <div class="col-sm-7">
                        <div class="radio">
                            <input type="radio" id="payment-1" name="status" value="1">
                            <label for="payment-1">
                                Comply
                            </label>
                        </div>

                        <div class="radio">
                            <input type="radio" id="payment-2" name="status" value="0">
                            <label for="payment-2">
                                Not Comply
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"></label>
                <div class="col-sm-6">
                    <button type="submit"
                            class="btn btn-success btn-block-responsive pl-20 pr-20 pt-10 pb-10 mt-10 text-uppercase">
                        Submit
                        <i class="zmdi zmdi-arrow-right ml-20"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}