@extends('admin.main_layout')

@section('page_head')
    <div class="row">
        <div class="col-md-12" style="padding-bottom: 5px; text-align: center;">
            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div id="page-title">
                <h1 class="page-header text-overflow">Poly Pack (Ltd)</h1>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->


            <!--Breadcrumb-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <ol class="breadcrumb">
            <li>Second Weight</li>
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
                    padding-bottom: 10px;">1st Weight</h4>
                    <!--===================================================-->
                    <form id="setting_form">
                        <div class="row">
                            <div class="col-sm-12" style="border: 1px solid rgb(0 0 0 / 15%); padding: 10px 0; border-radius: 10px">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" id="id" name="id" value="{{ $weight->id }}" hidden>
                                        <input type="text" name="vehicle_no" class="form-control textbox" value="{{ $weight->vehicle_no }}">
                                        <label class="control-label textboxlabel">Vehicle No.</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text"   name="cus_name" class="form-control textbox" value="{{ $weight->customer_name }}">
                                        <label class="control-label textboxlabel">Customer Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text"   name="sup_name" class="form-control textbox" value="{{ $weight->supplier_name }}">
                                        <label class="control-label textboxlabel">Supplier Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text"   name="driver_name" class="form-control textbox" value="{{ $weight->driver_name }}">
                                        <label class="control-label textboxlabel">Driver's Name:</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" name="gate_pass_no" class="form-control textbox" value="{{ $weight->gate_pass_no }}">
                                        <label class="control-label textboxlabel">Gate Pass No:</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" name="description" class="form-control textbox"value="{{ $weight->description }}"  >
                                        <label class="control-label textboxlabel">Description:</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" name="ist_weight" class="form-control textbox" value="{{ $weight->ist_weight }}" readonly>
                                        <label class="control-label textboxlabel">1st Weight:</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" id="weight_input" name="second_weight" class="form-control textbox"   placeholder=" "  value="{{ $weight->second_weight }}">
                                        <label class="control-label textboxlabel">Second Weight:</label>
                                    </div>
                                </div>
                                
                                 
                                <div class="col-sm-12 center-column" style="margin-top: 20px">
                                    <button class="btn btn-primary" id="update_setting_btn">Save</button>
                                </div>
                            </div>
                        </div>
                    </form> 
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
 
        setInterval(function() {
        $.ajax({
            url: '/get-weight',
            success: function(data) {
                $('#weight_input').val(data);
            }
        });
        }, 1000);
        

        //=========== Setting Form Validation ===========//
        $("#setting_form").validate({
                rules: {
                    second_weight: {
                        required: true,
                    },
                },
                messages: {
                    second_weight: {
                        required: "Please enter Second Weight",
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
                    url: '{{ route("insert_second_weight") }}',
                    method: 'post',
                    data : formData,
                    contentType : false,
                    processData : false,
                    dataType: "json",
                    success:function(response){
                        console.log(response);
                        if (response.status == 200) {
                            toastr.success('Second Weight Data Inserted Successfully!', 'Successfull!');
                            $('#update_setting_btn').prop('disabled', false);
                            $('#update_setting_btn').text('Saved');
                            window.location.href = "{{ url('all_weight') }}";
                        
                            
                        } else {
                            
                            Swal.fire({ 
                                    title: "Error!",
                                    text: "Insert Setting Error Try Again!",
                                    icon: "error", 
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { 
                                        confirmButton: "btn fw-bold btn-success"
                                        } 
                                    });
                            $('#update_setting_btn').prop('disabled', false);
                            $('#update_setting_btn').text('Save Setting');
                        }
                    }

                });
            }
        });
        //=========== End Update Data Ajax Request ===========//



    });
</script>
@endsection