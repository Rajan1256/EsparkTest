<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('PROJECT_NAME')}} | Add job application</title>
    @include('Admin.template.headerlink')

    <style>
        .full-width-new {
    width: 23% !important;
}

.error-class{
    color: #cc5965;
    display: inline-block;
    margin-left: 5px;
}
    </style>
</head>
<body>
<div id="wrapper">
    <!-- Sidebar goes here -->
    <div class="gray-bg">
        <!-- Header goes here -->

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2>Application Form</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <strong>Add  Application Form</strong>
                    </li>
                </ol>

                <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <a href="{{ url('/') }}" class="btn btn-success">Job Application Data</button>
                                        </a>
                                    </div>
                @if(!empty(Session::get('message')))
            <div id ="msgs" class="alert alert-success">{{ Session::get('message') }}
            </div>
            @endif
            </div>
        </div>


        <div class="wrapper wrapper-content">
            <form method="post" id="applicationform" action="javascript:void(0)">
                @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <h1>Basic Details</h1>
                            <br>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="first_name">First Name *</label>
                                            <input id="first_name" name="first_name" type="text"  class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="last_name">Last Name *</label>
                                            <input id="last_name" name="last_name" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email">Email-Id *</label>
                                            <input id="email" name="email" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                </div>


                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">

                                        <label for="designationn">Designation</label>
                                        <input id="designationn" name="designationn" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="place_id">Address1</label>
                                        <textarea id="address1" name="address1"  class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="place_id">Address2</label>
                                        <textarea id="address2" name="address2"  class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="designation">Phone No</label>
                                        <input id="phone_number" name="phone_number" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="state">State</label>
                                        <select id="state" name="state"  class="form-control">
                                            <option value="">---select---</option>
                                            <option value="1">Gujarat</option>
                                            <option value="2">Maharastra</option>
                                            <option value="3">Keral</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input id="city" name="city" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="designation">Gender</label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="0" checked/>
                                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1"/>
                                                        <label class="form-check-label" for="inlineRadio2">Female</label>
                                                </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="relationship_status">Relationship Stats</label>
                                        <select id="relationship_status" name="relationship_status"  class="form-control">
                                            <option value="">---select---</option>
                                            <option value="1">Single</option>
                                            <option value="2">Married</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                                <label for="date_of_birth">Date *</label>
                                                <input id="date_of_birth" name="date_of_birth" type="date" class="form-control" max="<?php echo date("Y-m-d"); ?>">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                                <label for="zip_code">Zip Code</label>
                                                <input id="zip_code" name="zip_code" type="text" class="form-control" autocomplete="off">
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <h1>Education Details</h1>
                            <br>

                                <div class="row">
                                    <div class="col-lg-3"> <h4>SSC result</h4> </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="ssc_name_of_board">Name of Board *</label>
                                            <input id="ssc_name_of_board" name="ssc_name_of_board" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="email">Passing Year *</label>
                                            <input id="ssc_passing_year" name="ssc_passing_year" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="email">Percentage *</label>
                                            <input id="ssc_passing_percentage" name="ssc_passing_percentage" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-lg-3"> <h4>HSC result</h4> </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="hsc_name_of_board">Name of Board *</label>
                                            <input id="hsc_name_of_board" name="hsc_name_of_board" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="hsc_passing_year">Passing Year *</label>
                                            <input id="hsc_passing_year" name="hsc_passing_year" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="hsc_passing_year">Percentage *</label>
                                            <input id="hsc_passing_percentage" name="hsc_passing_percentage" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-lg-2"> <h4>Bacheloar Degree</h4> </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="beachelor_course_name">Course Name *</label>
                                            <input id="beachelor_course_name" name="beachelor_course_name" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="beachelor_university">University *</label>
                                            <input id="beachelor_university" name="beachelor_university" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="beachelor_passing_year">Passing Year *</label>
                                            <input id="beachelor_passing_year" name="beachelor_passing_year" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="beachelor_percentage">Percentage *</label>
                                            <input id="beachelor_percentage" name="beachelor_percentage" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-lg-2"> <h4>Master Degree</h4> </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="master_course_name">Course Name *</label>
                                            <input id="master_course_name" name="master_course_name" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="master_university">University *</label>
                                            <input id="master_university" name="master_university" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="master_passing_year">Passing Year *</label>
                                            <input id="master_passing_year" name="master_passing_year" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="master_percentage">Percentage *</label>
                                            <input id="master_percentage" name="master_percentage" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                </div>

                        </div>
                    </div>
                </div>
            </div>

             <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <h1>Work Experience</h1>
                            <br>

                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="form-group">
                                            <input id="company_name" name="compnay_name[]" type="text"  class="form-control" autocomplete="off" placeholder="Compnay Name">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                            <input id="designation" name="designation[]" type="text"  class="form-control" autocomplete="off" placeholder="Designation">
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="form-group">
                                            <input id="fromdate" name="fromdate[]" type="date"  class="form-control" autocomplete="off" placeholder="Designation">
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="form-group">
                                            <input id="todate" name="todate[]" type="date"  class="form-control" autocomplete="off" placeholder="Designation">
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="input-group-btn">
                                        <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                                    </div>
                                </div>

                            </div>
                            <div id="education_fields">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <h1>Language Know</h1>
                            <br>

                            <div class="row">
                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="eng_array[]" value="1"/>
                                            <label for="inlineCheckbox1">English</label>
                                        </div>
                                </div>
                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline eng">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"  name="eng_array[]" value="2"/>
                                            <label for="inlineCheckbox1">Read</label>
                                        </div>
                                </div>

                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline eng">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"  name="eng_array[]" value="3"/>
                                            <label for="inlineCheckbox1">Write</label>
                                        </div>
                                </div>

                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline eng">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"  name="eng_array[]" value="4"/>
                                            <label for="inlineCheckbox1">Speak</label>
                                        </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox11" name="Hin_array[]" value="1"/>
                                            <label for="inlineCheckbox1">Hindi</label>
                                        </div>
                                </div>
                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline hin">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox21" name="Hin_array[]" value="2"/>
                                            <label for="inlineCheckbox1">Read</label>
                                        </div>
                                </div>

                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline hin">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox21" name="Hin_array[]" value="3"/>
                                            <label for="inlineCheckbox1">Write</label>
                                        </div>
                                </div>

                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline hin">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox21" name="Hin_array[]" value="4"/>
                                            <label for="inlineCheckbox1">Speak</label>
                                        </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox13" name="guj_array[]" value="1"/>
                                            <label for="inlineCheckbox1">Gujarati</label>
                                        </div>
                                </div>
                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline guj">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox23" name="guj_array[]" value="2"/>
                                            <label for="inlineCheckbox1">Read</label>
                                        </div>
                                </div>

                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline guj">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox23" name="guj_array[]" value="3"/>
                                            <label for="inlineCheckbox1">Write</label>
                                        </div>
                                </div>

                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline guj">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox23" name="guj_array[]" value="4"/>
                                            <label for="inlineCheckbox1">Speak</label>
                                        </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <h1>Technologies Know</h1>
                            <br>

                            <div class="row">
                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="programinglangphp" name="programinglangphp"/>
                                            <label for="inlineCheckbox1">Php</label>
                                        </div>
                                </div>
                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline php">
                                            <input class="form-check-input" type="radio" id="phpbiginerdata" name="phpbiginer" value="1"/>
                                            <label for="inlineCheckbox1">Biginer</label>
                                        </div>
                                </div>

                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline php">
                                            <input class="form-check-input" type="radio" id="phpbiginerdata" name="phpbiginer" value="2"/>
                                            <label for="inlineCheckbox1">Mideator</label>
                                        </div>
                                </div>

                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline php">
                                            <input class="form-check-input" type="radio" id="phpbiginerdata" name="phpbiginer" value="3"/>
                                            <label for="inlineCheckbox1">Expert</label>
                                        </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="programinglangmysql" name="programinglangmysql"/>
                                            <label for="inlineCheckbox1">Mysql</label>
                                        </div>
                                </div>
                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline mysql">
                                            <input class="form-check-input" type="radio" id="mysqlbiginerdata1" name="mysqlbiginer" value="1"/>
                                            <label for="inlineCheckbox1">Biginer</label>
                                        </div>
                                </div>

                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline mysql">
                                            <input class="form-check-input" type="radio" id="mysqlbiginerdata2" name="mysqlbiginer" value="2"/>
                                            <label for="inlineCheckbox1">Mideator</label>
                                        </div>
                                </div>

                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline mysql">
                                            <input class="form-check-input" type="radio" id="mysqlbiginerdata3" name="mysqlbiginer" value="3"/>
                                            <label for="inlineCheckbox1">Expert</label>
                                        </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="programinglanglaravel" name="programinglanglaravel"/>
                                            <label for="inlineCheckbox1">Laravel</label>
                                        </div>
                                </div>
                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline laravel">
                                            <input class="form-check-input" type="radio" id="laravelbiginerdata1" name="laravelbiginer" value="1"/>
                                            <label for="inlineCheckbox1">Biginer</label>
                                        </div>
                                </div>

                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline laravel">
                                            <input class="form-check-input" type="radio" id="laravelbiginerdata1" name="laravelbiginer" value="2"/>
                                            <label for="inlineCheckbox1">Mideator</label>
                                        </div>
                                </div>

                                <div class="col-lg-3">
                                        <div class="form-check form-check-inline laravel">
                                            <input class="form-check-input" type="radio" id="laravelbiginerdata1" name="laravelbiginer" value="3"/>
                                            <label for="inlineCheckbox1">Expert</label>
                                        </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <h1>Reference Contact</h1>
                            <br>

                            <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="name">Name *</label>
                                            <input id="reference_name" name="reference_name" type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="email">Contact Number *</label>
                                            <input id="contact_number" name="contact_number" type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="email">Relation *</label>
                                            <input id="reference_relation" name="reference_relation" type="text" class="form-control">
                                        </div>
                                    </div>

                                </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <h1>Prefernces</h1>
                            <br>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="name">Notice Period *</label>
                                            <input id="notice_period" name="notice_period" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="email">Expacted CTC *</label>
                                            <input id="expacted_ctc" name="expacted_ctc" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="email">Current CTC *</label>
                                            <input id="current_ctc" name="current_ctc" type="text" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="name">Prefered Location *</label>
                                            <select class="form-control m-b" name="prefered_locations">
                                                <option value="1">Surat</option>
                                                <option value="2">Ahemdabad</option>
                                                <option value="3">Pune</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                    <div class="form-group">
                                            <label for="name">Department *</label>
                                            <select class="form-control m-b" name="department">
                                                <option value="1">Designer</option>
                                                <option value="2">Developer</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                        </div>
                    </div>
                </div>
            </div>


            <center>
            <button type="submit" id="send_form" class="btn btn-primary block full-width-new m-b">Add</button>
            </center>
            </form>
        </div>

    </div>
