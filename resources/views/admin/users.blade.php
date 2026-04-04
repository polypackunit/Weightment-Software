@extends('admin.main_layout')

@section('page_head')
    <div class="row">
        <div class="col-md-6 table-toolbar-left" style="padding-bottom: 5px;">
            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div id="page-title">
                <h1 class="page-header text-overflow">Users</h1>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->


            <!--Breadcrumb-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <ol class="breadcrumb">
            <li>Manage All Users ( Add - Update - Delete )</li>
            </ol>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End breadcrumb-->
        </div>
        <div class="col-md-6">
            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div id="counting_panel">
                <div class="page-header counting round-corner-left">Teachers <br> <b id="total_teacher">0</b></div>
                <div class="page-header counting">Students <br> <b id="total_student">0</b></div>
                <div class="page-header counting">Parents <br> <b id="total_parent">0</b></div>
                <div class="page-header counting round-corner-right">Total <br> <b id="total_user">0</b></div>
            </div>
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
                            <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input id="daterange" type="text" placeholder="Search By Date" class="form-control">
                        </div>
                        <div class="form-group">
                            <select id="search_by_role" class="demo_select2 form-control" style="width: 200px">
                                <option></option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-sm-6 table-toolbar-right" style="padding-bottom: 2px;">
                        @if (Auth::user()->can('create_user'))
                        <button data-target="#add_modal" data-toggle="modal" class="btn btn-purple"><i class="demo-pli-add"></i> Add</button>
                        @endif
                        @if (Auth::user()->can('print_user'))
                        <button id="print" data-toggle="tooltip" title="Print" class="btn btn-info btn-icon"><i class="fa-duotone fa-print"></i></button>
                        <button id="excel" class="btn btn-success btn-icon"><i class="fa-duotone fa-file-xls"></i></button>
                        <button id="pdf" class="btn btn-danger btn-icon"><i class="fa-duotone fa-file-pdf"></i></button>
                        <div class="btn-group dropdown">
                            <button data-toggle="dropdown" class="btn btn-mint dropdown-toggle">
                                Columns
                                <span class="caret"></span>
                            </button>
                            <ul role="menu" class="dropdown-menu dropdown-menu-right">
                                <li><a href="#" class="toggle-vis" data-column="0">Id</a></li>
                                <li><a href="#" class="toggle-vis" data-column="1">Name</a></li>
                                <li><a href="#" class="toggle-vis" data-column="2">Email</a></li>
                                <li><a href="#" class="toggle-vis" data-column="3">Role</a></li>
                                <li><a href="#" class="toggle-vis" data-column="4">Last Login</a></li>
                                <li><a href="#" class="toggle-vis" data-column="5">Location</a></li>
                                <li><a href="#" class="toggle-vis" data-column="6">Status</a></li>
                                <li><a href="#" class="toggle-vis" data-column="7">Buttons</a></li>
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
                            <th width="100px">Name</th>
                            <th width="100px">Email</th>
                            <th width="100px">Role</th>
                            <th width="100px">Last Login</th>
                            <th width="100px">Location</th>
                            <th width="100px">Status</th>
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
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Add New User</h4>
                </div>

                <!--Modal body-->
                <div class="modal-body">
                    <!--===================================================-->
                    <form id="add_form">
                        <div class="row">
                            <div class="col-sm-12 plr-0">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control textbox" placeholder=" ">
                                        <label class="control-label textboxlabel">User Name:</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control textbox" placeholder=" ">
                                        <label class="control-label textboxlabel">User Email:</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="password" class="form-control textbox" placeholder=" ">
                                        <label class="control-label textboxlabel">Password:</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select id="roles" name="role" class="demo_select2 form-control" style="width: 100%">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--===================================================-->
                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button class="btn btn-primary" id="add_btn">Save User</button>
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
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Update User</h4>
                </div>

                <!--Modal body-->
                <div class="modal-body">
                    <!--===================================================-->
                    <form id="update_form">
                        <div class="row">
                            <div class="col-sm-12 plr-0">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="hidden" id="user_id" name="user_id" class="form-control textbox" placeholder=" ">
                                        <input type="text" id="name" name="name" class="form-control textbox" placeholder=" ">
                                        <label class="control-label textboxlabel">User Name:</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control textbox" placeholder=" ">
                                        <label class="control-label textboxlabel">User Email:</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <select id="update_roles" name="role" class="demo_select2 form-control" style="width: 100%">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--===================================================-->
                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button class="btn btn-primary" id="update_btn">Update User</button>
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--===================================================-->
    <!--End Update Modal-->


    <!--Start Update Modal-->
    <!--===================================================-->
    <div class="modal fade" id="change_pass_modal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Change Password</h4>
                </div>

                <!--Modal body-->
                <div class="modal-body">
                    <!--===================================================-->
                    <form id="change_pass_form">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="hidden" id="user_id_pass" name="user_id" class="form-control">
                                    <input type="text" id="new_pass" name="new_pass" class="form-control textbox" placeholder=" ">
                                    <label class="control-label textboxlabel">New Password:</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="confirm_pass" class="form-control textbox" placeholder=" ">
                                    <label class="control-label textboxlabel">Confirm Password:</label>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--===================================================-->
                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button class="btn btn-primary" id="update_pass_btn">Change Password</button>
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--===================================================-->
    <!--End Update Modal-->
    

