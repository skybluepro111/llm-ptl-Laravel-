@extends('layouts.app')

@section('content')
    <nav class="progress bg-0 pt-20 pb-20">
        <div class="container">
            <div class="text-500 ma-0" style="display: table;">
                <div class="col-cell text-500 text-muted hidden-sms hidden-xs pr-30">
                    Pendaftaran Baru			</div>


                <div class="col-cell cell-icon pr-15">
                    <i class="zmdi zmdi-n-1-square"></i>
                </div>

                <div class="col-cell text-400">
                    <a href="#first-step" aria-controls="first-step" role="tab" data-toggle="tab">Kategori Kontraktor</a>
                </div>

                <div class="col-cell pl-20 pr-20 text-muted hidden-sms hidden-xs"><i class="zmdi zmdi-chevron-right"></i></div>


                <div class="col-cell cell-icon pr-15 text-muted hidden-sms hidden-xs">
                    <i class="zmdi zmdi-n-2-square"></i>
                </div>

                <div class="col-cell text-400 text-muted hidden-sms hidden-xs">
                    <a href="#second-step" aria-controls="second-step" role="tab" data-toggle="tab">
                    Maklumat Kontraktor
                    </a>
                </div>

                <div class="col-cell pl-20 pr-20 text-muted hidden-sms hidden-xs"><i class="zmdi zmdi-chevron-right"></i></div>


                <div class="col-cell cell-icon pr-15 text-muted hidden-sms hidden-xs">
                    <i class="zmdi zmdi-n-3-square"></i>
                </div>

                <div class="col-cell text-400 text-muted hidden-sms hidden-xs">
                    Pengesahan			</div>


            </div>
        </div>
    </nav>
    <hr class="ma-0">

    <div class="content">
        <div class="container mt-30 mb-30">
            {!! Form::open(array('url' => url('register'), 'method' => 'post', 'files'=> true)) !!}

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="first-step">
                    <div class="row row-10">
                        <div class="column col-sm-9">
                            <div class="mb-30">Pilih kategori pendaftaran yang berkenaan.</div>

                            <div class="row row-10">
                                <div class="column col-xs-6 col-sm-3">
                                    <label class="panel panel-link text-center" style="display: block;">
                                        <input type="radio" name="role" value="3" class="invisible">
                                        <div class="pa-20">
                                            <i class="zmdi zmdi-account-box-o" style="font-size: 64px;"></i>
                                        </div>
                                        <hr class="hr-muted ma-0">
                                        <div class="panel-foot text-500 pa-20 pt-15 pb-15">Syarikat Berkaitan Kerajaan (GLC)</div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="second-step">
                        <div class="form-title row-table text-500">
                            <div class="col-cell cell-icon">
                                <i class="zmdi zmdi-n-1-square text-muted mr-5"></i>
                            </div>
                            <div class="col-cell pl-10">
                                Maklumat Syarikat
                            </div>
                        </div>

                        <hr class="mt-10 mb-30">

                        <div class="row row-10">
                            <div class="column col-sm-10 col-sm-offset-1">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Kategori Kontraktor</label>
                                        <div class="col-sm-4">
                                            <div class="form-control-select">
                                                <select class="form-control" name="category_contractor">
                                                    <option value="Pilih Kategori">Pilih Kategori</option>
                                                    <option value="Syarikat Pihak Ketiga">Syarikat Pihak Ketiga</option>
                                                    <option value="Syarikat Konsesi">Syarikat Konsesi</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Senarai Syarikat Konsesi</label>
                                        <div class="col-sm-4">
                                            <div class="form-control-select">
                                                <select class="form-control" name="concessionaires">
                                                    <option value="Pilih Syarikat Konsesi">Pilih Syarikat Konsesi</option>
                                                    <option value="Projek Lebuhraya Usahasama Berhad">Projek Lebuhraya Usahasama Berhad (PLUS Berhad)</option>
                                                    <option value="ANIH Berhad">ANIH Berhad</option>
                                                    <option value="PROLINTAS Expressway Sdn. Bhd.">PROLINTAS Expressway Sdn. Bhd.</option>
                                                    <option value="Projek Lintasan Kota Sdn Bhd">Projek Lintasan Kota Sdn Bhd</option>
                                                    <option value="Projek Lintasan Shah Alam Sdn. Bhd">Projek Lintasan Shah Alam Sdn. Bhd</option>
                                                    <option value="Besraya (M) Sdn. Bhd.">Besraya (M) Sdn. Bhd.</option>
                                                    <option value="New Pantai Expressway Sdn. Bhd">New Pantai Expressway Sdn. Bhd.</option>
                                                    <option value="Lebuhraya Kajang - Seremban Sdn. Bhd">Lebuhraya Kajang - Seremban Sdn. Bhd.</option>
                                                    <option value="Lingkaran Transkota Holdings Bhd">Lingkaran Transkota Holdings Bhd.</option>
                                                    <option value="Sistem Penyuraian Trafik KL Barat Sdn">Sistem Penyuraian Trafik KL Barat Sdn. Bhd.</option>
                                                    <option value="Syarikat Mengurus Air Banjir">Syarikat Mengurus Air Banjir &amp; Terowong Sdn. Bhd.</option>
                                                    <option value="Syarikat Grand Saga Sdn. Bhd">Syarikat Grand Saga Sdn. Bhd.</option>
                                                    <option value="KESAS Sdn Bhd.">KESAS Sdn Bhd.</option>
                                                    <option value="Konsortium Lebuhraya Utara-Timur">Konsortium Lebuhraya Utara-Timur (Kl) Sdn. Bhd.</option>
                                                    <option value="Maju Expressway Sdn. Bhd">Maju Expressway Sdn. Bhd.</option>
                                                    <option value="Senai Desaru Expressway Berhad">Senai Desaru Expressway Berhad</option>
                                                    <option value="Sistem Lingkaran - Lebuhraya Kajang">Sistem Lingkaran - Lebuhraya Kajang Sdn. Bhd.</option>
                                                    <option value="SKVE Holdings Sdn. Bhd">SKVE Holdings Sdn. Bhd.</option>
                                                    <option value="KL-Kuala Selangor Expressway Berhad ">KL-Kuala Selangor Expressway Berhad (KLSEB)</option>
                                                    <option value="Lebuhraya Shapadu Sdn. Bhd">Lebuhraya Shapadu Sdn. Bhd.</option>
                                                    <option value="Lebuhraya Lingkaran Luar Butterworth">Lebuhraya Lingkaran Luar Butterworth (Penang) Sdn Bhd</option>
                                                    <option value="Jambatan Kedua Sdn Bhd">Jambatan Kedua Sdn Bhd</option>
                                                    <option value="Lebuhraya Pantai Timur 2 Sdn. Bhd">Lebuhraya Pantai Timur 2 Sdn. Bhd.</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Nama Syarikat</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="company_name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">No. Pendaftaran Syarikat</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Alamat Syarikat</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Alamat Bangunan" name="address">
                                            <input type="text" class="form-control mt-10" placeholder="Alamat Jalan" name="address_street">
                                            <div class="row row-5">
                                                <div class="column col-sm-3">
                                                    <input type="text" class="form-control mt-10" placeholder="Poskod" name="postal_code">
                                                </div>

                                                <div class="column col-sm-5">
                                                    <input type="text" class="form-control mt-10" placeholder="Daerah" name="district">
                                                </div>

                                                <div class="column col-sm-4">
                                                    <input type="text" class="form-control mt-10" placeholder="Negeri" name="state">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">No. Telefon Pejabat</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="company_telephone">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">No. Faks Pejabat</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="fax">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end.row-->

                        <div class="form-title row-table text-500">
                            <div class="col-cell cell-icon">
                                <i class="zmdi zmdi-n-2-square text-muted mr-5"></i>
                            </div>
                            <div class="col-cell pl-10">
                                Pemilik Akaun
                            </div>
                        </div>

                        <hr class="mt-10 mb-30">

                        <div class="row row-10">
                            <div class="column col-sm-10 col-sm-offset-1">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Nama Pemilik</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Emel Pemilik</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" name="email">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">No. Telefon Bimbit</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" name="telephone">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Katalaluan</label>
                                        <div class="col-sm-4">
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Kepastian Katalaluan</label>
                                        <div class="col-sm-4">
                                            <input type="password" class="form-control" name="password_confirmation">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-8 col-sm-offset-4">
                                            <button type="submit" class="btn btn-success btn-block-responsive pl-20 pr-20 pt-10 pb-10 mt-10 text-uppercase">
                                                Teruskan
                                                <i class="zmdi zmdi-arrow-right ml-20"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end.row-->
                </div>
                <div role="tabpanel" class="tab-pane" id="finish">
                    <div class="row row-10">
                        <div class="column col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                            <div class="panel">
                                <div class="pa-20">
                                    Emel bagi pengesahan akaun anda telah dihantar ke alamat emel berikut:

                                    <div class="mt-20 mb-20 text-500 bg-1 pa-15 text-center">
                                        <i class="zmdi zmdi-email text-muted mr-10"></i>
                                        <div id="email-registration"></div>
                                    </div>

                                    Nota : Pengaktifan akaun perlulah dibuat dalam masa 24 jam. Sila klik pautan yang diberi untuk pengesahan akaun anda.
                                </div>

                                <hr class="hr-muted ma-0">

                                <div class="pa-20">
                                    <a href="#">Klik disini untuk penghantaran semula</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $('input[type="radio"]').change(function(){
            console.log(this);
            $('a[href="#second-step"]').tab('show');
        });
    });
</script>
@endpush
