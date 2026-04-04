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
                <h1 class="page-header text-overflow">Teachers</h1>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->


            <!--Breadcrumb-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <ol class="breadcrumb">
            <li>Manage All Teachers ( Add - Update - Delete )</li>
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
                    <div class="col-sm-6 table-toolbar-left" style="padding-bottom: 2px;">
                        <div class="form-group">
                            <input id="search" type="text" placeholder="Search" class="form-control" autocomplete="off">
                        </div>
                        
                    </div>
                    <div class="col-sm-6 table-toolbar-right" style="padding-bottom: 2px;">
                        @if (Auth::user()->can('create_teacher'))
                        <button data-target="#add_modal" data-toggle="modal" class="btn btn-purple"><i class="demo-pli-add"></i> Add New Teacher</button>
                        @endif
                        @if (Auth::user()->can('print_teacher'))
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
                                <li><a href="#" class="toggle-vis" data-column="2">First Name</a></li>
                                <li><a href="#" class="toggle-vis" data-column="3">Father Name</a></li>
                                <li><a href="#" class="toggle-vis" data-column="4">Phone</a></li>
                                <li><a href="#" class="toggle-vis" data-column="5">Email</a></li>
                                <li><a href="#" class="toggle-vis" data-column="6">Qualification</a></li>
                                <li><a href="#" class="toggle-vis" data-column="7">Work Shift</a></li>
                                <li><a href="#" class="toggle-vis" data-column="8">Address</a></li>
                                <li><a href="#" class="toggle-vis" data-column="9">Buttons</a></li>
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
                            <th width="100px">First Name</th>
                            <th width="100px">Father Name</th>
                            <th width="100px">Phone</th>
                            <th width="100px">Email</th>
                            <th width="100px">Qualification</th>
                            <th width="100px">Work Shift</th>
                            <th width="100px">Address</th>
                            <th width="100px" class="text-center">Action</th>
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
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Add New Teacher</h4>
                </div>

                <!--Modal body-->
                <div class="modal-body" style="padding-bottom: 0px">
                    <!--===================================================-->
                    <form id="add_form" type="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-10" style="padding: 0px">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" name="teacher_name" class="form-control textbox" placeholder=" ">
                                                <label class="control-label textboxlabel">Teacher Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" name="father_name" class="form-control textbox" placeholder=" ">
                                                <label class="control-label textboxlabel">Father Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" name="cnic" class="form-control textbox" placeholder=" ">
                                                <label class="control-label textboxlabel">CNIC</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" name="phone" class="form-control textbox" placeholder=" ">
                                                <label class="control-label textboxlabel">Phone</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" name="emergency_contact" class="form-control textbox" placeholder=" ">
                                                <label class="control-label textboxlabel">Emergency Contact</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control textbox" placeholder=" ">
                                                <label class="control-label textboxlabel">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <select id="genderSelect" name="gender" class="form-control selectpicker">
                                                    <option value="" selected>Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" id="dob" name="dob" class="form-control textbox" placeholder=" ">
                                                <label class="control-label textboxlabel">Date Of Birth</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" id="joining_date" name="joining_date" class="form-control textbox" placeholder=" ">
                                                <label class="control-label textboxlabel">Joining Date</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="image-input-container">
                                            <input type="file" name="image" id="image-input" accept="image/*" style="display: none;">
                                            <label for="image-input" class="image-label">
                                                <img src="{{ asset('uploads/teacher_images/no_image.jpg') }}" alt="Uploaded Image" class="uploaded-image" id="uploaded-photo">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="current_address" class="form-control textbox" placeholder=" ">
                                            <label class="control-label textboxlabel">Current Address</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="permanent_address" class="form-control textbox" placeholder=" ">
                                            <label class="control-label textboxlabel">Permanent Address</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <select name="marital_status" class="form-control selectpicker">
                                                <option value="" selected>Select Marital Status</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" name="qualification" class="form-control textbox" placeholder=" ">
                                            <label class="control-label textboxlabel">Qualification</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" name="work_experience" class="form-control textbox" placeholder=" ">
                                            <label class="control-label textboxlabel">Work Experience</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" name="basic_salary" class="form-control textbox" placeholder=" ">
                                            <label class="control-label textboxlabel">Basic Salary</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <select id="" name="work_shift" class="form-control selectpicker">
                                                <option value="Morning">Morning</option>
                                                <option value="Evening">Evening</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" name="bank_name" class="form-control textbox" placeholder=" ">
                                            <label class="control-label textboxlabel">Bank Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" name="account_title" class="form-control textbox" placeholder=" ">
                                            <label class="control-label textboxlabel">Account Title</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" name="account_number" class="form-control textbox" placeholder=" ">
                                            <label class="control-label textboxlabel">Account Number</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" name="allowed_leaves" class="form-control textbox" placeholder=" ">
                                            <label class="control-label textboxlabel">Allowed Leaves</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" name="rfid" class="form-control textbox" placeholder=" ">
                                            <label class="control-label textboxlabel">RFID</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="note" class="form-control textbox" placeholder=" ">
                                            <label class="control-label textboxlabel">Other Note</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--===================================================-->
                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button" id="add_btn">Save Teacher</button>
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
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Update Teacher</h4>
                </div>

                <!--Modal body-->
                <div class="modal-body">
                    <!--===================================================-->
                    <form id="update_form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-10" style="padding: 0px">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="hidden" id="teacher_id" name="teacher_id" class="form-control textbox" placeholder=" ">
                                                <input type="text" id="teacher_name" name="teacher_name" class="form-control textbox" placeholder=" ">
                                                <label class="control-label textboxlabel">Teacher Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" id="father_name" name="father_name" class="form-control textbox" placeholder=" ">
                                                <label class="control-label textboxlabel">Father Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" id="cnic" name="cnic" class="form-control textbox" placeholder=" ">
                                                <label class="control-label textboxlabel">CNIC</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" id="phone" name="phone" class="form-control textbox" placeholder=" ">
                                                <label class="control-label textboxlabel">Phone</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" id="emergency_contact" name="emergency_contact" class="form-control textbox" placeholder=" ">
                                                <label class="control-label textboxlabel">Emergency Contact</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="email" id="email" name="email" class="form-control textbox" placeholder=" ">
                                                <label class="control-label textboxlabel">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <select id="u_gender" name="gender" class="form-control selectpicker">
                                                    <option value="" selected>Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" id="u_dob" name="dob" class="form-control textbox" placeholder=" ">
                                                <label class="control-label textboxlabel">Date Of Birth</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" id="u_joining_date" name="joining_date" class="form-control textbox" placeholder=" ">
                                                <label class="control-label textboxlabel">Joining Date</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="image-input-container">
                                            <input type="file" name="image" id="up_image" accept="image/*" style="display: none;">
                                            <label for="up_image" class="image-label">
                                                <img src="{{ asset('uploads/teacher_images/no_image.jpg') }}" alt="Uploaded Image" class="uploaded-image" id="upload_teacher_image">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" id="current_address" name="current_address" class="form-control textbox" placeholder=" ">
                                            <label class="control-label textboxlabel">Current Address</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" id="permanent_address" name="permanent_address" class="form-control textbox" placeholder=" ">
                                            <label class="control-label textboxlabel">Permanent Address</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <select id="marital_status" name="marital_status" class="form-control selectpicker">
                                                <option value="" selected>Select Marital Status</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" id="qualification" name="qualification" class="form-control textbox" placeholder=" ">
                                            <label class="control-label textboxlabel">Qualification</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" id="work_experience" name="work_experience" class="form-control textbox" placeholder=" ">
                                            <label class="control-label textboxlabel">Work Experience</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" id="basic_salary" name="basic_salary" class="form-control textbox" placeholder=" ">
                                            <label class="control-label textboxlabel">Basic Salary</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <select id="work_shift" name="work_shift" class="form-control selectpicker">
                                                <option value="Morning">Morning</option>
                                                <option value="Evening">Evening</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" id="bank_name" name="bank_name" class="form-control textbox" placeholder=" ">
                                            <label class="control-label textboxlabel">Bank Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" id="account_title" name="account_title" class="form-control textbox" placeholder=" ">
                                            <label class="control-label textboxlabel">Account Title</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" id="account_number" name="account_number" class="form-control textbox" placeholder=" ">
                                            <label class="control-label textboxlabel">Account Number</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" id="allowed_leaves" name="allowed_leaves" class="form-control textbox" placeholder=" ">
                                            <label class="control-label textboxlabel">Allowed Leaves</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" id="rfid" name="rfid" class="form-control textbox" placeholder=" ">
                                            <label class="control-label textboxlabel">RFID</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" id="note" name="note" class="form-control textbox" placeholder=" ">
                                            <label class="control-label textboxlabel">Other Note</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--===================================================-->
                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button class="btn btn-primary" id="update_btn">Update Teacher</button>
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
                left: -83px;
                top: -500px;
                width: 800px;
            }
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
                                    <img src="{{ asset('uploads/letterhead.jpg') }}" width="100%">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="center">JOINING FORM</h2>
                                            <h5 class="center">Joining in which department is sought________</h5>
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
                                                <label class="control-label textboxlabel">Date Of Joning ______</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" name="" class="form-control textbox" placeholder=" ">
                                                <label class="control-label textboxlabel">Joning in Department ______</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Teacher's Name</label>
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
                                            <img src="uploads/test.jpg" alt="" height="100px" width="100px">
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
                                        <label for="">Qualification</label>
                                        <input class="form-control mb" type="text" size="60">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Work Shift</label>
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
                                    <h5 style="margin-left: 10px;">I have read the scool prospectus and agree to abide by the School rules.</h5>
                                    <h5 style="margin-left: 10px;">Attached Documents:</h5>
                                    <ul>
                                        <li>Degree's</li>
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