@endsection



@section('javascript_code')

<script>
    $(document).ready(function(){

        $("#roles").select2({
            placeholder: "Select Role",
            allowClear: true,
            dropdownParent: $('#add_modal')
        });

        $("#update_roles").select2({
            placeholder: "Select Role",
            allowClear: true,
            dropdownParent: $('#update_modal')
        });
        
        $("#search_by_role").select2({
            placeholder: "Search By Role",
            allowClear: true,
        });


        //=========== Insert Form Validation ===========//
        $("#add_form").validate({
                rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    role: {
                        required: true,
                        minlength: 1
                    },
                    password: {
                        required: true
                    },
                },
                messages: {
                    name: {
                        required: "Please enter User Name",
                    },
                    email: {
                        required: "Please enter User Email",
                    },
                    role: {
                        required: "Please Select Role",
                    },
                    password: {
                        required: "Please Enter Password",
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
                    url: '{{ route("insert_user") }}',
                    method: 'post',
                    data : formData,
                    contentType : false,
                    processData : false,
                    dataType: "json",
                    success:function(response){
                        console.log(response);
                        if (response.status == 200) {
                            toastr.success('User Created Successfully!', 'Successfull!');
                            $('#add_modal').find('form')[0].reset();
                            $('#add_btn').text('Save User');
                            $('#add_btn').prop('disabled', false);
                            $('#add_modal').modal('hide');
                            loadData();
                        }else if (response.status == "userExist") {
                            Swal.fire({ 
                                    title: "User Exist!",
                                    text: "This User Already Exist!",
                                    icon: "error", 
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { 
                                        confirmButton: "btn fw-bold btn-success"
                                        } 
                                    });
                            $('#add_btn').text('Save User');
                            $('#add_btn').prop('disabled', false);
                            
                        } else {
                            
                            Swal.fire({ 
                                    title: "Error!",
                                    text: "Save User Error Try Again!",
                                    icon: "error", 
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { 
                                        confirmButton: "btn fw-bold btn-success"
                                        } 
                                    });
                            $('#add_btn').text('Save User');
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

            var user_id = $(this).data("eid");
            $.ajax({
                url: '/edit_user/'+user_id,
                method: 'GET',
                // data: { doctor_id: updateId },
                contentType : false,
                processData : false,
                dataType: "json",
                success: function(data)
                {
                    console.log(data);
                    $('#user_id').val(data.user_data.id);
                    $('#name').val(data.user_data.name);
                    $('#email').val(data.user_data.email);
                    $('#update_roles').val(data.user_role).trigger('change');

                }
            });
        });
        //=========== End Lounch Update Modal On Click Edit Btn ===========//

        //=========== Update Form Validation ===========//
        $("#update_form").validate({
            rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    role: {
                        required: true,
                        minlength: 1
                    },
                },
                messages: {
                    name: {
                        required: "Please enter User Name",
                    },
                    email: {
                        required: "Please enter User Email",
                    },
                    role: {
                        required: "Please Select Role",
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
                    url: '{{ route("update_user") }}',
                    method: 'post',
                    data : formData,
                    contentType : false,
                    processData : false,
                    dataType: "json",
                    success:function(response){
                        console.log(response);
                        if (response.status == 200) {
                            toastr.success('User Updated Successfully!', 'Successfull!');
                            $('#update_modal').find('input').val('');
                            $('#update_btn').prop('disabled', false);
                            $('#update_btn').text('Update User');
                            $('#update_modal').modal('hide');
                            loadData();
                            
                        }else if (response.status == "userExist") {
                            Swal.fire({ 
                                    title: "User Exist!",
                                    text: "This User Already Exist!",
                                    icon: "error", 
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { 
                                        confirmButton: "btn fw-bold btn-success"
                                        } 
                                    });
                            $('#update_btn').prop('disabled', false);
                            $('#update_btn').text('Update User');
                            
                        } else {
                            
                            Swal.fire({ 
                                    title: "Error!",
                                    text: "Update User Error Try Again!",
                                    icon: "error", 
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { 
                                        confirmButton: "btn fw-bold btn-success"
                                        } 
                                    });
                            $('#update_btn').prop('disabled', false);
                            $('#update_btn').text('Update User');
                        }
                    }

                });
            }
        });
        //=========== End Update Data Ajax Request ===========//


        //=========== Lounch Update Modal On Click Edit Btn ===========//
        $(document).on("click", '#change_pass_btn', function(event){
            event.preventDefault();
            $("#change_pass_modal").modal('show');

            var user_id = $(this).data("cpass");

            $('#user_id_pass').val(user_id);
        });
        //=========== End Lounch Update Modal On Click Edit Btn ===========//


        //=========== Update Form Validation ===========//
        $("#change_pass_form").validate({
            rules: {
                    new_pass: {
                        required: true,
                    },
                    confirm_pass: {
                        required: true,
                        equalTo: "#new_pass"
                    },
                },
                messages: {
                    new_pass: {
                        required: "Please enter new password",
                    },
                    confirm_pass: {
                        required: "Please enter confirm password",
                        equalTo: "New password and confirm password not matched",
                    },
                },

        });
        //=========== End Update Form Validation ===========//

        //=========== Update Data Ajax Request ===========//
        $("#update_pass_btn").click(function(e){
            e.preventDefault();
            if($("#change_pass_form").valid()){
                $(this).prop('disabled', false);
                $(this).text('Updating..');
                //Get Data From Modal Form On Click Save Button
                var formData = new FormData($('#change_pass_form')[0]);

                $.ajax({
                    url: '{{ route("change_password_from_admin") }}',
                    method: 'post',
                    data : formData,
                    contentType : false,
                    processData : false,
                    dataType: "json",
                    success:function(response){
                        console.log(response);
                        if (response.status == 200) {
                            toastr.success('Password Updated Successfully!', 'Successfull!');
                            $('#change_pass_modal').find('input').val('');
                            $('#update_pass_btn').prop('disabled', false);
                            $('#update_pass_btn').text('Change Password');
                            $('#change_pass_modal').modal('hide');
                            
                        }else {
                            
                            Swal.fire({ 
                                    title: "Error!",
                                    text: "Update Password Error Try Again!",
                                    icon: "error", 
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { 
                                        confirmButton: "btn fw-bold btn-success"
                                        } 
                                    });
                            $('#update_pass_btn').prop('disabled', false);
                            $('#update_pass_btn').text('Change Password');
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
                        var user_id = $(this).data("did");
                        var element = this;
                        $.ajax({
                            url: '/delete_user/'+user_id,
                            type : "GET",
                        success : function(response){
                            if (response.status == 200)
                            {
                                toastr.success('User Has Been Deleted Seccussfully!', 'Successfull!');
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


        //=========== Change Status With Toogle On/Off ===========//
        $(document).on("change", '#statusToggleSwitch', function(event) {
            
            var status = this.checked ? 1 : 0;
            var user_id = $(this).data("status_id");

            $.ajax({
                    url: '{{ route("update_user_status") }}',
                    method: 'post',
                    data : { status: status, user_id: user_id },
                    dataType: "json",
                    success:function(response){
                        console.log(response);
                        if (response.status == 200) {
                            toastr.success('User Status Updated Successfully!', 'Successfull!');
                        
                        }else {
                            
                            Swal.fire({ 
                                    title: "Error!",
                                    text: "Update User Error Try Again!",
                                    icon: "error", 
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { 
                                        confirmButton: "btn fw-bold btn-success"
                                        } 
                                    });
                        }
                    }

                });
            
        });
        //=========== End Change Status With Toogle On/Off ===========//


        get_roles();
        //=========== Get Doctors On Load ===========//
        function get_roles()
        {
            
            $.ajax({
                url: '/get_roles',
                method: 'GET',
                // data: { doctor_id: updateId },
                contentType : false,
                processData : false,
                dataType: "json",
                success: function(data)
                    {
                        console.log(data);
                        $.each(data, function(i, item) {
                            if ($('#roles option[value="' + data[i].id + '"]').length == 0) {
                                $('#roles').append($('<option>', {
                                    value: data[i].name,
                                    text: data[i].name,
                                }));
                            }
                        });

                        $.each(data, function(i, item) {
                            if ($('#update_roles option[value="' + data[i].id + '"]').length == 0) {
                                $('#update_roles').append($('<option>', {
                                    value: data[i].name,
                                    text: data[i].name,
                                }));
                            }
                        });

                        $.each(data, function(i, item) {
                            if ($('#search_by_role option[value="' + data[i].id + '"]').length == 0) {
                                $('#search_by_role').append($('<option>', {
                                    value: data[i].id,
                                    text: data[i].name,
                                }));
                            }
                        });
                    }

                });
        };    
        //=========== End Get Doctors On Load ===========//






        // Define the default options
        var defaultOptions = {
            ajax: {
                url: '{{ route("get_all_users") }}',
                type: 'post',
                data: { csrf: csrf, startdate: "", enddate: "", search: "", type: "" }
            },
            columns: [
                { data: "id" },
                { data: "name" },
                { data: "email" },
                { data: "role" },
                { data: "last_login" },
                { data: "last_login_location" },
                { data: "status" },
                { data: "btn" },
                // Add more column definitions as needed
            ],
            order: [0, 'DESC'],
            columnDefs: [
                { className: 'text-center td-30', targets: [3, 4, 5, 6, 7] },
                // Add more column definitions as needed
            ],
            centeredColumnsOnPrintPdf: [3, 4, 5, 6, 7],
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

                var total = api.ajax.json().roleTotals;
                var recordsTotal = api.ajax.json().recordsTotal;
                $('#total_teacher').text(total.Teacher);
                $('#total_student').text(total.Student);
                $('#total_parent').text(total.Parent);
                $('#total_user').text(recordsTotal);
            }
        };

        // Function to load data with updated dates
        function loadData(search = "", startDate= "", endDate= "", type = "", search_by_role = "") {
            // Merge the default options with the updated dates
            var options = $.extend(true, {}, defaultOptions, {
                ajax: {
                    data: { csrf: csrf, startdate: startDate, enddate: endDate, search: search, type: type, search_by_role: search_by_role }
                }
            });

            // Call the load_data function with the updated options
            load_data(options);
        }

        
        loadData();

        //=========== Start Custom Search Box ===========//
        $('#search').keyup(function(){
            loadData($(this).val(), "", "", $('#status').val());
        });
        //=========== End Custom Search Box ===========//

        $("#status").select2({
            placeholder: "Filter By Status",
            allowClear: true,
            minimumResultsForSearch: Infinity
        });


        //=========== Start Custom Status Dropdown ===========//
        $('#status').on('change', function(){

            var type = $(this).val();

            if(type == "all"){

                loadData($('#search').val());
            }else{

                loadData($('#search').val(), "", "", type);
            }
            
        });
        //=========== End Custom Status Dropdown ===========//


        //=========== Start Custom Status Dropdown ===========//
        $('#search_by_role').on('change', function(){

        var search_by_role = $(this).val();

        if(search_by_role == "all"){

            loadData($('#search').val());
        }else{

            loadData($('#search').val(), "", "", "", search_by_role);
        }

        });
        //=========== End Custom Status Dropdown ===========//


    search_by_date("#search_by_date");
    //=========== Start Search By Date ===========//
    function search_by_date(datepickerid){
    	//=========== Start Date Range Picker ===========//
	    var start = moment().subtract(29, 'days');
	    var end = moment();

	    function cb(start, end) {
	        $(datepickerid+' span').html(start.format('DD-MM-YYYY') + ' - ' + end.format('DD-MM-YYYY'));
	    }

	    $(datepickerid).daterangepicker({
	    	autoUpdateInput: false,
	        format: 'DD-MM-YYYY',
	        startDate: start,
	        endDate: end,
	        showCustomRangeLabel: false,
	        alwaysShowCalendars: true,
	        ranges: {
	           'Today': [moment(), moment()],
	           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
	           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
	           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
	           'This Month': [moment().startOf('month'), moment().endOf('month')],
	           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
	        }
	    }, cb);

	    cb(start, end);
	    //=========== End Date Range Picker ===========//



	    //=========== Start Date Range On Apply ===========//
	    //Filter the datatable on the datepicker apply event
		$(datepickerid).on('apply.daterangepicker', function(ev, picker)
		{
		    startdate=picker.startDate.format('DD-MM-YYYY');
		    enddate=picker.endDate.format('DD-MM-YYYY');
		    $(datepickerid).val(startdate + ' To ' + enddate);
		 
		    // alert(startdate+" "+enddate);

		    // $('#main_table').DataTable().destroy();

		    // load_users("#main_table", startdate+" 00:00:00", enddate+" 23:59:59", company_name, company_s_name);
		    loadData($('#search').val(), startdate, enddate);

		 
		});

		//Click on cancel Button
		$(datepickerid).on('cancel.daterangepicker', function(ev, picker) {
		  //do something, like clearing an input
		  $(datepickerid).val('');
		});
		//=========== End Date Range On Apply ===========//

		//Click on Refresh Data
		$('#refresh_data').on('click', function() {
		  //do something, like clearing an input
		  $(datepickerid).val('');
		  loadData("", today_Date, today_Date );
		});
		//=========== End Date Range On Apply ===========//
    }
    //=========== End Search By Date ===========//




    });
</script>
@endsection