@extends('admin.main_layout')

@section('page_head')
    <div class="row">
        <div class="col-md-12" style="padding-bottom: 5px; text-align: center;">
            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div id="page-title">
                <h1 class="page-header text-overflow">Settings</h1>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->


            <!--Breadcrumb-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <ol class="breadcrumb">
            <li>Manage All Settings</li>
            </ol>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End breadcrumb-->
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
            <div class="row">
                <div class="col-md-12">
                    <h4 class="modal-title" style="padding-left: 8px;
                    padding-bottom: 10px;">Main Setting</h4>
                    <!--===================================================-->
                    <form id="setting_form">
                        <div class="row">
                            <div class="col-sm-12" style="border: 1px solid rgb(0 0 0 / 15%); padding: 10px 0; border-radius: 10px">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" id="school_name" name="school_name" class="form-control textbox" placeholder=" " value="{{ $settings->school_name }}">
                                        <label class="control-label textboxlabel" >School Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" id="camp_name" name="camp_name" class="form-control textbox" placeholder=" " value="{{ $settings->camp_name }}">
                                        <label class="control-label textboxlabel">Campus</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" id="phone" name="phone" class="form-control textbox" placeholder=" " value="{{ $settings->phone }}">
                                        <label class="control-label textboxlabel">Phone No:</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" id="email" name="email" class="form-control textbox" placeholder=" " value="{{ $settings->email }}">
                                        <label class="control-label textboxlabel">Email:</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" id="website" name="website" class="form-control textbox" placeholder=" " value="{{ $settings->website }}">
                                        <label class="control-label textboxlabel">Website:</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" id="prefix" name="prefix" class="form-control textbox" placeholder=" " value="{{ $settings->prefix }}">
                                        <label class="control-label textboxlabel">Registration Prefix:</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" id="address" name="address" class="form-control textbox" placeholder=" " value="{{ $settings->address }}">
                                        <label class="control-label textboxlabel">Address:</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 center-column">
                                    <label for="">Main Logo (220X60)</label>
                                    <div class="image-input-container" style="margin-bottom: 1px">
                                        <input type="file" name="logo" id="logo" accept="image/*" style="display: none;">
                                        <label for="logo" class="image-label">
                                            <img src="{{ $settings->logo ? asset('uploads/'.$settings->logo) : asset('uploads/no_image.jpg') }}" class="uploaded-image" id="logo-photo">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6 center-column">
                                    <label for="">Favicon (512x512)</label>
                                    <div class="image-input-container" style="margin-bottom: 1px">
                                        <input type="file" name="favicon" id="favicon" accept="image/*" style="display: none;">
                                        <label for="favicon" class="image-label">
                                            <img src="{{ $settings->logo ? asset('uploads/'.$settings->logo) : asset('uploads/no_image.jpg') }}" class="uploaded-image" id="favicon-photo">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12 center-column" style="margin-top: 20px">
                                    <button class="btn btn-primary" id="update_setting_btn">Update Setting</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--===================================================-->
                </div>
                <div class="col-md-12">
                    <h4 class="modal-title" style="padding: 10px 10px 10px 8px;">Bill Setting</h4>
                    <!--===================================================-->
                    <form id="bill_form">
                        <div class="row">
                            <div class="col-sm-12" style="border: 1px solid rgb(0 0 0 / 15%); padding: 10px 0; border-radius: 10px;">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea id="terms" name="terms" class="form-control textbox" placeholder=" " cols="30" rows="3">{{ $settings->terms }}</textarea>
                                        <label class="control-label textboxlabel">Term & Conditions:</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" id="bill_footer" name="bill_footer" class="form-control textbox" placeholder=" " value="{{ $settings->footer_text }}">
                                        <label class="control-label textboxlabel" >Bill Footer</label>
                                    </div>
                                </div>
                                
                                
                                <div class="col-sm-3 center-column">
                                    <label for="">Bill Logo</label>
                                    <div class="image-input-container" style="margin-bottom: 1px">
                                        <input type="file" name="bill_logo" id="bill_logo" accept="image/*" style="display: none;">
                                        <label for="bill_logo" class="image-label">
                                            <img src="{{ $settings->bill_logo ? asset('uploads/'.$settings->bill_logo) : asset('uploads/no_image.jpg') }}" class="uploaded-image" id="bill_logo-photo">
                                        </label>
                                    </div>
                                </div>
                                {{-- <div class="col-sm-3 center-column">
                                    <label for="">Bill Header Image</label>
                                    <div class="image-input-container" style="margin-bottom: 1px">
                                        <input type="file" name="header_image" id="header_image" accept="image/*" style="display: none;">
                                        <label for="header_image" class="image-label">
                                            <img src="uploads/no_image.jpg" class="uploaded-image" id="header_image-photo">
                                        </label>
                                        <button type="button" class="btn btn-danger remove_btn" value="remove_header_image">×</button>
                                    </div>
                                </div>
                                <div class="col-sm-3 center-column">
                                    <label for="">Bill Footer Image</label>
                                    <div class="image-input-container" style="margin-bottom: 1px">
                                        <input type="file" name="footer_image" id="footer_image" accept="image/*" style="display: none;">
                                        <label for="footer_image" class="image-label">
                                            <img src="uploads/no_image.jpg" class="uploaded-image" id="footer_image-photo">
                                        </label>
                                        <button type="button" class="btn btn-danger remove_btn" value="remove_footer_image">×</button>
                                    </div>
                                </div> --}}
                                <div class="col-sm-3 center-column">
                                    <label for="">Letterhead</label>
                                    <div class="image-input-container" style="margin-bottom: 1px">
                                        <input type="file" name="letter_head" id="letter_head" accept="image/*" style="display: none;">
                                        <label for="letter_head" class="image-label">
                                            <img src="{{ $settings->letter_head ? asset('uploads/'.$settings->letter_head) : asset('uploads/no_image.jpg') }}" class="uploaded-image" id="letterhead-photo">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12 center-column" style="margin-top: 20px">
                                    <button class="btn btn-primary" id="update_bill_btn">Update Bill Setting</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--===================================================-->
                </div>
            </div>
        </div>
        <!--===================================================-->
        <!--End Data Table-->
    </div>  



