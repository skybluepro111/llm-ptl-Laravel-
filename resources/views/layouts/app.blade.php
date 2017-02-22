<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LLM</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link type="text/css" href="{{asset('icons/material/css/material-design-iconic-font.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('css/theme.css')}}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!--<link rel="stylesheet" href="css/w3.css">
     <link href='https://fonts.googleapis.com/css?family=Rubik:400,400italic,500,500italic,300italic,300' rel='stylesheet' type='text/css'> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,500' rel='stylesheet' type='text/css'> -->
    @stack('styles')
</head>
<body class="bg-1">
    <div class="master">
        <nav class="toolbar navbar navbar-default no-radius">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle pull-left visible-xs visible-sm">
                        <i class="zmdi zmdi-menu"></i>
                    </button>
                    <a class="navbar-brand" href="../index.php">
                        <img src="{{asset('img/logo-llm-white.svg')}}" height="100%">
                        <span>Lembaga Lebuhraya Malaysia</span>
                    </a>
                </div>
                <div class="navbar-collapse hidden-xs hidden-sm">
                    @if(isset($navbar))
                    <ul class="navbar-left navbar-nav nav">
                        @foreach($navbar as $item)
                            <li class="dropdown dropdown-hover">
                                <a href="{{$item['href']}}">
                                    <b class="col-cell cell-icon text-center">
                                        <i class="zmdi {{$item['icon']}}"></i>
                                        @if($item['count'])<em>{{$item['count']}}</em>@endif
                                    </b>
                                    <b class="col-cell cell-name pl-10">{{$item['title']}}</b>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    @endif

                    <ul class="navbar-right navbar-nav nav hidden-xs hidden-sm">
                        @if(Auth::guest())
                        <li>
                            <!--<a href="#" onclick="document.getElementById('id01').style.display='block'">-->
                            <a href="#" data-toggle="modal" data-target="#guide">
                                <b class="col-cell cell-icon text-center">
                                    <i class="zmdi zmdi-info-outline"></i>
                                </b>
                                <b class="col-cell cell-name pl-10 mn-user-guide">
                                    {{trans('register.menu2')}}
                                </b>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('/register')}}">
                                <b class="col-cell cell-icon text-center">
                                    <i class="zmdi zmdi-sign-in"></i>
                                </b>
                                <b class="col-cell cell-name pl-10">
                                    {{trans('register.menu1')}}
                                </b>
                            </a>
                        </li>
                        @endif
                        <li>
                            <a href="{{ url('lang/my') }}">
                                <b class="col-cell cell-name pl-10">
                                    <img src="/img/my.png">
                                </b>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('lang/en') }}">
                                <b class="col-cell cell-name pl-10">
                                    <img src="/img/us.png">
                                </b>
                            </a>
                        </li>
                        @if(Auth::check())
                            @hasrole(['admin','applicant','but','bpo','pw'])
                            <li>
                                <a href="{{route('messenger.index')}}">
                                    <b class="col-cell cell-icon text-center">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <em>{{Messenger::getMessagesCount()}}</em>
                                    </b>
                                    <b class="col-cell cell-name pl-10">
                                        {{Auth::user()->name}}
                                    </b>
                                </a>
                            </li>
                            @endhasrole
                            <li class="dropdown dropdown-hover">
                                <a href="#" class="navbar-user dropdown-toggle" data-toggle="dropdown" style="width: auto;">
                                    <img class="radius-circle" src="{{asset('img/user.png')}}" width="48" height="48">
                                </a>

                                <div class="dropdown-menu fly-from-right">
                                    <ul class="dropdown-menu-list reset-list">
                                        <li>
                                            <a href="index.php" class="row-table">
									<span class="col-cell cell-icon text-center">
										<i class="zmdi zmdi-edit"></i>
									</span>
									<span class="col-cell pl-15">
										Update Account
									</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="settings-profile.php" class="row-table">
									<span class="col-cell cell-icon text-center">
										<i class="zmdi zmdi-dialpad"></i>
									</span>
									<span class="col-cell pl-15">
										Change Password
									</span>
                                            </a>
                                        </li>

                                        <li role="separator" class="divider"></li>

                                        <li>
                                            <a href="{{route('auth.logout')}}" class="row-table">
									<span class="col-cell cell-icon text-center">
										<i class="zmdi zmdi-run"></i>
									</span>
									<span class="col-cell pl-15">
										Logout
									</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            @endif
                        </ul>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @yield('toolbar')
    @yield('tabs')
    @yield('content')

    <div class="footer pt-20 pb-20">
        <div class="container text-center text-small pt-15 pb-20 mb-20">
            <hr>
            <p>Best viewed using Internet Explorer 11+, Mozilla Firefox, Google Chrome and Safari with minimum resolution of 1280x768 pixels.</p>
            <div class="text-small text-muted">All rights reserved © 2016 ePTL-LLM</div>
        </div>
    </div>
    <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jasny-fileinput.min.js')}}"></script>
    <script src="{{asset('js/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('http://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/pace.min.js')}}"></script>
    <script src="{{asset('js/chosen.jquery.min.js')}}"></script>
    <script src="{{asset('js/picker.js')}}"></script>
    <script src="{{asset('js/picker.date.js')}}"></script>
    <script>
        $(document).ready(function() {
            $datatables = function($element, $route, $options) {
                if (!$($element).length) {
                    return false;
                }
                var $defaults = {
                    autoWidth : false,
                    serverSide : true,
                    iDisplayLength : 50,
                    lengthMenu: [ 10, 25, 50, 75, 100, 200, 300, 500 ],
                    ajax : $route,
                    order : [ [ 0, 'desc' ] ],
                    responsive : true,
                    columnDefs : [{
                        responsivePriority : 1,
                        targets : 1
                    },
                        {
                            responsivePriority : 2,
                            targets : -1
                        }]
                };
                var $dataTable = $($element).DataTable(jQuery.extend($defaults, $options));

                $dataTable.on(
                        'init.dt',
                        function() {
                            $('.dataTables_paginate').find('span.ellipsis').remove();
                            $('.dataTables_filter, .dataTables_length').find('input, select')
                                    .addClass('form-control');
                        }).on('preXhr.dt', function() {
//                $app.displayLoading($element);
                }).on('xhr.dt', function() {
//                $app.hideLoading($element);
                });
                return $dataTable;
            }

            //: Show modal on click menu
            $('.mn-user-guide').click(function(){
                $('#landingModal').modal('show');
            });
        });
    </script>
    @stack('scripts')
    <script src="{{asset('js/theme.js')}}"></script>


    @yield('script')

    <!-- Processing modal -->
    <div class="modal processingModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Processing...</h3>
                </div>
                <div class="modal-body">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            <span class="sr-only">45% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- ./Processing modal -->

</body>
