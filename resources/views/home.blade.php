@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container mt-10 mb-30 pt-20">
            <div class="row row-10">
                <div class="column col-sm-8 col-sm-offset-0 col-md-8">

                    <div class="headlines text-left mb-20">
                        <!--<div class="mt-15">
                            <img class="img-responsive" src="img/bgroundimg.png">
                        </div>
                    -->
                        <div class="h4">Selamat Datang ke</div>
                        <div class="h2">Sistem Pembangunan Tepi Lebuhraya &amp; Paparan Iklan</div>
                        <div class="h4">
                            Sistem ini dibangunkan bertujuan memudahkan urusan pemohon membuat permohonan bagi pembangunan tepi lebuhraya dan mendirikan struktur paparan iklan di dalam rezab lebuh raya seliaan Lembaga Lebuhraya Malaysia (LLM) secara atas talian (online).
                            <p> <br>
                                Antara tujuan sistem ini diwujudkan adalah untuk: <br><br>
                                <ul>
                                <li>  Mempercepatkan proses permohonan </li>
                                <li>  Membantu pemohon memilih lokasi permohonan dengan maklumat yang tepat </li>
                                <li>  Memudahkan proses bayaran dan semakan status bayaran</li>
                                <li>  Memudahkan semakan status permohonan</li>
                                <li>  Memudahkan carian, semakan dan rujukan maklumat</li>
                                </ul>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="column col-sm-2 col-sm-offset-3 col-md-4 col-md-offset-0">
                    <div class="panel">
                        <div class="pa-30">
                            <div class="form-group">
                                <nav class="alert alert-danger mb-30 hidden">
                                    <div class="row-table">
                                        <div class="col-cell">
                                            Akses tidak tepat.
                                        </div>
                                        <div class="col-cell cell-tight">
                                            <div class="close" data-dismiss="alert" aria-label="Close" style="cursor: pointer;">
                                                <i class="zmdi zmdi-close" style="font-size: 120%;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </nav>

                                <header class="mb-30">
                                    <h3 class="ma-0 text-400 mb-10">{{trans('register.menu3')}}</h3>
                                    <div></div>
                                </header>

                                <article>
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    @if (session('warning'))
                                        <div class="alert alert-warning">
                                            {{ session('warning') }}
                                        </div>
                                    @endif
                                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                        {{ csrf_field() }}
                                    <div class="form-group">
                                        <b>Email Address</b>
                                        <input id="email" type="email" class="form-control mt-10" name="email" value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group">

                                        <b>Password</b>
                                        <input id="password" type="password" class="form-control mt-10" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <!--<div class="checkbox">
                                            <input type="checkbox" name="remember" id="remember">
                                            <label for="remember">Ingat akses ini</label>
                                        </div>-->
                                    </div>

                                    <div class="form-group mt-gutter">
                                        <button type="submit" class="btn btn-success btn-block btn-icon text-uppercase pa-5 pr-20 pl-20 mr-10" href="apply-0.php">
                                            Login
                                        </button>
                                    </div>

                                    <!-- <div class="form-group text-center">
                                        <a href="#" class="pull-left text-sm">Forgot Password</a>
                                    </div> -->
                                    </form>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-10" style="margin-top:20px;">
                <div class="container">
                    <br><br>
                    <h3>Maklumat Kategori Permohonan</h3>
                    <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="pill" href="#home">Pembangunan Tepi Lebuhraya</a></li>
                        <li><a data-toggle="pill" href="#menu1">Pembangunan Struktur Paparan Iklan</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                        <br>
                            <h4>Latarbelakang</h4>
                            <p>Pembangunan Tepi Lebuhraya (PTL) merupakan sebarang permohonan kerja pembangunan oleh pihak ketiga yang melibatkan rezab lebuhraya.</p>
                            <br>
                            <h4>Bidang Kuasa</h4>
                            <p>Kuasa mengawal pembangunan yang melibatkan rezab lebuhraya sedia ada adalah diperuntukkan kepada Y.B. Menteri Kerja Raya Malaysia dibawah Seksyen 85 <br>Akta Pengangkutan Jalan 1987 (Akta 333).</p>
                            <p></p><p></p>
                            <p>(i)  Bidangkuasa ini adalah diperuntukkan kepada Y.B. Menteri Kerja Raya Malaysia dibawah Seksyen 85 Akta Pengangkutan Jalan 1987 (Akta 333).<br>
                                Pembinaan akses dan parit dan penyusunan utiliti awam ke jalan-jalan yang ada menytakan seperti berikut:-<br><br>
                                <i>.........melainkan jika pelan yang mengandungi perincian penyusunan atur berkenaan dengannya (termasuk butir-butir yang boleh ditetapkan) telah diserahkan dan diluluskan<br>
                                    oleh Menteri yang dipertanggungkan dengan tanggungjawab bagi kerja raya berhubungan dengan jalan Persekutuan, atau pihak berkuasa yang berkenaan yang berkaitan<br>
                                    dengan jalan selain daripada jalan Persekutuan, dan Menteri atau pihak berkuasa yang berkenaan, mengikut mana yang berkenaan, boleh menolak permohonan tersebut <br>
                                    atau membenarkannya <strong>di atas syarat yang dikenakan olehnya atau pihak berkuasa itu</strong>...</i>
                            </p><br>
                            <h4>Bayaran Pemprosesan dan Bayaran Perkhidmatan</h4>
                            <p>Lembaga Lebuhraya Malaysia (LLM) sentiasa komited dalam usaha untuk menyediakan kemudahan dan perkhidmatan berkualiti kepada pengguna lebuhraya.<br>
                                Panduan Tatacara Bayaran Proses dan Bayaran Perkhidmatan Permohonan Pembangunan Tepi Lebuhraya (PTL) oleh Pihak Ketiga bertujuan untuk menjelaskan dengan<br>
                                lebih terperinci mengenai bayaran yang dikenakan kepada pihak ketiga apabila memohon apa jua bentuk pembangunan dan perlaksanaan sebarang kerja-kerja<br>
                                di dalam rezab lebuhraya.</p><p></p><p></p>

                            <table class="table table-bordered mt-20 mb-20">
                                <tbody>
                                <tr>
                                    <td>(i)</td>
                                    <td>Bayaran Pemprosesan</td>
                                    <td>Melibatkan kos berkaitan proses permohonan dimana ianya tidak akan dikembalikan sama ada permohonan diluluskan atau tidak</td>
                                </tr>
                                <tr>
                                    <td>(ii)</td>
                                    <td>Bayaran Perkhidmatan</td>
                                    <td>Melibatkan kos pemantauan dan kawalseliaan permohonan yang diluluskan dari peringkat awalan sehingga siap di tapak dimana ianya tidak akan dikembalikan</td>
                                </tr>
                                </tbody>
                            </table>

                            <div class="mt-15">
                                <strong>Klasifikasi 5 Jenis Permohonan bagi PTL</strong><br><br>
                                <ul>
                                    <li>Jenis 1 - Akses ke lebuhraya secara langsung</li>
                                    <li>Jenis 2 - Jalan melintasi lebuhraya tanpa sambungan</li>
                                    <li>Jenis 3 - Saluran kemudahan awam melintasi lebuhraya</li>
                                    <li>Jenis 4 - Papantanda tunjuk arah</li>
                                    <li>Jenis 5 - Lain-lain permohonan</li>
                                </ul>
                                <br><br>
                                <strong>Jenis 1 - Akses ke Lebuhraya Secara Langsung</strong>
                                <br>a) Kadar Bayaran Pemprosesan
                                <table class="table table-bordered mt-20 mb-20">
                                    <thead>
                                    <tr>
                                        <td colspan="1">Jenis Permohonan</td>
                                        <td colspan="4" align="center">Jumlah Bayaran Pemprosesan</td>
                                    </tr>
                                    <tr>
                                        <td colspan="1"></td>
                                        <td align="center">Pihak Ketiga (Syarikat/Individu)</td>
                                        <td align="center">Syarikat Konsesi</td>
                                        <td align="center">Syarikat Berkepentingan Kerajaan (GLC)</td>
                                        <td align="center">Jabatan Kerajaan/Agensi</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Akses Terus ~ Stesyen Minyak</td>
                                        <td align="center">RM 3,000</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    <tr>
                                        <td>Akses Terus ~ Perumahan/Komersial/Pembangunan Bercampur</td>
                                        <td align="center">RM 3,000</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    <tr>
                                        <td>Akses Dengan Persimpangan Bertingkat Baru ~ Perumahan</td>
                                        <td align="center">RM 3,000</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    <tr>
                                        <td>Akses Dengan Persimpangan Bertingkat Baru ~ Komersial/Pembangunan Bercampur</td>
                                        <td align="center">RM 3,000</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p></p>
                                <br>b) Kadar Bayaran Perkhidmatan
                                <table class="table table-bordered mt-20 mb-20">
                                    <thead>
                                    <tr>
                                        <td colspan="1">Jenis Permohonan</td>
                                        <td colspan="3" align="center">Jumlah Bayaran Perkhidmatan</td>
                                    </tr>
                                    <tr>
                                        <td colspan="1"></td>
                                        <td align="center">Pihak Ketiga (Syarikat/Individu)</td>
                                        <td align="center">Syarikat Berkepentingan Kerajaan (GLC)</td>
                                        <td align="center">Jabatan Kerajaan/Agensi</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Akses Terus ~ Perumahan/Komersial/Pembangunan Bercampur</td>
                                        <td align="center">RM 100,000</td>
                                        <td align="center">RM 30,000</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    <tr>
                                        <td>Akses Dengan Persimpangan Bertingkat Baru ~ Perumahan</td>
                                        <td align="center">RM 500,000</td>
                                        <td align="center">RM 50,000</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    <tr>
                                        <td>Akses Dengan Persimpangan Bertingkat Baru ~ Komersial/Pembangunan Bercampur</td>
                                        <td align="center">RM 500,000</td>
                                        <td align="center">RM 50,000</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p></p>
                                <table class="table table-bordered mt-20 mb-20">
                                    <thead>
                                    <tr>
                                        <td colspan="1">Jenis Permohonan</td>
                                        <td colspan="2" align="center">Jumlah Bayaran Perkhidmatan</td>
                                    </tr>
                                    <tr>
                                        <td colspan="1"></td>
                                        <td align="center">Kawasan Lembah Klang/ Lebuhraya Berkepadatan Tinggi (&gt;50,000 Bil Trafik)</td>
                                        <td align="center">Lebuhraya Berkepadatan Rendah (&lt;50,000 Bil Trafik)</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Akses Terus ~ Stesyen Minyak</td>
                                        <td align="center">RM 300,000</td>
                                        <td align="center">RM 100,000</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p></p>
                                <br><br>
                                <strong>Jenis 2 - Jalan Melintasi Lebuhraya Tanpa Sambungan</strong>
                                <br>a) Kadar Bayaran Pemprosesan
                                <table class="table table-bordered mt-20 mb-20">
                                    <thead>
                                    <tr>
                                        <td colspan="1">Jenis Permohonan</td>
                                        <td colspan="4" align="center">Jumlah Bayaran Pemprosesan</td>
                                    </tr>
                                    <tr>
                                        <td colspan="1"></td>
                                        <td align="center">Pihak Ketiga (Syarikat/Individu)</td>
                                        <td align="center">Syarikat Konsesi</td>
                                        <td align="center">Syarikat Berkepentingan Kerajaan (GLC)</td>
                                        <td align="center">Jabatan Kerajaan/Agensi</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>a) Jambatan</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">RM 750</td>
                                        <td align="center">RM 750</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    <tr>
                                        <td>b) Vehicular Box Culvert (VBC)</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">RM 750</td>
                                        <td align="center">RM 750</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <br>b) Kadar Bayaran Perkhidmatan
                                <table class="table table-bordered mt-20 mb-20">
                                    <thead>
                                    <tr>
                                        <td colspan="1">Jenis Permohonan</td>
                                        <td colspan="4" align="center">Jumlah Bayaran Perkhidmatan</td>
                                    </tr>
                                    <tr>
                                        <td colspan="1"></td>
                                        <td align="center">Pihak Ketiga (Syarikat/Individu)</td>
                                        <td align="center">Syarikat Berkepentingan Kerajaan (GLC)</td>
                                        <td align="center">Jabatan Kerajaan/Agensi</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>a) Jambatan</td>
                                        <td align="center">RM 20,000</td>
                                        <td align="center">RM 10,000</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    <tr>
                                        <td>b) Vehicular Box Culvert (VBC)</td>
                                        <td align="center">RM 10,000</td>
                                        <td align="center">RM 5,000</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <br><br>
                                <strong>Jenis 3 - Saluran-saluran Kemudahan Awam Melintasi Lebuhraya</strong>
                                <br>a) Kadar Bayaran Pemprosesan
                                <table class="table table-bordered mt-20 mb-20">
                                    <thead>
                                    <tr>
                                        <td colspan="1">Jenis Permohonan</td>
                                        <td colspan="4" align="center">Jumlah Bayaran Pemprosesan</td>
                                    </tr>
                                    <tr>
                                        <td colspan="1"></td>
                                        <td align="center">Pihak Ketiga (Syarikat/Individu)</td>
                                        <td align="center">Syarikat Konsesi</td>
                                        <td align="center">Syarikat Berkepentingan Kerajaan (GLC)</td>
                                        <td align="center">Jabatan Kerajaan/Agensi</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>a) Sebarang kerja 'pipe jacking' melintasi lebuhraya/pemasangan saluran paip kemudahan awam/ pembentung air menggunakan kaedah 'pipe jacking'</td>
                                        <td align="center">RM 500</td>
                                        <td align="center">RM 250</td>
                                        <td align="center">RM 250</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    <tr>
                                        <td>b) Overhead transmission line</td>
                                        <td align="center">RM 500</td>
                                        <td align="center">RM 250</td>
                                        <td align="center">RM 250</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    <tr>
                                        <td>c) Menara Pemancar</td>
                                        <td align="center">RM 5,000</td>
                                        <td align="center">RM 2,500</td>
                                        <td align="center">RM 2,500</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    <tr>
                                        <td>d) Menambah sesalur ke lurang sedia ada/penanaman lubang</td>
                                        <td align="center">RM 500</td>
                                        <td align="center">RM 250</td>
                                        <td align="center">RM 250</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <br>b) Kadar Bayaran Perkhidmatan
                                <table class="table table-bordered mt-20 mb-20">
                                    <thead>
                                    <tr>
                                        <td colspan="1">Jenis Permohonan</td>
                                        <td colspan="4" align="center">Jumlah Bayaran Pemprosesan</td>
                                    </tr>
                                    <tr>
                                        <td colspan="1"></td>
                                        <td align="center">Pihak Ketiga (Syarikat/Individu)</td>
                                        <td align="center">Syarikat Berkepentingan Kerajaan (GLC)</td>
                                        <td align="center">Jabatan Kerajaan/Agensi</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>a) Sebarang kerja 'pipe jacking' melintasi lebuhraya/pemasangan saluran paip kemudahan awam/ pembentung air menggunakan kaedah 'pipe jacking'</td>
                                        <td align="center">RM 5,000</td>
                                        <td align="center">PERCUMA</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    <tr>
                                        <td>b) Overhead transmission line</td>
                                        <td align="center">RM 5,000</td>
                                        <td align="center">PERCUMA</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    <tr>
                                        <td>c) Menara Pemancar</td>
                                        <td align="center">RM 20,000</td>
                                        <td align="center">PERCUMA</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    <tr>
                                        <td>d) Menambah sesalur ke lurang sedia ada/penanaman lubang</td>
                                        <td align="center">RM 500</td>
                                        <td align="center">PERCUMA</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <br><br>
                                <strong>Jenis 4 - Papantanda</strong>
                                <br>a) Kadar Bayaran Pemprosesan
                                <table class="table table-bordered mt-20 mb-20">
                                    <thead>
                                    <tr>
                                        <td colspan="1">Jenis Papantanda Arah</td>
                                        <td colspan="4" align="center">Jumlah Bayaran Pemprosesan</td>
                                    </tr>
                                    <tr>
                                        <td colspan="1"></td>
                                        <td align="center">Pihak Ketiga (Syarikat/Individu)</td>
                                        <td align="center">Syarikat Konsesi</td>
                                        <td align="center">Syarikat Berkepentingan Kerajaan (GLC)</td>
                                        <td align="center">Jabatan Kerajaan/Agensi</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">Laluan Utama (Mainline)</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>a) Forward Advanced Direction Sign (FADS)</td>
                                        <td align="center">RM 3,000</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    <tr>
                                        <td>b) Advance Direction Sign (ADS)</td>
                                        <td align="center">RM 3,000</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    <tr>
                                        <td>c) Confirmation Sign (CS)</td>
                                        <td align="center">RM 3,000</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    <tr>
                                        <td>d) Overhead Gantry</td>
                                        <td align="center">RM 3,000</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">Ramp</td>
                                    </tr>
                                    <tr>
                                        <td>a) Butterfly Gantry</td>
                                        <td align="center">RM 3,000</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <br>b) Kadar Bayaran Perkhidmatan
                                <table class="table table-bordered mt-20 mb-20">
                                    <thead>
                                    <tr>
                                        <td colspan="1">Jenis Papantanda Arah</td>
                                        <td colspan="4" align="center">Jumlah Bayaran Perkhidmatan</td>
                                    </tr>
                                    <tr>
                                        <td colspan="1"></td>
                                        <td align="center">Pihak Ketiga (Syarikat/Individu)</td>
                                        <td align="center">Syarikat Berkepentingan Kerajaan (GLC)</td>
                                        <td align="center">Jabatan Kerajaan/Agensi</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">Laluan Utama (Mainline)</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>a) Forward Advanced Direction Sign (FADS)</td>
                                        <td align="center">RM 50,000</td>
                                        <td align="center">RM 25,000</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    <tr>
                                        <td>b) Advance Direction Sign (ADS)</td>
                                        <td align="center">RM 50,000</td>
                                        <td align="center">RM 25,000</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    <tr>
                                        <td>c) Confirmation Sign (CS)</td>
                                        <td align="center">RM 50,000</td>
                                        <td align="center">RM 25,000</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    <tr>
                                        <td>d) Overhead Gantry</td>
                                        <td align="center">RM 50,000</td>
                                        <td align="center">RM 25,000</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">Ramp</td>
                                    </tr>
                                    <tr>
                                        <td>a) Butterfly Gantry</td>
                                        <td align="center">RM 50,000</td>
                                        <td align="center">RM 25,000</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <br><br>
                                <strong>Jenis 5 - Lain-lain Jenis Permohonan</strong>
                                <br>a) Kadar Bayaran Pemprosesan
                                <table class="table table-bordered mt-20 mb-20">
                                    <thead>
                                    <tr>
                                        <td colspan="1">Jenis Permohonan</td>
                                        <td colspan="4" align="center">Jumlah Bayaran Pemprosesan</td>
                                    </tr>
                                    <tr>
                                        <td colspan="1"></td>
                                        <td align="center">Pihak Ketiga (Syarikat/Individu)</td>
                                        <td align="center">Syarikat Konsesi</td>
                                        <td align="center">Syarikat Berkepentingan Kerajaan (GLC)</td>
                                        <td align="center">Jabatan Kerajaan/Agensi</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>a) Menggunakan rezab lebuhraya sebagai jalan sementara untuk ke tapak pembangunan (Tidak melebihi 3 tahun)</td>
                                        <td align="center">RM 3,000</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    <tr>
                                        <td>b) Meratakan cerun</td>
                                        <td align="center">RM 3,000</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">RM 1,500</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <br>b) Kadar Bayaran Perkhidmatan
                                <table class="table table-bordered mt-20 mb-20">
                                    <thead>
                                    <tr>
                                        <td colspan="1">Jenis Permohonan</td>
                                        <td colspan="4" align="center">Jumlah Bayaran Perkhidmatan</td>
                                    </tr>
                                    <tr>
                                        <td colspan="1"></td>
                                        <td align="center">Pihak Ketiga (Syarikat/Individu)</td>
                                        <td align="center">Syarikat Berkepentingan Kerajaan (GLC)</td>
                                        <td align="center">Jabatan Kerajaan/Agensi</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>a) Menggunakan rezab lebuhraya sebagai jalan sementara untuk ke tapak pembangunan (Tidak melebihi 3 tahun)</td>
                                        <td align="center">RM 50,000</td>
                                        <td align="center">RM 25,000</td>
                                        <td align="center">PERCUMA</td>
                                    </tr>
                                    <tr>
                                        <td>b) Meratakan cerun</td>
                                        <td align="center">Minimum RM 5,000 atau anggaran kasar kuantiti tanah x RM10 meter padu yang mana lebih tinggi</td>
                                        <td align="center">Minimum RM 2,500 atau anggaran kasar kuantiti tanah x RM5 meter padu yang mana lebih tinggi</td>
                                        <td align="center">PERCUMA </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <br>
                            <h4>Permohonan untuk mendirikan struktur paparan iklan di rezab Jalan seliaan LLM adalah tertakluk kepada:-</h4>
                            <p>
                            <ul>
                            <li>Seksyen 85A Akta Pengangkutan Jalan 1987 [Akta 333]</li>
                            <li>Akta Caj dan Fi pada 6 Disember 2010 Ruj:PN(PU2)460/LXII</li>
                            <li>Tatacara Mendirikan Struktur Paparan Iklan Di dalam Rezab Jalan Persekutuan / Lebuhraya 2011</li>
                            <li>Tatacara Permohonan dan Pemasangan Paparan Iklan Jenis Lightbox (Berlampu / Tidak Berlampu) Di Rizab Jalan Persekutuan dan Lebuhraya 2011</li>
                            <li>Tatacara Permohonan dan Pemasangan Paparan Iklan Jenis Pillar Wrap Di Rizab Jalan Persekutuan dan Lebuhraya 2014</li>
                            <li>Garis Panduan Mendirikan Struktur Paparan Iklan Di Dalam Rezab Lebuh Raya Di Bawah Seliaan Lembaga Lebuhraya Malaysia (LLM) - (LLM/GP/A8-15)</li>
