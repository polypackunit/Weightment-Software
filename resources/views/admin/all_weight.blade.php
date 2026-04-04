@extends('admin.main_layout')

@section('page_head')
    <div class="row">
        <div class="col-md-6 table-toolbar-left" style="padding-bottom: 5px;">
            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div id="page-title">
                <h1 class="page-header text-overflow">Weightment</h1>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->


            <!--Breadcrumb-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <ol class="breadcrumb">
            <li>Manage All Weight </li>
            </ol>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End breadcrumb-->
        </div>
        <div class="col-md-6">
            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            {{-- <div id="counting_panel">
                <div class="page-header counting round-corner-left">Teachers <br> <b id="total_teacher">0</b></div>
                <div class="page-header counting">Students <br> <b id="total_student">0</b></div>
                <div class="page-header counting">Parents <br> <b id="total_parent">0</b></div>
                <div class="page-header counting round-corner-right">Total <br> <b id="total_user">0</b></div>
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
                        <div class="form-group">
                            <input id="search_by_date" type="text" placeholder="Search By Date" class="form-control" autocomplete="off" style="width: 200px">
                            <button id="refresh_data" data-toggle="tooltip" title="Reload Data" class="btn btn-success"><i class="fa-duotone fa-rotate"></i></button>
                        </div>
                        {{-- <div class="form-group">
                            <select id="search_by_role" class="demo_select2 form-control" style="width: 200px">
                                <option></option>
                            </select>
                        </div> --}}
                        
                    </div>
                    <div class="col-sm-6 table-toolbar-right" style="padding-bottom: 2px;">
                        @if (Auth::user()->can('create_user'))
                        {{-- <button data-target="#add_modal" data-toggle="modal" class="btn btn-purple"><i class="demo-pli-add"></i> Add</button> --}}
                        <a href="{{ route('ist_weight') }}"><button  class="btn btn-purple">
                            <i class="demo-pli-add"></i> Ist Weight</button></a>
                            
                        
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
                                <li><a href="#" class="toggle-vis" data-column="0">Serial No.</a></li>
                                <li><a href="#" class="toggle-vis" data-column="1">Vehicle Name</a></li>
                                <li><a href="#" class="toggle-vis" data-column="2">Customer Name</a></li>
                                <li><a href="#" class="toggle-vis" data-column="3">Supplier Name</a></li>
                                <li><a href="#" class="toggle-vis" data-column="4">Driver Name</a></li>
                                <li><a href="#" class="toggle-vis" data-column="5">Gate Pass No</a></li>
                                <li><a href="#" class="toggle-vis" data-column="6">Description</a></li>
                                <li><a href="#" class="toggle-vis" data-column="7">1st Weight</a></li>
                                <li><a href="#" class="toggle-vis" data-column="8">2nd Weight</a></li>
                                <li><a href="#" class="toggle-vis" data-column="9">Net Weight</a></li>
                                <li><a href="#" class="toggle-vis" data-column="10">Buttons</a></li>
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
                            <th width="10px">Serial No.</th>
                            <th width="100px">Vehicle Name</th>
                            <th width="100px">Customer Name</th>
                            <th width="100px">Supplier Name</th>
                            <th width="100px">Driver Name</th>
                            <th width="100px">Gate Pass No</th>
                            <th width="100px">Description</th>
                            <th width="100px">1st Weight</th>
                            <th width="100px">2nd Weight</th>
                            <th width="100px">Net Weight</th>
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
                left: -30px;
                top: -500px;
            }
        }
    </style>

    <!--Start View Modal-->
    <!--===================================================-->
    <div class="modal fade" id="view_modal" tabindex="-1"  >
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-lg">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal body-->
                <div class="modal-body p-0">
                    <!--begin::Scroll-->

                    <div class="panel print_invoice">
                            @php
                                $setting = App\Models\Setting::find(1);
                            @endphp
					    <div class="panel-body">
					        <div class="invoice-masthead">
					            <div class="invoice-text">
                                    <center>
					                <h4 class="text-uppercase mar-no text-primary">Poly Pack (PVT) LTD # 1</h4>
                                    {{-- <span class=" text-bold text-center">{{ $setting->school_name }}</span> --}}
                                    <span class=" text-center">{{ $setting->camp_name }}</span><br>
                                    <span  class=" text-center">{{ $setting->phone }}</span>
                                    </center>
					            </div>
					           
					        </div>
					
					        <div class="invoice-bill row">
					            <div class="col-sm-12 text-xs-center">
					                <address>
                                        <div class="col-sm-3">
                                            <strong >Serial No: </strong>
					                        <span class="text-main" id="invoice_id"></span> 
                                        </div>
                                        
                                        <div class="col-sm-3">
                                        <strong>Print Date: </strong>
                                        <span class="text-main">{{ now()->format('d-m-Y') }}</span>
                                        </div>
                                        
                                        <div class="col-sm-6">
                                        <strong >Gate Pass No: </strong>
					                    <span class="text-main" id="gate_pass"></span> 
                                        </div>
                                        
                                        <div class="col-sm-6">
                                        <strong >Vehicle No: </strong>
					                    <span class="text-main" id="vehicle_no"></span> 
                                        </div>

                                        <div class="col-sm-6">
                                        <strong >Supplier Name: </strong>
					                    <span class="text-main" id="sup_name"></span> 
                                        </div>

                                        <div class="col-sm-6">
                                        <strong >Customer Name: </strong>
                                        <span class="text-main" id="cus_name"></span>
                                        </div>
                                        
                                        <div class="col-sm-6">
                                        <strong >Driver's Name: </strong>
                                        <span class="text-main" id="driver_name"></span>
                                        </div>

                                        <div class="col-sm-12">
                                        <strong >Description: </strong>
                                        <span class="text-main" id="description"></span>
                                        </div>
					                    <span id="company_name"></span><br>
					                    <span id="address"></span>
					               </address>
					            </div>
					            <div class="col-sm-6 text-xs-center">
					                <table class="invoice-details">
					                
					                </table>
					            </div>
					        </div>
					
					
					        <div class="row">
					            <div class="col-lg-12 table-responsive">
					               
                                    <table class="table table-bordered invoice-summary" id="invoice_table" style="margin-bottom:10px">
                                        <thead>
                                            <tr class="bg-trans-dark">
                                                <th class="text-center text-uppercase">Legend</th>
                                                <th class="text-center text-uppercase">Weight</th>
                                                <th class="text-center text-uppercase">Time</th>
                                                <th class="text-center text-uppercase">Weight Date</th>
                                                <th class="text-center text-uppercase">Type</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>First Weight</td>
                                                <td id="ist_weight">5000 KG</td>
                                                <td id="ist_time">10:30 AM</td>
                                                <td id="ist_date">2026-03-13</td>
                                                <td id="ist_type">Auto</td>
                                            </tr>

                                            <tr>
                                                <td>Second Weight</td>
                                                <td id="second_weight">3000 KG</td>
                                                <td id="second_time">11:10 AM</td>
                                                <td id="second_date">2026-03-13</td>
                                                <td id="second_type">Auto</td>
                                            </tr>

                                            <tr>
                                                <td>Net Weight</td>
                                                <td id="net_weight">2000 KG</td>
                                            </tr>
                                        </tbody>
                                    </table>
					            </div>
					        </div>
					
					        <div class="clearfix">
					            <table class="table invoice-total">
					                <tbody>
					                    
                                        <tr>
					                        <td><strong>Remarks (if any) :</strong></td>
					                        <td class="text-bold h4" id="view_total"></td>
					                    </tr>
					                    <tr>
					                        <td><strong>Name Supervisor :</strong></td>
					                        <td id="view_paid"></td>
					                    </tr>
					                  
					                </tbody>
					            </table>
					        </div> 
                            <center  style="margin-bottom: 10px">
                                <span>{{ $settings->terms }}</span>
                                <span>{{ $settings->website }}</span><br>
                                <span>0324-4196007</span>

                            </center>
                            
                            <div class="text-center no-print ">
					            <a href="javascript:window.print()" class="btn btn-default"><i class="demo-pli-printer icon-lg"></i></a>
                                <button class="btn btn-primary" data-dismiss="modal" id="close_bill_modal">Close</button>
					        </div>
					
					    </div>
					</div>
                        
                    </div>
                    <!--end::Scroll-->
                
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--===================================================-->
    <!--End View Modal-->
    