</div>
    <!-- Footer link -->
    @include('Admin.template.footerlink')

</body>
</html>


<script type="text/javascript">



inlineCheckbox1
$( document ).ready(function() {
    $('.eng input').prop("disabled", true);
    $('.hin input').prop("disabled", true);
    $('.guj input').prop("disabled", true);
    $('.php input').prop("disabled", true);
    $('.mysql input').prop("disabled", true);
    $('.laravel input').prop("disabled", true);
});



    $('#inlineCheckbox1').change(function() {
        if($(this).is(":checked")) {
            $('.eng input').prop("disabled", false);
            }
        else{
            $('.eng input').prop("checked", false);
            $('.eng input').prop("disabled", true);
            }
    });


    $('#inlineCheckbox11').change(function() {
        if($(this).is(":checked")) {
            $('.hin input').prop("disabled", false);
            }
        else{
            $('.hin input').prop("checked", false);
            $('.hin input').prop("disabled", true);
            }
    });


    $('#inlineCheckbox13').change(function() {
        if($(this).is(":checked")) {
            $('.guj input').prop("disabled", false);
            }
        else{
            $('.guj input').prop("checked", false);
            $('.guj input').prop("disabled", true);
            }
    });


    $('#programinglangphp').change(function() {
        if($(this).is(":checked")) {
            $('.php input').prop("disabled", false);
            }
        else{
            $('.php input').prop("checked", false);
            $('.php input').prop("disabled", true);
            }
    });


    $('#programinglangmysql').change(function() {
        if($(this).is(":checked")) {
            $('.mysql input').prop("disabled", false);
            }
        else{
            $('.mysql input').prop("checked", false);
            $('.mysql input').prop("disabled", true);
            }
    });

    $('#programinglanglaravel').change(function() {
        if($(this).is(":checked")) {
            $('.laravel input').prop("disabled", false);
            }
        else{
            $('.laravel input').prop("checked", false);
            $('.laravel input').prop("disabled", true);
            }
    });

    

