
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ $settings->favicon ? asset('uploads/'.$settings->favicon) : asset('uploads/no_image.jpg') }}" />

    <title>{{ $settings->school_name }}</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">

    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{ asset('backend/css/demo/nifty-demo-icons.min.css') }}" rel="stylesheet">


    <!--Font Awesome-->
    <link href="{{ asset('backend/my_plugins/FontAwesome.Pro.6.5.2/css/all.css') }}" rel="stylesheet">
    <!--Toastr-->
    <link href="{{ asset('backend/my_plugins/toastr/toastr.css') }}" rel="stylesheet">
    <!--Sweet Alert-->
    <link href="{{ asset('backend/my_plugins/sweet_alert_11.11/sweetalert2.min.css') }}" rel="stylesheet">

    <!--Date Range Picker-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/my_plugins/daterangepicker/daterangepicker.css') }}" />

    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="{{ asset('backend/plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet">

    <!--Select2 [ OPTIONAL ]-->
    <link href="{{ asset('backend/plugins/select2/css/select2.min.css') }}" rel="stylesheet">

    <!--Data Table-->
    <link rel="stylesheet" href="{{ asset('backend/my_plugins/datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/my_plugins/datatable/datatable_fixed_header/fixed_header.css') }}">


    <!--=================================================-->

    @yield('css_code', " ")

    <style>
        table.fixedHeader-floating {
            margin-top: 0px !important;
        }
    </style>
</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-sm">
        
        @include('admin.layout.topbar')

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <div id="page-head">

                    @yield('page_head')

                </div>

                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">

                    @yield('page_content')             
                                   
                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->


            
            <!--ASIDE-->
            <!--===================================================-->
            @include('admin.layout.sidebar')
            <!--===================================================-->
            <!--END ASIDE-->

            
            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            @include('admin.layout.side_menu')
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->


        </div>

        

        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">

            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="show-fixed pad-rgt pull-right">
                You have <a href="#" class="text-main"><span class="badge badge-danger">3</span> pending action.</a>
            </div>



            <!-- Visible when footer positions are static -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">
                <!-- <strong>Phone</strong> 0322-0622406. -->
            </div>



            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <p class="pad-lft">&#0169; 2026 <a href="https://orientotech.com">Oriento Tech</a></p>



        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->

    
    
    
    
    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="{{ asset('backend/js/nifty.min.js') }}"></script>


    <!--Font Awesome-->
    <script src="{{ asset('backend/my_plugins/FontAwesome.Pro.6.5.2/js/all.js') }}"></script>
    <!--Toastr-->
    <script src="{{ asset('backend/my_plugins/toastr/toastr.js') }}"></script>
    <!--Sweet Alert-->
    <script src="{{ asset('backend/my_plugins/sweet_alert_11.11/sweetalert2.min.js') }}"></script>
    <!--Form Validation-->
    <script src="{{ asset('backend/my_plugins/validate/jquery.validate.js') }}"></script>
    <script src="{{ asset('backend/my_plugins/validate/additional_method.js') }}"></script>
    
    <script src="{{ asset('backend/my_plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('backend/my_plugins/daterangepicker/daterangepicker.js') }}"></script>

    <!--Bootstrap Select [ OPTIONAL ]-->
    <script src="{{ asset('backend/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>

    <!--Select2 [ OPTIONAL ]-->
    <script src="{{ asset('backend/plugins/select2\js/select2.min.js') }}"></script>

    <!--Sparkline [ OPTIONAL ]-->
    <script src="{{ asset('backend/plugins/sparkline/jquery.sparkline.min.js') }}"></script>


    <!--Data Table-->
    <script src="{{ asset('backend/my_plugins/datatable/datatablescripts.bundle.js') }}"></script>

    <script src="{{ asset('backend/my_plugins/datatable/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/my_plugins/datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/my_plugins/datatable/buttons/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('backend/my_plugins/datatable/buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/my_plugins/datatable/buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('backend/my_plugins/datatable/buttons/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('backend/my_plugins/datatable/buttons/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/my_plugins/datatable/buttons/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/my_plugins/datatable/buttons/vfs_fonts.js') }}"></script>

    <script src="{{ asset('backend/my_plugins/datatable/datatable_fixed_header/fixed_header.min.js') }}"></script>


    <script>

        
        function number_format(number, locale = 'en-US', options = {}) {
            // Merge provided options with default options
            const defaultOptions = {
                style: 'decimal', // Default style is decimal
                minimumFractionDigits: 0,
                maximumFractionDigits: 2,
            };

            // Format the number using toLocaleString() method
            return number.toLocaleString(locale, defaultOptions);
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        let csrf = {
            '_token': $('meta[name="csrf-token"]').attr('content'),
            // other data
        };

        // Function to save current page index to localStorage
        function savePaginationState(tableId, pageIndex) {
            localStorage.setItem(tableId + '_pageIndex', pageIndex);
        }

        // Function to load pagination state from localStorage
        function loadPaginationState(tableId) {
            return parseInt(localStorage.getItem(tableId + '_pageIndex')) || 0;
        }

        function load_data(options = {}) {
            // Set up CSRF token for AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Default options for DataTables
            var defaults = {
                tablename: "#main_table",
                order: [0, 'DESC'],
                ajax: [],
                columns: [],
                columnDefs: [],
                centeredColumnsOnPrintPdf: [],
                footerCallback: null
            };

            // Merge default options with user-provided options
            var settings = $.extend({}, defaults, options);

            // Define DataTable options
            var datatableOptions = {
                "bDestroy": true,
                searching: true,
                order: settings.order,
                "iDisplayLength": 25,
                dom: "<'row d-none'<'col-sm-12 col-md-3'><'col-sm-12 col-md-4 text-right'><'col-sm-12 col-md-5 text-right exportbtn'B>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-2'l><'col-sm-12 col-md-5'i><'col-sm-12 col-md-5 text-right'p>>",
                "lengthMenu": [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, "All"]
                ],
                "language": {
                    "loadingRecords": "<span class='fa-stack fa-lg'>\n\
                                            <i class='fa fa-spinner fa-spin fa-fw fs-2'></i>\n\
                                        </span>&emsp;Please Wait ...",
                    "zeroRecords": "Cannot find any record related to your search."
                },
                "fnInitComplete": function(oSettings, json) {
                    $('[data-toggle="tooltip"]').tooltip();
                },
                "processing": true,
                "serverSide": true,
                ajax: settings.ajax,
                columns: settings.columns,
                columnDefs: settings.columnDefs,
                fixedHeader: true,
                buttons: [
                    {
                        extend: 'excelHtml5',
                        className: 'btn-default', 
                        filename: 'Users',
                        title: "",
                        messageTop: "",
                        exportOptions: {
                            columns: ':visible:not(:last-child)',
                        },
                    },
                    {
                        extend: 'pdfHtml5', 
                        className: 'btn-default', 
                        filename: ""+' Ledger', 
                        title: "Party Name: "+"",
                        orientation: 'landscape',
                        pageSize: 'A4',
                        footer: true,
                        exportOptions: {
                            columns: ':visible:not(:last-child)',
                        },
                        customize: function (doc) {
						        // Adjust the page margins
						        doc.pageMargins = [20, 20, 20, 20]; // left, top, right, bottom

						        // Add the image to the top
						        // doc.content.splice(0, 0, {
						        //     margin: [0, 0, 0, 12],
						        //     alignment: 'center',
						        //     image: pdf_image,
						        //     width: 830, // Set width of the image
						        //     // height: 50  // Set height of the image
						        // });

						        // Adjust the table layout to use 100% width
						        var tableNode = doc.content.find(function (node) {
						            return node.table !== undefined;
						        });

						        if (tableNode) {
						            // Set table widths to 100%
						            tableNode.table.widths = Array(tableNode.table.body[0].length + 1).join('*').split('');

						            // Customize table layout
						            tableNode.layout = {
						                hLineWidth: function (i) {
						                    return i === 0 || i === tableNode.table.body.length ? 0.5 : 0.25;
						                },
						                vLineWidth: function (i) {
						                    return 0;
						                },
						                hLineColor: function (i) {
						                    return i === 0 || i === tableNode.table.body.length ? '#000000' : '#aaaaaa';
						                },
						                paddingLeft: function (i) {
						                    return i === 0 ? 0 : 8;
						                },
						                paddingRight: function (i, node) {
						                    return i === node.table.widths.length - 1 ? 0 : 8;
						                },
						                paddingTop: function (i) {
						                    return 8;
						                },
						                paddingBottom: function (i) {
						                    return 8;
						                }
						            };

						            // Center align specific columns
						            var body = tableNode.table.body;
						            var columnIndicesToCenter = settings.centeredColumnsOnPrintPdf; // Example column indices to center

						            for (var i = 0; i < body.length; i++) {
						                columnIndicesToCenter.forEach(function (index) {
						                    if (body[i][index]) {
						                        body[i][index].alignment = 'center';
						                    }
						                });
						            }
						        }

						        // Center align the message
						        if (doc.styles.message) {
						            doc.styles.message.alignment = "center";
						        }

						        // Left align the table header
						        if (doc.styles.tableHeader) {
						            doc.styles.tableHeader.alignment = "left";
						        }
						    }
                    },
                    {
                        extend: 'print', 
                        className: 'btn-default', 
                        title: "",
                        messageTop: "<h4>"+""+"</h4>",
                        autoPrint: false,
                        footer: true,
                        exportOptions: {
                            columns: ':visible:not(:last-child)',
                        },
                        customize: function ( win ) {
                                    $(win.document.body).find('h1').css('text-align', 'center');
                                    $(win.document.body).find('h4').css('text-align', 'center');
                                    $(win.document.body).css( 'font-size', '14-px' );
                                    $(win.document.body).css( 'background-color', 'transparent' );
                                    $(win.document.body).find( 'table' )
                                        .addClass( 'compact' )
                                        .css( 'font-size', 'inherit' );
                                    $(win.document.body).find( 'td' )
                                    .css( 'border-bottom', '1px solid #ddd' );

			                        // Center specific columns
                                    $(win.document.body).find('table').find('tr').each(function () {
                                        var columnIndicesToCenter = settings.centeredColumnsOnPrintPdf;
                                        columnIndicesToCenter.forEach(function (index) {
                                            $(this).find('td:eq(' + index + '), th:eq(' + index + ')').css('text-align', 'center');
                                        }, this);
                                    });
			                }
                    },
                    {
                        extend: 'colvis',
                        className: 'btn-default',
                        text: 'Show/Hide',
                        exportOptions: {
                            columns: ':visible',
                        }
                    },
                ],
                footerCallback: settings.footerCallback,
                // Initialize DataTable with options
                "initComplete": function () {
                    var table = this.api();
                    var tableId = settings.tablename;
                    table.on('page.dt', function () {
                        savePaginationState(tableId, table.page());
                    });
                }
            };

            // Initialize DataTable with options
            $(settings.tablename).DataTable(datatableOptions);
        }


    </script>



    <script>
        $(document).ready(function(){

            $('[data-toggle="tooltip"]').tooltip();
            
            $('.textboxlabel').click(function() {
                $(this).prev('.textbox').focus();
            });

            toastr.options = {
	          "closeButton": true,
	          "debug": false,
	          "newestOnTop": false,
	          "progressBar": true,
	          "positionClass": "toast-top-right",
	          "preventDuplicates": false,
	          "onclick": null,
	          "showDuration": "300",
	          "hideDuration": "1000",
	          "timeOut": "5000",
	          "extendedTimeOut": "1000",
	          "showEasing": "swing",
	          "hideEasing": "linear",
	          "showMethod": "fadeIn",
	          "hideMethod": "fadeOut"
	        };


            // Start Colvis Show Active on Click ===========//
            $(".toggle-vis").click(function(){
            $(this).toggleClass("colvischecked");
            });
            // End Colvis Show Active on Click ===========//


            $('a.toggle-vis').on('click', function (e) {
                e.preventDefault();
        
                // Get the column API object
                // var column = $('#main_table').DataTable().column($(this).val());

                //with anchor tag
                // <a class="toggle-vis" data-column="0">Name</a>


                var column = $('#main_table').DataTable().column($(this).attr('data-column'));


        
                // Toggle the visibility
                column.visible(!column.visible());
            });
            //=========== End Custom Colvis ===========//

            //=========== Start Custom PDF Export Btn ===========//
            $("#pdf").on("click", function() {
            $(".buttons-pdf").trigger("click");
            });
            //=========== End Custom PDF Export Btn ===========//

            //=========== Start Custom Excel Export Btn ===========//
            $("#excel").on("click", function() {
            $(".buttons-excel").trigger("click");
            });
            //=========== End Custom Excel Export Btn ===========//

            //=========== Start Custom CSV Export Btn ===========//
            $("#csv").on("click", function() {
            $(".buttons-csv").trigger("click");
            });
            //=========== End Custom CSV Export Btn ===========//

            //=========== Start Custom Print Export Btn ===========//
            $("#print").on("click", function() {
            $(".buttons-print").trigger("click");
            });
            //=========== End Custom Print Export Btn ===========//


        });
    </script>




    @yield('javascript_code')

    


</body>
</html>
