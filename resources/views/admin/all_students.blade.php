@extends('admin.main_layout')

@section('css_code')
    <link rel="stylesheet" href="{{ asset('backend/my_plugins/timepicker/timepicker.min.css') }}">
@endsection


@section('page_head')
    <div class="row">
        <div class="col-md-6 table-toolbar-left" style="padding-bottom: 5px;">
            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div id="page-title">
                <h1 class="page-header text-overflow">All Students</h1>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->


            <!--Breadcrumb-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <ol class="breadcrumb">
            <li>Manage All Students ( Add - Update - Delete )</li>
            </ol>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End breadcrumb-->
        </div>
        <div class="col-md-6">
            
        </div>
    </div>
@endsection

@section('page_content')
    <div class="panel">
        <!-- <div class="panel-heading">
            <h3 class="panel-title">Sample Toolbar</h3>
        </div> -->

        <!--Data Table-->
        <!--===================================================-->
        <div class="panel-body" style="padding-top: 15px; padding-bottom: 10px;">
            <div class="form-inline">
                <div class="row">
                    <div class="col-sm-10 table-toolbar-left" style="padding-bottom: 2px;">
                        <div class="form-group">
                            <input id="search" type="text" placeholder="Search" class="form-control" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <select id="search_by_left" class="demo_select2 form-control" style="width: 200px">
                                <option></option>
                                <option value="all">All Students</option>
                                <option value="0">Current</option>
                                <option value="1">Pass Out</option>
                                <option value="2">Stuck Off</option>
                                <option value="3">leaved</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select id="search_by_type" class="demo_select2 form-control" style="width: 200px">
                                <option></option>
                                <option value="all">All Students</option>
                                <option value="1">SAF Students</option>
                                <option value="0">FGS Students</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <select id="search_by_parent" class="demo_select2 form-control" style="width: 300px">
                                <option></option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-sm-2 table-toolbar-right" style="padding-bottom: 2px;">
                        @if (Auth::user()->can('print_student'))
                        <button id="print" data-toggle="tooltip" title="Print" class="btn btn-info btn-icon"><i class="fa-duotone fa-print"></i></button>
                        <button id="excel" data-toggle="tooltip" title="Export in Excel" class="btn btn-success btn-icon"><i class="fa-duotone fa-file-xls"></i></button>
                        <button id="pdf" data-toggle="tooltip" title="Export in Pdf" class="btn btn-danger btn-icon"><i class="fa-duotone fa-file-pdf"></i></button>
                        <div class="btn-group dropdown">
                            <button data-toggle="dropdown" class="btn btn-mint dropdown-toggle">
                                Columns
                                <span class="caret"></span>
                            </button>
                            <ul role="menu" class="dropdown-menu dropdown-menu-right">
                                <li><a href="#" class="toggle-vis" data-column="0">ID</a></li>
                                <li><a href="#" class="toggle-vis" data-column="1">Image</a></li>
                                <li><a href="#" class="toggle-vis" data-column="2">Student Name</a></li>
                                <li><a href="#" class="toggle-vis" data-column="3">Father Name</a></li>
                                <li><a href="#" class="toggle-vis" data-column="4">Reg. No</a></li>
                                <li><a href="#" class="toggle-vis" data-column="6">Left Type</a></li>
                                <li><a href="#" class="toggle-vis" data-column="6">Left Reason</a></li>
                                <li><a href="#" class="toggle-vis" data-column="7">Left Date</a></li>
                                <li><a href="#" class="toggle-vis" data-column="8">Buttons</a></li>
                            </ul>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover custom-table" id="main_table">
                    <thead>
                        <tr>
                            <th width="10px">Id</th>
                            <th width="50px">Image</th>
                            <th width="100px">Student Name</th>
                            <th width="100px">Father Name</th>
                            <th width="100px">Reg. No</th>
                            <th width="100px">Left Type</th>
                            <th width="100px">Left Reason</th>
                            <th width="100px">Left Date</th>
                            <th width="100px">Group</th>
                            <th width="100px">Address</th>
                            <th width="150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
        <!--===================================================-->
        <!--End Data Table-->
    </div>  
    

    <!--Start View Modal-->
    <!--===================================================-->
    <div class="modal fade" id="view_modal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true" style="padding-top: 10px;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Form</h4>
                </div>

                <!--Modal body-->
                <div class="modal-body p-0" >
                    <div class="panel print_invoice">
					    <div class="panel-body p-0">
                            <div class="invoice-brand" style="white-space:nowrap">
                                <div class="invoice-logo">
                                    <img src="{{ asset('uploads/' . $settings->letter_head) }}" width="100%">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="center">ADMISSION FORM</h2>
                                            <h5 class="center">Class in which admission is sought________</h5>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-bill row" style="padding: 0 20px; margin: 5px 0">
                                <h6>For Office Use Only</h6>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" name="" class="form-control textbox" placeholder=" ">
                                                <label class="control-label textboxlabel">Registration No______</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" name="" class="form-control textbox" placeholder=" ">
                                                <label class="control-label textboxlabel">Date Of Registration ______</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" name="" class="form-control textbox" placeholder=" ">
                                                <label class="control-label textboxlabel">Admitted in Class ______</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Student's Name</label>
                                            <input class="form-control mb" type="text">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="gender" class="form-label">Gender</label>
                                            <select id="gender" name="gender" class="form-control">
                                                <option value="male" selected>Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="center" style="border: 1px solid #7a878e;">
                                            <img src="uploads/no_image.jpg" alt="" height="100px" width="100px">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="date">Date Of Birth:</label>
                                        <input class="form-control mb" type="date" id="day" name="day" size="2">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="date">Cast:</label>
                                        <input class="form-control mb" type="text" id="" name="">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="date">Nationality:</label>
                                        <input class="form-control mb" type="text"  id="" name="">
                                    </div> 
                                    <div class="col-md-12">
                                        <label for="">Father's / Guardian's Name:</label>
                                        <input class="form-control mb" type="text" size="60">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Father's / Guardian's Profession:</label>
                                        <input class="form-control mb" type="text" size="60">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Father's / Guardian's CNIC NO:</label>
                                        <input class="form-control mb" type="text" size="60">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Mobile NO.</label>
                                        <input class="form-control mb" type="text" size="60">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Home (Tel.)</label>
                                        <input class="form-control mb" type="text" size="60">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Present Address:</label>
                                        <input class="form-control mb" type="text" size="60">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Previous School (If Any):</label>
                                        <input class="form-control mb" type="text" size="60">
                                    </div>
                                    <h5 class="center">Name Of Siblings (Already In F.G.S)</h5>
                                    <table border="1" width="97%" id="std_table" style="margin-left: 12px;">
                                        <thead>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Name</th>
                                                <th>Class</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>John Doe</td>
                                                <td>10</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Jane Smith</td>
                                                <td>9</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Sam Brown</td>
                                                <td>8</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <h5 style="margin-left: 10px;">I have read the scool prospectus and agree to abide by the School rules.</h5>
                                    <h5 style="margin-left: 10px;">Attached Documents:</h5>
                                    <ul>
                                        <li>Pervious School Certificate</li>
                                        <li>Birth Certificate / B Form</li>
                                        <li>Copy Of Father's / Guardian's CNIC</li>
                                        <li>2 Photographs (Passport Size)</li>
                                    </ul>
                                    <div class="col-md-12">
                                        <label for="">Reference:</label>
                                        <input class="form-control mb" type="text" size="60">
                                    </div>
                                </div>
                            </div>
					    </div>
					</div>

                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <div class="text-center no-print">
                        <a href="javascript:window.print()" class="btn btn-default"><i class="demo-pli-printer icon-lg"></i> Print</a>
                        <button class="btn btn-primary" data-dismiss="modal" id="close_bill_modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===================================================-->
    <!--End View Modal-->




    <style>
        @media print {
            body * {
                visibility: hidden !important;
            }

            .print_invoice, .print_invoice * {
                visibility: visible !important;
            }

            .print_invoice {
                position: absolute !important;
                left: -83px;
                top: -500px;
                width: 800px;
            }
        }
        .form-control[readonly] {
            background-color: #fff;
            opacity: 1;
        }

        .center{
            text-align: center;
        }
        .mb{
            margin-bottom: 10px;
        }
        #std_table>tbody>tr>td{
            height: 35px;
            text-align: center;
        }
        #std_table>thead>tr>th{
            height: 35px;
            text-align: center;
        }


    </style>