var room = 1;
function education_fields() {

    room++;
    var objTo = document.getElementById('education_fields')
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "row removeclass"+room);
	var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class="col-lg-2"><div class="form-group"><input id="company_name'+room+'" name="compnay_name[]" type="text"  class="form-control" autocomplete="off" placeholder="Compnay Name"></div></div><div class="col-lg-2"><div class="form-group"><input id="designation'+room+'" name="designation[]" type="text"  class="form-control" autocomplete="off" placeholder="designation"></div></div><div class="col-lg-2"><div class="form-group"><input id="fromdate'+room+'" name="fromdate[]" type="date"  class="form-control" autocomplete="off" ></div></div><div class="col-lg-2"><div class="form-group"><input id="todate'+room+'" name="todate[]" type="date"  class="form-control" autocomplete="off" ></div></div><div class="col-lg-2"><div class="input-group-btn"><button class="btn btn-danger" type="button"  onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div>';

    objTo.appendChild(divtest)
}
   function remove_education_fields(rid) {
	   $('.removeclass'+rid).remove();
   }

   jQuery.validator.addMethod("zipcode", function(value, element) {
  return this.optional(element) || /^\d{6}(?:-\d{5})?$/.test(value);
}, "Please provide a valid zipcode.");

    $("#applicationform").validate({

        rules: {
            first_name: {
                required: true
            },
            last_name: {
                required: true
            },
            email:{
                required: true,
                email: true
            },
            designationn:{
                required: true
            },
            address1:{
                required: true
            },
            address2:{
                required: true
            },
            phone_number:{
                required: true
            },
            state:{
                required: true
            },
            city:{
                required: true
            },
            relationship_status:{
                required: true
            },
            date_of_birth:{
                required: true
            },
            zip_code:{
                required: true,
                zipcode:true
            },
            ssc_name_of_board:{
                required: true
            },
            ssc_passing_year:{
                required: true
            },
            ssc_passing_percentage:{
                required: true
            },
            hsc_name_of_board:{
                required: true
            },
            hsc_passing_year:{
                required: true
            },
            hsc_passing_percentage:{
                required: true
            }
        },
        messages: {
            first_name: {
                required: "Please enter first name",
            },
            last_name: {
                required: "Please enter last name"
            },
            email:{
                required: "Please enter mail id",
                extension: "Please enter valid mail id"
            },
            designationn: {
                required: "Please enter designation"
            },
            address1: {
                required: "Please enter first address"
            },
            address1: {
                required: "Please enter second address"
            },
            phone_number:{
                required: "Please enter phone number here",
            },
            state:{
                required: "Please select state"
            },
            city:{
                required: "Please select city"
            },
            relationship_status:{
                required: "Please select relationship here"
            },
            date_of_birth:{
                require: "Please select dob"
            },
            zip_code:{
                required: "Please select zip code"
            },
            ssc_name_of_board:{
                required: "Please enter ssc board name"
            },
            ssc_passing_year:{
                required: "Please enter ssc passing year"
            },
            ssc_passing_percentage:{
                required: "Please enter hsc percentage"
            },
            hsc_name_of_board:{
                required: "Please enter hsc board name"
            },
            hsc_passing_year:{
                required: "Please enter ssc passing year"
            },
            hsc_passing_percentage:{
                required: "Please enter hsc percentage"
            }

        },
        submitHandler: function(form){

            $.ajax({
            url: '{{ url("addapplication") }}',
            headers: {
                    'X-CSRF-TOKEN': "{{csrf_token()}}"
            },
	        type: "POST",
	        data: $("#applicationform").serialize(),
	        success: function(response) {
                console.log(response);
                if (response==1)
                window.location = "{{url('/')}}";
	        }
      });
    }
});

</script>
