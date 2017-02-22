<div role="tabpanel" class="tab-pane" id="results">
    <div class="form-title row-table text-500">
        <div class="col-cell cell-icon">
            <i class="zmdi zmdi-n-1-square text-muted mr-5"></i>
        </div>
        <div class="col-cell pl-10">
            Hasil Keputusan Mesyuarat MJKPI
        </div>
    </div>

    <hr class="mt-10 mb-30">

    <div class="row row-10">
        <div class="column col-sm-10 col-sm-offset-1">
            <div class="form-horizontal">

                <div class="form-group">
                    <label class="col-sm-4 control-label">Ulasan Ringkasan</label>
                    <div class="col-sm-5">
                        <textarea class="form-control" rows="5">Ulasan Mesyuarat</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Status Keputusan</label>
                    <div class="col-sm-5">
                        <div class="radio">
                            <input type="radio" id="payment-1" name="payment">
                            <label for="payment-1">
                                Disokong
                            </label>
                        </div>

                        <div class="radio">
                            <input type="radio" id="payment-2" name="payment">
                            <label for="payment-2">
                                Tidak Disokong
                            </label>
                        </div>

                        <div class="radio">
                            <input type="radio" id="payment-2" name="payment">
                            <label for="payment-2">
                                Ditangguh
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Lampiran Minit</label>
                    <div class="col-sm-5">
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <div class="form-control" data-trigger="fileinput"><i
                                        class="glyphicon glyphicon-file fileinput-exists"></i>
                                <span class="fileinput-filename"></span>
                            </div>

								    <span class="input-group-addon btn btn-default btn-file text-400">
								    	<span class="fileinput-new">Pilih Fail</span>
								    	<span class="fileinput-exists">Tukar</span>
								    	<input type="file" name="...">
								    </span>
                            <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                               data-dismiss="fileinput">Buang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end.row-->
</div>