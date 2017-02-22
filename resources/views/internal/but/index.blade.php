@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container mt-30 mb-30">
            <div class="panel panel-table pt-20 pb-20">
                <table class="datatables table-action table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Keterangan</th>
                        <th>Tarikh Makluman</th>
                        <th>Status</th>
                        <!--<th class="tight no_filter">Tindakan</th>-->
                    </tr>
                    </thead>
                    <!--
                    <tfoot class="hidden-xs hidden-sm">
                        <tr>
                            <th>Resit Pembayaran</th>
                            <th>Jumlah Bayaran</th>
                            <th>Kategori Bayaran</th>
                            <th>Tarikh Bayaran</th>
                            <th>Syarikat Membayar</th>
                            <th>Status</th>
                            <th class="tight no_filter">Tindakan</th>
                        </tr>
                    </tfoot>
                    -->
                    <tbody>
                    <tr>
                        <td valign="top">1.</td>
                        <td>
                            Pengesahan Pembayaran Permohonan Akses ke Lebuhraya Secara Langsung - Stesen Minyak
                        </td>
                        <td>
                            Selasa, April 28, 2016
                        </td>
                        <td>
                            Pengesahan Permohonan
                        </td>
                        <!--
                        <td>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#Tindakan">
                                Tindakan
                            </a>
                        </td>-->
                    </tr>
                    <tr>
                        <td valign="top">2.</td>
                        <td>
                            Pengesahan Pembayaran Papantanda Tunjuk Arah
                        </td>
                        <td>
                            Selasa, May 10, 2016
                        </td>
                        <td>
                            Pengesahan Permohonan
                        </td>
                        <!--
                        <td>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#Tindakan">
                                Tindakan
                            </a>
                        </td>-->
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection