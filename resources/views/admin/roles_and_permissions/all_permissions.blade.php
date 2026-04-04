@extends('admin.main_layout')

@section('page_head')
    <div class="row">
        <div class="col-md-6 table-toolbar-left" style="padding-bottom: 5px;">
            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div id="page-title">
                <h1 class="page-header text-overflow">Permission</h1>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->


            <!--Breadcrumb-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <ol class="breadcrumb">
            <li>Manage All Permission ( Add - Update - Delete )</li>
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
                        <button id="lounch_add_modal_btn" data-target="#add_modal" data-toggle="modal" class="btn btn-purple"><i class="demo-pli-add"></i> Add Permission</button>
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
                                <li><a href="#" class="toggle-vis" data-column="1">Group Name</a></li>
                                <li><a href="#" class="toggle-vis" data-column="2">Permission Name</a></li>
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
                            <th width="100px">Group Name</th>
                            <th width="100px">Permission Name</th>
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
    
    <!--Start Add Modal-->
    <!--===================================================-->
    <div class="modal fade" id="add_modal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Add New Permission</h4>
                </div>

                <!--Modal body-->
                <div class="modal-body">
                    <!--===================================================-->
                    <form id="add_form">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="permission_name" class="form-control textbox" placeholder=" ">
                                    <label class="control-label textboxlabel" >Permission Name</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div style="display: flex">
                                        <select name="permission_group" id="permission_group" class="demo_select2 form-control" style="width: 100%">
                                            <option></option>
                                        </select>
                                        <button id="add_permission_btn1" data-toggle="tooltip" title="Add Guardian" class="btn btn-success btn-icon" style="margin-left: 5px; padding: 0px 9px"><i class="fa-duotone fa-circle-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--===================================================-->
                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button class="btn btn-primary" id="add_btn">Save Permission</button>
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--===================================================-->
    <!--End Add Modal-->

    <!--Start Update Modal-->
    <!--===================================================-->
    <div class="modal fade" id="update_modal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Update Permission</h4>
                </div>

                <!--Modal body-->
                <div class="modal-body">
                    <!--===================================================-->
                    <form id="update_form">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="hidden" id="permission_id" name="permission_id" class="form-control textbox" placeholder=" ">
                                    <input type="text" id="permission_name" name="permission_name" class="form-control textbox" placeholder=" ">
                                    <label class="control-label textboxlabel" >Permission Name</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <select name="permission_group" id="update_permission_group" class="demo_select2 form-control" style="width: 100%">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--===================================================-->
                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button class="btn btn-primary" id="update_btn">Update Permission</button>
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--===================================================-->
    <!--End Update Modal-->


    <!--Start Add Permission Group Modal-->
    <!--===================================================-->
    <div class="modal fade" id="permission_group_modal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close close_permission_group_modal" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Add New Permission Group</h4>
                </div>

                <!--Modal body-->
                <div class="modal-body pb-0" style="min-height: auto">
                    <!--===================================================-->
                    <form id="add_permission_group_form">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="permission_group_name" class="form-control textbox" placeholder=" ">
                                    <label class="control-label textboxlabel" >Permission Group Name</label>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--===================================================-->
                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button class="btn btn-primary" id="add_permission_group_btn">Save Permission Group</button>
                    <button data-dismiss="modal" class="btn btn-default close_permission_group_modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--===================================================-->
    <!--End Add Permission Group Modal-->






@endsection



@section('javascript_code')

<script>
    $(document).ready(function(){


        $("#lounch_add_modal_btn").click(function(e){
            e.preventDefault();
            get_permission_group();

        });

        //=========== Insert Data Ajax Request ===========//
        $("#add_permission_btn1").click(function(e){
            e.preventDefault();
            $("#add_modal").modal('hide');
            $("#permission_group_modal").modal('show');
            
        });
        //=========== End Insert Data Ajax Request ===========//

        //=========== Insert Data Ajax Request ===========//
        $(".close_permission_group_modal").click(function(e){
            e.preventDefault();
            $("#add_modal").modal('show');
            $("#permission_group_modal").modal('hide');
            get_permission_group();
            
        });
        //=========== End Insert Data Ajax Request ===========//
        
        function get_permission_group()
        {
            
            $.ajax({
                url: '{{ route("get_permission_groups") }}',
                method: 'GET',
                // data: { doctor_id: updateId },
                contentType : false,
                processData : false,
                dataType: "json",
                success: function(data)
                    {

                        // $('#permission_group').empty();
                        
                        $.each(data, function(i, item) {
                            if ($('#permission_group option[value="' + data[i].id + '"]').length == 0) {
                                $('#permission_group').append($('<option>', {
                                    value: data[i].permission_group_name,
                                    text: data[i].permission_group_name,
                                }));
                            }
                        });

                        $.each(data, function(i, item) {
                            if ($('#update_permission_group option[value="' + data[i].id + '"]').length == 0) {
                                $('#update_permission_group').append($('<option>', {
                                    value: data[i].permission_group_name,
                                    text: data[i].permission_group_name,
                                }));
                            }
                        });
                    }

                });
        };

        $("#permission_group").select2({
            placeholder: "Select Permission Group",
            allowClear: true,
            // minimumResultsForSearch: Infinity
            dropdownParent: $('#add_modal')
        });

        $("#update_permission_group").select2({
            placeholder: "Select Permission Group",
            allowClear: true,
            // minimumResultsForSearch: Infinity
            dropdownParent: $('#update_modal')
        });

        //=========== Insert Form Validation ===========//
        $("#add_permission_group_form").validate({
            rules: {
                permission_group_name: {
                    required: true,
                },
            },
            messages: {
                permission_group_name: {
                    required: "Please enter Permission Group Name",
                },
            },

        });
        //=========== End Insert Form Validation ===========//

        //=========== Insert Data Ajax Request ===========//
        $("#add_permission_group_btn").click(function(e){
            e.preventDefault();
            if($("#add_permission_group_form").valid()){
                $(this).prop('disabled', true);
                $(this).text('Saving..');
                //Get Data From Modal Form On Click Save Button
                var formData = new FormData($('#add_permission_group_form')[0]);

                $.ajax({
                    url: '{{ route("insert_permission_group") }}',
                    method: 'post',
                    data : formData,
                    contentType : false,
                    processData : false,
                    dataType: "json",
                    success:function(response){
                        console.log(response);
                        if (response.status == 200) {
                            toastr.success('Permission Saved Successfully!', 'Successfull!');
                            $('#permission_group_modal').find('form')[0].reset();
                            $('#add_permission_group_btn').text('Save Permission');
                            $('#add_permission_group_btn').prop('disabled', false);
                            $('#permission_group_modal').modal('hide');
                            $("#add_modal").modal('show');
                            get_permission_group();
                        } else {
                            
                            Swal.fire({ 
                                    title: "Error!",
                                    text: "Save Permission Error Try Again!",
                                    icon: "error", 
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { 
                                        confirmButton: "btn fw-bold btn-success"
                                        } 
                                    });
                            $('#add_permission_group_btn').text('Save Permission');
                            $('#add_permission_group_btn').prop('disabled', false);
                        }
                    }

                });
            }
        });
        //=========== End Insert Data Ajax Request ===========//

        //=========== Insert Form Validation ===========//
        $("#add_form").validate({
                rules: {
                    permission_name: {
                        required: true,
                    },
                    permission_group: {
                        required: true,
                        minlength: 1
                    },
                },
                messages: {
                    permission_name: {
                        required: "Please enter Permission Name",
                    },
                    permission_group: {
                        required: "Please enter Group Name",
                    },
                },

                //Called when the element is invalid:
                highlight: function(element) {
                    // $(element).css('background', '#ffdddd');
                    // $(element).css('border', '1px solid red');
                    $(element).css('background-image', 'url({{ asset("backend/my_plugins/validate/delete.png")}})');
                    $(element).css('background-repeat', 'no-repeat');
                    $(element).css('background-position', '97%');
                },

                // Called when the element is valid:
                unhighlight: function(element) {
                    // $(element).css('background', '#ffffff');
                    // $(element).css('border', '1px solid green');
                    $(element).css('background-image', 'url({{ asset("backend/my_plugins/validate/apply.png")}})');
                    $(element).css('background-repeat', 'no-repeat');
                    $(element).css('background-position', '97%');
                }

        });
        //=========== End Insert Form Validation ===========//

        //=========== Insert Data Ajax Request ===========//
        $("#add_btn").click(function(e){
            e.preventDefault();
            if($("#add_form").valid()){
                $(this).prop('disabled', true);
                $(this).text('Saving..');
                //Get Data From Modal Form On Click Save Button
                var formData = new FormData($('#add_form')[0]);

                $.ajax({
                    url: '{{ route("insert_permission") }}',
                    method: 'post',
                    data : formData,
                    contentType : false,
                    processData : false,
                    dataType: "json",
                    success:function(response){
                        console.log(response);
                        if (response.status == 200) {
                            toastr.success('Permission Saved Successfully!', 'Successfull!');
                            $('#add_modal').find('form')[0].reset();
                            $('#add_btn').text('Save Permission');
                            $('#add_btn').prop('disabled', false);
                            $('#add_modal').modal('hide');
                            loadData();
                        } else {
                            
                            Swal.fire({ 
                                    title: "Error!",
                                    text: "Save Permission Error Try Again!",
                                    icon: "error", 
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { 
                                        confirmButton: "btn fw-bold btn-success"
                                        } 
                                    });
                            $('#add_btn').text('Save Permission');
                            $('#add_btn').prop('disabled', false);
                        }
                    }

                });
            }
        });
        //=========== End Insert Data Ajax Request ===========//

        //=========== Lounch Update Modal On Click Edit Btn ===========//
        $(document).on("click", '#edit_btn', function(event){
            event.preventDefault();
            $("#update_modal").modal('show');

            var permission_id = $(this).data("eid");
            $.ajax({
                url: 'edit_permission/'+permission_id,
                method: 'GET',
                // data: { doctor_id: updateId },
                contentType : false,
                processData : false,
                dataType: "json",
                success: function(data)
                {
                    console.log(data);
                    $('#permission_id').val(data.permission.id);
                    $('#permission_name').val(data.permission.name);

                    // Set the selected value
                    var option = new Option(data.permission.group_name, data.permission.group_name, true, true);
                    $('#update_permission_group').append(option).trigger('change');

                }
            });
        });
        //=========== End Lounch Update Modal On Click Edit Btn ===========//

        //=========== Update Form Validation ===========//
        $("#update_form").validate({
            rules: {
                    permission_name: {
                        required: true,
                    },
                    permission_group: {
                        required: true,
                        minlength: 1
                    },
                },
                messages: {
                    permission_name: {
                        required: "Please enter Permission Name",
                    },
                    permission_group: {
                        required: "Please enter Group Name",
                    },
                },

                //Called when the element is invalid:
                highlight: function(element) {
                    // $(element).css('background', '#ffdddd');
                    // $(element).css('border', '1px solid red');
                    $(element).css('background-image', 'url({{ asset("backend/my_plugins/validate/delete.png")}})');
                    $(element).css('background-repeat', 'no-repeat');
                    $(element).css('background-position', '97%');
                },

                // Called when the element is valid:
                unhighlight: function(element) {
                    // $(element).css('background', '#ffffff');
                    // $(element).css('border', '1px solid green');
                    $(element).css('background-image', 'url({{ asset("backend/my_plugins/validate/apply.png")}})');
                    $(element).css('background-repeat', 'no-repeat');
                    $(element).css('background-position', '97%');
                }

        });
        //=========== End Update Form Validation ===========//

        //=========== Update Data Ajax Request ===========//
        $("#update_btn").click(function(e){
            e.preventDefault();
            if($("#update_form").valid()){
                $(this).prop('disabled', false);
                $(this).text('Updating..');
                //Get Data From Modal Form On Click Save Button
                var formData = new FormData($('#update_form')[0]);

                $.ajax({
                    url: '{{ route("update_permission") }}',
                    method: 'post',
                    data : formData,
                    contentType : false,
                    processData : false,
                    dataType: "json",
                    success:function(response){
                        console.log(response);
                        if (response.status == 200) {
                            toastr.success('Permission Updated Successfully!', 'Successfull!');
                            $('#update_modal').find('input').val('');
                            $('#update_btn').prop('disabled', false);
                            $('#update_btn').text('Update Permission');
                            $('#update_modal').modal('hide');
                            loadData();
                            
                        }else if (response.status == 500) {
                            Swal.fire({ 
                                    title: "Permission Exist!",
                                    text: "This Permission Already Exist!",
                                    icon: "error", 
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { 
                                        confirmButton: "btn fw-bold btn-success"
                                        } 
                                    });
                            $('#update_btn').prop('disabled', false);
                            $('#update_btn').text('Update Permission');
                            
                        } else {
                            
                            Swal.fire({ 
                                    title: "Error!",
                                    text: "Update Permission Error Try Again!",
                                    icon: "error", 
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { 
                                        confirmButton: "btn fw-bold btn-success"
                                        } 
                                    });
                            $('#update_btn').prop('disabled', false);
                            $('#update_btn').text('Update Permission');
                        }
                    }

                });
            }
        });
        //=========== End Update Data Ajax Request ===========//

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
                        var permission_id = $(this).data("did");
                        var element = this;
                        $.ajax({
                            url: '/delete_permission/'+permission_id,
                            type : "GET",
                        success : function(response){
                            if (response.status == 200)
                            {
                                toastr.success('Permission Has Been Deleted Seccussfully!', 'Successfull!');
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
                url: '{{ route("get_all_permissions") }}',
                type: 'post',
                data: { csrf: csrf, startdate: "", enddate: "", search: "", type: "" }
            },
            columns: [
                { data: "id" },
                { data: "group_name" },
                { data: "name" },
                { data: "btn" },
                // Add more column definitions as needed
            ],
            columnDefs: [
                { className: 'text-center td-30', targets: [3] },
                // Add more column definitions as needed
            ],
            order: [0, 'ASC'],
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