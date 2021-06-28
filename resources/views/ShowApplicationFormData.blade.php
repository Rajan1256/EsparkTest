<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('PROJECT_NAME')}} | Dashboard</title>
    @include('Admin.template.headerlink')

</head>

<body>
    <div id="wrapper">
      
        <div class="gray-bg">

            <div class="wrapper wrapper-content">
                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>Job Application detials</h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <a href="{{ url('addjobapplication') }}" class="btn btn-success">Add</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>User Name</th>
                                                    <th>Designation</th>
                                                    <th>email</th>
                                                    <th>Phone Number</th>
                                                    <th>Zip Code</th>
                                                    <th>Date of Birth</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($getjobdata as $rw)
                                            <tr>
                                            <td>{{$rw->first_name.' '.$rw->last_name}}</td>
                                            <td>{{$rw->designation}}</td>
                                            <td>{{$rw->email}}</td>
                                            <td>{{$rw->phone_number}}</td>
                                            <td>{{$rw->zip_code}}</td>
                                            <td>{{$rw->date_of_birth}}</td>
                                            @php
                                            $uredit = url('editapplication/' . $rw->id );
                                            $urview = url('viewapplication/' . $rw->id );
                                            $urremove = url('removeapplication/' . $rw->id );
                                            @endphp
                                            <td>
                                            <a href="{{$urview}}" class="btn btn-warning">View</a>
                                            <a href="{{$uredit}}" class="btn btn-primary">Edit</a>
                                            <a href="{{$urremove}}" class="btn btn-danger">Remove</button></td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('Admin.template.footerlink')

</body>
</html>
