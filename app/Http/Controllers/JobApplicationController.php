<?php

namespace App\Http\Controllers;

use App\EducationDetails;
use App\JobApplication;
use App\WordExperience;
use DB;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    public function index()
    {
        return view('ApplicationForm');
    }

    public function showdata()
    {
        $getjobdata = JobApplication::get();
        return view('ShowApplicationFormData')->with('getjobdata', $getjobdata);
    }

    public function editapplication($id)
    {
        $status = 0;
        $jobdata = JobApplication::with(['educationdetails', 'wordexperiences'])->where('id', $id)->first();
        return view('EditApplicationFormData')->with(['jobdata' => $jobdata, 'status' => $status]);
    }

    public function removeapplication($id)
    {
        JobApplication::where('id', $id)->delete();
        return redirect('/');
    }

    public function viewapplication($id)
    {
        $status = 1;
        $jobdata = JobApplication::with(['educationdetails', 'wordexperiences'])->where('id', $id)->first();
        return view('EditApplicationFormData')->with(['jobdata' => $jobdata, 'status' => $status]);
    }
    public function addapplication(Request $request)
    {
        //return $request->all();
        $ars = [];
        if ($request->programinglangphp == "") {
            $vr1 = ['programinglangphp' => 0, 'phpbiginer' => 0];
        } else {
            $vr1 = ['programinglangmysql' => 1, 'phpbiginer' => $request->phpbiginer];
        }
        array_push($ars, $vr1);
        if ($request->programinglangmysql == "") {
            $vr2 = ['programinglangmysql' => 0, 'mysqlbiginerdata1' => 0];
        } else {
            $vr2 = ['programinglangmysql' => 1, 'mysqlbiginerdata1' => $request->mysqlbiginerdata1];
        }
        array_push($ars, $vr2);

        if ($request->programinglanglaravel == "") {
            $vr3 = ['programinglanglaravel' => 0, 'laravelbiginerdata1' => 0];
        } else {
            $vr3 = ['programinglanglaravel' => 1, 'laravelbiginerdata1' => $request->laravelbiginerdata1];
        }
        array_push($ars, $vr3);

        $application_array = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'designation' => $request->designationn,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'phone_number' => $request->phone_number,
            'city' => $request->city,
            'state' => $request->state,
            'gender' => $request->gender,
            'zip_code' => $request->zip_code,
            'relationship_status' => $request->relationship_status,
            'date_of_birth' => $request->date_of_birth,
            'language' => json_encode([$request->eng_array != "" ? $request->eng_array : [], $request->Hin_array != "" ? $request->Hin_array : [], $request->guj_array != "" ? $request->guj_array : []]),
            'technologies' => json_encode($ars),
            'reference_name' => $request->reference_name,
            'reference_contacts' => $request->contact_number,
            'reference_relation' => $request->reference_relation,
            'prefered_locations' => $request->prefered_locations,
            'notice_period' => $request->notice_period,
            'expacted_ctc' => $request->expacted_ctc,
            'current_ctc' => $request->current_ctc,
            'department' => $request->department,
        ];
        JobApplication::insert($application_array);
        $id = DB::getPdo()->lastInsertId();
        $educational_array = [
            'job_application_id' => $id,
            'ssc_name_of_board' => $request->ssc_name_of_board,
            'ssc_passing_year' => $request->ssc_passing_year,
            'ssc_percentage' => $request->ssc_passing_percentage,
            'hsc_name_of_board' => $request->hsc_name_of_board,
            'hsc_passing_year' => $request->hsc_passing_year,
            'hsc_percentage' => $request->hsc_passing_percentage,
            'beachelor_course_name' => $request->beachelor_course_name,
            'beachelor_university' => $request->beachelor_university,
            'beachelor_passing_year' => $request->beachelor_passing_year,
            'beachelor_percentage' => $request->beachelor_percentage,
            'master_course_name' => $request->master_course_name,
            'master_university' => $request->master_university,
            'master_passing_year' => $request->master_passing_year,
            'master_percentage' => $request->master_percentage,
        ];
        EducationDetails::insert($educational_array);

        $word_array = [
            'job_application_id' => $id,
            'company_name' => json_encode($request->compnay_name),
            'designation' => json_encode($request->designation),
            'from_date' => json_encode($request->fromdate),
            'to_date' => json_encode($request->todate),
        ];
        WordExperience::insert($word_array);
        return 1;
    }

    public function updateapplication(Request $request)
    {
        //return $request->all();
        $ars = [];
        if ($request->programinglangphp == "") {
            $vr1 = ['programinglangphp' => 0, 'phpbiginer' => 0];
        } else {
            $vr1 = ['programinglangmysql' => 1, 'phpbiginer' => $request->phpbiginer];
        }
        array_push($ars, $vr1);
        if ($request->programinglangmysql == "") {
            $vr2 = ['programinglangmysql' => 0, 'mysqlbiginerdata1' => 0];
        } else {
            $vr2 = ['programinglangmysql' => 1, 'mysqlbiginerdata1' => $request->mysqlbiginerdata1];
        }
        array_push($ars, $vr2);

        if ($request->programinglanglaravel == "") {
            $vr3 = ['programinglanglaravel' => 0, 'laravelbiginerdata1' => 0];
        } else {
            $vr3 = ['programinglanglaravel' => 1, 'laravelbiginerdata1' => $request->laravelbiginerdata1];
        }
        array_push($ars, $vr3);

        $application_array = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'designation' => $request->designationn,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'phone_number' => $request->phone_number,
            'city' => $request->city,
            'state' => $request->state,
            'gender' => $request->gender,
            'zip_code' => $request->zip_code,
            'relationship_status' => $request->relationship_status,
            'date_of_birth' => $request->date_of_birth,
            'language' => json_encode([$request->eng_array != "" ? $request->eng_array : [], $request->Hin_array != "" ? $request->Hin_array : [], $request->guj_array != "" ? $request->guj_array : []]),
            'technologies' => json_encode($ars),
            'reference_name' => $request->reference_name,
            'reference_contacts' => $request->contact_number,
            'reference_relation' => $request->reference_relation,
            'prefered_locations' => $request->prefered_locations,
            'notice_period' => $request->notice_period,
            'expacted_ctc' => $request->expacted_ctc,
            'current_ctc' => $request->current_ctc,
            'department' => $request->department,
        ];
        JobApplication::where('id', $request->id)->update($application_array);
        $educational_array = [
            'ssc_name_of_board' => $request->ssc_name_of_board,
            'ssc_passing_year' => $request->ssc_passing_year,
            'ssc_percentage' => $request->ssc_passing_percentage,
            'hsc_name_of_board' => $request->hsc_name_of_board,
            'hsc_passing_year' => $request->hsc_passing_year,
            'hsc_percentage' => $request->hsc_passing_percentage,
            'beachelor_course_name' => $request->beachelor_course_name,
            'beachelor_university' => $request->beachelor_university,
            'beachelor_passing_year' => $request->beachelor_passing_year,
            'beachelor_percentage' => $request->beachelor_percentage,
            'master_course_name' => $request->master_course_name,
            'master_university' => $request->master_university,
            'master_passing_year' => $request->master_passing_year,
            'master_percentage' => $request->master_percentage,
        ];
        EducationDetails::where('job_application_id', $request->id)->update($educational_array);

        $word_array = [
            'company_name' => json_encode($request->compnay_name),
            'designation' => json_encode($request->designation),
            'from_date' => json_encode($request->fromdate),
            'to_date' => json_encode($request->todate),
        ];
        WordExperience::where('job_application_id', $request->id)->update($word_array);
        return 1;
    }
}
