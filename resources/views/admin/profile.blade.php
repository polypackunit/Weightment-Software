@extends('admin.main_layout')

@section('page_head')
    <div class="row">
        <div class="col-md-12 table-toolbar-left" style="padding-bottom: 5px;">
            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div id="page-title">
                <h1 class="page-header text-overflow">Profile</h1>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->


        </div>
    </div>
@endsection

@section('page_content')

    <!--===================================================-->
    <div class="panel" style="max-width: 500px; margin: auto">
        <div class="panel-body text-center">
            <img alt="Profile Picture" class="img-lg img-circle mar-btm" src="{{ !empty($user->photo) ? asset('uploads/user_images/'.$user->photo) : asset('uploads/no_image.jpg') }}">
            <p class="text-lg text-semibold mar-no text-main">{{ $user->name }}</p>
            <p class="text-muted">{{ $user->email }}</p>
            <div class="label label-table label-success">{{ $role }}</div>
            <div class="mar-top">
                <button data-target="#change_photo" data-toggle="modal" class="btn btn-mint">Change Photo</button>
                <button data-target="#change_password" data-toggle="modal" class="btn btn-primary">Change Password</button>
            </div>
        </div>
    </div>
    <!--===================================================-->


    
    <!--Start Add Modal-->
    <!--===================================================-->
    <div class="modal fade" id="change_photo" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Upload Photo</h4>
                </div>

                <!--Modal body-->
                <div class="modal-body">
                    <!--===================================================-->
                    <form id="change_photo_form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="hidden" name="user_id" class="form-control" value="{{ $user->id }}">
                                <div class="image-input-container" style="margin: auto">
                                    <input type="file" name="user_image" id="up_image" accept="image/*" style="display: none;">
                                    <label for="up_image" class="image-label">
                                        <img src="{{ !empty($user->photo) ? asset('uploads/user_images/'.$user->photo) : asset('uploads/no_image.jpg') }}" alt="Uploaded Image" class="uploaded-image" id="upload_image">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--===================================================-->
                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button class="btn btn-primary" id="change_photo_btn">Change Photo</button>
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--===================================================-->
    <!--End Add Modal-->

    <!--Start Update Modal-->
    <!--===================================================-->
    <div class="modal fade" id="change_password" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
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
                                    <input type="hidden" name="user_id" class="form-control" value="{{ $user->id }}">
                                    <input type="text" name="old_pass" class="form-control textbox" placeholder=" ">
                                    <label class="control-label textboxlabel">Old Password:</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
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
                    <button class="btn btn-primary" id="change_pass_btn">Change Password</button>
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

        //==========For Update===========//
        $('#up_image').change(function() {
            var file = this.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $('#upload_image').attr('src', event.target.result).show();
                }
                reader.readAsDataURL(file);
            }
        });

        //=========== Update Form Validation ===========//
        $("#change_photo_form").validate({
            rules: {
                    user_image: {
                        required: true,
                    },
                },
                messages: {
                    user_image: {
                        required: "Please Upload Image",
                    },
                },


        });
        //=========== End Update Form Validation ===========//

        //=========== Update Data Ajax Request ===========//
        $("#change_photo_btn").click(function(e){
            e.preventDefault();

            // Check if a file has been selected
            var fileInput = $("#up_image");
            if (fileInput.get(0).files.length === 0) {
                // If no file is selected, show an alert
                Swal.fire({ 
                    title: "No Photo Selected!",
                    text: "Please select a photo before submitting.",
                    icon: "warning", 
                    buttonsStyling: !1,
                    confirmButtonText: "Ok, got it!",
                    customClass: { 
                        confirmButton: "btn fw-bold btn-warning"
                    } 
                });
                return; // Exit the function to prevent the form from being submitted
            }

            if($("#change_photo_form").valid()){
                $(this).prop('disabled', false);
                $(this).text('Updating..');
                //Get Data From Modal Form On Click Save Button
                var formData = new FormData($('#change_photo_form')[0]);

                $.ajax({
                    url: '{{ route("update_profile_photo") }}',
                    method: 'post',
                    data : formData,
                    contentType : false,
                    processData : false,
                    dataType: "json",
                    success:function(response){
                        console.log(response);
                        if (response.status == 200) {
                            Swal.fire({ 
                                    title: "Successfull!",
                                    text: "Photo Updated Successfully!",
                                    icon: "success", 
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { 
                                        confirmButton: "btn fw-bold btn-success"
                                        } 
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    // Reload the page
                                    location.reload();
                                }
                            });
                            
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
                            $('#change_photo_btn').prop('disabled', false);
                            $('#change_photo_btn').text('Update User');
                        }
                    }

                });
            }
        });
        //=========== End Update Data Ajax Request ===========//

        //=========== Update Form Validation ===========//
        $("#change_pass_form").validate({
            rules: {
                    old_pass: {
                        required: true,
                    },
                    new_pass: {
                        required: true,
                    },
                    confirm_pass: {
                        required: true,
                        equalTo: "#new_pass"
                    },
                },
                messages: {
                    old_pass: {
                        required: "Please enter old password",
                    },
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
        $("#change_pass_btn").click(function(e){
            e.preventDefault();
            if($("#change_pass_form").valid()){
                $(this).prop('disabled', false);
                $(this).text('Updating..');
                //Get Data From Modal Form On Click Save Button
                var formData = new FormData($('#change_pass_form')[0]);

                $.ajax({
                    url: '{{ route("change_password") }}',
                    method: 'post',
                    data : formData,
                    contentType : false,
                    processData : false,
                    dataType: "json",
                    success:function(response){
                        console.log(response);
                        if (response.status == 200) {
                            toastr.success('Password Updated Successfully!', 'Successfull!');
                            $('#change_password').find('input').val('');
                            $('#change_pass_btn').prop('disabled', false);
                            $('#change_pass_btn').text('Change Password');
                            $('#change_password').modal('hide');
                            
                        }else if (response.status == "old_pass_wronge") {
                            Swal.fire({ 
                                    title: "Wronge Password!",
                                    text: "Your Old Password is Wronge!",
                                    icon: "error", 
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { 
                                        confirmButton: "btn fw-bold btn-success"
                                        } 
                                    });
                            $('#change_pass_btn').prop('disabled', false);
                            $('#change_pass_btn').text('Change Password');
                            
                        } else {
                            
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
                            $('#change_pass_btn').prop('disabled', false);
                            $('#change_pass_btn').text('Change Password');
                        }
                    }

                });
            }
        });
        //=========== End Update Data Ajax Request ===========//






    });
</script>
@endsection