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
            <h4 class="modal-title"style="margin-bottom: 20px">Assign Permissions To Role</h4>
            <!--===================================================-->
            <form id="add_form">
                <div class="row">
                    <div class="col-sm-1">
                        <div class="form-group">
                            <label class="control-label" style="margin-top: 5px" >Select Role: </label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <select class="selectpicker" name="role_id" id="role" style="width: 100%">
                                <option value="" selected disabled>Select Role</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="switch">
                                <input type="checkbox" id="select_all">
                                <span class="slider round"> </span>
                            </label>
                            <label class="control-label" ><strong>Select All:</strong> </label>
                        </div>
                    </div>
                </div>
                @foreach ($permissions_group as $group)

                <div class="row">  
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="switch">
                                <input type="checkbox" class="group_name group-{{ $group->group_name}}">
                                <span class="slider round"> </span>
                            </label>
                            <label class="control-label" ><strong>{{ $group->group_name}}</strong> </label>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                @php
                 $permissions = App\Models\Functions::getPermissionsByGroupName($group->group_name);   
                @endphp
                @foreach ($permissions as $permission)
                    
                
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label class="switch">
                                        <input type="checkbox" class="group-{{ $group->group_name}}" id="permission_box{{ $permission->id}}" name="permission_id[]" value="{{ $permission->id}}">
                                        <span class="slider round"> </span>
                                    </label>
                                    <label class="control-label" >{{ $permission->name}}</label>
                                </div>
                            </div>
                @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
                <button class="btn btn-primary" id="add_btn">Save Role Permissions</button>
            </form>
            <!--===================================================-->
        </div>

    </div>  
    

@endsection



@section('javascript_code')

<script>
    $(document).ready(function(){

        $("#role").select2({
            placeholder: "Select Role",
            allowClear: true,
            // minimumResultsForSearch: Infinity
            // dropdownParent: $('#add_modal')
        });

        $('#select_all').click(function(){
            if($(this).is(':checked')){
                $('input[type = checkbox]').prop('checked', true);
            }else{
                $('input[type = checkbox]').prop('checked', false);
            }
        });

        $('.group_name').on('click', function() {
            // Get the class of the clicked checkbox
            let checkboxClass = $(this).attr('class').split(' ').filter(function(cls) {
                return cls.startsWith('group-');
            })[0];


            // Check or uncheck all checkboxes with the same class
            if (checkboxClass) {
                let isChecked = $(this).prop('checked');
                $('.' + checkboxClass).prop('checked', isChecked);
            }
        });

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
                            if ($('#role option[value="' + data[i].id + '"]').length == 0) {
                                $('#role').append($('<option>', {
                                    value: data[i].id,
                                    text: data[i].name,
                                }));
                            }
                        });
                    }

                });
        };    
        //=========== End Get Doctors On Load ===========//


        //=========== Insert Form Validation ===========//
        $("#add_form").validate({
                rules: {
                    role: {
                        required: true,
                        minlength: 1
                    },
                    permission_id: {
                        required: true,
                        minlength: 1
                    },
                },
                messages: {
                    role: {
                        required: "Please Select Role Name",
                    },
                    permission_id: {
                        required: "Please Select Atleast 1 Permission",
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
                    url: '{{ route("insert_role_permission") }}',
                    method: 'post',
                    data : formData,
                    contentType : false,
                    processData : false,
                    dataType: "json",
                    success:function(response){
                        console.log(response);
                        if (response.status == 200) {
                            toastr.success('Role Permissions Data Saved Successfully!', 'Successfull!');
                            $('#add_btn').text('Save Role Permissions');
                            $('#add_btn').prop('disabled', false);
                            loadData();
                        } else {
                            
                            Swal.fire({ 
                                    title: "Error!",
                                    text: "Save Role Permissions Error Try Again!",
                                    icon: "error", 
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { 
                                        confirmButton: "btn fw-bold btn-success"
                                        } 
                                    });
                            $('#add_btn').text('Save Role Permissions');
                            $('#add_btn').prop('disabled', false);
                        }
                    }

                });
            }
        });
        //=========== End Insert Data Ajax Request ===========//




    });
</script>
@endsection