@endsection



@section('javascript_code')

<script>
    $(document).ready(function(){
 
        $('#logo').change(function() {
            var file = this.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $('#logo-photo').attr('src', event.target.result).show();
                }
                reader.readAsDataURL(file);
            }
        });

        $('#favicon').change(function() {
            var image_file = this.files[0];
            if (image_file) {
                var file_reader = new FileReader();
                file_reader.onload = function(event) {
                    $('#favicon-photo').attr('src', event.target.result).show();
                }
                file_reader.readAsDataURL(image_file);
            }
        });

        $('#bill_logo').change(function() {
            var image_file = this.files[0];
            if (image_file) {
                var file_reader = new FileReader();
                file_reader.onload = function(event) {
                    $('#bill_logo-photo').attr('src', event.target.result).show();
                }
                file_reader.readAsDataURL(image_file);
            }
        });

        $('#header_image').change(function() {
            var image_file = this.files[0];
            if (image_file) {
                var file_reader = new FileReader();
                file_reader.onload = function(event) {
                    $('#header_image-photo').attr('src', event.target.result).show();
                }
                file_reader.readAsDataURL(image_file);
            }
        });

        $('#footer_image').change(function() {
            var image_file = this.files[0];
            if (image_file) {
                var file_reader = new FileReader();
                file_reader.onload = function(event) {
                    $('#footer_image-photo').attr('src', event.target.result).show();
                }
                file_reader.readAsDataURL(image_file);
            }
        });

        $('#letter_head').change(function() {
            var image_file = this.files[0];
            if (image_file) {
                var file_reader = new FileReader();
                file_reader.onload = function(event) {
                    $('#letterhead-photo').attr('src', event.target.result).show();
                }
                file_reader.readAsDataURL(image_file);
            }
        });


        //=========== Setting Form Validation ===========//
        $("#setting_form").validate({
                rules: {
                    school_name: {
                        required: true,
                    },
                },
                messages: {
                    school_name: {
                        required: "Please enter Title",
                    },
                },

        });
        //=========== End Setting Form Validation ===========//

        //=========== Update Data Ajax Request ===========//
        $("#update_setting_btn").click(function(e){
            e.preventDefault();
            if($("#setting_form").valid()){
                $(this).prop('disabled', false);
                $(this).text('Updating..');
                //Get Data From Modal Form On Click Save Button
                var formData = new FormData($('#setting_form')[0]);

                $.ajax({
                    url: '{{ route("update_setting") }}',
                    method: 'post',
                    data : formData,
                    contentType : false,
                    processData : false,
                    dataType: "json",
                    success:function(response){
                        console.log(response);
                        if (response.status == 200) {
                            toastr.success('Setting Data Updated Successfully!', 'Successfull!');
                            $('#update_setting_btn').prop('disabled', false);
                            $('#update_setting_btn').text('Update Setting');
                            
                        } else {
                            
                            Swal.fire({ 
                                    title: "Error!",
                                    text: "Update Setting Error Try Again!",
                                    icon: "error", 
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { 
                                        confirmButton: "btn fw-bold btn-success"
                                        } 
                                    });
                            $('#update_setting_btn').prop('disabled', false);
                            $('#update_setting_btn').text('Update Setting');
                        }
                    }

                });
            }
        });
        //=========== End Update Data Ajax Request ===========//


        //=========== Update Data Ajax Request ===========//
        $("#update_bill_btn").click(function(e){
            e.preventDefault();
            if($("#bill_form").valid()){
                $(this).prop('disabled', false);
                $(this).text('Updating..');
                //Get Data From Modal Form On Click Save Button
                var formData = new FormData($('#bill_form')[0]);

                $.ajax({
                    url: '{{ route("update_bill") }}',
                    method: 'post',
                    data : formData,
                    contentType : false,
                    processData : false,
                    dataType: "json",
                    success:function(response){
                        console.log(response);
                        if (response.status == 200) {
                            toastr.success('Bill Data Updated Successfully!', 'Successfull!');
                            $('#update_bill_btn').prop('disabled', false);
                            $('#update_bill_btn').text('Update Setting');
                            
                        } else {
                            
                            Swal.fire({ 
                                    title: "Error!",
                                    text: "Update Bill Error Try Again!",
                                    icon: "error", 
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { 
                                        confirmButton: "btn fw-bold btn-success"
                                        } 
                                    });
                            $('#update_bill_btn').prop('disabled', false);
                            $('#update_bill_btn').text('Update Setting');
                        }
                    }

                });
            }
        });
        //=========== End Update Data Ajax Request ===========//

        //=========== Remove Image Btn ===========//
        $(document).on("click", '.remove_btn', function(event){
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
                        var delete_val = $(this).val();
                        $.ajax({
                            url: '/delete_setting/'+ delete_val,
                            method: 'GET',
                            // data: { doctor_id: updateId },
                            contentType : false,
                            processData : false,
                            dataType: "json",
                            success: function(data)
                            {
                                console.log(data);
                                toastr.success('Bill Image Removed Successfully!', 'Successfull!');
                                load_setting();
                                
                            }
                        });
                    }

                })

        });
        //=========== End Lounch Remove Image Btn ===========//



    });
</script>
@endsection