@endsection



@section('javascript_code')

<script>
    $(document).ready(function(){

       


        //=========== Insert Form Validation ===========//
        $("#add_form").validate({
                rules: {
                   
                    ist_weight: {
                        required: true
                    },
                },
                messages: {
                    
                    ist_weight: {
                        required: "Please Enter 1st Weight",
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

     

        //=========== Update Form Validation ===========//
        $("#update_form").validate({
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


        //=========== Lounch View Modal On Click View Btn ===========//
        $(document).on("click", '#view_btn', function(event){
            event.preventDefault();
            $("#view_modal").modal('show');

            var id = $(this).data("vid");
            $.ajax({
                url: '/view_invoice/'+id,
                method: 'GET',
                // data: { doctor_id: updateId },
                contentType : false,
                processData : false,
                dataType: "json",
                success: function(data)
                {
                    console.log(data);
                    $('#invoice_id').text(data.weight.id); 
                    $('#gate_pass').text(data.weight.gate_pass_no); 
                    $('#vehicle_no').text(data.weight.vehicle_no); 
                    $('#sup_name').text(data.weight.supplier_name); 
                    $('#cus_name').text(data.weight.customer_name); 
                    $('#driver_name').text(data.weight.driver_name); 
                    $('#description').text(data.weight.description);
                    
                    $('#ist_weight').text(data.weight.ist_weight); 
                    $('#second_weight').text(data.weight.second_weight); 
                    $('#net_weight').text(data.weight.net_weight); 
                    $('#ist_time').text(data.weight.ist_time); 
                    $('#second_time').text(data.weight.second_time); 
                    $('#ist_date').text(data.weight.ist_date); 
                    $('#second_date').text(data.weight.second_date); 
                    

                }
            });
        });

       
        function invoice_print() {
            $("#view_modal").modal('show');
            $.ajax({
                url: '{{ route("invoice_print") }}',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    if (data.status === 200) {
                        // Populate modal fields
                        
                    $('#invoice_no').text(" " + data.sale.id);

                    $('#cus_name').text(" " + data.sale.cus_name);
                    $('#inv_date').text(" " + data.sale.date);
                    $('#view_subtotal').text(data.sale.subtotal);
                    $('#view_dis_per').text("Discount : (" + data.sale.dis_percent+" %)");
                    $('#view_dis_amt').text(data.sale.dis_amount);
                    $('#view_total').text(data.sale.grand_total);
                    $('#view_paid').text(data.sale.paid);
                    $('#view_due').text(data.sale.due);

                        var html = '';

                        // Populate products table
                        $.each(data.products, function(i, item) {
                            html += '<tr>'+
                                        '<td class="text-center">'+ item.no +'</td>'+
                                        '<td>'+ item.pro_name +'</td>'+
                                        '<td class="text-center">'+ item.sale_price +'</td>'+
                                        '<td class="text-center">'+ item.pro_qty +'</td>'+
                                        '<td class="text-right">'+ item.total +'</td>'+
                                    '</tr>';
                        });

                        $("#invoice_table > tbody").empty().append(html);
                    } else {
                        console.error('Sale not found');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching invoice:', error);
                }
            });
        }

        //=========== End Lounch View Modal On Click View Btn ===========//


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


   

        // Define the default options
        var defaultOptions = {
            ajax: {
                url: '{{ route("load_weights") }}',
                type: 'post',
                data: { csrf: csrf, startdate: "", enddate: "", search: "", type: "" }
            },
            columns: [
                { data: "id" },
                { data: "vehicle_no" },
                { data: "customer_name" },
                { data: "supplier_name" },
                { data: "driver_name" },
                { data: "gate_pass_no" },
                { data: "description" },
                { data: "ist_weight" },
                { data: "second_weight" },
                { data: "net_weight" },
                { data: "btn" },
                // Add more column definitions as needed
            ],
            order: [0, 'DESC'],
            columnDefs: [
                { className: 'text-center td-30', targets: [3, 4, 5, 6,10] },
                // Add more column definitions as needed
            ],
            centeredColumnsOnPrintPdf: [3, 4, 5, 6],
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

                // var total = api.ajax.json().roleTotals;
                // var recordsTotal = api.ajax.json().recordsTotal;
                // $('#total_teacher').text(total.Teacher);
                // $('#total_student').text(total.Student);
                // $('#total_parent').text(total.Parent);
                // $('#total_user').text(recordsTotal);
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
    		  loadData();
    		});
    		//=========== End Date Range On Apply ===========//
        }
        //=========== End Search By Date ===========//




    });
</script>
@endsection