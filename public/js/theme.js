$(function() {
    $('.toolbar .navbar-toggle').click(function(){
        $('.toolbar .navbar-collapse').toggleClass('in');
    });

    $('.dropdown').click(function(){
        $('.toolbar .navbar-collapse').removeClass('in');
    });

    // The date picker (read the docs: http://amsul.ca/pickadate.js/date/)
    $('.form-datepicker').pickadate()

    // The alternative select form (read the docs: https://harvesthq.github.io/chosen/)
    $('.form-chosen').chosen();
    $('.chosen-search').addClass('form-control-icon').prepend('<i class="zmdi zmdi-search pull-right"></i>');
    $('.chosen-search input').addClass('form-control').attr('placeholder', 'Taip kata kunci untuk tapis pilihan');
    $('.chosen-results').addClass('scrollbar-basic');

    // set background image to support dropdown menu
    // $('.toolbar .navbar-nav > li.dropdown').mouseover(function(){
    //     $(this).parents('.master').addClass('show-dropdown');
    // });

    // $('.toolbar .navbar-nav > li.dropdown').mouseleave(function(){
    //     $(this).parents('.master').removeClass('show-dropdown');
    // });

    // $('.toolbar').mouseover(function(){
    //     $(this).parents('.master').addClass('almost-show-dropdown');
    // });

    // $('.toolbar').mouseleave(function(){
    //     $(this).parents('.master').removeClass('almost-show-dropdown');
    // });
});

$(document).ready(function() {
    // Enabled Bootstrap tooltip
    $('[data-toggle="tooltip"]').tooltip();   

    // Enabled jQuery Scrollbar
    $('.scrollbar-basic').scrollbar();

    // Enabled Datatable
    //$('.datatables').DataTable({
    //    "iDisplayLength": 10,
    //
    //    "language" : {
    //        "info": "Paparan _PAGE_ / _PAGES_"
    //    }
    //});

    $('.dataTable > thead > tr > th').wrapInner('<div></div>');
    $('.dataTables_length').addClass('hidden-xs hidden-sm');
    $('.dataTables_length select').addClass('form-control').wrap('<div class="form-control-select"></div>');
    $('.dataTables_filter input').addClass('form-control').wrap('<div class="form-control-finder"></div>').attr('placeholder', 'Carian maklumat');;

    var table = $('.datatables').DataTable();
 
    $('.datatables tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });

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
});