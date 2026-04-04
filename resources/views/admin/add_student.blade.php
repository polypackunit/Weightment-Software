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
                <h1 class="page-header text-overflow">Add New Student</h1>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->


            <!--Breadcrumb-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <ol class="breadcrumb">
            <li>Add New Student</li>
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
        <div class="panel-body" style="padding: 20px">
            <!--===================================================-->
            <form id="add_form" type="post" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-sm-9 p-0">
                        <div class="col-md-10" style="padding: 0px">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <select id="sessions" name="session_id" class="demo_select2 form-control" style="width: 100%">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <select id="classes" name="class_id" class="demo_select2 form-control" style="width: 100%">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <select id="sections" name="section_id" class="demo_select2 form-control" style="width: 100%">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" id="roll_no" name="roll_no" class="form-control textbox" placeholder=" ">
                                    <label class="control-label textboxlabel">Roll No.</label>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" id="old_adm_no" name="old_adm_no" class="form-control textbox" placeholder=" ">
                                    <label class="control-label textboxlabel">Old Admission No.</label>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" id="registration_no" name="registration_no" class="form-control textbox" placeholder=" " readonly>
                                    <label class="control-label textboxlabel">Registration No.</label>
                                </div>
                            </div>
                            
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" id="admission_date" name="admission_date" class="form-control textbox" placeholder=" ">
                                    <label class="control-label textboxlabel">Admission Date</label>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-group">
                                        <select name="is_saf" class="form-control selectpicker">
                                            <option value="">Is SAF Student</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-group">
                                        <select name="admission_type" class="form-control selectpicker">
                                            <option value="">Select Admission Type</option>
                                            <option value="New Admission">New Admission</option>
                                            <option value="Migrate">Migrate</option>
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" name="old_school_name" class="form-control textbox" placeholder=" ">
                                    <label class="control-label textboxlabel">Old School Name</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" name="rfid" class="form-control textbox" placeholder=" ">
                                    <label class="control-label textboxlabel">RFID</label>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-2">
                            <div class="image-input-container">
                                <input type="file" name="student_photo" id="image-input" accept="image/*" style="display: none;">
                                <label for="image-input" class="image-label">
                                    <img src="{{ asset('uploads/no_image.jpg') }}" alt="Uploaded Image" class="uploaded-image" id="uploaded-image">
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" name="student_name" class="form-control textbox" placeholder=" ">
                                <label class="control-label textboxlabel">Student Name</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" name="student_father_name" class="form-control textbox" placeholder=" ">
                                <label class="control-label textboxlabel">Student Father Name</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="email" name="std_email" class="form-control textbox" placeholder=" ">
                                <label class="control-label textboxlabel">Email</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" name="cnic" class="form-control textbox" placeholder=" ">
                                <label class="control-label textboxlabel">CNIC</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" name="std_phone" class="form-control textbox" placeholder=" ">
                                <label class="control-label textboxlabel">Phone</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" name="emergency_phone" class="form-control textbox" placeholder=" ">
                                <label class="control-label textboxlabel">Emergency Phone</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <input type="text" id="date_of_birth" name="date_of_birth" class="form-control textbox" placeholder=" ">
                                <label class="control-label textboxlabel">Date Of Birth</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" id="age" name="age" class="form-control textbox" placeholder=" " readonly>
                                <label class="control-label textboxlabel">Age</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <select name="gender" class="form-control selectpicker">
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <select name="religion" class="form-control selectpicker">
                                    <option value="">Select Religion</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Christian">Christian</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <select id="caste" name="caste" class="form-control selectpicker" data-live-search="true">
                                    <option value="">Select Caste</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <div style="display: flex">
                                    <select id="guardian" name="guardian_id" class="demo_select2 form-control" style="width: 100%">
                                        <option></option>
                                    </select>
                                    <button id="add_guardian_btn" data-toggle="tooltip" title="Add Guardian" class="btn btn-success btn-icon" style="margin-left: 5px; padding: 0px 9px"><i class="fa-duotone fa-circle-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" name="guardian_relation" class="form-control textbox" placeholder=" ">
                                <label class="control-label textboxlabel">Guardian Relation</label>
                            </div>
                        </div>
                    
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="temp_address" class="form-control textbox" placeholder=" ">
                                <label class="control-label textboxlabel">Temp Address</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="perment_address" class="form-control textbox" placeholder=" ">
                                <label class="control-label textboxlabel">Permanent Address</label>
                            </div>
                        </div>
                        <div class="col-sm-12" style="padding: 0px">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" name="blood_group" class="form-control textbox" placeholder=" ">
                                    <label class="control-label textboxlabel">Blood Group</label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" name="madical_history" class="form-control textbox" placeholder=" ">
                                    <label class="control-label textboxlabel">Madical History</label>
                                </div>
                            </div>
                            
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" name="disability" class="form-control textbox" placeholder=" ">
                                    <label class="control-label textboxlabel">Disability</label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <select id="roots" name="root_id" class="demo_select2 form-control" style="width: 100%">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="form-group">
                                <select id="transports" name="transport_id" class="demo_select2 form-control" style="width: 100%">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" name="pickup_point" class="form-control textbox" placeholder=" ">
                                <label class="control-label textboxlabel">Pickup Point</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" name="referance" class="form-control textbox" placeholder=" ">
                                <label class="control-label textboxlabel">Referance</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" name="note" class="form-control textbox" placeholder=" ">
                                <label class="control-label textboxlabel">Other Note</label>
                            </div>
                        </div>
                    </div>



                    <div class="col-sm-3">
                        <div class="table-responsive">
                            <table id="sibiling_table" class="table table-striped table-hover custom-table mb-0">
                                <thead>
                                    <tr>
                                        <th style="width: 45%">Sibiling</th>
                                        <th style="width: 45%">Relation</th>
                                        <th style="width: 10%" class="text-center">
                                            <button id="add_row" class="btn btn-success btn-icon" data-toggle="tooltip" title="Add Sibling"><i class="fa-solid fa-plus"></i></button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- <tr>
                                        <td>
                                            <select id="siblings" name="sibling_id[]" class="demo_select2 form-control siblings" style="width: 100%">
                                                <option></option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <input type="text" name="sibling_relation[]" class="form-control text-center" placeholder=" ">
                                        </td>
                                        <td class="text-center">
                                            
                                        </td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-sm-12 text-center">
                        <button class="btn btn-primary" type="button" id="add_btn">Save Student</button>
                    </div>
                </div>
                
            </form>
            <!--===================================================-->
            
        </div>
        <!--===================================================-->
        <!--End Data Table-->
    </div>  
    

    <!--Start Add Modal-->
    <!--===================================================-->
    <div class="modal fade" id="add_guardian_modal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Add New Guardian</h4>
                </div>

                <!--Modal body-->
                <div class="modal-body" style="padding-bottom: 0px">
                    <!--===================================================-->
                    <form id="add_guardian_form" type="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="guardian_name" class="form-control textbox" placeholder=" ">
                                        <label class="control-label textboxlabel">Guardian Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="gd_f_name" class="form-control textbox" placeholder=" ">
                                        <label class="control-label textboxlabel">Gd Father Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control textbox" placeholder=" ">
                                        <label class="control-label textboxlabel">Phone</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="id_card" class="form-control textbox" placeholder=" ">
                                        <label class="control-label textboxlabel">Id Card</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="occupation" class="form-control textbox" placeholder=" ">
                                        <label class="control-label textboxlabel">Occupation</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control textbox" placeholder=" ">
                                        <label class="control-label textboxlabel">Email</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="address" class="form-control textbox" placeholder=" ">
                                        <label class="control-label textboxlabel">Address</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--===================================================-->
                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button" id="save_guardian_btn">Save Guardian</button>
                    <button data-dismiss="modal" class="btn btn-default close_guardian_modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--===================================================-->
    <!--End Add Modal-->


    <style>

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

    </style>