@endsection



@section('javascript_code')

<script>
    $(document).ready(function(){


        $("#search_by_left").select2({
            placeholder: "Search By Left",
            allowClear: true,
            // dropdownParent: $('#update_modal')
        });

        $("#search_by_type").select2({
            placeholder: "Search By Group",
            allowClear: true,
            // dropdownParent: $('#update_modal')
        });
        
        //=========== Get Section On Load ===========//
        $('#search_by_parent').select2({
            placeholder: 'Select Parent',
            allowClear: true,
            minimumInputLength: 1,
            ajax: {
                url: '{{ route("get_guardians") }}',
                method: 'GET',
                dataType: 'json',
                delay: 250,
                data: function (student_name) {
                    return {
                        query: student_name.term,
                    };
                },
                processResults: function (data) {
                    return {
                        results: $.map(data, function(item) {
                            return {
                                id: item.id,
                                text: item.gd_name + " S/O " +item.gd_f_name + " (" + item.address + ")"
                            };
                        })
                    };
                },
                cache: true
            }
        });  
        //=========== End Get Section On Load ===========//


        //=========== Delete Data Ajax Request ===========//
        $(document).on("click", '#delete_btn', function(event){
            event.preventDefault();

            Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Delete',
                    customClass: "sweet-alert"
                }).then((result) => {
                    if (result.value) {
                        var id = $(this).data("did");
                        var element = this;
                        $.ajax({
                            url: 'delete_student/'+id,
                            type : "GET",
                        success : function(response){
                            if (response.status == 200)
                            {
                                toastr.success('Student Has Been Deleted Seccussfully!', 'Successfull!');
                                loadData();
                            }else {
                                Swal.fire({
                                            title: "Somthing Wrong!",
                                            text: "Sonthing Went Wrong Please Try Again!",
                                            type: "error",
                                            customClass: "sweet-alert",
                                        });
                            }
                        }
                        });
                    }

                })


        });
        //=========== End Delete Data Ajax Request ===========//


        //=========== Lounch View Modal On Click View Btn ===========//
        $(document).on("click", '#view_btn', function(event){
            event.preventDefault();
            $("#view_modal").modal('show');

            var id = $(this).data("vid");
            
        });
        //=========== End Lounch View Modal On Click View Btn ===========//

        // Define the default options
        var defaultOptions = {
            ajax: {
                url: '{{ route("get_all_students") }}',
                type: 'post',
                data: { search: "", startdate: "", enddate: "",  type: "", csrf: csrf }
            },
            columns: [
                { data: "id" },
                { data: "image" },
                { data: "student_name" },
                { data: "student_father_name" },
                { data: "registration_no" },
                { data: "is_leaved" },
                { data: "leave_reason" },
                { data: "leave_date" },
                { data: "is_saf" },
                { data: "address" },
                { data: "btn" },
                // Add more column definitions as needed
            ],
            order: [0, 'DESC'],
            columnDefs: [
                { className: 'text-center td-30', targets: [1, 4, 5, 6, 7, 8, 10] },
                // Add more column definitions as needed
            ],
            centeredColumnsOnPrintPdf: [1, 4, 5, 6, 7, 8, 10],
            footerCallback: function (row, data, start, end, display) {
                var api = this.api();
                var intVal = function (i) {
                    return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                };

                var subtotal = api
                    .column(0)
                    .data()
                    .reduce(function (a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                // Update footer
                // $(api.column(0).footer()).html(subtotal);
            }
        };

        // Function to load data with updated dates
        function loadData(search = "", startDate= "", endDate= "", search_by_left = "", search_by_group = "", search_by_parent = "") {
            // Merge the default options with the updated dates
            var options = $.extend(true, {}, defaultOptions, {
                ajax: {
                    data: { search: search, startdate: startDate, enddate: endDate, search_by_left: search_by_left, search_by_group: search_by_group, search_by_parent: search_by_parent, csrf: csrf }
                }
            });

            // Call the load_data function with the updated options
            load_data(options);
        }

        // Example usage: Call the function with updated dates
        loadData();

        //=========== Start Custom Search Box ===========//
        $('#search').keyup(function(){
            loadData($(this).val(), "", "", $('#status').val());
        });
        //=========== End Custom Search Box ===========//

        //=========== Start Custom Status Dropdown ===========//
        $('#search_by_left').on('change', function(){

            var search_by_left = $(this).val();

            if(search_by_left == "all"){

                loadData();
            }else{

                loadData($('#search').val(), '', '', search_by_left);
            }

        });
        //=========== End Custom Status Dropdown ===========//


        //=========== Start Custom Status Dropdown ===========//
        $('#search_by_type').on('change', function(){

            var search_by_type = $(this).val();
            var search_by_left = $('#search_by_left').val();

            if(search_by_type == "all"){

                loadData();
            }else{

                loadData($('#search').val(), '', '', search_by_left, search_by_type);
            }

        });
        //=========== End Custom Status Dropdown ===========//

        //=========== Start Custom Status Dropdown ===========//
        $('#search_by_parent').on('change', function(){

            var search_by_parent = $(this).val();
            var search_by_type = $('#search_by_type').val();
            var search_by_left = $('#search_by_left').val();

            if(search_by_parent == "all"){

                loadData();
            }else{

                loadData($('#search').val(), '', '', search_by_left, search_by_type, search_by_parent);
            }

        });
        //=========== End Custom Status Dropdown ===========//

        $('#image-input').change(function() {
            var file = this.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $('#uploaded-image').attr('src', event.target.result).show();
                }
                reader.readAsDataURL(file);
            }
        });

        $('#u_image-input').change(function() {
            var file = this.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $('#u_uploaded-image').attr('src', event.target.result).show();
                }
                reader.readAsDataURL(file);
            }
        });




    });
</script>
@endsection