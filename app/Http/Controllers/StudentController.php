<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use domain\Facades\StudentFacade;

class StudentController extends ParentController
{


    public function index()
    {

        $response ['students'] = StudentFacade::all();

        return view ('pages.studentList.index')->with($response);
    }

    public function store(Request $request) 
    {

        StudentFacade::store($request->all ());
        return redirect()->back();

    }


    public function delete($student_id)
    {

        StudentFacade::delete($student_id);
        return redirect()->back();

    }

    public function statusUpdate($student_id)
    {

        StudentFacade::statusUpdate($student_id);
        return redirect()->back();

    }

    public function statusUpdateActive($student_id)
    {

        StudentFacade::statusUpdateActive($student_id);
        return redirect()->back();

    }

}