</ul>
</p>
                            <br>
                            <h4>Bayaran Pemprosesan dan Bayaran Perkhidmatan</h4>
                            <div class="mt-15">
                                <table class="table table-bordered mt-15 mb-15">
                                    <thead>
                                    <tr>
                                        <td colspan="2">Jenis Struktur</td>
                                        <td colspan="1" align="center">Fi Pemprosesan (RM)</td>
                                        <td colspan="1" align="center" width="30%">Gambar</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>UniPole</td>
                                        <td>1,000.00</td>
                                        <td align="center"><div class="landscape">
                                                <img src="../img/unipole.jpg">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>TwinPole</td>
                                        <td>1,000.00</td>
                                        <td align="center"><div class="landscape">
                                                <img src="../img/twinpole.jpg">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>MiniPole</td>
                                        <td>1,000.00</td>
                                        <td align="center"><div class="landscape">
                                                <img src="../img/minipole.jpg">
                                            </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>4.</td>
                                        <td>Freestanding</td>
                                        <td>500.00</td>
                                        <td align="center"><div class="landscape">
                                                <img src="../img/freestanding.jpg">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5.</td>
                                        <td>Gantri</td>
                                        <td>1,000.00</td>
                                        <td align="center"><div class="landscape">
                                                <img src="../img/gantry1.jpg">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>6.</td>
                                        <td>Parapet</td>
                                        <td>500.00</td>
                                        <td align="center"><div class="landscape">
                                                <img src="../img/parapet_jejantas.jpg">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>7.</td>
                                        <td>Paparan Kontena</td>
                                        <td>500.00</td>
                                        <td align="center"><div class="landscape">
                                                <img src="../img/kontena.jpg">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>8.</td>
                                        <td>Iklan Elektronik</td>
                                        <td>500.00</td>
                                        <td align="center"><div class="landscape">
                                                <img src="../img/electronic.jpg">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>9.</td>
                                        <td>Lightbox</td>
                                        <td>20.00 / tiang</td>
                                        <td align="center"><div class="landscape">
                                                <img src="../img/lightbox.jpg">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>10.</td>
                                        <td>Pillar Wrap</td>
                                        <td>300.00 / tiang</td>
                                        <td align="center"><div class="landscape">
                                                <img src="../img/pillar_wrap.jpg">
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p></p>
                                <table class="table table-bordered mt-15 mb-15">
                                    <thead>
                                    <tr>
                                        <td colspan="2" rowspan="2" align="center">Jenis</td>
                                        <td colspan="3" align="center">Kadar Bayaran Setahun</td>
                                    </tr>
                                    <tr>
                                        <td align="center">Zon 1</td>
                                        <td align="center">Zon 2</td>
                                        <td align="center">Zon 3</td>
                                    </tr>
                                    <tr>
                                        <td align="center">INDUK</td>
                                        <td align="center">SUB</td>
                                        <td align="center">RM</td>
                                        <td align="center">RM</td>
                                        <td align="center">RM</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td rowspan="4">Pole</td>
                                        <td>UniPole<br>1/2/3 paparan</td>
                                        <td>30,000</td>
                                        <td>20,000</td>
                                        <td>10,000</td>
                                    </tr>

                                    <tr>
                                        <td>TwinPole<br>1/2 paparan</td>
                                        <td>30,000</td>
                                        <td>20,000</td>
                                        <td>10,000</td>
                                    </tr>

                                    <tr>
                                        <td>MiniPole<br>1/2/3 paparan</td>
                                        <td>20,000</td>
                                        <td>15,000</td>
                                        <td>10,000</td>
                                    </tr>

                                    <tr>
                                        <td>Lain-lain<br>1/2/3 paparan</td>
                                        <td>20,000-30,000</td>
                                        <td>15,000-20,000</td>
                                        <td>10,000-15,000</td>
                                    </tr>

                                    <tr>
                                        <td>Freestanding</td>
                                        <td></td>
                                        <td>10,000</td>
                                        <td>7,000</td>
                                        <td>5,000</td>
                                    </tr>

                                    <tr>
                                        <td rowspan="3">Gantri</td>
                                        <td>Keseluruhan gerbang gantri</td>
                                        <td>50,000</td>
                                        <td>35,000</td>
                                        <td>20,000</td>
                                    </tr>

                                    <tr>
                                        <td>Pada belakang bahagian gantri sedia ada</td>
                                        <td>5,000</td>
                                        <td>3,000</td>
                                        <td>2,000</td>
                                    </tr>

                                    <tr>
                                        <td>Lain-lain</td>
                                        <td>10,000-50,000</td>
                                        <td>7,000-35,000</td>
                                        <td>2,000-20,000</td>
                                    </tr>

                                    <tr>
                                        <td>Parapet</td>
                                        <td></td>
                                        <td>15,000</td>
                                        <td>10,000</td>
                                        <td>6,000</td>
                                    </tr>
                                    <tr>
                                        <td>Paparan Kontena</td>
                                        <td></td>
                                        <td>10,000</td>
                                        <td>7,000</td>
                                        <td>5,000</td>
                                    </tr>
                                    <tr>
                                        <td>Iklan Elektronik (i-Board)</td>
                                        <td></td>
                                        <td>50,000</td>
                                        <td>35,000</td>
                                        <td>20,000</td>
                                    </tr>

                                    <tr>
                                        <td>Lightbox</td>
                                        <td>Berlampu / Tidak Berlampu</td>
                                        <td colspan="3" align="center">150/tiang</td>
                                    </tr>
                                    <tr>
                                        <td>Pillar Wrap</td>
                                        <td></td>
                                        <td colspan="3" align="center">1,400/tiang</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p></p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade in" tabindex="-1" id="landingModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">5 Langkah mudah untuk membuat permohonan melalui ePTL LLM :</h4>
                </div>
                <div class="modal-body">
                    <ol>
                        <li>Daftar akaun sebagai pengguna</li>
                        <li>Setelah melakukan pendaftaran, emel pengaktifan akaun pengguna akan dihantar dan klik pada
