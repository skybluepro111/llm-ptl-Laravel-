@extends('layouts.app')

@section('toolbar')
    @include('partials.steps', compact($steps))
@endsection

@section('content')
    <div class="content">
        <div class="container mt-30 mb-30">
            <div class="row row-10">
                <div class="column col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="panel">
                        <div class="pa-20">
                            <h4 class="ma-0 mb-20 text-400 text-success">
                                Fi Pemprosesan Telah Berjaya Dihantar123
                            </h4>
                            <!--Maklumat fi pemprosesan telah dihantar kepada pihak BKPA seperti berikut:

                            <table class="table table-bordered mt-20 mb-20">
                                <thead>
                                    <tr>
                                        <th colspan="2">
                                            <span class="text-muted text-sm text-400 text-uppercase">Kategori Bayaran</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Freestanding</td>
                                        <td width="45%">RM 500.00</td>
                                    </tr>

                                    <tr>
                                        <td>Paparan Kontena</td>
                                        <td>RM 500.00</td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="table table-bordered mt-20 mb-20">
                                <thead>
                                    <tr>
                                        <th colspan="2">
                                            <span class="text-muted text-sm text-400 text-uppercase">Butir Bayaran</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Jenis Bayaran</td>
                                        <td width="45%">Bank Deraf</td>
                                    </tr>

                                    <tr>
                                        <td>No Deraf / Kiriman Pos</td>
                                        <td>81243A-30VC</td>
                                    </tr>

                                    <tr>
                                        <td>Jumlah Bayaran</td>
                                        <td>RM 1,000.00</td>
                                    </tr>

                                    <tr>
                                        <td>Tarikh Pembayaran</td>
                                        <td>Selasa, April 28, 2016</td>
                                    </tr>

                                    <tr>
                                        <td>Bank Pengeluar</td>
                                        <td>Alliance Bank Berhad</td>
                                    </tr>
                                </tbody>
                            </table>
                            -->
                            <p class="mb-20">Pihak kami akan menghubungi anda berkenaan pengesahan pembayaran ini melalui sistem ini dalam masa terdekat.</p>

                            Terima kasih atas kerjasama anda.
                        </div>

                        <hr class="hr-muted ma-0">

                        <div class="pa-20">
                            <a href="{!! route('dashboard') !!}">Ke Senarai Permohonan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection