@extends('admin.main_layout')

@section('page_head')
    <div class="row">
        <div class="col-md-6 table-toolbar-left" style="padding-bottom: 5px;">
            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div id="page-title">
                <h1 class="page-header text-overflow">Assign Permissions To Role</h1>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->


            <!--Breadcrumb-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <ol class="breadcrumb">
            <li>Manage All Roless Permissions ( Add - Update - Delete )</li>
            </ol>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End breadcrumb-->
        </div>
        <div class="col-md-6">
            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            {{-- <div id="counting_panel">
                <div class="page-header counting round-corner-left">Subtotal <br> <b>50005</b></div>
                <div class="page-header counting">Paid <br> <b>300005</b></div>
                <div class="page-header counting">Pending <br> <b>20000</b></div>
                <div class="page-header counting round-corner-right">Total <br> <b>300050</b></div>
            </div> --}}
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->
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
                    <div class="col-sm-6 table-toolbar-left" style="padding-bottom: 2px;">
                        <div class="form-group">
                            <input id="search" type="text" placeholder="Search" class="form-control" autocomplete="off">
                        </div>
                        
                    </div>
                    <div class="col-sm-6 table-toolbar-right" style="padding-bottom: 2px;">
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
                                <li><a href="#" class="toggle-vis" data-column="1">Role Name</a></li>
                                <li><a href="#" class="toggle-vis" data-column="2">Permissions</a></li>
                                <li><a href="#" class="toggle-vis" data-column="3">Buttons</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover custom-table" id="main_table">
                    <thead>
                        <tr>
                            <th width="10px">Id</th>
                            <th width="100px">Role Name</th>
                            <th width="300px">Permissions</th>
                            <th width="100px">Action</th>
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
    

@endsection



@section('javascript_code')

<script>
    $(document).ready(function(){


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
                        var patient_id = $(this).data("did");
                        var element = this;
                        $.ajax({
                            url: '/delete_patient/'+patient_id,
                            type : "GET",
                        success : function(response){
                            if (response.status == 200)
                            {
                                toastr.success('Patient Has Been Deleted Seccussfully!', 'Successfull!');
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

        // Define the default options
        var defaultOptions = {
            ajax: {
                url: '{{ route("get_roles_and_permissions") }}',
                type: 'post',
                data: { csrf: csrf, startdate: "", enddate: "", search: "", type: "" }
            },
            columns: [
                { data: "id" },
                { data: "name" },
                { data: "permissions" },
                { data: "btn" },
                // Add more column definitions as needed
            ],
            columnDefs: [
                { className: 'text-center td-30', targets: [3] },
                // Add more column definitions as needed
            ],
            centeredColumnsOnPrintPdf: [3],
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
        function loadData(search = "", startDate= "", endDate= "", type = "") {
            // Merge the default options with the updated dates
            var options = $.extend(true, {}, defaultOptions, {
                ajax: {
                    data: { csrf: csrf, startdate: startDate, enddate: endDate, search: search, type: type }
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






    });
</script>
@endsection