@endsection



@section('javascript_code')

<script>
    $(document).ready(function(){

        //=========== Start Date Picker ===========//
        $('#dob').daterangepicker({
            autoUpdateInput: false,
            autoApply: true,
            // startDate: start,
            singleDatePicker: true,
            locale: {
            format: 'DD-MM-YYYY'
            }
        });
        $('#dob').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('DD-MM-YYYY'));
        });
        //=========== Start Date Picker ===========//

        //=========== Start Date Picker ===========//
        $('#joining_date').daterangepicker({
            autoUpdateInput: false,
            autoApply: true,
            // startDate: start,
            singleDatePicker: true,
            locale: {
            format: 'DD-MM-YYYY'
            }
        });
        $('#joining_date').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('DD-MM-YYYY'));
        });
        //=========== Start Date Picker ===========//

        //=========== Insert Form Validation ===========//
        $("#add_form").validate({
                rules: {
                    
                    teacher_name: {
                        required: true,
                    },
                    father_name: {
                        required: true
                    },
                    cnic: {
                        required: true
                    },
                    phone: {
                        required: true
                    },
                    gender: {
                        required: true,
                    },
                    dob: {
                        required: true,
                    },
                    joining_date: {
                        required: true,
                    },
                    marital_status: {
                        required: true,
                    },
                    current_address: {
                        required: true,
                    },
                    permanent_address: {
                        required: true,
                    },
                    qualification: {
                        required: true,
                    },
                    work_shift: {
                        required: true,
                    },
                    basic_salary: {
                        required: true,
                    },
                    allowed_leaves: {
                        required: true,
                    },
                },
                messages: {
                    teacher_name: {
                        required: "Please Enter First Name",
                    },
                    father_name: {
                        required: "Please Enter Father Name",
                    },
                    cnic: {
                        required: "Please Enter CNIC",
                    },
                    phone: {
                        required: "Please Enter Phone",
                    },
                    gender: {
                        required: "Please Select Gender",
                    },
                    dob: {
                        required: "Please Enter Date Of Birth",
                    },
                    joining_date: {
                        required: "Please Enter Joining Date",
                    },
                    marital_status: {
                        required: "Please Enter Marital Status",
                    },
                    current_address: {
                        required: "Please Enter Current Address",
                    },
                    permanent_address: {
                        required: "Please Enter Permanent Address",
                    },
                    qualification: {
                        required: "Please Enter Qualification",
                    },
                    work_shift: {
                        required: "Please Enter Work Shift",
                    },
                    basic_salary: {
                        required: "Please Enter Basic Salary",
                    },
                    allowed_leaves: {
                        required: "Please Enter Allowed Leaves",
                    },
                    
                },


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
                    url: '{{ route("insert_teacher") }}',
                    method: 'post',
                    data : formData,
                    contentType : false,
                    processData : false,
                    dataType: "json",
                    success:function(response){
                        console.log(response);
                        if (response.status == 200) {
                            toastr.success('Teacher Data Saved Successfully!', 'Successfull!');
                            $('#add_modal').find('form')[0].reset();
                            $('#add_btn').text('Save Teacher');
                            $('#add_btn').prop('disabled', false);
                            $('#add_modal').modal('hide');
                            loadData();
                        }else if (response.status == "teacherExist") {
                            Swal.fire({ 
                                    title: "Teacher Exist!",
                                    text: "This Teacher Already Exist!",
                                    icon: "error", 
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { 
                                        confirmButton: "btn fw-bold btn-success"
                                        } 
                                    });
                            $('#add_btn').text('Save Teacher');
                            $('#add_btn').prop('disabled', false);
                            
                        } else {
                            
                            Swal.fire({ 
                                    title: "Error!",
                                    text: "Something went wrong!",
                                    icon: "error", 
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { 
                                        confirmButton: "btn fw-bold btn-success"
                                        } 
                                    });
                            $('#add_btn').text('Save Teacher');
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

            var id = $(this).data("eid");
            $.ajax({
                url: 'edit_teacher/'+id,
                method: 'GET',
                // data: { doctor_id: updateId },
                contentType : false,
                processData : false,
                dataType: "json",
                success: function(response)
                {
                    console.log(response);
                    $('#teacher_id').val(response.data.id);
                    $('#teacher_name').val(response.data.teacher_name);
                    $('#father_name').val(response.data.father_name);
                    $('#cnic').val(response.data.cnic);
                    $('#phone').val(response.data.phone);
                    $('#emergency_contact').val(response.data.emergency_contact);
                    $('#email').val(response.data.email);
                    $('#u_gender').val(response.data.gender).trigger('change');
                    $('#u_dob').val(response.data.dob);
                    $('#u_joining_date').val(response.data.joining_date);
                    $('#marital_status').val(response.data.marital_status).trigger('change');
                    $('#current_address').val(response.data.current_address);
                    $('#permanent_address').val(response.data.permanent_address);
                    $('#qualification').val(response.data.qualification);
                    $('#work_experience').val(response.data.work_experience);
                    $('#work_shift').val(response.data.work_shift).trigger('change');
                    $('#basic_salary').val(response.data.basic_salary);
                    $('#allowed_leaves').val(response.data.allowed_leaves);
                    $('#bank_name').val(response.data.bank_name);
                    $('#account_title').val(response.data.account_title);
                    $('#account_number').val(response.data.account_number);
                    $('#note').val(response.data.note);
                    $('#rfid').val(response.data.rfid);


                    if (!response.data.photo || response.data.photo === 'null') {
                        $('#upload_teacher_image').attr('src', 'uploads/teacher_images/no_image.jpg');
                    } else {
                        $('#upload_teacher_image').attr('src', 'uploads/teacher_images/' + response.data.photo);
                    }

                }
            });
        });
        //=========== End Lounch Update Modal On Click Edit Btn ===========//

        //=========== Update Form Validation ===========//
        $("#update_form").validate({
            rules: {
                    
                    teacher_name: {
                        required: true,
                    },
                    father_name: {
                        required: true
                    },
                    cnic: {
                        required: true
                    },
                    phone: {
                        required: true
                    },
                    gender: {
                        required: true,
                    },
                    dob: {
                        required: true,
                    },
                    joining_date: {
                        required: true,
                    },
                    marital_status: {
                        required: true,
                    },
                    current_address: {
                        required: true,
                    },
                    permanent_address: {
                        required: true,
                    },
                    qualification: {
                        required: true,
                    },
                    work_shift: {
                        required: true,
                    },
                    basic_salary: {
                        required: true,
                    },
                    allowed_leaves: {
                        required: true,
                    },
                },
                messages: {
                    teacher_name: {
                        required: "Please Enter First Name",
                    },
                    father_name: {
                        required: "Please Enter Father Name",
                    },
                    cnic: {
                        required: "Please Enter CNIC",
                    },
                    phone: {
                        required: "Please Enter Phone",
                    },
                    gender: {
                        required: "Please Select Gender",
                    },
                    dob: {
                        required: "Please Enter Date Of Birth",
                    },
                    joining_date: {
                        required: "Please Enter Joining Date",
                    },
                    marital_status: {
                        required: "Please Enter Marital Status",
                    },
                    current_address: {
                        required: "Please Enter Current Address",
                    },
                    permanent_address: {
                        required: "Please Enter Permanent Address",
                    },
                    qualification: {
                        required: "Please Enter Qualification",
                    },
                    work_shift: {
                        required: "Please Enter Work Shift",
                    },
                    basic_salary: {
                        required: "Please Enter Basic Salary",
                    },
                    allowed_leaves: {
                        required: "Please Enter Allowed Leaves",
                    },
                    
                },


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
                    url: '{{ route("update_teacher") }}',
                    method: 'post',
                    data : formData,
                    contentType : false,
                    processData : false,
                    dataType: "json",
                    success:function(response){
                        console.log(response);
                        if (response.status == 200) {
                            toastr.success('Teacher Data Updated Successfully!', 'Successfull!');
                            $('#update_modal').find('input').val('');
                            $('#update_btn').prop('disabled', false);
                            $('#update_btn').text('Update Teacher');
                            $('#update_modal').modal('hide');
                            loadData();
                            
                        }else if (response.status == "teacherExist") {
                            Swal.fire({ 
                                    title: "Teacher Exist!",
                                    text: "This Teacher Already Exist!",
                                    icon: "error", 
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { 
                                        confirmButton: "btn fw-bold btn-success"
                                        } 
                                    });
                            $('#update_btn').prop('disabled', false);
                            $('#update_btn').text('Update Teacher');
                            
                        } else {
                            
                            Swal.fire({ 
                                    title: "Error!",
                                    text: "Update Staff Error Try Again!",
                                    icon: "error", 
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { 
                                        confirmButton: "btn fw-bold btn-success"
                                        } 
                                    });
                            $('#update_btn').prop('disabled', false);
                            $('#update_btn').text('Update Staff');
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
                        var id = $(this).data("did");
                        var element = this;
                        $.ajax({
                            url: 'delete_teacher/'+id,
                            type : "GET",
                            success : function(response){
                                if (response.status == 200)
                                {
                                    toastr.success('Teacher Has Been Deleted Seccussfully!', 'Successfull!');
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
                url: '{{ route("load_teacher") }}',
                type: 'post',
                data: { search: "", startdate: "", enddate: "",  type: "", csrf: csrf }
            },
            columns: [
                { data: "id" },
                { data: "photo" },
                { data: "teacher_name" },
                { data: "father_name" },
                { data: "phone" },
                { data: "email" },
                { data: "qualification" },
                { data: "work_shift" },
                { data: "current_address" },
                { data: "btn" },
                // Add more column definitions as needed
            ],
            columnDefs: [
                { className: 'text-center td-30', targets: [1, 4, 7, 9] },
                // Add more column definitions as needed
            ],
            centeredColumnsOnPrintPdf: [1, 4, 7, 9],
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
        //==========For Add===========//
        $('#image-input').change(function() {
            var file = this.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $('#uploaded-photo').attr('src', event.target.result).show();
                }
                reader.readAsDataURL(file);
            }
        });

        //==========For Update===========//
        $('#up_image').change(function() {
            var file = this.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $('#upload_teacher_image').attr('src', event.target.result).show();
                }
                reader.readAsDataURL(file);
            }
        });

        //=========== Start Custom Search Box ===========//
        $('#search').keyup(function(){
            loadData($(this).val(), "", "", $('#status').val());
        });
        //=========== End Custom Search Box ===========//




    });
</script>
@endsection