@endsection



@section('javascript_code')

<script>
    $(document).ready(function(){

        //=========== Start Date Picker ===========//
        $('#admission_date').daterangepicker({
            // autoUpdateInput: false,
            autoApply: true,
            // startDate: start,
            singleDatePicker: true,
            maxDate: moment(),
            locale: {
            format: 'DD-MM-YYYY'
            }
        });
        $('#admission_date').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('DD-MM-YYYY'));
        });
        //=========== Start Date Picker ===========//

        //=========== Start Date Picker ===========//
        $('#date_of_birth').daterangepicker({
            autoUpdateInput: false,
            autoApply: true,
            // startDate: start,
            singleDatePicker: true,
            maxDate: moment(),
            locale: {
            format: 'DD-MM-YYYY'
            }
        });
        $('#date_of_birth').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('DD-MM-YYYY'));

            var dob = picker.startDate.toDate();
            if (dob) {
                var age = calculateAge(new Date(dob));
                $('#age').val(age.years + ' years, ' + age.months + ' months, ' + age.days + ' days');
            } else {
                $('#age').val('Please enter a valid date of birth.');
            }
        });
        //=========== Start Date Picker ===========//

        function calculateAge(dob) {
            var now = new Date();
            var years = now.getFullYear() - dob.getFullYear();
            var months = now.getMonth() - dob.getMonth();
            var days = now.getDate() - dob.getDate();

            if (days < 0) {
                months--;
                days += new Date(now.getFullYear(), now.getMonth(), 0).getDate(); // get days in previous month
            }

            if (months < 0) {
                years--;
                months += 12;
            }

            return {
                years: years,
                months: months,
                days: days
            };
        }



        //=========== Insert Data Ajax Request ===========//
        $("#add_row").click(function(e) {
            e.preventDefault();

            var html = '<tr>'+
                            '<td>'+
                                '<select name="sibling_id[]" class="demo_select2 form-control siblings" style="width: 100%"><option></option></select>'+
                            '</td>'+
                            '<td class="text-center">'+
                                '<input type="text" name="sibling_relation[]" class="form-control" placeholder=" ">'+
                            '</td>'+
                            '<td class="text-center">'+
                                '<button class="btn btn-danger btn-icon remove_row" data-toggle="tooltip" title="Remove"><i class="fa-solid fa-xmark-large"></i></button>'+
                            '</td>'+
                        '</tr>';

            var newRow = $(html);

            $("#sibiling_table > tbody:last").append(newRow);

            // Initialize Select2 on the new row
            get_siblings(newRow.find('.siblings'), '#add_modal');
        });
        // get_siblings($('#siblings'), '#add_modal');
        //=========== End Insert Data Ajax Request ===========//

        get_registration_no();
        get_sessions();
        get_classes();
        get_roots();
        get_transports();
        get_castes();

        function get_siblings(element, modal_id) {
            element.select2({
                placeholder: 'Select Sibling',
                allowClear: true,
                minimumInputLength: 1,
                ajax: {
                    url: '{{ route("get_students") }}',
                    method: 'GET',
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            query: params.term,
                        };
                    },
                    processResults: function (data) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    id: item.id,
                                    text: item.student_name
                                };
                            })
                        };
                    },
                    cache: true
                }
            });
        }
        //=========== End Get Patients On Load ===========//

        // Delegate event to remove row
        $(document).on('click', '.remove_row', function(e) {
            e.preventDefault();
            $(this).closest('tr').remove();
        });
        //=========== End Remove Row Button ===========//

        
        // Function to fetch class fee
        function get_registration_no() {
            $.ajax({
                url: '{{ route("get_registration_no") }}',
                method: 'GET',
                dataType: "json",
                success: function(response) {

                    $('#registration_no').val(response.registration_no);
                }
            });
        }

        //=========== Get Session On Load ===========//
        
        function get_sessions()
        {
            
            $.ajax({
                url: '{{ route("get_sessions") }}',
                method: 'GET',
                // data: { doctor_id: updateId },
                contentType : false,
                processData : false,
                dataType: "json",
                success: function(data)
                    {
                        
                        $('#sessions').empty(); // Clear the dropdown before adding new options
                        $.each(data, function(i, item) {
                            var option = $('<option>', {
                                value: item.id,
                                text: item.session_year
                            });
                            // Check if the active_year column value is 1 and mark the option as selected
                            if (item.active_year == 1) {
                                option.prop('selected', true);
                            }
                            $('#sessions').append(option);
                        });

                        $.each(data, function(i, item) {
                            if ($('#u_sessions option[value="' + data[i].id + '"]').length == 0) {
                                $('#u_sessions').append($('<option>', {
                                    value: data[i].id,
                                    text: data[i].session_year,
                                }));
                            }
                        });
                    }

                });
        };    
        $("#sessions").select2({
            placeholder: "Select Session",
            allowClear: true,
            // minimumResultsForSearch: Infinity
        });
        //=========== End Get Session On Load ===========//

        //=========== Insert Data Ajax Request ===========//
        $("#add_guardian_btn").click(function(e){
            e.preventDefault();
            $("#add_guardian_modal").modal('show');
            
        });
        //=========== End Insert Data Ajax Request ===========//

        //=========== Get Class On Load ===========//
        
        function get_classes()
        {
            $.ajax({
                url: '{{ route("get_classes") }}',
                method: 'GET',
                // data: { doctor_id: updateId },
                contentType : false,
                processData : false,
                dataType: "json",
                success: function(data)
                    {
                        
                        // $('#u_classes').empty();

                        $.each(data, function(i, item) {
                            if ($('#classes option[value="' + data[i].id + '"]').length == 0) {
                                $('#classes').append($('<option>', {
                                    value: data[i].id,
                                    text: data[i].class_name,
                                }));
                            }
                        });

                    }

                });
        };    
        $("#classes").select2({
            placeholder: "Select Class",
            allowClear: true,
        }).on('change', function() {
            var classId = $(this).val();
            get_sections(classId, '#sections');
            get_roll_no(classId);
        });

        //=========== End Get Class On Load ===========//

        // Function to fetch class fee
        function get_roll_no(classId) {
            $.ajax({
                url: '{{ route("get_roll_no", ["id" => ":classId"]) }}'.replace(':classId', classId),
                method: 'GET',
                dataType: "json",
                success: function(response) {
                    if (response.roll_no) {
                        $('#roll_no').val(response.roll_no);

                    } else {
                        $('#roll_no').val('');

                    }
                },
                error: function() {
                    $('#roll_no').val('');

                }
            });
        }

        //=========== Get Section On Load ===========//
        function get_sections(classId, targetDropdown, selected_section_id = null) {
            $.ajax({
                url: 'get_sections/' + classId,
                method: 'GET',
                contentType: false,
                processData: false,
                dataType: "json",
                success: function(data) {
                    // Clear the target dropdown before adding new options
                    $(targetDropdown).empty().append($('<option>', {
                        value: '',
                        text: 'Select Section',
                        selected: true,
                        disabled: true
                    }));
                    // Populate section dropdown based on the selected class
                    $.each(data, function(i, item) {
                        $(targetDropdown).append($('<option>', {
                            value: item.id,
                            text: item.section_name,
                        }));
                    });

                    if (selected_section_id) {
                        $(targetDropdown).val(selected_section_id).trigger('change');
                    }
                }
            });
        }

        $("#sections").select2({
            placeholder: "Select Section",
            allowClear: true,
        });
 
        //=========== End Get Section On Load ===========//

        function get_castes()
        {
            $.ajax({
                url: '{{ route("get_castes") }}',
                method: 'GET',
                // data: { doctor_id: updateId },
                contentType : false,
                processData : false,
                dataType: "json",
                success: function(data)
                    {
                        
                        $.each(data, function(i, item) {
                            if ($('#caste option[value="' + data[i].id + '"]').length == 0) {
                                $('#caste').append($('<option>', {
                                    value: data[i].id,
                                    text: data[i].caste_name,
                                }));
                            }
                        });

                        $('#caste').selectpicker('refresh');
                    }

                });
        };    

        //=========== Get Section On Load ===========//
        
        function get_roots()
        {
            $.ajax({
                url: '{{ route("get_roots") }}',
                method: 'GET',
                // data: { doctor_id: updateId },
                contentType : false,
                processData : false,
                dataType: "json",
                success: function(data)
                    {
                        
                        $.each(data, function(i, item) {
                            if ($('#roots option[value="' + data[i].id + '"]').length == 0) {
                                $('#roots').append($('<option>', {
                                    value: data[i].id,
                                    text: data[i].root_name,
                                }));
                            }
                        });
                    }

                });
        };    
        $("#roots").select2({
            placeholder: "Select Root",
            allowClear: true,
        });

        //=========== End Get Section On Load ===========//

        //=========== Get Section On Load ===========//
        $('#guardian').select2({
            placeholder: 'Guardian Name',
            allowClear: true,
            minimumInputLength: 1,
            ajax: {
                url: '{{ route("get_guardians") }}',
                method: 'GET',
                dataType: 'json',
                delay: 250,
                data: function (guardian_name) {
                    return {
                        query: guardian_name.term,
                    };
                },
                processResults: function (data) {
                    return {
                        results: $.map(data, function(item) {
                            return {
                                id: item.id,
                                text: item.gd_name + ' (' + item.address + ')'
                            };
                        })
                    };
                },
                cache: true
            }
        });  
        //=========== End Get Section On Load ===========//

        //=========== Get Section On Load ===========//
        
        function get_transports()
        {
            $.ajax({
                url: '{{ route("get_transports") }}',
                method: 'GET',
                // data: { doctor_id: updateId },
                contentType : false,
                processData : false,
                dataType: "json",
                success: function(data)
                    {
                        
                        $.each(data, function(i, item) {
                            if ($('#transports option[value="' + data[i].id + '"]').length == 0) {
                                $('#transports').append($('<option>', {
                                    value: data[i].id,
                                    text: data[i].vehicle_type + ' | ' + data[i].root_name + ' | ' + data[i].driver_name,
                                }));
                            }
                        });
                    }

                });
        };    
        $("#transports").select2({
            placeholder: "Select Transport",
            allowClear: true,
        });

        $("#u_transports").select2({
            placeholder: "Select Transport",
            allowClear: true,
        });
        //=========== End Get Section On Load ===========//

        //=========== Insert Form Validation ===========//
        $("#add_guardian_form").validate({
                rules: {
                    guardian_name: {
                        required: true,
                    },
                    gd_f_name: {
                        required: true
                    },
                    class_id: {
                        required: true,
                    },
                    email: {
                        required: true
                    },
                    phone: {
                        required: true,
                    },
                    id_card: {
                        required: true
                        // minlength: 13,
                        // maxlength: 13,
                    },
                    occupation: {
                        required: true,
                    },
                    address: {
                        required: true,
                    },
                    
                },
                messages: {
                    guardian_name: {
                        required: "Please enter Guardian Name",
                    },
                    gd_f_name: {
                        required: "Please Enter Gd Father Name",
                    },
                    class_id: {
                        required: "Please enter Class Id",
                    },
                    email: {
                        required: "Please Enter Email",
                    },
                    phone: {
                        required: "Please enter Phone Number",
                    },
                    id_card: {
                        required: "Please Enter Id Card Id",
                    },
                    occupation: {
                        required: "Please enter Occupation",
                    },
                    address: {
                        required: "Please enter Address",
                    },
                },

        });
        //=========== End Insert Form Validation ===========//

        //=========== Insert Data Ajax Request ===========//
        $("#save_guardian_btn").click(function(e){
            e.preventDefault();
            if($("#add_guardian_form").valid()){
                $(this).prop('disabled', true);
                $(this).text('Saving..');
                //Get Data From Modal Form On Click Save Button
                var formData = new FormData($('#add_guardian_form')[0]);

                $.ajax({
                    url: '{{ route("insert_guardian") }}',
                    method: 'post',
                    data : formData,
                    contentType : false,
                    processData : false,
                    dataType: "json",
                    success:function(response){
                        console.log(response);
                        if (response.status == 200) {
                            toastr.success('Guardian Data Saved Successfully!', 'Successfull!');
                            $('#add_guardian_modal').find('form')[0].reset();
                            $('#save_guardian_btn').text('Save Guardian');
                            $('#save_guardian_btn').prop('disabled', false);
                            $('#add_guardian_modal').modal('hide');
                            $('#add_modal').modal('show');
                        }else if (response.status == "guardianExist") {
                            Swal.fire({ 
                                    title: "Guardian Exist!",
                                    text: "This Guardian Already Exist!",
                                    icon: "error", 
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { 
                                        confirmButton: "btn fw-bold btn-success"
                                        } 
                                    });
                            $('#save_guardian_btn').text('Save Guardian');
                            $('#save_guardian_btn').prop('disabled', false);
                            
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
                            $('#save_guardian_btn').text('Save Guardian');
                            $('#save_guardian_btn').prop('disabled', false);
                        }
                    }

                });
            }
        });
        //=========== End Insert Data Ajax Request ===========//


        //=========== Insert Form Validation ===========//
        $("#add_form").validate({
                rules: {
                    registration_no: {
                        required: true,
                    },
                    admission_date: {
                        required: true
                    },
                    admission_type: {
                        required: true,
                    },
                    session_id: {
                        required: true
                    },
                    class_id: {
                        required: true,
                    },
                    student_name: {
                        required: true,
                    },
                    student_father_name: {
                        required: true,
                    },
                    gender: {
                        required: true,
                    },
                    date_of_birth: {
                        required: true,
                    },
                    religion: {
                        required: true,
                    },
                    caste: {
                        required: true,
                    },
                    std_phone: {
                        required: true,
                    },
                    temp_address: {
                        required: true,
                    },
                    perment_address: {
                        required: true,
                    },
                    student_fees: {
                        required: true,
                    },
                    madical_history: {
                        required: true,
                    },
                    root_id: {
                        required: true,
                    },
                    disability: {
                        required: true,
                    },
                    guardian_id: {
                        required: true,
                    },
                    guardian_relation: {
                        required: true,
                    },
                    
                },
                messages: {
                    registration_no: {
                        required: "Please enter Registration No",
                    },
                    admission_date: {
                        required: "Please Enter Admission Date",
                    },
                    admission_type: {
                        required: "Please Enter Admission Type",
                    },
                    session_id: {
                        required: "Please Enter Session Id",
                    },
                    class_id: {
                        required: "Please enter Class Id",
                    },
                    student_name: {
                        required: "Please Enter Student Name",
                    },
                    student_father_name: {
                        required: "Please Enter Student Father Name",
                    },
                    gender: {
                        required: "Please Enter Gender",
                    },
                    date_of_birth: {
                        required: "Please Enter Date Of Birth",
                    },
                    religion: {
                        required: "Please Enter Religion",
                    },
                    cast: {
                        required: "Please Enter Cast",
                    },
                    std_phone: {
                        required: "Please Enter Phone",
                    },
                    temp_address: {
                        required: "Please Enter Temp Address",
                    },
                    perment_address: {
                        required: "Please Enter Perment Address",
                    },
                    student_fees: {
                        required: "Please Enter Student Fees",
                    },
                    madical_history: {
                        required: "Please Enter Madical History",
                    },
                    root_id: {
                        required: "Please Enter Root Id",
                    },
                    disability: {
                        required: "Please Enter Disability",
                    },
                    guardian_id: {
                        required: "Please Enter Guardian Id",
                    },
                    guardian_relation: {
                        required: "Please Enter Guardian Relation",
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
                    url: '{{ route("insert_student") }}',
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
                                    text: "Student Admission Saved Successfully!",
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
                        }else if (response.status == "studentExist") {
                            Swal.fire({ 
                                    title: "Student Exist!",
                                    text: "This Student Already Exist!",
                                    icon: "error", 
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { 
                                        confirmButton: "btn fw-bold btn-success"
                                        } 
                                    });
                            $('#add_btn').text('Save Student');
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
                            $('#add_btn').text('Save Student');
                            $('#add_btn').prop('disabled', false);
                        }
                    }

                });
            }
        });
        //=========== End Insert Data Ajax Request ===========//

        

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


    });
</script>
@endsection