pautan yang disediakan menerusi emel tersebut.</li>
                        <li>Semak kategori permohonan dan jadual pembayaran pemprosesan.</li>
                        <li>Buat pembayaran pemprosesan bagi kategori pembangunan yang dipilih dan sediakan bukti
pembayaran dalam bentuk salinan digital (softcopy).</li>
                        <li>Daftar permohonan mengikut kategori yang dipilih dan muatnaik bukti pembayaran. Seterusnya
tekan butang Hantar untuk menghantar permohonan.</li>
                    </ol>
                </div>
                    {{--<div class="modal-footer">--}}
                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                    {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                    {{--</div>--}}
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $('#landingModal').modal('show');
    });
</script>
@endpush

@push('styles')
<style type="text/css">
    .btn, .form-control {
        border-radius: 0px;
        /*border-style: none;
        padding: 7px 17px 7px 17px;*/
    }
    body {
        background-size:   initial;                      /* <------ */
        background-repeat: no-repeat;
        background-position: top center;
        background-image: url('img/banner-highways.jpg');
    }
    .overlay-loading {
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        background: #000;
        opacity: 0.8;
        filter: alpha(opacity=80);
        z-index: 2000;
    }
    .loading-icon {
        /*width: 50px;
        height: 57px;*/
        position: absolute;
        top: 50%;
        left: 50%;
        /*margin: -28px 0 0 -25px;*/
    }

    .deepshadow {
        color: #ffffff;
        text-transform: uppercase;
        line-height: 10px;
        font-weight: 100;
        margin-top: 10px;
        text-shadow: 0px 1px 0px #999, 0px 2px 0px #888, 0px 3px 0px #777, 0px 4px 0px #666, 0px 5px 0px #555, 0px 6px 0px #444;
    }

    .insetshadow {
        color:#ffffff;
        background-color:#e8e8e8; text-shadow:rgba(255,255,255,.1) -1px -1px 1px,rgba(0,0,0,.5) 1px 1px 1px;
    }

    .h2 {
        color: white;
        text-shadow: 0 1px 0 #595858,
        0 2px 0 #595858,
        0 3px 0 #595858,
        0 4px 0 #595858,
        0 5px 0 #595858,
        0 6px 1px rgba(0,0,0,.1),
        0 0 5px rgba(0,0,0,.1),
        0 1px 3px rgba(0,0,0,.3),
        0 3px 5px rgba(0,0,0,.2),
        0 5px 10px rgba(0,0,0,.25),
        0 10px 10px rgba(0,0,0,.2),
        0 20px 20px rgba(0,0,0,.15);
    }
    
    img {
    max-width: 100%;
    max-height: 100%;
    }

    .landscape {
    height: 165px;
    width: 250px;
    }

    .h4 {
        color: white;
        text-shadow: 0 1px 0 #595858,
        0 2px 0 #595858,
        0 3px 0 #595858,
        0 4px 0 #595858,
        0 5px 0 #595858,
        0 6px 1px rgba(0,0,0,.1),
        0 0 5px rgba(0,0,0,.1),
        0 1px 3px rgba(0,0,0,.3),
        0 3px 5px rgba(0,0,0,.2),
        0 5px 10px rgba(0,0,0,.25),
        0 10px 10px rgba(0,0,0,.2),
        0 20px 20px rgba(0,0,0,.15);
    }

</style>
@endpush